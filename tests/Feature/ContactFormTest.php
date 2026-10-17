<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 正常な入力値
     */
    private function validInput(array $overrides = []): array
    {
        return array_merge([
            'name' => '山田 太郎',
            'company' => '株式会社テスト',
            'email' => 'taro@gmail.com',
            'subject' => 'coredx',
            'message' => '導入について相談したいです。',
            'agree' => '1',
        ], $overrides);
    }

    public function test_contact_page_is_displayed(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('CORE DX PORTALについて');
    }

    public function test_confirm_page_shows_input_values(): void
    {
        $this->post('/contact/confirm', $this->validInput())
            ->assertOk()
            ->assertSee('山田 太郎')
            ->assertSee('CORE DX PORTALについて');
    }

    public function test_confirm_requires_mandatory_fields(): void
    {
        $this->from('/contact')
            ->post('/contact/confirm', $this->validInput(['name' => '', 'agree' => null]))
            ->assertRedirect('/contact')
            ->assertSessionHasErrors(['name', 'agree']);
    }

    public function test_invalid_subject_is_rejected(): void
    {
        $this->from('/contact')
            ->post('/contact/confirm', $this->validInput(['subject' => 'hacked']))
            ->assertSessionHasErrors(['subject']);
    }

    public function test_honeypot_blocks_bots(): void
    {
        Mail::fake();

        $this->from('/contact')
            ->post('/contact/send', $this->validInput(['homepage' => 'https://spam.example']))
            ->assertSessionHasErrors(['homepage']);

        $this->assertDatabaseCount('contacts', 0);
        Mail::assertNothingSent();
    }

    public function test_send_saves_contact_and_sends_mails(): void
    {
        Mail::fake();
        config(['mail.contact_to' => 'info@coredesia.example']);

        $this->post('/contact/send', $this->validInput())
            ->assertOk()
            ->assertViewIs('contactThanks');

        $this->assertDatabaseHas('contacts', [
            'email' => 'taro@gmail.com',
            'subject' => 'coredx',
        ]);

        Mail::assertSent(ContactMail::class, fn ($mail) => $mail->hasTo('taro@gmail.com') && ! $mail->is_admin);
        Mail::assertSent(ContactMail::class, fn ($mail) => $mail->hasTo('info@coredesia.example') && $mail->is_admin && $mail->hasReplyTo('taro@gmail.com'));
    }

    public function test_send_revalidates_tampered_values(): void
    {
        Mail::fake();

        $this->from('/contact')
            ->post('/contact/send', $this->validInput(['subject' => 'hacked']))
            ->assertSessionHasErrors(['subject']);

        $this->assertDatabaseCount('contacts', 0);
    }

    public function test_contact_is_saved_even_if_mail_fails(): void
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('SMTP error'));

        $this->post('/contact/send', $this->validInput())
            ->assertOk()
            ->assertViewIs('contactThanks');

        $this->assertSame(1, Contact::count());
    }
}

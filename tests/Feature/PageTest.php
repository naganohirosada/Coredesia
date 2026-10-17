<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_top_page_uses_new_design(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('css/site.css', false)
            ->assertSee('CORE DX PORTAL')
            ->assertSee(route('contact'), false);
    }

    public function test_privacy_page_is_displayed(): void
    {
        $this->get('/privacy')
            ->assertOk()
            ->assertSee('プライバシーポリシー')
            ->assertSee('オーストラリア')
            ->assertSee('2026年10月17日');
    }

    public function test_contact_page_lists_rpo_subject(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('採用支援（RPO）について');
    }

    public function test_existing_pages_are_still_available(): void
    {
        foreach (['/about', '/services', '/services/core-dx-portal', '/company'] as $path) {
            $this->get($path)->assertOk();
        }
    }
}

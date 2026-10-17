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

    public function test_sub_pages_use_new_design(): void
    {
        foreach (['/about', '/services', '/services/core-dx-portal', '/company'] as $path) {
            $this->get($path)
                ->assertOk()
                ->assertSee('css/site.css', false);
        }
    }

    public function test_header_has_hamburger_menu(): void
    {
        foreach (['/', '/company'] as $path) {
            $this->get($path)
                ->assertSee('class="l-burger" aria-controls="l-nav" aria-expanded="false"', false)
                ->assertSee('id="l-nav"', false)
                ->assertSee('images/logo/coredesia-logo-color-on-dark.svg', false);
        }
    }

    public function test_services_page_lists_all_services(): void
    {
        $this->get('/services')
            ->assertSee('Webシステム開発・アプリケーション開発')
            ->assertSee('採用支援')
            ->assertDontSee('LAB PLAN');
    }

    public function test_coredx_page_shows_standard_price(): void
    {
        $this->get('/services/core-dx-portal')
            ->assertSee('30,000円／月')
            ->assertSee('200,000円');
    }

    public function test_company_page_hides_placeholders(): void
    {
        $this->get('/company')
            ->assertSee('バアウ・ハウス・カミング 2-1-c')
            ->assertSee('1995年（平成7年）2月16日')
            ->assertDontSee('[電話番号]')
            ->assertDontSee('[資本金]');
    }
}

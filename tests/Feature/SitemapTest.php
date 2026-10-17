<?php

namespace Tests\Feature;

use Tests\TestCase;

class SitemapTest extends TestCase
{
    public function test_sitemap_lists_public_pages(): void
    {
        config(['app.url' => 'https://coredesiainc.com']);
        $path = public_path('sitemap.xml');
        $original = file_exists($path) ? file_get_contents($path) : null;

        try {
            $this->artisan('sitemap:generate')->assertSuccessful();

            $xml = file_get_contents($path);
            $this->assertNotFalse(simplexml_load_string($xml));
            foreach (['/', '/about', '/services', '/services/core-dx-portal', '/company', '/contact', '/privacy'] as $p) {
                $this->assertStringContainsString('<loc>https://coredesiainc.com' . $p . '</loc>', $xml);
            }
            $this->assertStringNotContainsString('/login', $xml);
        } finally {
            // テストでリポジトリのファイルを書き換えたままにしない
            if ($original !== null) {
                file_put_contents($path, $original);
            }
        }
    }
}

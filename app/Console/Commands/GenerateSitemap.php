<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    /**
     * サイトマップに載せる公開ページ（ルート名 => 優先度）
     * ページを追加・非公開にしたときはここも更新する
     */
    private const PAGES = [
        'top' => '1.0',
        'about' => '0.8',
        'services' => '0.8',
        'services.coredx' => '0.8',
        'company' => '0.6',
        'contact' => '0.6',
        'privacy' => '0.3',
    ];

    public function handle(): int
    {
        $root = rtrim(config('app.url'), '/');
        $lastmod = now()->toDateString();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
        foreach (self::PAGES as $name => $priority) {
            $loc = $root . route($name, [], false);
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . htmlspecialchars($loc, ENT_XML1) . '</loc>' . PHP_EOL;
            $xml .= '    <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
            $xml .= '    <priority>' . $priority . '</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }
        $xml .= '</urlset>' . PHP_EOL;

        file_put_contents(public_path('sitemap.xml'), $xml);
        $this->info('sitemap.xml を生成しました（' . count(self::PAGES) . '件）');

        return self::SUCCESS;
    }
}

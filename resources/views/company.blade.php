@extends('layouts.frontend')

@section('title', '会社概要・代表挨拶')

@section('content')

<div class="company-page-wrapper">

    <section class="section-greeting py-5 overflow-hidden">
        <div class="accent-blur" style="top: 10%; right: -5%;"></div>
        <div class="container py-5 position-relative" style="z-index: 1;">
            <div class="row justify-content-center text-center text-md-start">
                <div class="col-lg-10" data-aos="fade-up">
                    <span class="section-title-en fw-bold mb-3 d-block">CEO MESSAGE</span>
                    <h2 class="fw-bold mb-5 display-5 text-shadow-sm">代表挨拶</h2>
                    <div class="fs-5 lh-lg text-dark">
                        <p class="mb-4 fw-bold text-info">
                            デジタルの力で、誰もが「冒険」を楽しめる世界を創りたい。
                        </p>
                        <p class="mb-4">
                            私は長年エンジニアとして、多くのシステム開発に携わってきました。その中で強く感じたのは、どんなに優れた技術も、そこに「想い」と「ワクワク」がなければ、真に価値のあるものは生まれないということです。
                        </p>
                        <p class="mb-4">
                            株式会社Coredesiaは、昭和16年から続く株式会社興亜の「ものづくりへの誠実さ」を血に引き、そこに現代のIT機動力を掛け合わせた新しい形のテックカンパニーです。
                        </p>
                        <p>
                            お客様の抱える課題の「芯（Core）」を捉え、共に未知なる可能性（Desia）へ向けて歩む。私たちは、あなたの最高の「冒険の仲間」であり続けることをお約束します。
                        </p>
                        <div class="mt-5 text-end" data-aos="fade-left" data-aos-delay="500">
                            <p class="mb-0 text-secondary">株式会社Coredesia 代表取締役</p>
                            <h3 class="fw-bold mt-1">長野 弘禎</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-profile py-5">
        <div class="accent-blur" style="bottom: 0%; left: -10%; background: var(--main-pink);"></div>
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5 text-center mb-5 mb-md-0" data-aos="fade-right">
                    <div class="profile-image-container">
                        <img src="{{ asset('images/ceo.jpg') }}" alt="長野 弘禎" class="profile-img img-fluid">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="ps-md-4">
                        <h3 class="fw-bold mb-0 display-6">長野 弘禎</h3>
                        <p class="text-secondary mb-4">Hiroyoshi Nagano / CEO & Full Stack Engineer</p>
                        
                        <div class="mb-4">
                            <h4 class="fs-6 fw-bold text-info border-bottom border-info border-2 d-inline-block pb-1 mb-3">Background</h4>
                            <p class="text-secondary lh-lg">
                                2018年よりエンジニアとしてのキャリアをスタート。大手企業の基幹システムから小規模なWebサービスまで、幅広い開発プロジェクトを経験。フリーランスとして独立後、技術のみならずビジネスの「芯」を捉える提案力を武器に数々のプロジェクトを成功に導く。<br><br>
                                2025年、株式会社興亜のグループ企業として株式会社Coredesiaを設立。エンジニア目線の「確かな品質」と、経営者目線の「スピード感」を両立させた開発体制を構築している。
                            </p>
                        </div>
                        
                        <div>
                            <h4 class="fs-6 fw-bold text-info border-bottom border-info border-2 d-inline-block pb-1 mb-3">Specialty</h4>
                            <p class="text-dark fw-medium">
                                <i class="bi bi-check2-circle text-info me-2"></i>Webシステム開発 (Laravel / Vue.js)<br>
                                <i class="bi bi-check2-circle text-info me-2"></i>クラウドインフラ構築 (AWS / Google Cloud)<br>
                                <i class="bi bi-check2-circle text-info me-2"></i>DX推進・ITコンサルティング
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-info py-5 bg-grid">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-title-en fw-bold mb-2 d-block">COMPANY PROFILE</span>
                <h2 class="fw-bold">会社概要</h2>
            </div>
            
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg mx-auto border border-light" style="max-width: 900px;" data-aos="fade-up">
                <table class="table table-borderless align-middle mb-0">
                    <tbody class="fs-6">
                        <tr class="border-bottom">
                            <th class="py-4 text-secondary w-25">会社名</th>
                            <td class="py-4 fw-bold text-dark">株式会社Coredesia（コアデシア）</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="py-4 text-secondary">設立</th>
                            <td class="py-4">2025年5月</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="py-4 text-secondary">代表取締役</th>
                            <td class="py-4">長野 弘禎</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="py-4 text-secondary">所在地</th>
                            <td class="py-4">
                                〒813-0017 福岡市東区香椎照葉6-2-51 <br>
                                <span class="text-muted">オーシャン＆フォレストタワーレジデンス EAST 3702号室</span>
                            </td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="py-4 text-secondary">親会社</th>
                            <td class="py-4">
                                <a href="https://www.ko-ua.co.jp/" target="_blank" class="fw-bold text-decoration-none text-info">株式会社興亜</a><br>
                                <span class="small text-muted">〒810-0041 福岡市東区筥松2丁目6番9号</span>
                            </td>
                        </tr>
                        <tr>
                            <th class="py-4 text-secondary">事業内容</th>
                            <td class="py-4">
                                <ul class="list-unstyled mb-0">
                                    <li>・Webシステム開発</li>
                                    <li>・アプリケーション開発</li>
                                    <li>・HP・LP制作・運用</li>
                                    <li>・ITコンサルティング</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
@endsection
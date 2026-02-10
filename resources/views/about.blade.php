@extends('layouts.frontend')

@section('title', 'Coredesiaについて')

@section('content')

<div class="about-wrapper">

    <section class="section-hero py-5 text-center bg-grid">
        <div class="orb orb-blue"></div>
        <div class="container py-5 position-relative">
            <span class="text-info fw-bold mb-3 d-block" style="letter-spacing: 0.3em;" data-aos="fade-down">MESSAGE</span>
            <p class="fs-4 lh-lg mb-0 text-dark mx-auto fw-medium text-shadow-sm" style="max-width: 850px;" data-aos="fade-up" data-aos-duration="1200">
                私たち <strong>Coredesia（コアデシア）</strong> は、<br>
                揺るぎない <strong>「芯」</strong> を持つ技術力と、自由な <strong>「冒険心」</strong> を掛け合わせ、<br><br>
                日本全国、そして世界という広大な舞台へ、<br>
                お客様のアイデアを加速させます。<br><br>
                あなたの <strong>「想い」</strong> に深く寄り添い、<br>
                共に新しい景色を見にいく最高のパートナーとして、歩み続けます。
            </p>
        </div>
    </section>

    <section class="section-backbone py-5 overflow-hidden border-top border-bottom border-white border-5">
        <div class="orb orb-pink" style="opacity: 0.2;"></div>
        <div class="container py-5 position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <span class="text-secondary fw-bold mb-3 d-block" style="letter-spacing: 0.2em;">STRONG BACKBONE</span>
                    <h2 class="fw-bold mb-5 display-6 border-start border-info border-5 ps-4">信頼の継承と、新たな冒険。</h2>
                    
                    <p class="fs-5 text-dark lh-lg mb-4">
                        昭和16年の創業以来、福岡の地で「ものづくり」の精神を磨き続けてきた<strong>株式会社興亜</strong>。その80年を超える歴史が、私たちの「芯」にあります。
                    </p>
                    
                    <p class="fs-5 text-dark lh-lg">
                        店舗デザインから注文住宅、そして精密な梱包資材まで。親会社が培ってきた「空間と形を創り出す」誠実なクラフトマンシップを、私たちはデジタルの領域における<strong>「芯（Core）」</strong>として受け継ぎました。<br><br>
                        伝統に裏打ちされた<strong>強固な経営基盤</strong>を土台に、スタートアップのような<strong>柔軟な機動力</strong>を掛け合わせる。伝統を守りつつ、ITという新たな海を共に渡るパートナーとして、お客様のニーズに全力で応えます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white bg-grid">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-5">
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                            <h3 class="fw-bold mb-4 fs-4 border-bottom pb-2">Philosophy</h3>
                            <p class="lead fw-bold text-info mb-3">「確かな技術で、心躍る未来を。」</p>
                            <p class="text-secondary lh-lg">
                                昭和16年から続く興亜グループの「誠実なものづくり」の精神。私たちはそのDNAを受け継ぎ、単にシステムを構築するのではなく、お客様の想いの「芯」を深く理解し、それを技術という装備で具現化します。関わるすべての人に、形を超えたワクワクを届けることが私たちの信念です。
                            </p>
                        </div>

                        <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                            <h3 class="fw-bold mb-4 fs-4 border-bottom pb-2">Mission & Vision</h3>
                            <div class="mb-4">
                                <span class="fw-bold text-dark d-block mb-1">Mission / 使命</span>
                                <p class="text-secondary">
                                    80年の信頼をバックボーンに、技術の力で挑戦者の「冒険」を成功に導く。
                                </p>
                            </div>
                            <div>
                                <span class="fw-bold text-dark d-block mb-1">Vision / 展望</span>
                                <p class="text-secondary">
                                    誰もが自由にアイデアを形にでき、伝統と革新が共鳴して笑顔が溢れるデジタル社会を創る。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
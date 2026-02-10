@extends('layouts.frontend')

@section('title', 'お問い合わせ - Contact')

@section('content')
<style>
    /* お問い合わせページのベース背景 */
    .contact-wrapper {
        background-color: #f8fafc;
        background-image: 
            linear-gradient(rgba(0, 210, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 210, 255, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
        position: relative;
        overflow: hidden;
    }

    /* 入力フォームのカード */
    .contact-form-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid #e2e8f0;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
    }

    /* 入力フィールドのカスタマイズ */
    .form-control, .form-select {
        border: 2px solid #e2e8f0;
        padding: 0.8rem 1.2rem;
        border-radius: 12px;
        transition: all 0.3s ease;
        background-color: #fcfdfe;
    }

    .form-control:focus, .form-select:focus {
        border-color: #00d2ff;
        box-shadow: 0 0 0 4px rgba(0, 210, 255, 0.1);
        background-color: #ffffff;
    }

    .form-label {
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    /* 必須ラベル */
    .badge-required {
        background-color: #ff758c;
        font-size: 0.7rem;
        padding: 0.3em 0.6em;
        margin-left: 0.5rem;
        vertical-align: middle;
    }

    /* 送信ボタン（前回のCTAボタンと統一だにぇ！） */
    .btn-submit {
        background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
        color: white;
        border: none;
        padding: 1rem 3rem;
        border-radius: 50px;
        font-weight: 800;
        letter-spacing: 0.1em;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(58, 123, 213, 0.3);
        opacity: 0.9;
    }

    /* 装飾用オーブ */
    .contact-orb {
        position: absolute;
        width: 500px;
        height: 500px;
        filter: blur(120px);
        z-index: 0;
        opacity: 0.1;
    }
</style>

<div class="contact-wrapper">
    <div class="contact-orb" style="background: #00d2ff; top: -100px; right: -200px;"></div>
    <div class="contact-orb" style="background: #ff758c; bottom: -100px; left: -200px;"></div>

    <section class="py-5 text-center position-relative" style="z-index: 1;">
        <div class="container py-5">
            <span class="text-info fw-bold mb-2 d-block" style="letter-spacing: 0.3em;" data-aos="fade-down">CONTACT</span>
            <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">お問い合わせ</h2>
            <p class="text-secondary mx-auto" style="max-width: 700px;" data-aos="fade-up" data-aos-delay="200">
                ビジネスの「芯」を形にする第一歩を、ここから始めましょう。<br>
                システム開発、サイト制作、ITに関するお悩みなど、お気軽にご相談ください。
            </p>
        </div>
    </section>

    <section class="pb-5 position-relative" style="z-index: 1;">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="contact-form-card p-4 p-md-5">
                        <form action="{{ route('contact.confirm') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label">お名前<span class="badge badge-required rounded-pill">必須</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="興亜 太郎" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="company" class="form-label">貴社名</label>
                                <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="株式会社〇〇" value="{{ old('company') }}">
                                @error('company')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">メールアドレス<span class="badge badge-required rounded-pill">必須</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@ko-a.co.jp" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="subject" class="form-label">お問い合わせ項目<span class="badge badge-required rounded-pill">必須</span></label>
                                <select class="form-select @error('subject') is-invalid @enderror" id="subject" name="subject">
                                    <option value="" selected disabled>選択してください</option>
                                    <option value="system" {{ old('subject') == 'system' ? 'selected' : '' }}>Webシステム・アプリ開発について</option>
                                    <option value="website" {{ old('subject') == 'website' ? 'selected' : '' }}>HP・LP制作について</option>
                                    <option value="consulting" {{ old('subject') == 'consulting' ? 'selected' : '' }}>ITコンサルティングについて</option>
                                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>その他のお問い合わせ</option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">お問い合わせ内容<span class="badge badge-required rounded-pill">必須</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6" placeholder="ご相談内容を自由にご記入ください。">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 text-center mt-4">
                                <p class="small text-secondary mb-3">
                                    送信前に<a href="/privacy" class="text-info text-decoration-none fw-bold">プライバシーポリシー</a>をご確認ください。
                                </p>
                                <div class="form-check d-inline-block text-start">
                                    <input class="form-check-input @error('agree') is-invalid @enderror" type="checkbox" name="agree" id="agree" value="1" {{ old('agree') ? 'checked' : '' }}>
                                    <label class="form-check-label small fw-bold" for="agree">
                                        同意して送信する
                                    </label>
                                    @error('agree')
                                        <div class="invalid-feedback fw-bold d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                                <div class="col-12 text-center mt-5">
                                    <button type="submit" class="btn btn-submit btn-lg shadow">
                                        内容を確認して送信 <i class="bi bi-send-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mt-5 text-center text-secondary" data-aos="fade-up">
                        <p class="small mb-0">お急ぎの場合は、親会社・株式会社興亜までお電話でも承ります。</p>
                        <p class="fw-bold fs-5 mt-2">TEL: <a href="tel:0926211194" class="text-dark text-decoration-none">092-621-1194</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
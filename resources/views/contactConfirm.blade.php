@extends('layouts.frontend')

@section('title', '入力内容の確認 - Contact Confirm')

@section('content')
<style>
    .confirm-wrapper {
        background-color: #f8fafc;
        background-image: 
            linear-gradient(rgba(0, 210, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 210, 255, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
        min-height: 80vh;
    }

    .confirm-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid #e2e8f0;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
    }

    /* 確認用ラベルのスタイル */
    .confirm-label {
        font-weight: 700;
        color: #64748b;
        font-size: 0.85rem;
        letter-spacing: 0.1em;
        margin-bottom: 0.5rem;
    }

    .confirm-value {
        font-size: 1.1rem;
        color: #1e293b;
        font-weight: 500;
        padding-left: 0.5rem;
        border-left: 3px solid #00d2ff;
        word-break: break-all;
    }

    /* ボタンのカスタマイズ */
    .btn-back {
        background: #f1f5f9;
        color: #475569;
        border: none;
        padding: 1rem 2rem;
        border-radius: 50px;
        font-weight: 700;
        transition: all 0.3s;
    }

    .btn-back:hover {
        background: #e2e8f0;
        color: #1e293b;
    }

    .btn-send {
        background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
        color: white;
        border: none;
        padding: 1rem 3rem;
        border-radius: 50px;
        font-weight: 800;
        letter-spacing: 0.1em;
        box-shadow: 0 10px 20px rgba(58, 123, 213, 0.2);
        transition: all 0.3s;
    }

    .btn-send:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(58, 123, 213, 0.4);
        opacity: 0.95;
    }
</style>

<div class="confirm-wrapper py-5">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-down">
            <span class="text-info fw-bold mb-2 d-block" style="letter-spacing: 0.3em;">CONFIRMATION</span>
            <h2 class="fw-bold display-6">入力内容の確認</h2>
            <p class="text-secondary mt-3">以下の内容で送信してもよろしいでしょうか？</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="confirm-card p-4 p-md-5">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        @foreach($inputs as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach

                        <div class="row g-5">
                            <div class="col-md-6">
                                <div class="confirm-label">お名前</div>
                                <div class="confirm-value">{{ $inputs['name'] }}</div>
                            </div>

                            <div class="col-md-6">
                                <div class="confirm-label">貴社名</div>
                                <div class="confirm-value">{{ $inputs['company'] ?? '（未入力）' }}</div>
                            </div>

                            <div class="col-12">
                                <div class="confirm-label">メールアドレス</div>
                                <div class="confirm-value">{{ $inputs['email'] }}</div>
                            </div>

                            <div class="col-12">
                                <div class="confirm-label">お問い合わせ項目</div>
                                <div class="confirm-value">
                                    @switch($inputs['subject'])
                                        @case('system') Webシステム・アプリ開発について @break
                                        @case('website') HP・LP制作について @break
                                        @case('consulting') ITコンサルティングについて @break
                                        @default その他のお問い合わせ
                                    @endswitch
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="confirm-label">お問い合わせ内容</div>
                                <div class="confirm-value" style="white-space: pre-wrap;">{{ $inputs['message'] }}</div>
                            </div>
                        </div>

                        <div class="row mt-5 pt-4 border-top">
                            <div class="col-6 col-md-4">
                                <button type="button" onclick="history.back()" class="btn btn-back w-100">
                                    <i class="bi bi-chevron-left"></i> 修正する
                                </button>
                            </div>
                            <div class="col-6 col-md-8 text-end">
                                <button type="submit" class="btn btn-send px-md-5">
                                    この内容で送信する <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
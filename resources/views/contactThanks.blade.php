@extends('layouts.frontend')

@section('title', '送信完了 - Thank You')

@section('content')
<style>
    .thanks-wrapper {
        background-color: #f8fafc;
        background-image: 
            linear-gradient(rgba(0, 210, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 210, 255, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
        min-height: 85vh;
        display: flex;
        align-items: center;
    }

    .thanks-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid #e2e8f0;
        border-radius: 30px;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.05);
        padding: 4rem 2rem;
    }

    /* 成功アイコンのアニメーション */
    .success-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
        color: white;
        font-size: 3.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        box-shadow: 0 15px 30px rgba(58, 123, 213, 0.3);
        animation: pulse-blue 2s infinite;
    }

    @keyframes pulse-blue {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 210, 255, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 20px rgba(0, 210, 255, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 210, 255, 0); }
    }

    .btn-home {
        background: #1e293b;
        color: white;
        border: none;
        padding: 1rem 3rem;
        border-radius: 50px;
        font-weight: 700;
        letter-spacing: 0.1em;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-home:hover {
        background: #0f172a;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        color: #00d2ff;
    }
</style>

<div class="thanks-wrapper">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7" data-aos="zoom-in">
                <div class="thanks-card">
                    <div class="success-icon">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    
                    <h2 class="fw-bold display-6 mb-3">Message Sent!</h2>
                    <p class="text-info fw-bold mb-4" style="letter-spacing: 0.2em;">お問い合わせを受け付けました</p>
                    
                    <div class="text-secondary lh-lg mb-5">
                        <p>この度は株式会社Coredesiaへお問い合わせいただき、<br class="d-none d-md-block">誠にありがとうございます。</p>
                        <p class="small">ご入力いただいたメールアドレス宛に、確認メールを送信いたしました。<br>
                        内容を確認の上、3営業日以内に担当者より折り返しご連絡させていただきます。</p>
                    </div>

                    <div class="pt-3">
                        <a href="/" class="btn btn-home">
                            <i class="bi bi-house-door me-2"></i> トップページへ戻る
                        </a>
                    </div>
                </div>
                
                <div class="mt-5 text-secondary small" data-aos="fade-up" data-aos-delay="400">
                    <p>※しばらく経ってもメールが届かない場合は、迷惑メールフォルダをご確認いただくか、<br class="d-none d-md-block">
                    お手数ですが再度お問い合わせくださいますようお願い申し上げます。</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
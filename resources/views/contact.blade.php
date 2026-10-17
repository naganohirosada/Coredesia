@extends('layouts.site')

@section('title', 'お問い合わせ｜株式会社Coredesia')
@section('description', 'システム開発、CORE DX PORTALの導入、HP・LP制作、ITコンサルティング、採用支援のご相談は、株式会社Coredesiaのお問い合わせフォームから。')

@section('content')
@include('partials.sub-hero', ['en' => 'Contact', 'title' => 'お問い合わせ', 'crumbs' => ['お問い合わせ' => null]])

<section style="max-width: 960px; margin: 0 auto; padding: 88px 32px 104px">
    <ol class="l-steps" aria-label="入力の手順" style="margin: 0 0 56px; padding: 0; list-style: none; font-size: 14px; text-align: center">
        <li aria-current="step" style="padding: 14px; background: #E9C77B; color: #0F1A3D; font-weight: 700">1　入力</li>
        <li style="padding: 14px; border: 1px solid rgba(233,199,123,0.45); color: #C5C9E0">2　確認</li>
        <li style="padding: 14px; border: 1px solid rgba(233,199,123,0.45); color: #C5C9E0">3　完了</li>
    </ol>
    <p style="margin: 0 0 40px; font-size: 15px; line-height: 2.1; color: #C5C9E0">システム開発、CORE DX PORTALの導入、HP制作などのご相談は、以下のフォームからお送りください。内容を確認のうえ、担当者よりご連絡します。</p>

    @if ($errors->any())
        <div role="alert" style="margin: 0 0 32px; padding: 16px 20px; border: 1px solid #FF8A8A; color: #FFB4B4; font-size: 14px">入力内容に誤りがあります。各項目のメッセージをご確認ください。</div>
    @endif

    <form action="{{ route('contact.confirm') }}" method="POST" novalidate style="border-top: 1px solid rgba(233,199,123,0.45)">
        @csrf
        {{-- スパム対策のハニーポット（人には表示しない） --}}
        <div class="l-hp" aria-hidden="true">
            <label for="homepage">ホームページ</label>
            <input type="text" id="homepage" name="homepage" tabindex="-1" autocomplete="off" value="">
        </div>

        <fieldset class="l-row" style="margin: 0; border: 0; border-bottom: 1px solid rgba(233,199,123,0.25)">
            <legend style="float: left; padding: 0; font-weight: 700">お問い合わせ項目<span class="l-req">必須</span></legend>
            <div>
                <div class="l-radios" style="font-size: 15px">
                    @foreach (\App\Models\Contact::SUBJECTS as $value => $label)
                        <label style="display: flex; gap: 10px; align-items: center; min-height: 44px">
                            <input type="radio" name="subject" value="{{ $value }}" @checked(old('subject') === $value) style="width: 18px; height: 18px; accent-color: #E9C77B">{{ $label }}
                        </label>
                    @endforeach
                </div>
                @error('subject')<p class="l-err">{{ $message }}</p>@enderror
            </div>
        </fieldset>

        <div class="l-row">
            <label for="company" style="font-weight: 700; padding-top: 14px">会社名<span class="l-opt">任意</span></label>
            <div>
                <input id="company" name="company" class="l-in @error('company') is-invalid @enderror" type="text" value="{{ old('company') }}" placeholder="例）株式会社〇〇" autocomplete="organization">
                @error('company')<p class="l-err">{{ $message }}</p>@enderror
            </div>
        </div>
        <div class="l-row">
            <label for="name" style="font-weight: 700; padding-top: 14px">お名前<span class="l-req">必須</span></label>
            <div>
                <input id="name" name="name" class="l-in @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" placeholder="例）山田 太郎" autocomplete="name" required>
                @error('name')<p class="l-err">{{ $message }}</p>@enderror
            </div>
        </div>
        <div class="l-row">
            <label for="email" style="font-weight: 700; padding-top: 14px">メールアドレス<span class="l-req">必須</span></label>
            <div>
                <input id="email" name="email" class="l-in @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" placeholder="例）info@example.com" autocomplete="email" required>
                @error('email')<p class="l-err">{{ $message }}</p>@enderror
            </div>
        </div>
        <div class="l-row">
            <label for="message" style="font-weight: 700; padding-top: 14px">お問い合わせ内容<span class="l-req">必須</span></label>
            <div>
                <textarea id="message" name="message" class="l-in @error('message') is-invalid @enderror" rows="8" maxlength="2000" placeholder="ご相談内容、ご希望の時期、ご予算感などをご記入ください" required>{{ old('message') }}</textarea>
                <p style="margin: 8px 0 0; font-size: 12px; color: #C5C9E0; text-align: right">2,000文字以内</p>
                @error('message')<p class="l-err">{{ $message }}</p>@enderror
            </div>
        </div>

        <div style="padding: 40px 0 0; text-align: center">
            <label style="display: inline-flex; gap: 12px; align-items: center; font-size: 15px; min-height: 44px">
                <input type="checkbox" name="agree" value="1" @checked(old('agree')) required style="width: 20px; height: 20px; accent-color: #E9C77B">
                <span><a href="{{ route('privacy') }}" target="_blank" rel="noopener" style="color: #E9C77B">プライバシーポリシー</a>に同意する</span>
            </label>
            @error('agree')<p class="l-err">{{ $message }}</p>@enderror
            @error('homepage')<p class="l-err">{{ $message }}</p>@enderror
            <div style="margin-top: 32px">
                <button type="submit" class="l-btn">入力内容を確認する</button>
            </div>
        </div>
    </form>
</section>
@endsection

<div style="white-space: pre-wrap; font-family: sans-serif; line-height: 1.6;">
    【重要】Webサイトより新しいお問い合わせが届きました

    株式会社Coredesia 運営担当者様

    公式サイトのフォームより、以下の内容でお問い合わせがありました。
    内容を確認の上、速やかに対応をお願いしますにぇ！🌸

    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
    ■ お問い合わせ内容
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

    【お名前】
    {{ $inputs['name'] }} 様

    【貴社名】
    {{ $inputs['company'] ?? '個人・未入力' }}

    【メールアドレス】
    {{ $inputs['email'] }}

    【お問い合わせ項目】
    {{ \App\Models\Contact::subjectLabel($inputs['subject']) }}

    【メッセージ内容】
    {{ $inputs['message'] }}

    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

    送信日時：{{ date('Y/m/d H:i:s') }}
    送信元IP：{{ request()->ip() }}

    ---
    株式会社Coredesia 管理システム
</div>
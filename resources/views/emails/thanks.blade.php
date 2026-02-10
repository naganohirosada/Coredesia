{{ $inputs['company'] ?? 'なし' }}
{{ $inputs['name'] }} 様

株式会社Coredesia（コアデシア）へのお問い合わせ、
誠にありがとうございます。

以下の内容で承りました。
内容を確認の上、担当者より折り返しご連絡させていただきます。

---
■お名前：{{ $inputs['name'] }}
■貴社名：{{ $inputs['company'] ?? 'なし' }}
■メールアドレス：{{ $inputs['email'] }}
■お問い合わせ項目：{{ $inputs['subject'] }}
■お問い合わせ内容：
{{ $inputs['message'] }}
---

※本メールはシステムによる自動返信です。

━━━━━━━━━━━━━━━━━━━━━
株式会社Coredesia
URL: https://coredesia.jp
━━━━━━━━━━━━━━━━━━━━━
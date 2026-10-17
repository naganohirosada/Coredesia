@extends('layouts.site')

@section('title', 'CORE DX PORTAL Cloud Standard｜株式会社Coredesia')
@section('description', '勤怠・タスク・稟議・請求・入金消込・会計まで、中小企業・建設業のバックオフィスを一元管理するクラウドサービス「CORE DX PORTAL Cloud Standard」。')

@section('content')
@include('partials.sub-hero', ['en' => 'Product', 'title' => 'CORE DX PORTAL', 'crumbs' => ['CORE DX PORTAL' => null]])

<section style="max-width: 1280px; margin: 0 auto; padding: 104px 32px 64px">
<div class="l-two" style="align-items: center">
<div>
<h2 style="margin: 0 0 28px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 38px; line-height: 1.7">散らばっていた業務を、<br>ひとつの場所へ。</h2>
<p style="margin: 0 0 28px; font-size: 16px; line-height: 2.1; color: #C5C9E0">勤怠管理、プロジェクト・タスク管理、稟議・経費精算、インボイス対応の請求書発行、入金消込・債権管理、自動仕訳・財務諸表の出力まで。中小企業、とくに建設・施工事業者のバックオフィス業務を、1つのデータベースと1つの画面で管理できるクラウドサービスです。</p>
<div style="display: flex; gap: 16px; flex-wrap: wrap">
<a href="#price" style="text-decoration: none; background: #E9C77B; color: #0F1A3D; font-weight: 700; padding: 16px 28px; border-radius: 999px">料金を見る</a>
<a href="{{ route('contact') }}" style="text-decoration: none; border: 1px solid #F3F1EA; padding: 16px 28px; border-radius: 999px">導入のご相談</a>
</div>
</div>
<div style="border: 1px solid rgba(233,199,123,0.6); padding: 12px; background: rgba(15,26,61,0.6)">
<img src="{{ asset('images/screenshot_dashboard.png') }}" alt="統合ダッシュボード画面。勤怠打刻、進行中のタスク、今月の稼働時間、承認待ちワークフローを表示" style="width: 100%; display: block">
</div>
</div>
<div class="l-three" style="margin-top: 72px">
<div style="border-top: 1px solid rgba(233,199,123,0.45); padding-top: 20px"><p style="margin: 0 0 8px; font-weight: 700; font-size: 18px">すべての導入企業に同じ標準機能</p><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">既製のパッケージとして、同じ機能を同じ料金体系で提供します。</p></div>
<div style="border-top: 1px solid rgba(233,199,123,0.45); padding-top: 20px"><p style="margin: 0 0 8px; font-weight: 700; font-size: 18px">ブラウザだけで利用できる</p><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">導入企業側でのサーバー設置やソフトのインストールは不要です。</p></div>
<div style="border-top: 1px solid rgba(233,199,123,0.45); padding-top: 20px"><p style="margin: 0 0 8px; font-weight: 700; font-size: 18px">法令改正にも追加費用なし</p><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">機能改善やインボイス制度などの法令改正への対応は、全契約者に追加費用なしで提供します。</p></div>
</div>
</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 64px 32px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Features</p>
<h2 style="margin: 0 0 40px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">標準機能</h2>
<div class="l-feat">
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">勤怠・労務管理</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">ワンクリックの出退勤・休憩打刻、実労働時間の自動集計、個人と全社平均の週別グラフ、月次勤怠集計、有給休暇の付与・申請・承認・残日数管理。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">プロジェクト・タスク管理</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">工事・現場単位の案件管理、カンバン方式のタスクボード、期日管理、作業ログ（現場日報）の入力。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">稟議・経費精算ワークフロー</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">経費精算・購入申請などの申請作成、承認者向けの未決裁一覧、申請履歴とステータスの追跡。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">顧客・取引先管理</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">顧客企業の基本情報・連絡先の管理、案件との紐づけ、取引履歴の全社共有。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">請求・売上管理</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">登録番号や税率ごとの区分記載に対応した請求書の作成、PDF出力・印刷、下書き／発行済などのステータス管理。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">入金消込・債権管理</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">請求書ごとの入金登録による売掛金の消込（一部入金に対応）、売掛金の年齢調べ、未回収債権の一覧表示。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">会計・財務</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">請求・入金・経費精算に連動した自動仕訳、出納帳、総勘定元帳、合計残高試算表、貸借対照表・損益計算書の自動作成。</p></article>
<article style="border: 1px solid rgba(233,199,123,0.45); padding: 28px; background: rgba(30,42,107,0.35)"><h3 style="margin: 0 0 12px; font-size: 18px">社員アカウント管理</h3><p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">社員の追加、管理者／マネージャー／一般社員の権限設定、有給付与日数の設定、契約ID数の上限管理。</p></article>
</div>
</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 64px 32px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Before / After</p>
<h2 style="margin: 0 0 40px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">導入で変わること</h2>
<div style="border-top: 1px solid rgba(233,199,123,0.45)">
<div class="l-ba" style="font-size: 13px; color: #E9C77B; letter-spacing: 0.1em"><p style="margin: 0; padding: 14px 0">業務</p><p style="margin: 0; padding: 14px 16px">導入前</p><p style="margin: 0; padding: 14px 16px">導入後</p></div>
<div class="l-ba" style="border-top: 1px solid rgba(233,199,123,0.25); font-size: 14px; line-height: 1.9"><p style="margin: 0; padding: 18px 0; font-weight: 700">顧客対応・請求</p><p style="margin: 0; padding: 18px 16px; color: #C5C9E0">Excelや紙で顧客リストを管理し、請求書はExcelに手入力して作成</p><p style="margin: 0; padding: 18px 16px">顧客・案件・請求データを1か所で管理し、請求書を画面からPDF出力</p></div>
<div class="l-ba" style="border-top: 1px solid rgba(233,199,123,0.25); font-size: 14px; line-height: 1.9"><p style="margin: 0; padding: 18px 0; font-weight: 700">入金・債権管理</p><p style="margin: 0; padding: 18px 16px; color: #C5C9E0">通帳記帳で入金を確認し、Excelの請求データと手作業で突き合わせ</p><p style="margin: 0; padding: 18px 16px">請求書画面から入金を登録するだけで消込と仕訳が完了。滞留債権も一目で分かる</p></div>
<div class="l-ba" style="border-top: 1px solid rgba(233,199,123,0.25); font-size: 14px; line-height: 1.9"><p style="margin: 0; padding: 18px 0; font-weight: 700">会計・財務</p><p style="margin: 0; padding: 18px 16px; color: #C5C9E0">1件ずつ手作業で仕訳し、会計ソフトへ二重入力。決算期に財務諸表を手作業で作成</p><p style="margin: 0; padding: 18px 16px">取引の確定と同時に仕訳を自動作成。帳簿から財務諸表まで画面操作で出力</p></div>
<div class="l-ba" style="border-top: 1px solid rgba(233,199,123,0.25); font-size: 14px; line-height: 1.9"><p style="margin: 0; padding: 18px 0; font-weight: 700">勤怠・労務</p><p style="margin: 0; padding: 18px 16px; color: #C5C9E0">タイムカードで打刻し、月末に総務担当者がExcelへ手入力して集計</p><p style="margin: 0; padding: 18px 16px">ポータル上でワンクリック打刻し、稼働時間をリアルタイムに自動集計</p></div>
<div class="l-ba" style="border-top: 1px solid rgba(233,199,123,0.25); border-bottom: 1px solid rgba(233,199,123,0.25); font-size: 14px; line-height: 1.9"><p style="margin: 0; padding: 18px 0; font-weight: 700">工事・現場管理</p><p style="margin: 0; padding: 18px 16px; color: #C5C9E0">ホワイトボードで進捗を管理し、手書きの日報を事務所で回収</p><p style="margin: 0; padding: 18px 16px">カンバンボードで進捗を共有し、作業ログ（日報）をシステムに入力</p></div>
</div>
</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 64px 32px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Screens</p>
<h2 style="margin: 0 0 40px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">画面イメージ</h2>
<div class="l-three">
<figure style="margin: 0"><div style="border: 1px solid rgba(233,199,123,0.45); padding: 8px; background: rgba(15,26,61,0.6)"><img src="{{ asset('images/screenshot_tasks.png') }}" alt="案件・タスク管理画面" style="width: 100%; display: block"></div><figcaption style="margin-top: 12px; font-size: 13px; line-height: 1.8; color: #C5C9E0">案件・タスク管理：カンバン方式で「未着手／進行中／完了」を管理</figcaption></figure>
<figure style="margin: 0"><div style="border: 1px solid rgba(233,199,123,0.45); padding: 8px; background: rgba(15,26,61,0.6)"><img src="{{ asset('images/screenshot_workflow.png') }}" alt="ワークフロー・稟議経費精算画面" style="width: 100%; display: block"></div><figcaption style="margin-top: 12px; font-size: 13px; line-height: 1.8; color: #C5C9E0">ワークフロー：申請の作成と、承認者向けの未決裁一覧</figcaption></figure>
<figure style="margin: 0"><div style="border: 1px solid rgba(233,199,123,0.45); padding: 8px; background: rgba(15,26,61,0.6)"><img src="{{ asset('images/screenshot_invoice.png') }}" alt="請求書発行・売上管理画面" style="width: 100%; display: block"></div><figcaption style="margin-top: 12px; font-size: 13px; line-height: 1.8; color: #C5C9E0">請求書発行：案件を選んで作成し、発行状況を一覧管理</figcaption></figure>
</div>
</section>

<section id="price" style="background: rgba(30,42,107,0.35); border-top: 1px solid rgba(233,199,123,0.25); border-bottom: 1px solid rgba(233,199,123,0.25)">
<div style="max-width: 1280px; margin: 0 auto; padding: 96px 32px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Price</p>
<h2 style="margin: 0 0 16px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">料金</h2>
<p style="margin: 0 0 40px; font-size: 15px; line-height: 2; color: #C5C9E0">すべての導入企業に同じ価格表を適用します。金額は「何名で使うか」と「どの保守サポートを選ぶか」だけで決まります。</p>
<div class="l-tbl">
<table style="width: 100%; min-width: 640px; border-collapse: collapse; font-size: 15px">
<thead><tr><th scope="col" style="text-align: left; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">項目</th><th scope="col" style="text-align: right; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">価格（税抜）</th><th scope="col" style="text-align: left; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">内容</th></tr></thead>
<tbody>
<tr><th scope="row" style="text-align: left; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">初期設定費</th><td style="text-align: right; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-weight: 700; white-space: nowrap">200,000円<span style="font-weight: 400; font-size: 13px">（契約時1回）</span></td><td style="padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-size: 14px; color: #C5C9E0">テナント開設、会社情報・社員アカウント・取引先の標準マスタ設定、顧客データのCSV取込、管理者向け操作説明（オンライン2時間×1回）</td></tr>
<tr><th scope="row" style="text-align: left; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">基本利用料</th><td style="text-align: right; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-weight: 700; white-space: nowrap">30,000円／月</td><td style="padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-size: 14px; color: #C5C9E0">全標準機能の利用、社内10ID、バージョンアップ・法令改正対応</td></tr>
<tr><th scope="row" style="text-align: left; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">追加ユーザー料</th><td style="text-align: right; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-weight: 700; white-space: nowrap">1,000円／ID・月</td><td style="padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-size: 14px; color: #C5C9E0">社内11ID目から1ID単位で追加（上限50ID）</td></tr>
<tr><th scope="row" style="text-align: left; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">保守サポート ライト</th><td style="text-align: right; padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-weight: 700; white-space: nowrap">0円<span style="font-weight: 400; font-size: 13px">（基本利用料に含む）</span></td><td style="padding: 18px 16px; border-bottom: 1px solid rgba(233,199,123,0.2); font-size: 14px; color: #C5C9E0">メールでの問い合わせ対応（3営業日以内に回答）、操作マニュアル・FAQの提供</td></tr>
<tr><th scope="row" style="text-align: left; padding: 18px 16px">保守サポート スタンダード</th><td style="text-align: right; padding: 18px 16px; font-weight: 700; white-space: nowrap">15,000円／月</td><td style="padding: 18px 16px; font-size: 14px; color: #C5C9E0">ライトの内容に加え、電話・画面共有でのリモートサポート（翌営業日以内に回答）、月1回の運用相談（60分）</td></tr>
</tbody>
</table>
</div>
<p style="margin: 20px 0 56px; font-size: 13px; color: #C5C9E0">※最低利用期間は12か月です。月額料金は年単位のご契約となります。</p>

<h3 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-size: 24px">利用規模別の料金例（税抜）</h3>
<div class="l-tbl">
<table style="width: 100%; min-width: 640px; border-collapse: collapse; font-size: 15px">
<thead><tr><th scope="col" style="text-align: left; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">利用規模</th><th scope="col" style="text-align: left; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">保守プラン</th><th scope="col" style="text-align: right; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">月額</th><th scope="col" style="text-align: right; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">初年度合計</th><th scope="col" style="text-align: right; padding: 14px 16px; font-weight: 400; color: #E9C77B; border-bottom: 1px solid rgba(233,199,123,0.45)">2年間合計</th></tr></thead>
<tbody>
<tr><th scope="row" style="text-align: left; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">社内10名</th><td style="padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">ライト</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">30,000円</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">560,000円</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">920,000円</td></tr>
<tr><th scope="row" style="text-align: left; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">社内20名</th><td style="padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">スタンダード</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">55,000円</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">860,000円</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">1,520,000円</td></tr>
<tr><th scope="row" style="text-align: left; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">社内30名</th><td style="padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">スタンダード</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">65,000円</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">980,000円</td><td style="text-align: right; padding: 14px 16px; border-bottom: 1px solid rgba(233,199,123,0.2)">1,760,000円</td></tr>
<tr><th scope="row" style="text-align: left; padding: 14px 16px">社内50名（上限）</th><td style="padding: 14px 16px">スタンダード</td><td style="text-align: right; padding: 14px 16px">85,000円</td><td style="text-align: right; padding: 14px 16px">1,220,000円</td><td style="text-align: right; padding: 14px 16px">2,240,000円</td></tr>
</tbody>
</table>
</div>
<p style="margin: 20px 0 0; font-size: 13px; line-height: 1.9; color: #C5C9E0">初年度費用 ＝ 初期設定費 200,000円 ＋（基本利用料 30,000円 ＋ 追加ユーザー料 1,000円 ×（利用ID数 − 10）＋ 保守サポート料）× 12か月</p>

</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 96px 32px 64px">
<div class="l-two" style="align-items: start">
<div>
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Specifications</p>
<h2 style="margin: 0 0 32px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">提供仕様</h2>
<dl style="margin: 0; display: grid; grid-template-columns: 130px minmax(0, 1fr); font-size: 14px; line-height: 1.9">
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">利用環境</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3)">Webブラウザ（サーバー設置・インストール不要）</dd>
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">社内アカウント</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3)">基本利用料に10IDを含む。1ID単位で追加でき、上限は1契約50ID</dd>
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">権限</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3)">管理者／マネージャー／一般社員の3段階</dd>
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">データ取込</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3)">顧客（取引先）データのCSV一括取込（Shift_JIS形式にも対応）</dd>
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">データ管理</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3)">企業ごとにデータを論理的に分離。通信はHTTPSで暗号化</dd>
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">バージョンアップ</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3)">機能改善・法令改正への対応を追加費用なしで提供</dd>
<dt style="padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); border-bottom: 1px solid rgba(233,199,123,0.3); color: #C5C9E0">サポート</dt><dd style="margin: 0; padding: 14px 0; border-top: 1px solid rgba(233,199,123,0.3); border-bottom: 1px solid rgba(233,199,123,0.3)">保守サポートプラン（ライト／スタンダード）から選択</dd>
</dl>
</div>
<div>
<h3 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-size: 24px; padding-top: 56px">本サービスに含まれないもの</h3>
<ul style="margin: 0 0 28px; padding: 0 0 0 20px; font-size: 14px; line-height: 2.1; color: #C5C9E0">
<li>導入企業ごとの個別開発、画面・帳票・データベースのカスタマイズ</li>
<li>他システムとの個別連携開発</li>
<li>既存データの移行代行（CSV取込機能の提供と操作説明は初期設定費に含みます）</li>
</ul>
<div style="border: 1px solid rgba(233,199,123,0.5); padding: 24px 28px; background: rgba(30,42,107,0.35)">
<p style="margin: 0 0 12px; font-size: 15px; line-height: 1.9">貴社専用のカスタマイズや機能拡張をご希望の場合は、別契約の「Webシステム開発・アプリケーション開発」としてご相談ください。</p>
<a href="{{ route('services') }}" style="font-size: 14px; color: #E9C77B">Webシステム開発・アプリケーション開発を見る →</a>
</div>
</div>
</div>
</section>

<section style="max-width: 960px; margin: 0 auto; padding: 64px 32px 104px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B; text-align: center">FAQ</p>
<h2 style="margin: 0 0 40px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px; text-align: center">よくあるご質問</h2>
<div style="border-top: 1px solid rgba(233,199,123,0.45)">
<details style="border-bottom: 1px solid rgba(233,199,123,0.3); padding: 22px 4px" open><summary style="cursor: pointer; font-weight: 700; font-size: 16px">Q. 自社でサーバーを用意する必要はありますか？</summary><p style="margin: 14px 0 0; font-size: 14px; line-height: 2; color: #C5C9E0">不要です。Webブラウザからご利用いただけます。</p></details>
<details style="border-bottom: 1px solid rgba(233,199,123,0.3); padding: 22px 4px"><summary style="cursor: pointer; font-weight: 700; font-size: 16px">Q. 何名まで利用できますか？</summary><p style="margin: 14px 0 0; font-size: 14px; line-height: 2; color: #C5C9E0">基本利用料に社内10IDが含まれ、1ID単位で追加できます。上限は1契約あたり50IDです。上限に達すると新しいアカウントは追加できません。</p></details>
<details style="border-bottom: 1px solid rgba(233,199,123,0.3); padding: 22px 4px"><summary style="cursor: pointer; font-weight: 700; font-size: 16px">Q. 自社の業務に合わせて画面を変更できますか？</summary><p style="margin: 14px 0 0; font-size: 14px; line-height: 2; color: #C5C9E0">Cloud Standardは標準機能のみのご提供です。カスタマイズをご希望の場合は、別契約のWebシステム開発・アプリケーション開発としてご相談ください。</p></details>
<details style="border-bottom: 1px solid rgba(233,199,123,0.3); padding: 22px 4px"><summary style="cursor: pointer; font-weight: 700; font-size: 16px">Q. 今使っている顧客データは移せますか？</summary><p style="margin: 14px 0 0; font-size: 14px; line-height: 2; color: #C5C9E0">顧客（取引先）データはCSVで一括取込できます。取込機能の提供と操作説明は初期設定費に含まれます。移行作業の代行は含まれません。</p></details>
<details style="border-bottom: 1px solid rgba(233,199,123,0.3); padding: 22px 4px"><summary style="cursor: pointer; font-weight: 700; font-size: 16px">Q. 契約期間の縛りはありますか？</summary><p style="margin: 14px 0 0; font-size: 14px; line-height: 2; color: #C5C9E0">最低利用期間は12か月で、月額料金は年単位のご契約です。</p></details>
<details style="border-bottom: 1px solid rgba(233,199,123,0.3); padding: 22px 4px"><summary style="cursor: pointer; font-weight: 700; font-size: 16px">Q. 法改正があったときの対応は有料ですか？</summary><p style="margin: 14px 0 0; font-size: 14px; line-height: 2; color: #C5C9E0">インボイス制度などの法令改正への対応は、全契約者に追加費用なしで提供します。</p></details>
</div>
</section>

<section style="border-top: 1px solid rgba(233,199,123,0.25); border-bottom: 1px solid rgba(233,199,123,0.25)">
<div style="max-width: 1280px; margin: 0 auto; padding: 88px 32px; display: flex; justify-content: space-between; align-items: center; gap: 32px; flex-wrap: wrap">
<p style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 28px; line-height: 1.7">導入のご相談・お見積もりは、<br>お気軽にどうぞ。</p>
<a href="{{ route('contact') }}" style="text-decoration: none; background: #E9C77B; color: #0F1A3D; font-weight: 700; padding: 18px 36px; border-radius: 999px">お問い合わせ</a>
</div>
</section>
@endsection

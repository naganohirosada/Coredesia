@extends('layouts.frontend')

@section('content')
<div class="coredx-wrapper" style="font-family: 'Helvetica Neue', Arial, 'Hiragino Kaku Gothic ProN', sans-serif; color: #2c3e50; background-color: #ffffff;">
    
    <!-- ヒーローセクション -->
    <div class="hero-section" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: #ffffff; padding: 80px 20px; text-align: center;">
        <div style="max-width: 1100px; margin: 0 auto;">
            <p style="font-size: 14px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #93c5fd; margin-bottom: 10px;">中小企業・建築業の未来を変えるワークスペース</p>
            <h1 style="font-size: 40px; font-weight: 800; margin: 0 0 20px 0; line-height: 1.3;">CORE DX PORTAL</h1>
            <p style="font-size: 18px; max-width: 700px; margin: 0 auto 40px auto; opacity: 0.9; line-height: 1.6;">
                勤怠、プロジェクト、ワークフローから請求管理まで。<br>
                バラバラだった社内業務を一元化する、オールインワン統合ビジネスポータル。
            </p>
            <div style="background: rgba(255,255,255,0.15); display: inline-block; padding: 10px 25px; border-radius: 30px; font-weight: bold; font-size: 15px; margin-bottom: 40px;">
                💡 本サービスは「IT導入補助金」対象ツールです
            </div>
            
            <!-- メインシステムイメージ -->
            <div style="max-width: 900px; margin: 0 auto; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.3); border-radius: 12px; overflow: hidden; border: 4px solid rgba(255,255,255,0.2);">
                <img src="{{ asset('images/screenshot_dashboard.png') }}" alt="CORE DX PORTAL メインダッシュボード" style="width: 100%; height: auto; display: block;">
            </div>
        </div>
    </div>

    <!-- 課題解決セクション -->
    <div class="problems-section" style="padding: 60px 20px; background-color: #f8fafc; text-align: center;">
        <div style="max-width: 1000px; margin: 0 auto;">
            <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 40px; position: relative; display: inline-block; padding-bottom: 10px;">
                こんなバックオフィスの課題、ありませんか？
                <span style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 60px; height: 4px; background-color: #3b82f6;"></span>
            </h2>
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px; margin-bottom: 30px;">
                <div style="flex: 1; min-width: 280px; background: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: left;">
                    <h3 style="font-size: 16px; color: #e11d48; margin-top: 0;">❌ ツールがバラバラで面倒</h3>
                    <p style="font-size: 14px; margin: 0; color: #4a5568; line-height: 1.6;">勤怠、タスク管理、エクセル請求書など、情報が散乱して二重入力や確認の手間が発生している。</p>
                </div>
                <div style="flex: 1; min-width: 280px; background: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: left;">
                    <h3 style="font-size: 16px; color: #e11d48; margin-top: 0;">❌ 現場ごとの利益が不透明</h3>
                    <p style="font-size: 14px; margin: 0; color: #4a5568; line-height: 1.6;">誰がどのプロジェクト（現場）に何時間使ったか（工数人件費）が感覚値でしか把握できていない。</p>
                </div>
                <div style="flex: 1; min-width: 280px; background: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: left;">
                    <h3 style="font-size: 16px; color: #e11d48; margin-top: 0;">❌ 月末の請求・締めが重労働</h3>
                    <p style="font-size: 14px; margin: 0; color: #4a5568; line-height: 1.6;">現場データと顧客マスターが紐づいておらず、毎月の請求書発行に事務員が丸数日拘束されている。</p>
                </div>
            </div>
            <p style="font-size: 18px; font-weight: bold; color: #1e3a8a; margin-top: 20px;">👇 CORE DX PORTALが、これらすべてを1つの画面で解決します。</p>
        </div>
    </div>

    <!-- 主な機能セクション -->
    <div class="features-section" style="padding: 80px 20px; max-width: 1100px; margin: 0 auto;">
        <h2 style="font-size: 26px; font-weight: 700; text-align: center; margin-bottom: 60px; position: relative; display: block; padding-bottom: 10px;">
            CORE DX PORTAL 4つのコア機能
            <span style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 60px; height: 4px; background-color: #3b82f6;"></span>
        </h2>

        <!-- 機能1: 勤怠 -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; margin-bottom: 70px; gap: 40px;">
            <div style="flex: 1; min-width: 320px;">
                <span style="font-size: 12px; font-weight: bold; background: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 4px;">Attendance & Dashboard</span>
                <h3 style="font-size: 22px; margin: 10px 0; font-weight: 700;">1. リアルタイム勤怠打刻＆集計ポータル</h3>
                <p style="font-size: 14px; color: #4a5568; line-height: 1.6; margin: 0;">
                    ワンクリックで簡単に出退勤・休憩を記録できる打刻システムをポータルトップに配置。個人の稼働時間統計や社内平均ラインが自動でグラフ化され、働き方の可視化と有給休暇申請のスムーズな連動をサポートします。
                </p>
            </div>
            <div style="flex: 1.3; min-width: 320px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="{{ asset('images/screenshot_dashboard.png') }}" alt="勤怠打刻・ダッシュボード画面" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

        <!-- 機能2: タスク -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; margin-bottom: 70px; gap: 40px; flex-direction: row-reverse;">
            <div style="flex: 1; min-width: 320px;">
                <span style="font-size: 12px; font-weight: bold; background: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 4px;">Project & Task Board</span>
                <h3 style="font-size: 22px; margin: 10px 0; font-weight: 700;">2. カンバン方式のプロジェクト・タスク管理</h3>
                <p style="font-size: 14px; color: #4a5568; line-height: 1.6; margin: 0;">
                    案件ごとにタスクを「未着手」「進行中」「完了」の3フェーズで視覚的に管理。期日設定やドラッグ操作によるスムーズな進捗更新が可能で、少人数での複数現場の同時並行管理でも、チーム内の連絡ミスや手戻りを劇的に減らします。
                </p>
            </div>
            <div style="flex: 1.3; min-width: 320px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="{{ asset('images/screenshot_tasks.png') }}" alt="プロジェクト・タスクボード画面" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

        <!-- 機能3: ワークフロー -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; margin-bottom: 70px; gap: 40px;">
            <div style="flex: 1; min-width: 320px;">
                <span style="font-size: 12px; font-weight: bold; background: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 4px;">Workflow & Expense</span>
                <h3 style="font-size: 22px; margin: 10px 0; font-weight: 700;">3. ワークフロー ＆ 稟議・経費精算管理</h3>
                <p style="font-size: 14px; color: #4a5568; line-height: 1.6; margin: 0;">
                    経費精算、購入申請など、各種稟議の作成・提出をデジタル化。承認権限を持つ管理者は「未決裁の申請一覧」から迅速にチェックでき、自身の申請履歴もステータス（承認待ち等）を含めて一目で追跡可能なため、ペーパーレスと意思決定の高速化を両立します。
                </p>
            </div>
            <div style="flex: 1.3; min-width: 320px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="{{ asset('images/screenshot_workflow.png') }}" alt="稟議・経費精算管理画面" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

        <!-- 機能4: 請求書 -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px; flex-direction: row-reverse;">
            <div style="flex: 1; min-width: 320px;">
                <span style="font-size: 12px; font-weight: bold; background: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 4px;">Invoice & Sales</span>
                <h3 style="font-size: 22px; margin: 10px 0; font-weight: 700;">4. インボイス対応請求書発行 ＆ 売上管理</h3>
                <p style="font-size: 14px; color: #4a5568; line-height: 1.6; margin: 0;">
                    登録番号や軽減税率・合算表記など、日本のインボイス制度の要件を完全に満たした請求書テンプレートを出力可能。対象の案件プロジェクトや支払期日を選択するだけで履歴が作成され、PDF保存や印刷、下書き保存などのステータス管理までシームレスに行えます。
                </p>
            </div>
            <div style="flex: 1.3; min-width: 320px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="{{ asset('images/screenshot_invoice.png') }}" alt="インボイス対応請求書発行画面" style="width: 100%; height: auto; display: block;">
            </div>
        </div>
    </div>

    <!-- 導入効果（事例ベース） -->
    <div class="effect-section" style="padding: 60px 20px; background-color: #f1f5f9; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 20px;">圧倒的な業務削減効果の実績</h2>
            <p style="font-size: 15px; color: #4a5568; margin-bottom: 30px; line-height: 1.6;">
                従業員5名規模の建築・施工事業者様において、プロジェクトデータと顧客管理を連動させた結果、<br>
                <strong>毎月丸2日かかっていた手作業による締め・請求書発行業務が「わずか2時間」に短縮</strong>されました。
            </p>
            <div style="display: inline-block; background: #ffffff; border-left: 6px solid #3b82f6; padding: 20px; text-align: left; border-radius: 0 8px 8px 0;">
                <p style="margin: 0 0 5px 0; font-weight: bold; color: #1e3a8a; font-size: 16px;">💡 IT導入補助金の活用で、導入コストを大幅に抑えられます</p>
                <p style="margin: 0; font-size: 13px; color: #64748b; line-height: 1.5;">株式会社CoredesiaはIT導入支援事業者です。補助金の交付申請からツールの定着まで手厚く伴走サポートいたします。</p>
            </div>
        </div>
    </div>

</div>
@endsection
@extends('layouts.frontend') {{-- 共通のナビ・フッターを分けるのがエリートだお --}}

@section('content')
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5 text-info">Company</h2>
        <p class="text-muted">Coredesiaの基本情報だにぇ！</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card pop-card p-4 border-0 shadow">
                <table class="table table-borderless align-middle mb-0">
                    <tbody class="fw-bold">
                        <tr class="border-bottom">
                            <th class="py-3 text-info" style="width: 30%;">会社名</th>
                            <td class="py-3">株式会社 Coredesia</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="py-3 text-info">代表者</th>
                            <td class="py-3">エリートプロデューサー</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="py-3 text-info">所在地</th>
                            <td class="py-3">東京都さくら区みこみこ町 3-5-35</td>
                        </tr>
                        <tr>
                            <th class="py-3 text-info">設立</th>
                            <td class="py-3">2026年 1月</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
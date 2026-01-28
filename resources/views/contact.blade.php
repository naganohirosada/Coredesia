@section('content')
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="fw-bold text-info">Contact</h2>
            <p>ご質問やご相談、いつでも待ってるんだにぇ！🌸</p>
        </div>
        <div class="col-md-8">
            <div class="card pop-card p-4 shadow border-0">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">お名前</label>
                        <input type="text" class="form-control rounded-pill px-3" placeholder="田中 太郎">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">メールアドレス</label>
                        <input type="email" class="form-control rounded-pill px-3" placeholder="example@coredesia.com">
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">お問い合わせ内容</label>
                        <textarea class="form-control rounded-4" rows="5" placeholder="こちらに入力してにぇ！"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-pop btn-lg px-5">送信するにぇ！</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
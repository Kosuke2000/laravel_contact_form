@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            氏名
                            <input type='text' name="name" value="{{ old('name') }}">
                            <br>
                            件名
                            <input type='text' name="title" value="{{ old('title') }}">
                            <br>
                            メールアドレス
                            <input type='email' name="email" value="{{ old('email') }}">
                            <br>
                            ホームページ
                            <input type='url' name="url" value="{{ old('url') }}">
                            <br>
                            性別
                            <input type='radio' name="gender" value="0">男性
                            <input type='radio' name="gender" value="1">女性
                            <br>
                            年齢
                            <select name="age">
                                <option value="">選択してください</option>
                                <option value="1" @if (old('age') === '1') selected @endif>10代</option>
                                <option value="2" @if (old('age') === '2') selected @endif>20代</option>
                                <option value="3" @if (old('age') === '3') selected @endif>30代</option>
                                <option value="4" @if (old('age') === '4') selected @endif>40代</option>
                                <option value="5" @if (old('age') === '5') selected @endif>50代</option>
                                <option value="6" @if (old('age') === '6') selected @endif>60代</option>
                            </select>
                            <br>
                            お問い合わせ内容
                            <textarea name="contact">{{ old('contact') }}</textarea>
                            <br>

                            <input type="checkbox" name="caution" value="1">注意事項に同意する
                            <br>

                            <input class="btn btn-primary" type="submit" value="登録する">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

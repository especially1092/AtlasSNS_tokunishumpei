<x-logout-layout>
    <!-- 適切なURLを入力してください -->
{!! Form::open(['url' => 'register']) !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}
@if ($errors->has('username'))
    <div class="error">{{ $errors->first('username') }}</div>
@endif

{{ Form::label('メールアドレス') }}
{{ Form::email('email',null,['class' => 'input']) }}
@if ($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div>
@endif

{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}
@if ($errors->has('password'))
    <div class="error">{{ $errors->first('password') }}</div>
@endif

{{ Form::label('パスワード確認') }}
{{ Form::text('password_confirmation',null,['class' => 'input']) }}

{{ Form::submit('登録') }}

<p><a href="login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


</x-logout-layout>

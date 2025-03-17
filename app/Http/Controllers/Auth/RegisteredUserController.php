<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $messages = [
            'username.required' => 'ユーザー名は必須です。',
            'username.min' => 'ユーザー名は2文字以上で入力してください。',
            'username.max' => 'ユーザー名は12文字以内で入力してください。',

            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'email.min' => 'メールアドレスは5文字以上で入力してください。',
            'email.max' => 'メールアドレスは40文字以内で入力してください。',
            'email.unique' => 'このメールアドレスは既に登録されています。',

            'password.required' => 'パスワードは必須です。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは20文字以内で入力してください。',
            'password.regex' => 'パスワードは英数字のみで入力してください。',
            'password.confirmed' => 'パスワード確認が一致しません。'
        ];

        //バリデーション
        $validated = $request->validate([
            'username' => 'required|string|min:2|max:12',
            'email' => 'required|string|email|min:5|max:40|unique:users,email',
            'password' => 'required|string|min:8|max:20|regex:/^[a-zA-Z0-9]+$/|confirmed'
        ], $messages);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //セッションにユーザ名を保存
        session()->put('registered_user', $user->username);
        return redirect('added');
    }

    public function added(): View
    {
        $userName = session('registered_user','ゲスト');
        // dd(session('registered_user'));
        return view('auth.added',['userName' => $userName]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    public function index(){
        return view('contacts.index');

    }

    public function confirm(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required',
        ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('contacts.confirm', [
            'inputs' => $inputs,
        ]);
        // dd($inputs);
    }

    public function send(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required'
        ]);

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('contacts.index')
                ->withInput($inputs);

        } else {
            //入力されたメールアドレスにメールを送信
            \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('contacts.complete');
            
        }
    }

}

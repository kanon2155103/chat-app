<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class ChatController extends Controller
{
    // データの紐付けが一番難しいです……。
    public function index(Request $request)
    {
        // $user: マイページのためにidの値を取得したいです。
        $user = User::first(); // first()でしか値を取得できずにエラーが出たため暫定的に指定していますが、当然ながら、このままではどのアカウントでサインインしてもid = 1の情報しかとれません。
        $posts = Post::with('user')->get();
        return view('chat.chat', compact('user', 'posts'));
    }

    public function store(Request $request)
    {
        // メッセージ内容、投稿した人のidを保存したいです。
        Post::create([
            'content' => $request->content,
            'user_id' => $request->user_id, // こちらで投稿者のid（ログインしている人のid）を送りたいですが、現状ではuser_idがnullだというエラーが出ております。どう紐付けたらよいでしょうか（bladeの方ですよね……）？
        ]);
        return redirect('chat');
    }

}

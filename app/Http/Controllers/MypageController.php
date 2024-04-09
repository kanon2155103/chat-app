<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $link = route('mypage.index', ['id' => $request->id ]);
        $user = User::find($id);
        return view('chat.mypage', compact('link', 'user'));
    }

}

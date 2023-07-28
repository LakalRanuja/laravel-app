<?php


namespace App\Http\Controllers;


use App\Models\User;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
    $likeCount = Cache::remember(
    'counts.likes.' . $user->id,
    now()->addSeconds(30),
        function() use($user) {
            return $user->profile->posts->count();
        });
        return view('posts.index', compact('user', 'likeCount'));
    }
}

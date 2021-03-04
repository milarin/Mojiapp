<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $character = Character::where('user_id', $id)->select('image_file', 'id')->get();

        return view('profile', ['user' => $user, 'character' => $character]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('profile_edit',['user' => $user]);
    }

    public function update(Request $request, $id, User $user)
    {
        $user = User::find($id);
        $user->name = request('name');
        $user->content = request('content');
        $user->save();
        return redirect()->route('user.detail', ['id' => $user->id]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $character = Character::where('user_id', $id)->select('image_file')->get();

        return view('profile', ['user' => $user, 'character' => $character]);
    }
}

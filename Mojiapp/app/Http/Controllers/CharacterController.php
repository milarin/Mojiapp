<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $message = '検索結果：' . $keyword;
            $characters = Character::where('title', 'LIKE', "%{$keyword}%")->get();
        } else {
            $message = '';
            $characters = Character::all();
        }
        return view('index', ['characters' => $characters, 'message' => $message, 'keyword' => $request->input]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $character = new Character;
        $character->title = request('title');
        $filename = $request->file('image_file')->store('public'); // publicフォルダに保存
        $character->image_file = str_replace('public/','',$filename); // 保存するファイル名からpublicを除外
        $character->user_id = $user->id;
        $character->category_id = 1;
        $character->save();
        return redirect()->route('chara.detail', ['id' => $character->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);
        return view('show', ['character' => $character]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::find($id);
        return view('edit', ['character' => $character]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Character $character)
    {
        $character = Character::find($id);
        $character->title = request('title');
        $character->image_file = request('image_file');
        $character->category_id = 1;
        $character->save();
        return redirect()->route('chara.detail', ['id' => $character->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $character = Character::find($id);
        $character->delete();
        return redirect('/characters');
    }
}

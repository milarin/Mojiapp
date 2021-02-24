@extends('layouts.layout')

@section('nav')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Moji App</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Log Out</a>
          </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>

@endsection

@section('content')

<main>

    <div class="container create">

      <h1>新規投稿</h1>
      {{ Form::open(['route' => 'chara.store']) }}
          <div class='form-group'>
              {{ Form::label('title', 'タイトル:') }}
              {{ Form::text('title', null) }}
          </div>
          <div class='form-group'>
              {{ Form::label('image_file', 'ファイル:') }}
              {{ Form::text('image_file', null) }}
          </div>
          <div class="form-group">
              {{ Form::submit('作成する', ['class' => 'btn btn-outline-primary']) }}
          </div>
      {{ Form::close() }}

      <div>
          <a href="{{ route('chara.list') }}">一覧に戻る</a>
      </div>
    </div><!-- .container-->
      
</main>

@endsection
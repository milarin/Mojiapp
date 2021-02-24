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

    <div class="container">

      <div class="gallery  detail-gallery">

        <div class="gallery-item gallery-item-none" tabindex="0">
          
          <img src="{{ $character->image_file }}" class="gallery-image detail-image" alt="">
          
        </div>
        
      </div><!-- .gallery .detail-gallary-->
      
      <div class="container detail-gallery-item">
        <p>{{ $character->title }}</p>
      </div>
      <div class="container detail-gallery-item">
        <a href="#">編集</a><span> /</span>
        <a href="#">削除</a>
      </div>
      <div class="container detail-gallery-item">
        <a href="{{ route('chara.list') }}">一覧へ戻る</a>
      </div>

    </div><!-- .container-->
      
  </main>

@endsection
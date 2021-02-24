@extends('layouts.layout')


@section('nav')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Moji App</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Log Out</a>
          </li>
          <form class="d-flex">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
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

  <p>{{ $message }}</p>
  <div class="gallery">

    @foreach($characters as $character)
    <div class="gallery-item" tabindex="0">

      <a href="{{ route('chara.detail', ['id' =>  $character->id]) }}">
        <img src="{{ $character->image_file }}" class="gallery-image" alt="">
      </a>
        
    </div>
    @endforeach
    
    <div class="gallery-item" tabindex="0">
  
      <div class="gallery-image gallery-item-none"></div>
  
    </div>
    
    <div class="gallery-item" tabindex="0">
  
      <div class="gallery-image gallery-item-none"></div>
  
    </div>
  </div><!-- gallery -->
  
</div><!-- .container -->

</main>

@endsection

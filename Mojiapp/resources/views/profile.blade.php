@extends('layouts.layout')


@section('content')

<header>

<div class="container">

  <div class="profile">

    <div class="profile-image">

      <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

    </div>
    
    <div class="profile-user-settings">
      
      <h1 class="profile-user-name">{{ $user->name }}</h1>
      
      <button class="prof-btn profile-edit-btn">Edit Profile</button>

    </div>


    <div class="profile-bio">

      <p><span class="profile-real-name">test</span> テストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージテストメッセージ</p>

    </div>

  </div>
  <!-- End of profile section -->

</div>
<!-- End of container -->

</header>


<main>

<div class="container">

  <div class="gallery">
    
    @foreach ($character as $chara)
    <div class="gallery-item" tabindex="0">

        <img src="{{ $chara->image_file }}" class="gallery-image" alt="">
        
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

<a href="{{ route('chara.new') }}">
<div class="icon icon--plus">
    <span class="icon_mark"></span>
</div>
</a>


@endsection
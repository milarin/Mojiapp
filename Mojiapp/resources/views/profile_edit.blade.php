@extends('layouts.layout')


@section('content')

<main>

    <div class="container create">

      <h1>{{ $user->name }}の編集</h1>
      @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
      {{ Form::model($user, ['route' => ['user.update', Auth::user()->id], 'files' => true]) }}
          <div class='form-group'>
              {{ Form::label('name', '名前:') }}
              {{ Form::text('name', null) }}
          </div>
          <div class='form-group'>
              {{ Form::label('content', '') }}
              {{ Form::textarea('content', null) }}
          </div>
          <div class="form-group">
              {{ Form::submit('更新する', ['class' => 'button']) }}
          </div>
      {{ Form::close() }}


      <div>
          <a href="{{ route('user.detail', ['id' =>  Auth::user()->id]) }}">一覧に戻る</a>
      </div>
    </div><!-- .container-->
      
</main>

@endsection
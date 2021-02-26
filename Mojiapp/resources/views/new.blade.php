@extends('layouts.layout')


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
              {{ Form::submit('作成する', ['class' => 'button']) }}
          </div>
      {{ Form::close() }}

      <div>
          <a href="{{ route('chara.list') }}">一覧に戻る</a>
      </div>
    </div><!-- .container-->
      
</main>

@endsection
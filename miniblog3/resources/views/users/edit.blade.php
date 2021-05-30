@extends('layouts.app')

@section('content')
  <div class="container">
    @foreach($posts as $post)
      <div class="card">
        <div class="card-header">{{ $post->user->name }}</div>
        <div class="card-body">{{ $post->body }}</div>
      </div>
    @endforeach
  </div>
@endsection

  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif

  <form method="POST" action="{{ route('users.update') }}">
    @csrf
    <label>名前: </label><input name="name" type="text" value="{{ $user->name }}" />
    <label>メールアドレス: </label><input name="email" type="email" value="{{ $user->email }}" />
    <button type="submit">変更</button>
  </form>
@endsection


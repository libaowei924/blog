@extends('layouts.app')

@section('content')
<div class="pusher">
  <div class="ui green segment" id="article">
    <h1>{{ $article->name }}</h1>
    <form action="{{ route('praise') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="ui labeled button like" tabindex="0">
            <input type="hidden" name="id" value="{{ $article->id }}">
            <button class="ui button" id="like"><i class="heart icon"></i> 喜欢 </button>
            <a class="ui basic left pointing label">
                {{ $article->like }}
            </a>
        </div>
    </form>
    <div class="ui divider"></div>
    @php
        $parsedown = new Parsedown;
        $parsedown->setSafeMode(true);
        echo $parsedown->text($article->content);
    @endphp
  </div>
</div>
@stop

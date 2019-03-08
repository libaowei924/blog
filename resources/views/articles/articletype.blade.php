@extends('layouts.app')

@section('content')
  <div class="pusher">
    <div class="ui divided items">
        @if(count($articles))
            @foreach($articles as $article)
                <div class="item">
                    <div class="image">
                      <img src="{{ $article->image }}">
                    </div>
                    <div class="content">
                      <a class="header" href="{{ route('article',$article->id) }}">{{ $article->name }}</a>
                      <div class="meta">
                        <span class="cinema">{{ $article->describe }}</span>
                      </div>
                      <div class="description">
                        <p></p>
                      </div>
                      <div class="extra">
                        <div class="ui label">{{ $type->name }}</div>
                      </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3>暂时还没有任何内容哦～</h3>
        @endif
    </div>
  </div>
@stop

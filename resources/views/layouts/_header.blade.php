<div class="ui bottom attached">
  <div class="ui visible left vertical sidebar menu">
    <div class="ui two column centered grid" id="tx">
       <div class="column centered">
         <img class="ui tiny circular image tx" src="/images/tx.png" alt="touxiang">
         <b class="nc">Andy</b>
       </div>
    </div>
    <div class="ui horizontal divider">OR</div>
    <button class="ui circular github icon button bl_ioc">
        <a href="https://github.com/libaowei924/blog" target="_black"><i class="github icon"></i></a>
    </button>
    <button class="ui circular key icon button bl_ioc">
         <a href="{{ route('password') }}" target="_black"><i class="key icon"></i></a>
    </button>
    <button class="ui circular building outline icon button bl_ioc">
         <a href="{{ route('city') }}" target="_black"><i class="building outline icon"></i></a>
    </button>
    <button class="ui circular github icon button bl_ioc">
        空
    </button>
    <a class="item" href="{{ route('home') }}"><i class="home icon"></i> Home </a>
    @foreach($article_type as $type)
        <a class="item" href="{{ route('type',$type->type) }}"><i class="{{ $type->icon }} icon"></i>{{ $type->name }}</a>
    @endforeach
  </div>

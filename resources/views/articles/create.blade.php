@extends('layouts.app')

@section('content')
<div class="pusher">
    <form class="ui form" action="{{ route('create.article') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4 class="ui dividing header">创建文章</h4>

        <div class="field">
            <label>标题</label>
            <input type="text" name="name" placeholder="文章标题">
        </div>

        <div class="field">
            <label>描述</label>
            <input type="text" name="describe" placeholder="简短的说明下文章">
        </div>

        <div class="field">
            <label>图片</label>
            <input type="file" name="image">
        </div>

        <div class="field">
          <label>类型</label>
            <select class="ui dropdown" name="class">
              <option value="">选择合适的类型</option>
              <option value="1">Laravel</option>
              <option value="2">PHP</option>
              <option value="3">Node</option>
              <option value="4">Linux</option>
              <option value="5">React</option>
            </select>
        </div>

        <div class="field">
            <label>口令</label>
            <input type="password" name="pw" placeholder="输入正确的口令">
        </div>

        <div class="field">
            <label>内容</label>
            <textarea name="content"></textarea>
        </div>

        <button class="ui primary basic button">提交</button>
    </form>
</div>
@stop

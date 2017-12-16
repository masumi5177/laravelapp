{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

<h1>{{$session_data}}</h1>
<table>
    <form action="/hello/session" method="post">
        {{ csrf_field() }}
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
</table>

@section('footer')
copyright
@endsection
{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

<h1>北進システムサイト 削除</h1>
<table>
    <form action="/hello/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
        <tr><th>age: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>


@section('footer')
copyright
@endsection
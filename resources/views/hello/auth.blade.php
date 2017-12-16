{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

<h1>北進システムサイト 認証</h1>
<P>{{ $message }}</P>
<table>
    <form action="/hello/auth" method="post">
        {{ csrf_field() }}
        <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
        <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>


@section('footer')
copyright
@endsection
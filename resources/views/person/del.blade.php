
{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

{{--@section('content')--}}
<h1>北進システムサイト 削除</h1>

	<table>
	<form action="/person/del" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$form->id}}">
		<tr><th>name: </th><td>{{$form->name}}</td></tr>
		<tr><th>mail: </th><td>{{$form->mail}}</td></tr>
		<tr><th>age: </th><td>{{$form->age}}</td></tr>
		<tr><th></th><td><input type="submit" value="send"></td></tr>
	</form>
	</table>
{{--@endsection--}}

@section('footer')
copyright
@endsection

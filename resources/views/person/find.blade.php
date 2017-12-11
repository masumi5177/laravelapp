
{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

{{--@section('content')--}}
<h1>北進システムサイト ID検索</h1>
	<form action="/person/find" method="post">
	{{ csrf_field() }}
	<input type="text" name="input" value="{{$input}}">
	<input type="submit" value="find">
	</form>
	@if (isset($item))
	<table>
	<tr><th>Data<th></tr>
		<tr>
			<td>{{$item->getData()}}</td>
		</tr>
	</table>
	@endif

{{--@endsection--}}

@section('footer')
copyright
@endsection

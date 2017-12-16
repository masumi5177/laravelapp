
{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection
{{--@section('content')--}}
<h1>北進システムサイト1</h1>
<table>
	<tr><th>Person<th><th>Board</th></tr>
	@foreach($hasItems as $item)
		<tr>
			<td>{{$item->getData()}}</td>
			<td>
			@if($item->board != null)
				<table width="100%">
				@foreach ($item->boards as $obj)
					<tr><td>{{$obj->getData()}}</td></tr>
				@endforeach
				</table>
			@endif
			</td>
		</tr>
	@endforeach
</table>
<div style="margin:10px;">
		<table>
			<tr><th>Person</th></tr>
				@foreach($noItems as $item)
				<tr>
					<td>{{ $item->getData() }}</td>
				</tr>
				@endforeach
		</table>
</div>
{{--@endsection--}}

@section('footer')
copyright
@endsection

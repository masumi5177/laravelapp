{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

<h1>北進システムサイト1</h1>
<table>

        <tr><th>Message</th><th>Name</th></tr>
        @foreach ($items as $item)
        	<tr>
        		<td>{{ $item->message }}</td>
        		<td>{{ $item->person['name'] }}</td>
        	</tr>
        @endforeach
</table>


@section('footer')
copyright
@endsection
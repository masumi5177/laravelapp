{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
    新規作成ページ
@endsection

<h1>北進システムサイト1</h1>
<table>

        <tr><th>Data</th></tr>
        @foreach ($items as $item)
        	<tr>
        		<td>{{ $item->getData() }}</td>
        	</tr>
        @endforeach
</table>


@section('footer')
copyright
@endsection
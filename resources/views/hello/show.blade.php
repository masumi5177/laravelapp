{{--@extends('layouts.helloapp')--}}

{{--@section('title','Add')--}}

{{--@endsection--}}
@section('memubar')
    @parent
@endsection

<h1>北進システムサイト 詳細</h1>
    @if ($items != null)
    @foreach($items as $item)
    <table width="400">
        <tr><th width="50px">id:</th>
        <td width="50px">{{$item->id}}</td>
        <th width="50px">name:</td>
        <td>{{$item->name}}</td></tr>
    </table>
    @endforeach
    @endif
@section('footer')
copyright
@endsection
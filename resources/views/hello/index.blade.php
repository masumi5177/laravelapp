<html>
<head>
<meta charset="UTF-8" lang="ja">
<title>北進サイト</title>
<link rel='stylesheet' type="text/css" href="/css/app.css">
</head>
<body>
<h1>北進システムサイト</h1>
@if (Auth::check())
<p>USER; {{ $user->name . '(' .$user->email .')' }}</p>
@else
<p>ログインしていません。<a href="/login">ログイン</a><a href="/register">登録</a>）</p>
@endif
<table>
	<tr>
		<th><a href="/hello?sort=name">name</a></th>
		<th><a href="/hello?sort=mail">mail</a></th>
		<th><a href="/hello?sort=age">age</a></th>
	</tr>
@foreach ($items as $item)
<tr>
	<td>{{$item->name}}</td>
	<td>{{$item->mail}}</td>
	<td>{{$item->age}}</td>
<tr>
@endforeach
</table>
{{ $items->appends(['sort' => $sort])->links() }}
<ul>
	<li>検索一覧</li>
	<li>新規登録</li>
	<li>編集</li>
	<li>説明書</li>
</ul>
</body>
</html>
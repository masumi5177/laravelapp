<html>
<head>
<meta charset="UTF-8" lang="ja">
<title>北進サイト</title>
</head>
<body>
<h1>北進システムサイト</h1>

@foreach ($items as $item)
<table>
<tr>
	<td>{{$item->name}}</td>
	<td>{{$item->mail}}</td>
	<td>{{$item->age}}</td>
<tr>
@endforeach
</table>
<ul>
	<li>検索一覧</li>
	<li>新規登録</li>
	<li>編集</li>
	<li>説明書</li>
</ul>
</body>
</html>
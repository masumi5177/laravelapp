<html>
<head>
    <meta charset="UTF-8" lang="ja">
    <title>北進サイト</title>
</head>
<body>
<h1>北進システムサイトその3</h1>

@foreach ($items as $item)
    <table>
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->tel}}</td>
            <td>{{$item->staff}}</td>
        <tr>
@endforeach
    </table>
</body>
</html>
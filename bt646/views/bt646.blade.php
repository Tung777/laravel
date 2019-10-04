<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Ma phong</th>
        <th>loai phong</th>
        <th>tang</th>
        <th>gia tien</th>
        <th>ten khach san</th>
        <th>dia chi</th>
        <th></th>
    </tr>
    @foreach($list as $i)
        <tr>
            <td>{{$i->maphong}}</td>
            <td>{{$i->loaiphong}}</td>
            <td>{{$i->tang}}</td>
            <td>{{$i->giatien}}</td>
            <td>{{$i->tenkhachsan}}</td>
            <td>{{$i->diachi}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>

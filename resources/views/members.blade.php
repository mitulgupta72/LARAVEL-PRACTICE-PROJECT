<h1>data </h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>adress</td>
    </tr>
    @foreach($m as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['Name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
    </tr>
    @endforeach
</table>

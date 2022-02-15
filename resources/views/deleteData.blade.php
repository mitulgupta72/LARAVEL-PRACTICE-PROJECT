<h1>delete data operation</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>email</td>
        <td>address</td>
        <td>operation</td>
    </tr>

@foreach($members as $item)
<tr>
        <!-- <td>Id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
        <td>operation</td> -->
        <td>{{$item['id']}}</td>
        <td>{{$item['Name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td><a href={{"delete/".$item['id']}}>Delete</a></td>
        <td><a href={{"edit/".$item['id']}}>edit</a></td>

    </tr>
@endforeach
</table>

















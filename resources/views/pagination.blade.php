<h1>pagination blade file </h1>
<table  border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>email</td>
        <td>address</td>
    </tr>
  @foreach($info as $bits)

    <tr>
        <td>{{$bits['id']}}</td>
        <td>{{$bits['Name']}}</td>
        <td>{{$bits['email']}}</td>
        <td>{{$bits['address']}}</td>
    </tr>
    @endforeach

</table>

<span>
    {{$info->links()}}
</span>


<style>
        .w-5{
            display: none;
        }
</style>


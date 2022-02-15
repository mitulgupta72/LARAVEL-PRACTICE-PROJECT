
<h1>query list page</h1>
<table border="1">
    <!-- dd($data); -->
    @foreach($data as $item)
<tr>
    <!-- <td>asdas</td> -->
    <td>{{$item->id}}</td>
    <td>{{$item->Name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->address}}</td>
</tr>
@endforeach
</table>

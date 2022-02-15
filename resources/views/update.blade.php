<h1>update page</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text " name="Name" value="{{$data['Name']}}">
    <input type="text " name="email" value="{{$data['email']}}">
    <input type="text " name="address" value="{{$data['address']}}">
    <button type="submit">update</button>
</form>




<h1>login page </h1>
<form action="methodController" method="POST">
    {{method_field('PUT')}}
    @csrf
    <input type="text" name="user" placeholder="user name"><br><br>
    <input type="password" name="user password" placeholder="password"><br><br>
    <button type="submit">login</button>
</form>

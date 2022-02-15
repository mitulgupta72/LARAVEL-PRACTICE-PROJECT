<h1>login page</h1>
@if(session('uer'))

    <h3 style="color: green">{{session('uer')}} has been added</h3>

@endif
<form action="flashsessioncontroller" method="POST">
    @csrf
    <input type="user" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="user password" placeholder="enter user password "><br><br>
    <input type="email" name="user email" placeholder="enter user email"><br><br>
    <button type="submit">add member</button>
</form>

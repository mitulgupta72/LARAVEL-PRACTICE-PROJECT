<h1>save data</h1>
<form action="savedatacontroller" method="POST">
    @csrf
    <input type="number" name='id' placeholder="enter id">
    <input type="text" name="name" placeholder="enter name"><br><br>
    <input type="text" name="email" placeholder="enter email"><br><br>
    <input type="text" name="address" placeholder="enter address"><br><br>
    <button type="submit">add member</button>

</form>

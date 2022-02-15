<h1>upload</h1>
<form action="uploadcontroller" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">submit</button>
</form>

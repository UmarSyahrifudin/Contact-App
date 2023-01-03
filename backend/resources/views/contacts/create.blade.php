<h1>Add Contact</h1>

<form action="/contacts" method="post">
    @csrf
    First Name : <input type="text" name="firstname"> <br>
    last Name : <input type="text" name="lastname"> <br>
    Phone Number : <input type="text" name="phone_number"> <br>

    <input type="submit" value="save">
</form>
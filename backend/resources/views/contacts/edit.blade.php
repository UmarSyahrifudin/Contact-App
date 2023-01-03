<h1>Edit Contact</h1>

<form action="/contacts/{{ $contact->id }}" method="post">
    @method('PUT')
    @csrf
    First Name : <input type="text" name="firstname" value="{{ $contact->firstname }}"> <br>
    last Name : <input type="text" name="lastname" value="{{ $contact->lastname }}"> <br>
    Phone Number : <input type="text" name="phone_number" value="{{ $contact->phone_number }}"> <br>

    <input type="submit" value="save">
</form>
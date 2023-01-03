<table>
    <thead>
        <tr>
            <td>Nama Depan</td>
            <td>Nama Belakang</td>
            <td>Nomor</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->firstname }}</td>
                <td>{{ $contact->lastname }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>
                    <a href="/contacts/{{ $contact->id }}/edit">Edit</a>
                    <form action="/contacts/{{ $contact->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <a href="/contacts/create">Create</a>
</table>
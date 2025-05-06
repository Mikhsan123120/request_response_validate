<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
</head>

<body>
    <h2>Form Tambah contact</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="text" name="phone" placeholder="Masukan Nomor hp"><br>
        <input type="text" name="message" placeholder="Masukan Pesan"><br>
        <button type="submit">Simpan</button><br>
        <a href="/"><button type="button">Halaman Add User</button></a>
        <a href="/admin/create"><button type="button">Halaman Add admin</button></a>
    </form>
</body>

</html>
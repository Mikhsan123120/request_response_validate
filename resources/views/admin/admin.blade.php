{{-- <!DOCTYPE html>
<html>

<head>
    <title>Form Admin</title>
</head>

<body>
    <h2>Form Tambah Admin</h2>

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

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" placeholder="masukan nama anda"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Masukan email anda"><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="no_hp" placeholder="Masukan Nomor HP anda"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" placeholder="Masukan alamat anda"><br><br>

        <label>Role:</label><br>
        <select name="role">
            <option value="">Select Role</option>
            <option value="super_admin">Super Admin</option>
            <option value="kasir">Kasir</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form add admin</title>
</head>

<body>
    <h2>Form Add Admin</h2>

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

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="text" name="no_hp" placeholder="masukan nomor HP"><br>
        <input type="text" name="alamat" placeholder="Masukan Alamat"><br>
        <select name="role" id="">
            <option value="">select role</option>
            <option value="super_admin">Super Admin</option>
            <option value="kasir">Kasir</option>
        </select>
        <button type="submit">Simpan</button><br>
        <a href="/"><button type="button">Halaman Add user</button></a>
        <a href="/contact/create"><button type="button">Halaman Add Contact</button></a>
    </form>
</body>

</html>
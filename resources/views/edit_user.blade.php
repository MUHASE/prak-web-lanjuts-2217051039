<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Mengatur seluruh body dengan background gradient */
body {
    background: linear-gradient(135deg, #ff7e5f, #f8b85e);
    font-family: Arial, sans-serif;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 500px;
    width: 100%;
    margin: 20px;
}

.text-center {
    text-align: center;
    color: #333;
}

.konten-2 {
    margin-bottom: 1.5rem;
}

.form-label {
    font-weight: bold;
    margin-bottom: 0.5rem;
    display: block;
    color: #555;
}

.form-control, .form-select {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form-control:focus, .form-select:focus {
    border-color: #ff7e5f;
    outline: none;
    box-shadow: 0 0 5px rgba(255, 126, 95, 0.4);
}

.profile-img {
    display: block;
    width: 100px;
    height: 100px;
    margin-top: 10px;
    border-radius: 50%;
    object-fit: cover;
}

.btn-list-user, .btn-submit, .btn-kembali {
    display: inline-block;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin: 0.5rem 0;
    transition: background-color 0.3s ease;
}

.btn-list-user, .btn-submit {
    background-color: #ff7e5f;
}

.btn-list-user:hover, .btn-submit:hover {
    background-color: #ff6347;
}

.btn-kembali {
    background-color: #f8b85e;
}

.btn-kembali:hover {
    background-color: #f9a34f;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 1.5rem;
    }

    .btn-list-user, .btn-submit, .btn-kembali {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
}

    </style>
</head>
<body>
    <div>
        <a href="{{ route('user.list') }}" class="btn-list-user">List User</a>
    
        <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <h1 class="text-center">Input Data</h1>
                <div class="konten-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                        placeholder="Nama anda">
                </div>
    
                <div class="konten-2">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                        placeholder="NPM anda">
                </div>
    
                <div class="konten-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas_id" id="kelas_id">
                        @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                        @endforeach
                    </select>
                </div>
    
                <div class="konten-2">
                    <label for="foto" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto">
                    @if ($user->foto)
                    <img src="{{ Storage::url($user->foto) }}" alt="Profile Picture" class="profile-img"></img>
                    @endif
                </div>
    
                <button type="submit" class="btn-submit">Submit</button>
                <a href="{{ route('user.list') }}" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
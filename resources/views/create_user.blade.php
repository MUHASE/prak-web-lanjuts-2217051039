<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Form</title>
    <style>
        body {
            background: linear-gradient(135deg, #ff7e5f, #f8b85e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin-bottom: 10px;
            padding: 5px;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e69500;
        }

        .input-invalid {
            border-color: blue;
            background-color: #f0f8ff;
        }

        .pesan-error {
            color: blue;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
            text-align: left;
        }

        select {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        
            
        }

        select.input-invalid {
            border-color: blue;
            background-color: #f0f8ff;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <h1>Create User</h1>
        <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="@error('nama') input-invalid @enderror">
            @error('nama')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" value="{{ old('npm') }}" class="@error('npm') input-invalid @enderror">
            @error('npm')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="@error('kelas_id') input-invalid @enderror">
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
            @error('kelas_id')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>

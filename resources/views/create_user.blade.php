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

        input[type="text"] {
            width: 100%;
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
    </style>
</head>
<body>

<div class="container">
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <h1>Create User</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required>
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>

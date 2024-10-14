<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Card</title>
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

        .card {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 25px;
            padding: 40px;
            width: 320px;
            text-align: center;
            backdrop-filter: blur(1px);
            transition: transform 0.3s ease;
        }

        .profile-pp img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgba(26, 255, 0, 0.3);
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;

        }

        .profile-pp:hover {
            transform: translateY(-5px);
        }

        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgba(255, 255, 255, 0.3);
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.5);
        }

        .info {
            color: #58d68d;
        }

        .label {
            margin: 10px 0;
            padding: 10px;
            background-color: #3e2723;
            border-radius: 10px;
            color: #00ffe1;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="profile-pp">
        <img src="/asset/images/profile.jpeg" alt="Profile Image" class="profile-img">
    </div>
    <div class="info">
        <div class="label">{{ $nama }}</div>
        <div class="label">{{ $npm }}</div>
        <div class="label">{{ $kelas }}</div>
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Layout</title>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f6f9;
                margin: 0;
                padding: 0;
            }

            .content-wrapper {
                max-width: 1200px;
                margin: 50px auto;
                background-color: white;
                padding: 20px;
                margin-top: 150px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .btn-container {
                margin-bottom: 20px;
                text-align: right;
            }

            .btn {
                text-decoration: none;
                background-color: #28a745;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                transition: background-color 0.3s ease;
                font-weight: bold;
            }

            .btn:hover {
                background-color: #218838;
            }

            .table-container {
                width: 100%;
                overflow-x: auto;
            }
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            .table thead {
                background-color: #007bff;
                color: white;
            }

            .table th, .table td {
                padding: 12px 15px;
                text-align: left;
                border: 1px solid #ddd;
            }

            .table th {
                text-transform: uppercase;
                font-size: 14px;
            }

            .table tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            .table tbody tr:hover {
                background-color: #f1f1f1;
            }

            .view, .edit, .delete {
                text-decoration: none;
                padding: 5px 10px;
                border-radius: 4px;
                color: #fff;
                font-size: 0.9rem;
                font-weight: bold;
                margin-right: 5px;
                transition: background-color 0.3s ease;
            }

            .view {
                background-color: #17a2b8;
            }

            .view:hover {
                background-color: #138496;
            }

            .edit {
                background-color: #ffc107;
            }

            .edit:hover {
                background-color: #e0a800;
            }

            .delete {
                background-color: #dc3545;
                border: none;
            }

            .delete:hover {
                background-color: #c82333;
            }

            @media (max-width: 768px) {
                .content-wrapper {
                    padding: 15px;
                }

                .table th, .table td {
                    font-size: 14px;
                    padding: 10px;
                }

                .btn-container {
                    text-align: center;
                }

                .btn {
                    padding: 8px 16px;
                    font-size: 0.9rem;
                }
            }

    </style>
</head>
<body>

        <div class="content-wrapper">
            <div class="btn-container">
                <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($users as $user)
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['nama'] ?></td>
                                <td><?= $user['npm'] ?></td>
                                <td><?= $user['nama_kelas'] ?></td>
                                <td><img src="{{ asset('storage/'. $user->foto) }}" alt="Foto User" width="100"></td>
                                <td>
                                    <!-- View -->
                                <a href="{{ route('user.show', $user['id']) }}" class="view">View</a>
        
                                <!-- Edit -->
                                <a href="{{ route('user.edit', $user['id']) }}" class="edit">Edit</a>
        
                                <!-- Delete -->
                                <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER TAMBAH</title>
    <!-- Tambahkan Bootstrap (Opsional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>FORM TAMBAH DATA USER</h1>
        <form action="{{ url('/user/tambah_simpan') }}" method="POST">
            @csrf  <!-- CSRF Token Laravel -->
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
            </div>

            <div class="form-group">
                <label for="level_id">Level ID</label>
                <input type="number" name="level_id" class="form-control" placeholder="Masukkan ID Level" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>

    <!-- Tambahkan Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

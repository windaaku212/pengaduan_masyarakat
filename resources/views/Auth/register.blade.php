<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Pengaduan Online</title>
    
    <!-- Bootstrap CSS -->
       <!-- Load FontAwesome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   

    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Pastikan form selalu di tengah */
            padding: 20px; /* Agar ada jarak saat layar kecil */
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .input-group-text {
            background-color: #f8f9fa;
        }
        .toggle-password {
            cursor: pointer;
        }
        .btn-primary {
            background-color: #6c42f5;
            border: none;
        }
        .btn-primary:hover {
            background-color: #5734d6;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="text-center mb-3">
            <img src="{{asset('frontend')}}/assets/img/login.png" alt="Logo" width="100">
        </div>

        <!-- Form Register -->
        <form method="POST" action="{{ url('/auth/store') }}">
            @csrf

            <!-- NIK -->
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK" required>
                </div>
            </div>

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Masukan Nama Lengkap" required>
                </div>
            </div>

            <!-- Jenis Kelamin -->
<div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <div class="d-flex">
        <div class="form-check me-3">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required>
            <label class="form-check-label" for="laki">Laki-laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
            <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
    </div>
</div>


            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-s fa-map-marker-alt"></i></span>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Masukan Alamat" required>
                </div>
            </div>

            <!-- Nomor Kontak -->
            <div class="mb-3">
                <label for="notelepon" class="form-label">No Telephone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input type="text" class="form-control" id="notelepon" name="notelepon" value="{{ old('notelepon') }}" placeholder="Masukan No Telphone" required>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email" required>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Masukan Password" required>
                    <span class="input-group-text toggle-password">
                        <i class="fas fa-eye" onclick="togglePassword()"></i>
                    </span>
                </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="text-decoration-none text-primary">Forgot Password?</a>
            </div>

            <!-- Register Button -->
            <button type="submit" class="btn btn-primary w-100">Register</button>

            <!-- Login Link -->
            <div class="mt-3 text-left">
                <span>Already have an account?</span> <a href="/login" class="text-decoration-none text-primary">Login</a>
            </div>
        </form>
    </div>

    <!-- Toggle Password Visibility -->
    <script>
        function togglePassword() {
            let passwordInput = document.getElementById("password");
            let icon = event.target;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>

</body>
</html>

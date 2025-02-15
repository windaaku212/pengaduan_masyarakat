<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pengaduan Online</title>
    
    <!-- Load FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f4f4;
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

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="login-container">
        <div class="text-center mb-3">
            <img src="{{asset('frontend')}}/assets/img/login.png" width="80">
        </div>

        <form action="/authentication" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                    <span class="input-group-text toggle-password">
                        <i class="fa-solid fa-eye" onclick="togglePassword()"></i>
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

            <!-- Login Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>

            <!-- Register Link -->
            <div class="mt-3 text-left">
                <span>Don't have an account?</span> <a href="/register" class="text-decoration-none text-primary">Register</a>
            </div>
        </form>
    </div>
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

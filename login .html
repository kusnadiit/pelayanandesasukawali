<?php
// ... existing code ...

// Menambahkan form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Proses autentikasi di sini
    // Contoh autentikasi sederhana
    if ($username === 'admin' && $password === 'admin') {
        // Buat token (misalnya, menggunakan JWT)
        $token = bin2hex(random_bytes(16)); // Contoh token sederhana
        // Simpan token di session atau local storage
        $_SESSION['token'] = $token; // Jika menggunakan session
        // Redirect ke beranda.php setelah login berhasil
        header("Location: beranda.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Username atau password salah.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: #000;
            margin: 0; /* Menghapus margin default */
        }
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%; /* Mengubah lebar menjadi 90% untuk responsivitas */
            position: relative;
            z-index: 1;
            transition: transform 0.3s, box-shadow 0.3s; /* Menambahkan transisi untuk bayangan */
            display: flex;
            flex-direction: column; /* Mengatur elemen dalam kolom */
            justify-content: flex-start; /* Mengatur elemen ke atas */
        }
        .login-container:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 60px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan saat hover */
        }
        .login-container h2 {
            margin-bottom: 1rem; /* Mengurangi margin bawah untuk h2 */
            color: transparent; /* Set color to transparent for gradient effect */
            background: linear-gradient(90deg, #ff7e5f, #feb47b); /* Gradient colors */
            -webkit-background-clip: text; /* Clip background to text */
            background-clip: text; /* Clip background to text */
            text-align: center;
            font-size: 2rem; /* Adjust font size as needed */
        }
        @media (max-width: 600px) {
            .login-container {
                padding: 1.5rem; /* Mengurangi padding pada layar kecil */
            }
            .login-container h2 {
                font-size: 1.5rem; /* Mengurangi ukuran font pada layar kecil */
            }
        }
        .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(270deg, #ff7e5f, #feb47b);
            animation: gradient 15s ease infinite;
            z-index: 0;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .moving-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center;
            background-size: cover;
            animation: moveBackground 30s linear infinite;
            opacity: 0.5; /* Atur transparansi jika perlu */
            z-index: -1;
        }
        @keyframes moveBackground {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        .btn-primary {
            transition: background-color 0.3s, transform 0.3s;
            background-color: #ff7e5f;
            border: none;
        }
        .btn-primary:hover {
            background-color: #feb47b;
            transform: scale(1.05);
        }
        .toggle-password {
            cursor: pointer;
        }
        form {
            margin-top: 1rem; /* Menambahkan margin atas pada form */
        }
    </style>
</head>
<body>
    <div class="animated-background"></div>
    <div class="moving-background"></div>
    <div class="login-container">
        <h2 class="text-center">Login Admin</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" required>
                    <div class="input-group-append">
                        <span class="input-group-text toggle-password" id="togglePassword">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script untuk toggle password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eyeIcon');

        togglePassword.addEventListener('click', function () {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // Toggle the eye / eye slash icon
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>

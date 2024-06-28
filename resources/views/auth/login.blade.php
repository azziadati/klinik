<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>Sukses!</strong> Akun anda berhasil dibuat.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Oops!</strong> Email atau password salah.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="screen-1">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                    <form action="{{ route('login.authenticate') }}" method="POST">
                        @csrf
                        <div class="email">
                            <label for="email">Alamat Email</label>
                            <div class="sec-2">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" name="email" placeholder="Username@gmail.com"/>
                            </div>
                        </div>
                        <div class="password">
                            <label for="password">Kata Sandi</label>
                            <div class="sec-2">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input class="pas" type="password" name="Kata Sandi" placeholder="············"/>
                                <ion-icon class="show-hide" name="eye-outline" onclick="togglePasswordVisibility()"></ion-icon>
                            </div>
                        </div>
                        <button type="submit" class="login">Masuk</button>
                    </form>
                    <div class="footer">
                        <a href="{{ route('register') }}" class="button-signup">Belum punya akun?</a>
                        <span class="forgot-password" onclick="forgotPassword()">Lupa Password?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.querySelector('.password input');
            var showHideIcon = document.querySelector('.show-hide');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showHideIcon.name = 'eye-off-outline';
            } else {
                passwordInput.type = 'password';
                showHideIcon.name = 'eye-outline';
            }
        }

        function forgotPassword() {
            var emailInput = document.querySelector('.email input').value;
            // Ganti dengan logika untuk mengirim email reset password atau tautan ke halaman reset password
            alert('Kirim email reset password ke ' + emailInput);
        }
    </script>
</body>

</html>

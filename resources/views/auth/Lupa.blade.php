<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap'>
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">
</head>
<body>
    <div class="screen-1">
        <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
        <div class="email">
            <label for="email">Masukkan Email Anda</label>
            <div class="sec-2">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" placeholder="Username@gmail.com"/>
            </div>
        </div>
        <button class="send-reset-link">Kirim Tautan Reset</button>
    </div>

    <script>
        document.querySelector('.send-reset-link').addEventListener('click', function() {
            var emailInput = document.querySelector('.email input').value;
            // Ganti dengan logika untuk mengirim email reset password
            alert('Kirim email reset password ke ' + emailInput);
        });
    </script>
</body>
</html>

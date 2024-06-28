<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.css">
    <style>
        /* CSS yang sama dengan yang Anda berikan sebelumnya */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Zen Kaku Gothic New', sans-serif;
            font-size: 16px;
            background: #2E8B57;
            color: #132C33;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        a {
            color: #2E8B57;
            text-decoration: none;
        }
        a:visited {
            color: #2E8B57;
        }
        form {
            background: #FAFAFA;
            width: 35%;
            padding: 1.5rem 1.5rem 2rem;
            border-radius: 5px;
        }
        .header {
            margin-bottom: 1rem;
        }
        .judul {
            font-size: 2rem;
            color: #2E8B57;
            text-align: center;
        }
        .subtitle {
            font-size: 1.5rem;
        }
        .kotak {
            margin-bottom: 1rem;
        }
        .kotak-input {
            margin-bottom: .5rem;
        }
        .label {
            display: block;
            margin-bottom: .5rem;
        }
        .input {
            width: 100%;
            display: block;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .input:focus {
            outline: none;
            border-color: #2E8B57;
        }
        .password {
            margin-bottom: 1rem;
        }
        .sec-2 {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .sec-2 ion-icon {
            padding: 10px;
        }
        .sec-2 .pas {
            flex-grow: 1;
            border: none;
            padding: 10px 15px;
            border-radius: 0;
        }
        .sec-2 .pas:focus {
            outline: none;
            border-color: #2E8B57;
        }
        .sec-2 .show-hide {
            cursor: pointer;
            padding: 10px;
        }
        .tombol {
            background: #2E8B57;
            color: #fafafa;
            border: 0;
            width: 100%;
            padding: 10px 0;
            margin-top: .5rem;
            border-radius: 5px;
            font-family: inherit;
            font-weight: bold;
            font-size: inherit;
            cursor: pointer;
        }
        .tombol:hover {
            background: #2E8B57;
        }
    </style>
</head>

<body>
    @if (Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Oops!</strong> Data tidak lengkap. Akun anda gagal dibuat.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
           <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="header">
            <h1 class="judul">Daftar</h1>
            <p class="subtitle">Isi data diri</p>
        </div>
        <div class="kotak">
            <div class="kotak-input">
                <label class="label">Nama Pengguna</label>
                <input class="input" type="text" name="name" placeholder="Masukkan nama pengguna" required>
            </div>
            <div class="kotak-input">
                <label class="label">No. Telpon</label>
                <input class="input" type="text" name="no.telpon" placeholder="Masukkan nomer telpon" required>
            </div>
            <div class="kotak-input">
                <label class="label">Email</label>
                <input class="input" type="email" name="email" placeholder="Masukkan E-mail" required>
            </div>
            <div class="password">
                <label for="password" class="label">Kata Sandi Baru</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password" id="password" placeholder="············" required>
                    <ion-icon class="show-hide" name="eye-outline" onclick="togglePasswordVisibility('password')"></ion-icon>
                </div>
            </div>
            <button type="submit" class="tombol">Daftar</button>
        </div>
        <a href="{{ route('login') }}">Sudah punya akun? Masuk Disini</a>
    </form>
    <script>
        function togglePasswordVisibility(id) {
            const input = document.getElementById(id);
            const eyeIcon = input.nextElementSibling;

            if (input.type === "password") {
                input.type = "text";
                eyeIcon.name = "eye-off-outline";
            } else {
                input.type = "password";
                eyeIcon.name = "eye-outline";
            }
        }
    </script>
</body>
</html>

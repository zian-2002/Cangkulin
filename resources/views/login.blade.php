<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Cangkulin</title>
   <style>
    * { box-sizing: border-box; margin:0; padding:0; }

    body {
        font-family: 'Poppins', Arial, sans-serif;
        background: url('{{ asset("img/hero4.png") }}') center/cover no-repeat;
        height: 100vh;
        position: relative; /* FIX AGAR OVERLAY TIDAK GANGGU NAVBAR */
    }

    /* Overlay gelap */
    body::before {
        content:"";
        position: absolute;
        top:0; left:0;
        width:100%; height:100%;
        background: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(1px);
        z-index: 1;
    }

    /* NAVBAR FIX */
    .navbar {
    position: relative;
    background: white;               /* warna navbar putih */
    padding: 10px 20px;              /* tinggi lebih tipis */
    border-bottom: 2px solid #e0e0e0; /* garis bawah tipis */
    color: #2e7d32;                  /* teks hijau */
    text-align: left;                /* teks ke pojok kiri */
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 999;
}

    /* Wrapper */
    .auth-wrapper {
        position: relative;
        z-index: 2;
        min-height: calc(100vh - 55px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px;
    }

    /* Card */
    .login-card {
        width: 380px;
        background: rgba(255, 255, 255, 0.92);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 6px 25px rgba(0,0,0,0.25);
        backdrop-filter: blur(4px);
    }

        .login-card img.logo {
            width: 90px;
            margin-bottom: 10px;
        }

        .login-card h2 {
            font-weight: 600;
            margin-bottom: 5px;
            color: #2e7d32;
        }

        .subtitle {
            font-size: 13px;
            color: #546e7a;
            margin-bottom: 18px;
        }

        label {
            text-align: left;
            display: block;
            color: #37474f;
            font-size: 14px;
            margin-top: 12px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #b0bec5;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #43a047;
            box-shadow: 0 0 0 3px rgba(67,160,71,0.25);
        }

        button {
            width: 100%;
            padding: 11px;
            margin-top: 20px;
            background: #43a047;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.25s;
        }

        button:hover {
            background: #2e7d32;
        }

        .bottom-text {
            margin-top: 15px;
            font-size: 13px;
            color: #37474f;
        }

        .bottom-text a {
            color: #ff9800;
            font-weight: bold;
            text-decoration: none;
        }

        .error-message {
            margin-top: 10px;
            font-size: 13px;
            color: #c62828;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="navbar">CANGKULIN</div>

<div class="auth-wrapper">
    <div class="login-card">

        <!-- LOGO -->
        <img src="{{ asset('img/logo.png') }}" class="logo" alt="Logo Cangkulin">

        <h2>Login</h2>
        <p class="subtitle">Masuk sebagai admin untuk mengelola data Cangkulin.</p>

        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Masuk</button>

            <p class="bottom-text">
                Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>

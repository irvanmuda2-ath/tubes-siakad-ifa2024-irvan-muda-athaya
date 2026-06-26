<!DOCTYPE html>
<html>
<head>
    <title>Login SIAKAD</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(180deg,#0f172a,#1e3a8a);
        }

        .login-box{
            width:450px;
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 15px 40px rgba(0,0,0,.25);
        }

        .header{
            background:#0f172a;
            color:white;
            text-align:center;
            padding:25px;
            font-size:22px;
            font-weight:700;
        }

        .content{
            padding:40px;
        }

        .logo{
            text-align:center;
            margin-bottom:35px;
        }

        .logo h1{
            font-size:72px;
            color:#1e40af;
            font-weight:800;
            letter-spacing:4px;
            margin-bottom:8px;
        }

        .logo p{
            color:#64748b;
            font-size:18px;
        }

        input{
            width:100%;
            padding:14px 16px;
            margin-bottom:18px;
            border:1px solid #cbd5e1;
            border-radius:10px;
            font-size:15px;
            transition:.3s;
        }

        input:focus{
            outline:none;
            border-color:#1e40af;
            box-shadow:0 0 0 3px rgba(30,64,175,.15);
        }

        button{
            width:100%;
            background:#1e40af;
            color:white;
            border:none;
            padding:14px;
            border-radius:10px;
            font-size:16px;
            font-weight:600;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#1e3a8a;
        }

        .error{
            background:#fee2e2;
            color:#b91c1c;
            padding:12px;
            border-radius:8px;
            margin-bottom:15px;
            font-size:14px;
        }

    </style>
</head>

<body>

<div class="login-box">

    <div class="header">
        LOGIN SIAKAD
    </div>

    <div class="content">

        <div class="logo">
            <h1>SIAKAD</h1>
            <p>Sistem Informasi Akademik</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div class="error">
                    Email atau Password salah
                </div>
            @endif

            <input
                type="email"
                name="email"
                placeholder="Masukkan Email"
                required>

            <input
                type="password"
                name="password"
                placeholder="Masukkan Password"
                required>

            <button type="submit">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html>
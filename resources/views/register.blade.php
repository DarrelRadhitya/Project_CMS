<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            background: rgba(255,255,255,0.95);
        }
        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 0.2rem rgba(37,99,235,.15);
        }
        .btn-primary {
            background: linear-gradient(90deg, #2563eb 0%, #1e40af 100%);
            border: none;
            font-weight: 600;
            letter-spacing: 1px;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #1e40af 0%, #2563eb 100%);
        }
        .input-group .btn {
            border-radius: 0 8px 8px 0;
        }
        .input-group input {
            border-radius: 8px 0 0 8px;
        }
        .text-center a.btn-link {
            color: #2563eb;
            text-decoration: underline;
        }
        .text-center a.btn-link:hover {
            color: #1e40af;
        }
        h4 {
            font-weight: 700;
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4 animate__animated animate__fadeIn" style="width: 100%; max-width: 400px;">
        <div class="d-flex flex-column align-items-center mb-4">
            <div style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                <svg width="32" height="32" fill="#fff" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4-3a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM2 13s-1 0-1-1 1-4 7-4 7 3 7 4-1 1-1 1H2zm13-1c0-1.104-3.582-3-7-3s-7 1.896-7 3c0 .552.448 1 1 1h12c.552 0 1-.448 1-1z"/></svg>
            </div>
            <h4 class="text-center mb-0">Register</h4>
        </div>
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="fw-semibold">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required placeholder="Masukkan nama Anda">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="fw-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required placeholder="Masukkan email Anda">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="fw-semibold">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" required placeholder="Buat password">
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('password')" tabindex="-1" title="Show/Hide Password">👁️</button>
                </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="fw-semibold">Konfirmasi Password</label>
                <div class="input-group">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Ulangi password">
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('password_confirmation')" tabindex="-1" title="Show/Hide Password">👁️</button>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 mt-2">Register</button>
            <div class="mt-3 text-center">
                <span>Sudah punya akun?</span>
                <a href="{{ route('login') }}" class="btn btn-link">Login</a>
            </div>
        </form>
    </div>
</div>
<script>
    function togglePassword(id) {
        const input = document.getElementById(id);
        input.type = input.type === "password" ? "text" : "password";
    }
</script>
<!-- Animate.css for smooth animation -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</body>
</html>

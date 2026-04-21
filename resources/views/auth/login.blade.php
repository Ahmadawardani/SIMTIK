<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIMTIK POLDA DIY</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="login-page">
        <div class="login-card">
            <div class="logo-section">
                <div style="font-size:3.5rem;margin-bottom:8px;">🛡️</div>
                <h2>SIMTIK POLDA DIY</h2>
                <p>Bidang Teknologi Informasi dan Komunikasi</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label><i class="fas fa-id-badge"></i> NRP (Nomor Registrasi Pokok)</label>
                    <input type="text" name="nrp" class="form-control {{ $errors->has('nrp') ? 'error' : '' }}" placeholder="Masukkan NRP Anda" value="{{ old('nrp') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label><i class="fas fa-lock"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:14px;">
                    <i class="fas fa-sign-in-alt"></i> Masuk
                </button>
            </form>

            <div style="text-align:center;margin-top:20px;">
                <a href="{{ route('beranda') }}" style="color:var(--primary);font-size:0.9rem;font-weight:500;">
                    <i class="fas fa-arrow-left"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</body>
</html>

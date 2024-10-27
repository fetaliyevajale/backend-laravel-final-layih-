<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> 
</head>
<body>
    <div class="login-container">
        <h2>Admin Girişi</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Şifrə:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Daxil Ol</button>
            </div>
        </form>
    </div>
</body>
</html>

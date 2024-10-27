<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> 
</head>
<body>
    <div class="admin-container">
        <header class="admin-header">
            <h1>Admin Paneli</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}">Ana Səhifə</a></li>
                    <li><a href="{{ route('admin.why_choose_us.index') }}">Niyə Biz</a></li>
                    <li><a href="{{ route('admin.services.index') }}">Xidmətlər</a></li>
                    <li><a href="{{ route('admin.about.index') }}">Bizim Haqqımızda</a></li>
                    <li><a href="{{ route('admin.gallery.index') }}">Qalereya</a></li>
                    <li><a href="{{ route('admin.logout') }}">Çıxış</a></li>
                </ul>
            </nav>
        </header>
        
        <main class="admin-main">
            @yield('content') 
        </main>

        <footer class="admin-footer">
            <p>© {{ date('Y') }} Şirkət Adı. Bütün hüquqlar qorunur.</p>
        </footer>
    </div>
</body>
</html>

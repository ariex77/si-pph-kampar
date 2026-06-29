<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-PPH KAMPAR - Sistem Informasi Pola Pangan Harapan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class="bg-blue-900 bg-opacity-50 backdrop-blur-md px-6 py-4 shadow-lg">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-2xl">📊</span>
                <h1 class="text-white text-2xl font-bold">SI-PPH KAMPAR</h1>
            </div>
            
            @if (Route::has('login'))
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-200 font-semibold">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-white hover:text-gray-200 font-semibold">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-6 py-2 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-100 transition">
                            Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-6 py-2 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-blue-600 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-1 flex items-center justify-center px-6 py-12">
        <div class="max-w-4xl w-full">
            <!-- Hero Section -->
            <div class="text-center text-white mb-12">
                <h2 class="text-5xl md:text-6xl font-bold mb-4">SI-PPH KAMPAR</h2>
                <p class="text-2xl opacity-95 mb-2">Sistem Informasi Pola Pangan Harapan</p>
                <p class="text-lg opacity-85">Kabupaten Kampar</p>
            </div>

            <!-- Description Box -->
            <div class="bg-white bg-opacity-15 backdrop-blur-md rounded-xl p-8 mb-12 border border-white border-opacity-20 shadow-xl">
                <p class="text-lg leading-relaxed text-white">
                    Platform terpadu untuk monitoring dan evaluasi Pola Pangan Harapan (PPH) di Kabupaten Kampar. 
                    Kelola survei, data responden, dan analisis konsumsi pangan secara real-time dengan dashboard interaktif.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition shadow-lg">
                    <div class="text-5xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-white mb-2">Dashboard Interaktif</h3>
                    <p class="text-white opacity-90 text-sm">KPI real-time dan visualisasi data PPH dengan chart canggih</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition shadow-lg">
                    <div class="text-5xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-white mb-2">Manajemen Survei</h3>
                    <p class="text-white opacity-90 text-sm">Kelola survei, responden, dan data konsumsi pangan</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition shadow-lg">
                    <div class="text-5xl mb-4">📈</div>
                    <h3 class="text-xl font-bold text-white mb-2">Laporan & Analisis</h3>
                    <p class="text-white opacity-90 text-sm">Export laporan PDF dan analitik mendalam per kecamatan</p>
                </div>
            </div>

            <!-- CTA Section -->
            @if (Route::has('login'))
                @guest
                    <div class="text-center">
                        <p class="text-white text-lg mb-6 opacity-90">Siap memulai? Login sekarang untuk akses penuh</p>
                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            <a href="{{ route('login') }}" class="px-10 py-4 bg-white text-blue-600 font-bold text-lg rounded-lg hover:bg-gray-100 transition shadow-xl">
                                🔐 Login Sekarang
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-10 py-4 bg-transparent border-3 border-white text-white font-bold text-lg rounded-lg hover:bg-white hover:text-blue-600 transition shadow-xl">
                                    📝 Daftar Akun
                                </a>
                            @endif
                        </div>
                    </div>
                @endguest
            @endif
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 bg-opacity-50 backdrop-blur-md text-white text-center py-6 text-sm opacity-80">
        <p>© 2025 SI-PPH KAMPAR | Dinas Ketahanan Pangan Kabupaten Kampar</p>
    </footer>
</body>
</html>

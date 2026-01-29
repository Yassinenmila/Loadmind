<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Sphere - Q&A Community</title>
    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0B0F1A; }
        ::-webkit-scrollbar-thumb { background: #1E293B; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #334155; }
    </style>
</head>
<body class="bg-[#0B0F1A] text-slate-300 font-sans min-h-screen">

    <header class="border-b border-slate-800/60 bg-[#0B0F1A]/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-8">
                <div class="text-white font-bold text-xl tracking-tighter flex items-center gap-2">
                    <div class="w-6 h-6 bg-gradient-to-tr from-cyan-400 to-blue-600 rounded-md rotate-3"></div>
                    SPHERE
                </div>
                
                <div class="hidden lg:flex items-center bg-slate-900/50 border border-slate-800 rounded-full px-4 py-1.5 gap-3 w-96 focus-within:border-cyan-500/50 transition">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Rechercher une question..." class="bg-transparent border-none outline-none text-sm w-full text-slate-200">
                    <kbd class="text-[10px] bg-slate-800 px-1.5 py-0.5 rounded text-slate-500">⌘K</kbd>
                </div>
            </div>

            <div class="flex items-center gap-4">
                @auth
                    <button class="bg-white text-black px-5 py-1.5 rounded-full text-sm font-bold hover:bg-cyan-400 transition transform active:scale-95">
                        Poser une question
                    </button>
                    <div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700">
                        <img src="https://img.icons8.com/?size=100&id=Hj21JM30swCm&format=png&color=000000">
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-400 hover:text-red-300">
                            Déconnexion
                        </button>
                    </form>
                @endauth
                @guest
                    <a href="/login" class="text-sm font-medium text-slate-500 hover:text-slate-300 transition">
                        Connexion
                    </a>
                    <a href="/signup" class="bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 px-4 py-1.5 rounded-full text-sm font-bold hover:bg-cyan-500/20 transition transform active:scale-95">
                        S'inscrire
                    </a>
                @endguest
            </div>
        </div>
    </header>
    @yield('content')

</body>
</html>
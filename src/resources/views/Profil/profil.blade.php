<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil - Sphere</title>
</head>
<body class="bg-[#0B0F1A] text-slate-300 font-sans min-h-screen">

    <header class="border-b border-slate-800/60 bg-[#0B0F1A]/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="text-white font-bold text-xl tracking-tighter flex items-center gap-2">
                <div class="w-5 h-5 bg-gradient-to-tr from-cyan-400 to-blue-600 rounded shadow-lg shadow-cyan-500/20"></div>
                SPHERE
            </div>
            <button class="text-sm font-bold text-slate-500 hover:text-white transition">Déconnexion</button>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-12">
        
        <div class="grid grid-cols-12 gap-8">
            
            <aside class="col-span-12 lg:col-span-4 space-y-6">
                <div class="bg-slate-900/30 border border-slate-800/60 rounded-[2.5rem] p-8 text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-24 bg-gradient-to-r from-cyan-500/10 to-blue-600/10"></div>
                    
                    <div class="relative inline-block mt-4">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-cyan-400 to-blue-600 p-1">
                            <div class="w-full h-full rounded-full bg-[#0B0F1A] flex items-center justify-center overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name=Alex+Dev&background=0B0F1A&color=fff" alt="Avatar">
                            </div>
                        </div>
                        <div class="absolute bottom-1 right-1 w-5 h-5 bg-green-500 border-4 border-[#0B0F1A] rounded-full"></div>
                    </div>

                    <h2 class="text-2xl font-black text-white mt-6 tracking-tight">Alex_Dev</h2>
                    <p class="text-slate-500 text-sm font-medium">@alex_developer_24</p>
                    
                    <div class="flex items-center justify-center gap-2 mt-4 text-xs font-bold text-slate-400 uppercase tracking-widest">
                        <svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        Paris, France
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-8 pt-8 border-t border-slate-800/50">
                        <div>
                            <p class="text-xl font-black text-white">42</p>
                            <p class="text-[10px] font-bold text-slate-600 uppercase">Posts</p>
                        </div>
                        <div>
                            <p class="text-xl font-black text-white">856</p>
                            <p class="text-[10px] font-bold text-slate-600 uppercase">Likes</p>
                        </div>
                    </div>

                    <button class="w-full mt-8 py-3 bg-slate-800 hover:bg-slate-700 text-white text-xs font-black uppercase tracking-widest rounded-2xl transition">
                        Modifier le profil
                    </button>
                </div>
            </aside>

            <section class="col-span-12 lg:col-span-8">
                
                <div class="flex gap-8 border-b border-slate-800/60 mb-8 px-2">
                    <button class="pb-4 text-sm font-black uppercase tracking-widest border-b-2 border-cyan-500 text-cyan-400">
                        Mes Posts
                    </button>
                    <button class="pb-4 text-sm font-black uppercase tracking-widest border-b-2 border-transparent text-slate-600 hover:text-slate-400 transition">
                        Likes
                    </button>
                </div>

                <div class="space-y-4">
                    
                    <div class="group bg-slate-900/30 border border-slate-800/60 p-6 rounded-[2rem] hover:bg-slate-800/40 transition-all cursor-pointer">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-[10px] font-bold text-slate-600 uppercase tracking-widest">Il y a 2 jours</span>
                            <div class="flex gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan-500"></span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition mb-2">Comment optimiser mon workflow avec Tailwind CSS ?</h3>
                        <p class="text-sm text-slate-500 line-clamp-2">Je cherche des astuces pour mieux organiser mes classes et mes fichiers de configuration...</p>
                        
                        <div class="mt-6 flex gap-6">
                            <div class="flex items-center gap-2 text-slate-600">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg>
                                <span class="text-xs font-bold">24</span>
                            </div>
                            <div class="flex items-center gap-2 text-slate-600">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7z"></path></svg>
                                <span class="text-xs font-bold">8</span>
                            </div>
                        </div>
                    </div>

                    <div class="group bg-slate-900/30 border border-slate-800/60 p-6 rounded-[2rem] hover:bg-slate-800/40 transition-all cursor-pointer">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-[10px] font-bold text-slate-600 uppercase tracking-widest">Il y a 1 semaine</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-cyan-400 transition mb-2">Meilleur café pour travailler à Lyon ?</h3>
                        <p class="text-sm text-slate-500 line-clamp-2">Besoin d'un endroit calme avec une bonne connexion Wi-Fi pour cet après-midi.</p>
                        
                        <div class="mt-6 flex gap-6 text-slate-600">
                            <div class="flex items-center gap-2"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg><span class="text-xs font-bold">12</span></div>
                            <div class="flex items-center gap-2"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7z"></path></svg><span class="text-xs font-bold">3</span></div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </main>

</body>
</html>
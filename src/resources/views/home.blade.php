@extends('layouts.app')

@section('content')
    <main class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-12 gap-8">
        
        <aside class="col-span-12 lg:col-span-3 space-y-8">
            <div class="bg-slate-900/20 p-6 rounded-2xl border border-slate-800/50">
                <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">Géolocalisation</h3>
                <div class="space-y-6">
                    <div>
                        <label class="text-[10px] font-bold text-slate-600 uppercase mb-2 block">Ville actuelle</label>
                        <select class="w-full bg-[#0B0F1A] border border-slate-800 text-sm rounded-xl px-3 py-2 outline-none focus:border-cyan-500/50 transition">
                            <option>Paris, FR</option>
                            <option>Lyon, FR</option>
                            <option>Casablanca, MA</option>
                            <option>Montréal, CA</option>
                        </select>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <label class="text-[10px] font-bold text-slate-600 uppercase block">Distance</label>
                            <span class="text-[10px] text-cyan-400 font-bold">25 km</span>
                        </div>
                        <input type="range" class="w-full h-1 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-cyan-500">
                        <div class="flex justify-between mt-2 text-[10px] text-slate-500 font-medium">
                            <span>0km</span>
                            <span>100km+</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <button class="py-2 bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 rounded-lg text-[10px] font-black uppercase">À proximité</button>
                        <button class="py-2 bg-slate-900 border border-slate-800 text-slate-500 rounded-lg text-[10px] font-black uppercase hover:text-slate-300 transition">Populaire</button>
                    </div>
                </div>
            </div>
        </aside>

        <section class="col-span-12 lg:col-span-9 space-y-8">
            
            <article class="bg-slate-900/30 border border-slate-800/60 rounded-3xl overflow-hidden shadow-xl">
                <div class="p-6 md:p-8">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-orange-400 to-red-500"></div>
                            <div>
                                <p class="text-sm font-bold text-white tracking-tight">Karim_WebDev</p>
                                <p class="text-[11px] text-slate-500">Posté il y a 3h • Paris 11e</p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <span class="bg-slate-800 text-slate-400 text-[10px] px-2 py-1 rounded font-bold uppercase">#Entraide</span>
                        </div>
                    </div>

                    <h1 class="text-2xl font-bold text-white mb-4 leading-tight">
                        Quel est le meilleur spot pour coder au calme près de la Place de la Bastille ? ☕
                    </h1>
                    <p class="text-slate-400 leading-relaxed mb-8">
                        Je cherche un café avec une bonne connexion Wi-Fi et surtout des prises électriques accessibles. Si vous avez des reco avec une ambiance pas trop bruyante, je suis preneur !
                    </p>

                    <div class="flex items-center gap-4 py-4 border-y border-slate-800/50">
                        <button class="flex items-center gap-2 group">
                            <div class="p-2 bg-slate-800 rounded-xl group-hover:bg-red-500/20 transition">
                                <svg class="w-5 h-5 text-slate-500 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                            <span class="text-sm font-bold text-slate-400">128</span>
                        </button>
                        <div class="flex items-center gap-2">
                            <div class="p-2 bg-slate-800 rounded-xl">
                                <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                            <span class="text-sm font-bold text-slate-400">3 Réponses</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#0B1224]/50 p-6 md:p-8 space-y-8">
                    
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl blur opacity-10 group-focus-within:opacity-30 transition"></div>
                        <div class="relative bg-[#0B0F1A] rounded-2xl border border-slate-700/50 p-4">
                            <textarea rows="2" placeholder="Ajouter un commentaire constructif..." class="w-full bg-transparent border-none focus:ring-0 text-sm text-slate-200 resize-none"></textarea>
                            <div class="flex justify-between items-center mt-2 border-t border-slate-800 pt-3">
                                <div class="flex gap-3 text-slate-500">
                                    <button class="hover:text-cyan-400 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 00-2 2z"></path></svg></button>
                                </div>
                                <button class="bg-cyan-500 hover:bg-cyan-400 text-[#0B0F1A] px-4 py-1.5 rounded-lg text-xs font-black uppercase tracking-tighter transition shadow-lg shadow-cyan-500/10">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex gap-4 group">
                            <div class="w-8 h-8 rounded-full bg-slate-700 shrink-0 border border-slate-600"></div>
                            <div class="flex-grow">
                                <div class="bg-slate-800/30 p-4 rounded-2xl border border-slate-800/40 group-hover:border-slate-700 transition">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-xs font-bold text-white">Sophie_Design</span>
                                        <span class="text-[10px] text-slate-600 uppercase font-bold">Utile (4)</span>
                                    </div>
                                    <p class="text-sm text-slate-400 leading-relaxed">
                                        Le "Hubsy" près de Bastille est parfait. C'est un café coworking, tu paies à l'heure et les boissons sont à volonté. Le Wi-Fi est super stable !
                                    </p>
                                </div>
                                <div class="flex gap-4 mt-2 ml-2">
                                    <button class="text-[10px] font-bold text-slate-600 hover:text-cyan-400 transition uppercase tracking-tighter">Répondre</button>
                                    <button class="text-[10px] font-bold text-slate-600 hover:text-white transition uppercase tracking-tighter">Signaler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

        </section>
    </main>

@endsection
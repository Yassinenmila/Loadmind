@extends('layouts.app')

@section('content')
<main class="max-w-3xl mx-auto px-6 py-12">
        <div class="bg-slate-900/30 border border-slate-800/60 rounded-3xl p-8 shadow-2xl">
            <form action="{{ route('posts.store') }}" method="POST" class="space-y-8">
                @csrf
                <div class="group relative">
                <label class="text-[10px] font-black text-slate-600 uppercase tracking-widest absolute -top-3 left-0 group-focus-within:text-cyan-500 transition-colors">
                    Titre du post
                </label>
                <input type="text" placeholder="Que souhaitez-vous demander ?" class="w-full bg-transparent border-b border-slate-800 py-4 text-xl md:text-2xl text-white font-bold placeholder:text-slate-700 focus:outline-none focus:border-cyan-500 transition-all">
            </div>
            <div class="group relative">
                <label class="text-[10px] font-black text-slate-600 uppercase tracking-widest absolute -top-3 left-0 group-focus-within:text-cyan-400 transition-colors">
                    Contenu
                </label>
                <textarea rows="4" placeholder="Détaillez votre pensée ici..." class="w-full bg-[#0F172A]/50 rounded-2xl p-5 mt-2 border border-slate-800 text-slate-300 focus:outline-none focus:border-cyan-500/50 focus:ring-4 focus:ring-cyan-500/5 transition-all resize-none"></textarea>
            </div>
            <div class="group relative">
                <label class="text-[10px] font-black text-slate-600 uppercase tracking-widest absolute -top-3 left-0 group-focus-within:text-cyan-400 transition-colors">
                    Localisation
                </label>
                <div class="flex items-center border-b border-slate-800 group-focus-within:border-cyan-500 transition-all">
                    <svg class="w-5 h-5 text-slate-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    </svg>
                    <input type="text" placeholder="Ex: Paris, France" class="w-full bg-transparent py-4 text-slate-200 focus:outline-none">
                </div>
            </div>
            <div class="pt-6 flex justify-end">
                <button type="submit" class="w-full md:w-auto px-12 py-4 bg-white text-black font-black uppercase text-xs tracking-[0.2em] rounded-full hover:bg-cyan-400 hover:scale-105 active:scale-95 transition-all duration-300 shadow-xl shadow-white/5">
                    Publier le post
                </button>
            </div>
            </form>
        </div>
    </main>
@endsection
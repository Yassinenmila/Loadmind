@extends('layouts.app')

@section('content')
<main class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-12 gap-8">

    <!-- Sidebar / filtre -->
    <aside class="col-span-12 lg:col-span-3 space-y-8">
        <div class="bg-slate-900/20 p-6 rounded-2xl border border-slate-800/50">
            <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">Filtrer / Trier</h3>
            <form method="GET" action="{{ route('home') }}" class="space-y-6">
                <div>
                    <label class="text-[10px] font-bold text-slate-600 uppercase mb-2 block">Trier par</label>
                    <select name="order" onchange="this.form.submit()"
                        class="w-full bg-[#0B0F1A] border border-slate-800 text-sm rounded-xl px-3 py-2 outline-none focus:border-cyan-500/50 transition">
                        <option value="date" {{ request('order') === 'date' ? 'selected' : '' }}>Date</option>
                        <option value="likes" {{ request('order') === 'likes' ? 'selected' : '' }}>Plus de likes</option>
                        <option value="comments" {{ request('order') === 'comments' ? 'selected' : '' }}>Plus de commentaires</option>
                    </select>
                </div>
            </form>
        </div>
    </aside>

    <!-- Section posts -->
    <section class="col-span-12 lg:col-span-9 space-y-8">

        @forelse ($posts as $post)
        <article class="bg-slate-900/30 border border-slate-800/60 rounded-3xl overflow-hidden shadow-xl">

            <div class="p-6 md:p-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-orange-400 to-red-500"></div>
                        <div>
                            <p class="text-sm font-bold text-white">
                                {{ $post->user->name ?? 'Anonyme' }}
                            </p>
                            <p class="text-[11px] text-slate-500">
                                {{ $post->location }} • {{ $post->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <h1 class="text-2xl font-bold text-white mb-4 leading-tight">
                    {{ $post->titre }}
                </h1>

                <p class="text-slate-400 leading-relaxed mb-8 whitespace-pre-line">
                    {{ $post->contenu }}
                </p>

                <!-- Likes & comments -->
                <div class="flex items-center gap-6 py-4 border-y border-slate-800/50">

                    <!-- Likes -->
                    <div class="flex items-center gap-2">
                        <div class="p-2 bg-slate-800 rounded-xl">
                            ❤️
                        </div>
                        <span class="text-sm font-bold text-slate-400">
                            {{ $post->likes_count ?? $post->likes->count() }}
                        </span>
                    </div>

                    <!-- Comments -->
                    <div class="flex items-center gap-2">
                        <div class="p-2 bg-slate-800 rounded-xl">
                            💬
                        </div>
                        <span class="text-sm font-bold text-slate-400">
                            {{ $post->comments_count ?? $post->comments->count() }} réponses
                        </span>
                    </div>

                </div>
            </div>

            <!-- Commentaires -->
            <div class="bg-[#0B1224]/50 p-6 md:p-8 space-y-8">

                @auth
                <form action="{{ route('likes.store') }}" method="POST" class="inline">
                    @csrf
                    <input type="hidden" value="{{ $post->id }}">
                    <button type="submit" class="flex items-center space-x-1 text-sm font-semibold px-2 py-1 rounded-lg{{ auth()->check() && $post->isLikedBy(auth()->user()) ? 'bg-red-500 text-white' : 'bg-gray-700 text-gray-200' }}">❤️<span>{{ $post->likes()->count() }}</span>
                    </button>
                </form>
                <form action="{{ route('comments.store') }}" method="POST"
                      class="bg-[#0B0F1A] rounded-2xl border border-slate-700/50 p-4">
                    @csrf
                    <textarea name="content" rows="2" placeholder="Ajouter un commentaire..." class="w-full bg-transparent border-none focus:ring-0 text-sm text-slate-200 resize-none"></textarea>
                    <div class="text-right mt-3">
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button class="bg-cyan-500 hover:bg-cyan-400 text-[#0B0F1A] px-4 py-1.5 rounded-lg text-xs font-black uppercase">
                            Envoyer
                        </button>
                    </div>
                </form>
                @endauth
                <div class="space-y-6">
                    @foreach ($post->comments as $comment)
                    <div class="flex gap-4">
                        <div class="w-8 h-8 rounded-full bg-slate-700"></div>
                        <div class="bg-slate-800/30 p-4 rounded-2xl border border-slate-800/40 w-full">
                            <p class="text-xs font-bold text-white mb-1">
                                {{ $comment->user->name ?? 'Anonyme' }}
                            </p>
                            <p class="text-sm text-slate-400">
                                {{ $comment->content }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </article>
        @empty
            <p class="text-slate-400">Aucun post pour le moment.</p>
        @endforelse

    </section>
</main>
@endsection

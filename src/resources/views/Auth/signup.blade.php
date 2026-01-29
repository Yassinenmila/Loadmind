<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Créer un compte</title>
</head>
<body class="bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md transform transition-all">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Créer un compte</h1>
            <p class="text-gray-500 mt-2">Rejoignez l'aventure en quelques clics.</p>
        </div>
        <form action="/signup" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                <input name="name" type="text" placeholder="Jean Dupont" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-purple-500 focus:bg-white focus:outline-none transition duration-200" required>
            </div>
            @error('name')
                <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Localisation</label>
                <input name="location" type="text" placeholder="Location" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-purple-500 focus:bg-white focus:outline-none transition duration-200" required>
            </div>
            @error('location')
                <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Adresse Email</label>
                <input name="email" type="email" placeholder="nom@exemple.com" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-purple-500 focus:bg-white focus:outline-none transition duration-200" required>
            </div>
            @error('email')
                <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
                    {{ $message }}
                </div>
            @enderror
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <input name="password" type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-purple-500 focus:bg-white focus:outline-none transition duration-200" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer</label>
                    <input name="password_confirmation" type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-purple-500 focus:bg-white focus:outline-none transition duration-200" required>
                </div>
            </div>
            @error('password')
                <div class="bg-red-100 text-red-700 p-3 rounded-lg text-sm">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform active:scale-95 mt-4">
                S'inscrire
            </button>
        </form>
        <p class="text-center text-sm text-gray-600 mt-8">
            Déjà un compte ? 
            <a href="/login" class="font-bold text-purple-600 hover:underline">Se connecter</a>
        </p>
    </div>

</body>
</html>
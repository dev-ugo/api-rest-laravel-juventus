<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Juventus - Documentation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">⚽ API Juventus</h1>
            <p class="text-lg text-gray-600">Documentation des endpoints disponibles</p>
        </header>

        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-semibold mb-6">🔗 Endpoints disponibles</h2>

            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-4">
                    <h3 class="text-xl font-medium text-blue-900">GET /api/players</h3>
                    <p class="text-gray-600 mt-2">Récupère la liste complète des joueurs de la Juventus</p>
                    <div class="mt-3">
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded">GET</span>
                    </div>
                </div>

                <div class="border-l-4 border-blue-500 pl-4">
                    <h3 class="text-xl font-medium text-blue-900">GET /api/players/{id}</h3>
                    <p class="text-gray-600 mt-2">Récupère les détails d'un joueur spécifique</p>
                    <div class="mt-3">
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded">GET</span>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">📝 Structure des données</h2>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <pre class="text-sm text-gray-700">{
        "id": 1,
        "name": "Federico Chiesa",
        "position": "Attaquant",
        "nationality": "Italien",
        "birth_date": "1997-10-25",
        "matches_played": 125,
        "goals_scored": 27,
        "assists": 21
}</pre>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
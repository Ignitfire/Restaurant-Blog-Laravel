<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
       Bienvenue dans votre Dashboard pour administrateur !
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Ici vous pouvez gérer tous les restaurants et tous les utilisateurs.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="/admin/restaurants">Gérer les restaurants</a>
            </h2>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="/admin/users">Gérer les utilisateurs</a>
            </h2>
        </div>
    </div>
    <div class="flex items-center">
        <h2 class="ml-3 text-xl font-semibold text-gray-900">
            <a href="/admin/comments">Gérer les commentaires</a>
        </h2>
    </div>
</div>

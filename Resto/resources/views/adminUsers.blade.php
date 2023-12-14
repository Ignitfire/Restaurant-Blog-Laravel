<x-adminapp>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilisateurs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
            <div class="alert alert-success">
                <strong>{{ (session('success')) }} </strong>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Last update</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>{{$user->role}}</td>
                            <td><x-button>Modifier</x-button></td>
                            <td><x-button><a href="{{route('adminUsers.destroy', $user)}}">Supprimer</a></x-button></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-adminApp>

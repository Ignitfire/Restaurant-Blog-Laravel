<x-adminapp>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurants') }}
        </h2>
    </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href='/admin/restaurants/new'><x-button>Ajouter un restaurant</x-button></a>
        @if (session('success'))
        <div class="alert alert-success">
            <strong>{{ (session('success')) }} </strong>
        </div>
        @endif
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-auto">
                <thead>
                  <tr>
                    <th>ID restaurant</th>
                    <th>Titre</th>
                    <th>ID propriétaire</th>
                    <th>Contenu</th>
                    <th>Type de nourrriture</th>
                    <th>Prix</th>
                    <th>Tags</th>
                    <th>Statuts</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant->id}}</td>
                        <td>{{$restaurant->title}}</td>
                        <td>{{$restaurant->owner_id}}</td>
                        <td>{{$restaurant->content}}</td>
                        <td>{{$restaurant->foodtype}}</td>
                        <td>{{$restaurant->price}}</td>
                        <td>{{$restaurant->tags}}</td>
                        <td>{{$restaurant->status}}</td>
                        <td><a href="{{route('adminRestaurants.edit', $restaurant)}}"><x-button class='bg-blue'>Modifier</x-button></a></td>
                        <td><x-button class='bg-red'><a href="{{route('adminRestaurants.destroy', $restaurant)}}">Supprimer</x-button></td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>

</x-adminApp>

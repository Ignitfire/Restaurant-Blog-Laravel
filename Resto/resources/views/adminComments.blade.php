<x-adminapp>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commentaires') }}
        </h2>
    </x-slot>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-auto">
                <thead>
                  <tr>
                    <th>ID commentaire -</th>
                    <th>ID auteur -</th>
                    <th>ID restaurant -</th>
                    <th>Note -</th>
                    <th>Message -</th>
                    <th>Dernière mise à jour -</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->author_id}}</td>
                        <td>{{$comment->restaurant_id}}</td>
                        <td>{{$comment->rating}}</td>
                        <td>{{$comment->message}}</td>
                        <td>{{$comment->updated_at}}</td>
                        <td>
                            <x-button>MODIFIER</x-button>
                            <x-button><a href="{{route('adminComments.destroy', $comment)}}">SUPPRIMER</a></x-button>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>

</x-adminApp>

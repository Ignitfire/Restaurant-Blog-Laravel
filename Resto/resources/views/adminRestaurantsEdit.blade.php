<x-adminapp>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un restaurants') }}
        </h2>
    </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form method="GET">
                @csrf
            <div>
                <label>Nom du restaurant</label>
                <input type="text" name="title" value="{{old('title', $restaurant->title)}}">
                @error('title')
                    {{$message}}
                @enderror
            </div>
            <div>
                <label>ID du propriétaire</label>
                <input type="text" name="owner_id" value="{{old('owner_id', $restaurant->owner_id)}}">
                @error('owner_id')
                    {{$message}}
                @enderror
            </div>
            <div>
                <label>Description</label>
                <textarea name='content'>{{old('content', $restaurant->content)}}</textarea>
                @error('content')
                    {{$message}}
                @enderror
            </div>
            <div>
                <label>Type de nourriture</label>
                <input type="text" name="food_type" value="{{old('food_type', $restaurant->food_type)}}">
                @error('food_type')
                    {{$message}}
                @enderror
            </div>
            <div>
                <label>Prix</label>
                <input type="text" name="price" value="{{old('price', $restaurant->price)}}">
                @error('price')
                    {{$message}}
                @enderror
            </div>
            <div>
                <label>Tags</label>
                <input type="text" name="tags" value="{{old('tags', $restaurant->tags)}}">
                @error('tags')
                    {{$message}}
                @enderror
            </div>
            <div>
                <label>Statut</label>
                <input type="text" name="status" value="{{old('status', $restaurant->status)}}">
                @error('status')
                    {{$message}}
                @enderror
            </div>
                <x-button>Enregistrer</x-button>
            </form>

        </div>
    </div>
</div>

</x-adminApp>

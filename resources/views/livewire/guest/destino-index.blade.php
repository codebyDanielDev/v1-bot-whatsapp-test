<div>

    <div class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($destinos as $destino)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="{{ $destino->image }}" alt="Imagen de destino">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $destino->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $destino->description }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <a href="{{ route('destinos.show', ['id' => $destino->id, 'slug' => Str::slug($destino->title)]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Ver más
                        </a>
                        
                        
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
    
    
 
</div>

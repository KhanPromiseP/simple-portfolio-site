<x-layout>
    {{-- Projects start  --}}
    <div class="space-y-8">
        <div>
            <h4 class="text-sm text-white/50">{{ $category }}</h4>
            <h2 class="text-4xl font-semibold text-white">{{ $name}}</h2>
        </div>
        <div>
            <img src="{{ asset('images/'.$image) }}" class="w-full h-96 object-cover rounded" alt="Project Mockup">
        </div>
        <div class="space-y-4">
            {!! $description !!}
        </div>
    </div>
    {{-- Projects end  --}}
</x-layout>

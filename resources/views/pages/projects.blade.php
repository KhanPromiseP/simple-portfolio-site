<x-layout>
    {{-- Projects start  --}}
    <div class="space-y-8">
        <h2 class="text-4xl font-semibold text-white">{{ $heading }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @foreach ($items as $item)
            {{-- Item start --}}
            <a href="{{ route('project.show', $item['id']) }}" class="p-6 rounded border-2 border-white/10 space-y-4">
                <img src="{{ asset('images/'.$item['image']) }}" class="w-full h-44 object-cover rounded" alt="Project Mockup">
                <div>
                    <h4 class="text-sm text-white/50">{{ $item['category'] }}</h4>
                    <h3 class="text-xl text-white">{{ $item['name'] }}</h3>
                </div>
            </a>
            {{-- Item end --}}
            @endforeach
        </div>
    </div>
    {{-- Projects end  --}}
</x-layout>

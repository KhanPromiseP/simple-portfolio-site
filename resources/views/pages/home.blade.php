<x-layout>
    {{-- About me start  --}}
    <div>
        <h2 class="text-4xl font-semibold text-white">{{ $about['heading'] }}</h2>

        <p class="mt-4 text-sm/relaxed">
            {{ $about['description'] }}
        </p>
    </div>
    {{-- About me end  --}}

    {{-- Services start  --}}
    <div class="space-y-8">
        <h2 class="text-4xl font-semibold text-white">{{ $service['heading'] }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @foreach($service['items'] as $item)
            {{-- Item start --}}
            <div class="p-6 rounded border-2 border-white/10 space-y-2">
                <div class="text-5xl font-black text-white/10">{{ $loop->iteration }}.</div>
                <h3 class="text-2xl text-white">{{ $item }}</h3>
            </div>
            {{-- Item end --}}
            @endforeach
        </div>
    </div>
    {{-- Services end  --}}
</x-layout>

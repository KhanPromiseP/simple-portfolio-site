<x-layout>
    {{-- Services start  --}}
    <div class="space-y-8">
        <h2 class="text-4xl font-semibold text-white">{{ $heading }}</h2>
        <ol class="border-l-2 border-white/20">
            @foreach ($items as $item)
                <li>
                    <div class="relative md:flex flex-start pl-6 mb-6">
                        <div
                            class="bg-accent absolute left-0 top-1/2 -translate-y-1/2 size-4 flex items-center justify-center rounded-full -ml-2">
                        </div>

                        <div class="p-6 rounded-lg shadow-lg bg-zinc-900">
                            <div class="flex justify-between items-center">
                                <div class="text-white text-xl font-bold">{{ $item['position'] }}</div>
                                <div class="inline-block text-xs text-accent/70 bg-accent/10 rounded-md px-4 py-1">{{ $item['date'] }}</div>
                            </div>
                            <div class="mt-1 text-white/70">{{ $item['company'] }}</div>

                            <p class="text-sm/relaxed mt-4">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
    {{-- Services end  --}}
</x-layout>

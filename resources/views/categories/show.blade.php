<x-guest-layout>

    <div class="container w-full px-8 py-10 mx-auto lg:max-w-7xl">

        <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($category->equipment as $equipment)
                <div class="relative p-2 border border-indigo-600 rounded-md">
                        <img
                            src="{{ Storage::url($equipment->image) }}"
                            class="object-cover w-full h-56" alt="image">
                    <div class="relative mt-5 mb-1">
                        <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10/10/2022</p>
                            <h2 class="text-2xl font-bold hover:text-gray-400">
                                {{ $equipment->name  }}</h2>
                        <p class="mb-4 text-gray-700">{{$equipment->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>

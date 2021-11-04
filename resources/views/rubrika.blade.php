<x-guest-layout>

    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

        <!--Title-->
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                {{ $rubrika->pavadinimas }}
            </h1>
            @if ( $rubrika->aprasymas )
                <p class="text-sm md:text-base font-normal text-gray-600">{{ $rubrika->aprasymas }}</p>
            @endif
        </div>

        <h2>Naujausi straipsniai</h2>

        @foreach ($rubrika->straipsniai as $straipsnis)

            <div class="flex w-full items-center font-sans py-12">
                @if($straipsnis->paveiksliukas)
                <img class="w-10 h-10 rounded-full mr-4" src="{{ asset($straipsnis->paveiksliukas) }}" alt="{{ $straipsnis->pavadinimas }}">
                @endif
                <div class="flex-1 px-2">
                    <p class="text-base font-bold text-base md:text-xl leading-none mb-2">{{ $straipsnis->pavadinimas }}</p>
                    <p class="text-gray-600 text-xs md:text-base">{{ $straipsnis->aprasymas }}</p>
                </div>
                <div class="justify-end">
                    <a href="{{ route("straipsnis", ["rubrika" => $rubrika->nuoroda, "straipsnis" => $straipsnis->nuoroda]) }}" title="{{ $straipsnis->pavadinimas }}" class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Skaityti toliau</a>
                </div>
            </div>

            <hr class="border-b-2 border-gray-400 mb-8">

        @endforeach

    </div>

</x-guest-layout>

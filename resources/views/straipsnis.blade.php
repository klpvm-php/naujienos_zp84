<x-guest-layout>

    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

        <!--Title-->
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                {{ $straipsnis->pavadinimas }}
            </h1>
            @if ( $straipsnis->aprasymas )
                <p class="text-sm md:text-base font-normal text-gray-600">{{ $straipsnis->aprasymas }}</p>
            @endif
            @if ( $straipsnis->paveiksliukas )
                <figure>
                    <img src="{{ $straipsnis->paveiksliukas }}" alt="{{ $straipsnis->pavadinimas }}" class="mx-auto max-w-100 h-auto">
                </figure>
            @endif
            @if ( $straipsnis->tekstas )
                <p class="text-sm md:text-base font-normal text-gray-600 mt-4">{!! $straipsnis->tekstas !!}</p>
            @endif
        </div>
    </div>

</x-guest-layout>

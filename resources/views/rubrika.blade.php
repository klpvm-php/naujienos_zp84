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



    </div>

</x-guest-layout>

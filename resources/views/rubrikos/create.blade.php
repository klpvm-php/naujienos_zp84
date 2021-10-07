<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rubrikos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
                <div class="px-4 py-8 sm:px-10">
                    <div class="relative mt-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300">
                            </div>
                        </div>
                        <div class="relative flex justify-center text-sm leading-5">
                            <span class="px-2 text-gray-500 bg-white">
                                Pridėti naują rubriką
                            </span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <form action="{{ route("rubrika.store") }}" method="POST" class="w-full space-y-6">
                            @csrf
                            <div class="w-full">
                                <div class=" relative ">
                                    <input type="text" name="pavadinimas" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Pavadinimas"/>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class=" relative ">
                                    <input type="text" name="aprasymas" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Aprašymas"/>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class=" relative ">
                                    <input type="text" name="nuoroda" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nuoroda"/>
                                </div>
                            </div>
                            <div>
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                        Pridėti
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staipsniai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 py-8 sm:px-10">
                    <div class="relative mt-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300">
                            </div>
                        </div>
                        <div class="relative flex justify-center text-sm leading-5">
                            <span class="px-2 text-gray-500 bg-white">
                                Pridėti naują straipsnį
                            </span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <form action="{{ route("straipsnis.store") }}" method="POST"  enctype="multipart/form-data" class="w-full space-y-6">
                            @csrf

                            <div class="lg:flex mb-4 -mx-2 space-y-10 lg:space-y-0">
                                <div class="w-full lg:w-3/4 px-2 min-h-screen">
                                    <div class="w-full h-full">
                                        <div class=" relative text-gray-600 text-sm">
                                            Tekstas
                                        </div>
                                        <div class=" relative h-full">
                                            <textarea name="tekstas" class="ckeditor h-full rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/4 px-2 space-y-6">
                                    <div class="w-full">
                                        <div class=" relative text-gray-600 text-sm">
                                            Pavadinimas
                                        </div>
                                        <div class=" relative ">
                                            <input type="text" name="pavadinimas" required class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Pavadinimas"/>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class=" relative text-gray-600 text-sm">
                                            Paveiksliukas
                                        </div>
                                        <div class=" relative ">
                                            <input type="file" name="paveiksliukas" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Paveiksliukas"/>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class=" relative text-gray-600 text-sm">
                                            Aprašymas
                                        </div>
                                        <div class=" relative ">
                                            <textarea name="aprasymas" class="h-48 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class=" relative text-gray-600 text-sm">
                                            Rubrika
                                        </div>
                                        <div class=" relative ">
                                            <select name="rid" required class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                                @foreach ($rubrikos as $rubrika)
                                                    <option value="{{ $rubrika->id }}">{{ $rubrika->pavadinimas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class=" relative text-gray-600 text-sm">
                                            Nuoroda
                                        </div>
                                        <div class=" relative ">
                                            <input type="text" name="nuoroda" required class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nuoroda"/>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="block w-full rounded-md shadow-sm">
                                            <button type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                Pridėti
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.ckeditor')
</x-app-layout>

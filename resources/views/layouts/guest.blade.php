<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body  class="bg-gray-100 font-sans leading-normal tracking-normal">
        @include('layouts.header')

        <!--Container-->
	    <div class="container w-full md:max-w-4xl mx-auto pt-20">
            {{ $slot }}
        </div>

        @include('layouts.footer')

    </body>
</html>

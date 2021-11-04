<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body  class="bg-gray-100 font-sans leading-normal tracking-normal">
        @include('layouts.header')

        <!--Container-->
	    <div id="content" class="container w-full md:max-w-4xl mx-auto pt-6">
            {{ $slot }}
        </div>

        @include('layouts.footer')

        <script>
            /* Progress bar */
            //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
            var h = document.documentElement,
                b = document.body,
                st = 'scrollTop',
                sh = 'scrollHeight',
                progress = document.querySelector('#progress'),
                scroll;
            var scrollpos = window.scrollY;
            var header = document.getElementById("header");
            var navcontent = document.getElementById("nav-content");
            var content = document.getElementById("content");

            document.addEventListener('scroll', function() {

                /*Refresh scroll % width*/
                scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
                progress.style.setProperty('--scroll', scroll + '%');

                /*Apply classes for slide in bar*/
                scrollpos = window.scrollY;

                if (scrollpos > 10) {
                    header.classList.add("bg-white");
                    header.classList.add("shadow");
                    header.classList.add("fixed");
                    navcontent.classList.remove("bg-gray-100");
                    navcontent.classList.add("bg-white");
                    content.classList.add("pt-32");
                } else {
                    header.classList.remove("bg-white");
                    header.classList.remove("shadow");
                    header.classList.remove("fixed");
                    navcontent.classList.remove("bg-white");
                    navcontent.classList.add("bg-gray-100");
                    content.classList.remove("pt-32");

                }

            });


            //Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function() {
                document.getElementById("nav-content").classList.toggle("hidden");
            }
        </script>

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="{{asset('icons/adaptive-icon.png')}}"/>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Script navigation -->
    <script>
        const MenuHandler = (flag) => {
            if (flag) {
                document.getElementById("list").classList.add("top-100");
                document.getElementById("list").classList.remove("hidden");
                document.getElementById("close").classList.remove("hidden");
                document.getElementById("open").classList.add("hidden");
            } else {
                document.getElementById("list").classList.remove("top-100");
                document.getElementById("list").classList.add("hidden");
                document.getElementById("close").classList.add("hidden");
                document.getElementById("open").classList.remove("hidden");
            }
        };
    </script>
    <!-- Script Faq-->
    <script>
        function openAnsSection(val) {
            let p = document.getElementById("para" + val);
            let svg = document.getElementById("path" + val);

            if (p.classList.contains("hidden")) {
                p.classList.remove("hidden");
                p.classList.add("block");
            } else {
                p.classList.remove("block");
                p.classList.add("hidden");
            }

            if (svg.classList.contains("hidden")) {
                svg.classList.remove("hidden");
                svg.classList.add("block");
            } else {
                svg.classList.remove("block");
                svg.classList.add("hidden");
            }
        }

    </script>

    <!-- Script Google Analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('ANALYTICS_PROPERTY_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', '{{ env('ANALYTICS_PROPERTY_ID') }}');
    </script>


    {{--    Cookies--}}
    @cookieconsentscripts
</head>
<body class="antialiased">
<!-- ... -->
@cookieconsentview
@include('home/navigation')
<main class="bg-purple-100  lg:px-24 mx-auto">
    @yield('content')
</main>
@include('home/footer')

</body>
</html>

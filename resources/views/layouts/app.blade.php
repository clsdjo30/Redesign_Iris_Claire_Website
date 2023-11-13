<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script>
            function showDropDownMenu_form_layout_wizard3(el) {
                el.parentElement.children[1].classList.toggle("hidden");
            }
            function swaptext_form_layout_wizard3(el) {
                const targetText = el.innerText;
                document.getElementById(
                    "drop-down-content-setter_form_layout_wizard3"
                ).innerText = targetText;
                document
                    .getElementById("drop-down-div_form_layout_wizard3")
                    .classList.toggle("hidden");
            }
            function showDropDownMenuOne_form_layout_wizard3(el) {
                el.parentElement.children[1].classList.toggle("hidden");
            }
            function swaptextone_form_layout_wizard3(el) {
                const targetText = el.innerText;
                document.getElementById(
                    "drop-down-content-setter-one_form_layout_wizard3"
                ).innerText = targetText;
                document
                    .getElementById("drop-down-div-one_form_layout_wizard3")
                    .classList.toggle("hidden");
            }
            function showDropDownMenutwo_form_layout_wizard3(el) {
                el.parentElement.children[1].classList.toggle("hidden");
            }
            function swaptexttwo_form_layout_wizard3(el) {
                const targetText = el.innerHTML;
                document.getElementById(
                    "drop-down-content-setter-two_form_layout_wizard3"
                ).innerHTML = targetText;
                document
                    .getElementById("drop-down-div-two_form_layout_wizard3")
                    .classList.toggle("hidden");
            }

        </script>
        <!--Tiny Editor-->

        <script src="https://cdn.tiny.cloud/1/1plgbhycyw091zq4sk3p4psqw7cg6erdbfl645jyau9j71ph/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-purple-100 dark:bg-purple-700">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-purple-700 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            tinymce.init({
                selector: '#content',
                plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),

            });
        </script>
        <!--Validation de la soumission du contenu Tiny--->
    <script>
        document.getElementById('your-form-id').addEventListener('submit', function(e) {
            var content = tinymce.get('content').getContent();
            if (content.length === 0) {
                e.preventDefault();
                alert('Le contenu est requis.');

            }
        });
    </script>
    </body>
</html>

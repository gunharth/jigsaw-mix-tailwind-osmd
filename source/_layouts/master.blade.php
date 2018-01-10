<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github-gist.min.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="text-brand-dark">
        <div class="h-1 bg-brand-light"></div>
        <div class="h-20 bg-brand-lightest border-b border-brand-lighter flex justify-center relative">
            <div class="relative w-24 h-24 border border-brand-lighter p-1 mt-4 rounded-full bg-white shadow">
                <a href="/"><img class="rounded-full" src="https://avatars3.githubusercontent.com/u/54989" /></a>
            </div>
        </div>
        <div class="max-w-lg mx-auto mt-12 px-4">
            <div class="text-3xl text-black font-sans font-bold text-center">

            </div>
            <div class="font-sans text-sm text-brand text-center">
                Developer, Creator and Web Enthusiast.
            </div>

            <div class="border-t border-b py-2 px-1 mt-8 flex items-center justify-center text-base">
                <div></div>
                <div>
                    @include('_layouts.menu')
                </div>
                <div class="px-4 pt-1">
                    <a href="#" rel="noopener noreferer" target="_blank" class="text-brand-light hover:text-brand mr-1"><i class="fab fa-github-square text-3xl"></i></a>
                    <a href="#" rel="noopener noreferer" target="_blank" class="text-brand-light hover:text-brand"><i class="fab fa-twitter-square text-3xl"></i></a>
                </div>
            </div>

            <div class="py-12">

            @yield('body')


            </div>

            <div class="flex justify-center items-center font-sans text-xs border-t pt-6 pb-16">
                <a href="/imprint" class="text-brand-light px-3">Imprint</a>
                <a href="/privacy-policy" class="text-brand-light px-3">Privacy Policy</a>
            </div>

        </div>

        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>

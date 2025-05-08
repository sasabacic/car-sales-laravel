<<<<<<< HEAD
@props(['title' => '', 'bodyClass' => ''])

<x-guest-layout :title="$title" bodyClass="$bodyClass">

        <main>
            <div class="container-small page-login">
              <div class="flex" style="gap: 5rem">
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body @if($bodyClass)class="{{$bodyClass}}"@endif>
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
>>>>>>> practice-branch
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logoipsum-265.svg" alt="" />
                        </a>
                    </div>
                    {{ $slot }}
                    <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                        <x-google-button />
                        <x-facebook-button />
                    </div>
                    <div class="login-text-dont-have-account">
                        {{ $slot->footerLink ?? '' }} <!-- Use named slot with fallback -->
                    </div>
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                </div>
            </div>
<<<<<<< HEAD
          </main>
</x-guest-layout>

=======
        </div>
    </main>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.js"
        integrity="sha512-XJgPMFq31Ren4pKVQgeD+0JTDzn0IwS1802sc+QTZckE6rny7AN2HLReq6Yamwpd2hFe5nJJGZLvPStWFv5Kww=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script src="/js/app.js"></script>
</body>
</html>
>>>>>>> practice-branch

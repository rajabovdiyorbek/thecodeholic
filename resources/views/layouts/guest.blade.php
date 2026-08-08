@props(['title' => '', 'footerSection' => '', 'bodyClass' => '', 'pageTitle' => '', 'goTo' => ''])

<x-base-layout :$title :$bodyClass>
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
            <div class="auth-page-form">
                <div class="text-center">
                <a href="/">
                    <img src="/img/logoipsum-265.svg" alt="" />
                </a>
                </div>
                <h1 class="auth-page-title">{{ $pageTitle }}</h1>
                <form action="" method="post">
                {{ $slot }}
                <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                    <x-buttons.button imgSrc="/img/google.png">
                        Google
                    </x-buttons.button>
                    <x-buttons.button imgSrc="/img/facebook.png">
                        Facebook
                    </x-buttons.button>
                </div>
                <div class="login-text-dont-have-account">
                    {{ $goTo }}
                </div>
                </form>
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
            </div>
        </div>
    </div>
</main>
</x-base-layout>

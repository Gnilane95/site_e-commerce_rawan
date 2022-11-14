@php
    $styleLink="font-bold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="flex justify-between px-10 items-center font-bold">
    {{-- logo --}}
        <a href="/">
            <img src="img/logo-rawanpng.png" alt="Logo Rawan" class="w-36">
        </a>
    {{-- nav items --}}
    <div class="space-x-5 flex ">
        <a href="{{ route('bijoux') }}" class="hover:text-primary">Bijoux</a>
        <a href="" class="hover:text-primary">Collections femmes</a>
        <a href="" class="hover:text-primary">Abayas hommes</a>
        <a href="" class="hover:text-primary">Enfants</a>
        <a href="" class="hover:text-primary">blog</a>
    </div>
    {{-- other items --}}
    <div class="space-x-5 flex items-center">
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="fa-regular fa-user"></i>
        <i class="fa-solid fa-bag-shopping"></i>
        {{-- @guest
            <a href="{{ route('login') }}" class="{{ $styleLink }}">Se connecter</a>
            <a href="{{ route('register') }}" class="{{ $styleLink }}">S'inscrire</a>
            @endguest
        @auth
            <a href="{{ route('dashboard') }}" class="{{ $styleLink }}">Dashbord</a>
            <div class="flex justify-center gap-7 items-center">
                <p>{{ Auth::user()->name }}</p>
                <x-btn-logout/>
            </div>
        @endauth --}}
    </div>
</nav>
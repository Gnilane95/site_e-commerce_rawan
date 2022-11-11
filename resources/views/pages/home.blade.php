<x-layouts.main-layout title="Accueil">
    {{-- hero home --}}
        <div class="hero">
            <div class="flex-col-reverse justify-center text-center">
                <img src="img/logo-rawan-removebg-preview.png" alt="Logo Rawan" class="w-48 absolute z-50 top-10 left-[700px]">
                <p class="font-bold absolute z-50 left-[670px] text-white text-xl italic">
                    Votre boutique de <span class="text-secondary">prêt-à-porter</span> <br> et de <span class="text-primary">bijoux</span>
                </p>
            </div>
            <div class="overlay"></div>
        </div>
        {{-- main content --}}
        <div class="mx-36 my-20">
            {{-- card --}}
            <h1 class="text-center font-black text-2xl mb-5">Notre Sélection <span class="text-primary italic">bijoux</span></h1>
            <div class="flex justify-around space-x-5">
                <div class="shadow-xl">
                    <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
                    <div class="p-5 min-h-[200px]">
                        <p class="font-bold text-2xl pb-5">Boules d'oreilles</p>
                        <p class=""></p>
                    </div>
                    {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                </div>
                <div class="shadow-xl">
                    <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
                    <div class="p-5 min-h-[200px]">
                        <p class="font-bold text-2xl pb-5">Argents</p>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quos ipsa reprehenderit magni aliquam qui libero voluptatibus perspiciatis porro velit praesentium autem assumenda corporis.</p>
                    </div>
                    {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                </div>
                <div class="shadow-xl">
                    <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
                    <div class="p-5 min-h-[200px]">
                        <p class="font-bold text-2xl pb-5">Bijoux personalisés</p>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quos ipsa reprehenderit magni aliquam qui libero voluptatibus perspiciatis porro velit praesentium autem assumenda corporis.</p>
                    </div>
                    {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                </div>
            </div>
        </div>
        
    {{-- <div class="mx-10">
        <div class="grid grid-cols-4 gap-5 " id="containerGrid">
            @forelse ($posts as $post)
                <a href="posts/{{ $post->id }}">
                    <x-cards.post-card :url_img="$post->url_img" :title="$post->title" :content="$post->content" :created_at="$post->created_at->format('d/m/Y')"/>
                </a>
            @empty
                <p>Pas d'articles disponibles</p>
            @endforelse
        </div>
        <div class="my-12 mx-auto flex justify-end">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div> --}}
</x-layouts.main-layout>


@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen flex items-center justify-center">
        <img src="https://imgs.search.brave.com/ko2Q7ZOGLlqvLvF_YRANMCfq0u33Z5RmFO9DCe4WCQw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/cHJvZC53ZWJzaXRl/LWZpbGVzLmNvbS81/YTllZTY0MTZlOTBk/MjAwMDFiMjAwMzgv/NjI4OWYwYmZhOTIw/YTk1OGYyYjQxNmY3/X2JsYWNrLWdyYWRp/ZW50LnBuZw" 
             alt="Vítejte" class="absolute inset-0 w-full h-full object-cover brightness-75">
        <div class="relative text-center">
            <h1 class="text-white text-5xl md:text-6xl font-bold">Vítejte na naší stránce!</h1>
        </div>
    </div>
    @livewire('gallery')

    <!-- Why Choose Us Section -->
    <div class="py-16 bg-gray-100 text-center">
        <h2 class="text-4xl font-semibold">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-gray-700">Nabízíme nejlepší produkty za nejlepší ceny!</p>
        <div class="mt-10 flex flex-wrap justify-center gap-8">
            <div class="bg-white shadow-lg rounded-xl p-6 max-w-xs text-center">
                <x-heroicon-o-truck class="text-blue-500 w-16 h-16 mx-auto mb-4" />
                <h3 class="text-xl font-bold">Rychlá Doprava</h3>
                <p class="mt-2 text-gray-600">Zaručujeme rychlé dodání vašich objednávek.</p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 max-w-xs text-center">
                <x-iconsax-bro-sidebar-right class="text-green-500 w-16 h-16 mx-auto mb-4" />
                <h3 class="text-xl font-bold">Kvalitní Produkty</h3>
                <p class="mt-2 text-gray-600">Naše produkty procházejí důkladným výběrem kvality.</p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 max-w-xs text-center">
                <x-gmdi-support-agent-o class="text-red-500 w-16 h-16 mx-auto mb-4" />
                <h3 class="text-xl font-bold">Zákaznická Podpora</h3>
                <p class="mt-2 text-gray-600">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="py-16 bg-white">
        <h2 class="text-4xl font-semibold text-center">Naše Produkty</h2>
        <div class="overflow-x-auto mt-6 px-6">
            <div class="flex gap-6">
                @foreach($products as $product)
                    <div class="flex-shrink-0 w-64 bg-white shadow-lg rounded-xl overflow-hidden">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                            <p class="mt-2 text-gray-600">{{ $product->description }}</p>
                            <p class="mt-2 font-bold text-lg">{{ number_format($product->price, 2) }} Kč</p>
                            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Koupit</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="py-16 pb-32 bg-gray-100 flex justify-center">
        <div class="max-w-lg w-full">
            <h2 class="text-4xl font-semibold text-center">Kontaktní formulář</h2>
            <form class="mt-6 bg-white p-8 shadow-lg rounded-xl" action="#" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Jméno</label>
                    <input type="text" id="name" name="name" class="border border-gray-300 rounded-md w-full p-2" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <input type="email" id="email" name="email" class="border border-gray-300 rounded-md w-full p-2" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Zpráva</label>
                    <textarea id="message" name="message" class="border border-gray-300 rounded-md w-full p-2" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">Odeslat</button>
            </form>
        </div>
    </div>
@endsection

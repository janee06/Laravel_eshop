@extends('layouts.app')

@section('content')
   <!-- Products Horizontal Scroll Section -->
   <div class="py-10">
    <h2 class=" text-white text-3xl font-semibold text-center">Naše Produkty</h2>
    <div class="overflow-x-auto mt-6">
        <div class="flex space-x-4">
            @foreach($products as $product)
                <div class="flex-shrink-0 w-64">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col justify-between h-full">
                        <div>
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="object-cover w-full h-48">
                            <div class="p-4">
                                <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                                <p class="mt-2 text-gray-600">{{ $product->description }}</p>
                                <p class="mt-4 text-xl font-bold">{{ number_format($product->price, 2) }} Kč</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <button class="w-full bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 transition duration-200">
                                Koupit
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


    <!-- Contact Form Section -->
    <div class="py-10">
        <h2 class="text-3xl font-semibold text-center">Kontaktní formulář</h2>
        <form class="max-w-md mx-auto mt-4 p-6 bg-white shadow-md rounded-lg" action="#" method="POST">
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
            <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 transition duration-200">Odeslat</button>
        </form>
    </div>
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            loop: true, // Přidá loop efekt
        });
    </script>
@endpush
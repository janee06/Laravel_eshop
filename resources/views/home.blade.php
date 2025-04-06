@extends('layouts.app')

@section('content')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
        }

        .hero {
            background-image: url('/kytice.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .section-lightpink {
            background-color: #ffe6eb;
        }

        .section-softwhite {
            background-color: #fff9f9;
        }

        .text-darkpink {
            color: #c2185b;
        }

        .btn-pink {
            background-color: #e91e63;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .btn-pink:hover {
            background-color: #c2185b;
        }

        .card {
            background: white;
            border: 1px solid #f8bbd0;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 300px;
            margin: 10px;
        }
    </style>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 style="font-size: 3.5rem;">Vítejte ve Florea</h1>
            <p style="font-size: 1.5rem; margin-top: 1rem;">Květiny pro každou příležitost</p>
        </div>
    </div>

    <!-- Galerie -->
    @livewire('gallery')

    <!-- Why Choose Us -->
    <div class="py-16 bg-pink-50 text-center">
        <h2 class="text-4xl font-semibold text-pink-800">Proč si vybrat nás?</h2>
        <p class="mt-4 text-lg text-pink-600">Láska ke květinám v každém detailu</p>
        <div class="mt-10 flex flex-wrap justify-center gap-8">
            <div class="bg-white shadow-lg rounded-xl p-6 max-w-xs text-center">
                <x-heroicon-o-truck class="text-pink-400 w-16 h-16 mx-auto mb-4" />
                <h3 class="text-xl font-bold text-pink-700">Expresní doručení</h3>
                <p class="mt-2 text-pink-500">Čerstvé květiny až ke dveřím do 24 hodin.</p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 max-w-xs text-center">
                <x-heroicon-o-sparkles class="text-pink-400 w-16 h-16 mx-auto mb-4" />
                <h3 class="text-xl font-bold text-pink-700">Exkluzivní aranžmá</h3>
                <p class="mt-2 text-pink-500">Každá kytice je umělecké dílo tvořené s láskou.</p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 max-w-xs text-center">
                <x-heroicon-o-heart class="text-pink-400 w-16 h-16 mx-auto mb-4" />
                <h3 class="text-xl font-bold text-pink-700">Spokojení zákazníci</h3>
                <p class="mt-2 text-pink-500">Vaše radost je naší největší odměnou.</p>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div class="section-softwhite py-16">
        <h2 class="text-center text-darkpink" style="font-size: 2.5rem;">Naše květiny</h2>
        <div style="display: flex; overflow-x: auto; gap: 1.5rem; padding: 2rem;">
            @foreach($products as $product)
                <div class="card" style="flex-shrink: 0;">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
                    <h3 class="text-darkpink" style="margin-top: 1rem;">{{ $product->name }}</h3>
                    <p style="font-size: 0.9rem;">{{ $product->description }}</p>
                    <p class="text-darkpink" style="font-weight: bold; font-size: 1.1rem;">{{ number_format($product->price, 2) }} Kč</p>
                    <button class="btn-pink" style="margin-top: 0.5rem;">Koupit</button>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Contact -->
    <div class="section-lightpink py-16 pb-32" style="display: flex; justify-content: center;">
        <div style="max-width: 500px; width: 100%;">
            <h2 class="text-center text-darkpink" style="font-size: 2.5rem;">Kontaktujte nás</h2>
            <form style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-top: 1.5rem;" method="POST" action="#">
                @csrf
                <label>Jméno</label>
                <input type="text" name="name" style="width: 100%; padding: 10px; margin-bottom: 1rem;" required>

                <label>Email</label>
                <input type="email" name="email" style="width: 100%; padding: 10px; margin-bottom: 1rem;" required>

                <label>Zpráva</label>
                <textarea name="message" style="width: 100%; padding: 10px; margin-bottom: 1rem;" required></textarea>

                <button type="submit" class="btn-pink">Odeslat</button>
            </form>
        </div>
    </div>
@endsection

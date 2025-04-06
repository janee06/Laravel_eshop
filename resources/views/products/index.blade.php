@extends('layouts.app')

@section('content')
    <div class="container py-5 pt-40 mx-auto" style="background-color: #fff0f5;">
        <div class="relative">
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                }

                .product-grid {
                    display: grid;
                    grid-template-columns: repeat(5, 1fr);
                    grid-gap: 20px;
                    grid-auto-rows: minmax(300px, auto);
                    justify-items: center;
                    padding: 20px;
                }

                .product-card {
                    background-color: #ffe4ec;
                    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    overflow: hidden;
                    width: 100%;
                    max-width: 250px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    border: 1px solid #f9c7d9;
                }

                .product-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
                }

                .product-card img {
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                    border-bottom: 2px solid #f8d4df;
                }

                .product-description {
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }

                .product-card .p-4 {
                    padding: 20px;
                }

                .product-card h2 {
                    font-size: 1.25rem;
                    font-weight: 600;
                    color: #d6336c;
                }

                .product-card p {
                    font-size: 0.95rem;
                    color: #b95c7a;
                    margin-bottom: 15px;
                }

                .font-bold {
                    font-size: 1.1rem;
                    color: #c2185b;
                }

                .btn-primary,
                .product-card button {
                    padding: 10px 20px;
                    font-size: 1rem;
                    border-radius: 6px;
                    transition: background-color 0.3s ease;
                    width: 100%;
                    text-align: center;
                }

                .btn-primary {
                    background-color: #ff69b4;
                    color: white;
                    border: none;
                }

                .btn-primary:hover {
                    background-color: #e75480;
                }

                .product-card button {
                    background-color: #ffb6c1;
                    color: white;
                    border: none;
                    margin-top: 10px;
                }

                .product-card button:hover {
                    background-color: #d64d75;
                }

                @media (max-width: 768px) {
                    .product-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 480px) {
                    .product-grid {
                        grid-template-columns: 1fr;
                    }
                }

                /* Potvrzovací box */
                .confirmation-box {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.6);
                    justify-content: center;
                    align-items: center;
                    animation: fadeIn 0.3s ease;
                }

                .confirmation-content {
                    background-color: #ffe4ec;
                    padding: 20px;
                    border-radius: 8px;
                    text-align: center;
                    width: 80%;
                    max-width: 400px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    animation: slideUp 0.4s ease;
                    color: #c2185b;
                }

                .confirmation-content p {
                    font-size: 1.1rem;
                    margin-bottom: 20px;
                }

                .btn-container {
                    display: flex;
                    justify-content: center;
                    gap: 10px;
                }

                .confirmation-box button,
                .confirmation-box a {
                    padding: 10px 20px;
                    font-size: 1rem;
                    border-radius: 6px;
                    transition: background-color 0.3s ease;
                    border: none;
                    color: white;
                }

                .confirmation-box button {
                    background-color: #ff69b4;
                }

                .confirmation-box button:hover {
                    background-color: #e75480;
                }

                .confirmation-box a {
                    background-color: #ffb6c1;
                    text-decoration: none;
                }

                .confirmation-box a:hover {
                    background-color: #d64d75;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }
                    to {
                        opacity: 1;
                    }
                }

                @keyframes slideUp {
                    from {
                        transform: translateY(20px);
                        opacity: 0;
                    }
                    to {
                        transform: translateY(0);
                        opacity: 1;
                    }
                }
            </style>

            <!-- Nadpis -->
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-semibold text-pink-700">Naše Produkty</h1>
            </div>

            <!-- Produkty -->
            <div class="product-grid">
                @foreach($products as $product)
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300" alt="{{ $product->name }}" class="product-image">
                        <div class="p-4 text-center">
                            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                            <p class="product-description">{{ $product->description }}</p>
                            <p class="font-bold text-lg mb-4">Cena: ${{ $product->price }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Zobrazit detaily</a>
                            <button type="button" onclick="showConfirmationBox('{{ route('cart.add', ['product' => $product->id]) }}', {{ $product->id }})">Přidat do košíku</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- JS -->
    <script>
        function showConfirmationBox(productUrl, productId) {
            document.getElementById('confirmation-box-' + productId).classList.remove('hidden');
            document.getElementById('confirmation-box-' + productId).style.display = 'flex';
            document.querySelectorAll('.confirmation-box').forEach(function (box) {
                if (box.id !== 'confirmation-box-' + productId) {
                    box.style.display = 'none';
                }
            });
        }

        function addProductAndGoToCart(productId) {
            fetch("{{ route('cart.add', '') }}/" + productId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({product_id: productId})
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "{{ route('cart.index') }}";
                }
            });
        }
    </script>

    <!-- Potvrzovací boxy -->
    @foreach($products as $product)
        <div id="confirmation-box-{{ $product->id }}" class="confirmation-box">
            <div class="confirmation-content">
                <p>Chcete zůstat na stránce nebo přejít do košíku?</p>
                <div class="btn-container">
                    <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="stay" value="true">
                        <button type="submit">Zůstat na stránce</button>
                    </form>
                    <a href="{{ route('cart.index') }}" onclick="addProductAndGoToCart({{ $product->id }})">Přejít do košíku</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

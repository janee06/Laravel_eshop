<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8 text-white">Naše Produkty</h1>

        <!-- Inline Style pro Grid -->
        <style>
            .product-grid {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                grid-gap: 20px;
                grid-auto-rows: minmax(300px, auto);
                justify-items: center;
            }

            .product-card {
                background-color: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
                width: 100%;
                max-width: 250px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .product-card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .product-card .product-description {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
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
        </style>

       
    </div>
@endsection
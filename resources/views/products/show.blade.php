<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="container px-4 sm:px-6 lg:px-8 mx-auto relative">
        <!-- Back Button (Fixed in the top-left corner with margin) -->
        <div class="fixed top-6 left-6 z-50">
            <a href="{{ route('products.index') }}" class="btn btn-secondary bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-md">
                Back to Products
            </a>
        </div>

        <!-- Product Details (Flex layout for image and info) -->
        <div class="product-details bg-white p-6 shadow-lg rounded-lg mx-auto w-full sm:w-2/3 md:w-1/2 lg:w-2/3 mt-20 flex">
            <!-- Product Image (Left Side) -->
            <div class="w-1/2 pr-12"> <!-- Increased right padding to create space -->
                <img src="https://via.placeholder.com/600" alt="{{ $product->name }}" class="product-image w-full h-auto object-cover rounded-lg">
            </div>

            <!-- Product Information (Right Side) -->
            <div class="w-1/2 pl-12"> <!-- Added left padding to push content further right -->
                <h1 class="text-3xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h1>
                <p class="text-lg text-gray-600 mb-4">{{ $product->description }}</p>
                <div class="flex justify-between text-lg font-medium text-gray-800 mb-4">
                    <p><strong>Price: </strong>${{ $product->price }}</p>
                    <p><strong>SKU: </strong>{{ $product->sku }}</p>
                </div>
                <div class="flex justify-between text-lg font-medium text-gray-800">
                    <p><strong>In Stock: </strong>{{ $product->in_stock }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

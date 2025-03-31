<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // Simulace přidání produktu do košíku (můžeš upravit podle potřeby)
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Zde můžeš přidat logiku pro uložení do databáze nebo session
        return back()->with('success', 'Produkt byl přidán do košíku.');
    }
}

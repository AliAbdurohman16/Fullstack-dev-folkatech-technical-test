<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Take a list of products with related categories and star ratings
        $products = Product::with('category', 'ratings')->get();

        // Format product data according to your needs
        $formattedProducts = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'ratings' => $product->ratings->avg('rating'),
                'category' => $product->category->name,
            ];
        });

        // Send a response with a formatted list of products
        return response()->json([
            'data' => $formattedProducts,
        ], 200);
    }

    public function show($id)
    {
        // Find products by ID
        $product = Product::with('category', 'ratings')->find($id);

        if (!$product) {
            return response()->json(['' => 'Product not found'], 404);
        }

        // Format the product data according to your needs
        $formattedProduct= [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'ratings' => $product->ratings->avg('rating'),
            'category' => $product->category->name,
        ];

        // Send response with formatted product details
        return response()->json([
            'data' => $formattedProduct,
        ], 200);
    }
}

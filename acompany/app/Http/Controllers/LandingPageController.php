<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function index() {
        $response = Http::get('https://api.aibm.my.id/customers');
        $customer = $response['data']['customers'];

        $totalCustomers = count($customer);

        $response = Http::get('https://api.aibm.my.id/products');
        $product = $response['data']['products'];

        $totalProducts = count($product);
        $totalStocks = 0;
        foreach ($product as $product) {
            if(isset($product['stock'])) {
                $totalStocks += ($product['stock']);
            }
        }

        return view('landingPage', compact('totalCustomers', 'totalProducts', 'totalStocks'));
    }
}

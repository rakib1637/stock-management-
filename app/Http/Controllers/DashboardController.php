<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;


class DashboardController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $products_list = Products::all();
        $products_count = count($products_list);
        return view('Dashboard/index')->with('products_count', $products_count );

    }
}

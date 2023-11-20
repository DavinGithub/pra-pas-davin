<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;


class StockController extends Controller
{
    public function index()
    {   
    return view('stock.all', [
        "title"  => "stocks",
        "stocks" => Stock::all()
    ]);
    }
    public function show($stock)
    {
      return view('stock.detail', [
        "title" => "detail-stock",
        "stock" => Stock::find($stock)
      ]);
    }

}

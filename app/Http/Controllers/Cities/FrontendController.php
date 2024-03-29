<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(City $cities): Renderable
    {
        $cities = $cities->orderBy('name', 'asc')->simplePaginate(9);
        return view('cities.frontend.index', compact('cities'));
    }
}

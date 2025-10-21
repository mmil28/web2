<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function index(): mixed
    {
        $fakultas = Fakultas::all();
        return $fakultas;
    }
}

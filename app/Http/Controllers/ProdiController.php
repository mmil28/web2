<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index(): mixed
    {
        $prodi = Prodi::all();
        return $prodi;
    }
}

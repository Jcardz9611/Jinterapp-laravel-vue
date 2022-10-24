<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Http\Resources\ImagenResource;

class ImagenController extends Controller
{
    public function index()
    {
        return ImagenResource::collection(Imagen::all());
    }
}

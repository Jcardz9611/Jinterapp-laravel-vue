<?php

namespace App\Http\Controllers;
use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function handle(Request $request)
    {
        
        //Storage::disk('public')->put('img/'.$request->nombre.'.jpg', $request->file('image'));
        $pathToFile = $request->file('image')->storeAs('/img', $request->nombre.'.jpg');
        $imagen = new Imagen();
        $imagen->nombre = $request->nombre;
        $imagen->descripcion = $request->descripcion;
        $imagen->ruta = 'img/'.$request->nombre.'.jpg';
        $imagen->save();
        
    }
}

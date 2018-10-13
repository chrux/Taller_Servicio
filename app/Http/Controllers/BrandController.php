<?php

namespace taller_servicio\Http\Controllers;

use Illuminate\Http\Request;
use taller_servicio\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::all();
    }
 
    public function show($id)
    {
        return Brand::find($id);
    }

    public function store(Request $request)
    {
        return Brand::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());

        return $brand;
    }

    public function delete(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        if ($brand) {
            $brand->delete();
        }

        return response(null, 204);
    }
}

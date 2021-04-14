<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\traits\generalTrait;
class productController extends Controller
{
    //
    public function index(){
        DB::table('products')->get();
       $products=DB::table('products')->get();
    
        return view('admin.products.all',compact('products'));
    }

    public function create(){
        $subCats=DB::table('subcategories')->get();
        $brands=DB::table('brands')->get();
        return view('admin.products.create',compact(['subCats','brands']));
    }

    public function edit(){
        return view('admin.products.edit');
    }

    public function save(Request $request){
        $data = $request->except('_token','Photo');
     
        $rules=[
            'enName'=>'required|string|max:255',
            'arName'=>'required|string|max:255',
            'enSpecs'=>'string|max:500',
            'arSpecs'=>'string|max:500',
            'subCatID'=>'required|integer|exists:subcategories,id',
            'brandID'=>'required|integer|exists:brands,id',
            'photo'=>'nullable|mimes:png,jpg,jpeg|max:1000|image'
        ];
        $request->validate($rules);
       
        $data = $request->except('_token','photo');
        $photoName = $this->uploadPhoto($request->photo,'products');
        $data['photo']=$photoName;
 
        
        DB::table('products')->insert($data);
        return redirect()->route('products.all');
    }

    public function uploadPhoto($image, $folder)
    {
        $fileName = time() . '.' . $image->extension();
        $image->move(public_path('images/' . $folder), $fileName);
        return $fileName;
    }
}

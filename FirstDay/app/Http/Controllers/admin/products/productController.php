<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\traits\generalTrait;
class productController extends Controller
{
    use generalTrait;
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
    public function edit($method,$id){
        $subCats=DB::table('subcategories')->get();
        $brands=DB::table('brands')->get();
        $product=DB::table('products')->WHERE('id',$id)->first();
    
        if($method=='edit'){
            return view('admin.products.edit',compact(['subCats','brands','product']));}
        elseif($method=='delete'){
            return view('admin.products.delete',compact(['subCats','brands','product']));}
        }
    public function save(Request $request){
      
        
        $rules=[
            'enName'=>'required|string|max:255',
            'arName'=>'required|string|max:255',
            'enSpecs'=>'required|string|max:500',
            'arSpecs'=>'required|string|max:500',
            'subCatID'=>'required|integer|exists:subcategories,id',
            'brandID'=>'required|integer|exists:brands,id']; 
        $data = $request->except('_token','photo','create','edit','delete');
        
        if(isset($request['create']))
        { $rules['photo']='nullable|mimes:png,jpg,jpeg|max:1000|image';
            $request->validate($rules);
            $photoName = $this->uploadPhoto($request->photo,'products');
            $data['photo']=$photoName;       
            DB::table('products')->insert($data);
        }
        elseif(isset($request['edit'])){   
            DB::table('products')->where('id',$request->id)->update($data);
        }
        elseif(isset($request['delete'])){
            $rules['photo']='string';
            $request->validate($rules);
            DB::table('products')->where('id',$request->id)->delete();
            $path=public_path('images\products\\'.$request->photo);
            if (file_exists($path)){
                unlink($path);
            }
        }
        return redirect()->route('products.all');
    }
    
}

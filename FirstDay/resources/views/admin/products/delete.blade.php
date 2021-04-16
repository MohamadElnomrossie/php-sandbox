@extends('admin.layout.layout')
@section('title','Delete product');
@section('content')
<div class="col">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method='POST' action="{{route('products.save')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
          <div class="form-group col-6">
            <label> English name</label>
            <input type="text" class="form-control" name='enName' value={{$product->enName}}>
            @error('enName')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label >Arabic name</label>
            <input type="text" class="form-control" name='arName' value={{$product->arName}}>
            @error('arName')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label >English Specs</label>
            <textarea type="text" class="form-control" name='enSpecs'>{{$product->enSpecs}}</textarea>
            <input type="text"  hidden class="form-control" name='id' value={{$product->id}}>
            @error('enSpecs')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label >Arabic Specs</label>
            <textarea type="text" class="form-control"  name='arSpecs'>{{$product->arSpecs}}</textarea>
            @error('arSpecs')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label >Sub Category</label>
            <input type="text" class="form-control" name='subCatID' value={{$product->subCatID}}>
            @error('subCatID')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label>Brand</label>
            <input type="text" class="form-control" name='brandID' value={{$product->brandID}}>
            @error('brandID')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="container col-12 row text-center">
            <img class='col-3 mx-auto' src="{{url('images\products\\'.$product->photo)}}" name='photo'>
            <input type="hidden" name='photo' value={{$product->photo}}>
            @error('photo')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name='delete' class="btn btn-danger">Delete</button>
          <button type="cancel" class="btn btn-warning">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

   
@endsection
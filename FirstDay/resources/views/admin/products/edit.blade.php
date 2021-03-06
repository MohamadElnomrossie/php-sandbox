@extends('admin.layout.layout')
@section('title','Edit product');
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
          </div>
          <div class="form-group col-6">
            <label >Arabic Specs</label>
            <textarea type="text" class="form-control"  name='arSpecs' >{{$product->arSpecs}}</textarea>
          </div>
          <div class="form-group col-6">
            <label >Sub Category</label>
            <select class='form-control' name='subCatID'>
              @forelse($subCats as $key=>$value)
              <option {{($value->id==$product->subCatID)?'selected':""}} value={{$value->id}}>{{$value->enName}}</option>
              @empty
              @endforelse
            </select>
            @error('subCatID')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>

          <div class="form-group col-6">
            <label>Brand</label>
            <select name='brandID'class="form-control">
              @forelse($brands as $key=>$value)
              <option {{($value->id==$product->brandID)?'selected':""}} value={{$value->id}}>{{$value->EnName}}</option>
              @empty
              @endforelse
            </select>
            @error('brandID')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
         
          
          <div class="form-group col-12">
            <label>File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name='photo' class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
            @error('photo')
              <div class='alert alert-danger'>{{$message}}</div>
            @enderror
            <label>Old Image</label>
            <div class="container col-12 row text-center">
            <img class='col-3 mx-auto' src="{{url('images/products/'.$product->photo)}}" name='photo'></div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" name='edit' class="btn btn-primary">Submit</button>
          <button type="cancel" class="btn btn-danger">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

   
@endsection
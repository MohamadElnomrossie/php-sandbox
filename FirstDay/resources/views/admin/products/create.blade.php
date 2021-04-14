@extends('admin.layout.layout')
@section('title','Add new product');
@section('content')
<div class="col">
 
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method='POST' action="{{url('products/save')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
          <div class="form-group col-6">
            <label> English name</label>
            <input type="text" id="enName" class="form-control" name='enName'>
            @error('enName')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label >Arabic name</label>
            <input type="text" class="form-control" name='arName'>
            @error('arName')
            <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
          <div class="form-group col-6">
            <label >English Specs</label>
            <textarea type="text" class="form-control" name='enSpecs'></textarea>
          </div>
          <div class="form-group col-6">
            <label >Arabic Specs</label>
            <textarea type="text" class="form-control"  name='arSpecs'></textarea>
          </div>
          <div class="form-group col-6">
            <label >Sub Category</label>
            <select name='subCatID' class="form-control">
              <option selected disabled>Select a subcategory</option>
              @forelse($subCats as $key=>$value)
              <option value={{$value->id}}>{{$value->enName}}</option>
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
              <option selected disabled>Select a brand</option>
              @forelse($brands as $key=>$value)
              <option value={{$value->id}}>{{$value->EnName}}</option>
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
                <input type="file" name='photo' class="form-control custom-file-input">
                <label class="custom-file-label">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
            @error('photo')
              <div class='alert alert-danger'>{{$message}}</div>
            @enderror
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="cancel" class="btn btn-danger">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

   
@endsection
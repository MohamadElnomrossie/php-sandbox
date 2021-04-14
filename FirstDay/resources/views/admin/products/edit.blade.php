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
      <form>
        <div class="card-body row">
          <div class="form-group col-6">
            <label> English name</label>
            <input type="text" class="form-control" name='enName'>
          </div>
          <div class="form-group col-6">
            <label >Arabic name</label>
            <input type="text" class="form-control" name='arName'>
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
            <select name='sucCatID' class="form-control">
                <option value="11">دراجة- Bicycle</option>
            </select>
          </div>

          <div class="form-group col-6">
            <label>Brand</label>
            <select name='brandID'class="form-control">
                <option value="6">فينكس - Phoenix</option>
            </select>
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
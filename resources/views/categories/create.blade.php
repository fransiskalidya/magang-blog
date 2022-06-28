@extends('admin.dashboard')
@section('title')
Add Category
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="" method="POST">
                <!-- title -->
                <div class="form-group">
                   <label for="input_category_title" class="font-weight-bold">
                      Title
                   </label>
                   <input id="input_category_title" value="" name="title" type="text" class="form-control" 
                   placeholder="Title"/>
                </div>
                <!-- slug -->
                <div class="form-group">
                   <label for="input_category_slug" class="font-weight-bold">
                      Slug
                   </label>
                   <input id="input_category_slug" value="" name="slug" type="text" class="form-control" 
                   placeholder="otomatis terbuat" readonly />
                </div>
                <!-- thumbnail -->
                <div class="form-group">
                   <label for="input_category_thumbnail" class="font-weight-bold">
                      Thumbnail
                   </label>
                   <div class="input-group">
                      <div class="input-group-prepend">
                         <button id="button_category_thumbnail" data-input="input_category_thumbnail" class="btn btn-primary" type="button">
                            Browse
                         </button>
                      </div>
                      <input id="input_category_thumbnail" name="thumbnail" value="" type="text" class="form-control" placeholder=""
                         readonly />
                   </div>
                </div>
                <!-- parent_category -->
                <div class="form-group">
                   <label for="select_category_parent" class="font-weight-bold">Parent</label>
                   <select id="select_category_parent" name="parent_category" data-placeholder="" class="custom-select w-100">
                   </select>
                </div>
                <!-- description -->
                <div class="form-group">
                   <label for="input_category_description" class="font-weight-bold">
                      Description
                   </label>
                   <textarea id="input_category_description" name="description" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
                </div>
                <div class="float-right">
                	<a class="btn btn-primary px-4" href="{{route('categories.index')}}">Back</a>
                	<button type="submit" class="btn btn-primary px-4">Save</button>
                </div>                
             </form>
          </div>
       </div>
    </div>
 </div>
@endsection
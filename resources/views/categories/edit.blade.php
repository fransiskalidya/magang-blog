@extends('admin.dashboard')
@section('title')
Edit Category
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-body">
             <form action="{{ route('categories.update', $categories->id) }}" method="post" enctype="multipart/form-data">
                <!-- title -->
                @csrf
                @method('PUT')
                <div class="form-group">
                   <label for="input_category_title" class="font-weight-bold">
                      Title
                   </label>
                   <input id="input_category_title" value="{{ $categories->title}}" name="title" type="text" class="form-control" 
                   placeholder="Title"/>
                </div>
                <!-- slug -->
                <div class="form-group">
                   <label for="input_category_slug" class="font-weight-bold">
                      Slug
                   </label>
                   <input id="input_category_slug" value="{{ $categories->slug}}" name="slug" type="text" class="form-control" 
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
                      <input id="input_category_thumbnail" name="thumbnail" value="{{ $categories->thumbnail}}" type="file" class="form-control" placeholder=""
                     />
                   </div>
                </div>
                <div class="form-group">
                   <label for="input_category_description" class="font-weight-bold">
                      Description
                   </label>
                   <textarea id="input_category_description" value="{{ $categories->description}}" name="description" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
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
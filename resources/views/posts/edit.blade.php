@extends('admin.dashboard')
@section('title')
Edit Post
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Post
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('posts.update', $post->id) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}" id="title" aria-describedby="title" >
                    </div>
                    <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" class="form-control" value="{{ $post->image }}" required="required" name="image" id="image" aria-describedby="image" >
                        <img width="100px" height = "100px" src="{{asset('storage/'.$post->image)}}">

                    </div>
                    
                    <div class="form-group">
                        <label for="category">category</label>
                        <select name="category_id" class="form-control">
                        @foreach($categories as $ctg)
                            <option value="{{$ctg->id}}" {{$post->category_id == $ctg->id ? 'selected' : null}}>{{$ctg->title}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="isi">isi</label>
                        <input class="form-control" id="isi" value="{{ $post->isi }}" name="isi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection
@extends('admin.dashboard')
@section('title')
Add Post
@endsection
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Add Post
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
                <form method="post" action="{{ route('posts.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" class="form-control" id="title" aria-describedby="title" >
                    </div>
                    <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" class="form-control" required="required" name="image" id="image" aria-describedby="image" >
                    </div>
                    
                    <div class="form-group">
                        <label for="category">category</label>
                        <select name="category_id" class="form-control">
                        @foreach($categories as $ctg)
                            <option value="{{$ctg->id}}">{{$ctg->title}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="isi">isi</label>
                        <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection

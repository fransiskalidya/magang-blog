@extends('admin.dashboard')
@section('title')
Detail Category
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
        Detail Category
        </div> <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item" align="middle">
                    <img width="100px" height="100px" src="{{asset('storage/'.$Post->image)}}" align="middle"></li>
                    <li class="list-group-item"><b>title: </b>{{$Post->title}}</li>
                    <li class="list-group-item"><b>isi: </b>{{$Post->isi}}</li>
                    <li class="list-group-item"><b>Category: </b>{{$Post->category_id}}</li>
                     </ul>
        </div>
            <a class="btn btn-success mt-3" href="{{route('posts.index')}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
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
                    <img width="100px" height="100px" src="{{asset('storage/'.$categories->thumbnail)}}" align="middle"></li>
                    <li class="list-group-item"><b>title: </b>{{$categories->title}}</li>
                    <li class="list-group-item"><b>slug: </b>{{$categories->slug}}</li>
                    <li class="list-group-item"><b>description: </b>{{$categories->description}}</li>
                     </ul>
        </div>
            <a class="btn btn-success mt-3" href="{{route('categories.index')}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
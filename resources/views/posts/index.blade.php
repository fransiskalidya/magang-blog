@extends('admin.dashboard')

@section('title')
    Post
@endsection

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Post</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                                <form class="d-none d-sm-inline-block form-inline navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                <div class="col-md-6">
                                    <a href="{{route('posts.create')}}" class="btn btn-primary float-right" role="button">
                                        Add new
                                        <i class="fas fa-plus-square"></i>
                                    </a>
                                </div>
                            </div>

                            <br>
                            <br>
                            <ul class="list-group list-group-flush" >
                            @foreach ($paginate as $pgn)

<!-- category list -->
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center pr-0">
                                <label class="mt-auto mb-auto">
                                    <!-- todo: show category title -->
                                    {{$pgn -> title}}

                                </label>
                                <div>
                                    <!-- detail -->
                                    <a href="{{ route('posts.show',$pgn->id)}}" class="btn btn-sm btn-primary" role="button">
                                    <i class="fas fa-eye"></i>
                                    </a>
                                    <!-- edit -->
                                    <a href="{{ route('posts.edit',$pgn->id)}}"  class="btn btn-sm btn-info" role="button">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- delete -->
                                    <form class="d-inline" action="{{route('posts.destroy',$pgn->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    </form>
                                </div>
                                </li>
                                <!-- end  category list -->

                                @endforeach
                            </ul>
                        </div>
                    </div>
@endsection
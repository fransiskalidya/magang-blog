@extends('admin.dashboard')
@section('title')
User Role
@endsection
@section('content')
<div class="row">
    <div class="col-6">
    <div class="card">
        <div class="card-body">
            @foreach($user as $user)
            <div class="form-group">
                   <label for="input_category_slug" class="font-weight-bold">
                   <i class="fa fa-user"></i>

                      Name
                   </label>
                   <input id="input_category_slug" value="{{ $user->name}}" name="slug" type="text" class="form-control" 
                   placeholder="otomatis terbuat" readonly />
                </div>
                <div class="form-group">
                   <label for="input_category_slug" class="font-weight-bold">
                   <i class="fa fa-envelope"></i>
   
                   Email
                   </label>
                   <input id="input_category_slug" value="{{ $user->email}}" name="slug" type="text" class="form-control" 
                   placeholder="otomatis terbuat" readonly />
                </div>
   
            @endforeach

        </div>
        </div>
    </div>
</div>
@endsection
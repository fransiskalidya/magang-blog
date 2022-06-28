@extends('admin.dashboard')

@section('title')
    Category
@endsection

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Category</h6>
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
                                    <a href="{{route('categories.create')}}" class="btn btn-primary float-right" role="button">
                                        Add new
                                        <i class="fas fa-plus-square"></i>
                                    </a>
                                </div>
                            </div>

                            <br>
                            <br>
                            <ul class="list-group list-group-flush" style={marginLeft:"26px"}>
                                @include('categories._category-list',[
                                'categories' => $categories
                                    ])
                            </ul>
                            <!-- <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                  </tbody>
                                </table>
                            </div> -->
                        </div>
                    </div>
@endsection
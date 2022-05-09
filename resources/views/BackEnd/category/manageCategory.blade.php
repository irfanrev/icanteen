@extends('BackEnd.master')

@section('title')
    IcanTeen Category Mange
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Order Number</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($category as $cate)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $cate->category_name }}</td>
                            <td>{{ $cate->order_number }}</td>
                            <td>{{ $cate->added_on }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                      More
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Pending</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <a class="dropdown-item" href="#">Active</a>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

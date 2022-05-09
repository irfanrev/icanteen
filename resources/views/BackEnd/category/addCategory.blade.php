@extends('BackEnd.master')

@section('title')
    IcanTeen Category
@endsection

@section('content')
    <div class="col-md-5 my-lg-5 offset-3">
        @if (Session::get('sms'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('sms') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add New Category <small></small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('cate_store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="category_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Order Number</label>
                        <input type="text" name="order_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Add On</label>
                        <input type="date" name="added_on" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category Status</label>
                        <div class="radio">
                            <input type="radio" name="category_status" value="1">Active
                            <input type="radio" name="category_status" value="2">Inactive
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection

@extends('BackEnd.master')

@section('title')
    IcanTeen Category Mange
@endsection

@section('content')
    @if (Session::get('sms'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('sms') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card my-5">
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
                            
                            <td>
                                @if($cate->category_status == 1)
                                <a class="btn btn-outline-success" href="{{ route('inactive_cate',['category_id'=>$cate->category_id]) }}"><i class="fas fa-arrow-up" title="klik untuk Mengaktifkan"></i></a>
                                @else
                                <a class="btn btn-outline-info" href="{{ route('category_active',['category_id'=>$cate->category_id]) }}"><i class="fas fa-arrow-down" title="klik untuk Menonaktifkan"></i></a>
                                @endif
                                <a class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $cate->category_id }}"><i class="fas fa-edit" title="klik untuk Mengubah"></i></a>
                                <a class="btn btn-outline-danger" href="{{ route('delete_cate', ['category_id'=>$cate->category_id]) }}"> <i class="fas fa-trash" title="klik untuk hapus"></i></a>
                            </td>
                        </tr>

                        <!-- modal -->
                        <div class="modal fade" id="edit{{ $cate->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Kategori</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('cate_update') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input type="text" class="form-control" name="category_name" value="{{ $cate->category_name }}">
                                            <input type="hidden" class="form-control" name="category_id" value="{{ $cate->category_id }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="order_number" value="{{ $cate->order_number }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btn" class="btn btn-primary" value="Update">
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

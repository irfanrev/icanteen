@extends('BackEnd.master')

@section('title')
    IcanTeen Tambah Data Hidangan
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
                <h3 class="card-title">Tambah Data Hidangan <small></small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('store_dish_table')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Hidangan</label>
                        <input type="text" name="dish_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>----Pilih Kategori----</label>
                        <select name="category_id" class="form-control">
                            <option>----Select Kategori----</option>
                                @foreach($categories as $cate)
                                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Detail Hidangan</label>
                        <textarea name="dish_detail" type="text" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Hidangan</label>
                        <input type="file" name="dish_image" class="form-control" accept="image/*" >
                    </div>
                    <div class="form-group">
                        <label>Status Hidangan</label>
                        <div class="radio">
                            <input type="radio" name="dish_status" value="1">Aktif
                            <input type="radio" name="dish_status" value="0">Tidak Aktif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ditambahkan Pada</label>
                        <input type="date" name="added_on" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah Hidangan</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection

@extends('BackEnd.master')

@section('title')
    IcanTeen Tambah Data Kurir
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
            <form method="POST" action="{{ route('delivery_store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Kurir</label>
                        <input type="text" name="delivery_boy_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone Kurir</label>
                        <input type="text" name="delivery_boy_phone_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password Kurir</label>
                        <input type="text" name="delivery_boy_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ditambahkan Pada</label>
                        <input type="date" name="added_on" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status Kurir</label>
                        <div class="radio">
                            <input type="radio" name="delivery_boy_status" value="1">Aktif
                            <input type="radio" name="delivery_boy_status" value="2">Tidak Aktif
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah Kurir</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection

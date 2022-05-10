@extends('BackEnd.master')

@section('title')
    IcanTeen Tambah Data Kupon
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
                <h3 class="card-title">Tambah Data Kupon <small></small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('store_coupun_code') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Kode Kupon</label>
                        <input type="text" name="coupon_code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nilai Kupon</label>
                        <input type="text" name="coupon_value" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Transaksi Minimal</label>
                        <input type="text" name="cart_min_value" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tangal Berakhir</label>
                        <input type="date" name="expired_on" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ditambahkan Pada</label>
                        <input type="date" name="added_on" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipe Kupon</label>
                        <div class="radio">
                            <input type="radio" name="coupon_type" value="1">Percentage
                            <input type="radio" name="coupon_type" value="0">Fixed
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status Kupon</label>
                        <div class="radio">
                            <input type="radio" name="coupon_status" value="1">Aktif
                            <input type="radio" name="coupon_status" value="0">Tidak Aktif
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection

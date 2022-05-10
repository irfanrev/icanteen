@extends('BackEnd.master')

@section('title')
    IcanTeen Update Kupon
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
            <h3 class="card-title">Data Kupon</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Kode</th>
                        <th>Tipe</th>
                        <th>Nilai</th>
                        <th>Min Belanja</th>
                        <th>Expired</th>
                        <th>Ditambahkan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($coupons as $code)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $code->coupon_code }}</td>
                            <td>
                                @if($code->coupon_type==1)
                                Percentage
                                @else
                                Fixed
                                @endif
                            </td>
                            <td>{{ $code->coupon_value }}</td>
                            <td>{{ $code->cart_min_value }}</td>                           
                            <td>{{ $code->expired_on }}</td>                           
                            <td>{{ $code->added_on }}</td>                           
                            <td>
                                @if($code->coupon_status==1)
                                <a class="btn btn-outline-success" href="{{ route('inactive_coupon_code', ['coupon_id'=>$code->coupon_id]) }}"><i class="fas fa-arrow-up" title="klik untuk Menonaktifkan"></i></a>
                                @else
                                <a class="btn btn-outline-info" href="{{ route('active_coupon_code', ['coupon_id'=>$code->coupon_id]) }}"><i class="fas fa-arrow-down" title="klik untuk Mengaktifkan"></i></a>
                                @endif
                                <a class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $code->coupon_id }}"><i class="fas fa-edit" title="klik untuk Mengubah"></i></a>
                                <a class="btn btn-outline-danger" href="{{ route('delete_coupon_code', ['coupon_id'=>$code->coupon_id]) }}"> <i class="fas fa-trash" title="klik untuk hapus"></i></a>
                            </td>
                        </tr>

                        <!-- modal -->
                        <div class="modal fade" id="edit{{ $code->coupon_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Kupon</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('update_coupon_code') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Kode Kupon</label>
                                            <input type="text" class="form-control" name="coupon_code" value="{{ $code->coupon_code}}">
                                            <input type="hidden" class="form-control" name="coupon_id" value="{{ $code->coupon_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Kupon</label>
                                            <input type="number" class="form-control" name="coupon_value" value="{{ $code->coupon_value}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Min Belanja</label>
                                            <input type="number" class="form-control" name="cart_min_value" value="{{ $code->cart_min_value}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipe Kupon</label>
                                            <div class="radio">
                                                <input type="radio" name="coupon_type" value="1">Percentage
                                                <input type="radio" name="coupon_type" value="0">Fixed
                                            </div>
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

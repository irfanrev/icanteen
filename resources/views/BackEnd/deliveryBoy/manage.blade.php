@extends('BackEnd.master')

@section('title')
    IcanTeen Update Data Kurir
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
            <h3 class="card-title">Data Kurir</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Nama Kurir</th>
                        <th>Nomor Telepon Kurir</th>
                        <th>Ditambahkan Pada</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($boys as $boy)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $boy->delivery_boy_name }}</td>
                            <td>{{ $boy->delivery_boy_phone_number }}</td>
                            <td>{{ $boy->added_on }}</td>
                            
                            <td>
                                @if($boy->delivery_boy_status==1)
                                <a class="btn btn-outline-success" href="{{ route('delivery_boy_inactive', ['delivery_boy_id'=>$boy->delivery_boy_id]) }}"><i class="fas fa-arrow-up" title="klik untuk Menonaktifkan"></i></a>
                                @else
                                <a class="btn btn-outline-info" href="{{ route('delivery_boy_active', ['delivery_boy_id'=>$boy->delivery_boy_id]) }}"><i class="fas fa-arrow-down" title="klik untuk Mengaktifkan"></i></a>
                                @endif
                                <a class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $boy->delivery_boy_id }}"><i class="fas fa-edit" title="klik untuk Mengubah"></i></a>
                                <a class="btn btn-outline-danger" href="{{ route('delivery_boy_delete', ['delivery_boy_id'=>$boy->delivery_boy_id]) }}"> <i class="fas fa-trash" title="klik untuk hapus"></i></a>
                            </td>
                        </tr>

                        <!-- modal -->
                        <div class="modal fade" id="edit{{ $boy->delivery_boy_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Kategori</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('delivery_boy_update') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Kurir</label>
                                            <input type="text" class="form-control" name="delivery_boy_name" value="{{ $boy->delivery_boy_name}}">
                                            <input type="hidden" class="form-control" name="delivery_boy_id" value="{{ $boy->delivery_boy_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Handphone Kurir</label>
                                            <input type="number" class="form-control" name="delivery_boy_phone_number" value="{{ $boy->delivery_boy_phone_number}}">
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

@extends('BackEnd.master')

@section('title')
    IcanTeen Update Data Hidangan
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
            <h3 class="card-title">Data Hidangan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Nama Hidangan</th>
                        <th>Kategori Hidangan</th>
                        <th>Detail Dish</th>
                        <th>Dish_image</th>
                        <th>Ditambahkan Pada</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($dishes as $dish)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $dish->dish_name }}</td>
                            <td>{{ $dish->category_name }}</td>
                            <td>{{ $dish->dish_detail }}</td>
                            <td><img src="{{ asset($dish->dish_image) }}" height="25" width="60" class="img-fluid img-tumbnail"></td>
                            <td>{{ $dish->added_on }}</td>
                            
                            <td>
                                @if($dish->dish_status==1)
                                <a class="btn btn-outline-success" href="{{ route('inactive_dish', ['dish_id'=>$dish->dish_id]) }}"><i class="fas fa-arrow-up" title="klik untuk Menonaktifkan"></i></a>
                                @else
                                <a class="btn btn-outline-info" href="{{ route('active_dish', ['dish_id'=>$dish->dish_id]) }}"><i class="fas fa-arrow-down" title="klik untuk Mengaktifkan"></i></a>
                                @endif
                                <a class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $dish->dish_id }}"><i class="fas fa-edit" title="klik untuk Mengubah"></i></a>
                                <a class="btn btn-outline-danger" href="{{ route('dish_delete', ['dish_id'=>$dish->dish_id]) }}"> <i class="fas fa-trash" title="klik untuk hapus"></i></a>
                            </td>
                        </tr>

                        <!-- modal -->
                        <div class="modal fade" id="edit{{ $dish->dish_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Hidangan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('update_dish_table') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Hidangan</label>
                                            <input type="text" class="form-control" name="dish_name" value="{{ $dish->dish_name}}">
                                            <input type="hidden" class="form-control" name="dish_id" value="{{ $dish->dish_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori Sebelumnya</label>
                                            <input type="text" class="form-control" value="{{$dish->category_name}}">
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
                                            <textarea type="text" class="form-control" name="dish_detail" value="{{ $dish->dish_detail}}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Sebelumnya</label>
                                            <img src="{{ asset($dish->dish_image) }}" style="height: 150px; width: 150px; border-radius: 50%" >
                                            <input type="file" name="dish_image" class="form-control" accept="image/*" >
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

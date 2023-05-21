@extends('app.app')

@section('container')
<div class="content-header">
    <div class="row mb-2 px-3 py-3">
        <div class="col-sm-6">
            <h2 class="fs-5">Edit Barang</h2>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.update',['barang'=> $result->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="namaBarang" class="mb-1">Nama Barang</label>
                                        @if(isset($errors->all()['namaBarang']))
                                            <span class="alert" style="color:red; margin: 0px; padding:0px; line-height:0" >
                                                <p style="margin: 0px;padding:0px">
                                                    {{ $errors->all()['namaBarang'] }}
                                                </p>
                                            </span>
                                        @endif
                                        <input type="text" name="namaBarang" class="form-control" value="{{ $result->namaBarang ?? '' }}" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="satuan" class="mb-1">Satuan</label>
                                        <input type="text" name="satuan" class="form-control" value="{{ $result->satuan ?? '' }}" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="save" class="mb-1">Save</label> <br>
                                        <button class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
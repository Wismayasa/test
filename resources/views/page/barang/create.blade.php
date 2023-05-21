@extends('app.app')

@section('container')
<div class="content-header">
    <div class="row mb-2 px-3 py-3">
        <div class="col-sm-6">
            <h2 class="fs-5">Create Barang</h2>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="namaBarang" class="mb-1">Nama Barang</label>
                                        <input type="text" name="namaBarang" class="form-control" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="satuan" class="mb-1">Satuan</label>
                                        <input type="text" name="satuan" class="form-control" required maxlength="50">
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
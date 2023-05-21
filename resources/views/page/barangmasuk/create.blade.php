@extends('app.app')

@section('container')
<div class="content-header">
    <div class="row mb-2 px-3 py-3">
        <div class="col-sm-6">
            <h2 class="fs-5">Create Barang Masuk</h2>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barangmasuk.store') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="tanggalMasuk" class="mb-1">Tgl Barang Masuk</label>
                                        <input type="date" name="tanggalMasuk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="supplier" class="mb-1">Supplier</label>
                                        <input type="text" name="supplier" class="form-control" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="id_Barang" class="mb-1">Nama Barang</label>
                                        <select name="id_Barang" class="form-control" required>
                                            <option value="">-- Pilih barang --</option>
                                            @foreach($barang as $item)
                                            <option value="{{ $item->id }}">{{ $item->namaBarang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="jumlahMasuk" class="mb-1">Jumlah Barang Masuk</label>
                                        <input type="text" name="jumlahMasuk" class="form-control" required>
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
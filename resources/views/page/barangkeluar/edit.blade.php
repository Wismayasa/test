@extends('app.app')

@section('container')
<div class="content-header">
    <div class="row mb-2 px-3 py-3">
        <div class="col-sm-6">
            <h2 class="fs-5">Edit Barang Keluar</h2>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barangkeluar.update',['barangkeluar'=> $result->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="tanggalKeluar" class="mb-1">Tgl Barang Keluar</label>
                                        <input type="date" name="tanggalKeluar" class="form-control" value="{{ $result->tanggalKeluar ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="id_Barang" class="mb-1">Nama Barang</label>
                                        <select name="id_Barang" class="form-control" required>
                                            <option value="">-- Pilih barang --</option>
                                            @foreach($barang as $item)
                                            <option value="{{ $item->id }}" @if($result->id == $item->id) selected @endif>{{ $item->namaBarang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="jumlahKeluar" class="mb-1">Jumlah Barang Keluar</label>
                                        <input type="text" name="jumlahKeluar" class="form-control" value="{{ $result->jumlahKeluar ?? '' }}" required>
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
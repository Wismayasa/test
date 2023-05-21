@extends('app.app')

@section('container')
<div class="content-header">
    <div class="row mb-2 px-3 py-3">
        <div class="col-sm-6">
            <h2 class="fs-5">Data Barang</h2>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if($errors->any())
                        <script> alert('{{ $errors->first() }}')</script>
                    @endif
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('barang.create') }}" class="btn btn-success mb-3">Tambah</a>
                        
                        <form action="" method="GET" class="d-flex">
                            <div class="input-group mb-3" style="width:200px;">
                                <input type="text" name="keyword" class="form-control"/>
                                <button class="input-group=text btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah Stok</th>
                                    <th scope="col">satuan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach($result as $item)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->namaBarang }}</td>
                                    <td>{{ $item->getbarangmasuk()->sum('jumlahMasuk')-$item->getbarangkeluar()->sum('jumlahKeluar') }}</td>
                                    <td>{{ $item->satuan }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('barang.edit',['barang'=>$item->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                                        {{-- <form action="{{ route('barang.destroy',['barang'=>$item->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                            <button onclick="return confirm('Yakin ingin menghapus ?')" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
                                        </form> --}}
                                    </td>
                                </tr>
                                <?php $no++ ?>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{ $result->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('app.app')

@section('container')
<div class="content-header">
    <div class="row mb-2 px-3 py-3">
        <div class="col-sm-6">
            <h2 class="fs-5">Edit Users</h2>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.update',['user'=> $result->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="name" class="mb-1">Nama</label>
                                        <input type="text" name="name" class="form-control" value="{{ $result->name ?? '' }}" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="username" class="mb-1">Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ $result->name ?? '' }}" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="password" class="mb-1">Password</label>
                                        <input type="password" name="password" class="form-control" maxlength="50">
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
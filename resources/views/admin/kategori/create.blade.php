@extends('layouts.admin')
@section('style')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"')}}" />
@endsection
@section('content')
<!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Add Data</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable Kategori</h6>
<hr>
<div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>kategori</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('kategori.index') }}" class="btn btn-grd-primary px-4">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">nama</label>
                            <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="nama"
                            value="{{ old('kategori') }}" placeholder="nama" required>
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">deskripsi</label>
                            <input type="text" class="form-control" @error('deskripsi') is-invalid @enderror name="deskripsi"
                            value="{{ old('deskripsi') }}" placeholder="deskripsi" required>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                    <button type="submit" class="btn btn-grd-royal px-4">Simpan</button>
                    </form>
                </div>
            </div>

@endsection
@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>

@endpush

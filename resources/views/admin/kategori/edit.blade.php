@extends('layouts.admin')

@section('content')
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Components</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable Kategori</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">

                        @php $no = 1; @endphp
                        <form action="{{route('kategori.update', $kategori->id)}}" {{--error cik--}} method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Masukkan Kategori</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $kategori->nama)}}">
                                @error('name')
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
                            <a href="{{route('kategori.index')}}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
            </div>
        </div>
    </div>

@endsection

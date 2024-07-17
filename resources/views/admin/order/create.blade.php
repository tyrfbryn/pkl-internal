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
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable Order</h6>
<hr>
<div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>order</h5>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">status</label>
                            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                            value="{{ old('status') }}" placeholder="status" required>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Jumlah Order</label>
                            <input type="text" class="form-control @error('jml_order') is-invalid @enderror" name="jml_jml_order"
                            value="{{ old('jml_order') }}" placeholder="jml_order" required>
                            @error('order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Total</label>
                            <input type="integer" class="form-control @error('total') is-invalid @enderror" name="total"
                            value="{{ old('total') }}" placeholder="total" required>
                            @error('total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="float-end mt-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('order.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
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

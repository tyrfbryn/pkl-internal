@extends('layouts.admin')

@section('content')
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Order</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">

                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable order</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">

                        @php $no = 1; @endphp
                        <form action="{{route('order.update', $order->id)}}" {{--error cik--}} method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="">User</label>
                                <select name="id_user" id="" class="form-control">
                                    @foreach ($user as $item)
                                        <option value="{{$item->id}}" {{$item->id == $produk->id_user ? 'selected': ''}}>{{ $item->user }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Masukkan Nama Barang</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $order->status)}}">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Masukkan jumlah orderan</label>
                                <input type="text" class="form-control" @error('jml_order') is-invalid @enderror name="jml_order"
                                value="{{ old('jml_order') }}" placeholder="jml_order" required>
                                @error('jml_order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Masukkan total</label>
                                <input type="text" class="form-control" @error('total') is-invalid @enderror name="total"
                                value="{{ old('total') }}" placeholder="total" required>
                                @error('total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Masukkan stock</label>
                                <input type="text" class="form-control" @error('stock') is-invalid @enderror name="stock"
                                value="{{ old('stock') }}" placeholder="stock" required>
                                @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <a href="{{route('order.index')}}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
            </div>
        </div>
    </div>

@endsection

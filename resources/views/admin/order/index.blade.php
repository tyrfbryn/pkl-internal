@extends('layouts.admin')


@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet')}}" />
@endsection


@section('content')


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
</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable Order</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="ms-right" align="right">
            <div class="btn-group">
                <a href="{{route('order.create')}}" class="btn btn-primary">Add Data</a>
            </div>
            <br>
            <br>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Jumlah Order</th>
                        <th>Total</th>
                        {{-- <th>Salary</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($orders as $data)


                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->jml_order}}</td>
                            <td>{{$data->total}}</td>
                            <td>

                                <form action="{{route('order.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('order.edit', $data->id)}}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <button href="{{route('order.destroy', $data->id)}}" class="btn btn-danger" data-confirm-delete="true">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                </tbody>
            </table>
        </div>
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

@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endpush

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
                    <a class="btn btn-info" href="{{ route('edit') }}">Edit Items</a>


            <div class="card mt-5">
                <div class="card-header">{{ __('ORDERS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">ORDER ID</th>
                            <th scope="col">Fname</th>
                            <th scope="col">Lname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Service Type</th>
                            <th scope="col">Translate From</th>
                            <th scope="col">Translate to</th>
                            <th scope="col">Pages</th>
                            <th scope="col">Words</th>
                            <th scope="col">Days</th>
                            <th scope="col">Extra Service</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Total</th>
                            <th scope="col">File</th>
                            <th scope="col">Created_at</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->order_id}}</td>
                                <td>{{$item->fname}}</td>
                                <td>{{$item->lname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->translate_type}}</td>
                                <td>{{$item->translate_from}}</td>
                                <td>{{$item->translate_to}}</td>
                                <td>{{$item->page_count}}</td>
                                <td>{{$item->word_count}}</td>
                                <td>{{$item->days}}</td>
                                <td>{{$item->extra_service}}</td>
                                <td>{{$item->payment_type}}</td>
                                <td>{{$item->Notes}}</td>
                                <td>{{$item->grand_total}}$</td>
                                <td> <a href='{{asset($item->translated_file)}}' download>Click to download </a>
                                    </td>
                                <td>{{$item->created_at->format('M-d- Y')}}</td>
                              </tr>
                            @endforeach


                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
  $('#myTable').DataTable();
} );
  </script>
@endpush

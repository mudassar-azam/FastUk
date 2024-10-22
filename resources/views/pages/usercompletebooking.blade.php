@extends('layout.master')

@section('plugin-styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Your Bookings</h4>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                               <th>Book ID</th>
                                <th>Departure Name</th>
                                <th>Destination Name</th>
                                <th>status</th>
{{--                                <th>Driver Name</th>--}}
                                <th>Booking Date</th>
                                <th>Picking time</th>
                                <th>collection name</th>
                                <th>collection phone</th>
                                <th>collection address</th>
                                <th>collection city</th>
                                <th>Delivery name</th>
                                <th>Delivery phone</th>
                                <th>Delivery address</th>
                                <th>Delivery city</th>
                                <th>Estimate Price</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($booking as $bookings)
                                <tr class="success">
                                    <td>{{$bookings->id}}</td>
                                    <td>{{$bookings->from_address}}</td>
                                    <td>{{$bookings->to_address}}</td>
                                    <td>
                                        @if($bookings->status == 'pending')
                                            <label class="badge badge-warning">Pending</label>
                                        @elseif($bookings->status == 'complete')
                                            <label class="badge badge-success">Complete</label>
                                        @elseif($bookings->status == 'progress')
                                            <label class="badge badge-info">In Progress</label>
                                        @elseif($bookings->status == 'cancel')
                                            <label class="badge badge-danger">Canceled</label>
                                        @endif
                                    </td>
{{--                                    <td>{{$bookings->vehicle_id}}</td>--}}
                                    <td>{{$bookings->booking_date}}</td>
                                    <td>{{$bookings->pick_time}}</td>
                                    <td>{{$bookings->coll_name}}</td>
                                    <td>{{$bookings->coll_phone}}</td>
                                    <td>{{$bookings->coll_address}}</td>
                                    <td>{{$bookings->coll_city}}</td>
                                    <td>{{$bookings->deli_name}}</td>
                                    <td>{{$bookings->deli_phone}}</td>
                                    <td>{{$bookings->deli_address}}</td>
                                    <td>{{$bookings->deli_city}}</td>
                                    <td>${{$bookings->price}}</td>


                                </tr>
                            @endforeach
{{--                            <tr>--}}
{{--                                <td>Jacob</td>--}}
{{--                                <td>53275531</td>--}}
{{--                                <td>12 May 2017</td>--}}
{{--                                <td>--}}
{{--                                    <label class="badge badge-danger">Pending</label>--}}
{{--                                </td>--}}
{{--                            </tr>--}}





{{--                            <tr>--}}
{{--                                <td>Messsy</td>--}}
{{--                                <td>53275532</td>--}}
{{--                                <td>15 May 2017</td>--}}
{{--                                <td>--}}
{{--                                    <label class="badge badge-warning">In progress</label>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>John</td>--}}
{{--                                <td>53275533</td>--}}
{{--                                <td>14 May 2017</td>--}}
{{--                                <td>--}}
{{--                                    <label class="badge badge-info">Fixed</label>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Peter</td>--}}
{{--                                <td>53275534</td>--}}
{{--                                <td>16 May 2017</td>--}}
{{--                                <td>--}}
{{--                                    <label class="badge badge-success">Completed</label>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Dave</td>--}}
{{--                                <td>53275535</td>--}}
{{--                                <td>20 May 2017</td>--}}
{{--                                <td>--}}
{{--                                    <label class="badge badge-warning">In progress</label>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


<div class="d-flex justify-content-center">
    <nav aria-label="...">
        <ul class="pagination">
            @for ($i = 1; $i <= $booking->lastPage(); $i++)
                <li class="page-item {{ ($i == $booking->currentPage()) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $booking->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    </nav>
</div>






@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
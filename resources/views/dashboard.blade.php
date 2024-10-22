@extends('layout.master')

@push('plugin-styles')
 <link rel="stylesheet" type="text/css" href="assets/plugins/plugin.css" media="all">
@endpush

@section('content')
<div class="row dashboardboxes">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Bookings</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$allbooking}}</h3>
              <p class="font-weight-medium text-right mb-0">£{{$allbooking_p}}</p>
            </div>
          </div>
        </div>
        <a href="{{url('user/bookings')}}"><p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> view detail </p></a>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Canceled Bookings</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$cancel}}</h3>
            </div>
          </div>
        </div>
        <a href="{{url('user/usercancaelbooking')}}"><p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> view detail </p></a>
      </div>
    </div>
  </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-truck text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Progress Bookings</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$inprogress}}</h3>
            </div>
          </div>
        </div>
        <a href="{{url('user/userprogressbooking')}}"><p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> view detail </p></a>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-checkbox-marked text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Completed Bookings</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$complete}}</h3>
            </div>
          </div>
        </div>
        <a href="{{url('user/usercompletebooking')}}"><p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> view detail </p></a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Recently Bookings</h4>
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Book ID</th>
                        <th>Departure Name</th>
                        <th>Destination Name</th>
                        <th>status</th>
                        <th>Booking Date</th>
                        <th>Picking time type</th>
                        <th>Package Type</th>
                        <th>Quantity</th>
                        <th>Weight</th>
                        <th>Unit</th>
                        <th>Length</th>
                        <th>Width</th>
                        <th>Height</th>
                        <th>Size Unit</th>
                        <th>Estimate Price</th>
                        <th>Extra Addresses</th>
                        <th>Action</th>

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
                            <td>{{$bookings->booking_date}}</td>
                            <td>
                                @if($bookings->pickup_time_type == 'at')
                                    {{ $bookings->pickup_time_type }} - {{ \Carbon\Carbon::parse($bookings->pick_time_at)->format('h:i A') }}
                                @elseif($bookings->pickup_time_type == 'asap')    
                                    {{ $bookings->pickup_time_type }}
                                @elseif($bookings->pickup_time_type == 'after')    
                                    {{ $bookings->pickup_time_type }} - {{ \Carbon\Carbon::parse($bookings->pick_time_after)->format('h:i A') }}
                                @elseif($bookings->pickup_time_type == 'between')    
                                    {{ $bookings->pickup_time_type }}-{{ \Carbon\Carbon::parse($bookings->pick_time_from)->format('h:i A') }}<>{{ \Carbon\Carbon::parse($bookings->pick_time_to)->format('h:i A') }}
                                @endif
                            </td>
                            <td>{{$bookings->package_type}}</td>
                            <td>{{$bookings->quantity}}</td>
                            <td>{{$bookings->weight}}</td>
                            <td>{{$bookings->unit}}</td>
                            <td>{{$bookings->package_type}}</td>
                            <td>{{$bookings->length}}</td>
                            <td>{{$bookings->width}}</td>
                            <td>{{$bookings->height}}</td>
                            <td>£{{$bookings->size_unit}}</td>
                            @php 
                              $booking = DB::table('user_extra_addresses')
                                      ->where('booking_id', $bookings->id)
                                      ->orderBy('id', 'desc')
                                      ->get();
                            @endphp
                            @if ($booking->isEmpty()) 
                              <td>
                                  <a>-</a>
                              </td>
                            @else
                              <td>
                                  <a href="{{ route('addresses.extra' , $bookings->id) }}" class="btn btn-primary">View</a>
                              </td>
                            @endif
                             <td>
                                <a href="{{ url('rebook', ['id' => $bookings->id]) }}" class="btn btn-primary">Rebook</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include SweetAlert library -->
<script src="/path/to/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    @if (session('success'))
    <script>
        // Display SweetAlert for 2 seconds
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
@endsection

@push('plugin-scripts')
    <script src="{{url('assets/plugins/chartjs/chart.min.js')}}"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>


@endpush

@push('custom-scripts')
    <script src="assets/js/dashboard.js"></script>


@endpush

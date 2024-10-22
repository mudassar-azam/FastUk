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
                        <th>Address Type</th>
                        <th>Collection Point</th>
                        <th>Delivery Point</th>
                        <th>Package Type</th>
                        <th>Quantity</th>
                        <th>Weight</th>
                        <th>Unit</th>
                        <th>Length</th>
                        <th>Width</th>
                        <th>Height</th>
                        <th>Size Unit</th>
                        <th>Company Name</th>
                        <th>Contact Name</th>
                        <th>Contact Number</th>
                        <th>Postal Code</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($booking as $bookings)
                        <tr class="success">
                            <td>{{$bookings->address_type}}</td>
                            <td>{{$bookings->collection_point ?? '-'}}</td>
                            <td>{{$bookings->delivery_point ?? '-'}}</td>
                            <td>{{$bookings->package_type}}</td>
                            <td>{{$bookings->quantity}}</td>
                            <td>{{$bookings->weight}}</td>
                            <td>{{$bookings->unit}}</td>
                            <td>{{$bookings->length}}</td>
                            <td>{{$bookings->width}}</td>
                            <td>{{$bookings->height}}</td>
                            <td>{{$bookings->size_unit}}</td>
                            <td>{{$bookings->company_name}}</td>
                            <td>{{$bookings->contact_name}}</td>
                            <td>{{$bookings->contact_tele}}</td>
                            <td>{{$bookings->postal_code}}</td>
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

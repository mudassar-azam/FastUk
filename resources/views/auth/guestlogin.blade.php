@extends('layout.master-mini')
@section('content')
    <div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one"
        style="background-image: url({{ asset('fast_couriers_uk_banner.jpg') }}); background-size: cover;">
        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <div class="auto-form-wrapper">
                    <form method="POST" action="{{ route('logged') }}">
                        @csrf
                        <div class="form-group">
                            <label class="label">Track ID</label>
                            <div class="input-group">
                                <input id="track_id" type="text"
                                    class="form-control @error('track_id') is-invalid @enderror" name="track_id"
                                    value="{{ old('track_id') }}" required autocomplete="track_id" autofocus>                        
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                                @error('track_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn submit-btn btn-block"
                                style="background:#AA1818;border:none;color:white;">Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
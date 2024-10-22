@extends('layout.master')

@section('plugin-styles')
@endsection

@section('content')
    <form method="post" action="{{ url('user/save-profile') }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('authuserimage/' . auth()->user()->image) }}" alt="Admin" id="pic_circlce" onclick="select_img()" class="rounded-circle" width="150">
                    <input type="file" name="usr_img" id="usr_img" onChange="displayImage(this)" style="display: none;" />
                    <div class="mt-3">
                        <h4>{{ auth()->user()->name }}</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body" style="border: none; box-shadow: 0px 0px 8px 6px rgb(64 118 146 / 72%);">
                            <!--  Name -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Name:</h6>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" name="name" value="{{ $userdata->name }}" required>
                                </div>
                            </div>
                            <hr>

                            <!-- Email -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Email:</h6>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" name="email" value="{{ $userdata->email }}" readonly>
                                </div>
                            </div>
                            <hr>

                            <!-- Mobile -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Mobile:</h6>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" name="phone" value="{{ $userdata->phone }}" required>
                                </div>
                            </div>

                            <hr>

                            <!-- Save Changes Button -->
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes <i class="mdi mdi-autorenew"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
    <script>
        function select_img() {
            document.getElementById('usr_img').click();
        }
        function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#pic_circlce').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>
@endpush

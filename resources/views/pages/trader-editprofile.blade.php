@extends('layout.master')

@section('plugin-styles')
@endsection

@section('content')
    <form method="post" action="{{url('user/save-profile')}}" enctype="multipart/form-data">
        @csrf
    <div class="row">

        <div class="col-md-12" >
            <div class="row" >
                <div class="col-md-1"></div>
                <div class="col-md-5">

                    <img src="{{ asset('authuserimage/' . auth()->user()->image) }}" alt="Admin" id='pic_circlce' onclick="select_img()" class="rounded-circle" width="150">
                    <input type="file" name="usr_img" id="usr_img" onChange="displayImage(this)" style="display: none;"  />
                    <div class="mt-3">
                        <h4>{{auth()->user()->name}}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card mb-3">
                        <div class="card-body" style=" border: none;
    box-shadow: 0px 0px 8px 6px rgb(64 118 146 / 72%);">

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Company Name :</h6>
                                </div>
                                <div class="col-sm-9 ">
                                    <input class="form-control" name="company_name" value="{{$userdata->company_name}}" >
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Contact Name :</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" value=" {{$userdata->name}}" >

                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email :</h6>
                                </div>
                                <div class="col-sm-9 ">

                                    <input class="form-control" name="email" value="{{$userdata->email}}" readonly >
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone:</h6>
                                </div>
                                <div class="col-sm-9 ">

                                    <input class="form-control" name="phone" value="{{$userdata->phone}}" >
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Invoice Address :</h6>
                                </div>
                                <div class="col-sm-9 ">
                                    <input class="form-control" name="address" value="{{$userdata->address}}" >
                                </div>
                            </div>
                             <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Trading Address :</h6>
                                </div>
                                <div class="col-sm-9 ">
                                    <input class="form-control" name="company_address" value="{{$userdata->company_address}}" >
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">VAT Number :</h6>
                                </div>
                                <div class="col-sm-9 ">
                                    <input class="form-control" name="company_vet" value="{{$userdata->company_vet}}" >
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Image :</h6>
                                </div>
                                <div class="col-sm-9 ">
                                    <input style="padding: 0.4rem;" type="file" class="form-control" name="image">
                                </div>
                            </div>

                        </div>
                        <button type="submit" >Save Change <i class="mdi mdi-autorenew"></i></button>

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
            $('#usr_img').click();
        }
        function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    document.querySelector('#pic_circlce').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>
@endpush

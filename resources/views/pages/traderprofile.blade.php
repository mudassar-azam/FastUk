@extends('layout.master')



@section('plugin-styles')

@endsection



@section('content')



<div class="row">

    <div class="col-md-12" >

        <div class="row" >

            <div class="col-md-1"></div>

        <div class="col-md-5">



            <img src="{{ asset('authuserimage/' . auth()->user()->image) }}" alt="Admin" id='pic_circlce' onclick="select_img()" class="rounded-circle" width="150">

            <input type="file" name="usr_img" id="usr_img" onChange="displayImage(this)" style="display: none;"  />

            <div class="mt-3">

                <h4>{{auth()->user()->name}}</h4>

                <a href="{{url('user/edit-profile')}}"><h6 class="text-muted font-size-sm">Edit Profile<i class="mdi mdi-border-color"></i></h6></a>

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

                        <h6 class="mb-0">Name :</h6>

                    </div>

                    <div class="col-sm-9">

                        {{$userdata->name}}

                    </div>

                </div>

                <hr>



                <div class="row">

                    <div class="col-sm-3">

                        <h6 class="mb-0">Email :</h6>

                    </div>

                    <div class="col-sm-9 ">

                        {{$userdata->email}}

                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-sm-3">

                        <h6 class="mb-0">Phone :</h6>

                    </div>

                    <div class="col-sm-9 ">

                        {{$userdata->phone}}

                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-sm-3">

                        <h6 class="mb-0">Mobile :</h6>

                    </div>

                    <div class="col-sm-9 ">

                        {{$userdata->phone}}

                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-sm-3">

                        <h6 class="mb-0">Address :</h6>

                    </div>

                    <div class="col-sm-9 ">

                        {{$userdata->address}}

                    </div>

                </div>



            </div>

        </div>

        </div>



    </div>

    </div>



</div>







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


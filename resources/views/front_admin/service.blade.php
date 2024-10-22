@extends('front_admin.base')
@section('content')
<div class="page-header flex-wrap">

   <!-- Button to trigger modal -->
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addServiceModal">
    Add New Service
</a>
</div>
<!-- Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Add New Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serviceTitle">Service Title</label>
                        <input type="text" name="serviceTitle" class="form-control" id="serviceTitle" placeholder="Enter service title">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter service slug">
                    </div>
                    <div class="form-group">
                        <label for="shortdescription">Short Description</label>
                        <input type="text" name="shortdescription" class="form-control" id="shortdescription" placeholder="Enter short description">
                    </div>
                    <div class="form-group">
                        <label for="serviceDescription">Service Description</label>
                        <textarea class="form-control" id="serviceDescription" name="serviceDescription" rows="4" placeholder="Enter service description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sideimage">Side Image</label>
                        <input type="file" class="form-control-file" name="sideimage" id="sideimage">
                    </div>
                    <div class="form-group">
                        <label for="serviceImage">Service Image</label>
                        <input type="file" class="form-control-file" name="serviceImage" id="serviceImage">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($services as $service)
            <div class="col-md-4 mb-4">
                <div class="card h-100 position-relative">
                    <img style="height: 100px; width:100px; margin:5px auto;" class="card-img-top" src="{{asset('public/serviceImages')}}/{{$service->serviceImage}}" alt="Card image cap">
                    <div class="card-body position-relative">
                        <h5 class="card-title">
                            {{$service->serviceTitle}}
                        </h5>
                        <h6  class="card-title">{{$service->serviceDescription}}</h6>
                        <div style="position:absolute;bottom: 5%;">
                        <!-- Edit Button -->
                        <a href="{{url('editservice', ['id' => $service->id]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('delete-service', ['id' => $service->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service post?')">Delete</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

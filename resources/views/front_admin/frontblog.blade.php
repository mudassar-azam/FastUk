@extends('front_admin.base')
@section('content')
<div class="page-header flex-wrap">

    <a href="{{ url('addblog') }}" class="btn btn-primary">
        Add New Blog
    </a>
</div>
<div class="container">
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100 position-relative">
                    <img class="card-img-top" src="{{asset('public/featureimages')}}/{{$blog->featureimage}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$blog->category}}
                        </h5>
                        <h6 class="card-title">{{$blog->title}}</h6>
                        <!-- Edit Button -->
                        <a href="{{url('editblog', ['id' => $blog->id]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('delete-blog', ['id' => $blog->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('front_admin.base')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-group label {
        font-weight: bold;
        color: black;
    }

    .form-group input[type="text"],
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: vertical;
    }

    .form-group input[type="file"] {
        padding: 5px 0;
    }

    .form-group button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-group button[type="submit"]:hover {
        background-color: #0056b3;
    }
.form-control{
    background-color: white;
    color: black;
}
</style>
    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <div class="container">
                <h2>Blog Posting</h2>
                <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title Tag</label>
                        <input type="text" class="form-control1" id="title_tag" name="title_tag"
                            placeholder="Title tag" value="{{$blog->title_tag}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Meta Description</label>
                        <textarea class="form-control1" id="myfield" name="meta_description" rows="5">{{$blog->meta_description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="category">Blog Category</label>
                        <input type="text" class="form-control1" id="category" name="category"
                            placeholder="Blog category" value="{{$blog->category}}">
                    </div>
                    <div class="form-group">
                        <label for="clientname">User Name</label>
                        <input type="text" class="form-control1" id="clientname" name="username"
                            placeholder="User name" value="{{$blog->username}}">
                    </div>
                    <div class="form-group">
                        <label for="image">User Image</label>
                        <input type="file" class="form-control" id="userimage" name="userimage" value="{{$blog->userimage}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="text" class="form-control1" id="title" name="title"
                            placeholder="Blog Title" value="{{$blog->title}}">
                    </div>
                    <div class="form-group">
                        <label for="detail">Blog Content</label>
                        <textarea class="form-control1" id="myfield" name="content" rows="5">{{$blog->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Feature Image</label>
                        <input type="file" class="form-control" id="image" name="featureimage" value="{{$blog->featureimage}}">
                    </div>
                    <div class="form-group">
                        <label for="subimages">Sub Images</label>
                        <input type="file" class="form-control" id="subimages" name="subimages[]" multiple value="{{$blog->subimages}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

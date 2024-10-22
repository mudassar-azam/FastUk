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

        .form-control {
            background-color: white;
            color: black;
        }
    </style>
    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <div class="container">
                <h2>Blog Posting</h2>
                <form action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Service Title</label>
                        <input type="text" class="form-control" id="serviceTitle" name="serviceTitle"
                            placeholder="Title tag" value="{{ $service->serviceTitle }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Title tag"
                            value="{{ $service->slug }}">
                    </div>
                    <div class="form-group">
                        <label for="shortdescription">Short Description</label>
                        <textarea class="form-control" id="shortdescription" name="shortdescription" rows="5">{{ $service->shortdescription }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Service Description</label>
                        <textarea class="form-control" id="serviceDescription" name="serviceDescription" rows="5">{{ $service->serviceDescription }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Section 1 Title</label>
                        <input type="text" class="form-control" id="section1title" name="section1title"
                            placeholder="Title" value="{{ $service->section1title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Section 1 Description</label>
                        <textarea class="form-control" id="section1description" name="section1description" rows="5">{{ $service->section1description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="sideimage">Section 1 Image</label>
                        <input type="file" class="form-control" id="section1image" name="section1image">
                    </div>

                    
                    <div class="form-group">
                        <label for="description">Section 1 Image alt text</label>
                        <input type="text" class="form-control" id="section1imagealt" name="section1imagealt"
                        placeholder="Service Image 1 Alt" value="{{ $service->section1imagealt }}" />
                    
                    </div>


                    <div class="form-group">
                        <label for="title">Section 2 Title</label>
                        <input type="text" class="form-control" id="section2title" name="section2title"
                            placeholder="Title" value="{{ $service->section2title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Section 2 Description</label>
                        <textarea class="form-control" id="section2description" name="section2description" rows="5">{{ $service->section2description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="sideimage">Section 2 Image</label>
                        <input type="file" class="form-control" id="section2image" name="section2image">
                    </div>

                    <div class="form-group">
                        <label for="description">Section 2 Image alt text</label>
                        <input type="text" class="form-control" id="section2imagealt" name="section2imagealt"
                            placeholder="Service Image 2 Alt" value="{{ $service->section2imagealt }}" />
                    </div>


                    <div class="form-group">
                        <label for="title">Section 3 Title</label>
                        <input type="text" class="form-control" id="section3title" name="section3title"
                            placeholder="Title" value="{{ $service->section3title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Section 3 Description</label>
                        <textarea class="form-control" id="section3description" name="section3description" rows="5">{{ $service->section3description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="sideimage">Section 3 Image</label>
                        <input type="file" class="form-control" id="section3image" name="section3image">
                    </div>

                    <div class="form-group">
                        <label for="description">Section 3 Image alt text</label>
                        <input type="text" class="form-control" id="section3imagealt" name="section3imagealt"
                            placeholder="Service Image 3 Alt" value="{{ $service->section3imagealt }}" />
                    </div>


                    <div class="form-group">
                        <label for="sideimage">Banner Image</label>
                        <input type="file" class="form-control" id="sideimage" name="sideimage"
                            value="{{ $service->sideimage }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Service Image</label>
                        <input type="file" class="form-control" id="serviceImage" name="serviceImage"
                            value="{{ $service->userimage }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

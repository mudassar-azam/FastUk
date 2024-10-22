@extends('front_admin.base')
@section('content')
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        /* width: 50%; */
    }

    form {
        width: 95%;
        margin: 0 auto;
        margin-top: 30px;
    }


    .item-container {
        border-radius: 5px;
        border: 1px solid lightgray;
        margin-top: 10px;
        margin-bottom: 10px;
        color: black;
        font-family: sans-serif;
    }

    .item-container .item-P1,
    .sub-item-container .item-P1 {
        border-bottom: 1px solid lightgray;
        padding: 8px;
        background-color: rgb(226, 220, 220);
    }

    .item-container .item-P2,
    .sub-item-container .item-P2 {
        padding: 8px;
    }

    .item-P2 input,
    .item-P2 textarea {
        width: 100%;
        margin-top: 5px;
        border: 1px solid lightgray;
        border-radius: 5px;
        padding: 5px;
        outline: none;
        font-size: 12px;
        font-weight: 500;
        background-color: white;
        color: black;
        margin-bottom: 10px;
        font-family: sans-serif;
    }

    .image-preview {
        display: flex;
        align-items: center;
        gap: 10px;
        max-width: 300px;
    }


    #file-input {
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 4px;
    }

    .sub-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 8px 12px;
        flex-wrap: wrap;

    }

    .item-container .item-P3 {
        border-bottom: 1px solid lightgray;
        padding: 8px;
        background-color: rgb(226, 220, 220);
    }

    .sub-item-container {
        width: 32%;
        border-radius: 5px;
        border: 1px solid lightgray;
        margin-top: 10px;
    }

    .submit-button {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 50px;
    }

    button[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #444;
    }

    button[type="submit"]:active {
        background-color: #555;
    }
    @media screen and (max-width: 768px) {
            .sub-item-container {
                width: 48%;
            }
        }

        @media screen and (max-width: 500px) {
            .sub-item-container {
                width: 100%;
            }
        }
</style>
<form action="{{url('updatehomepage')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="item-container">
        <div class="item-P1">
            <h5>Search Engine Optimization (SEO)</h5>
        </div>
        <div class="item-P2">
            <h5>SEO Title</h5>
            <input type="text" placeholder="Enter SEO Title" name="SEOTitle" value="{{ $homedata->SEOTitle}}" />
            <h5>Meta Descripton</h5>
            <textarea id="textarea" placeholder="Enter SEO Descripton" name="metaDescription" rows="4"
                cols="50">{{ $homedata->metaDescription}}</textarea>
        </div>
    </div>
    <div class="item-container">
        <div class="item-P1">
            <h5>Edit Banner Image</h5>
        </div>
        <div class="item-P2">
            <div class="image-preview">
                <input type="file" name="section1Image" id="file-input"/>
            </div>
        </div>
    </div>
    <div class="item-container">
        <div class="item-P1">
            <h5>Edit Servies</h5>
        </div>
        <div class="item-P2">
            <h5>Services Head Title</h5>
            <input type="text" placeholder="Enter Services Head Title" name="servicesHeadTitle" value="{{ $homedata->servicesHeadTitle}}" />
            <h5>Services Head Descripton</h5>
            <textarea id="services-textarea" placeholder="Enter Services Head Description"
                name="servicesHeadDesription" rows="4" cols="50">{{ $homedata->servicesHeadDesription}}</textarea>
        </div>
        <div class="item-P3">
            <h5>Customize Your Services:</h5>
        </div>

        <div class="sub-container">
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 1</h5>
                </div>
                <div class="item-P2">
                    <h5>Service1 Title</h5>
                    <input type="text" name="service1Title" placeholder="Enter Service1 Title" value="{{ $homedata->service1Title}}" />
                    <h5>Service1 Descripton</h5>
                    <textarea id="textarea" name="service1Description" placeholder="Enter Service1 Description"
                        rows="4" cols="50">{{ $homedata->service1Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service1Image" />
                </div>
            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 2</h5>
                </div>
                <div class="item-P2">
                    <h5>Service2 Title</h5>
                    <input type="text" name="service2Title" placeholder="Enter Service2 Title" value="{{ $homedata->service2Title}}" />
                    <h5>Service2 Descripton</h5>
                    <textarea id="textarea" name="service2Description" placeholder="Enter Service2 Description"
                        rows="4" cols="50">{{$homedata->service2Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service2Image" />
                </div>
            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 3</h5>
                </div>
                <div class="item-P2">
                    <h5>Service3 Title</h5>
                    <input type="text" name="service3Title" placeholder="Enter Service3 Title" value="{{$homedata->service3Title}}" />
                    <h5>Service3 Descripton</h5>
                    <textarea id="textarea" name="service3Description" placeholder="Enter Service3 Description"
                        rows="4" cols="50">{{$homedata->service3Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service3Image" />
                </div>
            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 4</h5>
                </div>
                <div class="item-P2">
                    <h5>Service4 Title</h5>
                    <input type="text" name="service4Title" placeholder="Enter Service4 Title" value="{{$homedata->service4Title}}" />
                    <h5>Service4 Descripton</h5>
                    <textarea id="textarea" name="service4Description" placeholder="Enter Service4 Description"
                        rows="4" cols="50">{{$homedata->service4Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="Service4Image" />
                </div>

            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 5</h5>
                </div>
                <div class="item-P2">
                    <h5>Service5 Title</h5>
                    <input type="text" name="service5Title" placeholder="Enter Service5 Title" value="{{$homedata->service5Title}}" />
                    <h5>Service5 Descripton</h5>
                    <textarea id="textarea" name="service5Description" placeholder="Enter Service5 Description"
                        rows="4" cols="50">{{$homedata->service5Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service5Image" />
                </div>
            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 6</h5>
                </div>
                <div class="item-P2">
                    <h5>Service6 Title</h5>
                    <input type="text" name="service6Title" placeholder="Enter Service6 Title" value="{{$homedata->service6Title}}" />
                    <h5>Service6 Descripton</h5>
                    <textarea id="textarea" name="service6Description" placeholder="Enter Service6 Description"
                        rows="4" cols="50">{{$homedata->service6Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service6Image" />
                </div>
            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 7</h5>
                </div>
                <div class="item-P2">
                    <h5>Service7 Title</h5>
                    <input type="text" name="service7Title" placeholder="Enter Service7 Title" value="{{$homedata->service7Title}}" />
                    <h5>Service7 Descripton</h5>
                    <textarea id="textarea" name="service7Description" placeholder="Enter Service7 Description"
                        rows="4" cols="50">{{$homedata->service7Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="Service7Image" />
                </div>

            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 8</h5>
                </div>
                <div class="item-P2">
                    <h5>Service8 Title</h5>
                    <input type="text" name="service8Title" placeholder="Enter Service8 Title" value="{{$homedata->service8Title}}" />
                    <h5>Service8 Descripton</h5>
                    <textarea id="textarea" name="service8Description" placeholder="Enter Service8 Description"
                        rows="4" cols="50">{{$homedata->service8Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service8Image" />
                </div>
            </div>
            <div class="sub-item-container">
                <div class="item-P1">
                    <h5>Service 9</h5>
                </div>
                <div class="item-P2">
                    <h5>Service9 Title</h5>
                    <input type="text" name="service9Title" placeholder="Enter Service9 Title" value="{{$homedata->service9Title}}"/>
                    <h5>Service9 Descripton</h5>
                    <textarea id="textarea" name="service9Description" placeholder="Enter Service9 Description"
                        rows="4" cols="50">{{$homedata->service9Description}}</textarea>
                </div>
                <div class="image-preview">
                    <input type="file" id="file-input" accept="image/*" name="service9Image" />
                </div>
            </div>
        </div>
    </div>
    <div class="item-container">
        <div class="item-P1">
            <h5>Section Three</h5>
        </div>
        <div class="item-P2">
            <h5>Section3 Title</h5>
            <input type="text" name="section3Title" placeholder="Enter Section3 Title" value="{{$homedata->section3Title}}"/>
            <h5>Section3 Descripton</h5>
            <textarea id="textarea" name="section3Description" placeholder="Enter Section3 Description" rows="4"
                cols="50">{{$homedata->section3Description}}</textarea>
            <div class="image-preview">
                <input type="file" id="file-input" accept="image/*" name="section3Image" />
            </div>
        </div>
    </div>
    <div class="item-container">
        <div class="item-P1">
            <h5>Section Four</h5>
        </div>
        <div class="item-P2">
            <h5>Section4 Title</h5>
            <input type="text" name="section4Title" placeholder="Enter Section4 Title" value="{{$homedata->section4Title}}"/>
            <h5>Section4 Descripton</h5>
            <textarea id="textarea" name="section4Description" placeholder="Enter Section4 Description" rows="4"
                cols="50">{{$homedata->section4Description}}</textarea>
            <div class="image-preview">
                <input type="file" id="file-input" accept="image/*" name="section4Image" />
            </div>
        </div>
    </div>
    <div class="submit-button">
        <button type="submit" class="submit-button">Update Content</button>
    </div>
</form>

@if(session()->has('success'))
    <div id="success-alert" class="alert alert-success" style="position: fixed; top: 10px; right: 10px; z-index: 9999;">
        {{ session('success') }}
    </div>
@endif

<script>
    // Auto-hide the success message after 10 seconds
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
    }, 10000); // 10000 milliseconds = 10 seconds
</script>

@endsection

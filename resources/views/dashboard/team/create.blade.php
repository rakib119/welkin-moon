@extends('layouts.dashboard')
{{-- Css --}}
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
{{-- Javascript --}}
@section('javacript')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                popover: {
                     image: [

                    // This is a Custom Button in a new Toolbar Area
                    ['custom', ['examplePlugin']],
                    ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']]
                 ]
                 }
             });
        });
    </script>
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Add Team Members</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item  "><a href="javascript:void(0)">Team</a>
                                    <li class="breadcrumb-item  "><a href="{{ route('team.index') }}">Team</a> </li>
                                    <li class="breadcrumb-item active">Add Team Members</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2>Add Team Member</h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('team.store') }}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name">Name
                                                            <span class="text-danger">*</span></label>
                                                        <input id="name" type="text" class="form-control"
                                                            value="{{ old('name') }}" name="name"
                                                            placeholder="Enter Team Member Name" autofocus>
                                                        @error('name')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label"
                                                            for="post">Post
                                                            <span class="text-danger">*</span></label>
                                                        <input id="post" type="text" class="form-control"
                                                            value="{{ old('post') }}" name="post"
                                                            placeholder="Enter your task">
                                                        @error('post')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="img">Image
                                                            <span class="text-danger">*</span></label>
                                                        <input type="file" accept=".jpg,.png" name="img" id="img" class="form-control">
                                                        @error('img')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="facebook">Facebook Link
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="facebook" id="facebook"
                                                            value="{{ old('facebook') }}"  class="form-control">
                                                        @error('facebook')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="twitter">Twitter Link
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="twitter" id="twitter"
                                                            value="{{ old('twitter') }}" class="form-control">
                                                        @error('twitter')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="linkedin">Linkedin Link
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="linkedin" id="linkedin"
                                                            value="{{ old('linkedin') }}" class="form-control">
                                                        @error('linkedin')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description
                                                            <span class="text-danger">*</span></label>
                                                            <Textarea name="description" id="description"
                                                             class="form-control">{{ old('description') }}</Textarea>
                                                        @error('description')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="is_featured"> Is Featured?
                                                            <input id="is_featured" type="checkbox" {{old('is_featured')==1?'checked':''}}  name="is_featured" value="1">
                                                        @error('is_featured')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="in_home"> Show in Home
                                                            <input id="in_home" name="in_home" type="checkbox" {{old('in_home')==1?'checked':''}}  value="1">
                                                        @error('in_home')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mt-3">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-success">Submit </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

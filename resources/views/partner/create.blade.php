@extends('welcome')
@section('styles')
    <link rel="stylesheet" href="{{ asset('dist/css/upload.css') }}"
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium my-10">
        Create new Partner item
    </h2>

    <div class="intro-y w-2/3 box p-5">
        <!-- Upload  -->
        <form method="POST" action="{{ route('partner.store') }}" id="file-upload-form" class="uploader"
              enctype="multipart/form-data">
            @csrf
            <input id="file-upload" type="file" name="image" accept="image/*"/>

            <label for="file-upload" id="file-drag" class="uploadlabel">
                <img id="file-image" src="#" alt="Preview" class="hidden">
                <div id="start">
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <div>Select a file or drag here</div>
                    <div id="notimage" class="hidden">Please select an image</div>
                    <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                </div>
                <div id="response" class="hidden">
                    <div id="messages"></div>
                    <progress class="progress" id="file-progress" value="0">
                        <span>0</span>%
                    </progress>
                </div>
            </label>

            <div class="mt-5">
                <label for="title" class="form-label">Title</label>
                <input id="title" type="text" class="form-control" placeholder="Input new Title" name="title">
            </div>

            <div class="text-right mt-5">
                <a href="{{ URL::previous() }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
                <button type="submit" class="btn btn-primary w-24">Save</button>
            </div>

        </form>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('dist/js/upload.js') }}"></script>
        <script type="text/javascript">
            let profile = document.getElementById("file-image");
            let inputFile = document.getElementById("file-upload");

            inputFile.onchange = function () {
            profile.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
@endsection

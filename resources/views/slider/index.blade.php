@extends('welcome')

@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">
        Slider
    </h2>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('slider.create') }}" class="btn btn-primary shadow-md mr-2">Add New Slider Item</a>
        </div>

        @foreach($sliders as $slider)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3" data-tw-toggle="modal" data-tw-target="#delete-modal-preview-{{ $slider->id }}">
                <div class="box">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                 src="{{ asset('storage/' . $slider->image) }}">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href="" class="block font-medium text-base">{{ $slider->title }}</a></div>
                        </div>
                    </div>
                </div>
            <!-- BEGIN: Modal Content -->
            <div id="delete-modal-preview-{{ $slider->id }}" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">Do you really want to delete {{ $slider->title }}? <br>This
                                    process cannot be undone.
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">

                                <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-24 mr-1">Cancel
                                </button>
                                <button type="submit" class="btn btn-danger w-24">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END: Modal Content -->
            </div>

        @endforeach
    </div>
@endsection

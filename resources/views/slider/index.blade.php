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
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="dist/images/preview-11.jpg">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href="" class="block font-medium text-base">Oppo Find X2 Pro</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

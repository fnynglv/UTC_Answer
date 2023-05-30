@extends('layout.master')

@section('title', 'HomePage')
@section('content')
<div class="mx-4 mb-4">
    <div class="container border border-3 border-black mt-4 gap-3 inline-flex p-2">
        <img src="assets/img1.jpg" alt="" class="">
        <div class="container">
            <span class="inline-block border-b border-black text-xs font-bold">
                IT REALLY COUNTS
            </span>

            <h1 class="font-bold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
    </div>

    <div class="border border-3 border-black mt-4 p-2">
        <span class="inline-block border-b border-black text-1xl font-bold">
            LATEST BOOK REVIEWS
        </span>
        <div class="carousel pt-3">
            <div class="carousel-inner">
                <a href="/detail" class="gap-5 inline-flex">
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <h2 class="text-sm font-bold">
                            Book Title
                        </h2>
                        <p class="text-xs">
                            Description
                        </p>
                    </div>
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <h2 class="text-sm font-bold">
                            Book Title
                        </h2>
                        <p class="text-xs">
                            Description
                        </p>
                    </div>
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <h2 class="text-sm font-bold">
                            Book Title
                        </h2>
                        <p class="text-xs">
                            Description
                        </p>
                    </div>
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <h2 class="text-sm font-bold">
                            Book Title
                        </h2>
                        <p class="text-xs">
                            Description
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="border border-3 border-black mt-4 p-2">
        <span class="inline-block border-b border-black text-1.5xl font-bold">
            Book Series Review
        </span>
        <div class="carousel pt-3">
            <a href="/detail" class="gap-5 inline-flex">
                <div class="carousel-inner">
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <form action="/detail" method="POST">
                            @csrf
                            <h2 class="text-2xl font-bold">
                                Book Title
                            </h2>
                            <button type="submit" class="border-black">
                                Read Post
                            </button>
                        </form>
                    </div>
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <form action="/detail" method="POST">
                            @csrf
                            <h2 class="text-2xl font-bold">
                                Book Title
                            </h2>
                            <button type="submit" class="border-black">
                                Read Post
                            </button>
                        </form>
                    </div>
                    <div class="container carousel-item">
                        <img src="assets/img1.jpg" alt="" srcset="">
                        <form action="/detail" method="POST">
                            @csrf
                            <h2 class="text-2xl font-bold">
                                Book Title
                            </h2>
                            <button type="submit" class="border-black">
                                Read Post
                            </button>
                        </form>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

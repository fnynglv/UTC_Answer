@extends('layout.master')

@section('title', 'Detail Page')
@section('content')

<div>
    <div class="display-flex gap-5">
        <h1 class="underline text-right text-2xl font-bold pb-4 pt-2">
            <a href="/home"> Home </a>
        </h1>
        <span class="inline-block border-b border-black text-1.5xl font-bold pt-4">
            IT REALLY COUNTS
        </span>
    </div>

    <h1 class="font-bold text-3xl pt-5">
        Book Title Lorem ipsum dolor sit amet consectetur, adipisicing elit.
    </h1>

    <p class="text-sm pt-3">
        description <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

    <div class="inline-flex gap-1 pt-3 pb-3">
       <h3> Author </h3>
       <h3> | </h3>
       <h3> Date </h3>
       <div class="w-full bg-yellow-200">
            Quicks Read
       </div>
    </div>

    <img src="assets/img1.jpg" alt="" srcset="" class="mx-auto p-2">

    <div class="inline-flex pt-2 gap-2 pb-4">
        <div>
            <a href="https://www.linkedin.com/"></a>
            <h2 class="underline">
                LinkedIn
            </h2>
        </div>
        <div>
            <a href="https://twitter.com/"></a>
            <h2 class="underline">
                Twitter
            </h2>
        </div>
        <div>
            <a href="https://www.facebook.com/"></a>
            <h2 class="underline">
                Twitter
            </h2>
        </div>
        <div>
            <a href="https://www.instagram.com/"></a>
            <h2 class="underline">
                Instagram
            </h2>
        </div>
    </div>
    <p class="text-sm">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus adipisci officiis quia repudiandae inventore tempora aspernatur sequi nobis saepe facere dignissimos quas consequuntur recusandae hic, repellendus asperiores illum optio rem! <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consequuntur quis molestiae non fuga iusto quas, atque itaque ipsa voluptates quod saepe quia beatae, nulla cupiditate sed repudiandae optio vel.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit perferendis qui suscipit mollitia, ut ipsum a quia velit commodi quisquam eum, voluptates doloribus ea! Quod aliquid expedita pariatur minus unde.<br> <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. At nisi perspiciatis id excepturi nobis mollitia soluta debitis, est tenetur laboriosam veritatis laborum illum dolore, voluptas voluptatum consequatur doloremque quia maiores! <br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum expedita error dolores necessitatibus ex laborum. Odit voluptatibus numquam amet nemo mollitia similique doloremque reprehenderit. Facilis sint ipsam illum accusamus perspiciatis!
    </p>

    <div class="justify-content w-full bg-gray-200 py-4 mt-3 mb-4">
        <a href="https://www.youtube.com/"></a>
        <h2 class="text-center font-bold text-3xl underline"> Youtube </h2>
    </div>
</div>

@endsection

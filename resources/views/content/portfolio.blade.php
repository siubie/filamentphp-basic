<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-12 lg:px-20">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Our work</h2>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
            <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
            <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                style="stroke-width: 2;stroke-miterlimit: 10;"></line>
            <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                style="stroke-width: 2;stroke-miterlimit: 10;"></line>
        </svg>
        <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We create engaging
            experiences that are innovatingand beautiful.</p>
    </header><!-- End heading -->
</div>

<div class="flex flex-wrap flex-row">
    @foreach ($portfolios as $portfolio)
        <figure class="flex-shrink max-w-full px-3 w-full sm:w-1/2 lg:w-1/5 group wow fadeInUp" data-wow-duration="1s">
            <div class="relative overflow-hidden cursor-pointer mb-6">
                <a href="{{ $portfolio->image }}" data-gallery="gallery1"
                    data-glightbox="title: {{ $portfolio->title }}; description: {{ $portfolio->description }}"
                    class="glightbox3">
                    <img class="block w-full h-auto transform duration-500 grayscale hover:scale-125"
                        src="{{ $portfolio->image }}" alt="Image Description">
                    <div
                        class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-black text-center">
                        <h3 class="text-base leading-normal font-semibold my-1 text-white">{{ $portfolio->title }}</h3>
                        <small class="d-block">{{ $portfolio->category->name }}</small>
                    </div>
                </a>
            </div>
        </figure>
    @endforeach
</div>

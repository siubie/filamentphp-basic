<div class="container xl:max-w-6xl mx-auto px-4">
    <div class="lex flex-wrap flex-row -mx-4 justify-center">
        <div class="w-full px-4">
            <!-- slider client -->
            <div id="post-carousel" class="navslider-hover splide post-carousel">
                <div class="splide__track">
                    <div class="splide__list grayscale">

                        @foreach ($clients as $client)
                            <div class="splide__slide">
                                <div class="w-full px-4 text-center pb-3">
                                    <a href="#" target="_blank">
                                        <img class="grayscale mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                            src="{{ Storage::url($client->image) }}" alt="{{ $client->name }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div><!-- end slider client -->
        </div>
    </div>
</div>

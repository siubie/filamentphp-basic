<!--
Template Name: Tailone - Tailwind One Page Template
Author: Aribudin
Website: https://www.tailwindtemplate.net
Contact: support@tailwindtemplate.net
Purchase: https://themes.tailwindtemplate.net/tailone
License: You must have a valid license from official store to legally use the theme for your project.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Tailwind One Page Template | Tailone</title>
    <meta name="description" content="Tailwind One Page Template">

    <!-- Development css -->
    <link rel="stylesheet" href="src/css/style.css">

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="src/img/favicon.jpg">
</head>

<body class="text-gray-700">

    <!-- ========== { HEADER }==========  -->
    <header class="fixed top-0 left-0 right-0 z-40">
        @include('content.nav')
    </header><!-- end header -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- hero start -->
        <div id="hero" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50">
            @include('content.hero')
        </div>
        <!-- end Hero -->

        <!-- start services -->
        <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            @include('content.services')
        </div><!-- End Service -->

        <!-- Portfolio Content -->
        <div id="portfolio" class="section relative z-0 py-12 md:py-16 bg-white">
            @include('content.portfolio')
        </div><!--  End Content -->

        <!-- start clients -->
        <div id="clients" class="section relative py-8 bg-white dark:bg-gray-800">
            @include('content.clients')
        </div><!-- End brand-->

        <!-- Team start -->
        <div id="team" class="section relative pt-20 pb-8 md:pt-16 bg-white dark:bg-gray-800">
            @include('content.teams')
        </div>
        <!-- End Team-->

        <!-- contact start -->
        <div id="contact" class="section relative pb-20 bg-white dark:bg-gray-800">
            @include('content.contact')
        </div><!-- End contact -->
    </main><!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-gray-50 text-gray-700">
        @include('content.footer')
    </footer><!-- end footer -->

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#"
        class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <!--Vendor js-->
    <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
    <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="src/vendors/typed.js/lib/typed.min.js"></script>
    <script src="src/vendors/wow.js/dist/wow.min.js"></script>
    <script src="src/vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Start development js -->
    <script src="src/js/theme.js"></script>
    <!-- End development js -->

    <!-- Production js -->
    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>

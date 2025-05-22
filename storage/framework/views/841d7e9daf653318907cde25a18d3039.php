<?php $__env->startSection('content'); ?>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Molle&family=Pacifico&family=Tangerine:wght@400;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* .font-script {
                    font-family: 'Dancing Script', cursive;
                } */

        .pacifico-regular {
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }
    </style>



    

    <div class="absolute top-0 left-0 w-full z-50 text-white" style="background-color: rgba(38, 38, 33, 0.3);">
        <!-- Desktop Navbar -->
        <div class="container mx-auto px-4 py-3 flex items-center justify-between hidden md:flex">
            <a href="#" class="text-xl font-bold italic text-white pacifico-regular">Rain Forest</a>

            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-green-200">Home</a>
                <a href="#" class="hover:text-green-200">About</a>
                <a href="#" class="hover:text-green-200">Our Product</a>
                <a href="#" class="hover:text-green-200">Contact</a>
            </div>

            <div class="flex items-center space-x-4">
                <button class="text-white text-xl"><i class="fa fa-search"></i></button>
                <button class="text-white text-xl relative"><i class="fa fa-shopping-bag"></i></button>
                <div class="flex items-center text-white text-sm">
                    <span>Eng</span>
                    <i class="fa fa-chevron-down ml-1 text-xs"></i>
                </div>
                <a href="#"
                    class="px-4 py-1 border border-white rounded-2xl hover:bg-white hover:text-green-800 transition">Login</a>
                <a href="#" class="px-4 py-1 bg-black text-white rounded-2xl transition">Sign Up</a>
            </div>
        </div>

        <!-- Mobile Navbar -->
        <div class="px-4 py-3 flex items-center justify-between md:hidden">
            <button class="text-white text-xl"><i class="fa fa-bars"></i></button>
            <a href="#" class="text-xl font-bold italic text-white pacifico-regular">Rain Forest</a>
            <div class="flex items-center space-x-4">
                <button class="text-white text-xl "><i class="fa fa-shopping-bag"></i></button>
                <button class="text-white text-xl"><i class="fa fa-user"></i></button>
            </div>

        </div>

        <!-- Mobile Search -->
        <div class="px-4 pb-3 md:hidden">
            <div class="bg-white rounded-full flex items-center px-3 py-1">
                <input type="text" placeholder="Search items"
                    class="w-full bg-transparent border-none focus:outline-none text-gray-800">
                <button class="text-gray-600"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center min-h-screen flex items-center justify-center px-4 sm:px-6 poppins-regular"
        style="background-image: url('/images/1.jpg'); ">
        <div class="max-w-6xl w-full mx-4 space-y-8 mt-80 pt-48">
            <!-- Main Card -->
            <div style="background-color: rgba(217, 217, 217, 0.2);  "
                class="p-8 rounded-3xl shadow-2xl md:flex overflow-hidden">

                <!-- Text Content -->
                <div class="p-16 md:p-12 md:w-2/3 lg:w-1/2 space-y-4 text-white">
                    <p class="md:pt-12 md:pl-6 text-base text-xs md:text-2xl leading-relaxed">
                        Rain Forest 100% Natural & Sustainably Sourced
                    </p>
                    <h2 class="md:pl-6 text-2xl md:text-3xl text-white poppins-bold">
                        Discover the Treasures of <br> the Tropical Forest
                    </h2>

                    <p class="md:pl-6 text-base md:text-xl leading-relaxed opacity-90">
                        Shop ethically sourced fruits, crafts and forest goods<br class="hidden md:block">
                        that preserve nature and empower<br class="hidden md:block">
                        local communities.
                    </p>
                </div>

                <!-- Image Container -->
                <div class="md:w-2/5 flex items-center justify-end p-8">
                    <img src="/images/2.jpg" alt="Forest Products"
                        class="w-96 h-96 md:w-72 md:h-96 object-cover rounded-full shadow-xl">
                </div>
            </div>

            <!-- Button positioned below the card -->
            <div class="relative -left-6 flex justify-center md:justify-start pl-12 md:relative md:-top-28 md:left-0">
                <button
                    class="bg-green-600 hover:bg-yellow-400 text-white font-bold px-24 py-2 rounded-xl
                         transition duration-300 transform ">
                    View more
                </button>
            </div>

        </div>
    </section>



    <!-- Palm Oil Banner -->
    <section class="relative bg-cover bg-center w-full flex items-top justify-center px-4 sm:px-6 py-20"
        style="background-image: url('/images/4.jpg'); background-size: cover; background-repeat: no-repeat; font-family: 'Poppins', sans-serif;">
        <div class="absolute inset-0 z-0"
            style="background: linear-gradient(180deg, rgba(0, 7, 0, 1) 11.3%, rgba(0, 36, 13, 0.75) 46.39%, rgba(0, 13, 4, 0.7) 81.49%, rgba(0, 13, 4, 0.9) 94.95%);">
        </div>
        
        <div class="max-w-6xl w-full mx-4 space-y-8 z-10">
            <div class="rounded-lg overflow-hidden shadow-xl">
                <h2 class="text-3xl text-white font-bold mb-4 text-center md:text-left md:relative md:top-16 left-36">
                    Palm Oil</h2>
                <div class="md:flex md:items-center md:space-x-12 p-8 rounded-3xl">

                    <!-- Image on the left in md -->
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <img src="/images/3.jpg" alt="Palm oil bottle with palm fruit"
                            class="w-96 h-96 md:w-68 md:h-96 object-cover rounded-3xl" />
                    </div>

                    <!-- Text and Button on the right -->
                    <div class="md:w-1/3 text-white ">

                        <p class="mb-6 pt-36 text-justify">
                            Palm oil is a versatile natural oil extracted from the fruit of the oil palm tree. It's
                            widely used in cooking, cosmetics, soaps, and biofuels due to its smooth texture and long
                            shelf life. Ethically sourced palm oil supports sustainable agriculture and helps preserve
                            tropical ecosystems. It's a major global food ingredient, found in a wide variety of
                            products, including processed foods, baked goods, cosmetics, and even biofuels. Palm oil is
                            known for its stability and ability.
                        </p>
                        <div class="flex justify-center md:justify-start">
                            <button
                                class="bg-green-600 hover:bg-yellow-400 text-white font-bold px-12 py-3 rounded-xl transition duration-300 transform">
                                View more
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>

    <section class="relative w-full flex items-top justify-center px-4 sm:px-6 py-20 overflow-hidden"
        style="font-family: 'Poppins', sans-serif;">

        <!-- Rotated Background Image -->
        <div class="absolute inset-0 z-0 transform rotate-180 scale-x-[-1]"
            style="background-image: url('/images/4.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        </div>

        <div class="absolute inset-0 z-0"
            style="background: linear-gradient(180deg, rgba(0, 7, 0, 0.7) 11.3%, rgba(0, 36, 13, 0.75) 46.39%, rgba(0, 13, 4, 0.7) 81.49%, rgba(0, 13, 4, 0.9) 94.95%);">
        </div>
        
        <div class="container mx-auto z-10">
            <div class=" rounded-2xl pt-24 w-full md:pl-12">
                <h2 class="pb-36 text-3xl font-bold text-white mb-8 text-left ">Tribal Masks</h2>

                <!-- Mobile Swiper Carousel -->
                <div class="block md:hidden">
                    <div class="swiper md:hidden">
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide bg-white rounded-lg overflow-hidden shadow-lg">
                                <div class="relative">
                                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                        off</span>
                                    <button class="absolute top-2 right-2 text-red-500 text-xl">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <img src="/images/11.jpg" alt="Tribal mask"
                                        class="mt-48 w-50 h-110 md:w-30 md:h-80 object-cover" />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold pl-1">Tribal masks</h3>
                                    <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-bold">$120</span>
                                        <div class="flex text-green-500">
                                            <span>★★★★☆</span>
                                        </div>
                                    </div>
                                    <button
                                        class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                        Now</button>
                                </div>
                            </div>

                            <!-- Slide 2 (Duplicate for demonstration) -->
                            <div class="swiper-slide bg-white rounded-lg overflow-hidden shadow-lg">
                                <div class="relative">
                                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                        off</span>
                                    <button class="absolute top-2 right-2 text-red-500 text-xl">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <img src="/images/11.jpg" alt="Tribal mask" class="mt-48 w-50 h-110 object-cover" />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold pl-1">Tribal masks</h3>
                                    <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-bold">$120</span>
                                        <div class="flex text-green-500">
                                            <span>★★★★☆</span>
                                        </div>
                                    </div>
                                    <button
                                        class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                        Now</button>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination Dots -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- Desktop Grid with Arrows -->
                <div class="relative hidden md:flex items-center justify-center w-full px-4 pb-24">

                    <!-- Left Arrow -->
                    <button id="scrollLeft"
                        class="absolute top-1/2 left-0 -translate-y-1/2 bg-gray-100 text-black rounded-full p-2 z-10 text-sm">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <!-- Mask Cards Grid -->
                    <!-- Outer full-width container -->
                    <div id="cardContainer" class="w-full px-4 pb-24 scroll-smooth no-scrollbar">
                        <!-- Inner grid for 4 cards -->
                        <div id="cardScrollWrapper"
                            class="flex gap-6 overflow-x-auto scroll-smooth no-scrollbar max-w-full">
                            <!-- Card 1 -->
                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/8.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/9.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/10.png" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/11.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/aboutus1.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Duplicate this block 3 more times for Card 2–4 -->
                        </div>
                    </div>

                    <!-- Right Arrow -->
                    <button id="scrollRight"
                        class="absolute top-1/2 right-0 -translate-y-1/2 bg-gray-100 text-black rounded-full p-2 z-10 text-sm">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

            </div>

            <!-- Beaded Jewelry Section bg-[rgba(0,0,0,0.6)]-->
            <div class=" rounded-2xl pt-24 w-full md:pl-12">
                <h2 class="pb-36 text-3xl font-bold text-white mb-8 text-left ">Beaded Jewelry</h2>

                <!-- Mobile Swiper Carousel -->
                <div class="block md:hidden">
                    <div class="swiper md:hidden">
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide bg-white rounded-lg overflow-hidden shadow-lg pb-12"
                                style="width: 50%;">
                                <div class="relative">
                                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                        off</span>
                                    <button class="absolute top-2 right-2 text-red-500 text-xl">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <img src="/images/12.jpg" alt="Tribal mask" class="mt-48 w-50 h-110 object-cover" />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold pl-1">Tribal masks</h3>
                                    <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-bold">$120</span>
                                        <div class="flex text-green-500">
                                            <span>★★★★☆</span>
                                        </div>
                                    </div>
                                    <button
                                        class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                        Now</button>
                                </div>
                            </div>

                            <!-- Slide 2 (Duplicate for demonstration) -->
                            <div class="swiper-slide bg-white rounded-lg overflow-hidden shadow-lg">
                                <div class="relative">
                                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                        off</span>
                                    <button class="absolute top-2 right-2 text-red-500 text-xl">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <img src="/images/13.jpg" alt="Tribal mask" class="mt-48 w-50 h-110 object-cover" />
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold pl-1">Tribal masks</h3>
                                    <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-bold">$120</span>
                                        <div class="flex text-green-500">
                                            <span>★★★★☆</span>
                                        </div>
                                    </div>
                                    <button
                                        class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                        Now</button>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination Dots -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- Desktop Grid with Arrows -->
                <div class="relative hidden md:flex items-center justify-center w-full px-4 pb-24">

                    <!-- Left Arrow -->
                    <button id="bottomscrollLeft"
                        class="absolute top-1/2 left-0 -translate-y-1/2 bg-gray-100 text-black rounded-full p-2 z-10 text-sm">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <!-- Mask Cards Grid -->
                    <!-- Outer full-width container -->
                    <div id="bottomcardContainer" class="w-full px-4 pb-24 scroll-smooth no-scrollbar">
                        <!-- Inner grid for 4 cards -->
                        <div id="bottomcardScrollWrapper"
                            class="flex gap-6 overflow-x-auto scroll-smooth no-scrollbar max-w-full">
                            <!-- Card 1 -->
                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/12.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/13.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/14.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/15.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                                    <div class="relative">
                                        <span
                                            class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">15%
                                            off</span>
                                        <button class="absolute top-2 right-2 text-red-500 text-xl">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="/images/aboutus1.jpg" alt="Tribal mask"
                                            class="mt-48 w-50 h-110 object-cover" />
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-bold pl-1">Tribal masks</h3>
                                        <p class="text-sm text-gray-600">Handcrafted cultural artifacts used in ceremonies.
                                        </p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="font-bold">$120</span>
                                            <div class="flex text-green-500">
                                                <span>★★★★☆</span>
                                            </div>
                                        </div>
                                        <button
                                            class="w-50 bg-green-600 hover:bg-yellow-400 text-white py-2 rounded-3xl mt-3">Shop
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Duplicate this block 3 more times for Card 2–4 -->
                        </div>
                    </div>

                    <!-- Right Arrow -->
                    <button id="bottomscrollRight"
                        class="absolute top-1/2 right-0 -translate-y-1/2 bg-gray-100 text-black rounded-full p-2 z-10 text-sm">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

            </div>
        </div>
        
    </section>


    <!-- Palm Oil Banner -->
    
    <section class="relative bg-cover bg-center w-full flex items-top justify-center px-4 sm:px-6 py-20"
        style="background-image: url('/images/6.jpg'); background-size: cover; background-repeat: no-repeat; font-family: 'Poppins', sans-serif;">
        <div class="max-w-6xl w-full mx-4 space-y-8">
            <div class="rounded-lg overflow-hidden shadow-xl">
                <h2 class="text-3xl text-white font-bold mb-4 text-center md:text-left md:relative md:top-16 right-96">
                    Woven Baskets</h2>

                <div class="flex flex-col-reverse md:flex-row md:items-center md:space-x-12 p-8 rounded-3xl">

                    <!-- Text and Button -->
                    <div class="md:w-2/3 text-white md:pr-24">
                        <p class="mb-6 text-justify">
                            Palm oil is a versatile natural oil extracted from the fruit of the oil palm tree. It's
                            widely used in cooking, cosmetics, soaps, and biofuels due to its smooth texture and long
                            shelf life. Ethically sourced palm oil supports sustainable agriculture and helps preserve
                            tropical ecosystems. It's a major global food ingredient, found in a wide variety of
                            products, including processed foods, baked goods, cosmetics, and even biofuels. Palm oil is
                            known for its stability and ability.
                        </p>

                        <!-- Button at end for small, right on md+ -->
                        <div class="mt-6 flex justify-center md:justify-end">
                            <button
                                class="bg-green-600 hover:bg-yellow-400 text-white font-bold px-12 py-3 rounded-xl transition duration-300 transform">
                                View more
                            </button>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="md:w-1/2 mb-8 md:mb-0 flex justify-center md:justify-end">
                        <img src="/images/7.png" alt="Palm oil bottle with palm fruit"
                            class="w-96 h-[30rem] md:w-68 md:h-80 object-cover rounded-3xl" />
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-400 text-white py-12 pt-36" style="font-family: poppins, sans-serif">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand Section -->
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h2 class="text-lg mt-4 text-white mb-3 flex items-start justify-center md:justify-start"
                        style="font-family: 'Pacifico', cursive">
                        Rain Forest</h2>
                    <p class="mt-4 text-white mb-3 flex items-start justify-center md:justify-start md:text-left">
                        Rain Forest is your window into the <br>wonders of nature. We bring you <br>closer to the beauty,
                        mystery, and<br> power of our planet through a<br> deeper connection with earth. Our<br> website is
                        a celebration of the lush,<br> vibrant ecosystems that sustain life<br> across the planet.
                    </p>
                </div>

                <!-- Quick Links Section -->
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h3 class="text-lg font-bold mt-4 text-white mb-3 flex items-start justify-center md:justify-start">
                        Quick Links</h3>
                    <ul class="space-y-2 md:text-left">
                        <li><a href="#" class="text-gray-300 hover:text-white">Nature Oils</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Shop</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">FAQs</a></li>
                    </ul>
                </div>

                <!-- Categories Section -->
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h3 class="text-lg font-bold mt-4 text-white mb-3 flex items-start justify-center md:justify-start">
                        Categories</h3>
                    <ul class="space-y-2 md:text-left">
                        <li><a href="#" class="text-gray-300 hover:text-white">Nature Oils</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Treat Crafts</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Forest Foods</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Herbal Products</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Collaboration Features</a></li>
                    </ul>
                </div>

                <!-- Contact Info Section -->
                <div class="text-center ">
                    <h3 class="text-lg font-bold mt-4 text-white mb-3 flex items-start justify-center md:justify-start">
                        Contact Info</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start justify-center md:justify-start">
                            <i class="fa fa-map-marker-alt mt-1 mr-2 text-red-400"></i>
                            <span>123 Forest Way, Green Valley, Earth</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <i class="fa fa-phone mr-2 text-gray-300"></i>
                            <span>+123 456 7890</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <i class="fa fa-envelope mr-2 text-white"></i>
                            <span>info@rainforestgoods.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-6 mt-4 md:mb-0 text-center md:text-left">
                <div class="flex justify-center md:justify-start space-x-4 mt-8 md:-mt-4 mb-4 ">
                    <a href="#" class="text-white hover:text-white text-2xl">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white hover:text-white text-2xl">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white hover:text-white text-2xl">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="#" class="text-white hover:text-white text-2xl">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper Initialization -->
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        const scrollWrapper = document.getElementById('cardScrollWrapper');
        const scrollAmount = scrollWrapper.offsetWidth;

        document.getElementById('scrollLeft').addEventListener('click', () => {
            scrollWrapper.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        document.getElementById('scrollRight').addEventListener('click', () => {
            scrollWrapper.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        const bottomscrollWrapper = document.getElementById('bottomcardScrollWrapper');
        const bottomscrollAmount = bottomscrollWrapper.offsetWidth;

        document.getElementById('bottomscrollLeft').addEventListener('click', () => {
            bottomscrollWrapper.scrollBy({
                left: -bottomscrollAmount,
                behavior: 'smooth'
            });
        });

        document.getElementById('bottomscrollRight').addEventListener('click', () => {
            bottomscrollWrapper.scrollBy({
                left: bottomscrollAmount,
                behavior: 'smooth'
            });
        });
    </script>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\ESupport\Rain-forest\CROWN_ELECTRONICS\resources\views/frontend/home.blade.php ENDPATH**/ ?>
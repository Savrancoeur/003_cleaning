<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003 Cleaning</title>
    <!-- Icon -->
    <link rel="icon" href="">
    <!-- Fontawesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind CSS with DaisyUI -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-base-100 text-base-content">
<!-- Drawer Wrapper -->
<div class="drawer">
    <input type="checkbox" id="userInfoDrawer" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Nav Start -->
        <nav class="navbar bg-primary sticky top-0 z-50">
            <div class="container mx-auto">
                <!-- Navbar Start -->
                <div class="flex-1">
                    <img class="w-10 h-10 mr-3" src="{{ asset('image/logo1.jpg') }}" alt="LogoImage">
                    <a class="btn btn-ghost normal-case text-xl text-white" href="#home">003 Cleaning</a>
                </div>
                <!-- Navbar Center (for larger screens) -->
                <div class="hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="#home" class="bg-base-100 text-primary">Home</a></li>
                        <li><a href="#services" class="bg-base-100 text-primary">Services</a></li>
                    </ul>
                </div>
                <!-- Navbar End -->
                <div class="flex-none">
                    <!-- Dark Mode Toggle -->
                    <div class="form-control mr-4">
                        <label class="cursor-pointer label">
                            <span class="label-text text-white">Dark</span>
                            <input type="checkbox" class="toggle toggle-primary" id="btnSwitch" />
                        </label>
                    </div>
                    <!-- Login Button -->
                    <ul class="menu menu-horizontal px-1">
                        <li>
                            <a href="" class="text-white">
                                <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Login
                            </a>
                        </li>
                    </ul>
                    <!-- User Profile Button (Drawer Trigger) -->
                    <label for="userInfoDrawer" class="btn btn-ghost btn-circle ml-4">
                        <div class="w-8 rounded-full">
                            <img src="{{ asset('image/men icon.png') }}" alt="UserImage">
                        </div>
                    </label>
                    <!-- Mobile Menu Button -->
                    <div class="dropdown dropdown-end lg:hidden">
                        <label tabindex="0" class="btn btn-ghost btn-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li>
                                <a href="" class="text-white">
                                    <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Nav End -->

        <!-- Header Start -->
        <header class="flex items-center justify-center bg-primary py-20">
            <div class="text-center text-white">
                <div class="flex flex-wrap justify-center gap-4 mb-10">
                    <span class="badge badge-outline badge-lg">Trusted Professionals</span>
                    <span class="badge badge-outline badge-lg">Eco-Friendly Cleaning</span>
                    <span class="badge badge-outline badge-lg">Customized Cleaning Plans</span>
                    <span class="badge badge-outline badge-lg">Reliable & Convenient</span>
                </div>
                <!-- Carousel -->
                <div class="carousel w-full max-w-4xl mx-auto">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="{{ asset('image/cleaning1.jpg') }}" class="w-full rounded-full" alt="HeaderImage1" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3" class="btn btn-circle">❮</a>
                            <a href="#slide2" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="{{ asset('image/cleaning1.jpg') }}" class="w-full rounded-full" alt="HeaderImage2" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1" class="btn btn-circle">❮</a>
                            <a href="#slide3" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item relative w-full">
                        <img src="{{ asset('image/clening6.webp') }}" class="w-full rounded-full" alt="HeaderImage3" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2" class="btn btn-circle">❮</a>
                            <a href="#slide1" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Services Start -->
        <section id="home" class="py-20">
            <div class="container mx-auto px-4">
                <!-- Service Title -->
                <div class="text-center mb-12">
                    <h4 class="text-primary text-lg">Services</h4>
                    <h2 class="text-3xl font-bold">Check Our Available Services</h2>
                </div>
                <!-- Service Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="card w-full bg-base-100 shadow-xl">
                        <figure><img src="{{ asset('image/cleaning7.jpg') }}" alt="ServiceImage" class="w-full h-48 object-cover rounded-t-xl" /></figure>
                        <div class="card-body">
                            <h5 class="card-title">Deep Cleaning</h5>
                            <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <!-- Modal Trigger -->
                            <label for="serviceModal" class="btn btn-primary">Get Service</label>
                        </div>
                    </div>
                    <!-- Repeat similar cards for other services -->
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!-- Service Modal -->
        <input type="checkbox" id="serviceModal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative">
                <label for="serviceModal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold">Making Order</h3>
                <form method="post" class="mt-4">
                    <div class="form-control">
                        <label class="label" for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Your name..." class="input input-bordered" />
                    </div>
                    <div class="form-control mt-4">
                        <label class="label" for="categories">Categories:</label>
                        <select name="categories" id="categories" class="select select-bordered">
                            <option disabled selected>Select the Categories</option>
                            <option>Deep Cleaning</option>
                            <option>Maid</option>
                        </select>
                    </div>
                    <div class="form-control mt-4">
                        <label class="label" for="address">Address:</label>
                        <input type="text" name="address" id="address" placeholder="Your address..." class="input input-bordered" />
                    </div>
                    <div class="form-control mt-4">
                        <label class="label" for="message">Message:</label>
                        <textarea name="message" id="message" placeholder="Your message..." class="textarea textarea-bordered"></textarea>
                    </div>
                    <div class="modal-action mt-4">
                        <label for="serviceModal" class="btn">Close</label>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Service Modal End -->

        <!-- Scroll Up Button -->
        <button onclick="topFunction()" id="myBtn" class="fixed bottom-5 right-5 btn btn-circle btn-primary hidden">
            <i class="fa-solid fa-circle-up"></i>
        </button>
        <!-- Preloader Start -->
        <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-50">
            <div class="loader"></div>
        </div>
        <!-- Preloader End -->
    </div>
    <!-- Drawer Side -->
    <div class="drawer-side">
        <label for="userInfoDrawer" class="drawer-overlay"></label>
        <div class="p-4 w-80 bg-base-200">
            <h2 class="text-2xl text-primary mb-4">User Information</h2>
            <img src="{{ asset('image/men icon.png') }}" class="w-24 h-24 rounded-full mx-auto" alt="UserImage">
            <h3 class="text-xl text-center text-primary mt-4">Aung Aung</h3>
            <div class="mt-4">
                <div class="flex items-center mb-2">
                    <i class="fa-solid fa-envelope mr-2 text-primary"></i>
                    <span>forexample@gmail.com</span>
                </div>
                <div class="flex items-center">
                    <i class="fa-solid fa-location-dot mr-2 text-primary"></i>
                    <span>No.123 Road, township, city</span>
                </div>
            </div>
            <hr class="my-4">
            <h4 class="text-xl text-primary">History</h4>
            <p class="p-2 bg-base-300 rounded mt-2">You have not ordered any service.</p>
        </div>
    </div>
</div>
<!-- Drawer Wrapper End -->
</body>

</html>

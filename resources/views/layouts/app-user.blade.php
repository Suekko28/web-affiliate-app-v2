<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Inspired Outfit</title>
</head>

<body>

    <!-- Navbar Start !-->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container mx-auto px-16">
            <div class="flex items-center justify-between relative">
                <div class="">
                    <img src="{{ asset('/img/logo.png') }}" alt="Logo OGI" class="py-6 block" width="50"
                        height="50">
                    {{-- <a href="#" class="font-bold text-lg text-primary block py-6">Outfit Guide Indonesia</a> --}}
                </div>
                <div class="flex items-center">
                    <button id="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex lg:flex-row">
                            <li class="group">
                                <a href=""
                                    class="text-base text-primary py-2 mx-8 block sm:flex group-hover:text-hover">Home</a>
                            </li>
                            <li class="group">
                                <a href=""
                                    class="text-base text-primary py-2 mx-8 block sm:flex group-hover:text-hover">Product</a>
                            </li>
                            <li class="group">
                                <a href=""
                                    class="text-base text-primary py-2 mx-8 block sm:flex group-hover:text-hover">Mix&Max</a>
                            </li>
                            <li class="group">
                                <a href=""
                                    class="text-base text-primary py-2 mx-8 block sm:flex group-hover:text-hover">News</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar End !-->
    @yield('navbar')


    <script src="{{ asset('dist/js/script.js') }}"></script>

</body>

</html>

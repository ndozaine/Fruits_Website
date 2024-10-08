@extends('layout.layout')

@section('title', 'about')

@section('content')

<body class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('img/apples.jpg') }}');">
    <nav class="bg-opacity-50 text-black  w-full z-10 pt-10 top-0 ">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <span class="text-2xl pl-2">Logo</span>
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-white hover:text-gray-400 focus:outline-none focus:shadow-outline">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 5h16M4 12h16M4 19h16"/>
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white hover:text-yellow-300 " href="{{ route('navbar') }}">HOME</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline hover:text-yellow-300 " href="#">ABOUT</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline hover:text-yellow-300 " href="#">ORDER</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline hover:text-yellow-300 " href="#">BLOG</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline hover:text-yellow-300 " href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex items-center justify-center h-full">
        <div class="text-center">
            <h1 class="text-8xl font-bold font-sans text-white">ABOUT</h1>
        </div>
    </div>


    <div>
        <h1 class="pt-20 text-4xl flex items-center justify-center h-full font-semibold text-grey-500"> WE ARE AN AMAZING TEAM</h1>
        <h1 class="pt-2 text-4xl flex items-center justify-center h-full font-semibold text-grey-500"> TRYING TO MAKE A DIFFERENCE</h1>
        <div class="items-center justify-center">
            <i class="fa fa-commenting-o" aria-hidden="true"></i>
            <p class="text-center pt-14 text-xl font-light text-grey-500">We were established in 2015 but started to reall function in 2019. Our experience and heritage within <br> the fruiting industry is second to none. Keeping our roots intact we represent the same passion for quality, <br> service and values we were build on. Today Ndozain Fruits imports fresh, high quality and more than a standard fruits  <br> from the orchards of the farthest corners of the world. </p>
            <p class="pb-14 text-center pt-3 text-xl font-light text-grey-500">We have a vast distribution  network comprimising of highly dedicated professionals coupled with strng logistics  <br> support, establishing a nationwide reach. OUr scale of operation ensures the fruits we supply ends up in millions <br>of fruits bowels across the world</p>
        </div>
        
    </div>
    <div class="rounded pl-14 pt-14 bg-grey-100 bg-opacity-10 bg-black">
        <div class="pb-10" >
            <h1 class="pl-14 font-semibold text-xl text-grey-700">Our Mission</h1>
            <p class="pb-11 pl-14 pt-5 text-xl font-normal items-left">To source a range of quality fruits from across the globe and deliver <br> them fresh to all customers in Zimbabwe</p>
        </div>
        <div class="pt-14">
            <h1 class="pl-14 font-semibold text-xl text-grey-700">Our Vision</h1>
            <p class="pb-11 pl-14 pt-5 text-xl font-normal items-left">To be the most trusted and preferred Zimbabwean fruit trading business. Our vision <br>calls us to earn trust and create value for our key stakeholders :Growers: By <br> enabling their fruits to reach from farms to different regions in <br> WholeSellers: By ensuring theyr receive fresh fruits, everyday, everytime <br> Consumers: By satiating their taste preferences  through a gamut of fruits offerings</p>
            
        </div>
    </div>
    <div class="rounded pb-12 pl-14 pt-14 bg-opacity-70 bg-blue-700">
        <h1 class="text-center text-3xl font-semibold text-white"> WANT TO WORK WITH US</h1>
        <div class="pt-5 flex items-center justify-center">
            <button class="items-center justify-center bg-gray-500 text-white font-bold py-2 px-4 rounded">GET IN TOUCH</button>
        </div>
    </div>
    <div class="grid grid-cols-3 justify-between bg-gray-600 pl-14 px-2 pb-10">
        <div class="pt-10 pl-14 pb-10">
            <h1 class="text-white text 3xl text-left">HARARE JOINER CITY</h1>
            <p class="pt-8 text-white text-left">Jason Moyo Avenue and Julius Nyrere Way <br> Number 456, Along Jason Moyo <br> or Number 67 along Julius Nyerere <br> Shop Number C120 Third Floor <br> info@fruits.co.ac.zw <br> +263786 191 270</p>
        </div>
        <div class="pt-10 pl-14 pb-10 ">
            <h1 class="text-white text 3xl text-left">MAGOLIS MALL HARARE</h1>
            <p class="pt-8 text-white text-left">Corner Nelson Mandela and Leorpard Takawira Way <br> Number 89, Along Nelson Mandela <br> or Number 90 along Julius Nyerere <br> Shop Number A1 First Floor <br> info@fruits.co.ac.zw <br> +263 786 191 270</p>
        </div>
        <div class="pt-10 pl-14 pb-10">
            <img src={{ asset('img/babe.jpg') }} class="pt-2  h-23 w-23 hover:cursor-pointer">
            <a href="https://www.facebook.com" target="_blank" class="text-blue-500 hover:text-blue-700 pt-8">
                <i class="fab  fa-facebook fa-2x pt-2 hover:cursor-pointer" aria-hidden="true "></i>
            </a>
            <a href="https://www.facebook.com" target="_blank" class="text-red-500 hover:text-red-700 pt-8">
                <i class="fab  fa-instagram fa-2x pt-2 pl-5 hover:cursor-pointer" aria-hidden="true "></i>
            </a>
            <a href="https://www.facebook.com" target="_blank" class="text-green-500 hover:text-green-700 pt-8">
                <i class="fab  fa-whatsapp fa-2x pt-2 pl-5  hover:cursor-pointer" aria-hidden="true "></i>
            </a>
        </div>   
    </div>
    <div class="bg-gray-800  ">
        <p class="text-gray-800 pb-8">HI</p>
    </div>     
</body>

@endsection
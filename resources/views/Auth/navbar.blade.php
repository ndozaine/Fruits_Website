{{-- @extends('layout.layout')
@section('title', 'Login')
@section('content')

<div class="justify-between">
    <nav class="absolute top-20 right-10 p-4 mr-20 font-bold text-2xl text-white  border-red-600">
        <ul class="flex space-x-4 justify-between">
            <li class="mr-4 ">
                <a href="{{route('navbar')}}" class="hover:text-yellow-300">HOME</a>
            </li>
            <li class="mr-4 ml-4">
                <a href="#" class="hover:text-yellow-300">ABOUT</a>
            </li>
            <li class="mr-4">
                <a href="#" class="hover:text-yellow-300">ORDER</a>
            </li>
            <li class="mr-4">
                <a href="#" class="hover:text-yellow-300">BLOG</a>
            </li>
            <li class="mr-4">
                <a href="#" class="hover:text-yellow-300">CONTACT</a>
            </li>
        </ul>
    </nav>
    <div id="background-images">
        <img id="image1" src="{{ asset('img/apples.jpg') }}" alt="..." class="w-full object-cover ">
        <img id="image2" src="{{ asset('img/grapes.jpg') }}" alt="..." class="w-full object-cover ">
    </div>

</div>
@endsection
 --}}


 @extends('layout.layout')

 @section('title', 'Home')
 
 @section('content')
 <div class="relative h-screen">
     <!-- Navigation -->
     <nav id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-lg z-50 transition duration-500 ease-in-out transform translate-y-full">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="flex justify-between items-center h-16">
                 <div class="flex-shrink-0">
                    {{-- <img src={{ asset('img/babe.jpg') }} class="pt-2 block h-10 w-10"> --}}
                    <div class="inline-block">
                        <span class="text-black-600 pl-0 hover:text-yellow-300 font-bold text-xl">Logo</span>
                     </div> 
                 </div>
        
                 <div class="hidden md:block">
                     <ul class="flex space-x-7">
                         <li>
                             <a href="{{ route('navbar') }}" class="hover:text-yellow-300">HOME</a>
                         </li>
                         <li>
                             <a href="{{route('about')}}" class="hover:text-yellow-300">ABOUT</a>
                         </li>
                         <li>
                             <a href="{{ route('cart') }}" class="hover:text-yellow-300">ORDER</a>
                         </li>
                         <li>
                             <a href="#" class="hover:text-yellow-300">BLOG</a>
                         </li>
                         <li>
                             <a href="#" class="hover:text-yellow-300">CONTACT</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </nav>

     
     <!-- Background Images -->
     <div id="background-images" class="flex h-full">
         <div id="image1" class="w-full h-full bg-cover" style="background-image: url('{{ asset('img/apples.jpg') }}');"></div>
         <div id="image2" class="w-full h-full bg-cover" style="background-image: url('{{ asset('img/grapes.jpg') }}');"></div>
     </div>

     <!-- Flash Message -->
     <div id="flash-message" class="hidden fixed top-1 left-1/2 transform -translate-x-1/2 bg-orange-200 text-black py-2 px-4 rounded shadow-lg z-50 w-96">
        <button id="close-flash" class="text-lg  hover:text-gray-400 absolute top-2 right-2 text-red-600 py-2 px-4">
            <i class="fas fa-times"></i>
        </button>
        <div class="pt-12 items-center pl-6">
            <img class="items-center" id="image1" src="{{ asset('img/screen.jpg') }}" alt="">
        </div>
        <h1 class="text-black block mt-4 text-center pt-8 text-3xl font-semibold">Order Online !<br>From our store</h1>
        <p class="pt-9 text-center text-xl font-medium">Get 10 % discount when you order <br> items worthy >= <span class="text-red-600"> $USD50 </span></p>
        <div class="pt-8 flex items-center justify-center pb-9">
            <button class="bg-pink-500 text-center text-white font-semibold pt-3 pb-3 px-9">
                <a class="underline-none text-center px-5 py-4" href="#"> ORDER NOW</a>
            </button>
        </div>
    </div>

     <!-- Arrows for Navigation -->
     <div class="absolute top-1/2 transform -translate-y-1/2 left-4 z-10">
         <button onclick="previousImage()" class="px-4 py-2 bg-white text-gray-900 font-bold rounded hover:bg-gray-200">
             &larr;
         </button>
     </div>
     <div class="absolute top-1/2 transform -translate-y-1/2 right-4 z-10">
         <button onclick="nextImage()" class="px-4 py-2 bg-white text-gray-900 font-bold rounded hover:bg-gray-200">
             &rarr;
         </button>
     </div>
     
     <!-- Content Section After Scroll -->
     <div class="pt-16">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
             <h1 class="text-3xl font-bold text-center text-gray-900">Welcome to Your Website</h1>
             <p class="text-center justify-center mt-4 text-lg text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                f you're looking for random paragraphs, you've come to the right place. When a random word or a random sentence isn't quite enough, the next logical step is to find a random paragraph. We created the Random Paragraph Generator with you in mind. The process is quite simple. Choose the number of random paragraphs you'd like to see and click the button. Your chosen number of paragraphs will instantly appear.

While it may not be obvious to everyone, there are a number of reasons creating random paragraphs can be useful. A few examples of how some people use this generator are listed in the following paragraphs.

Creative Writing
Generating random paragraphs can be an excellent way for writers to get their creative flow going at the beginning of the day. The writer has no idea what topic the random paragraph will be about when it appears. This forces the writer to use creativity to complete one of three common writing challenges. The writer can use the paragraph as the first one of a short story and build upon it. A second option is to use the random paragraph somewhere in a short story they create. The third option is to have the random paragraph be the ending paragraph in a short story. No matter which of these challenges is undertaken, the writer is forced to use creativity to incorporate the paragraph into their writing.

Tackle Writers' Block
A random paragraph can also be an excellent way for a writer to tackle writers' block. Writing block can often happen due to being stuck with a current project that the writer is trying to complete. By inserting a completely random paragraph from which to begin, it can take down some of the issues that may have been causing the writers' block in the first place.Sed pulvinar mauris id tortor porttitor suscipit</p>
             <!-- Add more content as needed -->
         </div>
       
     </div>


     <div class="max-w-7xl mx-auto pl-14 sm:px-6 lg:px-8 pt-10">
        <h1 class="text-8xl text-center font-light text-grey-300">FRUITS PRODUCTS</h1>
     </div>
     <div class="pt-16 grid grid-cols-3 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 font-semibold text-xl flip-card-title">CARIBIAN APPLE</h1>
                <div class="flip-card-inner">
                  <div class="bg-red-300 rounded overflow-hidden shadow-md flip-card-front flex items-center justify-center">
                    <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                  </div> 
                  <div class="flip-card-back flex items-center justify-center">
                    <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                  </div>
                </div>
              </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 text-xl font-semibold flip-card-title">CARIBIAN PEACHES</h1>
                <div class="flip-card-inner">
                  <div class="rounded overflow-hidden flip-card-front flex items-center justify-center">
                    <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                  </div>
                  <div class="flip-card-back flex items-center justify-center">
                    <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                  </div>
                </div>
              </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-8 text-red-600 text-xl font-semibold flip-card-title">CARIBIAN MANGOES</h1>
                <div class="flip-card-inner">
                  <div class="rounded overflow-hidden flip-card-front flex items-center justify-center">
                    <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                  </div>
                  <div class="flip-card-back flex items-center justify-center">
                    <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                  </div>
                </div>
              </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 text-xl font-semibold flip-card-title">CARIBIAN PEACHES</h1>
                <div class="flip-card-inner">
                  <div class="rounded overflow-hidden flip-card-front flex items-center justify-center">
                    <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                  </div>
                  <div class="flip-card-back flex items-center justify-center">
                    <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                  </div>
                </div>
              </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 text-xl font-semibold flip-card-title">CARIBIAN PEACHES</h1>
                <div class="flip-card-inner">
                  <div class="rounded overflow-hidden flip-card-front flex items-center justify-center">
                    <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                  </div>
                  <div class="flip-card-back flex items-center justify-center">
                    <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                  </div>
                </div>
              </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 text-xl font-semibold flip-card-title">CARIBIAN PEACHES</h1>
                <div class="flip-card-inner">
                  <div class="rounded overflow-hidden flip-card-front flex items-center justify-center">
                    <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                  </div>
                  <div class="flip-card-back flex items-center justify-center">
                    <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                  </div>
                </div>
              </div>
        </div>
     </div>
    {{-- <div class="pt-12 pb-11 flex items-center justify-center">
        <button class="items-center justify-center bg-lime-500 hover:bg-red-600 hover:text-lime-500 text-white font-bold py-2 px-4 rounded">CLICK FOR MORE >>></button>
    </div> --}}

     <!-- Hidden Section for More Fruits -->
     <div id="more-fruits-section" class="hidden pt-16 grid grid-cols-3 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 font-semibold text-xl flip-card-title">CARIBIAN PINEAPPLE</h1>
                <div class="flip-card-inner">
                    <div class="bg-red-300 rounded overflow-hidden shadow-md flip-card-front flex items-center justify-center">
                        <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                    </div> 
                    <div class="flip-card-back flex items-center justify-center">
                        <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 font-semibold text-xl flip-card-title">CARIBIAN PINEAPPLE</h1>
                <div class="flip-card-inner">
                    <div class="bg-red-300 rounded overflow-hidden shadow-md flip-card-front flex items-center justify-center">
                        <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                    </div> 
                    <div class="flip-card-back flex items-center justify-center">
                        <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flip-card w-64 h-64">
                <h1 class="pb-2 ml-10 text-red-600 font-semibold text-xl flip-card-title">CARIBIAN PINEAPPLE</h1>
                <div class="flip-card-inner">
                    <div class="bg-red-300 rounded overflow-hidden shadow-md flip-card-front flex items-center justify-center">
                        <img src={{ asset('img/grapes.jpg') }} class="w-full h-full object-cover">
                    </div> 
                    <div class="flip-card-back flex items-center justify-center">
                        <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <div class="pt-12 pb-11 flex items-center justify-center">
        <button id="see-more-btn" class="items-center justify-center bg-lime-500 hover:bg-red-600 hover:text-lime-500 text-white font-bold py-2 px-4 rounded">SEE MORE</button>
    </div>
        <!-- Add more cards for other fruits as needed -->

    <div class="pb-8 pl-5 pt-8 bg-white grid grid-cols-3 items-center justify-center">
        <div class="pl-12">
            <div class="pl-12 rounded overflow-hidden pt-7">
                <img src={{ asset('img/grocery.jpg') }} class="pl-10">
                <h1 class="pt-2 pl-12 font-normal text-lime-500 text-xl">FRESH FRUITS</h1>
            </div>
            <div class="pr-7 pt-4">
                <p class="pr-9 text-gray-500 text-center text-2xl">Quality and A grade fruits<br> from the farms at your door step</p>
            </div>
        </div>
        <div class="pl-14">
            <div class="rounded overflow-hidden pt-7 pl-14">
                <img src={{ asset('img/fdelivery.jpg') }} class="">
                <h1 class="pt-9 pl-6 font-normal text-lime-500 text-xl">FREE DELIVERY</h1>
            </div>
            <div class="pr-14 pt-4">
                <p class="pr-9 text-gray-500 text-center text-2xl">We offer free delivery to our <br>clients. All you need is just to place a call</p>
            </div>
        </div>
        <div class="pl-14">
            <div class="rounded overflow-hidden pt-7 pl-14">
                <img src={{ asset('img/pick.jpg') }} class="">
            </div>
            <h1 class="pt-2 pl-6 font-normal text-lime-500 text-xl">PICK UP FROM OUR STORES</h1>
            <div class="pr-14 pt-4">
                <p class="pr-9 text-gray-500 text-center text-2xl">We have two stores that have prompt services <br> so go and checkout</p>
            </div>
        </div>
    </div>
   

    <div class="bg-gray-200">
        <div class="text-center pt-12">
            <h1 class="text-6xl font-light font-sans text-gray-700">VISIT OUR STORES</h1>
        </div>
        <div class="pt-16 grid grid-cols-2 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <h1 class="pb-12 text-red-600 font-semibold text-xl flip-card-title text-center">MAGOLIS MALL HARARE</h1>
                <div class="flip-card w-64 h-64">
                    <div class="flip-card-inner pt-7"> 
                      <div class="flip-card-back flex items-center justify-center">
                        <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <h1 class="pb-12 ml-7 text-red-600 font-semibold text-xl flip-card-title">HARARE JOINER CITY</h1>
                <div class="flip-card w-64 h-64">
                    <div class="flip-card-inner pt-7">
                      <div class="flip-card-back flex items-center justify-center">
                        <button class="hover-button bg-blue-500 text-white font-bold py-2 px-4 rounded">Click Here</button>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="items-center pb-10">
            <p class="font-normal font-sans text-xl text-gray-600 m-3">We provide fresh fruits direct from our orchards at your doorstep. We have a vast distribution nectwork comprising of highly dedicated
            professionals couples with strong logistics support establshing a nation wide reach. Our scale of operation ensures that the fruits we supply end up in millions fruit bowels across the country. <br> <br> Officially established in 2015, NDOZAIN FRUITS has a long history that dates back to 2005. Our experience and heritage
        within the fruit industry in Zimbabwe is second to none. Keeping our roots intact. we represent the same passion for quality, service and values that we were build on. Today, NDOZAIN FRUITS import fresh, wholesome and high quality fruits straight from farthest corners of the world. </p>
        </div>
    </div>
    <div class="bg-white">
        <img class="w-full h-100 bg-cover" src="{{ asset('img/PEXELS1.jpg') }}" alt="">
    </div>
    <div>
        <div class=" bg-white grid grid-cols-2 items-center justify-center">
            <div class="pt-12 pl-12 pb-12 bg-blue-200">
                <p class="pt-12 pb-5 mt-16 text-3xl text-gray-700 font-bold">Final Sales</p>
                <h1 class="pt-12 font-bold text-6xl text-black pb-12 ">Get more with easy</h1>
                <button class="bg-pink-200 px-7 py-2 mb-12 font-bold">ALL PRODUCTS</button>
            </div>
            <div class="pt-12 pl-12 pb-12 bg-pink-200">
                <p class="pt-12 pb-5 mt-16 text-3xl text-gray-700 font-bold">Hurry up before stock ends</p>
                <h1 class="pt-12 font-bold text-6xl text-black pb-12 ">Order Online</h1>
                <button class="bg-blue-200 px-7 py-2 mb-12 font-bold">GET IT NOW</button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 justify-between bg-gray-600 pl-14 px-2 pb-10">
        <div class="pt-12 pl-14 pb-10">
            <h1 class="text-gray-200 text-3xl text-left">HARARE JOINER CITY</h1>
            <p class="pt-8 text-white text-xl text-left">Jason Moyo Avenue and Julius Nyrere Way <br> Number 456, Along Jason Moyo <br> or Number 67 along Julius Nyerere <br> Shop Number C120 Third Floor <br> info@fruits.co.ac.zw <br> +263786 191 270</p>
        </div>
        <div class="pt-12 pl-14 pb-10 ">
            <h1 class="text-gray-200 text-3xl text-left">MAGOLIS MALL HARARE</h1>
            <p class="pt-8 text-xl text-white text-left">Corner Nelson Mandela and Leorpard Takawira Way <br> Number 89, Along Nelson Mandela <br> or Number 90 along Julius Nyerere <br> Shop Number A1 First Floor <br> info@fruits.co.ac.zw <br> +263 786 191 270</p>
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
    <div class="pl-10">
         <button class="bg-black  font-bold rounded fixed  bottom-20 right-30 w-20 h-20 z-99 text-white cursor-pointer p-15 text-2xl hover:bg-gray-800" onclick="scrollToTop()" id="upButton" title="Go to top">UP</button>
    </div>
 </div>

 @endsection
 
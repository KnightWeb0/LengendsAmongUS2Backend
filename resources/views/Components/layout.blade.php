{{-- when you signal somthing as layout it should be a component --}}
{{-- the layout file is the structure for your views
it can also be refred to as a masterfile --}}
{{-- so we define the structure then we slot in any  extra indivual elmemnt thing required for some pages --}}

<!DOCTYPE html >
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Legends Amoung US </title>
    {{-- //to link to vite  --}}
    @vite([ 'resources/js/app.js' ,'resources/css/app.css'])
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- have my custom font here  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="h-full">
   <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-first">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
                {{-- my logo here --}}
              {{-- <img class="h-8 w-8" src="images/logo.png" alt="Your Company"> --}}
              <div class=" text-white font-Cinzel text-2xl "> Legends Amoung Us</div>
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                {{-- this is detecting what page you are on and updating the hover on the correct page nav
                    however we shouldnt use it on  true or false becuase its not dynamic we insitead should use the request call
                    by calling request()-> is(/) this home page now apply active styling
                     --}}
        {{-- through active we are checking if the request is the link active of the page you are on   --}}
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Bands</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')" >Albums</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')" >Record Labels</x-nav-link>

                {{-- HM exercise  <x-nav-link  :active="request()->is('contact')" type="button" >Contact</x-nav-link> --}}
                {{-- hw task we want the type to be assumed as a string
                when you add a : on a prop the vlaue of that prop should be treated as an expresion not a string --}}

              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
             {{-- //we tackel this problem by using the auth directive u will only see this is u are logined in
             authenticated
             @auth

             @endauth --}}

             {{-- you will only see this if you dont have an account
                only on the condtion you are a guest should we display a log in link --}}
             @guest
             {{-- make login active if the request is login --}}
             <x-nav-link href="/login" :active="request()->is('login')"> Log In </x-nav-link>
             {{-- do we always want to display these ??? if we are signed in --}}

             <x-nav-link href="/register" :active="request()->is('register')"> Register </x-nav-link>
             @endguest

             @auth
              {{-- this is a bad idea using a get request it will lead to secuirty issues instead you should use a post
                with a form   --}}
             {{-- <x-nav-link href="/login" :active="request()->is('login')"> Log out </x-nav-link> --}}
              {{-- we should  --}}

              <form method="POST" action="/logout">
                @csrf
               <x-form-button> Log Out </x-form-button>
            </form>

              @endauth





              {{-- Profile dropdown --}}
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="/images/prof.jpeg">


                </button>
                </div>



              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
          <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
          <a href="/contact" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>

        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-white">Tom Cook</div>
              <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
            </div>
            <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
          </div>

        </div>
      </div>
    </nav>

    <header class="bg-secondary shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
        {{-- this needs to be dyanimc based upon the page the heading dyamicly for each page its on should reflect it    --}}
        <h1 class="text-3xl font-Cinzel tracking-tight text-third">{{$heading}}</h1>
          <x-button  href="/jobs/create"> Create Band </x-button>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content sloted content gose here  -->
        {{$slot}}
      </div>
    </main>
  </div>


</body>

</html>

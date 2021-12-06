<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="../assets/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!--I should prob remove this since i cant utilise @apply (i think) and i wont be using vanilla styles <link rel="stylesheet" href="../assets/styles/baseStyles.css">-->
	<title>MyMusicWorld</title>
</head>

<body class="bg-gray-300 text-gray-800">

<nav class="flex flex-wrap items-center justify-between py-4 md:py-0 px-4 text-lg text-gray-700 bg-white m-3 rounded shadow-xl">

      <div class="cursor-default text-gray-900"> MyMusicWorld </div>
      
      <div class=" md:hidden block"><i id="menu-button" class="fas fa-bars h-6 w-6 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></i></div>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="index.php">Home</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="#">Search</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="#">About</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 text-blue-500 transition duration-300 ease-in-out" href="login.php">Sign In</a></li>
          </ul>
        </div>
    </nav>

    <main class="flex-grow">

      <section class="relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

          <div class="pt-10 pb-9 md:pt-16 md:pb-14">
          
            <div class="text-center">
              
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4">Welcome to <span class="text-gray-700">your </span><span class="bg-clip-text text-blue-500 bg-gradient-to-r from-blue-500 to-teal-400">MyMusicWorld</span></h1>
              
              <div class="max-w-3xl mx-auto">
                
                <p class="text-xl text-gray-600 mb-8"> This is <span class="text-blue-500">the place</span> for sharing, reviewing, exploring and talking about music! Start your journey below and join milions! </p>
                
                <img src="../assets/images/logo.png" class="h-auto w-auto pb-8 mx-auto">

                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0" href="/">Search for music<i class="fas fa-search pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="/">Login <i class="far fa-user pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="/">Most reviewed<i class="fas fa-poll pl-2"></i></a>
                  </div>
                </div>
              </div>
          </div>
      </section>
      
      <div class="relative text-center my-6">
        <hr>
        <h1 class="text-2xl">Newest reviews</h1>
      </div>

      <section class="p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

      <!-- These cards are supposed to be dinamically generated when the page is opened, for now they are here only for the demo -->

      <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
          <div class="pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e02858ed9e2832801189187391a"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

      <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
          <div class="pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e028c998c734714dab370c21160"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

      <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
          <div class="pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e02ca40908d43a2a80fb34de8a3"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

        <div class="max-w-xs mx-auto">
          <div class="bg-white shadow-lg rounded-lg pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e029bbd79106e510d13a9a5ec33"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

        <div class="max-w-xs mx-auto">
          <div class="bg-white shadow-lg rounded-lg pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e027676c7bf4e667590e496c2a3"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

        <div class="max-w-xs mx-auto">
          <div class="bg-white shadow-lg rounded-lg pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e029489195b1c32f0bc45eae2c4"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

        <div class="max-w-xs mx-auto">
          <div class="bg-white shadow-lg rounded-lg pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e029977eb01e4e40c8357435ef9"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

        <div class="max-w-xs mx-auto">
          <div class="bg-white shadow-lg rounded-lg pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e022fee61bfec596bb6f5447c50"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

        <div class="max-w-xs mx-auto">
          <div class="bg-white shadow-lg rounded-lg pt-3">
              <img class="rounded-lg mx-auto" src="https://i.scdn.co/image/ab67616d00001e02a09b231129ab1cb1a6efc57f"/>
               
              <div class="pt-6 pb-4 px-5">
                <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review">Review title.</h1>
                <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24">Review description good album yes. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                <div class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">User writing review</div>
              </div>
          </div>
        </div>

      </section>
      
    </main>

</body>

<script>
  document.querySelector('#menu-button').addEventListener('click', () => {document.querySelector('#menu').classList.toggle('hidden');})
</script>

</html>
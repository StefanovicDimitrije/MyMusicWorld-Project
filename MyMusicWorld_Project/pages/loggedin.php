<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="../assets/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
	<title>MyMusicWorld</title>
</head>

<body class = "bg-gray-300 text-gray-800">

<nav class="flex flex-wrap items-center justify-between py-4 md:py-0 px-4 text-lg text-gray-700 bg-white m-3 rounded shadow-xl">

      <div class="cursor-default mb-1"> MyMusicWorld </div>
      
      <div class=" md:hidden block"><i id="menu-button" class="fas fa-bars h-6 w-6 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></i></div>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out mt-1" href="#">Home</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out mt-1" href="#">Search</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out mt-1" href="#">About</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="#">
                <div class="flex justify-center md:justify-end">
                    <img class="w-10 h-10 rounded-full border-2 border-blue-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div></a>
            </li>
          </ul>
        </div>
    </nav>

    <main class="flex-grow">

      <section class="relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

          <div class="pt-10 pb-12 md:pt-16 md:pb-20">
          
            <div class="text-center pb-12 md:pb-16">
              
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4">Welcome to <span class="text-gray-700">your </span><span class="bg-clip-text text-blue-500 bg-gradient-to-r from-blue-500 to-teal-400">MyMusicWorld</span></h1>
              
                <img src="../assets/images/logo.png" class="h-auto w-auto pb-8 mx-auto">

              <div class="max-w-3xl mx-auto">
                <p class="text-xl text-gray-600 mb-8"> This is <span class="text-blue-500">the place</span> for sharing, reviewing, exploring and talking about music! Start your journey below and join milions! </p>
                
                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0" href="/">Search for music<i class="fas fa-search pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="/">Check your profile <i class="far fa-user pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="/">Most reviewed<i class="fas fa-poll pl-2"></i></a>
                  </div>
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
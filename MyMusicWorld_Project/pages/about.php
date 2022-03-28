<?php 
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">-->
	<!--<link href="../assets/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script
			  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
			  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
			  crossorigin="anonymous"></script>
  <title>MyMusicWorld</title>
</head>

<body class="bg-gray-300 text-gray-800 flex flex-col h-screen">

    <?php if ($_SESSION['username']){ ?>
    <nav class="flex flex-wrap items-center justify-between py-4 md:py-0 px-4 text-lg text-gray-700 bg-white m-3 rounded shadow-xl">

    <div class="cursor-default text-gray-900 select-none "> MyMusicWorld </div>

    <div class=" md:hidden block"><i id="menu-button" class="fas fa-bars h-6 w-6 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></i></div>
    
    <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
        <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out mt-1" href="index.php">Home</a></li>
        <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out mt-1" href="search.php">Search</a></li>
        <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out mt-1" href="about.php">About</a></li>
        <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="profile.php">
            <div class="flex justify-center md:justify-end">
                <img class="w-10 h-10 rounded-full border-2 border-blue-500" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png">
            </div></a>
        </li>
        </ul>
    </div>
    </nav>
    <?php } else { ?>
    <nav class="flex flex-wrap items-center justify-between py-4 md:py-0 px-4 text-lg text-gray-700 bg-white m-3 rounded shadow-xl">

        <div class="cursor-default text-gray-900 select-none "> MyMusicWorld </div>
        
        <div class=" md:hidden block"><i id="menu-button" class="fas fa-bars h-6 w-6 cursor-pointer"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></i></div>
        
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
                <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="index.php">Home</a></li>
                <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="search.php">Search</a></li>
                <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="#">About</a></li>
                <li><a class="md:p-4 py-2 block hover:text-blue-400 text-blue-500 transition duration-300 ease-in-out" href="login.php">Sign In</a></li>
            </ul>
            </div>
        </nav>
    <?php } ?>

    <main class="flex-grow">
        
    <div class="container mx-auto flex flex-col md:flex-row items-center my-0 md:my-12 lg:my-24">
		<!--Left Col-->
		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-10 pb-20 px-6 bg-white rounded shadow-xl mx-3">
			<p class="uppercase tracking-loose">About us</p>
			<h1 class="font-bold text-3xl my-4">MyMusicWorld</h1>
			<p class="leading-normal mb-4">MyMusicWorld was made for the whole purpose of enjoying your time. You need to pick out every moment and now how to use it correctly. We deeply care about our users and each and every second they spend on our site. Every review and every discusion is important.</p>
			<button class="bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent"><a href="<?php if($_SESSION['username']){echo "profile.php";}else{echo "login.php";} ?>"> Join us, now! </a></button>
		</div>
		<!--Right Col-->
		<div class="w-full lg:w-1/2 lg:py-6 text-center mt-3 md:mt-0">
        <img src="../assets/images/logo.png" class="h-auto w-auto pb-8 mx-auto">
		</div>
	</div>


    </main>

    <footer class="w-full text-gray-700 text-center px-4 sm:px-6">
      <div class="py-2 border-t-2 border-gray-400">
        <div class="flex justify-between items-center md:space-x-10">
          <div class="flex justify-start lg:w-0 lg:flex-1">    
            <div class="-translate-y-1 text-gray-600">Dimitrije Stefanović 2022&copy;</div>
          </div>
          <div>
            <div class="-translate-y-1 text-gray-600">MyMusicWorld</div>    
          </div>
        </div>
      </div>
    </footer>

</body>

<script>
   $('#menu-button').click(function(){$('#menu').toggleClass('hidden');});
</script>

</html>
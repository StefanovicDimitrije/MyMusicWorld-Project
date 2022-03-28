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
            <li><a class="md:p-4 py-2 block hover:text-blue-400 transition duration-300 ease-in-out" href="about.php">About</a></li>
            <li><a class="md:p-4 py-2 block hover:text-blue-400 text-blue-500 transition duration-300 ease-in-out" href="login.php">Sign In</a></li>
          </ul>
        </div>
    </nav>
<?php } ?>

    <main class="flex-grow">

      <section class="relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

          <div class="pt-10 pb-9 md:pt-16 md:pb-14">
          
            <div class="text-center">
              
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4">Welcome to <span class="text-gray-700">your </span><span class="bg-clip-text text-blue-500 bg-gradient-to-r from-blue-500 to-teal-400">MyMusicWorld</span></h1>
              
              <div class="max-w-3xl mx-auto">
                
                <p class="text-xl text-gray-600 mb-8"> This is <span class="text-blue-500">the place</span> for sharing, reviewing, exploring and talking about music! Start your journey below and join milions! </p>
                
                <img src="../assets/images/logo.png" class="h-auto w-auto pb-8 mx-auto">
                
                <?php if ($_SESSION['username']){ ?>
                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0" href="search.php">Search for music<i class="fas fa-search pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="profile.php">Check your profile <i class="far fa-user pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="#">Most reviewed<i class="fas fa-poll pl-2"></i></a>
                  </div>
                </div>
                <?php } else { ?>
                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0" href="search.php">Search for music<i class="fas fa-search pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="login.php">Login <i class="far fa-user pl-2"></i></a>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="#">Most reviewed<i class="fas fa-poll pl-2"></i></a>
                  </div>
                </div>
                <?php } ?>

              </div>
          </div>
      </section>
      
            <div class="relative flex py-5 mt-4 mb-7 items-center">
              <div class="flex-grow border-t border-gray-400 max-w-md ml-auto"></div>
              <span class="flex-shrink mx-4"><h1 class="text-2xl font-bold text-gray-600">Newest reviews</h1></span>
              <div class="flex-grow border-t border-gray-400 max-w-md mr-auto"></div>
            </div>


      <section class="p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

      <!-- These cards are dinamically generated when the page is opened -->
      <?php 
        require '../includes/estconn.php';
        $conn = estconn();
        $sql ="SELECT * FROM review order by id desc limit 12";
        $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

        foreach ($result as $row):
        ?>
        
        <div class="max-w-xs mx-auto bg-white shadow-lg rounded-lg">
          <div class="pt-3">
            <div class="rounded-lg mx-auto" style="height: 300px; width: 300px;" >
              <img class="rounded-lg mx-auto overflow-hidden" style="min-height: 300px;" src="<?=$row['image']?>"/>
            </div>
            <div class="pt-6 pb-4 px-5">
              <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-9" aria-label="View the full review"> <a href="viewreviewalbum.php?q=<?=$row['id']?>"> <?=$row['title']?> </a></h1>
              <p class="overflow-clip overflow-hidden text-gray-700 tracking-wide mb-3 h-24"><?=$row['description']?></p>
              <a href="album.php?q=<?=$row['content_spotify_id']?>" class="text-gray-700 font-bold hover:text-blue-400 transition duration-300 ease-in-out cursor-pointer overflow-clip overflow-hidden h-6">View album</a>
            </div>
          </div>
        </div>

        <?php
        endforeach;
        ?>
    
      </section>
      
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
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script
			  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
			  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
			  crossorigin="anonymous"></script>

  <script src="../assets/scripts/search.js"></script>
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
    
    <section class="relative" style="height: 230px;">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

          <div class="pt-10 pb-9 md:pt-16 md:pb-14">
          
            <div class="text-center">
              
              <div class="max-w-3xl mx-auto">

                <div class="max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center mb-3">
                    <div class="w-full">
                        <input id="searchterm" type="text" placeholder="Search for your music" name="searchterm" class="text-gray-900 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-3 py-3 shadow-sm hover:shadow-lg w-full sm:w-1/2 mb-4 sm:mb-0">
                            <button class="absolute translate-y-2.5 -translate-x-10" id="search"><i class="fas fa-search"></i></button>
                        </input>
                        <select class="form-select form-select-sm appearance-none px-2 py-3.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none w-32 -translate-y-px" id="selecttype">
                            <option selected>Search type</option>
                            <option value="track">Track</option>
                            <option value="album">Album</option>
                            <option value="artist">Artist</option>
                        </select>
                        
                <div class="relative flex py-5 mt-7 items-center sr-only" id="titleresults">
                    <div class="flex-grow border-t border-gray-400"></div>
                    <span class="flex-shrink mx-4"><h1 class="text-2xl font-bold text-gray-600">Search results</h1></span>
                    <div class="flex-grow border-t border-gray-400"></div>
                </div>

                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="mt-5 p-4 pt-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" id="results">

      <!-- The cards for the search results are automated -->

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

  $('#search').click(function(){
    var type = $('#selecttype').val();
    if (type === "Search type"){
      alert('Please select search term type');
      return;
    }
    var term = $('#searchterm').val();
    
    var myRequest = new XMLHttpRequest();
    
    myRequest.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        $('#titleresults').removeClass('sr-only');
        var data = JSON.parse(myRequest.responseText);
        switch(Object.keys(data)[0]){
          case 'tracks':searchTracks(data);break;
          case 'albums':searchAlbum(data);break;
          case 'artists':searchArtists(data);break;
          default: console.log(Object.keys(data)[0]);
        }
      }
    }
    
    myRequest.open('GET','http://localhost:80/dsr/api?q='+encodeURIComponent(term.trim())+'&t='+type,true);
    myRequest.send();
      
  });

</script>

</html>
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>

  <script src="https://cdn.tailwindcss.com"></script>
	<link href="../assets/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <script
			  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
			  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
			  crossorigin="anonymous"></script>

  <title>MyMusicWorld</title>
</head>

<body class="bg-gray-300 text-gray-800 flex flex-col h-screen">

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

    <main class="flex-grow">

    <section class="relative block mt-9" style="height: 250px;"> 
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover " 
          style='background-image: url("https://images.unsplash.com/photo-1515268064940-5150b7c29f35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80");'>
          <span id="blackOverlay"class="w-full h-full absolute bg-gradient-to-t from-gray-300 via-transparent to-gray-300"></span>
        </div>
      </section>

    <section class="relative pt-16 bg-gray-300">
        <div class="container mx-auto px-4 max-w-6xl">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
            <div class="px-6">
              <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                  <div class="relative">
                    <img
                      alt="Profile photo"
                      src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"
                      class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20"
                      style="max-width: 150px;"
                    />
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                  <div class="py-6 px-3 mt-32 sm:mt-0">
                    <div class="sm:text-left text-center ">
                    <form action="http://localhost:80/dsr/includes/logout">
                      <input type="submit" value="Log out" class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-4 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 focus:outline-none mr-2 sm:mr-0 sm:ml-2 mb-1" />
                    </form> 
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                    <div class="mr-4 p-3 text-center">
                      <span class="text-lg font-bold block uppercase tracking-wide text-gray-700">Email</span
                      ><span class="text-sm text-gray-500" id="email"><?php echo $_SESSION['mail'] ?></span>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="text-center mt-3">
                <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2" id="username">
                  <?php echo $_SESSION['username'] ?>
                </h3>
                <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase -translate-x-1 ">
                  <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                  <?php echo $_SESSION['location'] ?>
                </div>
                <button class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-4 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 focus:outline-none sm:mr-1 mb-1" type="button">
                  <a href="editprofile.php">Edit profile</a>
                </button>
              </div>
              <div class="relative flex py-5 mt-4 items-center">
                <div class="flex-grow border-t border-gray-400 max-w-sm ml-auto"></div>
                <span class="flex-shrink mx-4"><h1 class="text-2xl font-bold text-gray-600">Your reviews</h1></span>
                <div class="flex-grow border-t border-gray-400 max-w-sm mr-auto"></div>
              </div>
                <div class="flex flex-wrap justify-center">
                  <div class="w-full lg:w-9/12 px-4">
                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                      <section class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-5">
                        <?php 
                      require '../includes/estconn.php';
                      $conn = estconn();
                      $userid = $_SESSION['id'];
                      $sql = "SELECT * FROM review WHERE fk_id_user='$userid'";

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
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
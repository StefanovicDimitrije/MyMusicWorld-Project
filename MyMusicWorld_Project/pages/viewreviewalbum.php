<?php 

require '../includes/estconn.php';

$conn = estconn();

error_reporting(0);
session_start();

$q = $_REQUEST["q"];

$data;

$sql = "SELECT * FROM review WHERE id='$q'";
$res = mysqli_query($conn,$sql);

        if($res->num_rows > 0){
            $row = mysqli_fetch_assoc($res);
            $data['image'] = $row['image'];
            $data['title'] = $row['title'];
            $data['description'] = $row['description'];
            $data['userid'] = $row['fk_id_user'];
            $data['spotify'] = $row['content_spotify_id'];
            $data['date'] = $row['review_date'];
        }

$userid = $data['userid'];

$sql1 = "SELECT * FROM user WHERE id='$userid'";
$res1 = mysqli_query($conn,$sql1);

        if($res1->num_rows > 0){
            $row = mysqli_fetch_assoc($res1);
            $data['username'] = $row['username'];
        }

$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => 'https://api.spotify.com/v1/albums/'.$data['spotify'].'?market=ES',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_SSL_VERIFYHOST => 0,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_HTTPHEADER => [
		"Accept: application/json",
		"Content-Type: application/json",
		"Authorization: Bearer TOKEN-HERE"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $album = json_decode($response);
    $data['artist'] = $album->{'artists'}[0]->{'name'};
    $data['album'] = $album->{'name'};
}

if(isset($_POST['delete'])){
    $sqldel = "DELETE FROM review WHERE id='".$q."'";
    if ($conn->query($sqldel)) {
        header("Location: http://localhost:80/dsr/pages/index"); 
        exit();
      } else {
        echo "Error deleting record: " . $conn->error;
      }
}

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

      <div class="max-w-4xl flex items-center h-auto flex-wrap mx-auto my-16 ">
    
	<!--Main Col-->
	<div class="w-full rounded-lg shadow-2xl bg-white opacity-75 mx-6 ">
	

		<div class="p-4 md:p-12 text-center ">
			<!-- Image for mobile view-->
			<div class="rounded-lg mx-auto" style="height: 300px; width: 300px;" >
			<img src="<?php echo $data['image']?>" alt="Album cover" class="block rounded-lg shadow-xl mx-auto -mt-16 overflow-hidden" style="min-height: 300px;">
			</div>
            <h1 class="text-3xl font-bold pt-8"><?php echo $data['album']?></h1>
			<div class="mx-auto  w-4/5 pt-3 border-b-2 border-gray-500 opacity-25"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center "><i class="fas fa-users pr-2"></i> Artist: <?php echo $data['artist']?></p>
			<p class="pt-2 text-gray-600 text-xs flex items-center justify-center "><i class="fas fa-user pr-2"></i>Reviewed by: <?php echo $data['username']?></p>
            <p class="pt-2 text-gray-600 text-xs flex items-center justify-center "><i class="fas fa-clock pr-2"></i>Reviewed on: <?php echo $data['date']?></p>
        
                <div class="mx-auto  w-full pt-3 border-b-2 border-gray-500 opacity-25"></div>
                    <div class="text-xl font-bold pt-3"><?php echo $data['title']?></div>
                <div class="mx-auto w-3/5 pt-3 border-b-2 border-gray-500 opacity-25"></div>
                <div class="pt-3"><?php echo $data['description']?></div>              
            
            <?php if ($_SESSION['id'] === $userid){ ?>
                    <form action="" method="POST">
                        <div class="pt-3">
                            <button name="delete" id="delete" class="bg-red-500 hover:bg-red-700 transition duration-150 ease-in-out text-white font-bold py-2 px-4 rounded-full">
                                Delete review
                            </button> 
                        </div>
                    </form>
            <?php } ?>
		
        </div>

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
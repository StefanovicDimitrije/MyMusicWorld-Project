<?php

require '../includes/estconn.php';

error_reporting(0);

$conn = estconn();

if(isset($_POST['submit'])){    // Button which is in the input form with the post method with the name submit // isset Implies if the button is pressed or not
    
    $mail = $_POST['mail'];
    $user = $_POST['username'];
    $location = $_POST['location'];
    $pass = $_POST['pass'];     // I should add the function to encode the passwords (md5)
    $cpass = $_POST['cpass'];

    if($pass == $cpass ){
        $q = "SELECT * FROM user WHERE mail='$mail' OR username='$user'";
        $res = mysqli_query($conn,$q);

        if($res->num_rows > 0){
            echo "<script>alert(`Sorry, that email or username is already in use`)</script>"; // I should implement it so that it checks for both differently   
        }else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user VALUES (NULL,'$user','$mail','$location',NULL,'$pass',0)";
                // The first NULL is the ID which will be auto increment
                 // The second NULL is because i haven't implemented upload profile picture feature
                  // The last argument is 0 because the user is not an admin
            //$result = mysqli_query($conn,$sql);
            
            if( $conn->query($sql) ){

              $subject = 'You have succesfully registered your account on MyMusicWorld';
              $message = "We would like to congratulate you! Because you have made your best decision yet! You have succesfully created an account on MyMusicWorld using your email: ".$mail." under the username: ".$user.". We are so happy to have you here and would, most of all, wish you a nice stay!";

              mail($mail, $subject, $message,"From: dimitrijex@gmail.com");
              
              header("Location: http://localhost:80/dsr/pages/login"); 
              exit();
            }
                else{//echo "<script>alert(`Looks like something went wrong, please try again`)</script>";
                    echo "<script>alert(`Error $conn->error`)</script>";}
        }
    } else{
        echo "<script>alert(`The passwords do not match`)</script>";
    }
}

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

<nav class="flex flex-wrap items-center justify-between py-4 md:py-0 px-4 text-lg text-gray-700 bg-white m-3 rounded shadow-xl">

      <div class="cursor-default text-gray-900 select-none"> MyMusicWorld </div>
      
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

    <main class="flex-grow">

      <section class="relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

          <div class="pt-10 pb-9 md:pt-16 md:pb-14">
          
            <div class="text-center">
              
              <div class="max-w-3xl mx-auto">
                
                <p class="text-xl text-gray-600 mb-8"> Create a new account and join the community of milions! </p>
                
                <form action="" method="POST">
                <div class="max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center mb-3">
                  <div class="w-full">
                    <input id="mail" type="text" placeholder="E-mail" name="mail" value="<?php echo $_POST['mail'] ?>" class="text-gray-900 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-3 py-3 shadow-sm hover:shadow-lg w-full sm:w-1/2 mb-4 sm:mb-0" required></input>
                  </div>
                </div>

                <div class="max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center mb-3">
                <div class="w-full">
                    <input id="username" type= "text" placeholder="Username" name="username" value="<?php echo $_POST['username']; ?>" class="text-gray-900 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-3 py-3 shadow-sm hover:shadow-lg w-full sm:w-1/2 mb-4 sm:mb-0" required></input>
                  </div>
                </div>

                <div class="max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center mb-3">
                <div class="w-full">
                    <input id="location" type="text" placeholder="In which city are you located?" name="location" value="<?php echo $_POST['location']; ?>" class="text-gray-900 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-3 py-3 shadow-sm hover:shadow-lg w-full sm:w-1/2 mb-4 sm:mb-0" required></input>
                  </div>
                </div>

                <div class="max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center mb-5">
                <div class="w-full">
                    <input id="pass" type= "password" placeholder="Password" name="pass" value="<?php echo $_POST['pass']; ?>" class="text-gray-900 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-3 py-3 shadow-sm hover:shadow-lg w-full sm:w-1/2 mb-4 sm:mb-0" required></input>
                  </div>
                </div>

                <div class="max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center mb-5">
                <div class="w-full">
                    <input id="cpass" type= "password" placeholder="Confirm password" name="cpass" value="<?php echo $_POST['cpass']; ?>" class="text-gray-900 font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-3 py-3 shadow-sm hover:shadow-lg w-full sm:w-1/2 mb-4 sm:mb-0" required></input>
                  </div>
                </div>

                <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                  <div>
                    <button name="submit" class="w-full sm:w-auto"><a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-blue-500 hover:bg-blue-700 w-full mb-4 sm:w-auto sm:mb-0">Create account <i class="fas fa-user-plus pl-2"></i></a></button>
                  </div>
                  <div>
                    <a class="font-medium inline-flex items-center justify-center border border-transparent rounded leading-snug transition duration-150 ease-in-out px-8 py-3 shadow-lg text-white bg-gray-900 hover:bg-gray-800 w-full mb-4 sm:w-auto sm:ml-4" href="login.php">Back to login <i class="fas fa-walking pl-2"></i></a>
                  </div>
                </div>
                </form>
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
<?php include("config/functions.php");
_login("index","person");

//============login========//
if(isset($_POST['submit'])){
  $email =$_POST['email'];
  $pass = md5($_POST['pass']);
          $row = _fetch("person","email='$email' AND password='$pass' AND role='Admin'");
          if($row>0){
              $id = $row['id'];
              $_SESSION['person_id'] = $id;
              setcookie('person_id', $id , time()+2580000);
              header('location:index.php?msg=Successfully Logged In');
          }else{
              $msg = "You have no account! Please Sign Up.";
          } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- FONT-AWESOME -->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!-- CSS Styles -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Title</title>
</head>

<body>

  <div style="min-height: calc(100vh - 80px);" class="w-full py-12 flex items-center justify-center">
    <div class="w-[96%] lg:w-[525px] mx-auto text-center bg-white rounded-lg relative overflow-hidden py-16 px-10 sm:px-12 md:px-[60px]">


      <div>
        <div class="mb-12 text-center">
          <h3 class="text-xl font-semibold tracking-wide">Login</h3>
        </div>
        <form action="" method="POST">
          <div class="mb-6"><input required="" name="email" type="email" placeholder="Email Address"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>
          <div class="mb-6"><input required="" name="pass" type="password" placeholder="Password"
              class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
          </div>

          <button name="submit" type="submit" class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">Login Now</button>
          <!-- <a class="my-5 hover:underline text-blue-500 block" href="forgot-password.php">Forgot password</a> -->
        </form>
      </div>



      <div><span class="absolute top-1 right-1"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3"></circle>
            <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3"></circle>
            <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3"></circle>
            <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3"></circle>
          </svg></span><span class="absolute left-1 bottom-1"><svg width="29" height="40" viewBox="0 0 29 40"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)" fill="#3056D3">
            </circle>
            <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)" fill="#3056D3">
            </circle>
            <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3"></circle>
            <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)" fill="#3056D3">
            </circle>
            <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)" fill="#3056D3">
            </circle>
          </svg></span>
      </div>
    </div>
  </div>


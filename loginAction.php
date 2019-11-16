
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">

</head>

<body>
<?php

if(!isset($_POST['userID']) || !isset($_POST['userPassword']))
exit;

$userID=$_POST['userID'];
$userPassword=$_POST['userPassword'];
$members = [
        'ddd'=>['pw'=>'g123', 'name'=>'김동현'],
        'user2'=>['pw'=>'pw2', 'name'=>'박이팔'],
        'user3'=>['pw'=>'pw3', 'name'=>'최삼칠']
];
/*if(($userID=="anchangwan") && ($userPassword=="1111")){


  $_session[UserID]=$userID;
  $_session[UserPassword]=$userPassword;

  header('Location: main.php');


}*/
if(!isset($members[$userID])) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
/*else {
  echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.'),
  history.back();</script>";
       exit;
}*/
if($members[$userID]['pw'] != $userPassword) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['UserID']=$userID;
$_SESSION['User_name']=$members[$userID]['name'];

header('Location: main.php');


?>

</body>
</html>

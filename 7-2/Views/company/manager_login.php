<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
require_once(ROOT_PATH.'Models/user.php');
$user = new Managers();
$params = $user->getManagers();
$flg = 1;
$message="";

session_start();

$errUserid = "";
$errPassword = "";

if($_SERVER['REQUEST_METHOD']!=="POST"){
  $userid = "";
  $password = "";
  $errUserid = "";
  $errPassword = "";
}
else{
  $idPost = filter_input_array(INPUT_POST,$_POST);
  $userid = $idPost['userid'];
  $password = $idPost['password'];

  if(!$userid){
      $errUserid = "ユーザーIDを正しく入力してください。";
  }
  if(!$password){
      $errPassword = "パスワードを入力してください。";
  }

foreach($params as $val){
  if(($val['userid']==$userid)&&($val['password']==$password)){
    $userid=$val['userid'];
    $flg=1;
    break;
  }
  else{
    $flg=0;
  }
}

if($flg==0){
    $message = "ユーザーIDまたはパスワードが間違っています";
}

if(($errUserid=="")&&($errPassword=="")&&($flg==1)){
    if(isset($_POST['form'])){
        $_SESSION['acount']=$idPost;
        header('Location:manager_top.php');
        exit();
    }
}
}

?>

<div class="login">
  <h1>管理者ログインページ</h1>
  <!-- <form action="manager_top.php" method="POST" name="form"> -->
  <form  method="POST" name="form">
  <div class="form">
    <span><?php echo $message ?></span><br>
      <label for="userid"></label>
      <span><?php echo $errUserid ?><span><br>
      <input type="text" class="userid" name="userid" id="userid" placeholder="ログインID"><br>

      <label for="userpass"></label>
      <span><?php echo $errPassword ?><span><br>
      <input type="password" class="password" name="password" id="password" placeholder="パスワード" >
      <div>
        <button id="btn" class="btn" name="form" type="submit">ログイン</button>
      </div>
  </div>
</div>

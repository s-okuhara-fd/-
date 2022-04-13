<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
require_once(ROOT_PATH.'Models/user.php');
$user = new Users();
$params = $user->getUsers();
$flg = 1;
$message="";

session_start();

$errCompanyid = "";
$errPassword = "";

if($_SERVER['REQUEST_METHOD']!=="POST"){
  $companyid = "";
  $password = "";
  $errCompanyid = "";
  $errPassword = "";
}
else{
  $idPost = filter_input_array(INPUT_POST,$_POST);
  $companyid = $idPost['companyid'];
  $password = $idPost['password'];

  if(!$companyid){
      $errCompanyid = "ユーザーIDを正しく入力してください。";
  }
  if(!$password){
      $errPassword = "パスワードを入力してください。";
  }

foreach($params as $val){
  if(($val['companyid']==$companyid)&&(password_verify($password,$val['password']))){
    $companyid=$val['companyid'];
    $flg=1;
    break;
  }
  else{
    $flg=0;
  }
}
if($flg==0){
    $message = "ユーザーIDまたはパスワードが間違っています。";
}

if(($errCompanyid=="")&&($errPassword=="")&&($flg==1)){
    if(isset($_POST['form'])){
        // $_SESSION['acount']=$idPost;
        // $_SESSION['acount']=$companyid;
        $_SESSION['companyid']=$companyid;
        header("Location:user_top.php");
        exit();
    }
}
}
?>


<div class="managerpage">
  <a href="manager_login.php">管理者ログイン</a>
</div>

<div class="login">
  <h1>ユーザーログインページ</h1>
  <!-- <form action="user_top.php" method="POST" name="form"> -->
  <form method="POST" name="form">
  <input type="hidden" name="id" value="<?=$value?>">
  <div class="form">
    <span><?php echo $message?></span><br>
      <span><?php echo $errCompanyid ?></br></span>
      <input type="text" class="companyid" name="companyid" id="companyid" placeholder="ログインID"><br>
    <span><?php echo $errPassword?><br></span>
    <input type="password" class="password" name="password" id="password" placeholder="パスワード" >
    <div>
      <button id="btn" class="btn" name="form" type="submit">ログイン</button>
    </div>
  </div>

  <div class="link">
    <div class="accountpage">
      <a href="user_account.php">新規アカウント作成</a>
    </div>

    <div class="resetpage">
      <a href="user_reset.php">パスワードを忘れた方はこちら</a>
    </div>
  </div>
</div>

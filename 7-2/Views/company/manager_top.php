<?php include ( dirname(__FILE__) . '/header.php' ); ?>


<div class="kaisha">
  <h1>登録会社一覧</h1>

  <?php
  session_start();
  $_SESSION['form']="";
  $acount = $_SESSION['acount'];
  if(!$acount){
    echo "ログイン失敗";
    header('Location:manager_login.php');
    exit();
  }
  $userid = $_SESSION['acount']['userid'];

  // session_start();
  // $_SESSION['confirmation'] = 1;
  require_once(ROOT_PATH .'Controllers/CompanyController.php');
  $company = new CompanyController();
  $params = $company->company();
  $params_pages = $company->index();
  $company_count = $company->index();
  // session_destroy();
  ?>

 <!-- 検索フォーム -->
  <div class="search-box">
    <form action="search.php" method="POST">
      <input type="text" name="searchbox" placeholder="会社名"/>　
      <input type="image" src="/company/img/search.jpg" name="btn" size="30"/>
    </form>
  </div>


<!-- 一覧 -->
  <div class="company-list">
    <?php foreach($params['companies'] as $value):?>
    <table>
      <tr>
        <th><?php echo $value['companyid'];?></th>
        <td><?php echo $value['companyname'];?></td>
        <td>
          <form action="./CompanyController.php" method="get">
            <input type="submit" formaction="./company_detail.php" value="詳細">
            <input type="hidden" name='id' value= <?=$value['id'] ?>>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
    </table>
    </div>
  </div>

  <div class="paging">
  <p><?php
  for($i= 0; $i<= $params_pages['pages']; $i ++){
    if(isset($_GET['pages']) && $_GET['pages'] == $i){
      echo $i +1;
    }else{
      echo "<a href='manager_top.php?pages=".$i."'>"." ".($i +1)."</a>";
    }
  }
  echo "<p>" .current($company_count). '件'. '　'."</p>"; // 全データ数?></p>
  </div>

</div>

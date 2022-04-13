<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
require_once(ROOT_PATH .'Controllers/CompanyController.php');
$company = new CompanyController();
$params_delete = $company->delete();
?>
<section>
  <div class="delete">
      <h1>削除完了しました</h1>
      <a href="manager_top.php">トップへ戻る</a>
    </div>
  </div>
</section>
</body>
</html>

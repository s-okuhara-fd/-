<?php include ( dirname(__FILE__) . '/header.php' ); ?>
<div class="search-all">
<?php
require_once(ROOT_PATH .'Controllers/CompanyController.php');
$company = new CompanyController();
$params = $company->company();
$params_pages = $company->index();
$company_count = $company->index();


  include "connect.php";
  if ($_POST['searchbox']) {
    $dbh = $pdo;
    $search = $_POST['searchbox'];
    $sql ="SELECT * from companies where companyname like '".$search."%'";
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll();
    if($result){
        foreach ($result as $row) {
          echo "<div class='search'>";
          echo "<table>";
          echo "<tr>";
          echo "<th>";
          echo $row['companyid'];
          echo "</th>";
          echo "<td>";
          echo $row['companyname'];
          echo "</td>";
          echo "<td>";
          echo "<form action='./CompanyController.php' method='get'>";
          echo "<input type='submit' formaction='./company_detail.php' value='詳細'>";
          echo "<input type='hidden' name='id' value={$row['id']}>";
          echo "</td>";
          echo "</form>";
          echo "</tr>";
          echo "</table>";
          echo "</div>";
      }
    }
    else{
        echo "not found";
    }
}
?>
</div>
<div class="top">
  <a href="manager_top.php">TOPページへ</button>
</div>

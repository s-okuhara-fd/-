<?php
require_once(ROOT_PATH .'/Models/Company.php');

class CompanyController{

  private $request;
  private $Company;

  public function __construct(){
  // public function index(){
  //   // $params = [
  //   //   "test" => "index"
  //   // ];
  //   // return $params;
    $this->request['get'] = $_GET;
    $this->request['post'] = $_POST;
    $this->Company = new Company();
    $dbh=$this->Company->get_db_handler();
  }

  public function company() {
    $company = $this->Company->findAll();
    $params = ['companies' => $company];
    return $params;
  }

  public function index() {
    $page =0;
    if(isset($_GET['page'])) {
      $page = $_GET['page'];
    }
    $company_count = $this->Company->findAll($page);
    $company_count = $this->Company->countAll();
    $params_pages = [
      'companies' => $company_count,
      'pages' => $company_count / 20
    ];
    return $params_pages;
  }

//詳細
  public function view() {
    $company = $this->Company->findById($_GET['id']);
    $params = ['companies' => $company];
    return $params;
  }

//編集
public function edit() {
  if(empty($_GET['id'])) {
    echo '指定のパラメータが不正です。このページを表示できません。';
    exit();
  }
  $company = $this->Company->editById($_GET['id']);
  $params_edit = ['companies' => $company];
  return $params_edit;
}

// 削除
public function delete() {
  if(empty($_GET['id'])) {
    echo '指定のパラメータが不正です。このページを表示できません。';
    exit;
  }
  $delete = $this->Company->deleteById($_GET['id']);
  $params_delete = ['companies' => $delete];
  return $params_delete;
}

public function company_pass() {
  $company = $this->Company->updateId();
  $params = ['companies' => $company];
  return $params;
}

public function companysee() {
  $company = $this->Company->NewfindAll();
  $params_company = ['companies' => $company];
  return $params_company;
}

public function edit_complete(){
  if(empty($_GET['id'])){
    echo"指定のパラメータが不正です。このページは開けません。";
    exit;
  }
  $update = $this->Company->update($_GET['id']);
  $params_editcomplete = ['companies' => $update];
  return $params_editcomplete;
}

}
 ?>

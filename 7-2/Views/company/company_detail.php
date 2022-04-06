<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
require_once(ROOT_PATH . "Controllers/CompanyController.php");
$company = new CompanyController();
$params = $company->view();
?>

<div class="company-detail">
<h1>会社情報詳細</h1>
<table class=detail>
<?php $company = ($params['companies']); ?>
  <tr><th>会社名</th><td><?=$company['companyname'] ?></td></tr>
  <tr><th>社名（フリガナ）</th><td><?=$company['companykana'] ?></td></tr>
  <tr><th>郵便番号</th><td><?=$company['postcode'] ?></td></tr>
  <tr><th>経理所在地</th><td><?=$company['location'] ?></td></tr>
  <tr><th>電話番号</th><td><?=$company['tell'] ?></td></tr>
  <tr><th>FAX番号</th><td><?=$company['fax'] ?></td></tr>
  <tr><th>会社代表者　役職/氏名</th><td><?=$company['representative'] ?></td></tr>
  <tr><th>資本金</th><td><?=$company['capital'] ?></td></tr>
  <tr><th>設立年月日</th><td><?=$company['edate'] ?></td></tr>
  <tr><th>従業員数</th><td><?=$company['employees'] ?></td></tr>
  <tr><th>事業内容</th><td><?=$company['content'] ?></td></tr>
  <tr><th>URL</th><td><?=$company['url'] ?></td></tr>
  <tr><th>取引条件</br>（支払いサイト）</th><td><?=$company['site'] ?></td></tr>
  <tr><th>振込先　金融機関名</th><td><?=$company['payee'] ?></td></tr>
  <tr><th>支店名</th><td><?=$company['branch'] ?></td></tr>
  <tr><th>口座情報　種別</th><td><?=$company['accountinformation'] ?></td></tr>
  <tr><th>口座番号</th><td><?=$company['accountnumber'] ?></td></tr>
  <tr><th>人材派遣許認可</th><td><?=$company['authorization'] ?></td></tr>
  <tr><th>発注書送付先担当者</br>（フルネーム）</th><td><?=$company['name'] ?></td></tr>
  <tr><th>発注書送付先担当者</br>（メールアドレス）</th><td><?=$company['mail'] ?></td></tr>
</table>

<div class="detailbtn">
  <div class="kousinbtn">
    <!-- <button id="statusopen" class="kousinbtn">登録状況更新</button>
    <div id="mask" class="hidden"></div>
    <section id="modal" onclick="#modal"class="hidden">
      <div class="statusarea">
        <label>選択してください</label>
        <div class="statuslist">
        <select name="status-list">
            <option value=""><?//=$company['status'] ?></option>
            <option value="">発注可能</option>
            <option value="">取引不可（契約締結後）</option>
            <option value="">取引不可（契約締結前）</option>
            <option value="">一時取引不可（覚書未締結の為）</option>
            <option value="">取引停止（不正反社等）</option>
            <option value="">見積連絡待ち</option>
            <option value="">口座登録待ち</option>
        </select>
      </div>
    </section>
    </div> -->
  <div class="deletebtn">
    <form action="./CompanyController.php" method="get">
      <button type="submit" formaction="./delete.php" onclick="return confirm('削除してよろしいですか？')">削除</button>
      <input type="hidden" name='id' value= <?=$params['companies']['id'] ?>>
  </div>
  </div>
</div>

<div class="top">
  <a href="manager_top.php">TOPページへ</button>
</div>
</div>
</body>

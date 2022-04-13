<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<div class="company">

  <h1>会社情報登録ページ</h1>
  <form action="user_confirm.php" method="POST" name="form">
  <div class="company-p">
    <p>貴社とお取引をさせて頂くにあたり、下記情報のご回答をお願い致します。</br>
  尚、複数支社がある場合は、支払先が同じであれば支社ごとの入力は不要です。</br>
  本社の方が代表してご回答くださいませ。</br></br>
  登録完了後、弊社発注システム【ZAC】より</br>
  「ZACからのお知らせ （no-reply@jp.oro.com）」という、</br>
  発注書メールをお送りしますのでご返信の程よろしくお願い致します。</p>
  </div>

  <div class="company-form">
    <div>
    <label for="companyid">会社ID</label>
    <?php if (isset($error['companyid']) && $error['companyid'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="companyid" name="date[]" id="name" placeholder="ログインIDを入力してください" value="<?php if (!empty($_SESSION['date'][0])) {echo $_SESSION['date'][0];}?>"class = "contact_text">
    </div>

    <div>
    <label for="companyname">会社名</label>
    <?php if (isset($error['companyname']) && $error['companyname'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="companyname" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][0])) {echo $_SESSION['date'][0];}?>"class = "contact_text">
    </div>

    <div>
    <label for="companykana">社名（フリガナ）</label>
    <?php if (isset($error['companykana']) && $error['companykana'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="companykana" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][1])) {echo $_SESSION['date'][1];}?>"class = "contact_text">
    </div>

    <div>
    <label for="postcode">郵便番号</label>
    <?php if (isset($error['postcode']) && $error['postcode'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="postcode" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][2])) {echo $_SESSION['date'][2];}?>"class = "contact_text">
    </div>

    <div>
    <label for="location">経理所在地</label>
    <?php if (isset($error['location']) && $error['location'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="location" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][3])) {echo $_SESSION['date'][3];}?>"class = "contact_text">
    </div>

    <div>
    <label for="tell">電話番号</label>
    <?php if (isset($error['tell']) && $error['tell'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="tell" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][4])) {echo $_SESSION['date'][4];}?>"class = "contact_text">
    </div>

    <div>
    <label for="fax">FAX番号</label>
    <?php if (isset($error['fax']) && $error['fax'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="fax" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][5])) {echo $_SESSION['date'][5];}?>"class = "contact_text">
    </div>


    <div>
    <label for="representative">会社代表者　役職/氏名</label>
    <?php if (isset($error['representative']) && $error['representative'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="representative" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][6])) {echo $_SESSION['date'][6];}?>"class = "contact_text">
    </div>

    <div>
    <label for="capital">資本金</label>
    <?php if (isset($error['capital']) && $error['capital'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="capital" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][7])) {echo $_SESSION['date'][7];}?>"class = "contact_text">
    </div>

    <div>
    <label for="edate">設立年月日</label>
    <?php if (isset($error['edate']) && $error['edate'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="edate" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][8])) {echo $_SESSION['date'][8];}?>"class = "contact_text">
    </div>

    <div>
    <label for="employees">従業員数</label>
    <?php if (isset($error['employees']) && $error['employees'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="employees" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][9])) {echo $_SESSION['date'][9];}?>"class = "contact_text">
    </div>

    <div>
    <label for="content">事業内容</label>
    <?php if (isset($error['content']) && $error['content'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="content" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][10])) {echo $_SESSION['date'][10];}?>"class = "contact_text">
    </div>

    <div>
    <label for="url">URL</label>
    <?php if (isset($error['url']) && $error['url'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="url" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][11])) {echo $_SESSION['date'][11];}?>"class = "contact_text">
    </div>

    <div>
    <label for="site">取引条件（支払いサイト）</label>
    <?php if (isset($error['site']) && $error['site'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="site" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][12])) {echo $_SESSION['date'][12];}?>"class = "contact_text">
    </div>

    <div>
    <label for="payee">振込先　金融機関名</label>
    <?php if (isset($error['payee']) && $error['payee'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="payee" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][13])) {echo $_SESSION['date'][13];}?>"class = "contact_text">
    </div>

    <div>
    <label for="branch">支店名</label>
    <?php if (isset($error['branch']) && $error['branch'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="branch" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][14])) {echo $_SESSION['date'][14];}?>"class = "contact_text">
    </div>

    <div>
    <label for="accountinformation">口座情報　種別</label>
    <?php if (isset($error['accountinformation']) && $error['account-information'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="accountinformation" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][15])) {echo $_SESSION['date'][15];}?>"class = "contact_text">
    </div>

    <div>
    <label for="accountnumber">口座番号</label>
    <?php if (isset($error['accountnumber']) && $error['accountnumber'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="accountnumber" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][16])) {echo $_SESSION['date'][16];}?>"class = "contact_text">
    </div>

    <div>
    <label for="authorization">人材派遣許認可</label>
    <?php if (isset($error['authorization']) && $error['authorization'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="authorization" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][17])) {echo $_SESSION['date'][17];}?>"class = "contact_text">
    </div>

    <div>
    <label for="name">発注書送付先担当者（フルネーム）</label>
    <?php if (isset($error['name']) && $error['name'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="name" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][18])) {echo $_SESSION['date'][18];}?>"class = "contact_text">
    </div>

    <div>
    <label for="mail">発注書送付先担当者（メールアドレス）</label>
    <?php if (isset($error['mail']) && $error['mail'] == 'blank1' ): ?>
      <p class="error">必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="mail" name="date[]" id="name" placeholder="" value="<?php if (!empty($_SESSION['date'][19])) {echo $_SESSION['date'][19];}?>"class = "contact_text">
    </div>

    <button id="btn" class="btn" name="btn" type="submit">登録確認</button>
    <input type="hidden" name="ticket">
  </div>
</div>

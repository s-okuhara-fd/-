<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
  $count=0;
  // $_SESSION['companyid'] = $_POST['companyid'];
  // $form_id = htmlspecialchars($_GET['companyid'], ENT_QUOTES, "UTF-8");
  $form_companyname	=htmlspecialchars($_POST['companyname'], ENT_QUOTES, "UTF-8");
  $form_companykana	=htmlspecialchars($_POST['companykana'], ENT_QUOTES, "UTF-8");
  $form_postcode	=htmlspecialchars($_POST['postcode'], ENT_QUOTES, "UTF-8");
  $form_location	=htmlspecialchars($_POST['location'], ENT_QUOTES, "UTF-8");
  $form_tell	=htmlspecialchars($_POST['tell'], ENT_QUOTES, "UTF-8");
  $form_fax	=htmlspecialchars($_POST['fax'], ENT_QUOTES, "UTF-8");
  $form_representative	=htmlspecialchars($_POST['representative'], ENT_QUOTES, "UTF-8");
  $form_capital	=htmlspecialchars($_POST['capital'], ENT_QUOTES, "UTF-8");
  $form_edate	=htmlspecialchars($_POST['edate'], ENT_QUOTES, "UTF-8");
  $form_employees	=htmlspecialchars($_POST['employees'], ENT_QUOTES, "UTF-8");
  $form_content	=htmlspecialchars($_POST['content'], ENT_QUOTES, "UTF-8");
  $form_url	=htmlspecialchars($_POST['url'], ENT_QUOTES, "UTF-8");
  $form_site	=htmlspecialchars($_POST['site'], ENT_QUOTES, "UTF-8");
  $form_payee	=htmlspecialchars($_POST['payee'], ENT_QUOTES, "UTF-8");
  $form_branch	=htmlspecialchars($_POST['branch'], ENT_QUOTES, "UTF-8");
  $form_accountinformation	=htmlspecialchars($_POST['accountinformation'], ENT_QUOTES, "UTF-8");
  $form_accountnumber	=htmlspecialchars($_POST['accountnumber'], ENT_QUOTES, "UTF-8");
  $form_authorization	=htmlspecialchars($_POST['authorization'], ENT_QUOTES, "UTF-8");
  $form_name	=htmlspecialchars($_POST['name'], ENT_QUOTES, "UTF-8");
  $form_mail	=htmlspecialchars($_POST['mail'], ENT_QUOTES, "UTF-8");

  ?>

  <section>
    <div class="update">
      <h1>編集</h1>
      <form method="post" action="edit_complete.php">
        <p>下記の内容をご確認の上送信ボタンを押してください。</br>内容を訂正する場合は戻るを押してください。</p>
        <?php if(!empty($errors)): ?>
          <?php echo '<ul>'; ?>
            <?php
            foreach ($errors as $error) {
              echo '<li>' . $error . '</li>';
              $count ++;
            }
            ?>
            <?php echo '</ul>'; ?>
          <?php endif ?>
          <dl class="confirm">

            <div>
                <div class="answer">
                  <div class="answer-top">
                    <label>会社名</label>
                  </div>
                    <p><?= htmlspecialchars($form_companyname, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>社名（フリガナ）</label>
                  </div>
                    <p><?= htmlspecialchars($form_companykana, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>郵便番号</label>
                  </div>
                    <p><?= htmlspecialchars($form_postcode, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>経理所在地</label>
                  </div>
                    <p><?= htmlspecialchars($form_location, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>電話番号</label>
                  </div>
                    <p><?= htmlspecialchars($form_tell, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>FAX番号</label>
                  </div>
                    <p><?= htmlspecialchars($form_fax, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>会社代表者　役職/氏名</label>
                  </div>
                    <p><?= htmlspecialchars($form_representative, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>資本金</label>
                  </div>
                    <p><?= htmlspecialchars($form_capital, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>設立年月日</label>
                  </div>
                    <p><?= htmlspecialchars($form_edate, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>従業員数</label>
                  </div>
                    <p><?= htmlspecialchars($form_employees, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>事業内容</label>
                  </div>
                    <p><?= htmlspecialchars($form_content, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>URL</label>
                  </div>
                    <p><?= htmlspecialchars($form_url, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>取引条件（支払いサイト）</label>
                  </div>
                    <p><?= htmlspecialchars($form_site, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>振込先　金融機関名</label>
                  </div>
                    <p><?= htmlspecialchars($form_payee, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>支店名</label>
                  </div>
                    <p><?= htmlspecialchars($form_branch, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>口座情報　種別</label>
                  </div>
                    <p><?= htmlspecialchars($form_accountinformation, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>口座番号</label>
                  </div>
                    <p><?= htmlspecialchars($form_accountnumber, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>人材派遣許認可</label>
                  </div>
                    <p><?= htmlspecialchars($form_authorization, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>発注書送付先担当者（フルネーム）</label>
                  </div>
                    <p><?= htmlspecialchars($form_name, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="answer">
                  <div class="answer-top">
                    <label>発注書送付先担当者（メールアドレス）</label>
                  </div>
                    <p><?= htmlspecialchars($form_mail, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
        <div class="updatebtn">
        <?php
        // echo '<input type="hidden" name="id" value="'.$form_id.'">';
        echo '<input type="hidden" name="companyname" value="'.$form_companyname.'">';
        echo '<input type="hidden" name="companykana" value="'.$form_companykana.'">';
        echo '<input type="hidden" name="postcode" value="'.$form_postcode.'">';
        echo '<input type="hidden" name="location" value="'.$form_location.'">';
        echo '<input type="hidden" name="tell" value="'.$form_tell.'">';
        echo '<input type="hidden" name="fax" value="'.$form_fax.'">';
        echo '<input type="hidden" name="representative" value="'.$form_representative.'">';
        echo '<input type="hidden" name="capital" value="'.$form_capital.'">';
        echo '<input type="hidden" name="edate" value="'.$form_edate.'">';
        echo '<input type="hidden" name="employees" value="'.$form_employees.'">';
        echo '<input type="hidden" name="content" value="'.$form_content.'">';
        echo '<input type="hidden" name="url" value="'.$form_url.'">';
        echo '<input type="hidden" name="site" value="'.$form_site.'">';
        echo '<input type="hidden" name="payee" value="'.$form_payee.'">';
        echo '<input type="hidden" name="branch" value="'.$form_branch.'">';
        echo '<input type="hidden" name="accountinformation" value="'.$form_accountinformation.'">';
        echo '<input type="hidden" name="accountnumber" value="'.$form_accountnumber.'">';
        echo '<input type="hidden" name="authorization" value="'.$form_authorization.'">';
        echo '<input type="hidden" name="name" value="'.$form_name.'">';
        echo '<input type="hidden" name="mail" value="'.$form_mail.'">';

        // if($count == 0){
        //   echo "<button type='submit' class='send' name='id'>"."送&emsp;信"."</button>";
        // }else{
        //   echo "<button type='button' class='send' name='id'>"."送&emsp;信"."</button>";
        // }
      ?>
      <div class="updateebtn">
        <form action="./CompanyController.php" method="get">
          <button type="submit" formaction="./edit_complete.php">送信</button>
          <!-- <input type="hidden" name='id' value= <?=//$form_id ?>> -->
      </div>
      <button type="button" class="a" onclick=history.back()>戻&emsp;る</button>
    </div>
    </dd>
    </dl>
  </form>
</div>
</section>
</body>
</html>
<!-- <META http-equiv="Refresh" content="1;URL=user_top.php"> -->

<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<div class="user-reset">
  <h1>パスワードリセット</h1>
  <form action="user_resetcomplete.php" method="POST" name="form">

  <div class="form">
    <div>
    <label for="companyname"></label>
    <?php if (isset($error['userid']) && $error['userid'] == 'blank1' ): ?>
      <p class="error">会社名は必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="companyname" name="date[]" id="companyname" placeholder="会社名" value="<?php if (!empty($_SESSION['date'][0])) {echo $_SESSION['date'][0];}?>"class = "contact_text">
    </div>

    <div>
    <label for="companyid"></label>
    <?php if (isset($error['companyid']) && $error['companyid'] == 'blank1' ): ?>
      <p class="error">ログインIDは必須入力です。</p>
    <?php endif; ?>
    <input type="text" class="companyid" name="date[]" id="companyid" placeholder="新しいログインID" value="<?php if (!empty($_SESSION['date'][1])) {echo $_SESSION['date'][1];}?>"class = "contact_text">
    </div>

    <div>
    <label for="password"></label>
    <?php if (isset($error['password']) && $error['password'] == 'blank1' ): ?>
      <p class="error">パスワードは必須入力です。</p>
    <?php endif; ?>
    <input type="password" class="password" name="date[]" id="password" placeholder="新しいパスワード" value="<?php if (!empty($_SESSION['date'][2])) {echo $_SESSION['date'][2];}?>"class = "contact_text">
    </div>

    <div class="btn">
      <button id="btn" class="btn" name="btn" type="submit">パスワードリセット</button>
    </div>
  </div>
</div>

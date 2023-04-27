<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	// フォームから送信されたデータを各変数に格納
    if(isset($_POST['name_last'])===TRUE){
                  $name_last = trim(mb_convert_kana($_POST['name_last'], 's', 'UTF-8'));
		if(mb_strlen($name_last)===0){
        $err_msg[] = '【姓】を入力してください';
    } else if (mb_strlen($name_last) > 9){
         $err_msg[] = '【姓】文字数が多いです。';
    }
    else {
        $msg[] = '登録完了名前';
    }
              }
	
	if(isset($_POST['name_first'])===TRUE){
                  $name_first = trim(mb_convert_kana($_POST['name_first'], 's', 'UTF-8'));
		if(mb_strlen($name_first)===0){
        $err_msg[] = '【名】入力してください';
    } else if (mb_strlen($name_first) > 9){
         $err_msg[] = '【名】文字数が多いです。';
    }
    else {
        $msg[] = '登録完了名前';
    }
              }
	
	if(isset($_POST['kana_last'])===TRUE){
                  $kana_last = trim(mb_convert_kana($_POST['kana_last'], 's', 'UTF-8'));
		if(mb_strlen($kana_last)===0){
        $err_msg[] = '【セイ】入力してください';
    } else if (preg_match('/^[ァ-ヾ]+$/u',$kana_last)!==1){
         $err_msg[] = '【セイ】カタカナのみです';
    }
    else {
        $msg[] = '登録完了カナ';
    }
              }
	
	if(isset($_POST['kana_first'])===TRUE){
                  $kana_first = trim(mb_convert_kana($_POST['kana_first'], 's', 'UTF-8'));
		if(mb_strlen($kana_first)===0){
        $err_msg[] = '【メイ】入力してください';
    } else if (preg_match('/^[ァ-ヾ]+$/u',$kana_first)!==1){
         $err_msg[] = '【メイ】カタカナのみです';
    }
    else {
        $msg[] = '登録完了kana';
    }
              }
	
	
	if(isset($_POST['zip11'])===TRUE){
                  $zip11 = trim(mb_convert_kana($_POST['zip11'], 's', 'UTF-8'));
		if(mb_strlen($zip11)===0){
        $err_msg[] = '【郵便番号】入力してください';
    } else if (preg_match('/^[0-9]{3}-[0-9]{4}$/',$zip11)!==1){
         $err_msg[] = '【郵便番号】形式が正しくありません';
    }
    else {
        $msg[] = '登録完了郵便';
    }
              }
	
	if(isset($_POST['addr11'])===TRUE){
                  $addr11 = trim(mb_convert_kana($_POST['addr11'], 's', 'UTF-8'));
              }
	
    if(isset($_POST['tel'])===TRUE){
                  $tel = trim(mb_convert_kana($_POST['tel'], 's', 'UTF-8'));
		if(mb_strlen($tel)===0){
        $err_msg[] = '【電話番号】入力してください';
    } else if (preg_match('/\A[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}\z/',$tel)!==1){
         $err_msg[] = '【電話番号】形式が正しくありません';
    }
    else {
        $msg[] = '登録完了TEL';
    }
              }
    if(isset($_POST['email'])===TRUE){
                  $email = trim(mb_convert_kana($_POST['email'], 's', 'UTF-8'));
		if(mb_strlen($email)===0){
        $err_msg[] = '【メールアドレス】入力してください';
    } else if (preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',$email)!==1){
         $err_msg[] = '【メールアドレス】形式が正しくありません';
    }
    else {
        $msg[] = '登録完了MAIL';
    }
              }
	
	if(isset($_POST['contact_item'])===TRUE){
                  $contact_item = trim(mb_convert_kana($_POST['contact_item'], 's', 'UTF-8'));
		if(mb_strlen($contact_item)===1){
        $err_msg[] = '【項目】選択してください';
    }
    else {
        $msg[] = '登録完了選択';
    }
              }
	if(isset($_POST['content'])===TRUE){
                  $content = trim(mb_convert_kana($_POST['content'], 's', 'UTF-8'));
		if(mb_strlen($content)===0){
        $err_msg[] = 'お問い合わせ内容を入力してください';
    } else if (mb_strlen($content) > 300){
         $err_msg[] = '【内容】300文字以内です';
    }
    else {
        $msg[] = '登録完了内容';
    }
              }
}
if(empty($err_msg)){
  // 送信ボタンが押されたら
    if (isset($_POST["submit"])) {
        // 送信ボタンが押された時に動作する処理をここに記述する
            
        // 日本語をメールで送る場合のおまじない
            mb_language("ja");
        mb_internal_encoding("UTF-8");
        
        //mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

            // 件名を変数subjectに格納
            $subject = "［自動送信］お問い合わせ内容の確認";

            // メール本文を変数bodyに格納
        $body = <<< EOM
{$name_last}{$name_first}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name_last}{$name_first}

【 ふりがな 】 
{$kana_last}{$kana_first}

【 ご住所 】
{$zip11}{$addr11}

【 電話番号 】 
{$tel}

【 メール 】 
{$email}

【 お問い合わせ項目 】 
{$contact_item}

【 お問い合わせ内容 】 
{$content}
===================================================

内容を確認のうえ、担当の者より回答させて頂きます。
しばらくお待ちくださいませ。

株式会社テクニカル
〒730-0854　広島市中区土橋町6-33
TEL(082)294-2400　FAX(082)234-1182

EOM;
        
        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "info@technical-co.jp";

        // 送信元の名前を変数fromNameに格納
        $fromName = "お問い合わせ内容";

        // ヘッダ情報を変数headerに格納する      
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

        // メール送信を行う
        mb_send_mail($email, $subject, $body, $header);
		
        // 件名を変数subjectに格納
            $subject = "［自動送信］お問い合わせがありました。";

            // メール本文を変数bodyに格納
        $body = <<< EOM
{$name_last}{$name_first}　様より問い合わせがありました。

以下のお問い合わせ内容を、確認ください。

===================================================
【 お名前 】 
{$name_last}{$name_first}

【 ふりがな 】 
{$kana_last}{$kana_first}

【 ご住所 】
{$zip11}{$addr11}

【 電話番号 】 
{$tel}

【 メール 】 
{$email}

【 お問い合わせ項目 】 
{$contact_item}

【 お問い合わせ内容 】 
{$content}
===================================================

内容を確認のうえ、ご回答お願い致します。

EOM;
        
        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "info@technical-co.jp";

        // 送信元の名前を変数fromNameに格納
        $fromName = "お問い合わせ内容";

        // ヘッダ情報を変数headerに格納する      
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

        // メール送信を行う
        mb_send_mail($fromEmail, $subject, $body, $header);


        // サンクスページに画面遷移させる
        header("Location:http://technical-co.jp/contact/conplete.php");
        exit;
    }
}
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>広島のハウスクリーニングならまごの手俱楽部</title>
<meta name="Description" content="まごの手倶楽部のコーポレートサイトです。">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="/assets/images/favicon.png" sizes="32×32" type="image/png">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/normalize.css">
<link rel="stylesheet" href="/assets/css/layout.css">
<link rel="stylesheet" href="/assets/css/style.css">
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="../assets/js/contact.js"></script>
</head>
<body>
<div id="container"> 
   <!-- global navigation -->
  <header class="l-content-expanded">
    <div class="header-link">
      <div class="site-logo">
        <p>広島でリフォームをご検討中の方へ</p>
        <a href="/index.html"><img src="/assets/images/mago_logo.svg" alt="まごの手俱楽部のロゴ"/></a></div>
      <div class="header-tel"><a href="tel:082-294-2400">082-294-2400</a><span>受付時間 : 9:00 ～ 17:00</span></div>
    </div>
    <div class="header">
      <h1 class="header-logo"><a href="/index.html"><img src="/assets/images/logo.png" alt="広島でリフォームをご検討中の方へ"/><img src="/assets/images/technical_kana.png" alt="株式会社テクニカル" class="logo-kana"></a></h1>
      <nav class="nav" id="g-nav">
        <div id="g-nav-list">
          <ul class="nav-menu">
            <li class="nav-menu-item"><a href="/company.html">会社案内</a></li>
            <li class="nav-menu-item"><a href="/service.html">サービス内容</a></li>
            <li class="nav-menu-item"><a href="/#plan">料金プラン</a></li>
            <li class="nav-menu-item"><a href="/contact/contact.php">お問合わせ</a></li>
          </ul>
        </div>
        <div class="openbtn"><span></span><span></span><span></span></div>
      </nav>
      <div class="circle-bg"></div>
    </div>
    <div> </div>
  </header>
  <!-- main -->
  <main class="l-main" id="page"> 
    <!-- hero image -->
    <section class="l-content-expanded hero contact-hero">
      <div class="hero-copy">
        <h2>お問合わせ</h2>
      </div>
    </section>
    <!-- contact -->
    <section class="l-content-fixed" id="contactForm">
		 <form action="/contact/confirm.php" method="post">
            <input type="hidden" name="name_last" value="<?php echo $name_last; ?>">
			<input type="hidden" name="name_first" value="<?php echo $name_first; ?>">
            <input type="hidden" name="kana_last" value="<?php echo $kana_last; ?>">
			<input type="hidden" name="kana_first" value="<?php echo $kana_first; ?>">
            <input type="hidden" name="zip11" value="<?php echo $zip11; ?>">
			<input type="hidden" name="addr11" value="<?php echo $addr11; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="contact_item" value="<?php echo $contact_item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
			 
      <h4 class="section-description">お問い合わせ確認<br>入力内容を確認してください。 前のページに戻って修正する場合は、「戻る」ボタンを<br>送信する場合は、「送信」ボタンをクリックしてください。 </h4>
		<div class="section-form">
		<div class="form-confirm">
		<label>お名前：</label><p><?php print htmlspecialchars($name_last.$name_first, ENT_QUOTES, 'UTF-8'); ?>様</p></div>
		<div class="form-confirm">
		<label>フリガナ：</label><p><?php print htmlspecialchars($kana_last.$kana_first,ENT_QUOTES, 'UTF-8'); ?>サマ</P></div>
		<div class="form-confirm">
		<label>ご住所：</label><p><?php print htmlspecialchars($zip11.$addr11,ENT_QUOTES, 'UTF-8'); ?></p></div>
		<div class="form-confirm">
		<label>お電話番号：</label><p><?php print htmlspecialchars($tel,ENT_QUOTES, 'UTF-8'); ?></p></div>
		<div class="form-confirm">
		<label>メールアドレス：</label><p><?php print htmlspecialchars($email,ENT_QUOTES, 'UTF-8'); ?></p></div>
		<div class="form-confirm">
		<label>お問い合わせ項目：</label><p><?php print htmlspecialchars($contact_item,ENT_QUOTES, 'UTF-8'); ?></p></div>
		<div class="form-confirm">
		<label>お問い合わせ内容：</label><p><?php print htmlspecialchars($content,ENT_QUOTES, 'UTF-8'); ?></p>
			</div>
			 <?php if(isset($err_msg)){ ?>
			 <?php foreach ($err_msg as $err) { ?>
                <p class="err"><p>【エラーメッセージ・・再入力ください。】</p>
			 <?php print htmlspecialchars($err,ENT_QUOTES, 'UTF-8'); ?></p>
        <?php } ?>
		<?php } ?>
		</div>
      <div class="section-submit">
		<div class="button_wrap_return"><input type="button" value="戻る" class="btn submit-btn" onclick="history.back(-1)"></div>
		  <?php if(empty($err_msg)){ ?>
	    <div class="button_wrap_submit">
	    <?php echo '<button type="submit" name="submit" class="btn submit-btn">送信</button>'; ?>
		  </div> <?php } ?>
		  
         </div>
        </form>
    </section>
     </main>
  <!-- footer -->
  <footer class="l-content-expanded footer">
    <div class="l-content-fixed">
      <nav class="nav">
        <ul class="nav-menu">
          <li class="nav-menu-item"><a href="/company.html">会社案内</a></li>
          <li class="nav-menu-item"><a href="/service.html">サービス内容</a></li>
          <li class="nav-menu-item"><a href="/#plan">料金プラン</a></li>
          <li class="nav-menu-item"><a href="/contact/contact.php">お問合わせ</a></li>
          <li class="nav-menu-item"><a href="/privacy.html">プライバシーポリシー</a></li>
        </ul>
      </nav>
      <div class="footer-content l-2column">
        <div class="l-column footer-logoL"><a href="/index.html"><img src="/assets/images/logo.png" alt="株式会社テクニカルのロゴ"/><img src="/assets/images/technical_kana.png" alt="" class="logo-kana">
          <address>
          〒730-0854 広島県広島市中区土橋6-33<br>
          TEL:082-294-2400 FAX：082-234-1182
			</address></a>
        </div>
        <div class="l-column footer-logoR"><a href="/index.html">
			<p>広島でリフォームをご検討中の方へ<img src="/assets/images/mago_logo.svg" alt="まごの手俱楽部のロゴ"/></p></a>
        </div>
      </div>
      <p class="footer-copy"><small> &copy; 2021 株式会社テクニカル All Rights Reserved.</small></p>
    </div>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<script src="/assets/js/script.js"></script>
</body>
</html>

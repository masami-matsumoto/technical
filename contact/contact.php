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
      <h1 class="header-logo"><a href="/index.html"><img src="/assets/images/logo.png" alt="株式会社テクニカルのロゴ"/><img src="/assets/images/technical_kana.png" alt="株式会社テクニカル" class="logo-kana"></a></h1>
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
      <h4 class="section-description">ご質問やお見積りの依頼などありましたら<br>
        下記のフォームに記載して送信ボタンを押してください。<br>
        後ほど弊社よりご連絡をさせていただきます。</h4>
      <div class="section-form">
        <form class="form-simple" name="form" method="POST" action="/contact/confirm.php" onsubmit="return validate()">
			
          <p class="form-label">お名前<span class="required">必須</span></p>
          <div class="form-col">
            <label class="form-input">
              <input type="text" name="name_last" placeholder="姓"required>
            </label>
            <label class="form-input">
              <input type="text" name="name_first" placeholder="名"required>
            </label>
          </div>
			
          <p class="form-label">フリガナ<span class="required">必須</span></p>
          <div class="form-col">
            <label class="form-input">
              <input type="text" name="kana_last" placeholder="セイ"required>
            </label>
            <label class="form-input">
              <input type="text" name="kana_first" placeholder="メイ"required>
            </label>
          </div>
			
          <p class="form-label">住所<span class="required">必須</span></p>
			<div class="form-col-zip">
          <label class="form-input">
            <input type="text" name="zip11" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" placeholder="123-4567"required>
          </label>
			</div>
				<div class="form-col-full">
          <label class="form-input">
            <input type="text" name="addr11" placeholder="広島県広島市○○丁目○○番地"required>
          </label>
			</div>
			
          <p class="form-label">電話番号<span class="required">必須</span></p>
			<div class="form-col">
          <label class="form-input">
            <input type="text" name="tel" placeholder="090-1234-5678"required>
          </label>
			</div>
			
          <p class="form-label">メールアドレス<span class="required">必須</span></p>
			<div class="form-col-full">
          <label class="form-input">
            <input type="text" name="email" placeholder="abc@example.co.jp"required>
          </label>
			</div>
			
          <p class="form-label">お問合わせ項目<span class="required">必須</span></p>
			<div class="form-col">
		  <select name="contact_item">
                        <option value="1">お問い合わせ項目をお選びください</option>
                        <option value="お見積り依頼">お見積り依頼</option>
		                <option value="作業内容">作業内容</option>
		 　　　　　　　　　<option value="その他お問い合わせ">その他お問い合わせ</option>
                    </select>
			</div>
			
          <p class="form-label">お問合わせ内容<span class="required">必須</span></p>
			<div class="form-col-full">
          <p class="form-input">
            <textarea name="content" rows="15" placeholder="お問合わせ内容を入力してください。"required></textarea>
          </p>
				</div>
			
			
          <div class="section-description"><a href="/privacy.html">個人情報の取扱い内容についてはこちらから確認くださいませ。</a></div>
          <p>個人情報の取扱いにご同意いただけましたらチェックを入れてください。<span class="required">必須</span></p>
          <p class="form-checkbox">
            <label>内容を確認したので同意する。
              <input type="checkbox" name="agree"required>
            </label>
          </p>
			<div class="form-btn-holder">
          <div class="form-btn-holder-submit">
            <button type="submit" class="btn submit-btn">確認する</button>
          </div>
			</div>
        </form>
      </div>
		
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

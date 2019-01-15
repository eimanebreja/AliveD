<?php get_header();?>
<section>
    <div class="contact-header-page">
      <div class="header-section">
      </div>
  </section>
  <section>
    <div class="contact-section-page">
      <div class="contact-title">
        <h1><b>お問い合わせ</b></h1> <br>
        <h2> 下記フォームへ入力し【送信】ボタンを押してください。</h2>
      </div>
      <div class="contact-body-content">
      <?php
if (isset($_POST['send'])) {
    $to = "nimuel24@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['full_name'];
    $subject = "ALIVE D";
    $message = "お名前 : " . $name . "\n" . "メールアドレス : " . $from . "\n" . "お問い合わせ内容 : " . $_POST['message'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    echo '<script type="text/javascript">alert("Thankyou to your contact!");</script>';

}
?>
        <div class="container">
          <form method="POST">
            <ul class="form-style">
              <li><input type="text" name="full_name" class="field-divided" placeholder="お名前" required /></li>
              <li>
                <input type="email" placeholder="メールアドレス" name="email" class="field-long" required />
              </li>
              <li>
                <textarea name="message" id="field5" class="field-long field-textarea" placeholder="お問い合わせ内容" required ></textarea>
              </li>
              <li>
                <br>
                <br>
                <input type="submit" name="send" value="送信" />
              </li>
            </ul>
          </form>
        </div>

      </div>
    </div>


  </section>
  <?php get_footer();?>
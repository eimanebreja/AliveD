<section id="contact">
    <div class="footer-section">
      <a href="/alive/contact" class="btn-small waves-effect waves-light btn">CONTACT</a>
      <div class="footer-text-body">
      <div class="hide-on-small-only">
        <div class="footer-text-align">
          <div class="row">
			  
			              <div class="col s4 m4 l4">
              <p class="left-text">会社名</p>
            </div>
            <div class="col s8 m8 l8"><br>
              <p class="right-text">株式会社ALIVE D</p>
            </div>

			              <div class="col s4 m4 l4">
				<p class="left-text">【引受先保険会社】</p>
            </div>
            <div class="col s8 m8 l8">
              <p class="right-text">東京海上日動火災保険株式会社<br>
															東京海上日動あんしん生命保険株式会社</p>
            </div>

			  
			  <div class="col s4 m4 l4">
              <p class="left-text">所在地情報</p>
            </div>
            <div class="col s8 m8 l8">
              <p class="right-text">〒105-0003 東京都港区西新橋2-4-3プロス西新橋ビル709</p>
            </div>
  

          </div>
          </div>

        </div>
        <div class="hide-on-med-and-up show-on-small">
        <div class="footer-text-align">
          <div class="row">
            <div class="col s4 m4 l4">
              <p class="left-text">会社名</p>
            </div>
            <div class="col s8 m8 l8"><br>
              <p class="right-text"> 株式会社ALIVE D</p>
				</div>
			  
            <div class="col s4 m4 l4">
				<p class="left-text">【引受先保険会社】</p>
            </div>
            <div class="col s8 m8 l8">
              <p class="right-text">東京海上日動火災保険株式会社<br>
															東京海上日動あんしん生命保険株式会社</p>
            </div>

			              <div class="col s4 m4 l4">
				<p class="left-text">所在地情報</p>
            </div>
            <div class="col s8 m8 l8">
              <p class="right-text">〒105-0003<br>東京都港区西新橋2-4-3<br>プロス西新橋ビル709</p>
            </div>

 
			
			</div>
        </div>
</div>



      </div>
    </div>
    </div>
    <div class="hide-on-small-only">
      <div class="above-footer">
        <div class="row">
          <div class="col s12 m4 l4">
            <img src="<?php bloginfo('template_url');?>/assets/images/header-text-icon.png">
          </div>
          <div class="col s12 m4 l4">
            <p class="policy-text">
            <a href="/alive/privacy-policy"> Privacy Policy </a> | Copyright © 2018. All Rights Reserved </p>
          </div>
          <div class="col s12 m4 l4">
            <p>
            &nbsp;
          </div>
        </div>
      </div>
    </div>
    <div class="hide-on-med-and-up show-on-small">
      <div class="above-footer-small">
        <div class="row">
          <div class="col s12 m4 l4">
            <img src="<?php bloginfo('template_url');?>/assets/images/header-text-icon.png">
          </div>
          <div class="col s12 m4 l4">
            <p>
            <a href="/alive/privacy-policy"> Privacy Policy </a> | Copyright © 2018. All Rights Reserved </p>
          </div>
          <div class="col s12 m4 l4">
            <p>
            &nbsp;
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php bloginfo('template_url');?>/assets/js/jquery-2.2.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/assets/js/init.js"></script>
  <script src="<?php bloginfo('template_url');?>/assets/js/materialize.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/assets/js/materialize.js"></script>
  <script type="text/javascript">
    $(function () {
      $(document).ready(function () {
        $("#link_concept").click(function (e) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
          }, 1000);
        });
      });
      $(document).ready(function () {
        $("#link_service").click(function (e) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
          }, 1000);
        });
      });
      $(document).ready(function () {
        $("#link_company").click(function (e) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
          }, 1000);
        });
      });
      $(document).ready(function () {
        $("#link_contact").click(function (e) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
          }, 1000);
        });
      });
      $(document).ready(function () {
        $("#link_concepto").click(function (e) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
          }, 1000);
        });
      });
    });
  </script>
  <script>
 function bindEvent(e, eventName, callback) {
    if(e.addEventListener) // new browsers
        e.addEventListener(eventName, callback, false);
    else if(e.attachEvent) // IE
        e.attachEvent('on'+ eventName, callback);
};

bindEvent(document.body, 'scroll', function(e) {
    document.body.scrollLeft = 0;
});
    </script>
  <?php wp_footer();?>

</body>

</html>

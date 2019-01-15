<?php get_header();?>
<section>
    <div class="company-header-page">
      <div class="header-section">
      </div>
  </section>

  <section>
    <div class="company-page-content">
      <div class="container">
        <div class="company-text-title">
          <h1><b>会社概要</b></h1>
        </div>
        <hr>
        <div class="company-body-content">
          <h2 class="title-body-content">
            会社情報
          </h2>
            <div class="hide-on-small-only">
              <div class="body-content">
                <div class="row">
                  <div class="col s4 m3 l3">
                    <p class="text-right-co">社名</p>
                  </div>
                  <div class="col s1 m1 l1">
                    <p>:</p>
                  </div>
                  <div class="col s7 m8 l8">
                    <p>株式会社ALIVE D</p>
                  </div>
                  <div class="col s4 m3 l3">
                    <p class="text-right-co">代表取締役</p>
                  </div>
                  <div class="col s1 m1 l1">
                    <p>:</p>
                  </div>
                  <div class="col s7 m8 l8">
                    <p>井村 弾</p>
                  </div>
                  <div class="col s4 m3 l3">
                    <p class="text-right-co">所在地</p>
                  </div>
                  <div class="col s1 m1 l1">
                    <p>:</p>
                  </div>
                  <div class="col s7 m8 l8">
                    <p>〒105-0003 東京都港区西新橋2-4-3プロス西新橋ビル709</p>
                  </div>
                  <div class="col s4 m3 l3">
                    <p class="text-right-co">資本金</p>
                  </div>
                  <div class="col s1 m1 l1">
                    <p>:</p>
                  </div>
                  <div class="col s7 m8 l8">
                    <p>100万円 </p>
                  </div>
                  <div class="col s4 m3 l3">
                    <p class="text-right-co">取引先金融機関</p>
                  </div>
                  <div class="col s1 m1 l1">
                    <p>:</p>
                  </div>
                  <div class="col s7 m8 l8">
                    <p>三菱UFJ銀行</p>
                  </div>
                </div>
             </div>
            </div>

          <div class="container">
            <div class="hide-on-med-and-up show-on-small">
              <div class="container">
                <div class="company-info-body">
                  <p class="title-company">
                    社名
                  </p>
                  <p class="sub-title-company">
                    株式会社ALIVE D
                  </p>
                  <hr>
                  <p class="title-company">
                    代表取締役
                  </p>
                  <p class="sub-title-company">
                    井村 弾
                  </p>
                  <hr>
                  <p class="title-company">
                    所在地
                  </p>
                  <p class="sub-title-company">
                  〒105-0003 <br>東京都港区西新橋2-4-3<br>プロス西新橋ビル709
                  </p>
                  <hr>
                  <p class="title-company">
                    資本金
                  </p>
                  <p class="sub-title-company">
                    100万円
                  </p>
                  <hr>
                  <p class="title-company">
                    取引先金融機関
                  </p>
                  <p class="sub-title-company">
                    三菱UFJ銀行
                  </p>
                  <hr>

                </div>


              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="company-body-content">
          <h2 class="title-body-content">
            アクセス
          </h2>
          <div class="container">
            <div class="map z-depth-2" id="Nishi-Shinbash">

            </div>

            <p class="body-content">
              東京メトロ虎ノ門駅より徒歩3分 <br>
              JR新橋駅より徒歩7分 <br>
              都営三田線内幸町駅より徒歩5分
            </p>
          </div>
        </div>
        <hr>
        <div class="company-body-content">
          <h2 class="title-body-content" id="recruit">
            リクルート
          </h2>
          <div class="container">
            <p class="body-content">
              ALIVE Dでは、私たちの理念に共感するメンバーの募集をしています。<br>
              ご興味のある方はコンタクトフォームよりご連絡ください。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function myMap() {
      var mapProp = {
        center: new google.maps.LatLng(35.667567, 139.752464),
        zoom: 17,
      };
      var map1 = new google.maps.Map(document.getElementById("Nishi-Shinbash"), mapProp);
      var marker1 = new google.maps.Marker({
        position: { lat: 35.667567, lng: 139.752464 },
        map: map1,
        // icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
        title: 'Main Office'
      });

    }

  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOZ4601cRnFQ7h5YljZNYFeO7ErGmxkMs&callback=myMap"></script>

  <?php get_footer();?>

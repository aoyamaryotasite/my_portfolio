<?php
/*
 * Template Name: メーカー別相場
 *
*/
?>

<?php get_header(); ?>




<?php $url = $_SERVER['REQUEST_URI']; ?>
<?php if ( strstr($url,'maker')==true ): ?>
  <style>
    #maker{
      max-width:1020px;
      margin:0 auto;
    }
    #maker h2 {
      position: relative;
      font-size: calc(0.8rem + .9vw);
      padding: 12px 15px;
      margin-bottom: 0;
      margin-left: 10px;
      line-height: 1;
      color: #000;
    }
    #maker h2 img{
      width: 35px;
      margin-bottom:4px
    }
    #maker h2::before {
      position: absolute;
      left: 5px;
      top: 5px;
      content: "";
      height: 100%;
      width: 4px;
      background-color: #FF5C00;
      height: calc(100% - 12px);
    }
    .text-element h1 {
      text-align: center;
    }
    #maker h2 {
      border: solid 1px #CDCDCD;
      box-shadow: 2px 3px 1px #eee;
      margin: 0 auto 30px auto;
      width: 100%;
    }
    #maker ul {
      list-style: none;padding: 0;
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      margin: 30px auto;
      line-height: 2.4;
    }
    #maker a {
      text-decoration: none;
      color:#000;
      font-weight: bold;
    }
    #maker li {
      position: relative;
      width: 20%;
      padding-left: 20px;
      font-weight:bold;
      color:#000;
    }
    #maker li::before {
      position: absolute;
      left: 0;
      content: "〇";
      display: inline-block;
    }
    section#banner-text-car .inner {
      margin: 0 auto;
    }
    
    @media (min-width: 768px) {
      .banner-text-detail {
        margin: 0;
      }
      .text-element h2, .text-element h1 {
        font-size: 28px;
        font-weight: 800;
        margin: 20px auto 0 auto;
      }
      .text-element h2 {
        margin-bottom: 30px;
      }
      .text-element {
        text-align: left;
      }
      #maker a:hover {
        color: #ff9e67;
      }
      .car-detail-page-btn,
      #car-list-icon {
        margin-bottom: 60px;
        padding: 0;
      }
      .car-list-content h2 {
        text-align: center;
      }
    }
    @media (max-width: 1050px) {
      #maker ul {
        font-size: 0.9rem;
      }
    }
    @media (max-width: 950px) {
      #maker ul {
        font-size: 0.8rem;
      }
    }
    @media (max-width: 949px) {
      #maker li {
        width: 33%;
      }
      #maker ul {
        font-size: 1.2rem;
      }
    }
    @media (max-width: 768px) {
      #maker li {
        width: 50%;
      }
      #maker h2 img{
        margin-bottom:0px
      }
    }
    @media (max-width: 500px) {
      #maker h2 {
        width: 98%;
        margin-bottom: 0px;
      }
      #maker ul {
        display: block;
        font-size: 1rem;
        width: 100%;
        padding: 0;
        margin-top: 15px;
      }
      #maker li {
        width: 100%;
        padding: 0 0 5px 0;
        border-bottom: solid 1px #ddd;
        padding-left: 5px;
      }
      #maker li:nth-last-child(1) {
        border-width: 0;
      }
      #maker li a {
        display: inline-block;
        width: 100%;
        
      }
      #maker li::before {
        content: none;
      }
      .text-element h1 {
        font-size: 18px;
      }
    }

  </style>


<section id="banner-text-car" style="padding-top:100px;">
  <div class="inner">
    <div class="banner-text-content">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/" class="" ><span property="name">TOP</span></a><meta property="position" content="1"></span> &gt; 
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/marketprice" class="" ><span property="name">中古車買取相場</span></a><meta property="position" content="2"></span> &gt; 
            <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">メーカーから探す</span><meta property="url" content="https://ctn-net.jp/kaitori/car/marketprice/maker/"><meta property="position" content="3"></span>
          </div>
      <div class="banner-text-detail">
      <div class="text-element">
        <h1>メーカーから中古車買取相場を探す</h1>
      </div>
      </div>
    </div>
  </div>
</section>

  
    
<section id="maker">
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/japan.png">日本</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lexus/">レクサス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/toyota/">トヨタ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/nissan/">日産</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/honda/">ホンダ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mazda/">マツダ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/suzuki/">スズキ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/daihatsu/">ダイハツ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/subaru/">スバル</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi/">三菱</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mitsuoka-motor/">光岡自動車</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/isuzu/">いすゞ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/hino-motors/">日野自動車</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi-fuso/">三菱ふそう</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/zero-sports/">ゼロスポーツ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/tommykaira/">トミーカイラ</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/usa.png">アメリカ</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/jeep/">ジープ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ford/">フォード</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/tesla/">テスラ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/chrysler/">クライスラー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/chevrolet/">シボレー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/cadillac/">キャデラック</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lincoln/">リンカーン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/gmc/">GMC</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/dodge/">ダッジ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ktm/">KTM</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/hummer/">ハマー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/saturn/">サターン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/buick/">ビュイック</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/pontiac/">ポンテアック</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercury/">マーキュリー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-lexus/">米国レクサス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-toyota/">米国トヨタ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-nissan/">米国日産</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-honda/">米国ホンダ</a></li>
		<li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-subaru/">米国スバル</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-infinity/">米国インフィニティ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/us-acura/">米国アキュラ</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/uk.png">イギリス</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/landrover/">ランドローバー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/jaguar/">ジャガー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/bentley/">ベントレー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mclaren/">マクラーレン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/astonmartin/">アストンマーティン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/rollsroyce/">ロールスロイス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lotus/">ロータス</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/daimler/">デイムラー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/rover/">ローバー</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/tvr/">TVR</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/morgan/">モーガン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/caterham/">ケータハム</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mg/">MG</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/italia.png">イタリア</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/alfaromeo/">アルファ ロメオ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/fiat/">フィアット</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/maserati/">マセラティ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ferrari/">フェラーリ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lamborghini/">ランボルギーニ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/lancia/">ランチア</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/abarth/">アバルト</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/german.png">ドイツ</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-benz/">メルセデス・ベンツ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/bmw/">BMW</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/audi/">アウディ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/volkswagen/">フォルクスワーゲン</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/porsche/">ポルシェ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/miini/">ミニ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/smart/">スマート</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-amg/">メルセデスAMG</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-maybach/">マイバッハ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/bmwalpina/">BMWアルピナ</a></li>
	  <li><a href="https://ctn-net.jp/kaitori/car/marketprice/opel/">オペル</a></li>
      <!--<li><a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-amg/">AMG</a></li>-->
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/france.png">フランス</h2>
    
    <ul>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/citroen/">シトロエン</a></li>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/peugeot/">プジョー</a></li>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/renault/">ルノー</a></li>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/alpine/">アルピーヌ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/ds-automobiles/">DSオートモビル</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/oranda.png">オランダ</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/donkervoort/">ドンカーブート</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/korea.png">韓国</h2>
    
    <ul>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/hyundai/">ヒュンダイ</a></li>
    </ul>
    
    <h2><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/country-logo/sweden.png">スウェーデン</h2>
    
    <ul>
    <li><a href="https://ctn-net.jp/kaitori/car/marketprice/volvo/">ボルボ</a></li>
      <li><a href="https://ctn-net.jp/kaitori/car/marketprice/saab/">サーブ</a></li>
    </ul>
    
    <!--<h2>オーストリア</h2>-->
    
    </section>

    <section class="car-detail-page-btn">
      <div class="inner">
          <div class="car-detail-btn-resize" >
            
              <div class="car-detail-form-btn">
                <ul>
                  <li>
                    <p class="car-detail-but-one">簡単<span class="car-detail-but-number">55秒</span>査定依頼<br class="sp-b"><span class="car-detail-but-text">高価買取店上位3社のみ</span></p>
                    <a href="https://ctn-net.jp/kaitori/car/#form">
                      <p class="car-detail-but-two"><span class="car-detail-but-muri">無料</span>かんたん査定依頼</p>
                    </a>
                  </li>
                </ul>
              </div>
            
          </div>
      </div>
    </section>
    
    <section id="car-list-icon" class="car-list-icon">
      <div class="inner">
        <div class="car-list-content" style="margin-top: 30px;">
          <h2 style="text-align:center;font-weight:bold">ボディタイプから探す</h2>
          <img style="width: 100%;" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
          <div class="car-list-detail">
            <div class="table-flex">
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/light-vehicle/">
                  <div class="icon">
                    <img alt="軽自動車" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/1.png">
                  </div>
                  <div class="label">軽自動車</div>
                </a>    
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/compactcar/">
                  <div class="icon">
                    <img alt="コンパクトカー"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/2.png">
                  </div>
                  <div class="label">コンパクトカー</div>
                </a>
              </div>
              <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/minivan-one-box/">
                  <div class="icon">
                    <img alt="ミニバン/ワンボックス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/3.png">
                  </div>
                  <div class="label">ミニバン・<br class="sp-b">ワンボックス</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/stationwagon/">
                  <div class="icon">
                    <img alt="ステーションワゴン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/4.png">
                  </div>
                  <div class="label">ステーション<br class="sp-b">ワゴン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/suv-cross-country/">
                  <div class="icon">
                    <img alt="SUV・クロカン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/5.png">
                  </div>
                  <div class="label">SUV・クロカン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/sedan/">
                  <div class="icon">
                    <img alt="セダン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/6.png">
                  </div>
                  <div class="label">セダン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/campingcar/">
                  <div class="icon">
                    <img alt="キャンピングカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/7.png">
                  </div>
                  <div class="label">キャンピングカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/coupe/">
                  <div class="icon">
                    <img alt="クーペ" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/8.png">
                  </div>
                  <div class="label">クーペ</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/hatchback/">
                  <div class="icon">
                    <img alt="ハッチバック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/9.png">
                  </div>
                  <div class="label">ハッチバック</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/opencar/">
                  <div class="icon">
                    <img alt="オープンカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/10.png">
                  </div>
                  <div class="label">オープンカー</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/welfare-vehicles/">
                  <div class="icon">
                    <img alt="福祉車両" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/11.png">
                  </div>
                  <div class="label">福祉車両</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/commercialvehicle-van/">
                  <div class="icon">
                    <img alt="商用車・バン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/12.png">
                  </div>
                  <div class="label">商用車・バン</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/truck-bus/">
                  <div class="icon">
                    <img alt="トラック・バス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/13.png">
                  </div>
                  <div class="label">トラック・バス</div>
                </a>
              </div>
              <div class="cell">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/pickup-truck/">
                  <div class="icon">
                    <img alt="ピックアップトラック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/14.png">
                  </div>
                  <div class="label">ピックアップ<br class="sp-b">トラック</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


      </div>
      </div>


            <div id="line-top-2"></div>
  <section class="line-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 tt-line">
          <h2>一括査定の流れ</h2>
        </div>
      </div>
    </div>
  </section>



  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <!--<div class="container" data-aos="fade-up">-->
    <div class="container">
      <div class="content-resize-top">
      <div class="section-header">
        <h2>カンタン4ステップ</h2>
      </div>

      <div class="row gy-4">
        <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
        <div class="col-xl-3 col-md-6 d-flex step-img">
          <div class="member">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check1.png" class="img-fluid" alt="">
            <h4>査定申し込み</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r1.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
        <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
        <div class="col-xl-3 col-md-6 d-flex step-img">
          <div class="member">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check2.png" class="img-fluid" alt="">
            <h4>一括査定</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r2.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
        <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
        <div class="col-xl-3 col-md-6 d-flex step-img">
          <div class="member">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check3.png" class="img-fluid" alt="">
            <h4>必要書類の準備</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r3.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
        <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
        <div class="col-xl-3 col-md-6 d-flex step-img">
          <div class="member">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check4.png" class="img-fluid" alt="">
            <h4>ご入金</h4>
            <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r4.png" loading="lazy"></div>
          </div>
        </div><!-- End Team Member -->
      </div>
      </div>
    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Portfolio Section ======= -->
  <div id="column"></div>
  <section id="portfolio" class="portfolio sections-bg">
    <!--<div class="container" data-aos="fade-up">-->
    <div class="container">
    <div class="content-resize-top">
      <div class="section-header-spe">
        <h3><a href="#">中古車売却のお役たち情報</a></h3>
      </div>

      <div class="row infomation">
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image1.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-season/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image2.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-tax/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image3.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-trouble/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image4.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image5.webp" loading="lazy"></a>
          </div>
        </div>
        <div class="col-lg-4 info-item">
          <div class="info-detail">
            <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image6.webp" loading="lazy"></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section><!-- End Portfolio Section -->



  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <!--<div class="container" data-aos="fade-up">-->
    <div class="container">
    <div class="content-resize-top">
      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="content px-xl-5">
            <h3><strong>よくあるご質問</strong></h3>
            <p>CTNのサービスを利用するにあたりよくあるご質問をまとめました。下記の目次からご覧になりたいものをご選択ください。</p>
          </div>
        </div>

        <div class="col-lg-8">

          <!--<div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">-->
          <div class="accordion accordion-flush" id="faqlist">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <span class="num">1.</span>
                  売却までの流れは？
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTN一括査定では「申し込み」→「査定」→「必要書類の準備」→「ご入金」まで簡単4ステップで愛車を売却できます。<br>
                  必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/">「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」</a>
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <span class="num">2.</span>
                  売却に必要な書類を教えてください。
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  売却時の必要書類については「普通車」・「軽自動車」で異なります。<br>
                  各種書類については<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/">「車の買取時に必要な書類は何？買取金額がアップする書類とは？」</a>
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <span class="num">3.</span>
                  自宅での出張査定や買取をしてもらうことはできるの？
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTN一括査定では多くの中古車販売店が出張査定を対応しております。<br>
                  自宅や希望する場所を指定いただければ、高価買取業者がお伺いさせていただきます。
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <span class="num">4.</span>
                  ローンの残債が残っていても車でも売却できる？
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  愛車のローンが残っていても所有者変更などの手続きが必要になりますが売却可能です。<br>
                  注意点として、売却価格とローンの残債がどちらが大きいかになります。<br>
                  ローンの残債が多い場合は一度完済する必要があります。<br>
                  詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/">「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」</a>
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <span class="num">5.</span>
                  買取は全国対応ですか？
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTN一括査定では全国対応で高価買取いたしますのでお気軽にご連絡ください。(一部離島を除く)
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                  <span class="num">6.</span>
                  買取ができない車両などはありますか？
                </button>
              </h3>
              <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  CTNでは解体、貿易グループとの提携により、廃車、事故車、故障者、不動車など関わらず全ての車両の買取が可能となります。気になる方はまずはご相談ください。
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->


<?php elseif ( strstr($url,'rank-body')==true ): ?>


<style>
  html {
    scroll-padding-top: 150px;
  }
  .banner-text-content h1{
    background-color: #ff5c00;
    text-align: center;
    padding: 10px;
    color: #fff;
    margin-bottom: 60px;
  }
  .maker__famous-car-item-text-market {
    font-size: 15px;
  }
  #bodyTypeRanking {
    font-size: 130%;
    padding-bottom: 0;
  }
  #bodyTypeRanking h1,
  #bodyTypeRanking h2 {
    font-weight: bold;
  }
  #bodyTypeRanking h2 {
    font-size: 120%;
  }
  /*#title-car-page-custom ul*/
  .footerNav ul {
    display: flex;
    gap: 20px;
    margin: 60px 0 90px 0;
    padding: 0 0 3px 0;
    width: 100%;
    justify-content: center;
  }
  /*#title-car-page-custom li*/
  .footerNav li {
    width: 20%;
    border: solid 2px #FF5C00;
    text-align: center;
    border-radius: 20px;
    padding: 3px 0;
    font-weight: bold;
    box-shadow: 1px 2px 5px;
    font-size: 120%;
    position: relative;
  }
  .inner article {
    margin-bottom: 40px;
  }
  .footerNav li:after {
    content: ">";
    display : block;
    position: absolute;
    right: 15px;
    top: 10%;
    color: #ff5c00;
  }
  section#import {
    padding: 10px 0;
  }
  .banner-text-content {
    margin-top: 30px;
    margin-top: 62px;
  }
  .banner-text-detail {
    margin-bottom: 0px;
  }
  #banner-text-car .breadcrumbs {
    padding-top: 0px;
    margin-left: 5px;
    max-width: 1020px;
  }
  #bodyTypeRanking > img {
    width: 100%;
    margin: 0 0 60px 0;
  }
  .maker__famous-car-item-text p span {
    font-size:18px
  }
  @media screen and (min-width: 500px) {
    #bodyTypeRanking .maker__famous-car-item h3 {
      min-height: 26px;
      font-size:14px;
    }
    #bodyTypeRanking .maker__famous-car-item-title {
    left: -5%;
    }
    #bodyTypeRanking .maker__famous-car-item-title {
      width: 74%
    }
    .maker__famous-car-item .-flex img {
      margin-top: 5px;
      margin-bottom: 8px;
    }
    .maker__famous-car-item-text-market {
      width: 84.5%;
    }
    section#banner-text-car .inner {
      max-width: 1020px;
      margin: 0 auto;
    }

    
    
  }
  @media screen and (max-width: 500px) {
    html {
      scroll-padding-top: 60px;
    }
    .maker__famous-car-item-text-market{
      height: 26px;
    }
    #banner-text-car ul {
      margin: 30px 0 0 0;
    }
    section#banner-text-car .inner {
      margin: 30px auto 0 auto;
    }
    /*#title-car-page-custom li*/
    .footerNav  {
      margin-bottom: 60px;
    }
    .footerNav li {
      width: 45%;
      font-size: 110%;
    }
    #banner-text-car {
      padding-top: 0;
    }

    .banner-text-content {
      margin: 0;
    }
    section#banner-text-car {
      padding-top: 23px;
    }
    .text-element {
      padding: 0;
    }
    #banner-text-car .breadcrumbs {
      padding: 0;
      margin: 0 0 0 7%;
    }
    .banner-text-content h1 {
      margin: 45px 0 0 0;
    }
    .maker__famous-car-item {
      margin: 10px 0;
    }
    .maker__famous-car-item {
      width: 100%;
      border-radius: 0;
      box-shadow: none;
    }
    .maker__famous-car-item {
      border-top: 1px solid #ebebeb;
      border-bottom: 1px solid #ebebeb;
      position: relative;
      margin: 0;
      border-left: 0;
    border-right: 0;
    }
    .maker__famous-car-item-title {
      border-width: 0;
      margin: 0;
      padding: 0;
      left:161px;
      padding: 0 10px 0 0;
      text-align: left;
      top: 12px;
      /* position: absolute; */
    }
    .maker__famous-car-item .-flex img {
      margin: 0 5px 5px 5px;

    }
    .maker__famous-car-item-text {
      width: 50%;
      display: block;
      line-height: 1;
      /* top: 50px;
      position: absolute;
      left: 190px; */
    }
    .maker__famous-car-item-text-market {
      background-color: #ee5410;
      color: #fff;
      border-radius: 4px;
      padding: 0 10px;
      font-size: 13px;
      display: inline-block;
      width: auto;
      line-height: 2;
      margin-top: 15px;
    }
    .maker__famous-car-item img.rankingtag {
      z-index: 9;
      left: 5px;
      width: 8%;
    }
    .maker__famous-car-item-text p {
      height: 30px;
      line-height: 1;
      padding: 5px;
      font-size: 24px;
    }
    .maker__famous-car-item-text p span {
      font-size: 24px;
    }
    #bodyTypeRanking h2 {
      font-size: 18px;
      padding: 8px 5px;
      margin-bottom: 0;
      border-left: 8px solid #597c95;
      margin-left: 5px;
    }
    .maker__famous-car-ranking {
      margin-top: 22px
    }
    #bodyTypeRanking > img {
      margin: 0 0 30px 0;
    }
  }
  @media screen and (max-width: 400px) {
    .banner-text-content h1{
      margin-top: 40px;
    }
    .maker__famous-car-item-text-market {
      padding: 0 6px;
      font-size: 13px;
      width: 40%;
      height: 26px;
    }
    .maker__famous-car-item-title {
      left: 153px;
    }
    .maker__famous-car-item-text {
      left: 175px;
    }
    .maker__famous-car-item-text p,
    .maker__famous-car-item-text p span {
      font-size: 18px;
      padding-top: 8px;
    }
    .maker__famous-car-item-title {
      font-size: 16px;
    }
    #banner-text-car .breadcrumbs {
      margin: 0 0 0 3%;
    }
    .hamburger {
      right: 2px;
    }
    .footerNav li:after {
      right: 7px;
    }
  }
</style>

<main>
<?php $idArrayBodytype = [
  //8977, //軽自動車
  8141, //コンパクトカー
  6989, //ハッチバック
  8346, //ミニバン・ワンボックス
  6984, //ステーションワゴン
  8345, //SUV・クロカン
  6993, //ピックアップトラック
  6986, //セダン
  6988, //クーペ
  8159, //オープンカー
  // 8157, //キャンピングカー
  // 8165, //福祉車両
  6990, //商用車・バン
  6991, //トラック・バス
]; ?>

<main>
  
  <section id="banner-text-car">
    <div class="banner-text-content">
      <div class="banner-text-detail">
        <div class="text-element">
          <h1>ボディタイプ別中古車買取相場ランキング</h1>
        </div>
      </div>
      <div class="inner">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/" class="" ><span property="name">TOP</span></a><meta property="position" content="1"></span> &gt; 
          <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/marketprice" class="" ><span property="name">中古車買取相場</span></a><meta property="position" content="2"></span> &gt; 
          <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">ボディタイプ別中古車買取相場ランキング</span><meta property="url" content="https://ctn-net.jp/kaitori/car/marketprice/rank-body/"><meta property="position" content="3"></span>
        </div>
      </div>
    </div>
  </section>
  
  <div class="inner">
    <section id="bodyTypeRanking">
      
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
  
      <?php foreach ($idArrayBodytype as $id) :?>
  
      <article>
        <h2><?php the_field('car_name-title' ,$id); ?>の買取相場ランキング</h2>
        <?php $famouscar1name = get_field('famous_car1-name' ,$id);?>
        <?php $famouscar1image = get_field('famous_car1-image' ,$id);?>
        <?php $famouscar2image = get_field('famous_car2-image' ,$id);?>
        <?php $famouscar3image = get_field('famous_car3-image' ,$id);?>
  
        <div class="-flex justify-sa maker__famous-car-ranking">
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous1.svg" class="rankingtag">
            <h3 class="maker__famous-car-item-title p-rel title1"><?php the_field('famous_car1-name' ,$id); ?></h3>
            <div class="-flex">
              <?php if(!( $famouscar1image=="")):?>
              <img src="<?php the_field('famous_car1-image' ,$id); ?>">
                <?php else:?>
                  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
                <?php endif;?>
                <div class="maker__famous-car-item-text">
                  <div class="maker__famous-car-item-text-market">
                    買取相場
                  </div>
                  <div class="car-price-ran"><p><span><?php the_field('famous_car1-price' ,$id); ?></span>万円～<span><?php the_field('famous_car1-price-max' ,$id); ?></span>万円</p></div>

                </div>
              </div>
          </div>
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous2.svg" class="rankingtag">
            <h3 class="maker__famous-car-item-title p-rel title2"><?php the_field('famous_car2-name' ,$id); ?></h3>
            <div class="-flex">
              <?php if(!( $famouscar2image=="")):?>
              <img src="<?php the_field('famous_car2-image' ,$id); ?>">
              <?php else:?>
              <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
              <?php endif;?>
              <div class="maker__famous-car-item-text">
                <div class="maker__famous-car-item-text-market">
                  買取相場
                </div>
                <div class="car-price-ran"><p><span><?php the_field('famous_car2-price' ,$id); ?></span>万円～<span><?php the_field('famous_car2-price-max' ,$id); ?></span>万円</p></div>

              </div>
            </div>
          </div>
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous3.svg" class="rankingtag">
            <h3 class="maker__famous-car-item-title p-rel title3"><?php the_field('famous_car3-name' ,$id); ?></h3>
            <div class="-flex">
              <?php if(!( $famouscar3image=="")):?>
              <img src="<?php the_field('famous_car3-image' ,$id); ?>">
              <?php else:?>
              <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
              <?php endif;?>
              <div class="maker__famous-car-item-text">
                <div class="maker__famous-car-item-text-market">
                  買取相場
                </div>
                <div class="car-price-ran"><p><span><?php the_field('famous_car3-price' ,$id); ?></span>万円～<span><?php the_field('famous_car3-price-max' ,$id); ?></span>万円</p></div>

              </div>
            </div>
          </div>
        </div>
        <a href="<?php echo get_permalink($id); ?>" style="text-align:right;margin: 0 0 0 auto;display: block;"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">このボディタイプーの相場情報を見る</a>
      </article>
      <?php endforeach; ?>
    </section>
  
    <script>
      const img = document.querySelectorAll('.-flex > img');
        img.forEach(element => {
            
        if (/famous_no\.png/.test(element.src)) {
          console.log(element.src);
          element.style.width = "25%";
          element.style.margin = "40px 5px 0 40px";
        }
      });
          
    </script>
  
    <nav class="footerNav">
      <ul>
        <li><a href="../rank/#domesticProducts">国産車から見る</a></li>
        <li><a href="../rank/#import">輸入車から見る</a></li>
      </ul>
    </nav>
        
  
  </div>
    
  <section id="other-maker">
    <div class="inner maker">
      <!--<h2 style="text-align:center;font-weight:bold">その他メーカーから探す</h2>-->
      <h2 style="text-align:center;font-weight:bold">その他メーカーから探す</h2>
      <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
      <h3 class="maker-type-name">国産車</h3>
      <div class="maker-modal-content -flex">
        <ul class="maker-list">
        <a href="https://ctn-net.jp/kaitori/car/marketprice/lexus/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/lexus.png">
            <p>レクサス</p>
            </li></a>
          <a href="https://ctn-net.jp/kaitori/car/marketprice/toyota/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/toyota.png">
            <p>トヨタ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/honnda/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/honda.png">
            <p>ホンダ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/daihatsu/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/daihatsu.png">
            <p>ダイハツ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/suzuki/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/suzuki.png">
            <p>スズキ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/nissan/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/nissan.png">
            <p>日産</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/mazda/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/matsuda.png">
            <p>マツダ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/subaru/"> <li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/subaru.png">
            <p>スバル</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mitsubishi.png">
            <p>三菱</p>
            </li></a>

            </ul>
            </div>
            <h3 class="maker-type-name">輸入車</h3>
              <div class="maker-modal-content -flex">
            <ul class="maker-list">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-benz/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/benz.png">
            <p>メルセデス<br>ベンツ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/volkswagen/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volkswagen.png">
            <p>フォルクス<br>ワーゲン</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/bmw/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/bmw.png">
            <p>BMW</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/audi/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/audi.png">
            <p>アウディ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/miini/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mini.png">
            <p>ミニ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/volvo/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volvo.png">
            <p>ボルボ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/jeep/"> <li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/jeep.png">
            <p>ジープ</p>
            </li></a>
            <a href="https://ctn-net.jp/kaitori/car/marketprice/peugeot/"><li>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/peugeot.png">
            <p>プジョー</p>
            </li></a>
          </ul>
        </div>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/maker/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">全てのメーカーから買取相場を探す</a></p>
    </div>
  </section>

  <section id="car-list-icon" class="car-list-icon">
    <div class="inner">
      <div class="car-list-content" style="margin-top: 30px;">
        <h2 style="text-align:center;font-weight:bold">ボディタイプから探す</h2>
        <img style="width: 100%;" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
        <div class="car-list-detail">
          <div class="table-flex">
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/light-vehicle/">
                <div class="icon">
                  <img alt="軽自動車" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/1.png">
                </div>
                <div class="label">軽自動車</div>
              </a>    
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/compactcar/">
                <div class="icon">
                  <img alt="コンパクトカー"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/2.png">
                </div>
                <div class="label">コンパクトカー</div>
              </a>
            </div>
            <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/minivan-one-box/">
                <div class="icon">
                  <img alt="ミニバン/ワンボックス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/3.png">
                </div>
                <div class="label">ミニバン・<br class="sp-b">ワンボックス</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/stationwagon/">
                <div class="icon">
                  <img alt="ステーションワゴン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/4.png">
                </div>
                <div class="label">ステーション<br class="sp-b">ワゴン</div>
              </a>
            </div>
            <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/suv-cross-country/">
                <div class="icon">
                  <img alt="SUV・クロカン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/5.png">
                </div>
                <div class="label">SUV・クロカン</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/sedan/">
                <div class="icon">
                  <img alt="セダン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/6.png">
                </div>
                <div class="label">セダン</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/campingcar/">
                <div class="icon">
                  <img alt="キャンピングカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/7.png">
                </div>
                <div class="label">キャンピングカー</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/coupe/">
                <div class="icon">
                  <img alt="クーペ" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/8.png">
                </div>
                <div class="label">クーペ</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/hatchback/">
                <div class="icon">
                  <img alt="ハッチバック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/9.png">
                </div>
                <div class="label">ハッチバック</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/opencar/">
                <div class="icon">
                  <img alt="オープンカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/10.png">
                </div>
                <div class="label">オープンカー</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/welfare-vehicles/">
                <div class="icon">
                  <img alt="福祉車両" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/11.png">
                </div>
                <div class="label">福祉車両</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/commercialvehicle-van/">
                <div class="icon">
                  <img alt="商用車・バン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/12.png">
                </div>
                <div class="label">商用車・バン</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/truck-bus/">
                <div class="icon">
                  <img alt="トラック・バス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/13.png">
                </div>
                <div class="label">トラック・バス</div>
              </a>
            </div>
            <div class="cell">
              <a href="https://ctn-net.jp/kaitori/car/marketprice/pickup-truck/">
                <div class="icon">
                  <img alt="ピックアップトラック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/14.png">
                </div>
                <div class="label">ピックアップ<br class="sp-b">トラック</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    
    
</div>
</div>

<div id="line-top-2"></div>
<section class="line-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 tt-line">
      <h2>一括査定の流れ</h2>
    </div>
  </div>
</div>
</section>
    
    
    
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team">
        <!--<div class="container" data-aos="fade-up">-->
        <div class="container">
          <div class="content-resize-top">
          <div class="section-header">
            <h2>カンタン4ステップ</h2>
          </div>
    
          <div class="row gy-4">
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check1.png" class="img-fluid" alt="">
                <h4>査定申し込み</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r1.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check2.png" class="img-fluid" alt="">
                <h4>一括査定</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r2.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check3.png" class="img-fluid" alt="">
                <h4>必要書類の準備</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r3.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check4.png" class="img-fluid" alt="">
                <h4>ご入金</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r4.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
          </div>
          </div>
        </div>
      </section><!-- End Our Team Section -->
    
      <!-- ======= Portfolio Section ======= -->
      <div id="column"></div>
      <section id="portfolio" class="portfolio sections-bg">
        <!--<div class="container" data-aos="fade-up">-->
        <div class="container">
        <div class="content-resize-top">
          <div class="section-header-spe">
            <h3><a href="#">中古車売却のお役たち情報</a></h3>
          </div>
    
          <div class="row infomation">
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image1.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-season/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image2.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="column/car-purchase-tax/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image3.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-trouble/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image4.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image5.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image6.webp" loading="lazy"></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section><!-- End Portfolio Section -->
    
    
    
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <!--<div class="container" data-aos="fade-up">-->
        <div class="container">
        <div class="content-resize-top">
          <div class="row gy-4">
    
            <div class="col-lg-4">
              <div class="content px-xl-5">
                <h3><strong>よくあるご質問</strong></h3>
                <p>CTNのサービスを利用するにあたりよくあるご質問をまとめました。下記の目次からご覧になりたいものをご選択ください。</p>
              </div>
            </div>
    
            <div class="col-lg-8">
    
              <!--<div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">-->
              <div class="accordion accordion-flush" id="faqlist">
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      <span class="num">1.</span>
                      売却までの流れは？
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTN一括査定では「申し込み」→「査定」→「必要書類の準備」→「ご入金」まで簡単4ステップで愛車を売却できます。<br>
                      必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/">「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」</a>
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      <span class="num">2.</span>
                      売却に必要な書類を教えてください。
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      売却時の必要書類については「普通車」・「軽自動車」で異なります。<br>
                      各種書類については<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/">「車の買取時に必要な書類は何？買取金額がアップする書類とは？」</a>
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      <span class="num">3.</span>
                      自宅での出張査定や買取をしてもらうことはできるの？
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTN一括査定では多くの中古車販売店が出張査定を対応しております。<br>
                      自宅や希望する場所を指定いただければ、高価買取業者がお伺いさせていただきます。
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      <span class="num">4.</span>
                      ローンの残債が残っていても車でも売却できる？
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      愛車のローンが残っていても所有者変更などの手続きが必要になりますが売却可能です。<br>
                      注意点として、売却価格とローンの残債がどちらが大きいかになります。<br>
                      ローンの残債が多い場合は一度完済する必要があります。<br>
                      詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/">「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」</a>
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                      <span class="num">5.</span>
                      買取は全国対応ですか？
                    </button>
                  </h3>
                  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTN一括査定では全国対応で高価買取いたしますのでお気軽にご連絡ください。(一部離島を除く)
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                      <span class="num">6.</span>
                      買取ができない車両などはありますか？
                    </button>
                  </h3>
                  <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTNでは解体、貿易グループとの提携により、廃車、事故車、故障者、不動車など関わらず全ての車両の買取が可能となります。気になる方はまずはご相談ください。
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
              </div>
    
            </div>
          </div>
          </div>
      </div>
  </section><!-- End Frequently Asked Questions Section -->
</main><!-- End #main -->


<?php elseif ( strstr($url,'rank')==true ): ?>
  <style>
  .maker__famous-car-item-title {
    left: -5%;
    width: 73%;
    white-space: nowrap;
    font-size: 100%;
  }

  html {
    scroll-padding-top: 150px;
  }
  .banner-text-content h1{
    background-color: #ff5c00;
    text-align: center;
    padding: 10px;
    color: #fff;
    margin-bottom: 60px;
  }
  .maker__famous-car-item-text-market {
    font-size: 15px;
  }
  #domesticProducts h2,
  #import h2 {
    text-align: center;
    margin: 0 0 8px 0;
    font-size: 150%;
  }
  #domesticProducts h3,
  #import h3 {
    font-size: 130%;
  }
  #domesticProducts h2,
  #domesticProducts h3,
  #domesticProducts h4,
  #import h2,
  #import h3,
{
    font-weight: bold;
  }
  /*#title-car-page-custom ul*/
  #banner-text-car ul {
    display: flex;
    gap: 20px;
    margin: 60px auto 0 auto;
    padding: 0 0 3px 0;
    width: 100%;
    max-width: 1020px;
    justify-content: center;

  }
  /*#title-car-page-custom li*/
  #banner-text-car li {
    width: 40%;
  }
  #banner-text-car li a {
    width: 100%;
    border: solid 2px #FF5C00;
    text-align: center;
    border-radius: 20px;
    padding: 3px 0;
    font-weight: bold;
    box-shadow: 1px 2px 1px rgba(0,0,0,0.3);
    font-size: 120%;
    display: block;
  }
  .inner article {
    margin-bottom: 40px;
  }
  .footerLink {
    display: block;
    width: 50%;
    border: solid 2px #FF5C00;
    text-align: center;
    border-radius: 30px;
    padding: 8px 0;
    font-weight: bold;
    box-shadow: 1px 2px 1px rgba(0,0,0,0.3);
    font-size: 120%;
    margin: 10px auto 40px auto;
    position: relative;
    
  }
  .footerLink:after {
    content: ">";
    display : block;
    position: absolute;
    right: 15px;
    top: 17%;
    color: #ff5c00;
  }
  section#import {
    padding: 10px 0;
  }
  .banner-text-content {
    margin-top: 30px;
    margin-top: 62px;
  }
  .banner-text-detail {
    margin-bottom: 0px;
  }
  #banner-text-car .breadcrumbs {
    padding-top: 0px;
    margin-left: 5px;
    max-width: 1020px;
  }
  #domesticProducts h3, #import h3 {
    font-size: 19px;
    padding: 3px 5px;
    border-left: 8px solid #597c95;
    margin-left: 10px;
    margin-bottom: 30px;
  }
  .maker-modal-content {
    padding: 0;
    margin-top: 0;
  }
  .maker-list a:first-child {
    margin-left: 5px;
  }
 #links{
display: block;
padding-top: 200px;
margin-top: -200px;
  }
  @media screen and (min-width: 500px) {
    .maker__famous-car-item h4 {
      min-height: 26px;
      font-size: 14px;
    }
    .maker__famous-car-item .-flex img {
      margin-top: 5px;
      margin-bottom: 8px;
    }
    .maker__famous-car-item-text-market {
      width: 84.5%;
    }
    section#banner-text-car .inner {
      max-width: 1020px;
      margin: 0 auto;
    }
    
    
  }
  @media screen and (max-width: 500px) {
    html {
      scroll-padding-top: 60px;
    }
        margin-top: 30px;
    .maker__famous-car-item:last-child{
      border-bottom:1px solid #ebebeb;
    }
    #banner-text-car ul {
      margin: 30px 0 0 0;
    }
    section#banner-text-car .inner {
      margin: 30px auto 0 auto;
    }
    .footerLink {
      width: 90%;
      font-size: 105%;
    }
    .footerLink:after {
      right: 10px;
      top: 20%;
    }
    /*#title-car-page-custom li*/
    #banner-text-car li {
      width: 40%;
    }
    #banner-text-car li a {
      width: 100%;
      font-size: 110%;
    }
    #banner-text-car {
      padding-top: 0;
    }

    .banner-text-content {
      margin: 0;
    }
    section#banner-text-car {
      padding-top: 23px;
    }
    .text-element {
      padding: 0;
    }
    #banner-text-car .breadcrumbs {
      padding: 0;
      margin: 0 0 0 7%;
    }
    .banner-text-content h1 {
      font-size: 130%;
      margin: 45px 0 0 0;
    }
    .maker__famous-car-item {
      margin: 10px 0;
    }
    .maker__famous-car-item {
      width: 100%;
      border-radius: 0;
      box-shadow: none;
    }
    .maker__famous-car-item {
      border-top: 1px solid #ebebeb;
      border-width: 1px 0 0 0;
      position: relative;
      margin: 0;
    }
    .maker__famous-car-item-title {
      border-width: 0;
      margin: 0;
      padding: 0;
      left: 205px;
      width: auto;
      text-align: left;
      top: 12px;
      position: absolute;
    }
    .maker__famous-car-item .-flex img {
      margin: 0 5px 10px 10px;

    }
    .maker__famous-car-item-text {
      width: 50%;
      display: block;
      line-height: 1;
      top: 30px;
      position: absolute;
      left: 205px;
    }
    .maker__famous-car-item-text-market {
      background-color: #ee5410;
      color: #fff;
      border-radius: 4px;
      padding: 0 10px;
      font-size: 13px;
      display: inline-block;
      width: auto;
      line-height: 2;
      margin-top: 5px;
    }
    .maker__famous-car-item img.rankingtag {
      z-index: 9;
      left: 5px;
      width: 8%;
      top: -7px;
    }
    .maker__famous-car-item-text p {
      height: 30px;
      line-height: 1;
      padding: 5px;
      font-size: 24px;
    }
    .maker__famous-car-item-text p span {
      font-size: 24px;
    }
    #domesticProducts h3 {
      font-size: 18px;
      padding: 8px 5px;
      border-left: 8px solid #597c95;
      margin-left: 5px;
    }
    .maker__famous-car-ranking {
      margin-top: 22px
    }
    .maker-list a {
      width: 22%;
      height: 77px;
      border-radius: 5px;
      border: 1px solid #CECECE;
      margin: 5px;
    }
  }
  @media screen and (max-width: 415px) {
    .maker__famous-car-item-text p,
    .maker__famous-car-item-text p span {
      font-size: 22px;
    }
    .maker__famous-car-item-text-market {
      margin-top: 5px;
    }
  }
  @media screen and (max-width: 400px) {
    .banner-text-content h1{
      font-size: 110%;
      margin-top: 40px;
    }
    .maker__famous-car-item-text-market {
      padding: 0 6px;
      font-size: 13px;
      width: 40%;
    }
    .maker__famous-car-item-title {
      left: 180px;
    }
    .maker__famous-car-item-text {
      left: 180px;
    }
    .maker__famous-car-item-text p,
    .maker__famous-car-item-text p span {
      font-size: 18px;
      padding-top: 8px;
    }
    .maker__famous-car-item-title {
      font-size: 18px;
    }
    #banner-text-car .breadcrumbs {
      margin: 0 0 0 6%;
    }
    .footerLink {
      font-size: 93%;
    }
    .hamburger {
      right: 2px;
    }

  }
  @media screen and (max-width: 390px) {
    #domesticProducts h3, #import h3 {
      font-size: 18px;
    }
  }
  @media screen and (max-width: 380px) {
    #domesticProducts h3, #import h3 {
      font-size: 120%;
    }
  }
</style>

<main>
<?php $idArrayDomestic = [
  6872, //レクサス
  6867, //トヨタ
  5066, //日産
  6869, //ホンダ
  6870, //マツダ
  8152, //スズキ
  6871, //ダイハツ
  6873, //スバル
  8149, //三菱
  6967, //光岡自動車
  6961, //いすゞ
  6969, //日野自動車
  6965, //三菱ふそう
  8155, //ゼロスポーツ
  //6963, //トミーカイラ
];
$idArrayImport = [
  6882, //JEEP(ジープ)
  6884, //フォード
  6931, //テスラ
  6899, //クライスラー
  8332, //シボレー
  6901, //キャデラック
  6903, //リンカーン
  6971, //GMC
  6922, //ダッジ
  //8327, //KTM
  6924, //ハマー
  //6973, //サターン
  //6905, //ビュイック
  //6975, //ポンテアック
  //6977, //マーキュリー
  //8163, //米国レクサス
  //8161, //米国トヨタ
  //6982, //米国日産
  //6981, //米国ホンダ
  //米国スバル
  //8344, //米国インフィニティ
  //6979, //米国アキュラ
  6897, //ランドローバー
  6894, //ジャガー
  6909, //ベントレー
  6943, //マクラーレン
  6940, //アストンマーティン
  6946, //ロールスロイス
  6911, //ロータス
  //8343, //デイムラー
  //8167, //ローバー
  //6939, //TVR
  6945, //モーガン
  6942, //ケータハム
  //6937, //MG
  6888, //アルファロメオ
  6881, //フィアット
  6913, //マセラティ
  6917, //フェラーリ
  8328, //ランボルギーニ
  //6915, //ランチア
  //6927, //アバルト
  6957, //メルセデスベンツ
  6875, //BMW
  6877, //アウディ
  6876, //フォルクスワーゲン
  6895, //ポルシェ
  6878, //MIINI(ミニ)
  6893, //スマート(smart)
  //6950, //メルセデスAMG
  //6948, //メルセデス・マイバッハ
  //6920, //BMWアルピナ
  //オペル
  6886, //シトロエン
  6879, //プジョー
  6883, //ルノー
  6935, //アルピーヌ
  6933, //DSオートモビル
  //6959,  //ドンカーブート
  6921, //ヒョンデ（ヒュンダイ）
  6880, //ボルボ
  //6919, //サーブ
]; ?>

<main>
  
  <section id="banner-text-car">
    <div class="banner-text-content">
      <div class="banner-text-detail">
        <div class="text-element">
          <h1>メーカー別中古車買取相場ランキング</h1>
        </div>
      </div>
      <div class="inner">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/" class="" ><span property="name">TOP</span></a><meta property="position" content="1"></span> &gt; 
          <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/marketprice" class="" ><span property="name">中古車買取相場</span></a><meta property="position" content="2"></span> &gt; 
          <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">メーカー別中古車買取相場ランキング</span><meta property="url" content="https://ctn-net.jp/kaitori/car/marketprice/rank/"><meta property="position" content="3"></span>
        </div>
      </div>
    </div>
    <nav>
      <ul>
        <li><a href="./#domesticProducts">国産車から見る</a></li>
        <li><a href="./#import">輸入車から見る</a></li>
      </ul>
    </nav>
  </section>
  
  <div class="inner">
    <section id="domesticProducts">
      <h2>メーカー(国産)から相場を見る</h2>
      <img style="width: 100%; margin:0 0 30px 0;" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
  
      <?php foreach ($idArrayDomestic as $id) :?>
  
      <article>
        <h3><?php the_field('car_name-title' ,$id); ?>の買取相場ランキング</h3>
        <?php $famouscar1name = get_field('famous_car1-name' ,$id);?>
        <?php $famouscar1image = get_field('famous_car1-image' ,$id);?>
        <?php $famouscar2image = get_field('famous_car2-image' ,$id);?>
        <?php $famouscar3image = get_field('famous_car3-image' ,$id);?>
  
        <div class="-flex justify-sa maker__famous-car-ranking">
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous1.svg" class="rankingtag">
            <h4 class="maker__famous-car-item-title p-rel title1"><?php the_field('famous_car1-name' ,$id); ?></h4>
            <div class="-flex">
              <?php if(!( $famouscar1image=="")):?>
              <img src="<?php the_field('famous_car1-image' ,$id); ?>">
                <?php else:?>
                  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
                <?php endif;?>
                <div class="maker__famous-car-item-text">
                  <div class="maker__famous-car-item-text-market">
                    買取相場
                  </div>
                  <div class="car-price-ran"><p><span><?php the_field('famous_car1-price' ,$id); ?></span>万円～<span><?php the_field('famous_car1-price-max' ,$id); ?></span>万円</p></div>
                </div>
              </div>
          </div>
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous2.svg" class="rankingtag">
            <h4 class="maker__famous-car-item-title p-rel title2"><?php the_field('famous_car2-name' ,$id); ?></h4>
            <div class="-flex">
              <?php if(!( $famouscar2image=="")):?>
              <img src="<?php the_field('famous_car2-image' ,$id); ?>">
              <?php else:?>
              <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
              <?php endif;?>
              <div class="maker__famous-car-item-text">
                <div class="maker__famous-car-item-text-market">
                  買取相場
                </div>
                <div class="car-price-ran"><p><span><?php the_field('famous_car2-price' ,$id); ?></span>万円～<span><?php the_field('famous_car2-price-max' ,$id); ?></span>万円</p></div>
              </div>
            </div>
          </div>
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous3.svg" class="rankingtag">
            <h4 class="maker__famous-car-item-title p-rel title3"><?php the_field('famous_car3-name' ,$id); ?></h4>
            <div class="-flex">
              <?php if(!( $famouscar3image=="")):?>
              <img src="<?php the_field('famous_car3-image' ,$id); ?>">
              <?php else:?>
              <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
              <?php endif;?>
              <div class="maker__famous-car-item-text">
                <div class="maker__famous-car-item-text-market">
                  買取相場
                </div>
                <div class="car-price-ran"><p><span><?php the_field('famous_car3-price' ,$id); ?></span>万円～<span><?php the_field('famous_car3-price-max' ,$id); ?></span>万円</p></div>
              </div>
            </div>
          </div>
        </div>
        <a href="<?php echo get_permalink($id); ?>" style="text-align:right;margin: 0 0 0 auto;display: block;"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">このメーカーの買取相場をみる</a>

      </article>
      <?php endforeach; ?>
    </section>
  <div id="links"></div>
    <section id="import">
      <h2>メーカー(輸入車)から相場を見る</h2>
      <img style="width: 100%; margin:0 0 30px 0;" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
  
      <?php foreach ($idArrayImport as $id) :?>
  
      <article>
        <h3><?php the_field('car_name-title' ,$id); ?>の買取相場ランキング</h3>
        <?php $famouscar1name = get_field('famous_car1-name' ,$id);?>
        <?php $famouscar1image = get_field('famous_car1-image' ,$id);?>
        <?php $famouscar2image = get_field('famous_car2-image' ,$id);?>
        <?php $famouscar3image = get_field('famous_car3-image' ,$id);?>
        <div class="-flex justify-sa maker__famous-car-ranking">
          <div class="maker__famous-car-item">
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous1.svg" class="rankingtag">
                <h4 class="maker__famous-car-item-title p-rel title1"><?php the_field('famous_car1-name' ,$id); ?></h4>
                <div class="-flex">
                  <?php if(!( $famouscar1image=="")):?>
                    <img src="<?php the_field('famous_car1-image' ,$id); ?>">
                  <?php else:?>
                    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
                  <?php endif;?>
                  <div class="maker__famous-car-item-text">
                    <div class="maker__famous-car-item-text-market">
                      買取相場
                    </div>
                    <div class="car-price-ran"><p><span><?php the_field('famous_car1-price' ,$id); ?></span>万円～<span><?php the_field('famous_car1-price-max' ,$id); ?></span>万円</p></div>

                  </div>
                </div>
              </div>
              <div class="maker__famous-car-item">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous2.svg" class="rankingtag">
                <h4 class="maker__famous-car-item-title p-rel title2"><?php the_field('famous_car2-name' ,$id); ?></h4>
                <div class="-flex">
                  <?php if(!( $famouscar2image=="")):?>
                    <img src="<?php the_field('famous_car2-image' ,$id); ?>">
                  <?php else:?>
                    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
                  <?php endif;?>
                  <div class="maker__famous-car-item-text">
                    <div class="maker__famous-car-item-text-market">
                      買取相場
                    </div>
                    <div class="car-price-ran"><p><span><?php the_field('famous_car2-price' ,$id); ?></span>万円～<span><?php the_field('famous_car2-price-max' ,$id); ?></span>万円</p></div>
                  </div>
                </div>
              </div>
              <div class="maker__famous-car-item">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous3.svg" class="rankingtag">
                <h4 class="maker__famous-car-item-title p-rel title3"><?php the_field('famous_car3-name' ,$id); ?></h4>
                <div class="-flex">
                  <?php if(!( $famouscar3image=="")):?>
                    <img src="<?php the_field('famous_car3-image' ,$id); ?>">
                  <?php else:?>
                    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
                  <?php endif;?>
                  <div class="maker__famous-car-item-text">
                    <div class="maker__famous-car-item-text-market">
                      買取相場
                    </div>
                    <div class="car-price-ran"><p><span><?php the_field('famous_car3-price' ,$id); ?></span>万円～<span><?php the_field('famous_car3-price-max' ,$id); ?></span>万円</p></div>
                  </div>
                </div>
              </div>
            </div>
            <a href="<?php echo get_permalink($id); ?>" style="text-align:right;margin: 0 0 0 auto;display: block;"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">このメーカーの買取相場をみる</a>
          </article>
          <?php endforeach; ?>
        </section>
  
        <script>
          const img = document.querySelectorAll('.-flex > img');
          img.forEach(element => {
            
            if (/famous_no\.png/.test(element.src)) {
              console.log(element.src);
              element.style.height = "25%";
            }
          });
          
        </script>
  
        <a class="footerLink" href="../rank-body/">ボディタイプ別で見る買取相場ランキング</a>
        
  
        </div>
    
        <section id="other-maker">
          <div class="inner maker">
            <!--<h2 style="text-align:center;font-weight:bold">その他メーカーから探す</h2>-->
            <h2 style="text-align:center;font-weight:bold">その他メーカーから探す</h2>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
            <h3 class="maker-type-name">国産車</h3>
            <div class="maker-modal-content -flex">
              <ul class="maker-list">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/lexus/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/lexus.png">
                <p>レクサス</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/toyota/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/toyota.png">
                <p>トヨタ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/honnda/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/honda.png">
                <p>ホンダ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/nissan/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/nissan.png">
                <p>日産</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/suzuki/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/suzuki.png">
                <p>スズキ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/daihatsu/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/daihatsu.png">
                <p>ダイハツ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/mazda/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/matsuda.png">
                <p>マツダ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/subaru/"> <li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/subaru.png">
                <p>スバル</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mitsubishi.png">
                <p>三菱</p>
                </li></a>
              </ul>
            </div>
            <h3 class="maker-type-name">輸入車</h3>
            <div class="maker-modal-content -flex">
              <ul class="maker-list">
                <a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-benz/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/benz.png">
                <p>メルセデス<br>ベンツ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/bmw/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/bmw.png">
                <p>BMW</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/volkswagen/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volkswagen.png">
                <p>フォルクス<br>ワーゲン</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/audi/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/audi.png">
                <p>アウディ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/miini/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mini.png">
                <p>ミニ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/volvo/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volvo.png">
                <p>ボルボ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/jeep/"> <li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/jeep.png">
                <p>ジープ</p>
                </li></a>
                <a href="https://ctn-net.jp/kaitori/car/marketprice/peugeot/"><li>
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/peugeot.png">
                <p>プジョー</p>
                </li></a>
              </ul>
            </div>
            <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/maker/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">全てのメーカーから買取相場を探す</a></p>

          </div>
        </section>
    
        <section id="car-list-icon" class="car-list-icon">
          <div class="inner">
            <div class="car-list-content" style="margin-top: 30px;">
              <h2 style="text-align:center;font-weight:bold">ボディタイプから探す</h2>
              <img style="width: 100%;" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
              <div class="car-list-detail">
                <div class="table-flex">
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/light-vehicle/">
                      <div class="icon">
                        <img alt="軽自動車" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/1.png">
                      </div>
                      <div class="label">軽自動車</div>
                    </a>    
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/compactcar/">
                      <div class="icon">
                        <img alt="コンパクトカー"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/2.png">
                      </div>
                      <div class="label">コンパクトカー</div>
                    </a>
                  </div>
                  <div class="cell">
                  <a href="https://ctn-net.jp/kaitori/car/marketprice/minivan-one-box/">
                      <div class="icon">
                        <img alt="ミニバン/ワンボックス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/3.png">
                      </div>
                      <div class="label">ミニバン・<br class="sp-b">ワンボックス</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/stationwagon/">
                      <div class="icon">
                        <img alt="ステーションワゴン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/4.png">
                      </div>
                      <div class="label">ステーション<br class="sp-b">ワゴン</div>
                    </a>
                  </div>
                  <div class="cell">
                  <a href="https://ctn-net.jp/kaitori/car/marketprice/suv-cross-country/">
                      <div class="icon">
                        <img alt="SUV・クロカン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/5.png">
                      </div>
                      <div class="label">SUV・クロカン</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/sedan/">
                      <div class="icon">
                        <img alt="セダン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/6.png">
                      </div>
                      <div class="label">セダン</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/campingcar/">
                      <div class="icon">
                        <img alt="キャンピングカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/7.png">
                      </div>
                      <div class="label">キャンピングカー</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/coupe/">
                      <div class="icon">
                        <img alt="クーペ" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/8.png">
                      </div>
                      <div class="label">クーペ</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/hatchback/">
                      <div class="icon">
                        <img alt="ハッチバック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/9.png">
                      </div>
                      <div class="label">ハッチバック</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/opencar/">
                      <div class="icon">
                        <img alt="オープンカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/10.png">
                      </div>
                      <div class="label">オープンカー</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/welfare-vehicles/">
                      <div class="icon">
                        <img alt="福祉車両" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/11.png">
                      </div>
                      <div class="label">福祉車両</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/commercialvehicle-van/">
                      <div class="icon">
                        <img alt="商用車・バン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/12.png">
                      </div>
                      <div class="label">商用車・バン</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/truck-bus/">
                      <div class="icon">
                        <img alt="トラック・バス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/13.png">
                      </div>
                      <div class="label">トラック・バス</div>
                    </a>
                  </div>
                  <div class="cell">
                    <a href="https://ctn-net.jp/kaitori/car/marketprice/pickup-truck/">
                      <div class="icon">
                        <img alt="ピックアップトラック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/14.png">
                      </div>
                      <div class="label">ピックアップ<br class="sp-b">トラック</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    
    
          </div>
          </div>
    
                <div id="line-top-2"></div>
      <section class="line-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 tt-line">
              <h2>一括査定の流れ</h2>
            </div>
          </div>
        </div>
      </section>
    
    
    
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team">
        <!--<div class="container" data-aos="fade-up">-->
        <div class="container">
          <div class="content-resize-top">
          <div class="section-header">
            <h2>カンタン4ステップ</h2>
          </div>
    
          <div class="row gy-4">
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check1.png" class="img-fluid" alt="">
                <h4>査定申し込み</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r1.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check2.png" class="img-fluid" alt="">
                <h4>一括査定</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r2.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
              <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check3.png" class="img-fluid" alt="">
                <h4>必要書類の準備</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r3.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
            <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
            <div class="col-xl-3 col-md-6 d-flex step-img">
              <div class="member">
                <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check4.png" class="img-fluid" alt="">
                <h4>ご入金</h4>
                <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r4.png" loading="lazy"></div>
              </div>
            </div><!-- End Team Member -->
          </div>
          </div>
        </div>
      </section><!-- End Our Team Section -->
    
      <!-- ======= Portfolio Section ======= -->
      <div id="column"></div>
      <section id="portfolio" class="portfolio sections-bg">
        <!--<div class="container" data-aos="fade-up">-->
        <div class="container">
        <div class="content-resize-top">
          <div class="section-header-spe">
            <h3><a href="#">中古車売却のお役たち情報</a></h3>
          </div>
    
          <div class="row infomation">
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image1.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-season/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image2.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-tax/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image3.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-trouble/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image4.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image5.webp" loading="lazy"></a>
              </div>
            </div>
            <div class="col-lg-4 info-item">
              <div class="info-detail">
                <a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image6.webp" loading="lazy"></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section><!-- End Portfolio Section -->
    
    
    
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <!--<div class="container" data-aos="fade-up">-->
        <div class="container">
        <div class="content-resize-top">
          <div class="row gy-4">
    
            <div class="col-lg-4">
              <div class="content px-xl-5">
                <h3><strong>よくあるご質問</strong></h3>
                <p>CTNのサービスを利用するにあたりよくあるご質問をまとめました。下記の目次からご覧になりたいものをご選択ください。</p>
              </div>
            </div>
    
            <div class="col-lg-8">
    
              <!--<div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">-->
              <div class="accordion accordion-flush" id="faqlist">
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      <span class="num">1.</span>
                      売却までの流れは？
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTN一括査定では「申し込み」→「査定」→「必要書類の準備」→「ご入金」まで簡単4ステップで愛車を売却できます。<br>
                      必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/">「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」</a>
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      <span class="num">2.</span>
                      売却に必要な書類を教えてください。
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      売却時の必要書類については「普通車」・「軽自動車」で異なります。<br>
                      各種書類については<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/">「車の買取時に必要な書類は何？買取金額がアップする書類とは？」</a>
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      <span class="num">3.</span>
                      自宅での出張査定や買取をしてもらうことはできるの？
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTN一括査定では多くの中古車販売店が出張査定を対応しております。<br>
                      自宅や希望する場所を指定いただければ、高価買取業者がお伺いさせていただきます。
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      <span class="num">4.</span>
                      ローンの残債が残っていても車でも売却できる？
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      愛車のローンが残っていても所有者変更などの手続きが必要になりますが売却可能です。<br>
                      注意点として、売却価格とローンの残債がどちらが大きいかになります。<br>
                      ローンの残債が多い場合は一度完済する必要があります。<br>
                      詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/">「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」</a>
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                      <span class="num">5.</span>
                      買取は全国対応ですか？
                    </button>
                  </h3>
                  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTN一括査定では全国対応で高価買取いたしますのでお気軽にご連絡ください。(一部離島を除く)
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                      <span class="num">6.</span>
                      買取ができない車両などはありますか？
                    </button>
                  </h3>
                  <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      CTNでは解体、貿易グループとの提携により、廃車、事故車、故障者、不動車など関わらず全ての車両の買取が可能となります。気になる方はまずはご相談ください。
                    </div>
                  </div>
                </div><!-- # Faq item-->
    
              </div>
    
            </div>
          </div>
          </div>
      </div>
  </section><!-- End Frequently Asked Questions Section -->
</main><!-- End #main -->


  <?php else: ?>

  

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<style>
.readmore button{
  display: none;
}
.banner-text-detail {
  background-repeat: no-repeat;
  
  background-image: url(https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/model2.jpg);
}

@media (min-width: 768px) {
  .text-element {
    padding-left: 270px;
  }
  .banner-text-detail {
    background-position-x: -13%;
    background-size: 400px;
    margin-bottom: 0;
    background-position-y: 100%;
  }
}
@media (min-width: 900px) {
  .banner-text-detail {
    background-size: contain;
    background-position-x: -15%;
  }
}
@media (min-width: 1000px) {
  .banner-text-detail {
    background-position-x: -2%%;
  }
}
@media (max-width: 768px) {
  .banner-text-detail {
    background-size: 400px;
    background-position-x: -17%;
    background-position-y: 100%;
  }
  .text-element {
    padding-left: 270px;
  }
}
@media screen and (max-width: 500px) {
  .readmore {
    position: relative;
    margin: 20px auto 0;
    padding: 0px 0px 25px 140px;
  }

  .readmore-content {
    position: relative;
    height: 200px;
    transition: all .4s;
    overflow: hidden;
  }
  .readmore-content::before {
    position: absolute;
    display: block;
    content: "";
    left: 0;
    bottom: 0;
    width: 100%;
    height: 75px;
    transition: all .4s;
    background: linear-gradient( rgba(255,255,255,0) 0%, rgba(255,255,255,0.8) 50%, #fff 100% );
  }
  .readmore-content.is_open:before{
    display: none;
  }
  .readmore button{
    position: absolute;
    display: table;
    left: 50%;
    bottom: 0px;
    margin: 0 auto 20px 57px;
    width: 200px;
    padding: 0;
    color: #000;
    text-align: center;
    background-color: transparent;
    text-decoration: underline;
    border-width: 0;
    transform: translateX(-50%);
    cursor: pointer;
    z-index: 1;
    transition: all .4s;
    font-size: 80%;
  }
  .banner-text-detail {
    background-size: 230px;
    background-position-x: -25%;
    background-image: url(https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/img/model2-sp.jpg);
}
  }
  .text-element {
    padding-left: 304px;
  }
  @media (max-width: 430px) {
    .text-element {
    padding-left: 0px;
  }
  }
  @media (max-width: 413px) {
    .banner-text-detail {
      background-position-x: -26%;
    }
  }

</style>

<section id="banner-text-car">
  <div class="inner">
    <div class="banner-text-content">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/" class="" ><span property="name">TOP</span></a><meta property="position" content="1"></span> &gt; 
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"href="https://ctn-net.jp/kaitori/car/marketprice/" class="" ><span property="name">中古車買取相場</span></a><meta property="position" content="2"></span> &gt;
            <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item"><?php the_field('car_name-title'); ?>の買取相場・リセールバリュー情報</span><meta property="url" content="<?php echo get_the_permalink();?>"><meta property="position" content="3"></span>
          </div>
        <div class="banner-text-content">
      <div class="banner-text-detail">
        <!-- <div class="image-element">
          <img src="wp-content/uploads/2023/11/hito-mm.png">
        </div> -->
        <div class="text-element">
          <h1><?php the_field('car_name-title'); ?>の車を<!--<br class="sp-non">--><br>高く売るための買取・査定情報</h1>
          <script>
                $(function(){
                  $('button').on('click',function(){
                    const t = $('.readmore-content');
                    t.toggleClass('is_open');
                    if(t.hasClass('is_open')){
                      const h = t.get(0).scrollHeight;
                      t.css('height', h);
                      $(this).text('元に戻す')
                    }else{
                      t.css('height','');
                      $(this).text('もっと見る');
                    }
                  });
                });
              </script>
              <div class="readmore">
                <div class="readmore-content">
                  <p><?php the_field('maker_feature'); ?></p>
                </div>
                <button>もっと見る</button>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="car-detail-page-btn">
  <div class="inner">
      <div class="car-detail-btn-resize" >
        
          <div class="car-detail-form-btn">
            <ul>
              <li>
                <p class="car-detail-but-one">簡単<span class="car-detail-but-number">55秒</span>査定依頼<br class="sp-b"><span class="car-detail-but-text">高価買取店上位3社のみ</span></p>
                <a href="https://ctn-net.jp/kaitori/car/#form">
                  <p class="car-detail-but-two"><span class="car-detail-but-muri">無料</span>かんたん査定依頼</p>
                </a>
              </li>
            </ul>
          </div>
        
      </div>
  </div>
</section>
<?php $famouscar1name = get_field('famous_car1-name');?>
<?php $famouscar1image = get_field('famous_car1-image');?>
<?php $famouscar2image = get_field('famous_car2-image');?>
<?php $famouscar3image = get_field('famous_car3-image');?>
<?php if(!( $famouscar1name=="")):?>
<section class="maker-ranking sp-non">
  <h2 class="maker__famous-car txt-center"><?php the_field('car_name-title'); ?>の買取人気車種</h2>
  <div class="inner">
    <div class="-flex justify-sa maker__famous-car-ranking">
      <div class="maker__famous-car-item">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous1.svg" class="rankingtag">
        <h3 class="maker__famous-car-item-title p-rel title1"><?php the_field('famous_car1-name'); ?></h3>
        <div class="-flex">
          <?php if(!( $famouscar1image=="")):?>
            <img src="<?php the_field('famous_car1-image'); ?>">
          <?php else:?>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
          <?php endif;?>
          <div class="maker__famous-car-item-text">
            <div class="maker__famous-car-item-text-market">
              買取相場
            </div>
            <div class="car-price-ran"><p><span><?php the_field('famous_car1-price'); ?></span>万円～<span><?php the_field('famous_car1-price-max'); ?></span>万円</p></div>
          </div>
        </div>
      </div>
      <div class="maker__famous-car-item">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous2.svg" class="rankingtag">
        <h3 class="maker__famous-car-item-title p-rel title2"><?php the_field('famous_car2-name'); ?></h3>
        <div class="-flex">
          <?php if(!( $famouscar2image=="")):?>
            <img src="<?php the_field('famous_car2-image'); ?>">
          <?php else:?>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
          <?php endif;?>
          <div class="maker__famous-car-item-text">
            <div class="maker__famous-car-item-text-market">
              買取相場
            </div>
            <div class="car-price-ran"><p><span><?php the_field('famous_car2-price'); ?></span>万円～<span><?php the_field('famous_car2-price-max'); ?></span>万円</p></div>
          </div>
        </div>
      </div>
      <div class="maker__famous-car-item">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous3.svg" class="rankingtag">
        <h3 class="maker__famous-car-item-title p-rel title3"><?php the_field('famous_car3-name'); ?></h3>
        <div class="-flex">
          <?php if(!( $famouscar3image=="")):?>
            <img src="<?php the_field('famous_car3-image'); ?>">
          <?php else:?>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
          <?php endif;?>
          <div class="maker__famous-car-item-text">
            <div class="maker__famous-car-item-text-market">
              買取相場
            </div>
            <div class="car-price-ran"><p><span><?php the_field('famous_car3-price'); ?></span>万円～<span><?php the_field('famous_car3-price-max'); ?></span>万円</p></div>
          </div>
        </div>
      </div>
    </div>
    
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <?php if ( strstr($url,'compactcar')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'minivan-one-box')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'suv-cross-country')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'campingcar')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'hatchback')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'truck-bus')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'welfare-vehicles')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
      <?php elseif ( strstr($url,'stationwagon')==true ): ?>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
        <?php elseif ( strstr($url,'sedan')==true ): ?>
          <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
      <?php elseif ( strstr($url,'coupe')==true ): ?>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
        <?php elseif ( strstr($url,'commercialvehicle-van')==true ): ?>
          <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
      <?php elseif ( strstr($url,'opencar')==true ): ?>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
        <?php elseif ( strstr($url,'pickup-truck')==true ): ?>
          <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>

        <?php else:?>
    <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">すべてのランキングを見る</a></p>
    <?php endif;?>

  </div>
</section>
<section class="maker-ranking-sp sp-b">
  <h2 class="maker__famous-car-sp"><span><?php the_field('car_name-title'); ?>の人気ランキング車種買取相場</span></h2>
  <div class="inner content-caritem-ran">
    <div class="-flex justify-sa maker__famous-car-ranking">
      <div class="maker__famous-car-item-sp">
        <div class="avatar-car-ran">
          <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous1.svg" class="rankingtag">
        </div>
        <div class="-flex">
          <?php if(!( $famouscar1image=="")):?>
            <img src="<?php the_field('famous_car1-image'); ?>">
          <?php else:?>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
          <?php endif;?>
          <div class="maker__famous-car-item-text-sp">
            <h3 class="maker__famous-car-item-title-sp p-rel title1"><?php the_field('famous_car1-name'); ?></h3>
            <div class="maker__famous-car-item-text-market-sp">
              <div class="btn-ran-cs"><p>買取相場</p></div>
              <div class="car-price-ran"><p><span><?php the_field('famous_car1-price'); ?></span>万円～<span><?php the_field('famous_car1-price-max'); ?></span>万円</p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="maker__famous-car-item-sp">
        <div class="avatar-car-ran">
          <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous2.svg" class="rankingtag">
        </div>
        <div class="-flex">
          <?php if(!( $famouscar2image=="")):?>
            <img src="<?php the_field('famous_car2-image'); ?>">
          <?php else:?>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
          <?php endif;?>
          <div class="maker__famous-car-item-text-sp">
            <h3 class="maker__famous-car-item-title-sp p-rel title2"><?php the_field('famous_car2-name'); ?></h3>
            <div class="maker__famous-car-item-text-market-sp">
              <div class="btn-ran-cs"><p>買取相場</p></div>
              <div class="car-price-ran"><p><span><?php the_field('famous_car2-price'); ?></span>万円～<span><?php the_field('famous_car2-price-max'); ?></span>万円</p></div>

            </div> 
          </div>
        </div>
      </div>
      <div class="maker__famous-car-item-sp">
        <div class="avatar-car-ran">
          <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/famous3.svg" class="rankingtag">
        </div>
        <div class="-flex">
          <?php if(!( $famouscar3image=="")):?>
            <img src="<?php the_field('famous_car3-image'); ?>">
          <?php else:?>
            <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/no_car_image.jpg">
          <?php endif;?>
          <div class="maker__famous-car-item-text-sp">
            <h3 class="maker__famous-car-item-title-sp p-rel title3"><?php the_field('famous_car3-name'); ?></h3>
            <div class="maker__famous-car-item-text-market-sp">
              <div class="btn-ran-cs"><p>買取相場</p></div>
              <div class="car-price-ran"><p><span><?php the_field('famous_car3-price'); ?></span>万円～<span><?php the_field('famous_car3-price-max'); ?></span>万円</p></div>

          </div>
        </div>
      </div>
    </div>
    <?php $url = $_SERVER['REQUEST_URI']; ?>
    <?php if ( strstr($url,'compactcar')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'minivan-one-box')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'suv-cross-country')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'campingcar')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'hatchback')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'truck-bus')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
    <?php elseif ( strstr($url,'welfare-vehicles')==true ): ?>
      <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
      <?php elseif ( strstr($url,'stationwagon')==true ): ?>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
        <?php elseif ( strstr($url,'sedan')==true ): ?>
          <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
      <?php elseif ( strstr($url,'coupe')==true ): ?>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
        <?php elseif ( strstr($url,'commercialvehicle-van')==true ): ?>
          <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
      <?php elseif ( strstr($url,'opencar')==true ): ?>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>
        <?php elseif ( strstr($url,'pickup-truck')==true ): ?>
          <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank-body/">＞すべてのランキングを見る</a></p>

        <?php else:?>
    <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/rank/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">すべてのランキングを見る</a></p>
    <?php endif;?>
  </div>
</section>
<?php else:?>
<?php endif;?>

<section id="title-car-page-custom">
      <div class="car-tt-page-con">
        <h2><?php the_field('car_name-title'); ?>の車種一覧</h2>
      </div>
      <div class="list-name-link-soba">
        <ul class="razize-name-link-soba">
          <li class="tab-item current" onclick="filterByAlphabet('all', event)" data-filter="all">全て</li>
          <li class="tab-item" onclick="filterByAlphabet('car-alphabet', event)" data-filter="car-alphabet">英数</li>
          <li class="tab-item" onclick="filterByAlphabet(['ア', 'イ', 'ウ', 'エ', 'オ', 'ヴ'], event)" data-filter='["ア", "イ", "ウ", "エ", "オ", "ヴ"]'>ア行</li>
          <li class="tab-item" onclick="filterByAlphabet(['カ', 'キ', 'ク', 'ケ', 'コ', 'ガ', 'ギ', 'グ', 'ゲ', 'ゴ'], event)" data-filter='["カ", "キ", "ク", "ケ", "コ", "ガ", "ギ", "グ", "ゲ", "ゴ"]'>カ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['サ', 'シ', 'ス', 'せ', 'ソ', 'ザ', 'ジ', 'ズ', 'ぜ', 'ゾ'], event)" data-filter='["サ", "シ", "ス", "せ", "ソ", "ザ", "ジ", "ズ", "ぜ", "ゾ"]'>サ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['タ', 'チ', 'ツ', 'テ', 'ト', 'ダ', 'ヂ', 'ヅ', 'デ', 'ド'], event)" data-filter='["タ", "チ", "ツ", "テ", "ト", "ダ", "ヂ", "ヅ", "デ", "ド"]'>タ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['ナ', '二', 'ヌ', 'ネ', 'ノ'], event)" data-filter='["ナ", "二", "ヌ", "ネ", "ノ"]'>ナ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['ハ', 'ヒ', 'フ', 'ヘ', 'ホ', 'バ', 'ビ', 'ブ', 'べ', 'ボ', 'パ', 'ピ', 'プ', 'ペ', 'ポ'], event)" data-filter='["ハ", "ヒ", "フ", "ヘ", "ホ", "バ", "ビ", "ブ", "べ", "ボ", "パ", "ピ", "プ", "ペ", "ポ"]'>ハ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['マ', 'ミ', 'ム', 'メ', 'モ'], event)" data-filter='["マ", "ミ", "ム", "メ", "モ"]'>マ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['ヤ', 'ユ', 'ヨ'], event)" data-filter='["ヤ", "ユ", "ヨ"]'>ヤ行</li>
          <li class="tab-item" onclick="filterByAlphabet(['ラ', 'リ', 'ル', 'レ', 'ロ'], event)" data-filter='["ラ", "リ", "ル", "レ", "ロ"]'>ラ行</li>
          <li class="tab-item" onclick="filterByAlphabet('ワ', event)" data-filter='ワ'>ワ行</li>
        </ul>
      </div>
    </section>

    <section id="vehicles-list-post" class="vehicles-list-post">
      <div class="inner">
        <div class="vehicles-list-content">
          <div class="vehicles-list-detail">
            <ul class="list-soba-custom" id="list-soba-custom">
                <?php
                    function process_and_display_price($price) {
                        // $price = str_replace('〜', '', $price);
                        preg_match_all('/[\d.]+/', $price, $matches);

                        if ($matches) {
                            $numeric_values = $matches[0];
                            sort($numeric_values);

                            $lowest_price = floatval($numeric_values[0]);
                            $highest_price = floatval(end($numeric_values));

                            if ($lowest_price === $highest_price) {
                                return 'ー　' . '<span class="man-text">万円</span>';
                                
                            }

                            $increased_lowest_price = $lowest_price * 1.1;
                            $increased_highest_price = $highest_price * 1.1;

                            $result = number_format($increased_lowest_price, 2) . '<span class="man-text">万円</span>'. '～';
                            $result .= number_format($increased_highest_price, 2) . '<span class="man-text">万円</span>';

                            return $result;
                        }

                        return 'ー 万円'; 
                        
                    }
                    $json_file = get_field('list-soba', $post_id);
                    if ($json_file) {
                        $json_data = file_get_contents($json_file['url']);
                        $json_array = json_decode($json_data, true);

                        if ($json_array !== null) {
                            $car_data = $json_array[0]['cars'];
                            foreach ($car_data as $car) {
                                $car_name = esc_html($car['name']);
                                $car_price = esc_html($car['price']);

                                echo '<li class="list-item" data-car-name="' . $car_name . '" data-car-price="' . $car_price . '" data-filter=\'' . json_encode(['all', 'car-alphabet', ['ア', 'イ', 'ウ', 'エ', 'オ', 'ヴ'], ['カ', 'キ', 'ク', 'ケ', 'コ', 'ガ', 'ギ', 'グ', 'ゲ', 'ゴ'], ['サ', 'シ', 'ス', 'せ', 'ソ', 'ザ', 'ジ', 'ズ', 'ぜ', 'ゾ'], ['タ', 'チ', 'ツ', 'テ', 'ト', 'ダ', 'ヂ', 'ヅ', 'デ', 'ド'], ['ナ', '二', 'ヌ', 'ネ', 'ノ'], ['ハ', 'ヒ', 'フ', 'ヘ', 'ホ', 'バ', 'ビ', 'ブ', 'べ', 'ボ', 'パ', 'ピ', 'プ', 'ペ', 'ポ'], ['マ', 'ミ', 'ム', 'メ', 'モ'], ['ヤ', 'ユ', 'ヨ'], ['ラ', 'リ', 'ル', 'レ', 'ロ'], 'ワ']) . '\'>
    <img src="https://kaitori.ctn-demo.com/wp-content/uploads/2023/11/noima-scaled.jpg">
    <p>' . $car_name . '<br><strong><span class="line-suadoi">買取相場</span><br>' . process_and_display_price($car_price) . '</strong></p>
    </li>';
                            }


                        } else {
                            echo '<div class="poit-error"><p>条件に合致する実績がありませんでした。条件を変更して再度検索してください。</p></div>';
                        }
                    } else {
                        echo '<div class="poit-error"><p>条件に合致する実績がありませんでした。条件を変更して再度検索してください。</p></div>';
                    }

                    ?>
                
           </ul>
            <div id="message-container-no-json"></div>
          </div>
        </div>
      </div>
    </section>


<section class="car-detail-page-btn">
  <div class="inner">
      <div class="car-detail-btn-resize" >
        
          <div class="car-detail-form-btn">
            <ul>
              <li>
                <p class="car-detail-but-one">簡単<span class="car-detail-but-number">55秒</span>査定依頼<br class="sp-b"><span class="car-detail-but-text">高価買取店上位3社のみ</span></p>
                <a href="https://ctn-net.jp/kaitori/car/#form">
                  <p class="car-detail-but-two"><span class="car-detail-but-muri">無料</span>かんたん査定依頼</p>
                </a>
              </li>
            </ul>
          </div>
        
      </div>
  </div>
</section>



<section id="title-car-page-custom">
  <div class="car-tt-page-con">
	  <?php $url = $_SERVER['REQUEST_URI']; ?>
<?php if ( strstr($url,'light-vehicle')==true ): ?>
	      <h2><?php the_field('car_name-title'); ?>の<br class="sp-b">リセールバリュー</h2>
	  <?php else:?>
    <h2><?php the_field('car_name-title'); ?>車の<br class="sp-b">リセールバリュー</h2>
	  <?php endif;?>
  </div>
</section>

<section class="point-car-cus">
  <div class="inner">
    <h2 class="resale-title"><?php the_field('car_name-title'); ?>の<br class="sp-b">査定ポイント</h2>
  <div class="car-point">

    <h3><?php the_field('satei_point1'); ?></h3>
    <p><?php the_field('point1'); ?></p>
    <h3><?php the_field('satei_point2'); ?></h3>
    <p><?php the_field('point2'); ?></p>
    <p><?php the_field('point3'); ?></p>
  </div>
</div>
</section>
<section class="point-car-custom">
  <div class="inner">
    <div class="point_h2">
    <h2><?php the_field('car_name-title'); ?>のリセールの特徴</h2>
  </div>
    <div class="inner_text">
    <?php $resale1 = get_field('resale1');?>
    <?php if(!( $resale1=="")):?>
    <h3><?php echo the_field('resale1') . '</br>' . '<img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">';  ?></h3>
    <?php else:?>
<?php endif;?>
    <p><?php the_field('point_text1'); ?></p>
    <h3><?php the_field('resale2'). '</br>' . '<img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">'; ?></h3>
    <p><?php the_field('point_text2'); ?></p>
    <h3><?php the_field('resale3') . '</br>' . '<img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">'; ?></h3>
    <p><?php the_field('point_text3'); ?></p>
  </div>
  <div class="point_h2">
    <h2><?php the_field('car_name-title'); ?>についての情報</h2>
  </div>
  <div class="inner_text">
  <h3><?php the_field('news1'); ?></h3>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <p><?php the_field('news_text1'); ?></p>
    <h3><?php the_field('news2'); ?></h3>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <p><?php the_field('news_text2'); ?></p>
    <?php $news3 = get_field('news3');?>

    <h3><?php the_field('news3'); ?></h3>
    <?php if(!( $news3=="")):?>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <?php else:?>
<?php endif;?>
    <p><?php the_field('news_text3'); ?></p>


<?php $free_text_head1 = get_field('free_text_head1');?>
<?php $free_text_head2 = get_field('free_text_head2');?>
<?php $free_text_head3 = get_field('free_text_head3');?>

<?php if(!( $free_text_head1=="")):?>
  <h3><?php the_field('free_text_head1'); ?></h3>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <p><?php the_field('free_text1'); ?></p>
  <?php else:?>
<?php endif;?>

<?php if(!( $free_text_head2=="")):?>
  <h3><?php the_field('free_text_head2'); ?></h3>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <p><?php the_field('free_text2'); ?></p>
  <?php else:?>
<?php endif;?>

<?php if(!( $free_text_head3=="")):?>
  <h3><?php the_field('free_text_head3'); ?></h3>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <p><?php the_field('free_text3'); ?></p>
</div>
  <?php else:?>
<?php endif;?>

</div>
</div>
</section>






<section id="other-maker">
  <div class="inner maker">
    <h2 style="text-align:center;font-weight:bold">その他メーカーから探す</h2>
    <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">
    <h3 class="maker-type-name">国産車</h3>
    <div class="maker-modal-content -flex">
  <ul class="maker-list">
  <a href="https://ctn-net.jp/kaitori/car/marketprice/lexus/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/lexus.png">
  <p>レクサス</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/toyota/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/toyota.png">
  <p>トヨタ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/honnda/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/honda.png">
  <p>ホンダ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/nissan/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/nissan.png">
  <p>日産</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/suzuki/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/suzuki.png">
  <p>スズキ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/daihatsu/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/daihatsu.png">
  <p>ダイハツ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/mazda/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/matsuda.png">
  <p>マツダ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/subaru/"> <li>
 <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/subaru.png">
  <p>スバル</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/mitsubishi/"><li>
<img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mitsubishi.png">
  <p>三菱</p>
  </li></a>

  </ul>
  </div>
  <h3 class="maker-type-name">輸入車</h3>
    <div class="maker-modal-content -flex">
  <ul class="maker-list">
  <a href="https://ctn-net.jp/kaitori/car/marketprice/mercedes-benz/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/benz.png">
  <p>メルセデス<br>ベンツ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/bmw/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/bmw.png">
  <p>BMW</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/volkswagen/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volkswagen.png">
  <p>フォルクス<br>ワーゲン</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/audi/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/audi.png">
  <p>アウディ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/miini/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/mini.png">
  <p>ミニ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/volvo/"><li>
  <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/volvo.png">
  <p>ボルボ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/jeep/"> <li>
 <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/jeep.png">
  <p>ジープ</p>
  </li></a>
  <a href="https://ctn-net.jp/kaitori/car/marketprice/peugeot/"><li>
<img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/peugeot.png">
  <p>プジョー</p>
  </li></a>
  </ul>
  
  
        </div>
        <p class="all_maker"><a href="https://ctn-net.jp/kaitori/car/marketprice/maker/"><img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/link_arr.png" style="width: 16px;margin-right: 5px;margin-bottom: 3px;">全てのメーカーから買取相場を探す</a></p>
    </div>
  </div>
</section>

<section id="car-list-icon" class="car-list-icon">
  <div class="inner">
    <div class="car-list-content">
      <h2 style="text-align:center;font-weight:bold">ボディタイプから探す</h2>
      <img style="width: 100%;" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/maker/line.png">

      <div class="car-list-detail">
        <div class="table-flex">
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/light-vehicle/">
              <div class="icon">
                <img alt="軽自動車" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/1.png">
              </div>
              <div class="label">軽自動車</div>
            </a>    
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/compactcar/">
              <div class="icon">
                <img alt="コンパクトカー"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/2.png">
              </div>
              <div class="label">コンパクトカー</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/minivan-one-box/">
              <div class="icon">
                <img alt="ミニバン/ワンボックス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/3.png">
              </div>
              <div class="label">ミニバン・<br class="sp-b">ワンボックス</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/stationwagon/">
              <div class="icon">
                <img alt="ステーションワゴン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/4.png">
              </div>
              <div class="label">ステーション<br class="sp-b">ワゴン</div>
            </a>
          </div>
          <div class="cell">
          <a href="https://ctn-net.jp/kaitori/car/marketprice/suv-cross-country/">
              <div class="icon">
                <img alt="SUV・クロカン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/5.png">
              </div>
              <div class="label">SUV・クロカン</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/sedan/">
              <div class="icon">
                <img alt="セダン" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/6.png">
              </div>
              <div class="label">セダン</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/campingcar/">
              <div class="icon">
                <img alt="キャンピングカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/7.png">
              </div>
              <div class="label">キャンピングカー</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/coupe/">
              <div class="icon">
                <img alt="クーペ" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/8.png">
              </div>
              <div class="label">クーペ</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/hatchback/">
              <div class="icon">
                <img alt="ハッチバック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/9.png">
              </div>
              <div class="label">ハッチバック</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/opencar/">
              <div class="icon">
                <img alt="オープンカー" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/10.png">
              </div>
              <div class="label">オープンカー</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/welfare-vehicles/">
              <div class="icon">
                <img alt="福祉車両" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/11.png">
              </div>
              <div class="label">福祉車両</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/commercialvehicle-van/">
              <div class="icon">
                <img alt="商用車・バン"src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/12.png">
              </div>
              <div class="label">商用車・バン</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/truck-bus/">
              <div class="icon">
                <img alt="トラック・バス" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/13.png">
              </div>
              <div class="label">トラック・バス</div>
            </a>
          </div>
          <div class="cell">
            <a href="https://ctn-net.jp/kaitori/car/marketprice/pickup-truck/">
              <div class="icon">
                <img alt="ピックアップトラック" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/bodytype/14.png">
              </div>
              <div class="label">ピックアップ<br class="sp-b">トラック</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  </div>
  </div>
  <?php endwhile; ?>
        <?php else:?>
        <?php endif; wp_reset_postdata(); ?>

        <div id="line-top-2"></div>
<section class="line-top">
<div class="container">
  <div class="row">
    <div class="col-lg-12 tt-line">
      <h2>一括査定の流れ</h2>
    </div>
  </div>
</div>
</section>



<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
<!--<div class="container" data-aos="fade-up">-->
<div class="container">
  <div class="content-resize-top">
  <div class="section-header">
    <h2>カンタン4ステップ</h2>
  </div>

  <div class="row gy-4">
    <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
    <div class="col-xl-3 col-md-6 d-flex step-img">
      <div class="member">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check1.png" class="img-fluid" alt="">
        <h4>査定申し込み</h4>
        <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r1.png" loading="lazy"></div>
      </div>
    </div><!-- End Team Member -->
    <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
    <div class="col-xl-3 col-md-6 d-flex step-img">
      <div class="member">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check2.png" class="img-fluid" alt="">
        <h4>一括査定</h4>
        <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r2.png" loading="lazy"></div>
      </div>
    </div><!-- End Team Member -->
    <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
    <div class="col-xl-3 col-md-6 d-flex step-img">
      <div class="member">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check3.png" class="img-fluid" alt="">
        <h4>必要書類の準備</h4>
        <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r3.png" loading="lazy"></div>
      </div>
    </div><!-- End Team Member -->
    <!--<div class="col-xl-3 col-md-6 d-flex step-img" data-aos="fade-up" data-aos-delay="100">-->
    <div class="col-xl-3 col-md-6 d-flex step-img">
      <div class="member">
        <img src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/check4.png" class="img-fluid" alt="">
        <h4>ご入金</h4>
        <div class="ico-rr"><img class="ico-rrr" src="https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/assets/img/home/ico-r4.png" loading="lazy"></div>
      </div>
    </div><!-- End Team Member -->
  </div>
  </div>
</div>
</section><!-- End Our Team Section -->

<!-- ======= Portfolio Section ======= -->
<div id="column"></div>
<section id="portfolio" class="portfolio sections-bg">
<!--<div class="container" data-aos="fade-up">-->
<div class="container">
<div class="content-resize-top">
  <div class="section-header-spe">
    <h3><a href="#">中古車売却のお役たち情報</a></h3>
  </div>

  <div class="row infomation">
    <div class="col-lg-4 info-item">
      <div class="info-detail">
        <a href="/kaitori/car/column/car-purchase-on-loan/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image1.webp" loading="lazy"></a>
      </div>
    </div>
    <div class="col-lg-4 info-item">
      <div class="info-detail">
        <a href="/kaitori/car/column/car-purchase-season/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image2.webp" loading="lazy"></a>
      </div>
    </div>
    <div class="col-lg-4 info-item">
      <div class="info-detail">
        <a href="/kaitori/car/column/car-purchase-tax/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image3.webp" loading="lazy"></a>
      </div>
    </div>
    <div class="col-lg-4 info-item">
      <div class="info-detail">
        <a href="/kaitori/car/column/car-purchase-trouble/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image4.webp" loading="lazy"></a>
      </div>
    </div>
    <div class="col-lg-4 info-item">
      <div class="info-detail">
        <a href="/kaitori/car/column/car-purchase-required-documents/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image5.webp" loading="lazy"></a>
      </div>
    </div>
    <div class="col-lg-4 info-item">
      <div class="info-detail">
        <a href="/kaitori/car/column/car-purchase-flow-and-procedure/"><img src="https://ctn-net.jp/kaitori/car/wp-content/uploads/2023/03/b-image6.webp" loading="lazy"></a>
      </div>
    </div>
  </div>
</div>
</div>
</section><!-- End Portfolio Section -->



<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
<!--<div class="container" data-aos="fade-up">-->
<div class="container">
<div class="content-resize-top">
  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="content px-xl-5">
        <h3><strong>よくあるご質問</strong></h3>
        <p>CTNのサービスを利用するにあたりよくあるご質問をまとめました。下記の目次からご覧になりたいものをご選択ください。</p>
      </div>
    </div>

    <div class="col-lg-8">

      <!--<div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">-->
      <div class="accordion accordion-flush" id="faqlist">

        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
              <span class="num">1.</span>
              売却までの流れは？
            </button>
          </h3>
          <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body">
              CTN一括査定では「申し込み」→「査定」→「必要書類の準備」→「ご入金」まで簡単4ステップで愛車を売却できます。<br>
              必要書類などご不明な点はカスタマーサポートにて準備から売却までお手伝いをさせていただきます。詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-flow-and-procedure/">「車を売るときの流れや手順を徹底解説！トラブルなく買取してもらうためには？」</a>
            </div>
          </div>
        </div><!-- # Faq item-->

        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
              <span class="num">2.</span>
              売却に必要な書類を教えてください。
            </button>
          </h3>
          <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body">
              売却時の必要書類については「普通車」・「軽自動車」で異なります。<br>
              各種書類については<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-required-documents/">「車の買取時に必要な書類は何？買取金額がアップする書類とは？」</a>
            </div>
          </div>
        </div><!-- # Faq item-->

        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
              <span class="num">3.</span>
              自宅での出張査定や買取をしてもらうことはできるの？
            </button>
          </h3>
          <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body">
              CTN一括査定では多くの中古車販売店が出張査定を対応しております。<br>
              自宅や希望する場所を指定いただければ、高価買取業者がお伺いさせていただきます。
            </div>
          </div>
        </div><!-- # Faq item-->

        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
              <span class="num">4.</span>
              ローンの残債が残っていても車でも売却できる？
            </button>
          </h3>
          <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body">
              愛車のローンが残っていても所有者変更などの手続きが必要になりますが売却可能です。<br>
              注意点として、売却価格とローンの残債がどちらが大きいかになります。<br>
              ローンの残債が多い場合は一度完済する必要があります。<br>
              詳しくは<a href="https://ctn-net.jp/kaitori/car/column/car-purchase-on-loan/">「車の買取はローン中でも可能！ケース別に売却手順や方法を解説」</a>
            </div>
          </div>
        </div><!-- # Faq item-->

        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
              <span class="num">5.</span>
              買取は全国対応ですか？
            </button>
          </h3>
          <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body">
              CTN一括査定では全国対応で高価買取いたしますのでお気軽にご連絡ください。(一部離島を除く)
            </div>
          </div>
        </div><!-- # Faq item-->

        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
              <span class="num">6.</span>
              買取ができない車両などはありますか？
            </button>
          </h3>
          <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
            <div class="accordion-body">
              CTNでは解体、貿易グループとの提携により、廃車、事故車、故障者、不動車など関わらず全ての車両の買取が可能となります。気になる方はまずはご相談ください。
            </div>
          </div>
        </div><!-- # Faq item-->

      </div>

    </div>
  </div>
  </div>
</div>
</section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->

<?php endif; ?>




<?php get_footer(); ?>
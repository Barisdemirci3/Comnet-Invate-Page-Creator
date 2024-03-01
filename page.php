<?php 
if(isset($_GET["invite_code"])){
    $invitecode = $_GET["invite_code"];
    if($invitecode == ""){
        header("Location: index.php?status=empty");
    }
}
else{
    header("Location: index.php?status=nodata");

}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Comnet İnvite Page Generator</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="robots" content="noindex">

    <!-- mobile meta -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Comnet">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#0d1529" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="https://www.comnet.com.tr/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.comnet.com.tr/assets/css/style.css">

    <style>


        #app { position:relative; height: 100vh; text-align: center; }
        .title { text-align: center; font-size: 42px; margin-bottom: 30px; }
        .title span { display:block; font-size: 24px; }
        .sub-title { font-size: 28px; margin-top: 20px; line-height:1.2; }
        .sub-title span { display:block; font-size: 62px; font-weight: 800; color: #C20303;}
        .sub-title span small { display:block; font-size: 16px; font-weight: 300; color: #062f5d;}

        .logo { margin: 0 auto; width: 150px; }

        .coupon-code { display:flex; align-items: center; justify-content: center; flex-direction: column; padding: 30px; width: 100%; max-width:400px; margin: 15px auto 0; line-height:1; font-weight: 800; border-radius: 6px; border:2px dashed #ccc; }
        .coupon-code b { font-size: 28px; }
        .coupon-code span { font-size: 52px; color: #C20303; margin-top: 8px; }

        .coupon-banner { display:flex; align-items: center; justify-content: center; flex-direction: column; line-height:1.2;  }
        .coupon-banner span.col1 { font-size: 32px; }
        .coupon-banner span.col2 { font-size: 42px; }
        .coupon-banner span.col3 { font-size: 52px; font-weight: 800; }

        .app { display:flex; align-items: center; justify-content: center; flex-wrap: wrap; }
        .app li { margin: 5px;  }
        .app li div { display:flex; align-items: center; justify-content: center; flex-direction: column; width: 80px; height: 80px; padding: 5px 10px; border-radius: 18px; border-right: 4px solid #e6e6e6; border-bottom: 4px solid #e6e6e6;}
        .app li div img { height: 36px; margin-bottom: 3px; }
        .app li div span { font-size: 13px; font-weight: normal; line-height:1.1; }

        .footer { position: fixed; bottom:28px; left:0; height: 60px; width: 100%; background-color: #007bff; padding: 0 30px; color: #fff; line-height:1; font-size: 28px; }
        .footer .qrcode { position:absolute; left:0; top:-25px; height: 110px; width: 110px; }
        .footer .phone { position:absolute; left:135px; top: 9px; font-size: 42px; }

        @media only screen and (max-width: 767px){
            .footer { position: relative; bottom: unset; margin-top: 40px; font-size: 16px; text-align: left; }
            .footer .qrcode { top: -50px; }
            .footer .phone {  font-size: 20px; left: unset; right: 10px; top: -5px; }
            .footer .h-100 {  height: auto; padding-top: 10px; }
        }
        @media print {
            /* ISO Paper Size */
            @page {
                size: A4 landscape;
            }
            /* Size in mm */
            @page {
                size: 100mm 200mm landscape;
            }
            /* Size in inches */
            @page {
                size: 4in 6in landscape;
            }
            .app li { zoom:70%; }

        }
    </style>

</head>
<body>

<div id="app">
    <div class="container-fluid">
        <img class="logo" src="https://www.comnet.com.tr/assets/img/logo-color.svg?v=1" alt="comnet">

        <div class="row">
            <div class="col-md-6">
                <h1 class="title"><span>150+ Peering (Ara Bağlantı) ile</span> Türkiye'nin En Ucuz ve<br> En Hızlı İnterneti</h1>
                <ul class="app">
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/youtube.png" alt=""><span>Youtube</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/netflix.svg" alt=""><span>Netflix</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/instagram.png" alt=""><span>Instagram</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/facebook.png" alt=""><span>Facebook</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/whatsapp.png" alt=""><span>Whatsapp</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/twitch.png" alt=""><span>Twitch</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/steam.svg" alt=""><span>Steam</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/zoom.svg" alt=""><span>Zoom</span></div></li>
                    <li><div><img src="https://www.comnet.com.tr/assets/img/peering/riot.png" alt=""><span>Riot Games</span></div></li>
                    <li><div><span>ve daha fazlası</span></div></li>
                </ul>
                <p class="sub-title">100 Mbit Kotasız, Taahhütsüz İnternet <span>199 TL <small>'den başlayan fiyatlarla</small></span></p>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center flex-column">
                <div class="coupon-banner">
                    <span class="col1">30 GÜNLÜK</span> <span class="col2">İNTERNETİNİZ</span> <span class="col3">BİZDEN OLSUN</span>
                </div>
                <div class="coupon-code" v-if="code">
                    <b>Kupon Kodu*</b>
                    <span v-cloak>{{code}}</span>
                </div>
                <div class="coupon-code" v-else>
                    <b style="color: red;"><?= $invitecode ?></b>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 10px;">
                    <p style="text-align: left; ">* Bu kupon kodu ile başvuru yaptığınızda +45 gün hesabınıza<br> otomatik olarak eklenecektir.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-6 position-relative">
                    <img class="qrcode" src="https://www.comnet.com.tr/assets/img/qrcode.svg" alt="qrcode">
                    <span class="phone">444 4678</span>
                </div>
                <div class="col-md-6 h-100 d-flex justify-content-end align-items-center">
                    www.comnet.com.tr
                </div>
            </div>
        </div>
    </div>
</div>


<script defer src="https://www.comnet.com.tr/assets/js/jquery-3.6.0.min.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/vue.min.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/moment.min.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/noty.min.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/v-mask.min.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/snc.init.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/snc.core.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/snc.common.js"></script>
<script defer src="https://www.comnet.com.tr/assets/js/snc.vue.js?v=77"></script>
<script>
    
</script>






</body>

</html>
<?php
$product_price = "";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.comnet.com.tr/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($curl);
curl_close($curl);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$elements = $xpath->query("//section[@class='section-margin']/div[@class='2xl:container max-sm:pr-0']/div[@class='wrapper-rounded lgmid:wrapper-shadow lgmid:border lgmid:bg-gradient-standard-opaque  lgmid:py-12 max-2xl:lgmid:mx-4']/div[@class='overflow-x-auto xl:mx-3']");
if($elements->length == 0){
    echo "Element bulunamadı";
    exit;
}else{
     $product_price = substr($elements->item(0)->nodeValue,260,-825);
if (isset($_GET["invite_code"])) {
    $invitecode = $_GET["invite_code"];
    if ($invitecode == "") {
        header("Location: index.php?status=empty");
    }
} else {
    header("Location: index.php?status=nodata");
}
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
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Comnet">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#0d1529" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.comnet.com.tr/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.comnet.com.tr/assets/css/style.css">
</head>

<body>

    <div id="app">
        <div class="container-fluid">
            <img class="logo" src="https://www.comnet.com.tr/assets/img/logo-color.svg?v=1" alt="comnet">

            <div class="row">
                <div class="col-md-6">
                    <h1 class="title"><span>150+ Peering (Ara Bağlantı) ile</span> Türkiye'nin En Ucuz ve<br> En Hızlı İnterneti</h1>
                    <ul class="app">
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/youtube.png" alt=""><span>Youtube</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/netflix.svg" alt=""><span>Netflix</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/instagram.png" alt=""><span>Instagram</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/facebook.png" alt=""><span>Facebook</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/whatsapp.png" alt=""><span>Whatsapp</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/twitch.png" alt=""><span>Twitch</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/steam.svg" alt=""><span>Steam</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/zoom.svg" alt=""><span>Zoom</span></div>
                        </li>
                        <li>
                            <div><img src="https://www.comnet.com.tr/assets/img/peering/riot.png" alt=""><span>Riot Games</span></div>
                        </li>
                        <li>
                            <div><span>ve daha fazlası</span></div>
                        </li>
                    </ul>
                    <p class="sub-title">100 Mbit Kotasız, Taahhütsüz İnternet <span><?= $product_price ?><small>'den başlayan fiyatlarla</small></span></p>
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
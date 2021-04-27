<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/activity-detail.css" />
    <title>行程細節頁</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
</head>
<body>
<?php include __DIR__ . '/parts-php/html-navbar.php'; ?>
<section class="hero-section">
    <div class="container">
        <div class="hero-section-background-image"></div>
        <p class="title ff-noto none">嘉明湖三日登山行程</p>
        <div class="hero-section-image-desktop"></div>
    </div>
</section>

<section class="activity-detail-section">
    <div class="activity-detail-section-image">
        <p class="text-image ff-noto">查看照片</p>
        <p class="text-price ff-airbnb">TWD 6,300</p>
    </div>
    <div class="container">
        <div class="floor-1 flex">
            <p class="text ff-noto">嘉明湖三日登山行程</p>
                <svg class="icon-heart svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-heart"></use>
                </svg>
        </div>
        <div class="floor-2">
            <div class="floor-2-1 flex">
                <span>
                    <svg class="icon-star svg">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                    </svg>
                </span>
                <span class="ff-airbnb">4.5</span>
                <span class="ff-noto">(24則評價)</span>
            </div>
            <div class="floors flex">
                <div class="floor-2-2">
                    <span>
                        <svg class="icon-place svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-place"></use>
                        </svg>
                    </span>
                    <span class="ff-noto">台灣 - 台中</span>
                </div>
            
                    <div class="floor-2-3-1">
                        <span>
                        <svg class="icon-difficulty svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-difficulty"></use>
                        </svg>
                        </span>
                        <span class="ff-noto">行程難度: 容易</span>
                    </div>
                    <div class="floor-2-3-2">
                        <span>
                        <svg class="icon-time svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-time"></use>
                        </svg>
                        </span>
                        <span class="ff-noto">行程難度: 3天</span>
                    </div>
         
            </div>
        </div>
    </div>
</section>

<section class="activity-intro-section">
    <div class="container">
        <h2 class="title ff-noto">南湖大山簡介</h2>
        <ul class="mountain-intro flex">
            <li class="text">
                <p class="title ff-noto">南湖大山</p>
                <p class="text ff-noto">
                    南湖大山，中央山脈北段最高峰。台灣五嶽的北嶽盟主，高度上雖不及玉山、雪山、秀姑巒山，但在山友與學者的心目中，
                    地位幾乎一致崇高，更是此生必來朝拜的百岳殿堂。
                    有著帝王般莊嚴神聖的尊榮的主峰，引領周遭十數個山頭，形成如天際高台般的南湖地壘。
                    過去，大量冰河曾經來過，留下最完整且多量的的冰河圈谷遺跡。
                    到現在，南湖大山仍舊是台灣積雪最豐厚的地方，因這裡獨特的生態與地質，成為學術研究價值最高的高山地區。
                </p>
            </li>
            <li class="picture"></li>
            <li class="text">
                <p class="title ff-noto">南湖圈谷:</p>
                <p class="text ff-noto">
                    南湖山區特殊的地形是由南湖主、東峰稜脊環夾，中間形成上下兩個寬闊的大圈谷，
                    部份地質學者認為是冰河遺跡；無論登山或學術探討，南湖山區均為一重要的區域。
                </p>
            </li>
            <li class="picture"></li>
            <li class="text">
                <p class="title ff-noto">多加屯山</p>
                <p class="text ff-noto">
                    位於宜蘭縣大同鄉與台中市和平區交界處，隸屬於中央山脈，南湖大山往西延伸出來的支脈尾端，
                    是登南湖大山的第一座山頭，而在其半山稜線起點的松風嶺則以大片二葉松純林聳立，地上滿是松針舖地，週遭環境盡是松香而聞名。
                </p>
            </li>
            <li class="picture"></li>
        </ul>
    </div>
</section>





<?php include __DIR__ . '/parts-php/html-scripts&footer.php'; ?>
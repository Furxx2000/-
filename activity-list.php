<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/activity-list.css" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
</head>
<body>
<?php include __DIR__ . '/parts-php/html-navbar.php'; ?>
<section class="hero-section">
    <div class="container">
        <div class="hero-section-image">
            <h3 class="title ff-noto">千里之行始於足下</h3>
            <hr>
            <a href="#">
                <svg class="icon-arrow-down svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-arrow-down"></use>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="activity-section">
    <div class="container">
        <div class="filter-section flex">
            <div class="filterBox">
                <svg class="icon-star svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-star"></use>
                </svg>
                <p class="text ff-noto">評分</p>
            </div>
            <div class="filterBox">
                <svg class="icon-place svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-place"></use>
                </svg>
                <p class="text ff-noto">位置</p>
            </div>
            <div class="filterBox">
                <svg class="icon-difficulty svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-difficulty"></use>
                </svg>
                <p class="text ff-noto">難度</p>
            </div>
            <div class="filterBox">
                <svg class="icon-time svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-time"></use>
                </svg>
                <p class="text ff-noto">時間</p>
            </div>
            <div class="filterBox">
            <svg class="icon-price svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-price"></use>
                </svg>
                <p class="text ff-noto">價格</p>
            </div>
        </div>
        
        <div class="activity-card">
            <div class="activity-card-image"></div>
            <div class="activity-description">
                <div class="floor-1 flex">
                    <p class="text ff-noto">嘉明湖</p>
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
                        <div class="floor-2-3 flex">
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

                <div class="floor-3">
                    <p class="text ff-noto">
                    台灣最高的高山湖泊,它的形成有著各種的傳說，而隕石撞擊而成的湖泊是目前最常被提及的說法之一。這裏同時也是大型野生動物常常出現的地方，夜間於三千公尺左右的山屋時，水鹿就會悄悄地到來！本行程規劃健行向陽山、三叉山兩座3000公尺高山，連綿十多公里的高山草原景觀，絕對讓你驚嘆不已!!
                    </p>
                </div>

                <div class="floor-4">
                    <div class="top-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">剩餘名額：7</p>
                        </div>
                        <div class="rightBox">
                            <p class="text ff-airbnb">NTD 6,300</p>
                        </div>
                    </div>
                    <div class="bottom-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">出發日期 2021/04/02</p>
                        </div>
                        <a href="#">
                            <div class="activity-section-cta ff-noto">
                                查看行程
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <div class="activity-card">
            <div class="activity-card-image"></div>
            <div class="activity-description">
                <div class="floor-1 flex">
                    <p class="text ff-noto">嘉明湖</p>
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
                        <div class="floor-2-3 flex">
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

                <div class="floor-3">
                    <p class="text ff-noto">
                    台灣最高的高山湖泊,它的形成有著各種的傳說，而隕石撞擊而成的湖泊是目前最常被提及的說法之一。這裏同時也是大型野生動物常常出現的地方，夜間於三千公尺左右的山屋時，水鹿就會悄悄地到來！本行程規劃健行向陽山、三叉山兩座3000公尺高山，連綿十多公里的高山草原景觀，絕對讓你驚嘆不已!!
                    </p>
                </div>

                <div class="floor-4">
                    <div class="top-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">剩餘名額：7</p>
                        </div>
                        <div class="rightBox">
                            <p class="text ff-airbnb">NTD 6,300</p>
                        </div>
                    </div>
                    <div class="bottom-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">出發日期 2021/04/02</p>
                        </div>
                        <a href="#">
                            <div class="activity-section-cta ff-noto">
                                查看行程
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        
        <div class="activity-card">
            <div class="activity-card-image"></div>
            <div class="activity-description">
                <div class="floor-1 flex">
                    <p class="text ff-noto">嘉明湖</p>
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
                        <div class="floor-2-3 flex">
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

                <div class="floor-3">
                    <p class="text ff-noto">
                    台灣最高的高山湖泊,它的形成有著各種的傳說，而隕石撞擊而成的湖泊是目前最常被提及的說法之一。這裏同時也是大型野生動物常常出現的地方，夜間於三千公尺左右的山屋時，水鹿就會悄悄地到來！本行程規劃健行向陽山、三叉山兩座3000公尺高山，連綿十多公里的高山草原景觀，絕對讓你驚嘆不已!!
                    </p>
                </div>

                <div class="floor-4">
                    <div class="top-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">剩餘名額：7</p>
                        </div>
                        <div class="rightBox">
                            <p class="text ff-airbnb">NTD 6,300</p>
                        </div>
                    </div>
                    <div class="bottom-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">出發日期 2021/04/02</p>
                        </div>
                        <a href="#">
                            <div class="activity-section-cta ff-noto">
                                查看行程
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <div class="activity-card">
            <div class="activity-card-image"></div>
            <div class="activity-description">
                <div class="floor-1 flex">
                    <p class="text ff-noto">嘉明湖</p>
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
                        <div class="floor-2-3 flex">
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

                <div class="floor-3">
                    <p class="text ff-noto">
                    台灣最高的高山湖泊,它的形成有著各種的傳說，而隕石撞擊而成的湖泊是目前最常被提及的說法之一。這裏同時也是大型野生動物常常出現的地方，夜間於三千公尺左右的山屋時，水鹿就會悄悄地到來！本行程規劃健行向陽山、三叉山兩座3000公尺高山，連綿十多公里的高山草原景觀，絕對讓你驚嘆不已!!
                    </p>
                </div>

                <div class="floor-4">
                    <div class="top-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">剩餘名額：7</p>
                        </div>
                        <div class="rightBox">
                            <p class="text ff-airbnb">NTD 6,300</p>
                        </div>
                    </div>
                    <div class="bottom-section flex">
                        <div class="leftBox">
                            <p class="text ff-noto">出發日期 2021/04/02</p>
                        </div>
                        <a href="#">
                            <div class="activity-section-cta ff-noto">
                                查看行程
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>  
    </div>

    <section class="pagination-section">
        <div class="container">
            <ul class="pagination flex">
                <a href="#">
                    <li class="arrow-forward">
                        <svg class="icon-arrow_back_ios svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-arrow_back_ios"></use>
                        </svg>
                    </li>
                </a>
                <a href="#">
                    <li class="ff-airbnb text-first">
                        1
                    </li>
                </a>
                <a href="#">
                    <li class="ff-airbnb">
                        2
                    </li>
                </a>
                <a href="#">
                    <li class="ff-airbnb">
                        3
                    </li>
                </a>
                <a href="#">
                    <li class="ff-airbnb">
                        4
                    </li>
                </a>
                <a href="#">
                    <li class="ff-airbnb">
                        5
                    </li>
                </a>
                <a href="#">
                    <li class="arrow-backward">
                        <svg class="icon-arrow_forward_ios svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-arrow_forward_ios"></use>
                        </svg>
                    </li>
                </a>
            </ul>
        </div>      
    </section>
</section>




<?php include __DIR__ . '/parts-php/html-scripts&footer.php'; ?>

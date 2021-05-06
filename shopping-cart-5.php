<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/shopping-cart-5.css" />
    <title>購物車頁</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
</head>

<body>
    <?php include __DIR__ . '/parts-php/html-navbar.php'; ?>
    
    <section class="progress-bar-section hero-section">
        <div class="container">
            <ul class="progress-bar flex">
                <li class="dots">
                    <p class="title ff-noto">
                        確認購買清單
                        <svg class="icon-play svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-play"></use>
                        </svg>
                    </p>
                    <div class="outer-circle">
                        <div class="inner-circle">
                            <div class="line"></div>
                        </div>
                    </div>
                </li>
                <li class="dots">
                    <p class="title ff-noto">
                        選額計算及配送方式
                        <svg class="icon-play svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-play"></use>
                        </svg>
                    </p>
                    <div class="outer-circle">
                        <div class="inner-circle">
                            <div class="line"></div>
                        </div>
                    </div>
                </li>
                <li class="dots">
                    <p class="title ff-noto">
                        填寫訂購人資訊及收貨人資訊
                        <svg class="icon-play svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-play"></use>
                        </svg>
                    </p>
                    <div class="outer-circle">
                        <div class="inner-circle">
                            <div class="line"></div>
                        </div>
                    </div>
                </li>
                <li class="dots">
                    <p class="title ff-noto">
                        填寫信用卡資料
                        <svg class="icon-play svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-play"></use>
                        </svg> 
                    </p>
                    <div class="outer-circle">
                        <div class="inner-circle">
                            <div class="line"></div>
                        </div>
                    </div>
                </li>
                <li class="dots">
                    <p class="title ff-noto">
                        完成訂購
                        <svg class="icon-play svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-play"></use>
                        </svg>
                    </p>
                    <div class="outer-circle">
                        <div class="inner-circle"></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="order-complete-section">
        <div class="container">
            <div class="circle">
                <svg class="icon-done svg">
                    <use xlink:href="./icomoon/symbol-defs.svg#icon-done"></use>
                </svg>
            </div>
            <h2 class="title ff-noto">恭喜! 訂單已完成</h2>
        </div>
    </section>

    <section class="shopping-cart-section">
        <div class="container">
            <div class="shopping-cart">
                <div class="order-date">
                    <p class="text ff-noto">於2021/04/19購買清單</p>
                </div>
                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1">
                                <img src="./images/backpack3-1.jpg" alt="">
                            </div>
                            <div class="left-1-2">
                                <p class="title ff-airbnb">
                                    (QUECHUA) 30L 多隔層休閒健行背包
                                </p>
                                <p class="text ff-airbnb">
                                    商品編號：12315164465
                                </p>
                            </div>
                        </div>
                        <div class="left-2">
                      
                            <p class="num ff-airbnb">1件</p>
                         
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$649 TWD</span></div>
                    </div>
                
                </div>

                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1">
                                <img src="./images/Black Diamond -TRAIL TREKKING 1.jpeg" alt="">
                            </div>
                            <div class="left-1-2">
                                <p class="title ff-airbnb">
                                Black Diamond 美國】TRAIL TREKKING 快扣登山杖 （女款）
                                </p>
                                <p class="text ff-airbnb">
                                    商品編號：456789123
                                </p>
                            </div>
                        </div>
                        <div class="left-2">
                            
                            <p class="num ff-airbnb">1件</p>
                            
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$1,710 TWD</span></div>
                    </div>
                    
                </div>

                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1">
                                <img src="./images/sleepingBag.jpg" alt="">
                            </div>
                            <div class="left-1-2">
                                <p class="title ff-airbnb">
                                【THERMAREST】Hyperion -6°C 羽絨睡袋 L
                                </p>
                                <p class="text ff-airbnb">
                                    商品編號：856456786
                                </p>
                            </div>
                        </div>
                        <div class="left-2">
                            
                            <p class="num ff-airbnb">1件</p>
                            
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$17,100 TWD</span></div>
                    </div>
                    
                </div>

                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1 picture">
                                <img src="./images/he_huan_shan.jpeg" alt="">
                            </div>
                            <div class="left-1-2 w150">
                                <p class="title ff-airbnb date">
                                    2020/5/04 - 05/06
                                </p>
                                <p class="text ff-airbnb">
                                    合歡山三日行程
                                </p>
                            </div>
                        </div>
                        <div class="left-2 ml-5">
                            
                            <p class="num ff-airbnb">1 人</p>
                            
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$7,550 TWD</span></div>
                    </div>
                    
                </div>

                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1 picture">
                                <img src="./images/Nan_hu_mountain_2.jpeg" alt="">
                            </div>
                            <div class="left-1-2 w150">
                                <p class="title ff-airbnb date">
                                    2020/6/18 - 06/20
                                </p>
                                <p class="text ff-airbnb">
                                    南湖大山三日行程
                                </p>
                            </div>
                        </div>
                        <div class="left-2 ml-5">
                            
                            <p class="num ff-airbnb">1 人</p>
                            
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$6,500 TWD</span></div>
                    </div>
                    
                </div>

                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1 picture">
                                <img src="./images/大霸尖山.jpg" alt="">
                            </div>
                            <div class="left-1-2 w150">
                                <p class="title ff-airbnb date">
                                    2020/5/25 - 05/27
                                </p>
                                <p class="text ff-airbnb">
                                    大霸尖山三日行程
                                </p>
                            </div>
                        </div>
                        <div class="left-2 ml-5">
                            
                            <p class="num ff-airbnb">1 人</p>
                            
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$7,000 TWD</span></div>
                    </div>
                    
                </div>

                <div class="total">
                    <p class="text ff-noto">總計金額</p>
                    <p class="text ff-airbnb">$40,509 TWD</p>
                </div>
            </div>
        </div>
    </section>

    <section class="order-detail-section">
        <div class="container">
            <div class="info-box">
                <h4 class="title ff-noto">訂單詳細資訊</h4>
                <div class="flex">
                    <p class="text ff-noto">訂單編號</p>
                    <p class="text ff-noto">4561235745</p>
                </div>
            </div>

            <div class="info-box">
                <h4 class="title ff-noto">運送</h4>
                <div class="flex">
                    <p class="text ff-noto">運送方式</p>
                    <p class="text ff-noto">宅配</p>
                </div>
            </div>

            <div class="info-box">
                <h4 class="title ff-noto">訂購人資訊</h4>
                <div class="flex">
                    <p class="text ff-noto">姓名</p>
                    <p class="txet ff-noto">Diana</p>
                </div>
                <div class="flex">
                    <p class="text ff-noto">連絡電話</p>
                    <p class="txet ff-noto">0913555444</p>
                </div>
                <div class="flex">
                    <p class="text ff-noto">E-mail</p>
                    <p class="text ff-noto">Diana0112@gmail.com</p>
                </div>
            </div>

            <div class="info-box">
                <h4 class="title ff-noto">收貨人資訊</h4>
                <div class="flex">
                    <p class="text ff-noto">姓名</p>
                    <p class="text ff-noto">Steph</p>
                </div>
                <div class="flex">
                    <p class="text ff-noto">連絡電話</p>
                    <p class="text ff-noto">0951222464</p>
                </div>
                <div class="flex">
                    <p class="text ff-noto">E-mail</p>
                    <p class="text ff-noto">steph0515@gmail.com</p>
                </div>
            </div>
            <a href="./nomadHomePage.php"><div class="homePage-btn ff-noto">返回首頁</div></a>
        </div>
        
    </section>

    


    <?php include __DIR__ . '/parts-php/html-footer.php'; ?>

    <div class="spaceForFixed-mobile"></div>

    <?php include __DIR__ . '/parts-php/html-fixedBar.php'; ?>
    <?php include __DIR__ . '/parts-php/html-scripts.php'; ?>

    <?php include __DIR__ . '/parts-php/html-endingTag.php'; ?>
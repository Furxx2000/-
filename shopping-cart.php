<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/shopping-cart.css" />
    <title>購物車頁</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
</head>

<body>
    <?php include __DIR__ . '/parts-php/html-navbar.php'; ?>
    <section class="progress-bar-section">
        <div class="container">
            <ul class="progress-bar flex">
                <li class="dots ff-noto">確認購買清單</li>
                <li class="dots ff-noto">選額計算及配送方式</li>
                <li class="dots ff-noto">填寫訂購人資訊及收貨人資訊</li>
                <li class="dots ff-noto">填寫信用卡資訊</li>
                <li class="dots ff-noto">完成訂購</li>
            </ul>
        </div>
    </section>

    <section class="shopping-cart-section">
        <div class="container">
            <h2 class="title ff-noto">商品及行程</h2>
            <div class="shopping-cart">
                <h2 class="text ff-noto">商品</h2>
                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1"></div>
                            <div class="left-1-2">
                                <p class="title ff-noto">
                                    (QUECHUA) 30L 多隔層休閒健行背包
                                </p>
                                <p class="text ff-noto">
                                    商品編號：12315164465
                                </p>
                            </div>
                        </div>
                        <div class="left-2">
                            <span class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </span>
                            <span class="num">2</span>
                            <span class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="left-3"><span>750 NTD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
                    </div>
                </div>

                <h2 class="text ff-noto">行程</h2>
                <div class="itemBox flex">
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1"></div>
                            <div class="left-1-2">
                                <p class="title ff-noto">
                                    (QUECHUA) 30L 多隔層休閒健行背包
                                </p>
                                <p class="text ff-noto">
                                    商品編號：12315164465
                                </p>
                            </div>
                        </div>
                        <div class="left-2">
                            <span class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </span>
                            <span class="num">2</span>
                            <span class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="left-3"><span>750 NTD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
                    </div>
                </div>

                <div class="total">
                    <p class="text ff-noto">小結</p>
                    <p class="text ff-airbnb">2,250 NTD</p>
                </div>

                <div class="checkout-cta">
                    <p class="text ff-noto">前往結帳</p>
                </div>




            </div>
        </div>
    </section>

    <?php include __DIR__ . '/parts-php/html-footer.php'; ?>
    <?php include __DIR__ . '/parts-php/html-fixedBar.php'; ?>
    <?php include __DIR__ . '/parts-php/html-scripts.php'; ?>
    <?php include __DIR__ . '/parts-php/html-endingTag.php'; ?>
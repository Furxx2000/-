<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/shopping-cart-1.css" />
    <title>購物車頁</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
</head>

<body>
    <?php include __DIR__ . '/parts-php/html-navbar.php'; ?>

    <section class="progress-bar-section">
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

    <section class="shopping-cart-section">
        <div class="container">
            <h2 class="title ff-noto">商品及行程</h2>
            <div class="shopping-cart">
                <div class="align">
                    <span class="line"></span>
                    <h2 class="text ff-noto">商品</h2>
                    <span class="line2 none"></span>
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
                            <p class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb">1</p>
                            <p class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$649 TWD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
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
                            <p class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb">1</p>
                            <p class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$1,710 TWD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
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
                            <p class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb">1</p>
                            <p class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$17,100 TWD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
                    </div>
                </div>

                <div class="align  mt-3">
                    <span class="line"></span>
                    <h2 class="text ff-noto">行程</h2>
                    <span class="line2 none"></span>
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
                            <p class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb">1 人</p>
                            <p class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$7,550 TWD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
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
                            <p class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb">1 人</p>
                            <p class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$6,500 TWD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
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
                            <p class="minus">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb">1 人</p>
                            <p class="add">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb">$7,000 TWD</span></div>
                    </div>
                    <div class="right">
                        <svg class="icon-cross svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                        </svg>
                    </div>
                </div>

                <div class="total">
                    <p class="text ff-noto">小結</p>
                    <p class="text ff-airbnb">$40,509 TWD</p>
                </div>

                <a href="./shopping-cart-2.php">
                    <div class="checkout-cta">
                        <p class="text ff-noto">前往結帳</p>
                    </div>
                </a>



            </div>
        </div>
    </section>

    <div class="delete-item-modal">
        <div class="container">
            <div class="delete-warning-card">
                <div class="flex">
                    <svg class="icon-cross svg none">
                        <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                    </svg>
                </div>
                <p class="text ff-noto">刪除後的商品將無法復原<br>確認刪除嗎?</p>
                <div class="btns flex">
                    <p class="cancel-btn ff-noto">取消</p>
                    <p class="confirm-btn ff-noto">確認</p>
                </div>
            </div>
        </div>
    </div>


    <?php include __DIR__ . '/parts-php/html-footer.php'; ?>

    <div class="spaceForFixed-mobile"></div>

    <?php include __DIR__ . '/parts-php/html-fixedBar.php'; ?>
    <?php include __DIR__ . '/parts-php/html-scripts.php'; ?>
    
    <script>
        const delItemModal = document.querySelector('.delete-item-modal');
        const delItemBtns = document.querySelectorAll('.icon-cross');
        const cancelBtn = document.querySelector('.cancel-btn');
        const exitDelPage = document.querySelector('.delete-item-modal .icon-cross');


        delItemBtns.forEach(delItemBtn => {
                delItemBtn.addEventListener('click', () => {
                delItemModal.classList.add('open');
            });
        });
        

        cancelBtn.addEventListener('click', () => {
            delItemModal.classList.remove('open');
        });

        exitDelPage.addEventListener('click', () => {
            delItemModal.classList.remove('open');
        })

        

    </script>


    <?php include __DIR__ . '/parts-php/html-endingTag.php'; ?>
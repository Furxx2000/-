<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/shopping-cart-3-1.css" />
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

    <section class="order-detail-section">
        <div class="container">
            <h2 class="title ff-noto">個人資料填寫(保險用)</h2>
            <div class="orderer-info-form">
                <form action="./shopping-cart-4.php" method="post">
                    <h4 class="text ff-noto">訂購人資訊</h4>
                    <ul class="form-items">
                        <li class="box flex">
                            <label id="name" for="name" class="text ff-noto">姓名</label> 
                            <input class="ff-noto" type="text" name="name" required>
                        </li>
                        <li class="box flex gender">
                            <label for="gender" class="text ff-noto">性別</label>   
                            <div class="box">
                                <input id="male" class="male" type="radio" name="gender" value="male"  required>

                                <label for="male" class="text ff-noto">男</label> 

                                <input id="female" class="female" type="radio" name="gender" value="female"  required>

                                <label for="female" class="text ff-noto">女</label>
                            </div>
                        </li>
                        <li class="box flex">
                            <label id="pid" for="pid" class="text ff-noto">身分證字號</label>
                            <input class="ff-airbnb" type="text" name="pid" required>
                        </li>
                        <li class="box flex">
                            <label id="birth-date" for="birth-date" class="text ff-noto">出生年月日</label>
                            <input class="ff-airbnb" type="date" name="birth-date" placeholder="1990/01/01" required>
                        </li>
                        <li class="box flex">
                            <label id="email" for="email" class="text ff-noto">電子信箱</label>
                            <input class="ff-airbnb" type="email" name="email" required>
                        </li>
                        <li class="box flex">
                            <label id="phone-number" for="phone-number" class="text ff-noto">連絡電話</label>
                            <input class="ff-airbnb" type="tel" name="tel" required>
                        </li>
                        <li class="box flex">
                            <label id="address" for="address" class="text ff-noto">聯絡地址</label>
                            <input class="ff-noto" type="text" name="address" required>
                        </li>                    
                        <li class="box flex">
                            <label id="line-id" for="line-id" class="text ff-noto">LineID</label> 
                            <input class="ff-airbnb" type="text" name="line-id" required>
                        </li>
                        <li class="box flex">
                            <label id="country" for="country" class="text ff-noto">國籍</label>
                            <input class="ff-airbnb" type="text" name="country" required>
                        </li>
                        <li class="box flex">
                            <label id="critical-illness" for="critical-illness" class="text ff-noto">重大疾病</label>
                            <input class="ff-airbnb" type="text" name="critical-illness" required>
                        </li>
                        <li class="box flex">
                            <label id="emergency-contact" for="emergency-contact-name" class="text ff-noto">緊急聯絡人</label>
                            <input class="ff-noto" type="text" name="emergency-contact-name" required>
                        </li>
                        <li class="box flex">
                            <label id="emergency-contact-relation" for="emergency-contact-relation" class="text ff-noto">緊急聯絡人關係</label>
                            <input class="ff-noto" type="text" name="emergency-contact-relation" required>
                        </li>
                        <li class="btns flex">
                            <a href="./shopping-cart-3.php">   
                                <div class="backward-btn ff-noto">上一步</div>
                            </a>
                  
                                <input type="submit" name="order-info" value="下一步" class="forward-btn ff-noto">
       
                        </li>
                    </ul>
                </form>
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
        const exitDelPage = document.querySelector('.delete-item-modal .icon-cross');

        exitDelPage.addEventListener('click', () => {
            delItemModal.classList.remove('open');
        })

    </script>

    <script>
        

    </script>

    <?php include __DIR__ . '/parts-php/html-endingTag.php'; ?>
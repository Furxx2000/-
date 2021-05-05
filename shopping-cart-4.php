<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/shopping-cart-4.css" />
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

    <section class="credit-card-section">
        <div class="container">
            <h2 class="title ff-noto">填寫信用卡資料</h2>
            <div class="credit-card">
                <div class="card-info">
                    <p class="visa ff-airbnb"><i>VISA</i></p>
                    <div class="img">
                        <svg class="icon-chip svg">
                            <use xlink:href="./icomoon/symbol-defs.svg#icon-chip"></use>
                        </svg>
                    </div>
                    <ul class="card-number flex">
                        <li class="group-1">
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                        </li>
                        <li class="group-2">
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                        </li>
                        <li class="group-3">
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                            <span>●</span>
                        </li>
                        <li class="group-4">
                            <span class="num ff-airbnb">4</span>
                            <span class="num ff-airbnb">5</span>
                            <span class="num ff-airbnb">6</span>
                            <span class="num ff-airbnb">7</span>
                        </li>
                    </ul>

                    <div class="name-date flex">
                        <div class="box">
                            <p class="small ff-airbnb">CARDHOLDER NAME</p>
                            <p class="big ff-airbnb">John Doe</p>
                        </div>
                        <div class="box">
                            <p class="small ff-airbnb">EXPIRE DATE</p>
                            <p class="big ff-airbnb">05 / 2021</p>
                        </div>
                    </div>
                </div>
           

            <p class="text ff-airbnb none">Select Card Type</p>
            <div class="chooseCards flex">
                <p class="text ff-airbnb visa">Visa</p>
                <p class="text ff-airbnb mastercard">Master Card</p>
            </div>

            <form id="card-form" class="card-form" action="" method="post">
                <ul>
                    <li class="box flex">
                        <p class="text ff-noto">持卡人姓名</p> 
                        <input class="ff-noto" type="text" name="name" pattern="" required>
                    </li>
                    <li class="box flex">
                        <p class="text ff-noto">信用卡卡號</p>
                        <input class="ff-airbnb" type="text" name="card-number" pattern="" required>
                    </li>
                    <li class="box flex">
                        <p class="text ff-noto">信用卡有效年月</p>
                        <input class="ff-airbnb" type="date" name="expire-date" pattern="" required>
                    </li>
                    <li class="box flex">
                        <p class="text ff-noto">CCV</p>
                        <input class="ff-airbnb" type="text" name="CVV" pattern="" required>
                    </li>

                    <li class="btns flex">
                        <a href="./shopping-cart-3.php">   
                            <div class="backward-btn ff-noto">上一步</div>
                        </a>
                        <a href="">
                            <input type="submit" name="credit-card-info" value="結帳" class="forward-btn ff-noto">
                        </a>
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

    <script>
        

    </script>

    <?php include __DIR__ . '/parts-php/html-endingTag.php'; ?>
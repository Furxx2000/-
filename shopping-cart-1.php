<?php include __DIR__. '/parts-php/config.php'; ?>
<?php
$title = '購物車';
$pageName = 'cart';


?>


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



    <?php if(empty($_SESSION['cart'])): ?>
    <div class="noItem">
        <p class="text ff-noto">
            目前購物車是空的<br>
            快去看看有哪些適合妳的行程吧。
        </p>
    </div>
    <?php else: ?>


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



    <section class="shopping-cart-section hero-section">
        <div class="container">
            <div class="shopping-cart">
                <?php if(isset($_GET['pid'])): ?>

                <div class="align">
                    <span class="line"></span>
                    <h2 class="text ff-noto">商品</h2>
                    <span class="line2 none"></span>
                </div>
                <?php else: ?>
                <!-- <div class="itemBox flex">
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
                </div> -->

                <div class="align">
                    <span class="line"></span>
                    <h2 class="text ff-noto">行程</h2>
                    <span class="line2 none"></span>
                </div>

                <?php foreach($_SESSION['cart'] as $v): ?>
                <div class="itemBox flex" data-sid="<?= $v['sid'] ?>">
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
                                    <p class="confirm-btn ff-noto" onclick="deleteItem(event)">確認</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left flex">
                        <div class="left-1 flex">
                            <div class="left-1-1 picture">

                                <img src="<?= WEB_ROOT ?>/images/<?= $v['schedule_id'] ?>/<?= $v['schedule_id'] ?>.jpeg"
                                    class="card-img-top" alt="">

                            </div>
                            <div class="left-1-2 w150">
                                <p class="title ff-airbnb date">
                                    <?= $v['departure_date'] ?>
                                </p>
                                <p class="text ff-airbnb">
                                    <?= $v['schedule_title'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="left-2 ml-6">
                            <p class="minus" onclick="minusQty(event)">
                                <svg class="icon-remove svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-remove"></use>
                                </svg>
                            </p>
                            <p class="num ff-airbnb quantity" data-qty="<?= $v['quantity'] ?>"><?= $v['quantity'] ?></p>
                            <p class="add" onclick="addQty(event)">
                                <svg class="icon-add svg">
                                    <use xlink:href="./icomoon/symbol-defs.svg#icon-add"></use>
                                </svg>
                            </p>
                        </div>
                        <div class="left-3"><span class="num ff-airbnb price" data-price="<?= $v['price'] ?>"></span>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#">
                            <svg class="icon-cross svg">
                                <use xlink:href="./icomoon/symbol-defs.svg#icon-cross"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="itemBox flex">
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
                </div> -->
                <?php endif; ?>
                <?php endif; ?>

                <div class="total">
                    <p class="text ff-noto">小結</p>
                    <p class="text ff-airbnb totalPrice"></p>
                </div>

                <a href="./shopping-cart-2.php">
                    <div class="checkout-cta">
                        <p class="text ff-noto">前往結帳</p>
                    </div>
                </a>
            </div>
        </div>
    </section>




    <?php include __DIR__ . '/parts-php/html-footer.php'; ?>

    <div class="spaceForFixed-mobile"></div>

    <?php include __DIR__ . '/parts-php/html-fixedBar.php'; ?>
    <?php include __DIR__ . '/parts-php/html-scripts.php'; ?>

    <script>
    const quantity = $('.quantity');
    //金額轉換、加逗號
    const dollarCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    //刪除商品
    function deleteItem(event) {
        let me = $(event.currentTarget);
        let sid = me.closest('.itemBox').attr('data-sid');

        $.get('cart-api-2.php', {
            action: 'delete',
            sid: sid
        }, function(data) {

            me.closest('itemBox').remove();

            if ($('.shopping-cart-section > .itemBox').length < 1) {
                location.reload(); //重新輸入
            }
            showCartCount(data);
            calPrices();
        }, 'json');
    };

    //計算價格
    const calPrices = function() {
        let total = 0;

        $('.itemBox').each(function(index, element) {
            const $price = $(this).find('.price');
            const price = $price.attr('data-price') * 1;
            $price.text('$ ' + dollarCommas(price));

            const qty = $(this).find('.quantity').text() * 1;


            $(this).find('.price').text('$ ' + dollarCommas(price * parseInt(qty)) + ' TWD');
            total += price * parseInt(qty);
        });
        $('.totalPrice').text('$ ' + dollarCommas(total) + ' TWD');
    }


    const addQty = function(event) {
        const el = $(event.currentTarget);
        let qty = el.prev('.quantity').val();
        const sid = el.closest('.itemBox').attr('data-sid');

        qty++;

        el.prev('.quantity').val(qty);
        el.prev('.quantity').text(qty);


        $.get('cart-api-2.php', {
            action: 'add',
            sid,
            qty
        }, function(data) {
            showCartCount(data);
            calPrices();
        }, 'json');
    }


    const minusQty = function(event) {
        const el = $(event.currentTarget);
        let qty = el.next('.quantity').val();
        const sid = el.closest('.itemBox').attr('data-sid');

        if (qty > 1) {

            qty--;
            el.next('.quantity').val(qty);
            el.next('.quantity').text(qty);

            el.style = "background-color: var(-fifth-color)";

            $.get('cart-api-2.php', {
                action: 'add',
                sid,
                qty
            }, function(data) {
                showCartCount(data);
                calPrices();
            }, 'json');
        }

    }


    $(function() {
        //呈現數量
        quantity.each(function() {
            const qty = $(this).attr('data-qty') * 1;
            $(this).val(qty);
        });

        calPrices();
    });
    </script>


    <script>
    //   點選叉叉可以刪除商品
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
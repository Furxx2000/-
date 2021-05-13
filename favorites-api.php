<?php include __DIR__. '/parts-php/config.php'; 
$_SESSION['favorites'] =[];
if(! isset($_SESSION['favorites'])){
    $_SESSION['favorites'] =[];
}


// 1. 列表 2. 加入 3. 變更數量 4. 移除項目
// 1. list 2. add 3. update 4. delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list';//操作的動作
$pid = isset($_GET['pid']) ? $_GET['pid'] : 0;//商品id


switch($action){
    case 'add':
        if(! empty($pid)){
            $sql = "SELECT * FROM schedule WHERE sid=$pid"; // 查詢資料表
            $row = $pdo->query($sql)->fetch(); //撈出一筆資料

            if(! empty($row)){
                $_SESSION['favorites'][$row['sid']] = $row;//放到我的最愛裡面
            }
        } 
        break;
    case 'delete':
        if(! empty($pid)){
            unset($_SESSION['favorites'][$pid]);//移除該項行程
        }
        break;

    default:
    case 'list':
}

echo json_encode($_SESSION['favorites'], JSON_UNESCAPED_UNICODE);
?>































?>
<?php include __DIR__. '/parts-php/config.php'; 



// 1. 列表 2. 加入 3. 變更數量 4. 移除項目
// 1. list 2. add 3. update 4. delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list';//操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;//商品id

switch($action){
    case 'add':
        if(! empty($pid)){
            $sql = "SELECT * FROM schedule WHERE sid=$pid"; // 查詢資料表
            $row = $pdo->query($sql)->fetch(); //撈出一筆資料

            if(! empty($row)){
                $_SESSION['user']['id'] = 1;
                $type = 1;
                $target_id = $row['pid'];
                $f_sql = "INSERT INTO `favorites` (`id`, `member_id`, `type`, `target_id`, `date`)
                                        VALUES (NULL, ?, ?, ?, NOW())";

                $f_stmt = $pdo->prepare($f_sql);
                $f_stmt->execute([
                    $_SESSION['user']['id'],
                    $type,
                    $target_id
                ]);

                $favorite_sid = $pdo->lastInsertId();
            }
        } 
        break;
    case 'delete':
        if(! empty($pid)){
            // unset($_SESSION['favorites'][$pid]);//移除該項行程
        }
        break;

    default:
    case 'list':
}

echo json_encode($_SESSION['favorites'], JSON_UNESCAPED_UNICODE);
?>































?>
<?php include __DIR__. '/parts-php/config.php'; ?>
<?php
$title = '行程列表';
$pageName = 'activity-list';

// 分類

$where = ' WHERE 1 ';

$days = isset($_GET['days']) ? intval($_GET['days']) : 0;
if($days > 0){
    $where .= " AND days=$days ";
}

$level = isset($_GET['level']) ? $_GET['level'] : '';
if(! empty($level)){
    $where .= " AND level=". $pdo->quote($level);
}

$place = isset($_GET['place']) ? $_GET['place'] : '';
if(! empty($place)){
    $where .= " AND place_sid=". $pdo->quote($place);
}

$rating = isset($_GET['rating']) ? $_GET['rating'] : 0;
if($rating > 0){
    $where .= " AND floor(rating)=$rating ";
}

$priceLow = isset($_GET['priceLow']) ? intval($_GET['priceLow']) : 0;
$priceHigh = isset($_GET['priceHigh']) ? intval($_GET['priceHigh']) : 18000;

$where .= " AND price >= $priceLow AND price <= $priceHigh ";








// $r_f_sql = "SELECT * FROM rank_filter WHERE parent_sid = 0";
// $r_f_rows = $pdo->query($r_f_sql)->fetchAll();

// $p_f_sql = "SELECT * FROM place_filter WHERE parent_sid = 0";
// $p_f_rows = $pdo->query($p_f_sql)->fetchAll();

// $l_f_sql = "SELECT * FROM level_filter WHERE parent_sid = 0";
// $l_f_rows = $pdo->query($l_f_sql)->fetchAll();

// $d_f_sql = "SELECT * FROM days_filter WHERE parent_sid = 0";
// $d_f_rows = $pdo->query($d_f_sql)->fetchAll();

// $m_f_sql = "SELECT * FROM price_filter WHERE parent_sid = 0";
// $m_f_rows = $pdo->query($m_f_sql)->fetchAll();


$kind = isset($_GET['kind']) ? intval($_GET['kind']) : 0;


// $p_filter = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
// $qs = [];
// $where = ' WHERE 1 ';
// if(! empty($p_filter)){
//     if($kind === 1){
//         $where .=" AND place_sid = $p_filter";
//         $qs['cate'] = $p_filter; 
//     } elseif($kind === 2){
//         $where .=" AND level_sid = $p_filter";
//         $qs['cate'] = $p_filter;
//     } elseif($kind === 3){
//         $where .=" AND days = $p_filter";
//         $qs['cate'] = $p_filter;
//     } elseif($kind === 0){
//         $where .=" AND floor(rating) = $p_filter";
//         $qs['cate'] = $p_filter;
//     } elseif($kind === 4) {
//         $where .=" AND price_sid = $p_filter";
//         $qs['cate'] = $p_filter;
//     }
    
// }






// 取得總比數、總頁數、該頁的商品資料

$perPage = 4; //每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;//用戶要看第幾頁的商品

$t_sql = "SELECT COUNT(1) FROM schedule $where"; //Where 需要修改
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perPage);

if($page < 1) $page = 1;
if($page > $totalPages) $page = $totalPages;

$p_sql = sprintf("SELECT * FROM schedule $where LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();

echo json_encode([
    'perPage' => $perPage,
    'page' => $page,
    'kind' => $kind,
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'rows' => $rows,
], JSON_UNESCAPED_UNICODE);
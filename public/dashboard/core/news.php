<?php
    
    include '../app/connect.php';

    $sql = 'SELECT COUNT(*) AS `view` FROM `xabarlar`';

    $limit = 7  ;
    $count = $connect->query($sql)->fetch();
    // echo $count['count_news']; exit;
    $pages = ceil($count['view']/$limit);
    
    $offset = 0;
    if(isset($_GET['page']))
    {
        $offset = ($_GET['page'] - 1) * $limit;
    }

    $query = $connect
    ->query('SELECT * FROM `xabarlar` ORDER BY `id` DESC LIMIT '.$limit.' OFFSET '.$offset);

    $items = $query->fetchAll();

?>
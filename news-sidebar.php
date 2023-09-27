                    <div class="news_portal latest_div" >
                        <h4>Life Transforming Devotions</h4>
<?php

$latest = 'latest';
$popular = 'popular';

$sql = "SELECT * FROM news WHERE news_type = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$latest]);
$rows = $stmt->fetchAll();

foreach($rows as $row){

?>
                        <div class="Latest_headlines">
                            <h5><a href="news-details.php?id=<?php echo $row->news_id; ?>"><?php echo $row->news_title; ?></a></h5>
                        </div>
<?php
}
?>
                    </div>
                    <div class="news_portal most_div">
                        <h4>Recommended For You</h4>


    <div class="list-group w-auto">
    <?php
    $sql = "SELECT * FROM news WHERE news_type = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$popular]);
    $rows = $stmt->fetchAll();
    foreach($rows as $row){

    ?>
    <a href="news-details.php?id=<?php echo $row->news_id; ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true" >
        <img src="admin/news-images/<?php echo $row->news_img; ?>" alt="twbs" width="70px" height="100%" class="rounded flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
            <h6 class="mb-0"><?php echo $row->news_title; ?></h6>
            <p class="mb-0 opacity-75">May God Bless your reading...</p>
        </div>
        <small class="opacity-50 text-nowrap">now</small>
        </div>
        <?php
    }

    ?>
    </div>

</div>

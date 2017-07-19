<?php include ROOT.'/views/layouts/header.php'; ?>

        <div class="container">
            <div id="add-pictures"></div>
        </div>
    <div class="container">
        <div class="container">
            <div id="gallery" >
                <? foreach ($gallery as $items):?>
                    <div class="col-lg-6" id="helped">
                        <div ><?= $items['date'] ;?></div>
                        <p><img src="/template/images/pic<?php echo $items['id'] ;?>.<?php echo $items['format'] ;?>" width="85%" height="55%" alt="" /></p>
                        <div ><p><?= $items['comment'] ;?> </p></div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>

<?php include ROOT.'/views/layouts/footer.php'; ?>
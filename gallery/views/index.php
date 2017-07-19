<?php include ROOT.'/views/layouts/header.php'; ?>

    <div class="container">
        <div id="add-pictures">

        </div>
    </div>
    <div class="container">
        <div class="container">
            <div id="gallery" >
                <? foreach ($gallery as $items):?>
                    <div class="col-lg-4" id="helped">
                        <div ><?= $items['date'] ;?></div>
                       <p><img src="/template/images/pic<?php echo $items['id'] ;?>.<?php echo $items['format'] ;?>" width="300" height="220" alt="" /></p>
                     <p><?= $items['comment'] ;?> </p><br />
                        <a href='/delete/<?= $items['id'] ;?>' class='btn btn-primary'>Delete</a>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>

<?php include ROOT.'/views/layouts/footer.php'; ?>
<?php

    $modalData = $params['modalData'];
    $postId = $params['postId'];
    $attr = $params['attr'];
    $relationLang = explode(',', $attr['lang']);
    $relationPage = explode(',', $attr['page']);
?>

<div class="modal-select-lang">
    <div class="msl-title"><?php echo $modalData['title_modal']?></div>
    <div class="msl-select">
        <?php $i = 0; foreach ($relationPage as $page => $key){ ?>
            <?php if((int)$key === (int)$postId){?>
                <button data-action="close-mlt"><?php echo $relationLang[$i]?></button>
            <?php } else { ?>
                <a href="<?php echo get_the_permalink($key)?>"><?php echo $relationLang[$i]?></a>
            <?php } ?>
        <?php $i++; } ?>
    </div>
</div>
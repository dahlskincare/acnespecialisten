<div class="result-widget">
    <div class="images-container">
        <div class="before"
             style="background-image: url('<?php echo $before ?>')"></div>
        <div class="after"
             style="background-image: url('<?php echo $after ?>')"></div>
        <div class="divider">
            <div class="drag-anchor"
                 ontouchstart="Result.onAnchorMouseDown(this)"
                 onmousedown="Result.onAnchorMouseDown(this)">
                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>
    <div class="result-info p200">
        <?php echo $label ?>
    </div>
</div>
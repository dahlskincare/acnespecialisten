<?php if (isset($youtube_id)) { ?>
    <div class="youtube-widget">
        <iframe width="358" height="272" src="https://www.youtube.com/embed/<?php echo $youtube_id ?>&amp;controls=1&amp;color=white&amp;rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
<?php } ?>
<?php
function icon($name)
{
    echo '<span class="icon" id="icon-' . $name . '">' . file_get_contents('icons/' . $name . '.svg') . '</span>';
}

?>
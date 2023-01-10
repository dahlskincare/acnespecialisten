<?php
function icon($name)
{
    echo '<span class="icon">' . file_get_contents('icons/' . $name . '.svg') . '</span>';
}

?>
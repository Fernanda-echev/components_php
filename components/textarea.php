<?php
function textareaComponent($label, $name, $value = '') {
    echo "<label>$label:</label><br>";
    echo "<textarea name='$name' rows='4'>$value</textarea><br><br>";
}
?>
<?php

function selectComponent($label, $name, $options = []) {
    echo "<label>$label:</label><br>";
    echo "<select name='$name' required>";
    foreach ($options as $value => $text) {
    echo "<option value='$value'>$text</option>";
    }
    echo "</select><br><br>";
}

?>

<?php
function inputComponent($label, $name, $type = 'text', $value = '') {
    echo "<label>$label:</label><br>";
    echo "<input type='$type' name='$name' value='$value' required><br><br>";
}

?>

<style>
    .input{
        width: 500px;
        height: 40px;
    
    }
</style>
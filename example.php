<?php
require_once 'debugp.php';

$foo = 'This is a string.';
$bar = array(1, null, 3, 'this array has four elements');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>debugp() Examples</title>
</head>
<body>

<h1><u>debugp() Examples</u></h1>
<ul>
    <li>
        <h3>Output a string and exit:</h3>
        $foo = '<?=$foo; ?>';<br />
        debugp($foo);<p />
        // will display
        <?php debugp($foo, false); ?>
        // and then exit
    </li>

    <li>
        <h3>Output an array and exit:</h3>
        $bar = array(1, null, 3, 'this array has four elements');<br />
        debugp($bar);<p />
        // will display
        <?php debugp($bar, false); ?>
        // and then exit
    </li>

    <li>
        <h3>Output a string and continue rendering:</h3>
        $foo = '<?=$foo; ?>';<br />
        debugp($foo, false);<br />
        echo 'something else...'<p />
        // will display
        <?php debugp($foo, false); ?>
        something else...
    </li>

    <li>
        <h3>Output an array without formatting and exit:</h3>
        $bar = array(1, null, 3, 'this array has four elements');<br />
        debugp($bar, true, false);<p />
        // will display
        <?php debugp($bar, false, false); ?>
        // and then exit
    </li>
</ul>

</body>
</html>
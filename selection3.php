<?php

/**
 * Copyright (c) 2009-2016 Jaan Jänesmäe
 * See LICENSE for license info.
 */

$title = "Selection Ver. 3 - Steganography";

$colors = array(
    "#f00", "#f10", "#f20", "#f30", "#f40", "#f50",
    "#f60", "#f70", "#f80", "#f90", "#fa0", "#fb0",
    "#fc0", "#fd0", "#fe0", "#ff0", "#ef0", "#df0",
    "#cf0", "#bf0", "#af0", "#9f0", "#8f0", "#7f0",
    "#6f0", "#5f0", "#4f0", "#3f0", "#2f0", "#1f0",
    "#0f0", "#0f1", "#0f2", "#0f3", "#0f4", "#0f5",
    "#0f6", "#0f7", "#0f8", "#0f9", "#0fa", "#0fb",
    "#0fc", "#0fd", "#0fe", "#0ff", "#0ef", "#0df",
    "#0cf", "#0bf", "#0af", "#09f", "#08f", "#07f",
    "#06f", "#05f", "#04f", "#03f", "#02f", "#01f",
    "#00f", "#10f", "#20f", "#30f", "#40f", "#50f",
    "#60f", "#70f", "#80f", "#90f", "#a0f", "#b0f",
    "#c0f", "#d0f", "#e0f", "#f0f", "#f0e", "#f0d",
    "#f0c", "#f0b", "#f0a", "#f09", "#f08", "#f07",
    "#f06", "#f05", "#f04", "#f03", "#f02", "#f01",
);

shuffle($colors);

$css = "
/* Begin selection color change */
/* - Works currently with FF, Chrome and Safari */

body { text-align: justify; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:12px; color: #000; margin:0; min-width: 900px; background: #fff; }
html, div { padding:0; margin:10px auto; width:800px; }
#seldiv { font-family:monospace; font-size: 1.2em; }";

$k = 0;
$sel_col = "";
$random = array_rand($colors);

for ($i = 1; $i <= 9; $i++) {
    for ($j = 0; $j <= 9; $j++) {
        $css .= "\n\t\t.a" . $i . $j . "::selection{ background:" . $colors[$k] . "; color:#000; }";
        $css .= "\n\t\t.a" . $i . $j . "::-moz-selection{ background:" . $colors[$k] . "; color:#000; }";
        if ($random == $k) $sel_col = $i . $j;
        $k++;
    }
}

$content = "<b>There is a hidden string (21 chars) in this mess:</b><br/><b class=\"small\">Added: Nov 9, 2009 / FF, Chrome &amp; Safari Only / View source for the hint ...</b><br/><br/><div id=\"seldiv\"><!--- /* Hint: First char is a 't' */ --->";

$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mauris eget arcu pellentesque a tristique massa lobortis. Mauris laoreet ipsum vel ipsum lobortis sollicitudin bibendum diam scelerisque. Fusce quis felis vel metus bibendum sodales eu ac mauris. Quisque pulvinar imperdiet dui, a egestas metus pretium sit amet. Mauris eleifend sapien sit amet mi tempus eu feugiat sapien lacinia. In laoreet nisl eget lacus fermentum adipiscing. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ullamcorper, purus id sollicitudin imperdiet, libero odio lobortis augue, vitae scelerisque lorem arcu eu lacus. In hac habitasse platea dictumst. In mattis enim sed libero faucibus rutrum. Sed non tellus nisi. Aliquam ut quam quis urna imperdiet vulputate. Donec nec nunc lectus, in dignissim turpis. Aliquam volutpat, dolor et tincidunt pharetra, dui dolor suscipit urna, vitae vehicula est nibh vel nibh. Cras adipiscing, lectus eget viverra dictum, tellus arcu dapibus turpis, non viverra ipsum nisl vitae ligula. Nunc orci odio, dignissim non dictum quis, rhoncus aliquet libero. Donec nunc ligula, eleifend vitae pretium vel, luctus nec nibh.";
$c_lorem = strlen($lorem);

$ssecret = "this string is secret";
$c_secret = strlen($ssecret);
$m = 0;

for ($l = 0; $l <= $c_lorem; $l++) {
    $_char = substr($lorem, $l, 1);
    $_mchar = substr($ssecret, $m, 1);
    $char = ($_char == " ") ? "&nbsp;" : $_char;
    //$class = "";
    $class = rand(10, 99);
    if ($class == $sel_col) $class = rand(10, 99);
    if ($class == $sel_col) $class = rand(10, 99);
    if ($class == $sel_col) $class = rand(10, 99);
    if ($class == $sel_col) $class = rand(10, 99);
    if ($class == $sel_col) $class = 11;
    if ($_char == $_mchar) {
        $class = $sel_col;
        $m++;
    }
    // if($class == "") $class = 30;
    $content .= "<span class=\"a" . $class . "\">" . $char . "</span>";
    if ((fmod($l + 1, 50) == 0) && ($l > 10)) $content .= "<br/>\n";
}

$content .= "</div>";

echo "<html>\n\n<!--\n- Copyright (c) 2009-2016 Jaan Jänesmäe\n- See LICENSE for license info.\n-->\n\n<head><title>" . $title . "</title><style type=\"text/css\">" . $css . "</style></head><body><div>" . $content . "</div></body></html>";

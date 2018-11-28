<?php

// Format cost
function format_cost($cost) {
    $result = ceil($cost);
    $result = number_format($result, 0, "", " ");
    $result .= '<b class="rub">р</b>';

    return $result;
}

// Filter user inputs
function esc($str) {
    $text = htmlspecialchars($str);

    return $text;
}

// Templater
function include_template($path, $data) {
    if (is_file($path)) {

        ob_start();
        require_once($path);
        $html = ob_get_clean();

        return $html;
    }

    return '';
}


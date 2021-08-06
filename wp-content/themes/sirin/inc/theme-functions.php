<?php

function putIcon(string $string) : string {
    $replaced = preg_replace('/%icon-(.+)%/iU', '<span class="icon icon-$1"></span>', $string);
    return $replaced;
}
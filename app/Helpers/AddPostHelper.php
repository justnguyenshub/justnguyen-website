<?php


use Illuminate\Support\Str;

function slug($po_title){
    return Str::slug($po_title,'-');
}

// function 
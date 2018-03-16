# Extra Doc

## Base 64 Encode in php

    string base64_encode ( string $data )

 eg:

    <?php
    $str = 'This is an encoded string';
    echo base64_encode($str);
    ?>

<hr/>

## Get Current Session Value in JavaScript?

### in HTML

    <input type="hidden" id="hdnSession" data-value="@Request.RequestContext.HttpContext.Session["someKey"]" />

### And the script is

    var sessionValue= $("#hdnSession").data('value');

### Or you may access directly by

    jQuery(document).ready(function ($) {
        var value = '@Request.RequestContext.HttpContext.Session["someKey"]';
    });

Link:-

>https://stackoverflow.com/a/23539013/5835572

<hr/>


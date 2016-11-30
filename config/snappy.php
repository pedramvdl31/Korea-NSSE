<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => 'assets/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64',
        'timeout' => false,
        'options' =>    array(
                'orientation' => 'landscape', 
                'enable-javascript' => true, 
                'javascript-delay' => 1000, 
                'no-stop-slow-scripts' => true, 
                'no-background' => false, 
                'lowquality' => false,
                'encoding' => 'utf-8',
                'images' => true,
                'cookie' => array(),
                'dpi' => 300,
                'image-dpi' => 300,
                'enable-external-links' => true,
                'enable-internal-links' => true
            ),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => 'assets/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64',
        'timeout' => false,
        'options' =>    array(
                'enable-javascript' => false, 
                'no-stop-slow-scripts' => false, 
                'encoding' => 'utf-8',
                'images' => true,
                'cookie' => array()
            ),
        'env'     => array(),
    ),


);

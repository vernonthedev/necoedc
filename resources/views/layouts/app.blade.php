<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $metaTitle ?: '' }}</title>
        <meta name="title" content="{{ $metaTitle ?: '' }}">
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="">
        <link rel="icon" type="image/png" sizes="32x32" href="">
        <link rel="icon" type="image/png" sizes="16x16" href="">
        <link rel="manifest" href="">
        <meta name="description" content="{{ $metaDescription ?: '' }}">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:title" content="{{ $metaTitle ?: '' }}">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="">
        <meta name="twitter:title" content="{{ $metaTitle ?: '' }}">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
        <!-- Custom Scroll Bar Configurations-->
        <style>
            body::-webkit-scrollbar {
                width: 10px;            
            }
            body::-webkit-scrollbar-track {
                background: #fff;       
            }
            body::-webkit-scrollbar-thumb {
                background-color: #ffc107;  
                border-radius: 20px;     
                border: 3px solid ffc107;  
            }
        </style>
    </head>
     

<!-- main header -->

<!-- /.main-header -->


    {{ $slot }}

<!-- main footer -->

<!-- /.main-footer -->


<!-- webscripts -->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Archivo:300,400,600,700);.no-pad {
            padding: 0 !important;
            }

            .no-bordered {
            border: none;
            }

            .no-bordered-b {
            border-bottom: none;
            }

            .btn-xsm {
            font-size: 8pt;
            padding: 0px 4px;
            margin-left: 5px;
            }

            .button-group .button {
            font-size: 12pt;
            cursor: pointer;
            color: #818181;
            margin-right: 15px;
            }

            .button-group .button:last-child {
            margin-right: 0;
            }

            .button-group .button.button-remove:hover {
            color: #8d030f !important;
            }

            .button-group .button:hover {
            color: #4e4e4e;
            }

            .d-flex .button {
            margin-top: 30px;
            }

            body {
            background-color: white;
            font-family: Archivo, "Times New Roman", Times, serif;
            }

            .mail_header p {
            font-size: 16pt;
            color: white;
            background-color: #010a65;
            text-align: left;
            padding: 30px;
            margin: 0;
            }

            .mail_content {
            text-align: center;
            padding: 30px;
            font-size: 14pt;
            }

            .mail_title {
            font-size: 16pt;
            font-weight: bold;
            padding: 20px;
            }

            a.btn {
            text-decoration: none;
            color: white;
            font-size: 14pt;
            padding: 10px 20px;
            background-color: #DDA440;
            border: 1px solid #b17c20;
            border-radius: 6px;
            }

            a.btn:hover {
            text-decoration: none;
            color: white;
            background-color: #b17c20;
            border-color: #DDA440;
            }
        </style>
    </head>
    <body>
        <div class="mail_header">
            <p>Excel General Agency</p>
        </div>
        <div class="mail_content">
            @yield('content')
        </div>
    </body>
</html>
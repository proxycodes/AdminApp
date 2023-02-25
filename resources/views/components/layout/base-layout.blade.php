<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$pageSeoTitle}}</title>
        
    </head>
    <body class="antialiased">
        
        <x-common.header></x-common.header>
        
        <x-common.main-nav></x-common.main-nav>

        {{$mainBody}}

        <x-common.footer></x-common.footer>

    </body>
</html>

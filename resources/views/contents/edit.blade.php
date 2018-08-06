<?php
use Illuminate\Support\Facades\View;
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

{{Form::model($showById, ['action' =>['ContentsController@update', $showById->id], 'method' => 'PUT'])}}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the Data!', array('class' => 'btn btn-primary')) }}

{{Form::close() }}
</div>
</body>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProjeKtion - Your project in aKtion</title>

    <link href="{$BASE_URL}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$BASE_URL}css/landing-page.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="{$BASE_URL}javascript/scroll.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="{$BASE_URL}javascript/bootstrap.min.js"></script>
</head>

<body>
  <header>
    {if $USERID}
      {include file='common/navbar_logged_in.tpl'}
    {else}
      {include file='common/navbar_logged_out.tpl'}
    {/if}
  </header>
  <div id="error_messages" class="state">
  {foreach $ERROR_MESSAGES as $error}
    <div class="error">{$error}<a class="close" href="#">X</a></div>
  {/foreach}
  </div>
  <div id="success_messages" class="state">
  {foreach $SUCCESS_MESSAGES as $success}
    <div class="success">{$success}<a class="close" href="#">X</a></div>
  {/foreach}
  </div>

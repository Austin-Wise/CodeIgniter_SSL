<html>
    <head>
        <title>Code Igniter CRUD App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('news/'); ?>">Code Igniter CRUD App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <a href="<?php echo site_url('news/create'); ?>" class="m-2 btn btn-light">Create New</a>
            <a href="<?php echo site_url('news/'); ?>" class="m-2 btn btn-info">List Items</a>
        </ul>
        </div>
        </div>
    </div>
</nav >
<div class="container" style="padding: 10% 8%;">
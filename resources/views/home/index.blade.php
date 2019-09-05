<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="canCruz.css">
    <title>Can Cruz</title>
</head>

<body>
<header>
    <?php
        @include('partials.header');
    ?>
</header>
<main>
    <?php
        @include('partials.lamasia');
        @include('partials.sleep');
        @include('partials.aboutUs');
        @include('partials.contact');
    ?>
</main>
<footer>
    <?php
        @include('partials.footer');
    ?>
</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('/css/custom.css') ?>">
    
</head>
<body>
    
<!-- header -->
@include('includes/header')


@yield('main_page')

<!-- footer -->
@include('includes/footer')

</body>
</html>
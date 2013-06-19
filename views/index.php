<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>
                <a class="brand" href="/">BLOG</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/add">Добавить</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container">
        <?php if (isset($page)){ 
            require($page.'.php'); 
        } else {
		    require('404.php');
        };?>
    </div>
</body>

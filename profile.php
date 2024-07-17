<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container nav_bar">
        <div class="row">
        <div class="row">
            <div class="col-3 nav_logo"></div>
            <div class="col-9">
                <div class="nav_text">Информация обо мне</div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>студентка 4 курса ДВФУ, направление: Компьютерная безопасность</h2>
            </div>
           
        </div>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
        </div>    
    </div>
</body>
</html>

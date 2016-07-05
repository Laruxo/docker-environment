<html>
<head>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<?php
    require __DIR__ . '/../vendor/autoload.php';
    use App\Models\Greeter;

    $greeter = new Greeter();
    echo "<h1>" . $greeter->greet("World") . "</h1>";
?>
</body>
</html>
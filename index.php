<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Slider</title>
    <link rel="stylesheet" href="slider.css">
    <script src="slider.js"></script>

</head>

<body>
    <h1>Slider Defis Js</h1>
    <div id="slider">
        <img src="img/1.png" alt="theOne" id="slide">
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
    </div>
    <script>setInterval(time,5000);</script>
</body>


</html>

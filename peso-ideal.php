<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style4.css"/>
        <meta charset="UTF-8"/>
        <title>Linguagem de Programação 1</title>
    </head>
        <body bgcolor="#B0E0E6">
        <div id="primeiro">
            <h1>Linguagem de Programação 1</h1>
            <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
            <br>
            <form action="" method="GET">
        <input type="number" placeholder="Digite a altura do Homem" name="homem" step="0.01">
        <input type="number" placeholder="Digite a altura da Mulher" name="mulher" step="0.01">
        <button type="submit">Enviar</button>
    <br>
    <br>
    <?php
        $h = $_GET['homem'];
        $m = $_GET['mulher'];

        $h = (72.7 * $h)-58;
            echo "<br><p>$h</p  >";
        $m = (62.1 * $m)-44.7;
            echo "<br><p1>$m</p1>";
    ?>
    </div>
    </body>
</html>
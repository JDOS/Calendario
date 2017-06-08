<!DOCTYPE html>

<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="App/style.css">
</head>
<body>
    <h1>JDOS</h1>
    <br>
    <p>Código Estrutural Exemplar de <a href="ExemploCalendario.php">Calendário</a></p>
    <br>
    <form action="mesControle.php" method="GET">
        
    <input type="text" name="mes">
    <input type="submit">
    </form>
    <H1>Calendário Versão 1.0</h1>
    <?php
   
 
   require_once 'App/Calendario.php';
 
         
    $calendario = new Calendario(2017);
    $calendario->mostrarCalendario();

    ?>
</body>
</html>
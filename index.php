<!DOCTYPE html>

<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        table{
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </STYLE>
</style>
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
    <H1>Calendário Versão 0.8</h1>
    <?php
    include 'Mes.php';
    include 'Dia.php';
    include 'Calendario.php';
    
    $mes = new Mes(1, 2017);
    $dias= $mes->getDias();
   // print_r($mes);
    //echo '<br>Dia '.$mes->dias[0]->getNumero();
    //echo '<br>Semana '.$mes->dias[0]->getDiaSemana();
    
  // foreach ($dias as $dia) {
  //    echo ''.$dia['numero'] .'<br>';
 //     echo ''.$dia['semana'] .'<br>';
  //  }
    
    
   $meses = array( '1' => "Janeiro", '2' => "Fevereiro", '3' => "Março",
                     '4' => "Abril",   '5' => "Maio",      '6' => "Junho",
                     '7' => "Julho",   '8' => "Agosto",    '9' => "Setembro",
                     '10' => "Outubro", '11' => "Novembro",  '12' => "Dezembro"
                     );
            
    $calendario = new Calendario(2017);
    $i=1;
   
    
    while($i<=12){
         echo '<h1>'.$meses[$i].'</h1>';
         $calendario->mostrarMes($i);
         $i++;
    }
   
    ?>
</body>
</html>
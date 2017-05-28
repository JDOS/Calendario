

<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mesControle
 *
 * @author Daniel
 */
 -->
 <html>
     
<style>
        table{
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
     
        td:hover{
            background-color:#f5f5f5
        }
 </STYLE>
 
<?php    
include "Calendario.php";



echo "O mes digitado é ".$_GET['mes'];

$calendario = new Calendario(2017);
$calendario->mostrarMes($_GET['mes']);
?>
 </html>
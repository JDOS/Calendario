<?php
    //Procedure criar calendário
   // $data=obterdata();
    //echo time();

$date = new DateTime();
 
    echo date('F');
    

?>
   


<HTML>
    <HEAD></HEAD>
    <STYLE>
        table{
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
}
    </STYLE>
    
    <BODY>
        <H1>Caledário</H1>
        <TABLE style="width:100%;border: 1px solid black" >
            <TR>
                <TD>Segunda</TD>
                <TD>Terça</TD>
                <TD>Quarta</TD>
                <TD>Quinta</TD>
                <TD>Sexta</TD>
                <TD>Sábado</TD>
                <TD>Domingo</TD>
            </TR>
            <TR>
                <TD>1</TD>
                <TD>2</TD>
                <TD>3</TD>
                <TD>4</TD>
                <TD>5</TD>
                <TD>6</TD>
                <TD>7</TD>
            </TR>
        </TABLE>
    </BODY>
</HTML>
<?php



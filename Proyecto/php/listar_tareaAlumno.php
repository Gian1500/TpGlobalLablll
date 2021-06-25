<?php

    include('Conexion_DB.php');

    $cantidad=5;
    $pag=(isset($_GET['p']))?$_GET['p']:1;
    $inicio=($pag-1)*$cantidad;
    
    //$consulta = "SELECT ID,`DNI`, `Nombre y apellido`, `Fecha`, archivo_nombre ,archivo_peso, archivo_tipo, archivo_link FROM `tareas`";
    
    $consulta="SELECT `ID`, `DNI`, `Nombre y apellido`, `Fecha`, `archivo_binario`, `archivo_nombre`, `archivo_peso`, `archivo_tipo`, `archivo_link` FROM `tareas` ORDER BY ID LIMIT $inicio, $cantidad ";

    $consultaC="SELECT Count(*) as cantidad FROM `tareas` ";

    
    
    $resultado = mysqli_query($conexion,$consulta);
    $resultadoC = mysqli_query($conexion,$consultaC);

    mysqli_close($conexion);
?>
<center>
    <h1>Lista de Tareas Subidas</h1>
    <table style="border: 1px solid black;">

        <thead>
            <tr>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">ID</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Nombre y apellido</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">DNI</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Fecha</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Nombre del archivo</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Peso</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Tipo</th>
                <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Link</th>

            </tr>
        </thead>



        <?php
        while($mostrar = mysqli_fetch_array($resultado)){ ?>
            <tbody>
                <tr>
                    <td style="border: 1px solid black;"><b><?php echo $mostrar['ID'] ?></b></td>
                    <td style="border: 1px solid black;"><b><?php echo $mostrar['Nombre y apellido'] ?></b></td>
                    <td style="border: 1px solid black;"><?php echo $mostrar['DNI'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $mostrar['Fecha'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $mostrar['archivo_nombre'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $mostrar['archivo_peso'] ?> bits</td>
                    <td style="border: 1px solid black;"><?php echo $mostrar['archivo_tipo'] ?></td>
                    <td style="border: 1px solid black;"><a href="<?php echo $mostrar['archivo_link'] ?>" download="<?php echo $mostrar['archivo_link'] ?>">Descargar</a></td>
                    
                </tr>
            </tbody>

        <?php } ?>

    </table>
   

   <nav aria-label="Page navigation example" style="display: flex; align-items: center; justify-content: center;">
        <ul id="link" class="pagination">

    <?php 
        $res = mysqli_fetch_array($resultadoC);
        $cant= $res['cantidad'];
        $paginas=ceil($cant/$cantidad);
        for($i=1; $i<=$paginas; $i++):

    ?>
        <li class="page-item"><a class="page-link" href="javascript: pagina(<?= $i?>)"><?= $i ?></a></li>
        
            
   
    <?php
        endfor;
    ?>
        </ul>
    </nav>
        
  

   
   

</center>

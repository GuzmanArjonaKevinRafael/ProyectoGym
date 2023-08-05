

<?php

require_once ("../../php/conexion.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporteInventario.xls");
?>
<table class="table table-striped table-dark " id= "table_id">                 
<thead>    
<tr>
<th>Id_Maquina </th>
<th>Nombre</th>
<th>Cantidad</th>
<th>Estado</th>
<th>Fecha de Compra</th>
<th>disciplina</th>

</tr>
</thead>
<tbody>

<?php     
$SQL="SELECT * FROM maquinas";
$dato = mysqli_query($conexion, $SQL);
if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){
?>
<tr>
<td><?php echo $fila['Id_Maquina']; ?></td>
<td><?php echo $fila['Nombre']; ?></td>
<td><?php echo $fila['Cantidad']; ?></td>
<td><?php echo $fila['Estado']; ?></td>
<td><?php echo $fila['Fecha_Compra']; ?></td>
<td><?php echo $fila['disciplina']; ?></td>
<?php
}

}

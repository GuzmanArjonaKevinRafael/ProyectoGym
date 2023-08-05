<?php

require_once ("../../php/conexion.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporteAlumnos.xls");
?>
<table class="table table-striped table-dark " id= "table_id">                 
<thead>    
<tr>
<th>ID_registro</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Direccion</th>
<th>Núm. Tel</th>
<th>Disciplina</th>

</tr>
</thead>
<tbody>

<?php     
$SQL="SELECT * FROM registrosusuarios";
$dato = mysqli_query($conexion, $SQL);
if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){
?>
<tr>
<td><?php echo $fila['ID_registro']; ?></td>
<td><?php echo $fila['Nombres']; ?></td>
<td><?php echo $fila['Apellidos']; ?></td>
<td><?php echo $fila['Direccion']; ?></td>
<td><?php echo $fila['NumTel']; ?></td>
<td><?php echo $fila['Disciplina']; ?></td>
<?php
}

}

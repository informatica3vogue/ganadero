<?php   include '../plantilla.php'; ?>

<script>
$(document).on('ready',function(){
    $(".table").footable();
});

</script>

 
<h2>admon prog. suplementaciones</h2>

<a href="Cprogsuplementacion.php" class="button primary">crear programa suplementacion</a>


<?php
$res=$conex->query("select * from contactos");
?>

<table class="table" data-filtering='true' data-paging="true" data-editing-allow-add="true" data-filter-placeholder='buscar'>
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Job Title</th>
			<th>Started On</th>
			<th>Date of Birth</th>
                        <th data-filterable="false"></th>
		</tr>
	</thead>
	<tbody>
<?php while($fila=$res->fetch()):    ?>
            <tr>
                <td><?php  echo $fila[id]?></td>
                <td><?php  echo $fila[identificacion]?></td>
                <td><?php  echo $fila[tipo]?></td>
                <td><?php  echo $fila[usuario]?></td>
                <td><?php  echo $fila[haciendas]?></td>
                <td><?php  echo $fila[telefonos]?></td>
                <td><a href="">ver</a>
                    <a href="">editar</a>
                    <a href="">eliminar</a>
                </td>
            </tr>            
    <?php  endwhile; ?>	

	</tbody>
</table>
</div>
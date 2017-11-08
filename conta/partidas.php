<?php    include '../plantilla.php'; ?>

<div class="small-10 columns">
<h2>admon partidas</h2>

<a href="Cpartida.php" class="button primary">crear partida</a>


<?php
$res=$conex->query("select * from compras_enc");
?>

<table class="table" data-filtering='true' data-paging="true">
	<thead>
		<tr>
			<th>fecha</th>
			<th>factura</th>
			<th>proveedor</th>
			<th>productos</th>
			<th>total</th>		
                        <th data-filterable="false">acciones</th>
		</tr>
	</thead>
	<tbody>
<?php
while($fila=$res->fetch()){
?>
            <tr>
                <td><?php  echo $fila[fecha]?></td>
                <td><?php  echo $fila[factura]?></td>
                <td><?php  echo $fila[proveedor]?></td>
                <td><a href=""  class="items" data-id='<?php echo $fila[id]?>'>productos</a></td>
                <td><?php  echo $fila[total]?></td>                
                <td>
                    <a href="#" class="ver" data-id="<?php  echo base64_encode( $fila[id]) ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
<!--                    <a href="Umortalidad.php?<?php  echo  base64_encode( $fila[id])?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>                    
                    <a href="Dmortalidad.php?<?php  echo  base64_encode('mortalidad='. $fila[id])?>" id="eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>-->
                </td>
            </tr>
            
<?php
}
?>	

	</tbody>
</table>

</div>
<div id="mimodal" class="reveal-modal"  data-reveal>
    <span></span>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
</div>

<script>
    $(".table").footable();
        ///////////////ver animales
    $('.items').on('click',function(e){
                        e.preventDefault();
                        var id=$(this).data('id');                        
                        $.ajax({
                            url:"listaItemsFact.php",
                            method:'get',
                            data:{id:id},
                            success: function (data) {                                
                                                $('#mimodal span').html(data);
                                            }
                        });
                           $('#mimodal').foundation('reveal', 'open');
    });


                            $("a.ver").on('click',function(e){
                                    e.preventDefault();
        
                                    $.ajax({
                                        url:"Rcompras.php?"+$(this).data('id'),
                                        success:function (datos){

                                               $('#mimodal span').html(datos);
                                        }
                                    });
     
                                    $('#mimodal').foundation('reveal', 'open');

                                });

    ////////////////////eliminar        
        $("a#eliminar").on('click',function(e){
        
        e.preventDefault();
       if( confirm("desea eliminar?")){
           window.location=$(this).attr('href');
       }
    });

</script>
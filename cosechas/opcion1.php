<?php   include '../plantilla.php'; 
include '../php funciones/funciones.php';
if(!isset($_GET[proy_id])){
echo '<script>window.location="http://localhost:8089/ganadero/cosechas/cosechas.php"</script>';
}

if($_SERVER[REQUEST_METHOD]=='POST'){
try{
    $insert="insert into opcion_1 values(default,'$_POST[costo_proyecto]','$_POST[precio_vta]','$_POST[ton_zacate]'"
            . ",'$_POST[utilidad_vta]','$_POST[proy_id]')";
    $update="update proyectos_enc set opcion='1' where id_proyecto=$_POST[proy_id]";

$conex->beginTransaction();
$sql=$conex->prepare($insert);
$sql2=$conex->prepare($update);
    if($sql->execute() and $sql2->execute()){
        $conex->commit();
                              $mensaje='<div data-alert class="alert-box success round">
                    <h5 style="color:white">registro creado exitosamente</h5>
                    <a href="#" class="close">&times;</a>
                    </div>';
    }else{
              throw new PDOException();
    }
}
 catch (PDOException $pe){
              $conex->rollBack();
      $mensaje= '<div data-alert class="alert-box alert round">
       <h5 style="color:white">Error al insertar el registro</h5>
       <a href="#" class="close">&times;</a>
       </div>';
 }
}

$costo_total=  calcular_costo_proyecto($_GET[proy_id]);
?>

<div class="small-10 columns">
    <h2>venta de elote y zacate</h2>
    <?php echo $mensaje ?>
    <a href="cosechas.php" class="regresar">regresar</a>
    <form  method="post" data-abide>
    <div class="row">
        <input type="hidden" name="proy_id" value="<?php echo $_GET[proy_id]?>">
        <div class="small-6 columns"> 
            <label>costo total de la siembra
                <input type="text" name="costo_proyecto" readonly="" value="<?php echo number_format($costo_total,2)?>">
            </label>
        </div>
        <div class="small-6 columns">
            <label>
            precio de venta
            <input type="text" required="" name="precio_vta" class="cantidad">
            <small class="error">requerido</small>
        </label>
        </div>
        </div>
     
              <div class="row">
        <div class="small-6 columns">
            <label>
            toneladas de zacate            
            <input type="text" required="" name="ton_zacate" class="cantidad">
            <small class="error">requerido</small>
        </label>
        </div>
        <div class="small-6 columns">
                            <label>
            utilidad de venta            
            <input type="text" required="" name="utilidad_vta" class="cantidad">
            <small class="error">requerido</small>
                            </label>
        </div>
                  
    </div>
    <div class="row">
        <div class="small-6 columns">
             
        </div>
        <div class="small-6 columns">
               
        </div>
    </div>    
            <input type="submit" value="crear registro" class="primary button">    
    </form>
</div>
</div>

<script>
$(".cantidad").mask('000,000,000,000,000.00', {reverse: true});
</script>

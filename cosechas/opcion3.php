<?php   
include '../plantilla.php'; 
include '../php funciones/funciones.php';

if(!isset($_GET[proy_id])){
echo '<script>window.location="http://localhost:8089/ganadero/cosechas/cosechas.php"</script>';
}


$costo_total=  calcular_costo_proyecto($_GET[proy_id]);
$sql_bodegas="select * from bodega";
$res=$conex->query($sql_bodegas);
?>
<div class="small-10 columns">
    <h2>ensilado con grano</h2>
    <a href="javascript:history.back(1)" class="regresar">regresar</a>
    <span id="mensaje"></span>
    <form data-abide="ajax" id="myform" >

        <fieldset>
            <legend>elaboracion silo</legend>
            <div class="row">
             
                  <div class="small-2 columns">
                    <label>bodega
                                    <select name="cod_bodega" required="">
                                      <option value="">seleccione</option>
                                      <?php
                                                                                                                                        while($fila=$res->fetch()){
                                                                                                                                            echo "<option value='$fila[codigo]'>$fila[nombre]</option>";
                                                                                                                                        }
                                                                                                                            ?>
                                  </select>
                    </label>
                    <small class="error">obligatorio</small>
                </div>
                <div class="small-2 columns end">
                    <label>costo total de la siembra
                        <input type="text" readonly="" value="<?php echo number_format($costo_total,2) ?>" name="costo_proyecto">
                    </label>
                    <input type="hidden" name="proy_id" value="<?php echo $_GET[proy_id] ?>">
                </div>

                <div class="small-6 columns">
                    <label>notas<textarea name="notas"></textarea></label>
                </div> 
            </div>
            <div class="row">
                <div class="small-2 columns">
                    <label>costo picado<input type="text" name="costo_picar_mano_obra" required="" class="cantidad"></label>
                    <small class="error">obligatorio</small>
                </div>
               <div class="small-2 columns">
                   <label>costo de plastico<input type="text" name="costo_plastico" required="" class="cantidad"></label>
                    <small class="error">obligatorio</small>
                </div>
                  <div class="small-2 columns end">
                      <label>toneladas de forraje<input type="text" name="ton_forraje" required="" class="cantidad"></label>
                <small class="error">obligatorio</small>
            </div>
            </div>
            <div class="row">
                 <div class="small-2 columns ">
                     <label>costo mano obra (cosecha)<input type="text" name="costo_cosecha_mano_obra" required="" class="cantidad"></label>
                    <small class="error">obligatorio</small>
                </div>
                       <div class="small-2 columns">
                    <label>costo de insumos<input type="text" name="costo_insumos" required="" class="cantidad"></label>
                    <small class="error">obligatorio</small>
                </div>
                <div class="small-2 columns end">
                    <label>costo de transporte<input type="text" name="costo_transporte" required="" class="cantidad"></label>
                    <small class="error">obligatorio</small>
                </div>
            </div>       
            <div class="row">
                <div class="small-2 columns ">
                    <label>costo de compactacion<input type="text" name="costo_compactacion" required="" class="cantidad"></label>
                    <small class="error">obligatorio</small>
                </div>
                <div class="small-2 columns">
                    <label>fecha inicio preparacion<input type="text" name="fecha_inicio" required=""  class="fecha" readonly=""></label>
                    <small class="error">obligatorio</small>
                </div>
                <div class="small-2 columns end">
                    <label>fecha de cierre<input type="text" name="fecha_cierre" required="" class="fecha" readonly=""></label>
                    <small class="error">obligatorio</small>
                </div>
            </div>            
                    <div class="row">
                 <div class="small-3 columns">
                     <label>codigo silo
                         <input type="text" id='cod_silo'>
                         </label>
                     </div>
            <div class="small-3 columns">
                     <label>
                         toneladas silo
                         <input type="text" id="cant_silo">
                     </label>
                        </div>
              <div class="small-3 columns">
                  <button id="add" type="button">add</button>
                        </div>
            
            <div class="small-12 columns">
                            <table id="tblAppendGrid">
                            </table>    
                        </div>
        </div>

        </fieldset>
        <div class="row">
            <div class="small-6 columns">
                <button type="submit">crear registro</button>
            </div>
            <div class="small-6 columns"></div>
        </div>  
    </form>
</div>
</div>
    
    <script>
            $('#tblAppendGrid').appendGrid({
        initRows: 0,
        idPrefix: '',
        columns: [
            { name: 'cod_silo', display: 'codigo silo', type: 'text', ctrlAttr: { readonly:true }, ctrlCss: { width: '160px'} },
            { name: 'ton_silo', display: 'toneladas silo', type: 'text', ctrlAttr: { readonly: true }, ctrlCss: { width: '100px'} },
            { name: 'descripcion', display: 'descripcion', type: 'text', ctrlAttr: { readonly: false}, ctrlCss: { width: '50%'} },
        ],
         hideButtons: {
            remove: true,
            removeLast: true,
            append:true,
            insert:true,
            moveUp: true,
            moveDown:true
        }
    });
        
      $("#myform").foundation('abide','events');
    
$('#myform').on('valid.fndtn.abide', function () {
    var datos={};
    datos.forma=$(this).serialize();
    datos.silos=  $('#tblAppendGrid').appendGrid('getAllValue');
      
        $.ajax({
            url:'ajax/opcion3.php',    
            method:'post',
            data:datos,
            success:function(data){
                
                $("span#mensaje").html(datos);
                    setTimeout(function(){
                                                                                   window.location='http://localhost:8089/ganadero/cosechas/cosechas.php';
                                                                               },1500);                
            }
        });
  });
    
    var    tot_forraje;
  $("[name=ton_forraje]").on('change',function (){
       tot_forraje=parseFloat($(this).val());
  });
  
  $("#add").on('click',function(e){
      e.preventDefault();
      
      var cod_silo=$('#cod_silo').val();
      var cant_silo=$("#cant_silo").val();
    
    
    
      if(tot_forraje>=parseFloat(cant_silo)){
                if(cod_silo!==''  &&  cant_silo!=='' ){
                $.ajax({
          url:'ajax/check_codigo_silo.php',
          data:{cod_silo:cod_silo},
          success:function(data){
              if(data!==''){
                    alert(data);
                    
              }else{
                                 
                     $('#tblAppendGrid').appendGrid('appendRow',[{ cod_silo: cod_silo,ton_silo: cant_silo,descripcion:''}]);
                     tot_forraje-=cant_silo;
                 
              }
          }
      });
      }else{
          alert('campos vacios');
            }
      }else{
          alert('cantidad insuficiente');
      }

  });
             $(".fecha").attr('readonly', true).datepicker({dateFormat: "dd-mm-yy", changeYear: true,  changeMonth: true});
             $(".cantidad").mask('000,000,000,000,000.00', {reverse: true});
        </script>
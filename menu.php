
<div class="small-2 columns collapse" id="menu">    
    <div class="row">
        <div class="small-12 columns">
             <span data-tooltip aria-haspopup="true" class="has-tip" title="hacienda"><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/contactos/haciendas.php"><i class="fa fa-flag iconos " aria-hidden="true"></i></a></span>
    
    <?php if($_SESSION[tipo]=='admin'){  ?>
    <span data-tooltip   aria-haspopup="true" class="has-tip" title="contactos"><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/contactos/contactos.php"><i class="fa fa-users iconos" aria-hidden="true"></i></a></span>
    <?php } ?>
   
    <!--<span data-tooltip   aria-haspopup="true" class="has-tip" title="tratamientos"><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/conta/tratamientos.php"><i class="fa fa-plus iconos" aria-hidden="true"></i></a></span>-->                            
    <span data-tooltip   aria-haspopup="true" class="has-tip" title="siembras"><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/siembras/proyectos.php"><i class="fa fa-arrows iconos" aria-hidden="true"></i></a></span>                            
    <span data-tooltip   aria-haspopup="true" class="has-tip" title="cosechas"><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/cosechas/cosechas.php"><i class="fa fa-cubes iconos" aria-hidden="true"></i></a></span>                            
    
<!--    <a data-dropdown="procesos">procesos</a>
<ul id="procesos" class="f-dropdown"  aria-hidden="true" tabindex="-1">
  <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/conta/ptierra.php">preparacion tierra</a></li>
  <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/conta/psiembra.php">siembra de parcela</a></li>
  <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/conta/pcosecha.php">cosechar parcela</a></li>
  <li><a href="#">eleaboracion silo</a></li>
</ul>-->
<!--     <a href="">reportes</a>
     <a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/conta/catalogo.php">catalogo</a>
     <a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/conta/partidas.php">partidas</a>-->
        </div>
    </div>    
   
    <ul class="side-nav" id="divisor">                  
                    <li class="divider"></li>
                </ul>
    
    <ul class="accordion" data-accordion id="navegacion">
        <li class="accordion-navigation navegacion">
            <a href="#ganado" class="">ganado</a>
            <div id="ganado" class="content">
                <ul class="side-nav"> 
                    
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/ganado/animales.php">animales</a></li><li class="divider"></li>
                    <!--<li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/ganado/lotes.php'>lotes</a></li><li class="divider"></li>-->
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/ganado/razas.php">razas</a></li><li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/ganado/colores.php'>colores</a></li><li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/ganado/grupos.php'>grupos</a></li>                            
                    
                </ul>
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#produccion">produccion</a>
            <div id="produccion" class="content">
                <ul class="side-nav">
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/produccion/panimales.php">peso de animales</a></li>  <li class="divider"></li>
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/produccion/pleche.php">produccion de leche</a></li>
                </ul>
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#reproduccion">reproduccion</a>
            <div id="reproduccion" class="content">
                <ul class="side-nav"> 
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/reproduccion/servicios.php">servicios</a></li>  <li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/reproduccion/palpaciones.php'>palpaciones</a></li>  <li class="divider"></li>
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/reproduccion/respalpaciones.php">resultados palpacion</a></li>  <li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/reproduccion/partos.php'>partos</a></li> <li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/reproduccion/lista_negra.php'>lista incompatibilidad</a></li><li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/reproduccion/pajillas.php'>pajillas</a></li>
                </ul>
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#mortalidad">mortalidad</a>
            <div id="mortalidad" class="content">
                <ul class="side-nav"><li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/mortalidad/mortalidad.php">mortalidad</a></li>  <li class="divider"></li>
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/mortalidad/causamortalidad.php">causa de mortalidad</a></li>
                </ul>
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#sanidad">sanidad</a>
            <div id="sanidad" class="content">
                <ul class="side-nav"> <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/sanidad/controlessanitarios.php">controles sanitarios</a></li>  <li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/sanidad/eventossanitarios.php'>eventos sanitarios</a></li>   <li class="divider"></li>
                    <li><a href='<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/sanidad/cmt/cmt.php'>pruebas CMT</a></li>   
                </ul>
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#praderas">terrenos</a>
            <div id="praderas" class="content">
                <ul class="side-nav"><li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/potreros.php">terrenos</a></li>  <li class="divider"></li>
                    <!--<li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/aforos.php">aforos</a></li>  <li class="divider"></li>-->
                    <!--<li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/ocupacionespot.php">ocupaciones de potreros</a></li>  <li class="divider"></li>-->
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/tablones.php">tablones</a></li><li class="divider"></li>                    
                    <!--<li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/clases.php">clase</a></li><li class="divider"></li>-->
                    <!--<li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/controlpotreros.php">control de potreros</a></li>  <li class="divider"></li>-->
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/tipocontrolpotrero.php">actividades</a></li>  <li class="divider"></li>
                    <!--<li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/vegetacion.php">vegetacion</a></li>  <li class="divider"></li>-->
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/praderas/tiposvegetacion.php">tipos de cultivo</a></li>
                </ul>
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#nutricion">nutricion</a>
            <div id="nutricion" class="content">
                <ul class="side-nav">
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/nutricion/dietas.php">dietas</a></li>  <li class="divider"></li>
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/nutricion/suplementaciones.php">suplementaciones</a></li>  
                    <!--<li class="divider"></li>-->
                    <!--<li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/nutricion/prog_suplementaciones.php">programas de suplementaciones</a></li>-->
                </ul>
            </div>
        </li>
<!--         <li class="accordion-navigation navegacion">
            <a href="#lluvias">lluvias</a>
            <div id="lluvias" class="content">
                <ul class="side-nav"><li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/lluvias/lluvias.php">lluvias</a></li></ul>
            </div>
        </li>-->
        <li class="accordion-navigation navegacion">
            <a href="#compras">compras</a>
            <div id="compras" class="content">
                <ul class="side-nav">
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/compras/compras.php">compras</a></li><li class="divider"></li>
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/compras/bodegas.php">bodegas</a></li>  <li class="divider"></li>         
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/compras/traslados.php">traslados</a></li>  <li class="divider"></li>         
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/compras/requisiciones.php">requisiciones</a></li>  <li class="divider"></li>         
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/compras/servicios.php">servicios</a></li>
                </ul>                
            </div>
        </li>
         <li class="accordion-navigation navegacion">
            <a href="#prods">productos</a>
            <div id="prods" class="content">
                <ul class="side-nav">   
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/productos/productos.php">productos</a></li>  <li class="divider"></li>                                                
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/productos/categorias.php">categorias</a></li>  <li class="divider"></li>                    
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/productos/marcas.php">marcas</a></li>  <li class="divider"></li>                    
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/productos/unidades.php">unidades</a></li>
                    
                </ul>
            </div>
        </li>
          <li class="accordion-navigation navegacion">
            <a href="#graficos">graficos</a>
            <div id="graficos" class="content">
                <ul class="side-nav">                       
                    <li><a href="<?php echo  'http://'.$_SERVER[HTTP_HOST].'/ganadero' ?>/graficos/">graficos</a></li>                    
                </ul>
            </div>
        </li>
    </ul>
</div>
    
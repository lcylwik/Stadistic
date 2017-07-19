<?php
include ("include/dbconnect.php");
?>
<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
    <HEAD>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
      <link rel="stylesheet" type="text/css" href="style.css" />
      <link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		    <script type="text/javascript" src="./js/highcharts.js"></script>
		    <script type="text/javascript" src="./js/modules/exporting.js"></script>
		    
        <script LANGUAGE="JavaScript" type="text/javascript">

            function MassSelection(grupo,CHK)
            {
            	if(document.getElementById(CHK).checked == 0){
                for (i = 0; i < document.getElementsByName(grupo).length; i++)
                {
                			document.getElementsByName(grupo)[i].checked=1;
                			document.getElementById(CHK).checked = 1;
                }
              }
              else{
                for (i = 0; i < document.getElementsByName(grupo).length; i++)
                {
                			document.getElementsByName(grupo)[i].checked=0;
                			document.getElementById(CHK).checked = 0;
                }
              }
            }
            
            function oculta(seccion){
            	if(document.getElementById(seccion).style.display=='none'){
            	document.getElementById(seccion).style.display='inline';
            	}
            	else{
            		document.getElementById(seccion).style.display='none';
            	}
            }
            
            function checaActivos(grupo){
            	var flag=1;
            	for (i = 0; i < document.getElementsByName(grupo).length; i++)
                {
                	if(document.getElementsByName(grupo)[i].checked == 1){
                		flag = 0;
                	}
                }
                return flag;
            }
            
            function ocultaSinFiltros(){
              if(checaActivos('selected4[]') == 1)
            	document.getElementById('horaHide').style.display='none';
            	
            	if(checaActivos('selected3[]') == 1)
              document.getElementById('tipoMensajeHide').style.display='none';
              
              if(checaActivos('selected13[]') == 1)
              document.getElementById('tipoTerminalHide').style.display='none';
              
              if(checaActivos('selected11[]') == 1)
              document.getElementById('tipoTarjetaHide').style.display='none';
              
              if(checaActivos('selected5[]') == 1)
              document.getElementById('responderHide').style.display='none';
              
              if(checaActivos('selected6[]') == 1)
              document.getElementById('tipoTransaccionHide').style.display='none';
              
              if(checaActivos('selected1[]') == 1)
              document.getElementById('redLogicaEmisorHide').style.display='none';
              
              if(checaActivos('selected2[]') == 1)
              document.getElementById('FiidTarjetaHide').style.display='none';
              
              if(checaActivos('selected9[]') == 1)
              document.getElementById('redLogicaAdqHide').style.display='none';
              
              if(checaActivos('selected10[]') == 1)
              document.getElementById('fiidComercioHide').style.display='none';
              
              if(checaActivos('selected12[]') == 1)
              document.getElementById('entryModeHide').style.display='none';
              
              if(checaActivos('selected14[]') == 1)
              document.getElementById('tokenQ2Hide').style.display='none';
              
              if(checaActivos('selected7[]') == 1)
              document.getElementById('codigoRespHide').style.display='none';
            }
            
            function ocultaTodo(){
            	document.getElementById('horaHide').style.display='none';
              document.getElementById('tipoMensajeHide').style.display='none';
              document.getElementById('tipoTerminalHide').style.display='none';
              document.getElementById('tipoTarjetaHide').style.display='none';
              document.getElementById('responderHide').style.display='none';
              document.getElementById('tipoTransaccionHide').style.display='none';
              document.getElementById('redLogicaEmisorHide').style.display='none';
              document.getElementById('FiidTarjetaHide').style.display='none';
              document.getElementById('redLogicaAdqHide').style.display='none';
              document.getElementById('fiidComercioHide').style.display='none';
              document.getElementById('entryModeHide').style.display='none';
              document.getElementById('tokenQ2Hide').style.display='none';
              document.getElementById('codigoRespHide').style.display='none';
            }
            
            function muestraTodo(){
              document.getElementById('horaHide').style.display='inline';
              document.getElementById('tipoMensajeHide').style.display='inline';
              document.getElementById('tipoTerminalHide').style.display='inline';
              document.getElementById('tipoTarjetaHide').style.display='inline';
              document.getElementById('responderHide').style.display='inline';
              document.getElementById('tipoTransaccionHide').style.display='inline';
              document.getElementById('redLogicaEmisorHide').style.display='inline';
              document.getElementById('FiidTarjetaHide').style.display='inline';
              document.getElementById('redLogicaAdqHide').style.display='inline';
              document.getElementById('fiidComercioHide').style.display='inline';
              document.getElementById('entryModeHide').style.display='inline';
              document.getElementById('tokenQ2Hide').style.display='inline';
              document.getElementById('codigoRespHide').style.display='inline';
            }
            
            function transacciones(){
             document.getElementById('porPerDiaHide').style.display='none';
             document.getElementById('porPerCodigoHide').style.display='none';
             document.getElementById('graficaHide').style.display='none';
             document.getElementById('transaccionesHide').style.display='block';
             document.getElementById('transaccionesHide').focus();
            }
            
            function por_per_dia(){
             document.getElementById('transaccionesHide').style.display='none';
             document.getElementById('porPerCodigoHide').style.display='none';
             document.getElementById('graficaHide').style.display='none';
             document.getElementById('porPerDiaHide').style.display='block';
             document.getElementById('porPerDiaHide').focus();
            }
            
            function por_per_codigo(){
             document.getElementById('transaccionesHide').style.display='none';
             document.getElementById('porPerDiaHide').style.display='none';
             document.getElementById('graficaHide').style.display='none';
             document.getElementById('porPerCodigoHide').style.display='block';
             document.getElementById('porPercodigoHide').focus();
            }
            
            function grafica(){
             document.getElementById('transaccionesHide').style.display='none';
             document.getElementById('porPerDiaHide').style.display='none';
             document.getElementById('porPerCodigoHide').style.display='none';
             document.getElementById('graficaHide').style.display='block';
             document.getElementById('graficaHide').focus();
            }
            
        </script>


        <title>Monitoreo Soporte Switch</title>

    </HEAD>
    <BODY onLoad="ocultaSinFiltros()">
        <table width='100%' height=100 style="background:url(images/formbg.gif) repeat-x left top; background-color:rgb(0,51,102); margin:0px; ">
        	 <!--style="background-color:rgb(0,51,102);"  border:5px groove rgb(10,61,112);-->
            <tr>
                <td align='left' valign='middle'><img style='margin-left:5%;' alt="Logo Prosa"  src='images\prosanew.jpg'></td>
                <td align='right' valign='middle'><p>Soporte Switch</p></td>
                <td align='right' style="font-size: 15px; color: #FFFFFF;" ><strong><? include ("include/fecha.php"); ?></strong></td>
                <td align='right' valign='middle'><img height=70 alt="Logo Red"  src="images\red180.gif"></td>
                <td align='center' valign='middle'><img height=70 alt="Logo carnet"  src="images\carnet180.gif"></td>
            </tr>
        </table>
        <form accept-charset="utf-8" method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?>
              name="searchform">

            <table style='border: 1px solid #ffffff' width='100%'>
            	<tr align='left'>
            		<td align='left' width='400px'>
            	<table>
                <tr>
                    <td><strong><a>A&ntilde;o</a></strong></td>
                    <td><strong><a>Mes</a></strong></td>
                    <!-- <td><strong><a>Site</a></strong></td> -->
                    <td><strong><a>Producto</a></strong></td>
                    <td><strong><a>Ambiente</a></strong></td>
                </tr>
                <tr width='100%'>
                    <?php
                    echo "<td>";
                    
                    $anio = $_POST['anio'];
                    $mes = $_POST["mes"];
                    $prod = $_POST["producto"];
                    $ambi = $_POST["ambiente"];


                    if ($anio == null) {
                        $Y = date("Y");
                    } else {
                        $Y = $anio;
                    }

                    echo "<select name='anio' onchange = 'this.form.submit()'>";

                   for($i = date("Y") - 4; $i <= date("Y"); $i++)
                   {
                    if ($i == $Y) {
                        echo "<option value='$i' Selected>$i</option>";
                    } else {
                        echo "<option value='$i'>$i</option>";
                    }
                  }
                    echo "</select>";
                    echo "</td>";

                    echo "<td>";
                    if ($mes == null) {

                        $m = date("m");
                    } else {
                        $m = $mes;
                    }

                    echo "<select name='mes' onchange = 'this.form.submit()'>";

                    if ($m == "01") {
                        echo "<option value='01' Selected>Enero</option>";
                    } else {
                        echo "<option value='01'>Enero</option>";
                    }
                    if ($m == "02") {
                        echo "<option value='02' Selected>Febrero</option>";
                    } else {
                        echo "<option value='02'>Febrero</option>";
                    }
                    if ($m == "03") {
                        echo "<option value='03' Selected>Marzo</option>";
                    } else {
                        echo "<option value='03'>Marzo</option>";
                    }
                    if ($m == "04") {
                        echo "<option value='04' Selected>Abril</option>";
                    } else {
                        echo "<option value='04'>Abril</option>";
                    }
                    if ($m == "05") {
                        echo "<option value='05' Selected>Mayo</option>";
                    } else {
                        echo "<option value='05'>Mayo</option>";
                    }
                    if ($m == "06") {
                        echo "<option value='06' Selected>Junio</option>";
                    } else {
                        echo "<option value='06'>Junio</option>";
                    }
                    if ($m == "07") {
                        echo "<option value='07' Selected>Julio</option>";
                    } else {
                        echo "<option value='07'>Julio</option>";
                    }
                    if ($m == "08") {
                        echo "<option value='08' Selected>Agosto</option>";
                    } else {
                        echo "<option value='08'>Agosto</option>";
                    }
                    if ($m == "09") {
                        echo "<option value='09' Selected>Septiembre</option>";
                    } else {
                        echo "<option value='09'>Septiembre</option>";
                    }
                    if ($m == "10") {
                        echo "<option value='10' Selected>Octubre</option>";
                    } else {
                        echo "<option value='10'>Octubre</option>";
                    }
                    if ($m == "11") {
                        echo "<option value='11' Selected>Noviembre</option>";
                    } else {
                        echo "<option value='11'>Noviembre</option>";
                    }
                    if ($m == "12") {
                        echo "<option value='12' Selected>Diciembre</option>";
                    } else {
                        echo "<option value='12'>Diciembre</option>";
                    }
                    echo "</select>";
                    echo "</td>";
//                    echo "<td>";
//                    
//                    echo "<select name='equipo' onchange = 'this.form.submit()'>";
//                    echo "<option value=todos>Todos</option>";
//                    echo "<option value=sfe>SFE</option>";
//                    echo "<option value=BK>TRIARA</option>";
//                    echo "</select>";
//                    echo "</td>";

                    echo "<td>";
                    echo "<select name='producto' onchange = 'this.form.submit()'>";

                    if ($prod == null) {
                        $prod = "pos";
                    }

                    if ($prod == "pos") {
                        echo "<option value='pos' Selected>POS</option>";
                    } else {
                        echo "<option value='pos'>POS</option>";
                    }
                    if ($prod == "atm") {
                        echo "<option value='atm' Selected>ATM</option>";
                    } else {
                        echo "<option value='atm'>ATM</option>";
                    }
                    echo "</select>";
                    echo "</td>";

                    echo "<td>";
                    echo "<select name='ambiente' onchange = 'this.form.submit()'>";

                    if ($ambi == null) {
                        $ambi = "nac";
                    }

                    if ($ambi == "nac") {
                        echo "<option value='nac' Selected>Nacional</option>";
                    } else {
                        echo "<option value='nac'>Nacional</option>";
                    }
                    if ($ambi == "int") {
                        echo "<option value='int' Selected>Internacional</option>";
                    } else {
                        echo "<option value='int'>Internacional</option>";
                    }

                    echo "</select>";
                    echo "</td>";

                    $pag = "tbl_mon_hora_" . $prod . "_" . $ambi . "_" . $Y . $m;

                    $pagina_recortada = substr($pag, 0, 20);

                    echo "<td><input type='submit' value='Actualizar'></td>";

										echo "<td>";
                    switch ($pagina_recortada) {
                        case "tbl_mon_hora_pos_nac":
                            $pag_desc = "POS Nacional";
                            break;
                        case "tbl_mon_hora_pos_int":
                            $pag_desc = "POS Internacional";
                            break;
                        case "tbl_mon_hora_atm_nac":
                            $pag_desc = "ATM Nacional";
                            break;
                        case "tbl_mon_hora_atm_int":
                            $pag_desc = "ATM Internacional";
                            break;
                    }

                    if (!empty($_POST['selected8'])) {
                        foreach ($_POST['selected8'] as $cajita8) {
                            $QRY_D = $QRY_D . ",'" . $cajita8 . "'";
                        }
                        $chk_s8 = 'checked';
                    }
                    if ($QRY_D == null) {
                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND DIA IN (" . substr($QRY_D, 1) . ")";
                    }


                    if (!empty($_POST['selected4'])) {
                        foreach ($_POST['selected4'] as $cajita4) {
                            $QRY_HORA = $QRY_HORA . ",'" . $cajita4 . "'";
                        }
                        $chk_s4 = 'checked';
                    }

                    if ($QRY_HORA == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND HORA IN (" . substr($QRY_HORA, 1) . ")";
                    }


                    if (!empty($_POST['selected7'])) {
                        foreach ($_POST['selected7'] as $cajita7) {
                            $QRY_CD = $QRY_CD . ",'" . substr($cajita7,0,3) . "'";
                        }
                        $chk_s7 = 'checked';
                    }

                    if ($QRY_CD == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND CODIGO_RESPUESTA IN (" . substr($QRY_CD, 1) . ")";
                    }
                    

                    if (!empty($_POST['selected1'])) {
                        foreach ($selected1 as $cajita) {
                            $QRY_LN = $QRY_LN . ",'" . str_pad($cajita,4) . "'";
                        }
                        $chk_s1 = 'checked';
                    }
                    if ($QRY_LN == null) {
                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND LN_TARJ IN (" . substr($QRY_LN, 1) . ")";
                    }


                    if (!empty($_POST['selected2'])) {
                        foreach ($_POST['selected2'] as $cajita2) {
                            $QRY_FIID = $QRY_FIID . ",'" . str_pad($cajita2,4) . "'";
                        }
                        $chk_s2 = 'checked';
                    }


                    if ($QRY_FIID == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND FIID_TARJ IN (" . substr($QRY_FIID, 1) . ")";
                    }


                    if (!empty($_POST['selected9'])) {
                        foreach ($_POST['selected9'] as $cajita9) {
                            $QRY_LN_ADQ = $QRY_LN_ADQ . ",'" . str_pad($cajita9,4) . "'";
                        }
                        $chk_s9 = 'checked';
                    }

                    if ($QRY_LN_ADQ == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {

                        if ($pagina_recortada == "tbl_mon_hora_pos_nac" or $pagina_recortada == "tbl_mon_hora_pos_int") {
                            $QRY_WHERE = $QRY_WHERE . " AND LN_COMER IN (" . substr($QRY_LN_ADQ, 1) . ")";
                        }
                        if ($pagina_recortada == "tbl_mon_hora_atm_nac" or $pagina_recortada == "tbl_mon_hora_atm_int") {
                            $QRY_WHERE = $QRY_WHERE . " AND LN_CAJERO IN (" . substr($QRY_LN_ADQ, 1) . ")";
                        }
                    }

                    if (!empty($_POST['selected10'])) {
                        foreach ($_POST['selected10'] as $cajita10) {
                            $QRY_FIID_ADQ = $QRY_FIID_ADQ . ",'" . str_pad($cajita10,4) . "'";
                        }
                        $chk_s10 = 'checked';
                    }

                    if ($QRY_FIID_ADQ == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {

                        if ($pagina_recortada == "tbl_mon_hora_pos_nac" or $pagina_recortada == "tbl_mon_hora_pos_int") {
                            $QRY_WHERE = $QRY_WHERE . " AND FIID_COMER IN (" . substr($QRY_FIID_ADQ, 1) . ")";
                        }
                        if ($pagina_recortada == "tbl_mon_hora_atm_nac" or $pagina_recortada == "tbl_mon_hora_atm_int") {
                            $QRY_WHERE = $QRY_WHERE . " AND FIID_CAJERO IN (" . substr($QRY_FIID_ADQ, 1) . ")";
                        }
                    }



                    if (!empty($_POST['selected3'])) {
                        foreach ($_POST['selected3'] as $cajita3) {
                            $QRY_TIPO = $QRY_TIPO . ",'" . $cajita3 . "'";
                        }
                        $chk_s3 = 'checked';
                    }

                    if ($QRY_TIPO == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND TIPO IN (" . substr($QRY_TIPO, 1) . ")";
                    }


                    if (!empty($_POST['selected5'])) {
                        foreach ($_POST['selected5'] as $cajita5) {
                            $QRY_R = $QRY_R . ",'" . $cajita5 . "'";
                        }
                        $chk_s5 = 'checked';
                    }

                    if ($QRY_R == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND R IN (" . substr($QRY_R, 1) . ")";
                    }

                    if (!empty($_POST['selected6'])) {
                        foreach ($_POST['selected6'] as $cajita6) {
                            $QRY_TT = $QRY_TT . ",'" . substr($cajita6,0,2) . "'";
                        }
                        $chk_s6 = 'checked';
                    }

                    if ($QRY_TT == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND TIPO_TRANSAC IN (" . substr($QRY_TT, 1) . ")";
                    }


                    if (!empty($_POST['selected11'])) {
                        foreach ($_POST['selected11'] as $cajita11) {
                            $QRY_T_TARJ = $QRY_T_TARJ . ",'" . $cajita11 . "'";
                        }
                        $chk_s11 = 'checked';
                    }

                    if ($QRY_T_TARJ == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND TIPO_TARJETA IN (" . substr($QRY_T_TARJ, 1) . ")";
                    }

                    if (!empty($_POST['selected12'])) {
                        foreach ($_POST['selected12'] as $cajita12) {
                            $QRY_ENTRY_MODE = $QRY_ENTRY_MODE . ",'" . $cajita12 . "'";
                        }
                        $chk_s12 = 'checked';
                    }

                    if ($QRY_ENTRY_MODE == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND ENTRY_MODE IN (" . substr($QRY_ENTRY_MODE, 1) . ")";
                    }

                    if (!empty($_POST['selected13'])) {
                        foreach ($_POST['selected13'] as $cajita13) {
                            $QRY_TIPO_TERM = $QRY_TIPO_TERM . ",'" . $cajita13 . "'";
                        }
                        $chk_s13 = 'checked';
                    }

                    if ($QRY_TIPO_TERM == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND TIPO_TERM IN (" . substr($QRY_TIPO_TERM, 1) . ")";
                    }

                    if (!empty($_POST['selected14'])) {
                        foreach ($_POST['selected14'] as $cajita14) {
                            $QRY_Q2_ID_MED_ACC = $QRY_Q2_ID_MED_ACC . ",'" . substr($cajita14,0,2) . "'";
                        }
                        $chk_s14 = 'checked';
                    }

                    if ($QRY_Q2_ID_MED_ACC == null) {

                        $QRY_WHERE = $QRY_WHERE;
                    } else {
                        $QRY_WHERE = $QRY_WHERE . " AND KQ2_ID_MEDIO_ACCESO IN (" . substr($QRY_Q2_ID_MED_ACC, 1) . ")";
                    }

                    if ($QRY_WHERE == null) {

                        $QRY_WHERE = '';
                    } else {
                        $QRY_WHERE = "WHERE " . substr($QRY_WHERE, 4);
                    }
                    echo "</td>";
            ?>
                      </tr>
            				</table>
            				</td>
            				
            				<td align='center' valign='bottom' width='400px' ><a title='Vista simple donde se comparan las transacciones aceptadas contra las rechazadas en el mes' style='font-size:200%;'> Aceptadas Vs Rechazadas </a></td>
            				
            			<td align='right' valign='bottom'>
            			<a  class='bfbutton' onclick="history.go(-1)"><img src='images\007.png' bgcolor='#FFFFFF'>Filtro Anterior</a>
            			<a class='bfbutton' onclick="history.go(+1)">Filtro Siguiente<img src='images\008.png' bgcolor='#FFFFFF'></a>
            			</td>
            				
            			<td valign='bottom' align='right' width='70px' style='rigth-margin:0'>
                    <a class="ovalbutton" style="margin-left: 6px" href='#' onclick="muestraTodo()">
                    	<span>Mostrar</span>
                    </a> 
                  </td>
                  
                  <td valign='bottom' align='right' width='70px'>
                    <a class="ovalbutton" style="margin-left: 6px" href='#' onclick="ocultaTodo()">
                    	<span>Ocultar</span>
                    </a>
            			</td>
            			
            			</tr>
            		</table>


                <table width='100%' align='center'>
                	<tr align='center'>
                		<td align='center'>

<div id="ddtopmenubar" class="chromemenu">
<ul>
<li><a onclick='oculta("horaHide")' style="cursor:hand">Hora</a></li>
<li><a onclick='oculta("tipoTransaccionHide")' style="cursor:hand">Transaccion</a></li>
<li><a onclick='oculta("tipoMensajeHide")' style="cursor:hand">Mensaje</a></li>
<li><a onclick='oculta("tipoTerminalHide")' style="cursor:hand">Terminal</a></li>
<li><a onclick='oculta("tipoTarjetaHide")' style="cursor:hand">Tarjeta</a></li>
<li><a onclick='oculta("responderHide")' style="cursor:hand">Responder</a></li>
<li><a onclick='oculta("redLogicaEmisorHide")' style="cursor:hand">LN Emisor</a></li>
<li><a onclick='oculta("FiidTarjetaHide")' style="cursor:hand">FIID Emisor</a></li>
<li><a onclick='oculta("redLogicaAdqHide")' style="cursor:hand">LN Adquirente</a></li>
<li><a onclick='oculta("fiidComercioHide")' style="cursor:hand">FIID Adquirente</a></li>
<li><a onclick='oculta("entryModeHide")' style="cursor:hand">Entry Mode</a></li>
<li><a onclick='oculta("tokenQ2Hide")' style="cursor:hand">Token Q2</a></li>
<li><a onclick='oculta("codigoRespHide")' style="cursor:hand">Codigo Respuesta</a></li>
</ul>
</div>

</td>
</tr>
</table>

<div class='maxima'>
                <?php
                    
                    echo "<table width='100%' bgcolor='#B8B8B8' border='0px' cellpadding='0px' cellspacing='0px'>";
	                  echo "<tr align='center' valign='middle'>";
	                  
	                  $sql_fiid_desc = "SELECT FIID, DESC_FIID FROM CAT_FIID";
                    $sql_fiid_desc = oci_parse($db, $sql_fiid_desc);
                    oci_execute($sql_fiid_desc);
                    $fiid_count = oci_fetch_all($sql_fiid_desc,$fiid, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);
                    
                    $sql_ln_desc = "SELECT LN, DESC_LN FROM CAT_LN";
                    $sql_ln_desc = oci_parse($db, $sql_ln_desc);
                    oci_execute($sql_ln_desc);
                    $ln_count = oci_fetch_all($sql_ln_desc,$ln, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);

                    
                    //*****************************************HORA***********************************************
                    
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='horaHide' style='display:inline; margin:3px;'> ";
                    //$sql_hora = "SELECT  DISTINCT HORA FROM $pag " . $QRY_WHERE . " GROUP BY HORA ORDER BY HORA";
                    $sql_hora = "SELECT DISTINCT HORA FROM $pag " . $QRY_WHERE . " GROUP BY HORA ORDER BY HORA";
                    $sql_hora = oci_parse($db, $sql_hora);
                    oci_execute($sql_hora);

                    echo "<tr valign='middle'>";
                    echo "<td rowspan='20' nowrap='nowrap' valign='middle'><strong><a onclick=\"MassSelection('selected4[]','MassCB4')\" style=\"cursor:hand\">Hora </a><input class='hide' type=checkbox $chk_s4 id=MassCB4  /></td >";
                    $i=0;
                    while ($myrow_hora = oci_fetch_array($sql_hora)) {
                    	if($i > 11){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    	}
                      echo "<td valign='middle'><input type=checkbox id=" . $myrow_hora["HORA"] . " name='selected4[]' $chk_s4 value=" . $myrow_hora["HORA"] . " title=" . $myrow_hora["HORA"] . " alt='Select (" . $myrow_hora["HORA"] . ")' accept=" . $myrow_hora["HORA"] . ">" . $myrow_hora["HORA"] . "</td>";
                      $i++;
                    }
                    echo "</tr>";
                    echo "</table> ";
                    echo "</td>";
                    //*****************************************TIPO TRANSACCION***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='tipoTransaccionHide' style='display:inline; margin:3px;'> ";
                    if ($pagina_recortada == "tbl_mon_hora_pos_nac" or $pagina_recortada == "tbl_mon_hora_pos_int") {
                        //$sql_tt = "SELECT (A.TIPO_TRANSAC || ' - ' || B.TRANSAC) as TIPO_TRANSAC_POS FROM (SELECT  DISTINCT TIPO_TRANSAC FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TRANSAC ORDER BY TIPO_TRANSAC) A, tipo_transac_pos B where A.TIPO_TRANSAC=B.TIPO_TRANSAC ";
                        $sql_tt = "SELECT (A.TIPO_TRANSAC || ' - ' || B.TRANSAC) as TIPO_TRANSAC_POS FROM (SELECT DISTINCT TIPO_TRANSAC FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TRANSAC ORDER BY TIPO_TRANSAC) A, tipo_transac_pos B where A.TIPO_TRANSAC=B.TIPO_TRANSAC ";
                    }
                    if ($pagina_recortada == "tbl_mon_hora_atm_nac" or $pagina_recortada == "tbl_mon_hora_atm_int") {
                        //$sql_tt = "SELECT (A.TIPO_TRANSAC || ' - ' || B.TRANSAC) as TIPO_TRANSAC_ATM FROM (SELECT  DISTINCT TIPO_TRANSAC FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TRANSAC ORDER BY TIPO_TRANSAC) A, tipo_transac_atm B where A.TIPO_TRANSAC=B.TIPO_TRANSAC ";
                        $sql_tt = "SELECT (A.TIPO_TRANSAC || ' - ' || B.TRANSAC) as TIPO_TRANSAC_ATM FROM (SELECT DISTINCT TIPO_TRANSAC FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TRANSAC ORDER BY TIPO_TRANSAC) A, tipo_transac_atm B where A.TIPO_TRANSAC=B.TIPO_TRANSAC ";
                    }
                    $sql_tt = oci_parse($db, $sql_tt);
                    oci_execute($sql_tt);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected6[]','MassCB6')\" style=\"cursor:hand\">Tipo Transacci&oacute;n </a></strong><input class='hide' type=checkbox $chk_s6 id=MassCB6 ></td>";
                    $i=0;
                    while ($myrow_TT = oci_fetch_array($sql_tt)) {
                    	if($i > 3){
                        echo "</tr><tr valign='middle'>";
                        $i=0;
                    	}
                        echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id='" . $myrow_TT[0] . "' name='selected6[]' $chk_s6 value='" . $myrow_TT[0] . "' title='" . $myrow_TT[0] . "' alt='Select (" . $myrow_TT[0] . ")' accept='" . $myrow_TT[0] . "'>" . $myrow_TT[0] . " </td> ";
                        $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    //****************************************************************************************************
                    
                    echo "</tr></table><table width='100%' bgcolor='#B8B8B8' border='0px' cellpadding='0px' cellspacing='0px'><tr align='center' valign='middle'>";
                    
                    //*****************************************TIPO MENSAJE***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='tipoMensajeHide' style='display:inline; margin:3px;'> ";
                    //$sql_tipo = "SELECT  DISTINCT TIPO FROM $pag " . $QRY_WHERE . " GROUP BY TIPO ORDER BY TIPO";
                    $sql_tipo = "SELECT DISTINCT TIPO FROM $pag " . $QRY_WHERE . " GROUP BY TIPO ORDER BY TIPO";
                    $sql_tipo = oci_parse($db, $sql_tipo);
                    oci_execute($sql_tipo);
                    echo "<tr valign='middle' >";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected3[]','MassCB3')\" style=\"cursor:hand\">Tipo Mensaje </a></strong><input class='hide' type=checkbox  $chk_s3 id=MassCB3 ></td>";
                    while ($myrow_tipo = oci_fetch_array($sql_tipo)) {
                        echo "<td valign='middle' ><input type=checkbox id=" . $myrow_tipo["TIPO"] . " name='selected3[]' $chk_s3 value=" . $myrow_tipo["TIPO"] . " title=" . $myrow_tipo["TIPO"] . " alt='Select (" . $myrow_tipo["TIPO"] . ")' accept=" . $myrow_tipo["TIPO"] . ">" . $myrow_tipo["TIPO"] . "</td>";
                    }
                    echo "</tr>";
                    echo "</table> ";
                    echo "</td>";
//                    //*****************************************TIPO TERMINAL***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='tipoTerminalHide' style='display:inline; margin:3px;'> ";
                    //$sql_TIPO_TERM = "SELECT  DISTINCT TIPO_TERM FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TERM ORDER BY TIPO_TERM";
                    $sql_TIPO_TERM = "SELECT DISTINCT TIPO_TERM FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TERM ORDER BY TIPO_TERM";
                    $sql_TIPO_TERM = oci_parse($db, $sql_TIPO_TERM);
                    oci_execute($sql_TIPO_TERM);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected13[]','MassCB13')\" style=\"cursor:hand\">Tipo Terminal </a></strong><input class='hide' type=checkbox $chk_s13 id=MassCB13  ></td>";
                    while ($myrow_TIPO_TERM = oci_fetch_array($sql_TIPO_TERM)) {
                        if ($myrow_TIPO_TERM[0] == '  ') {

                            echo "<td><input type=checkbox id=" . $myrow_TIPO_TERM[0] . " name='selected13[]' $chk_s13 value=" . $myrow_TIPO_TERM[0] . " title='Nulo' alt='Select (Nulo)' accept=" . $myrow_TIPO_TERM[0] . ">Nulo</td>";
                        } else {

                            echo "<td><input type=checkbox id=" . $myrow_TIPO_TERM[0] . " name='selected13[]' $chk_s13 value=" . $myrow_TIPO_TERM[0] . " title=" . $myrow_TIPO_TERM[0] . " alt='Select (" . $myrow_TIPO_TERM[0] . ")' accept=" . $myrow_TIPO_TERM[0] . ">" . $myrow_TIPO_TERM[0] . "<td>";
                        }
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    //*****************************************TIPO TARJETA***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='tipoTarjetaHide' style='display:inline; margin:3px;'> ";
                    //$sql_T_TARJ = "SELECT  DISTINCT TIPO_TARJETA FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TARJETA ORDER BY TIPO_TARJETA";
                    $sql_T_TARJ = "SELECT DISTINCT TIPO_TARJETA FROM $pag " . $QRY_WHERE . " GROUP BY TIPO_TARJETA ORDER BY TIPO_TARJETA";
					
                    $sql_T_TARJ = oci_parse($db, $sql_T_TARJ);
                    oci_execute($sql_T_TARJ);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected11[]','MassCB11')\" style=\"cursor:hand\">Tipo Cuenta </a></strong><input class='hide' type=checkbox $chk_s11 id=MassCB11 ></td>";
                    while ($myrow_T_TARJ = oci_fetch_array($sql_T_TARJ)) {
                        if ($myrow_T_TARJ[0] == '  ') {

                            echo "<td valign='middle' ><input type=checkbox  name='selected11[]' $chk_s11  title='Nulo' alt='Select (Nulo)' accept=" . $myrow_T_TARJ[0] . ">Nulo</td>";
                        } else {

                            echo "<td valign='middle'><input type=checkbox id=" . $myrow_T_TARJ[0] . " name='selected11[]' $chk_s11 value=" . $myrow_T_TARJ[0] . " title=" . $myrow_T_TARJ[0] . " alt='Select (" . $myrow_T_TARJ[0] . ")' accept=" . $myrow_T_TARJ[0] . ">" . $myrow_T_TARJ[0] . "</td>";
                        }
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
//                    //*****************************************RESPONDER***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='responderHide' style='display:inline; margin:3px;'> ";
                    //$sql_r = "SELECT  DISTINCT R FROM $pag " . $QRY_WHERE . " GROUP BY R ORDER BY R";
                    $sql_r = "SELECT  DISTINCT R FROM $pag " . $QRY_WHERE . " GROUP BY R ORDER BY R";
                    $sql_r = oci_parse($db, $sql_r);
                    oci_execute($sql_r);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected5[]','MassCB5')\" style=\"cursor:hand\">Responder </a></strong><input class='hide' type=checkbox $chk_s5 id=MassCB5></td>";
                    while ($myrow_R = oci_fetch_array($sql_r)) {
                        echo "<td valign='middle'><input type=checkbox id=" . $myrow_R["R"] . " name='selected5[]' $chk_s5 value=" . $myrow_R["R"] . " title=" . $myrow_R["R"] . " alt='Select (" . $myrow_R["R"] . ")' accept=" . $myrow_R["R"] . ">" . $myrow_R["R"] . "</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    //****************************************************************************************************
                    
                    echo "</tr></table><table width='100%' bgcolor='#B8B8B8' border='0px' cellpadding='0px' cellspacing='0px'><tr align='center' valign='middle'>";
                    
                    //*****************************************RED LOGICA EMISOR***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='redLogicaEmisorHide' style='display:inline; margin:3px;'> ";
                    //$sql_ln_em = "SELECT  DISTINCT LN_TARJ FROM $pag " . $QRY_WHERE . " GROUP BY LN_TARJ ORDER BY LN_TARJ";
                    $sql_ln_em = "SELECT DISTINCT LN_TARJ FROM $pag " . $QRY_WHERE . " GROUP BY LN_TARJ ORDER BY LN_TARJ";
                    $sql_ln_em = oci_parse($db, $sql_ln_em);
                    oci_execute($sql_ln_em);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected1[]','MassCB1')\" style=\"cursor:hand\">LN Emisor </a></strong><input class='hide' type=checkbox id='MassCB1' $chk_s1 /></td>";
                    $i=0;
                    while ($myrow_ln_em = oci_fetch_array($sql_ln_em)) {
                    if($i > 5){
                    	echo "</tr><tr valign='middle'>";
                    	$i=0;
                    }
                    //$sql_fiid_desc = "SELECT DESC_LN FROM CAT_LN WHERE LN ='$myrow_ln_em[0]'";
                    //$sql_fiid_desc = oci_parse($db, $sql_fiid_desc);
                    //oci_execute($sql_fiid_desc);
                    //$fiid_desc = oci_fetch_array($sql_fiid_desc);
                    //$fiid_desc = '"' . $myrow_ln_em[0] . ' - ' . $fiid_desc[0] . '"';
                    $fiid_desc = '"' . $myrow_ln_em[0] . ' - "';
                    for ($ln_cuenta=0; $ln_cuenta < $ln_count; $ln_cuenta++ ){
                    	if($myrow_ln_em[0] == $ln[$ln_cuenta][0]){
                    		$fiid_desc = '"' . $myrow_ln_em[0] . ' - ' . $ln[$ln_cuenta][1] . '"';
                    	}
                    }
                      echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id=" . $myrow_ln_em[0] . " name='selected1[]' $chk_s1 value=" . $myrow_ln_em[0] . " title=" . $fiid_desc . " alt='Select (" . $myrow_ln_em[0] . ")' accept=" . $myrow_ln_em[0] . ">" . $myrow_ln_em[0] . "</td>";
                      $i++;
                    }
                    
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
//                    //*****************************************FIID TARJETA***********************************************
                     echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='FiidTarjetaHide' style='display:inline; margin:3px;'> ";
                    //$sql_fiid_em = "SELECT  DISTINCT FIID_TARJ FROM $pag " . $QRY_WHERE . " GROUP BY FIID_TARJ ORDER BY FIID_TARJ";
                    $sql_fiid_em = "SELECT DISTINCT FIID_TARJ FROM $pag " . $QRY_WHERE . " GROUP BY FIID_TARJ ORDER BY FIID_TARJ";
                    $sql_fiid_em = oci_parse($db, $sql_fiid_em);
                    oci_execute($sql_fiid_em);
                    echo "<tr valign='middle'>";
                    echo "<td rowspan='20' nowrap='nowrap' valign='middle'><strong><a onclick=\"MassSelection('selected2[]','MassCB2')\" style=\"cursor:hand\">FIID Emisor </a></strong><input class='hide' type=checkbox id=MassCB2  $chk_s2 /></td>";
                    $i=0;
                    while ($myrow_fiid_em = oci_fetch_array($sql_fiid_em)) {
                    	if($i > 13){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    }
                    //$sql_fiid_desc = "SELECT DESC_FIID FROM CAT_FIID WHERE FIID ='$myrow_fiid_em[0]'";
                    //$sql_fiid_desc = oci_parse($db, $sql_fiid_desc);
                    //oci_execute($sql_fiid_desc);
                    //$fiid_desc = oci_fetch_array($sql_fiid_desc);
                    //$fiid_desc = '"' . $myrow_fiid_em[0] . ' - ' . $fiid_desc[0] . '"';
                    $fiid_desc = '"' . $myrow_fiid_em[0] . ' - "';
                    for ($fiid_cuenta=0; $fiid_cuenta < $fiid_count; $fiid_cuenta++ ){
                    	if($myrow_fiid_em[0] == $fiid[$fiid_cuenta][0]){
                    		$fiid_desc = '"' . $myrow_fiid_em[0] . ' - ' . $fiid[$fiid_cuenta][1] . '"';
                    	}
                    }
                        if ($myrow_fiid_em[0] == '    ') {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox name='selected2[]' $chk_s2 title='Nulo' alt='Select (Nulo)' accept=" . $myrow_fiid_em[0] . ">Nulo</td>";
                        } else {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id=" . $myrow_fiid_em[0] . " name='selected2[]' $chk_s2 value=" . $myrow_fiid_em[0] . " title=" . $fiid_desc . " alt='Select (" . $myrow_fiid_em[0] . ")' accept=" . $myrow_fiid_em[0] . ">" . $myrow_fiid_em[0] . "</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    //****************************************************************************************************
                    
                    echo "</tr></table><table width='100%' bgcolor='#B8B8B8' border='0px' cellpadding='0px' cellspacing='0px'><tr align='center' valign='middle'>";
                    
//                    //*****************************************RED LOGICA COMERCIO***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='redLogicaAdqHide' style='display:inline; margin:3px;'> ";
                    if ($pagina_recortada == "tbl_mon_hora_pos_nac" or $pagina_recortada == "tbl_mon_hora_pos_int") {
                        //$sql_ln = "SELECT  DISTINCT LN_COMER FROM $pag " . $QRY_WHERE . " GROUP BY LN_COMER ORDER BY LN_COMER";
                        $sql_ln = "SELECT DISTINCT LN_COMER FROM $pag " . $QRY_WHERE . " GROUP BY LN_COMER ORDER BY LN_COMER";
                    }
                    if ($pagina_recortada == "tbl_mon_hora_atm_nac" or $pagina_recortada == "tbl_mon_hora_atm_int") {
                        $sql_ln = "SELECT  DISTINCT LN_CAJERO FROM $pag " . $QRY_WHERE . " GROUP BY LN_CAJERO ORDER BY LN_CAJERO";
                    }
                    $sql_ln = oci_parse($db, $sql_ln);
                    oci_execute($sql_ln);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected9[]','MassCB9')\" style=\"cursor:hand\">LN Adquirente </a></strong><input class='hide' type=checkbox id=MassCB9  $chk_s9 ></td>";
                    $i=0;
                    while ($myrow_ln = oci_fetch_array($sql_ln)) {
                    	if($i > 10){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    }
//                    $sql_fiid_desc = "SELECT DESC_LN FROM CAT_LN WHERE LN ='$myrow_ln[0]'";
//                    $sql_fiid_desc = oci_parse($db, $sql_fiid_desc);
//                    oci_execute($sql_fiid_desc);
//                    $fiid_desc = oci_fetch_array($sql_fiid_desc);
//                    $fiid_desc = '"' . $myrow_ln[0] . ' - ' . $fiid_desc[0] . '"';
                    $fiid_desc = '"' . $myrow_ln[0] . ' - "';
                    for ($ln_cuenta=0; $ln_cuenta < $ln_count; $ln_cuenta++ ){
                    	if($myrow_ln[0] == $ln[$ln_cuenta][0]){
                    		$fiid_desc = '"' . $myrow_ln[0] . ' - ' . $ln[$ln_cuenta][1] . '"';
                    	}
                    }
                        echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id=" . $myrow_ln[0] . " name='selected9[]' $chk_s9 value=" . $myrow_ln[0] . " title=" . $fiid_desc . " alt='Select (" . $myrow_ln[0] . ")' accept=" . $myrow_ln[0] . ">" . $myrow_ln[0] . "</td> ";
                        $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
//                    //*****************************************FIID COMERCIO***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='fiidComercioHide' style='display:inline; margin:3px;'> ";
                    if ($pagina_recortada == "tbl_mon_hora_pos_nac" or $pagina_recortada == "tbl_mon_hora_pos_int") {
                       // $sql_fiid = "SELECT  DISTINCT FIID_COMER FROM $pag " . $QRY_WHERE . " GROUP BY FIID_COMER ORDER BY FIID_COMER";
                        $sql_fiid = "SELECT DISTINCT FIID_COMER FROM $pag " . $QRY_WHERE . " GROUP BY FIID_COMER ORDER BY FIID_COMER";
                    }
                    if ($pagina_recortada == "tbl_mon_hora_atm_nac" or $pagina_recortada == "tbl_mon_hora_atm_int") {
                        //$sql_fiid = "SELECT  DISTINCT FIID_CAJERO FROM $pag " . $QRY_WHERE . " GROUP BY FIID_CAJERO ORDER BY FIID_CAJERO";
                        $sql_fiid = "SELECT DISTINCT FIID_CAJERO FROM $pag " . $QRY_WHERE . " GROUP BY FIID_CAJERO ORDER BY FIID_CAJERO";
                    }
                    $sql_fiid = oci_parse($db, $sql_fiid);
                    oci_execute($sql_fiid);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected10[]','MassCB10')\" style=\"cursor:hand\">FIID Adquirente </a></strong><input class='hide' type=checkbox id=MassCB10 $chk_s10 ></td>";
                    $i=0;
                    while ($myrow_fiid = oci_fetch_array($sql_fiid)) {
                    	if($i > 7){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    }
//                    $sql_fiid_desc = "SELECT DESC_FIID FROM CAT_FIID WHERE FIID ='$myrow_fiid[0]'";
//                    $sql_fiid_desc = oci_parse($db, $sql_fiid_desc);
//                    oci_execute($sql_fiid_desc);
//                    $fiid_desc = oci_fetch_array($sql_fiid_desc);
//                    $fiid_desc = '"' . $myrow_fiid[0] . ' - ' . $fiid_desc[0] . '"';
                    $fiid_desc = '"' . $myrow_fiid[0] . ' - "';
                    for ($fiid_cuenta=0; $fiid_cuenta < $fiid_count; $fiid_cuenta++ ){
                    	if($myrow_fiid[0] == $fiid[$fiid_cuenta][0]){
                    		$fiid_desc = '"' . $myrow_fiid[0] . ' - ' . $fiid[$fiid_cuenta][1] . '"';
                    	}
                    }
                        if ($myrow_fiid[0] == '    ') {
                            echo "<td valign='middle'  nowrap='nowrap'><input type=checkbox name='selected10[]' $chk_s10 title='Nulo' alt='Select (Nulo)' accept=" . $myrow_fiid[0] . ">Nulo</td>";
                        } else {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id=" . $myrow_fiid[0] . " name='selected10[]' $chk_s10 value=" . $myrow_fiid[0] . " title=" . $fiid_desc . " alt='Select (" . $myrow_fiid[0] . ")' accept=" . $myrow_fiid[0] . ">" . $myrow_fiid[0] . "</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    //****************************************************************************************************
                    
                    echo "</tr></table><table width='100%' bgcolor='#B8B8B8' border='0px' cellpadding='0px' cellspacing='0px'><tr align='center' valign='middle'>";
                    
                    //*****************************************Entry Mode***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='entryModeHide' style='display:inline; margin:3px;'> ";
                    //$sql_entry_mode = "SELECT  DISTINCT ENTRY_MODE FROM $pag " . $QRY_WHERE . " GROUP BY ENTRY_MODE ORDER BY ENTRY_MODE";
                    $sql_entry_mode = "SELECT DISTINCT ENTRY_MODE FROM $pag " . $QRY_WHERE . " GROUP BY ENTRY_MODE ORDER BY ENTRY_MODE";
                    $sql_entry_mode = oci_parse($db, $sql_entry_mode);
                    oci_execute($sql_entry_mode);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected12[]','MassCB12')\" style=\"cursor:hand\">Entry Mode </a></strong><input class='hide' type=checkbox id=MassCB12 $chk_s12 ></td>";
                    $i=0;
                    while ($myrow_ENTRY_MODE = oci_fetch_array($sql_entry_mode)) {
                    	if($i > 16){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    }
                        if ($myrow_ENTRY_MODE[0] == '   ') {

                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox  name='selected12[]' $chk_s12  title='Nulo' alt='Select (Nulo)' accept=" . $myrow_ENTRY_MODE[0] . ">Nulo</td>";
                        } else {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id=" . $myrow_ENTRY_MODE[0] . " name='selected12[]' $chk_s12 value=" . $myrow_ENTRY_MODE[0] . " title=" . $myrow_ENTRY_MODE[0] . " alt='Select (" . $myrow_ENTRY_MODE[0] . ")' accept=" . $myrow_ENTRY_MODE[0] . ">" . $myrow_ENTRY_MODE[0] . "</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
//                    //*****************************************Token Q2***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='tokenQ2Hide' style='display:inline; margin:3px;'> ";
                    $sql_Q2_ID_MED_ACC = "SELECT (A.KQ2_ID_MEDIO_ACCESO || ' - ' || B.MEDIO_ACCESO) FROM (SELECT  DISTINCT KQ2_ID_MEDIO_ACCESO FROM $pag " . $QRY_WHERE . " GROUP BY KQ2_ID_MEDIO_ACCESO ORDER BY KQ2_ID_MEDIO_ACCESO) A, MEDIO_ACCESO_Q2 B WHERE A.KQ2_ID_MEDIO_ACCESO=B.KQ2_ID_MEDIO_ACCESO ORDER BY (A.KQ2_ID_MEDIO_ACCESO || ' - ' || B.MEDIO_ACCESO)";
                    $sql_Q2_ID_MED_ACC = oci_parse($db, $sql_Q2_ID_MED_ACC);
                    oci_execute($sql_Q2_ID_MED_ACC);
                    echo "<tr valign='middle'>";
                    echo "<td valign='middle' rowspan='20' nowrap='nowrap'><strong><a onclick=\"MassSelection('selected14[]','MassCB14')\" style=\"cursor:hand\">Q2 ACCESO </a></strong><input class='hide' type=checkbox id=MassCB14  $chk_s14 ></td>";
                    $i=0;
                    while ($myrow_ID_MED_ACC = oci_fetch_array($sql_Q2_ID_MED_ACC)) {
                    	if($i > 1){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    }
                        if ($myrow_ID_MED_ACC[0] == '  ') {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id='" . $myrow_ID_MED_ACC[0] . "' name='selected14[]' $chk_s14 value='" . $myrow_ID_MED_ACC[0] . "' title='Nulo' alt='Select (Nulo)' accept='" . $myrow_ID_MED_ACC[0] . "'>Nulo</td>";
                        } else {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id='" . $myrow_ID_MED_ACC[0] . "' name='selected14[]' $chk_s14 value='" . $myrow_ID_MED_ACC[0] . "' title='" . $myrow_ID_MED_ACC[0] . "' alt='Select (" . $myrow_ID_MED_ACC[0] . ")' accept='" . $myrow_ID_MED_ACC[0] . "'>" . $myrow_ID_MED_ACC[0] . "</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    //****************************************************************************************************
                    
                    echo "</tr></table><table width='100%' bgcolor='#B8B8B8' border='0px' cellpadding='0px' cellspacing='0px'><tr align='center' valign='middle'>";
                    
                    //*****************************************Codigo Respuesta***********************************************
                    echo "<td align='left' valign='middle' class='filtros'>";
                    echo "<table valign='middle' bgcolor='#B8B8B8' id='codigoRespHide' style='display:inline; margin:3px;'> ";
                    if ($pagina_recortada == "tbl_mon_bin_pos_nac_" or $pagina_recortada == "tbl_mon_bin_pos_int_") {
                        $CAT_COD_RESP = "COD_RESP_POS";
                    } else {
                        $CAT_COD_RESP = "COD_RESP_ATM";
                    }
                    $sql_cod_resp = "SELECT ( '\"' || A.CODIGO_RESPUESTA || ' - ' || B.CODIGO || '\"') AS \"CODIGO_RESPUESTA\"  FROM ( SELECT DISTINCT  CODIGO_RESPUESTA FROM $pag " . $QRY_WHERE . " GROUP BY CODIGO_RESPUESTA ORDER BY CODIGO_RESPUESTA) A, $CAT_COD_RESP B where A.CODIGO_RESPUESTA=B.CODIGO_RESPUESTA group by ( '\"' || A.CODIGO_RESPUESTA || ' - ' || B.CODIGO || '\"') ORDER BY ( '\"' || A.CODIGO_RESPUESTA || ' - ' || B.CODIGO || '\"')";
                    $sql_cod_resp = oci_parse($db, $sql_cod_resp);
                    oci_execute($sql_cod_resp);
                    echo "<tr valign='middle'>";
                    echo "<td rowspan='20' nowrap='nowrap' valign='middle'><strong><a onclick=\"MassSelection('selected7[]','MassCB7')\" style=\"cursor:hand\">Codigo Respuesta</a></strong><input class='hide' type=checkbox id=MassCB7 $chk_s7 ></td>";
                    $i=0;
                    while ($myrow_cod_resp = oci_fetch_array($sql_cod_resp)) {
                    	if($i > 26){
                    		echo "</tr><tr valign='middle'>";
                    		$i=0;
                    }
                        if ($myrow_cod_resp[0] == '   ') {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox  name='selected7[]' $chk_s7  title='Nulo' alt='Select (Nulo)' accept=" . $myrow_cod_resp[0] . ">Nulo</td>";
                        } else {
                            echo "<td valign='middle' nowrap='nowrap'><input type=checkbox id=" . substr($myrow_cod_resp[0],1,3)  . " name='selected7[]' $chk_s7 value=" . substr($myrow_cod_resp[0],1,3)  . " title=" . $myrow_cod_resp[0]  . " alt='Select (" . substr($myrow_cod_resp[0],1,3)  . ")' accept=" . substr($myrow_cod_resp[0],1,3)  . ">" . substr($myrow_cod_resp[0],1,3) . "</td>";
                        }
                    $i++;
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";
                    
                ?>
              </tr>
              </table>
</div>

<div id="tabs"  style='display:block'>
  <ul>
    <li></li>
    <li><a href="#" onclick="transacciones()"><span>Transacciones</span></a></li>
    <li><a href="#" onclick="grafica()"><span>Grafica</span></a></li>
    <li><a href="#" onclick="por_per_codigo()"><span>% Codigo</span></a></li>
    <li><a href="#" onclick="por_per_dia()"><span>% Dia</span></a></li>
  </ul>
</div>
<p style='font-size:2px'>&nbsp</p>

            <?php   
                    echo "<table  style='border:1px solid #ffffff' id='transaccionesHide' style='display:block' class='hide'>";
                    echo "<tr>";
                    echo "<th></th>";
                    echo "<th style=\"background-color:#cfcfcf; border:3px groove\" colspan='31' align='center'><a>DIA DEL MES</a></th>";
                    echo "</tr>";
                    echo "<TR align='right' bgcolor=$color  >";
                    echo "<td nowrap='nowrap' align='left'><strong><a>Codigo Respuesta</a></strong></td>";
                    $sqld = "SELECT DISTINCT  DIA FROM " . $pag . " " . $QRY_WHERE . " GROUP BY DIA ORDER BY DIA";
                    $sqld = oci_parse($db, $sqld);
                    oci_execute($sqld);
                    $sqlcount = oci_parse($db, $sqlcount);
                    oci_execute($sqlcount);

                    $resultsnumberd = 0;
                    while ($myrowd = oci_fetch_array($sqld)) {
                    	$resultsnumberd++;
                      $QRY_DIA = $QRY_DIA . "sum(case when A.DIA =$myrowd[DIA] then suma else 0 end) \"$myrowd[DIA]\",";
                      echo "<td nowrap='nowrap' align='left'> <input type=checkbox id=" . $myrowd[DIA] . " name='selected8[]' $chk_s8 value=" . $myrowd[DIA] . " title=" . $myrowd[DIA] . " alt='Select (" . $myrowd[DIA] . ")' accept=" . $myrowd[DIA] . "><a>" . $myrowd[DIA] . "</a></td>";
                      $dias_array[$resultsnumberd] = $myrowd[DIA];
                    }


                    if ($pagina_recortada == "tbl_mon_hora_pos_nac" or $pagina_recortada == "tbl_mon_hora_pos_int") {
                        $CAT_COD_RESP = "COD_RESP_POS";
                    } else {
                        $CAT_COD_RESP = "COD_RESP_ATM";
                    }
                    
                    if (!($QRY_WHERE == NULL)) {
                      $grid_where =  " AND " . substr($QRY_WHERE,5);
                    }
                    $sele = substr("SELECT (A.CODIGO_RESPUESTA) AS \"CODIGO RESPUESTA\"," . $QRY_DIA, 0, -1);
                    $sql = $sele . " FROM (SELECT  DIA, 'Aceptadas' as CODIGO_RESPUESTA,SUM(TOTAL) Suma FROM $pag 
                                     WHERE CODIGO_RESPUESTA < '010' " . $grid_where . "
	                                   GROUP BY DIA,'Aceptadas'
	                                   UNION
	                                   SELECT  DIA, 'Rechazadas' as CODIGO_RESPUESTA,SUM(TOTAL) Suma FROM $pag 
	                                   WHERE CODIGO_RESPUESTA > '010' " . $grid_where . "
	                                   GROUP BY DIA,'Rechazadas') A
                                     group by (A.CODIGO_RESPUESTA ) ORDER BY (A.CODIGO_RESPUESTA)";
                    //echo "$sql";
                    //echo "<br/> " . substr($QRY_WHERE,5);
                    $result = oci_parse($db, $sql);
                    oci_execute($result);


                    echo "<td nowrap='nowrap' align='left' bgcolor=#B8B8B8><strong><a>TOTAL</a></strong></td>";
                    echo "</TR>\n";

                    $alternate = "2";
                    $GTOTAL = 0;
                    $matriz_flag = 0;
                    while ($myrow = oci_fetch_array($result)) {
                        $REGTOTAL = 0;
                        if ($alternate == "1") {
                            $color = "#ffffff";
                            $alternate = "2";
                        } else {
                            $color = "#efefef";
                            $alternate = "1";
                        }

                        echo "<TR align='right' bgcolor=$color>";
                        echo "<td nowrap='nowrap' align='left'><a>" . $myrow[0] . "</a></td>";

                        $matriz[$matriz_flag][0]=$myrow[0];
                        for ($i = 1; $i <= $resultsnumberd; $i++) {

                            echo "<td>" . number_format($myrow[$i],0,'',',') . "</td>";
                            $GTOTAL = $GTOTAL + $myrow[$i];
                            
                            $matriz[$matriz_flag][$i]=$myrow[$i];
                            
                            switch ($i) {
                                case "01": $matriz01 = $matriz01 + $myrow[$i];
                                    break;
                                case "02": $matriz02 = $matriz02 + $myrow[$i];
                                    break;
                                case "03": $matriz03 = $matriz03 + $myrow[$i];
                                    break;
                                case "04": $matriz04 = $matriz04 + $myrow[$i];
                                    break;
                                case "05": $matriz05 = $matriz05 + $myrow[$i];
                                    break;
                                case "06": $matriz06 = $matriz06 + $myrow[$i];
                                    break;
                                case "07": $matriz07 = $matriz07 + $myrow[$i];
                                    break;
                                case "08": $matriz08 = $matriz08 + $myrow[$i];
                                    break;
                                case "09": $matriz09 = $matriz09 + $myrow[$i];
                                    break;
                                case "10": $matriz10 = $matriz10 + $myrow[$i];
                                    break;
                                case "11": $matriz11 = $matriz11 + $myrow[$i];
                                    break;
                                case "12": $matriz12 = $matriz12 + $myrow[$i];
                                    break;
                                case "13": $matriz13 = $matriz13 + $myrow[$i];
                                    break;
                                case "14": $matriz14 = $matriz14 + $myrow[$i];
                                    break;
                                case "15": $matriz15 = $matriz15 + $myrow[$i];
                                    break;
                                case "16": $matriz16 = $matriz16 + $myrow[$i];
                                    break;
                                case "17": $matriz17 = $matriz17 + $myrow[$i];
                                    break;
                                case "18": $matriz18 = $matriz18 + $myrow[$i];
                                    break;
                                case "19": $matriz19 = $matriz19 + $myrow[$i];
                                    break;
                                case "20": $matriz20 = $matriz20 + $myrow[$i];
                                    break;
                                case "21": $matriz21 = $matriz21 + $myrow[$i];
                                    break;
                                case "22": $matriz22 = $matriz22 + $myrow[$i];
                                    break;
                                case "23": $matriz23 = $matriz23 + $myrow[$i];
                                    break;
                                case "24": $matriz24 = $matriz24 + $myrow[$i];
                                    break;
                                case "25": $matriz25 = $matriz25 + $myrow[$i];
                                    break;
                                case "26": $matriz26 = $matriz26 + $myrow[$i];
                                    break;
                                case "27": $matriz27 = $matriz27 + $myrow[$i];
                                    break;
                                case "28": $matriz28 = $matriz28 + $myrow[$i];
                                    break;
                                case "29": $matriz29 = $matriz29 + $myrow[$i];
                                    break;
                                case "30": $matriz30 = $matriz30 + $myrow[$i];
                                    break;
                                case "31": $matriz31 = $matriz31 + $myrow[$i];
                                    break;
                            }

                            $REGTOTAL = $REGTOTAL + $myrow[$i];
                        }


                        echo "<td bgcolor=#B8B8B8>" . number_format($REGTOTAL,0,'',',') . "</td>";
                        $TOTAL_ROW[$matriz_flag]=$REGTOTAL;
                        echo "</TR>\n";
                        $matriz_flag++;
                    }
									
                    echo "<tr align='right' bgcolor=#B8B8B8>";
                    echo "<td><strong><a>Total</a></strong></td>";

                    for ($i = 1; $i <= $resultsnumberd; $i++) {

                        switch ($i) {
                            case "01": echo "<td>" . number_format($matriz01,0,'',',') . "</td>";
                                break;
                            case "02": echo "<td>" . number_format($matriz02,0,'',',') . "</td>";
                                break;
                            case "03": echo "<td>" . number_format($matriz03,0,'',',') . "</td>";
                                break;
                            case "04": echo "<td>" . number_format($matriz04,0,'',',') . "</td>";
                                break;
                            case "05": echo "<td>" . number_format($matriz05,0,'',',') . "</td>";
                                break;
                            case "06": echo "<td>" . number_format($matriz06,0,'',',') . "</td>";
                                break;
                            case "07": echo "<td>" . number_format($matriz07,0,'',',') . "</td>";
                                break;
                            case "08": echo "<td>" . number_format($matriz08,0,'',',') . "</td>";
                                break;
                            case "09": echo "<td>" . number_format($matriz09,0,'',',') . "</td>";
                                break;
                            case "10": echo "<td>" . number_format($matriz10,0,'',',') . "</td>";
                                break;
                            case "11": echo "<td>" . number_format($matriz11,0,'',',') . "</td>";
                                break;
                            case "12": echo "<td>" . number_format($matriz12,0,'',',') . "</td>";
                                break;
                            case "13": echo "<td>" . number_format($matriz13,0,'',',') . "</td>";
                                break;
                            case "14": echo "<td>" . number_format($matriz14,0,'',',') . "</td>";
                                break;
                            case "15": echo "<td>" . number_format($matriz15,0,'',',') . "</td>";
                                break;
                            case "16": echo "<td>" . number_format($matriz16,0,'',',') . "</td>";
                                break;
                            case "17": echo "<td>" . number_format($matriz17,0,'',',') . "</td>";
                                break;
                            case "18": echo "<td>" . number_format($matriz18,0,'',',') . "</td>";
                                break;
                            case "19": echo "<td>" . number_format($matriz19,0,'',',') . "</td>";
                                break;
                            case "20": echo "<td>" . number_format($matriz20,0,'',',') . "</td>";
                                break;
                            case "21": echo "<td>" . number_format($matriz21,0,'',',') . "</td>";
                                break;
                            case "22": echo "<td>" . number_format($matriz22,0,'',',') . "</td>";
                                break;
                            case "23": echo "<td>" . number_format($matriz23,0,'',',') . "</td>";
                                break;
                            case "24": echo "<td>" . number_format($matriz24,0,'',',') . "</td>";
                                break;
                            case "25": echo "<td>" . number_format($matriz25,0,'',',') . "</td>";
                                break;
                            case "26": echo "<td>" . number_format($matriz26,0,'',',') . "</td>";
                                break;
                            case "27": echo "<td>" . number_format($matriz27,0,'',',') . "</td>";
                                break;
                            case "28": echo "<td>" . number_format($matriz28,0,'',',') . "</td>";
                                break;
                            case "29": echo "<td>" . number_format($matriz29,0,'',',') . "</td>";
                                break;
                            case "30": echo "<td>" . number_format($matriz30,0,'',',') . "</td>";
                                break;
                            case "31": echo "<td>" . number_format($matriz31,0,'',',') . "</td>";
                                break;
                        }
                    }

                    echo "<td>" . number_format($GTOTAL,0,'',',') . "</td>";
                    echo "</tr>";
                    echo "</table>";
                    /********************************************************************************************************************************/
                   
                    echo "<table  style='border:1px solid #ffffff' id='porPerCodigoHide' class='hide'>";
                    echo "<tr>";
                    echo "<th></th>";
                    echo "<th style=\"background-color:#cfcfcf; border:3px groove\" colspan='31' align='center'><a>DIA DEL MES %</a></th>";
                    echo "</tr>";
                    echo "<TR align='right' bgcolor=$color  >";
                    echo "<td nowrap='nowrap' align='left'><strong><a>Codigo Respuesta</a></strong></td>";
                    
                    
                    for($i=1;$i<=$resultsnumberd;$i++){   
                        echo "<td nowrap='nowrap' align='center'><a>$dias_array[$i]</a></td>";
                    }
                    
                    echo "<td nowrap='nowrap' align='center' bgcolor=#B8B8B8><strong><a>Promedio %</a></strong></td>";
                    echo "</TR>\n";

                    $alternate = "2";
                    for($i=0;$i < $matriz_flag;$i++) {
                        $REGTOTAL = 0;
                        if ($alternate == "1") {
                            $color = "#ffffff";
                            $alternate = "2";
                        } else {
                            $color = "#efefef";
                            $alternate = "1";
                        }

                        echo "<TR align='right' bgcolor=$color>";
                        echo "<td nowrap='nowrap' align='left'><a>" . $matriz[$i][0] . "</a></td>";
                        for ($j = 1; $j <= $resultsnumberd; $j++) {
                        
                            switch ($j) {
                            case "01": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz01,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz01,2,'.','');
                                break;
                            case "02": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz02,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz02,2,'.','');
                                break;
                            case "03": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz03,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz03,2,'.','');
                                break;
                            case "04": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz04,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz04,2,'.','');
                                break;
                            case "05": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz05,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz05,2,'.','');
                                break;
                            case "06": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz06,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz06,2,'.','');
                                break;
                            case "07": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz07,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz07,2,'.','');
                                break;
                            case "08": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz08,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz08,2,'.','');
                                break;
                            case "09": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz09,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz09,2,'.','');
                                break;
                            case "10": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz10,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz10,2,'.','');
                                break;
                            case "11": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz11,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz11,2,'.','');
                                break;
                            case "12": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz12,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz12,2,'.','');
                                break;
                            case "13": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz13,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz13,2,'.','');
                                break;
                            case "14": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz14,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz14,2,'.','');
                                break;
                            case "15": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz15,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz15,2,'.','');
                                break;
                            case "16": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz16,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz16,2,'.','');
                                break;
                            case "17": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz17,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz17,2,'.','');
                                break;
                            case "18": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz18,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz18,2,'.','');
                                break;
                            case "19": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz19,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz19,2,'.','');
                                break;
                            case "20": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz20,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz20,2,'.','');
                                break;
                            case "21": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz21,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz21,2,'.','');
                                break;
                            case "22": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz22,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz22,2,'.','');
                                break;
                            case "23": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz23,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz23,2,'.','');
                                break;
                            case "24": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz24,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz24,2,'.','');
                                break;
                            case "25": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz25,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz25,2,'.','');
                                break;
                            case "26": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz26,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz26,2,'.','');
                                break;
                            case "27": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz27,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz27,2,'.','');
                                break;
                            case "28": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz28,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz28,2,'.','');
                                break;
                            case "29": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz29,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz29,2,'.','');
                                break;
                            case "30": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz30,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz30,2,'.','');
                                break;
                            case "31": echo "<td>" . number_format(($matriz[$i][$j] * 100)/$matriz31,2,'.','') . "</td>";
                            $REGTOTAL = $REGTOTAL + number_format(($matriz[$i][$j] * 100)/$matriz31,2,'.','');
                                break;
                        }

                        }
                        echo "<td bgcolor=#B8B8B8>" . number_format($REGTOTAL/$resultsnumberd,4,'.','') ."</td>";
                        echo "</TR>\n";
                    }
                    echo "</table>";
                    
                    /********************************************************************************************************************************/
                   
                    echo "<table  style='border:1px solid #ffffff' id='porPerDiaHide' class='hide'>";
                    echo "<tr>";
                    echo "<th></th>";
                    echo "<th style=\"background-color:#cfcfcf; border:3px groove\" colspan='31' align='center'><a>DIA DEL MES %</a></th>";
                    echo "</tr>";
                    echo "<TR align='right' bgcolor=$color  >";
                    echo "<td nowrap='nowrap' align='left'><strong><a>Codigo Respuesta</a></strong></td>";
                    
                    
                    for($i=1;$i<=$resultsnumberd;$i++){   
                        echo "<td nowrap='nowrap' align='center'><a>$dias_array[$i]</a></td>";
                    }
                    
                    echo "</TR>\n";

                    $alternate = "2";
                    for($i=0;$i < $matriz_flag;$i++) {
                        $REGTOTAL = 0;
                        if ($alternate == "1") {
                            $color = "#ffffff";
                            $alternate = "2";
                        } else {
                            $color = "#efefef";
                            $alternate = "1";
                        }

                        echo "<TR align='right' bgcolor=$color>";
                        echo "<td nowrap='nowrap' align='left'><a>" . $matriz[$i][0] . "</a></td>";
                        for ($j = 1; $j <= $resultsnumberd; $j++) {
                        		$valor = ($matriz[$i][$j] * 100)/$TOTAL_ROW[$i];
                            echo "<td>" . number_format($valor,2,'.','') . "</td>";
                            $total_col[$j] = $total_col[$j] + $valor;
                        }

                        echo "</TR>";
                    }
                    echo "<TR align='right' bgcolor=#B8B8B8>";
                        echo "<td nowrap='nowrap' align='right'><strong><a>Promedio %</a></strong></td>";
                        for ($j = 1; $j <= $resultsnumberd; $j++) {
                        	$REGTOTAL = 0;
                        		$valor=$total_col[$j]/$matriz_flag;
                            echo "<td>" . number_format($valor,2,'.','') . "</td>";
                        }
                    echo "</TR>";
                    echo "</table>";
                    //*********************************************************************************************************/
                    
                    echo "\n \n <script type=\"text/JavaScript\"> ";
					           			echo "\nvar chart;";
			                    echo "\n$(document).ready(function() {";
			                    echo "\n	chart = new Highcharts.Chart({";
			                    
			                    echo "\n		chart: {";
			                    echo "\n			renderTo: 'chart',";
			                    echo "\n			defaultSeriesType: 'line',";
			                    echo "\n			marginRight: 120,";
			                    echo "\n			marginBottom: 50";
			                    echo "\n		},";
			                    
			                    echo "\n		title: {";
			                    echo "\n			text: 'Totales por Codigo de Respuesta del Mes',";
			                    echo "\n			x: -20 //center";
			                    echo "\n		},";
			                    
			                    echo "\n		subtitle: {";
			                    echo "\n			text: 'Fuente: Monitoreo Soporte Switch',";
			                    echo "\n			x: -20";
			                    echo "\n		},";
			                    
			                    echo "\n		xAxis: {";
			                    echo "\n			title: {text: 'Día del Mes'},";
			                    echo "\n			categories: [ ";
			                    for($i=1;$i<=$resultsnumberd;$i++){
                             if ($i==1) echo "'". $dias_array[$i] . "'";
                             else echo " ,'". $dias_array[$i] . "'";
                          }
			                    echo "\n		]";
			                    echo "\n		},";
			                    
			                    echo "\n		yAxis: {";
			                    echo "\n			title: {margin:65, text: 'Total de Transacciones'},";
			                    echo "\n      alternateGridColor: '#FFFFEA',";
			                    echo "\n      min: 0,";
			                    echo "\n      startOnTick: false,";
			                    echo "\n      minorTickLength:0,";
			                    echo "\n      minorTickInterval:'auto',";
			                    echo "\n			plotLines: [{";
			                    echo "\n				value: 0,";
			                    echo "\n				width: 1,";
			                    echo "\n				color: '#808080'";
			                    echo "\n			}]";
			                    echo "\n		},";
			                    
			                    echo "\n		tooltip: {";
			                    echo "\n			formatter: function() {";
			                    echo "\n	                return '<b>'+ this.series.name +'</b><br/>'+";
			                    echo "\n					'Dia:' + this.x +': '+ Highcharts.numberFormat(this.y,0,'.',',') +'';";
			                    echo "\n			}, ";
			                    echo "\n			shadow:true";
			                    echo "\n		},";
			                    
			                    echo "\n		legend: {";
			                    echo "\n			layout: 'vertical',";
			                    echo "\n			align: 'right',";
			                    echo "\n			verticalAlign: 'top',";
			                    echo "\n			x: 0,";
			                    echo "\n			y: 250,";
			                    echo "\n			borderWidth: 0";
			                    echo "\n		},";
			                    
			                    echo "\n    PlotOptions: {";
                          echo "\n      series: {";
                          echo "\n       dataLabels: { align: 'left', enabled: true, rotation: 270, x: 2, y: -10 }, ";
                          echo "\n       formatter: function() { return this.y; } ";
                         // echo "\n       animation: false ";
                          echo "\n      }";
                          echo "\n    },";
			                    
			                    echo "\n		series: [ ";
			                    for($i=0;$i < $matriz_flag;$i++) {
			                    	if ($i==0) echo "{ name: '" . $matriz[$i][0] . "' ,";
			                    	else       echo ", { name: '" . $matriz[$i][0] . "' ,";
			                            echo " data: [";
			                      for ($j = 1; $j <= $resultsnumberd; $j++) {
			                      	if($j==1) echo "" . $matriz[$i][$j] . "";
			                      	else      echo " ," . $matriz[$i][$j] . "";
                            }
                                  echo "]}";
			                            
			                   }
			                    echo "\n		]";
			                    echo "\n	});";
			                    echo "\n	";
			                    echo "\n	";
			                    echo "\n });";
				            echo "\n</script>";
                    
                    echo "<center>";
                    echo "<div id='graficaHide'>";
                    echo "<div id=\"chart\" style=\"width: 90%; height: 550px; margin: 0 auto\"></div>";
                    echo "</div>";
                    echo "</center>";
                    
            ?>

        </form>
        <hr>
        <table width='100%'>
            <tr>
                <td align='center'><a>Powered by Soporte Switch, PROSA. 2010.</a></td>
            </tr>
        </table>


    </BODY>
</HTML>
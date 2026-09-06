<!DOCTYPE html>

<html lang="es">
  
<head>
  
<meta charset="UTF-8">
<title>Formato Único Hoja de Vida-Persona Natural</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<form id="hvForm">

<!-- HOJA 1 -->
<div class="sheet">

  <div class="franja-box">

    <div class="franja-content">

      <div class="doc-header">

  
        <div>
           <img src="img/imagen_2026-09-06_005518742-removebg-preview.png" width="150px" height="150px">

        </div>
        <div class="titulo">
          
          <i>FORMATO ÚNICO</i><br>
          
          <span class="hv-title">HOJA DE VIDA</span><br>
          
          <b>Persona Natural</b>
          
          <p class="sub2">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
        </div>
        
        <div class="entidad">
          <label>ENTIDAD RECEPTORA</label>
          <input type="text" name="entidad_receptora">
        </div>
        
      </div>
      
    </div>
    
  </div>

  <div class="section-title"><div class="num">1</div><span class="separador">—</span><div class="label">DATOS PERSONALES</div></div>
  
  <div class="franja-box chico">
    
    <div class="franja-content">
      
  <table class="formtable">
    
    <tr>
      <td class="w33"><span class="lbl">PRIMER APELLIDO</span><input type="text" name="primer_apellido"></td>
      <td class="w33"><span class="lbl">SEGUNDO APELLIDO (O DE CASADA)</span><input type="text" name="segundo_apellido"></td>
      <td class="w34"><span class="lbl">NOMBRES</span><input type="text" name="nombres"></td>
    </tr>
    
    <tr>
      <td colspan="2">
        <span class="lbl">DOCUMENTO DE IDENTIFICACIÓN</span>
        
        <div class="checkbox-row">
          
          <label><input type="checkbox" name="doc_cc"> C.C</label>
          <label><input type="checkbox" name="doc_ce"> C.E</label>
          <label><input type="checkbox" name="doc_pas"> PAS</label>
          <label>No. <input type="text" name="doc_numero" style="width:140px"></label>
          
        </div>
        
      </td>
      
      <td>
        <span class="lbl">SEXO</span>
        
        <div class="checkbox-row">
          
          <label><input type="checkbox" name="sexo_f"> F</label>
          <label><input type="checkbox" name="sexo_m"> M</label>
          
        </div>
        <span class="lbl mt6">NACIONALIDAD</span>
        
        <div class="checkbox-row">
          
          <label><input type="checkbox" name="nac_col"> COL.</label>
          <label><input type="checkbox" name="nac_ext"> EXTRANJERO</label>
          <span>PAÍS <input type="text" name="nac_pais" style="width:90px"></span>
          
        </div>
        
      </td>
    </tr>
    <tr>
      
      <td colspan="3">
        
        <span class="lbl">LIBRETA MILITAR</span>
        
        <div class="checkbox-row">
          <label><input type="checkbox" name="lm_primera"> PRIMERA CLASE</label>
          <label><input type="checkbox" name="lm_segunda"> SEGUNDA CLASE</label>
          <label>NÚMERO <input type="text" name="lm_numero" style="width:120px"></label>
          <label>D.M <input type="text" name="lm_dm" style="width:100px"></label>
        </div>
        
      </td>
      
    </tr>
    
    <tr>
      
      <td colspan="2">
        
        <span class="lbl">FECHA Y LUGAR DE NACIMIENTO</span>
        <div class="checkbox-row mb6">
          <span>FECHA — DÍA <input type="text" class="mini-input" maxlength="2" name="nac_dia"></span>
          <span>MES <input type="text" class="mini-input" maxlength="2" name="nac_mes"></span>
          <span>AÑO <input type="text" class="year-input" maxlength="4" name="nac_anio"></span>
        </div>
        <div>PAÍS <input type="text" name="nac_lugar_pais"></div>
        <div class="mt4">DEPTO <input type="text" name="nac_depto"></div>
        <div class="mt4">MUNICIPIO <input type="text" name="nac_municipio"></div>
        
      </td>
      
      <td>
        
        <span class="lbl">DIRECCIÓN DE CORRESPONDENCIA</span>
        <input type="text" name="dir_correspondencia" class="mb6">
        
        <div class="checkbox-row">
          
          <span>PAÍS <input type="text" name="dir_pais" style="width:80px"></span>
          <span>DEPTO <input type="text" name="dir_depto" style="width:80px"></span>
          
        </div>
        
        
        <div class="mt4">MUNICIPIO <input type="text" name="dir_municipio"></div>
        
        <div class="checkbox-row mt4">
          
          <span>TELÉFONO <input type="text" name="dir_telefono" style="width:100px"></span>
          <span>EMAIL <input type="email" name="dir_email" style="width:140px"></span>
          
        </div>
        
      </td>
      
    </tr>
  </table>
    </div>
  </div>

  <div class="section-title"><div class="num">2</div><span class="separador">—</span><div class="label">FORMACIÓN ACADÉMICA</div></div>

  <div class="franja-box chico">
    <div class="franja-content">
  <div class="subhead">EDUCACIÓN BÁSICA Y MEDIA</div>
  <div class="note" style="padding:0 6px">Marque con una X el último grado aprobado (los grados de 1o. a 6o. de bachillerato equivalen a los grados 6o. a 11o. de educación básica secundaria y media).</div>
  
    <table class="formtable"><!--comienzo tabla-->
    <tr>
      
      <td>
        
        <div class="grade-boxes">
          <span style="font-size:10px;font-style:italic;align-self:center;margin-right:4px">PRIMARIA</span>
          
          <label>1o.<input type="checkbox" name="grado_1"></label>
          <label>2o.<input type="checkbox" name="grado_2"></label>
          <label>3o.<input type="checkbox" name="grado_3"></label>
          <label>4o.<input type="checkbox" name="grado_4"></label>
          <label>5o.<input type="checkbox" name="grado_5"></label>
          
          <span style="font-size:10px;font-style:italic;align-self:center;margin:0 4px">SECUNDARIA</span>
          <label>6o.<input type="checkbox" name="grado_6"></label>
          <label>7o.<input type="checkbox" name="grado_7"></label>
          <label>8o.<input type="checkbox" name="grado_8"></label>
          <label>9o.<input type="checkbox" name="grado_9"></label>
          
          <span style="font-size:10px;font-style:italic;align-self:center;margin:0 4px">MEDIA</span>
          <label>10<input type="checkbox" name="grado_10"></label>
          <label>11<input type="checkbox" name="grado_11"></label>
          
        </div>
        
      </td>
      
      <td class="w220">
        
        <span class="lbl">TÍTULO OBTENIDO / FECHA DE GRADO</span>
        <input type="text" name="titulo_basica" placeholder="Título obtenido" class="mb6">
        <div class="checkbox-row">
          <span>MES <input type="text" class="mini-input" name="titulo_basica_mes"></span>
          <span>AÑO <input type="text" class="year-input" name="titulo_basica_anio"></span>
        </div>
      </td>
    </tr>
      
  </table><!--termina tabla-->
      
    </div>
  </div>

  <div class="franja-box chico">
    <div class="franja-content">
  <div class="subhead">EDUCACIÓN SUPERIOR (PREGRADO Y POSTGRADO)</div>
  <div class="note" style="padding:0 6px">Diligencie este punto en estricto orden cronológico. Modalidad académica: TC (Técnica), TL (Tecnológica), TE (Tecnológica Especializada), UN (Universitaria), ES (Especialización), MG (Maestría o Magister), DOC (Doctorado o PhD). Relacione al frente el número de la tarjeta profesional (si ésta ha sido prevista en una ley).</div>
  
    <table class="formtable"> <!-- comienzo tabla-->
    <tr>
      <th>MODALIDAD ACADÉMICA</th>
      <th>No. SEMESTRES APROBADOS</th>
      <th>GRADUADO SI/NO</th>
      <th>NOMBRE DE LOS ESTUDIOS O TÍTULO OBTENIDO</th>
      <th>TERMINACIÓN MES/AÑO</th>
      <th>No. TARJETA PROFESIONAL</th>
    </tr>
    <tr>
      <td><input type="text" name="edu1_modalidad"></td>
      <td><input type="text" name="edu1_semestres"></td>
      <td><div class="checkbox-row"><label>SI <input type="checkbox" name="edu1_grad_si"></label><label>NO <input type="checkbox" name="edu1_grad_no"></label></div></td>
      <td><input type="text" name="edu1_nombre"></td>
      <td><div class="checkbox-row"><input type="text" class="mini-input" name="edu1_mes"><input type="text" class="year-input" name="edu1_anio"></div></td>
      <td><input type="text" name="edu1_tarjeta"></td>
    </tr>
    <tr>
      <td><input type="text" name="edu2_modalidad"></td>
      <td><input type="text" name="edu2_semestres"></td>
      <td><div class="checkbox-row"><label>SI <input type="checkbox" name="edu2_grad_si"></label><label>NO <input type="checkbox" name="edu2_grad_no"></label></div></td>
      <td><input type="text" name="edu2_nombre"></td>
      <td><div class="checkbox-row"><input type="text" class="mini-input" name="edu2_mes"><input type="text" class="year-input" name="edu2_anio"></div></td>
      <td><input type="text" name="edu2_tarjeta"></td>
    </tr>
    
    <tr>
      <td><input type="text" name="edu3_modalidad"></td>
      <td><input type="text" name="edu3_semestres"></td>
      <td><div class="checkbox-row"><label>SI <input type="checkbox" name="edu3_grad_si"></label><label>NO <input type="checkbox" name="edu3_grad_no"></label></div></td>
      <td><input type="text" name="edu3_nombre"></td>
      <td><div class="checkbox-row"><input type="text" class="mini-input" name="edu3_mes"><input type="text" class="year-input" name="edu3_anio"></div></td>
      <td><input type="text" name="edu3_tarjeta"></td>
    </tr>
    
    <tr>
      <td><input type="text" name="edu4_modalidad"></td>
      <td><input type="text" name="edu4_semestres"></td>
      <td><div class="checkbox-row"><label>SI <input type="checkbox" name="edu4_grad_si"></label><label>NO <input type="checkbox" name="edu4_grad_no"></label></div></td>
      <td><input type="text" name="edu4_nombre"></td>
      <td><div class="checkbox-row"><input type="text" class="mini-input" name="edu4_mes"><input type="text" class="year-input" name="edu4_anio"></div></td>
      <td><input type="text" name="edu4_tarjeta"></td>
    </tr>
    
    <tr>
      <td><input type="text" name="edu5_modalidad"></td>
      <td><input type="text" name="edu5_semestres"></td>
      <td><div class="checkbox-row"><label>SI <input type="checkbox" name="edu5_grad_si"></label><label>NO <input type="checkbox" name="edu5_grad_no"></label></div></td>
      <td><input type="text" name="edu5_nombre"></td>
      <td><div class="checkbox-row"><input type="text" class="mini-input" name="edu5_mes"><input type="text" class="year-input" name="edu5_anio"></div></td>
      <td><input type="text" name="edu5_tarjeta"></td>
    </tr>
    
  </table><!--fin tabla-->
      
    </div>
  </div>

  <div class="franja-box chico">
    
    <div class="franja-content">
      
  <div class="note" style="padding:6px 6px 0 6px">Especifique los idiomas diferentes al español que: habla, lee, escribe de forma, Regular (R), Bien (B) o Muy Bien (MB).</div>
      
  <table class="formtable"> <!--tabla guia-->
    
    <tr>
      
      <th rowspan="2" style="width:30%">IDIOMA</th>
      <th colspan="3">LO HABLA</th>
      <th colspan="3">LO LEE</th>
      <th colspan="3">LO ESCRIBE</th>
      
    </tr>
    
    <tr>
      <th>R</th><th>B</th><th>MB</th>
      <th>R</th><th>B</th><th>MB</th>
      <th>R</th><th>B</th><th>MB</th>
    </tr>
    
    <tr>
      
      <td><input type="text" name="idioma1_nombre"></td>
      <td class="center"><input type="checkbox" name="idioma1_habla_r"></td>
      <td class="center"><input type="checkbox" name="idioma1_habla_b"></td>
      <td class="center"><input type="checkbox" name="idioma1_habla_mb"></td>
      <td class="center"><input type="checkbox" name="idioma1_lee_r"></td>
      <td class="center"><input type="checkbox" name="idioma1_lee_b"></td>
      <td class="center"><input type="checkbox" name="idioma1_lee_mb"></td>
      <td class="center"><input type="checkbox" name="idioma1_escribe_r"></td>
      <td class="center"><input type="checkbox" name="idioma1_escribe_b"></td>
      <td class="center"><input type="checkbox" name="idioma1_escribe_mb"></td>
      
    </tr>
    
    <tr>
      <td><input type="text" name="idioma2_nombre"></td>
      
      <td class="center"><input type="checkbox" name="idioma2_habla_r"></td>
      <td class="center"><input type="checkbox" name="idioma2_habla_b"></td>
      <td class="center"><input type="checkbox" name="idioma2_habla_mb"></td>
      <td class="center"><input type="checkbox" name="idioma2_lee_r"></td>
      <td class="center"><input type="checkbox" name="idioma2_lee_b"></td>
      <td class="center"><input type="checkbox" name="idioma2_lee_mb"></td>
      <td class="center"><input type="checkbox" name="idioma2_escribe_r"></td>
      <td class="center"><input type="checkbox" name="idioma2_escribe_b"></td>
      <td class="center"><input type="checkbox" name="idioma2_escribe_mb"></td>
      
    </tr>
    
  </table> <!--donde temina la tabla-->
      
    </div>
  </div>

  <div class="footer-note">1</div><!--esto es para poner abajo el numero de la pagina y sentrado atravez de una clase que ya estructure-->
  
</div>


  
<!-- HOJA 2 --> <!-- esto es horribleee-->

<div class="sheet">
  
  <div class="doc-header" style="justify-content:center">
    
        <div class="titulo">
          
          <i>FORMATO ÚNICO</i><br>
          <span class="hv-title">HOJA DE VIDA</span><br>
          <b>Persona Natural</b>
          <p class="sub2">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
          
        </div>
    
  </div>

  <div class="section-title"><div class="num">3</div><span class="separador">—</span><div class="label">EXPERIENCIA LABORAL</div></div>
  
  <div class="note">Relacione su experiencia laboral o de prestación de servicios en estricto orden cronológico comenzando por el actual.</div>
  

  <div class="franja-box chico">
    
    <div class="franja-content job-block">
      
    <div class="jobhead">EMPLEO ACTUAL O CONTRATO VIGENTE</div>
      
      
    <table> <!--comienzo tabla-->
      
      <tr>
        <td class="w45"><span class="lbl">EMPRESA O ENTIDAD</span><input type="text" name="job1_empresa"></td>
        <td class="w15"><div class="checkbox-row"><label><input type="checkbox" name="job1_publica"> PÚBLICA</label><label><input type="checkbox" name="job1_privada"> PRIVADA</label></div></td>
        <td class="w40"><span class="lbl">PAÍS</span><input type="text" name="job1_pais"></td>
      </tr>
      
      <tr>
        <td><span class="lbl">DEPARTAMENTO</span><input type="text" name="job1_depto"></td>
        <td><span class="lbl">MUNICIPIO</span><input type="text" name="job1_municipio"></td>
        <td><span class="lbl">CORREO ELECTRÓNICO ENTIDAD</span><input type="email" name="job1_email"></td>
      </tr>
      
      <tr>
        
        <td><span class="lbl">TELÉFONOS</span><input type="text" name="job1_telefonos"></td>
        
        <td><span class="lbl">FECHA DE INGRESO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job1_ing_dia"><span>MES</span><input type="text" class="mini-input" name="job1_ing_mes"><span>AÑO</span><input type="text" class="year-input" name="job1_ing_anio"></div>
        </td>
        
        <td><span class="lbl">FECHA DE RETIRO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job1_ret_dia"><span>MES</span><input type="text" class="mini-input" name="job1_ret_mes"><span>AÑO</span><input type="text" class="year-input" name="job1_ret_anio"></div>
        </td>
        
      </tr>
      
      <tr>
        
        <td><span class="lbl">CARGO O CONTRATO ACTUAL</span><input type="text" name="job1_cargo"></td>
        <td><span class="lbl">DEPENDENCIA</span><input type="text" name="job1_dependencia"></td>
        <td><span class="lbl">DIRECCIÓN</span><input type="text" name="job1_direccion"></td>
        
      </tr>
      
    </table><!--donde termina la tabla-->
      
    </div>
    
  </div>
  

  <div class="franja-box chico">
    
    <div class="franja-content job-block">
      
    <div class="jobhead">EMPLEO O CONTRATO ANTERIOR</div>
      
    <table><!--comienzo tabla-->
      
      <tr>
        <td class="w45"><span class="lbl">EMPRESA O ENTIDAD</span><input type="text" name="job2_empresa"></td>
        <td class="w15"><div class="checkbox-row"><label><input type="checkbox" name="job2_publica"> PÚBLICA</label><label><input type="checkbox" name="job2_privada"> PRIVADA</label></div></td>
        <td class="w40"><span class="lbl">PAÍS</span><input type="text" name="job2_pais"></td>
      </tr>
      
      <tr>
        <td><span class="lbl">DEPARTAMENTO</span><input type="text" name="job2_depto"></td>
        <td><span class="lbl">MUNICIPIO</span><input type="text" name="job2_municipio"></td>
        <td><span class="lbl">CORREO ELECTRÓNICO ENTIDAD</span><input type="email" name="job2_email"></td>
      </tr>
      
      <tr>
        <td><span class="lbl">TELÉFONOS</span><input type="text" name="job2_telefonos"></td>
        <td><span class="lbl">FECHA DE INGRESO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job2_ing_dia"><span>MES</span><input type="text" class="mini-input" name="job2_ing_mes"><span>AÑO</span><input type="text" class="year-input" name="job2_ing_anio"></div>
        </td>
        
        <td><span class="lbl">FECHA DE RETIRO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job2_ret_dia"><span>MES</span><input type="text" class="mini-input" name="job2_ret_mes"><span>AÑO</span><input type="text" class="year-input" name="job2_ret_anio"></div>
        </td>
        
      </tr>
      
      <tr>
        
        <td><span class="lbl">CARGO O CONTRATO</span><input type="text" name="job2_cargo"></td>
        <td><span class="lbl">DEPENDENCIA</span><input type="text" name="job2_dependencia"></td>
        <td><span class="lbl">DIRECCIÓN</span><input type="text" name="job2_direccion"></td>
      </tr>
      
    </table>
    </div>
  </div>

  <div class="franja-box chico">
    <div class="franja-content job-block">
    <div class="jobhead">EMPLEO O CONTRATO ANTERIOR</div>
      
    <table><!--comienzo tabla-->
      
      <tr>
        <td class="w45"><span class="lbl">EMPRESA O ENTIDAD</span><input type="text" name="job3_empresa"></td>
        <td class="w15"><div class="checkbox-row"><label><input type="checkbox" name="job3_publica"> PÚBLICA</label><label><input type="checkbox" name="job3_privada"> PRIVADA</label></div></td>
        <td class="w40"><span class="lbl">PAÍS</span><input type="text" name="job3_pais"></td>
      </tr>
      
      <tr>
        <td><span class="lbl">DEPARTAMENTO</span><input type="text" name="job3_depto"></td>
        <td><span class="lbl">MUNICIPIO</span><input type="text" name="job3_municipio"></td>
        <td><span class="lbl">CORREO ELECTRÓNICO ENTIDAD</span><input type="email" name="job3_email"></td>
      </tr>
      
      <tr>
        
        <td><span class="lbl">TELÉFONOS</span><input type="text" name="job3_telefonos"></td>
        
        <td><span class="lbl">FECHA DE INGRESO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job3_ing_dia"><span>MES</span><input type="text" class="mini-input" name="job3_ing_mes"><span>AÑO</span><input type="text" class="year-input" name="job3_ing_anio"></div>
        </td>
        
        <td><span class="lbl">FECHA DE RETIRO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job3_ret_dia"><span>MES</span><input type="text" class="mini-input" name="job3_ret_mes"><span>AÑO</span><input type="text" class="year-input" name="job3_ret_anio"></div>
        </td>
      </tr>
      
      <tr>
        <td><span class="lbl">CARGO O CONTRATO</span><input type="text" name="job3_cargo"></td>
        <td><span class="lbl">DEPENDENCIA</span><input type="text" name="job3_dependencia"></td>
        <td><span class="lbl">DIRECCIÓN</span><input type="text" name="job3_direccion"></td>
      </tr>
      
    </table><!--termina tabla-->
      
    </div>
  </div>

  <div class="franja-box chico">
    
    <div class="franja-content job-block">
    <div class="jobhead">EMPLEO O CONTRATO ANTERIOR</div>
      
    <table><!--comienzo tabla-->
      
      <tr>
        
        <td class="w45"><span class="lbl">EMPRESA O ENTIDAD</span><input type="text" name="job4_empresa"></td>
        <td class="w15"><div class="checkbox-row"><label><input type="checkbox" name="job4_publica"> PÚBLICA</label><label><input type="checkbox" name="job4_privada"> PRIVADA</label></div></td>
        <td class="w40"><span class="lbl">PAÍS</span><input type="text" name="job4_pais"></td>
      </tr>
      
      <tr>
        <td><span class="lbl">DEPARTAMENTO</span><input type="text" name="job4_depto"></td>
        <td><span class="lbl">MUNICIPIO</span><input type="text" name="job4_municipio"></td>
        <td><span class="lbl">CORREO ELECTRÓNICO ENTIDAD</span><input type="email" name="job4_email"></td>
      </tr>
      
      <tr>
        
        <td><span class="lbl">TELÉFONOS</span><input type="text" name="job4_telefonos"></td>
        
        <td><span class="lbl">FECHA DE INGRESO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job4_ing_dia"><span>MES</span><input type="text" class="mini-input" name="job4_ing_mes"><span>AÑO</span><input type="text" class="year-input" name="job4_ing_anio"></div>
        </td>
        
        <td><span class="lbl">FECHA DE RETIRO</span>
          <div class="date-fields"><span>DÍA</span><input type="text" class="mini-input" name="job4_ret_dia"><span>MES</span><input type="text" class="mini-input" name="job4_ret_mes"><span>AÑO</span><input type="text" class="year-input" name="job4_ret_anio"></div>
        </td>
        
      </tr>
      
      <tr>
        <td><span class="lbl">CARGO O CONTRATO</span><input type="text" name="job4_cargo"></td>
        <td><span class="lbl">DEPENDENCIA</span><input type="text" name="job4_dependencia"></td>
        <td><span class="lbl">DIRECCIÓN</span><input type="text" name="job4_direccion"></td>
      </tr>
      
    </table><!--TEMINA tabla-->
      
    </div>
  </div>

  <div class="note"><strong>NOTA:</strong> Si requiere adicionar más experiencia laboral, imprima nuevamente esta hoja.</div>
  
  <div class="footer-note">2</div>
  
</div>

<!-- HOJA 3 --> <!--Y OTRAVEZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ -->
  
<div class="sheet">
  
  <div class="doc-header" style="justify-content:center">
    
        <div class="titulo">
          <i>FORMATO ÚNICO</i><br>
          <span class="hv-title">HOJA DE VIDA</span><br>
          <b>Persona Natural</b>
          <p class="sub2">(Leyes 190 de 1995, 489 y 443 de 1998)</p>
        </div>
    
  </div>

  <div class="section-title"><div class="num">4</div><span class="separador">—</span><div class="label">TIEMPO TOTAL DE EXPERIENCIA</div></div>
  
  <div class="note">Indique el tiempo total de su experiencia laboral en número de años y meses.</div>
  
  <div class="franja-box chico">
    
    <div class="franja-content">
      
  <table class="formtable"><!--comienzo tabla-->
    
    <tr>
      <th class="w60">OCUPACIÓN</th>
      <th class="w20">AÑOS</th>
      <th class="w20">MESES</th>
    </tr>
    
    <tr>
      <td>SERVIDOR PÚBLICO</td>
      <td><input type="text" name="exp_sp_anios"></td>
      <td><input type="text" name="exp_sp_meses"></td>
    </tr>
    
    <tr>
      
      <td>EMPLEADO DEL SECTOR PRIVADO</td>
      <td><input type="text" name="exp_priv_anios"></td>
      <td><input type="text" name="exp_priv_meses"></td>
    </tr>
    
    <tr>
      <td>TRABAJADOR INDEPENDIENTE</td>
      <td><input type="text" name="exp_indep_anios"></td>
      <td><input type="text" name="exp_indep_meses"></td>
    </tr>
    
    <tr>
      <td><strong>TOTAL TIEMPO EXPERIENCIA</strong></td>
      <td><input type="text" name="exp_total_anios"></td>
      <td><input type="text" name="exp_total_meses"></td>
    </tr>
    
  </table><!--termina tabla-->
      
    </div>
  </div>

  <div class="section-title"><div class="num">5</div><span class="separador">—</span><div class="label">FIRMA DEL SERVIDOR PÚBLICO O CONTRATISTA</div></div>
  
  <div class="franja-box chico">
    
    <div class="franja-content juramento-box">
      
    <div class="opciones">
      <span>MANIFIESTO BAJO LA GRAVEDAD DEL JURAMENTO QUE:</span>
      <label><input type="checkbox" name="juramento_si"> SI</label>
      <label><input type="checkbox" name="juramento_no"> NO</label>
      <span>me encuentro dentro de las causales de inhabilidad e incompatibilidad del orden constitucional o legal, para ejercer cargos empleos públicos o para celebrar contratos de prestación de servicios con la administración pública.</span>
    </div>
      
    <p>Para todos los efectos legales, certifico que los datos por mí anotados en el presente Formato Único de Hoja de Vida, son veraces (Artículo 5o. de la Ley 190/95).</p>
    <div class="checkbox-row" style="margin-top:10px">
      <span>Ciudad y fecha de diligenciamiento:</span>
      <input type="text" name="firma_ciudad_fecha" style="flex:1">
    </div>
      
    <div class="firma-line">FIRMA DEL SERVIDOR PÚBLICO O CONTRATISTA</div>
      
    </div>
    
  </div>

  <div class="section-title"><div class="num">6</div><span class="separador">—</span><div class="label">OBSERVACIONES DEL JEFE DE RECURSOS HUMANOS Y/O CONTRATOS</div></div>
  
  <div class="franja-box chico">
    
    <div class="franja-content juramento-box">
      
    <textarea name="observaciones" placeholder="Observaciones..."></textarea>
      
    <p style="margin-top:8px">Certifico que la información aquí suministrada ha sido constatada frente a los documentos que han sido presentados como soporte.</p>
      
    <div class="two-col" style="margin-top:20px">
      
        <div class="checkbox-row"><span>Ciudad y fecha:</span><input type="text" name="rrhh_ciudad_fecha" style="flex:1"></div>
      </div>
      
      <div class="firma-line" style="margin-top:0">NOMBRE Y FIRMA DEL JEFE DE PERSONAL O DE CONTRATOS</div>
      
    </div>
    
    </div>
  
  </div>
  

  <div class="footer-note">LINEA GRATUITA NACIONAL 01800917770 &nbsp;&nbsp; PÁGINA WEB: www.funcionpublica.gov.co &nbsp;&nbsp; — 3</div>
  
</div>
  
<!--SEEEEE TERMINO PORFIN Ahora ayudita de claudioshainbaun :)-->
</form>
  
<!--Ayudita de claud ia-->
  
<div class="toolbar">
  <div>
    <button onclick="guardarDatos()">💾 Guardar cambios</button>
    <button class="danger" onclick="borrarDatos()">🗑️ Borrar todo</button>
  </div>
  <span class="status" id="status">Los cambios se guardan en este navegador.</span>
</div>

<script>
const STORAGE_KEY = "hoja_de_vida_persona_natural_v1";
const form = document.getElementById("hvForm");
const statusEl = document.getElementById("status");

function getAllFieldsData(){
  const data = {};
  for(let el of form.elements){
    if(!el.name) continue;
    data[el.name] = (el.type === "checkbox") ? el.checked : el.value;
  }
  return data;
}

function applyData(data){
  if(!data) return;
  for(let el of form.elements){
    if(!el.name || !(el.name in data)) continue;
    if(el.type === "checkbox"){ el.checked = !!data[el.name]; }
    else { el.value = data[el.name]; }
  }
}

function guardarDatos(){
  try{
    localStorage.setItem(STORAGE_KEY, JSON.stringify(getAllFieldsData()));
    statusEl.textContent = "✅ Guardado " + new Date().toLocaleTimeString();
  }catch(e){
    statusEl.textContent = "⚠️ No se pudo guardar: " + e.message;
  }
}

function cargarDatos(){
  try{
    const raw = localStorage.getItem(STORAGE_KEY);
    if(!raw){ statusEl.textContent = "No hay datos guardados todavía."; return; }
    applyData(JSON.parse(raw));
    statusEl.textContent = "📂 Datos cargados.";
  }catch(e){
    statusEl.textContent = "⚠️ Error al cargar: " + e.message;
  }
}

function borrarDatos(){
  if(!confirm("¿Seguro que quieres borrar todos los datos guardados y limpiar el formulario?")) return;
  localStorage.removeItem(STORAGE_KEY);
  form.reset();
  statusEl.textContent = "🗑️ Datos borrados.";
}


</script>

</body>
</html>

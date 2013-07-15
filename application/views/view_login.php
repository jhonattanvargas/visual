<?php echo form_open('index.php/con_login/carga_datos');?>
<table width="75%" height="175" border="1" bgcolor = "#E0F8EC">
  <tr>
    <td>
    	<div align="center"> 
        <p>Usuario 
        <input type="text" name="user" id="user" />
    </p>
      <p>Contraseña
        <input type="password" name="pass" id="pass" />
      </p>
      <input type="submit" name="mysubmit" value="Acceder" />
    </td>
  </tr>
  </div>
</table>
<?php echo form_close();?>
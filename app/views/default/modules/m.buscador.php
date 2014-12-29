 <form action="index.php" method="post">
		 <table border="0" cellspacing="4" cellpadding="0" class="tabla">
  <tr>
    <td>Parametro de busqueda: </td>
    <td><label>
      <select name="parametroBusqueda">
        <option value="Code">Code</option>
        <option value="Name">Nombre pais</option>
        <option value="Continent">Continente</option>
        <option value="GovernmentForm">Tipo gobierno</option>
        <option value="Region">Region</option>
        		
      </select>
    </label></td>
    <td>Buscar: </td>
    <td><label>
      <input type="text" name="pais">
    </label></td>
    <td><label>
      <input type="submit" name="Submit" value="   Buscar   " />
    </label></td>
  </tr>
</table>
</form>
 <form action="index.php" method="post">
		 <table border="0" cellspacing="4" cellpadding="0" class="tabla">
		 <script>
		          name = document.getElementById("name").value;
				  countrycode = document.getElementById("countrycode").value;
				  district = document.getElementById("district").value;
				  population = document.getElementById("population").value;
		    function validacion() {
			      
				  if ( name == null || name.length == 0 || /^\s+$/.test(name) ) {
					// Si no se cumple la condicion...
					alert('[ERROR] El campo debe tener un valor de...');
					return false;
				  }
				  else if ( countrycode == null || countrycode.length == 0 || /^\s+$/.test(countrycode) )  {
					// Si no se cumple la condicion...
					alert('[ERROR] El campo debe tener un valor de...');
					return false;
				  }
				  else if ( district == null || district.length == 0 || /^\s+$/.test(district) )  {
					// Si no se cumple la condicion...
					alert('[ERROR] El campo debe tener un valor de...');
					return false;
				  }
				  else if ( isNaN(population))  {
					// Si no se cumple la condicion...
					alert('[ERROR] El campo debe tener un valor numerico');
					return false;
				  }
				  else
				  {
				      // Si el script ha llegado a este punto, todas las condiciones
					  // se han cumplido, por lo que se devuelve el valor true
					  return true;
				  }
				 
				  
			}
		 </script>
  <tr>
	<td>Introducir ciudad: </td>
    <td><label>
      <input type="text" name="name">
    </label></td>
	<td>Introducir country code: </td>
    <td><label>
      <input type="text" name="countrycode">
    </label></td>
	<td>Introducir district: </td>
    <td><label>
      <input type="text" name="district">
    </label></td>
	<td>Introducir population: </td>
    <td><label>
      <input type="text" name="population">
    </label></td>
	<td><label>
    <input type="submit" name="Submit" value="insertarCiudad" onsubmit="validacion()" />
    </label></td>
  </tr>
</table>
</form>
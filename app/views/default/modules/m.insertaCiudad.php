<html>
	<head>
		<script src="/scripts/jquery.js"></script>
		<script src="/scripts/jqueryvalidation.js"></script>
	<script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});
	$().ready(function() {
		// validate signup form on keyup and submit
		$("#formulario").validate({
			rules: {
				name: "required",
				countrycode: "required",
				district: "required",
				population:"required",
			},
			messages: {
				name: "Inserta nombre de la ciudad",
				countrycode: "Inserta codigo del pais",
				district: "Inserta el distrito",
				population: "Inserta número de habitantes",
			}
		});
	});
	</script>
	
	
	</head>
	<body>
		<form class="cmxform" action="index.php" method="post" id="formulario">
			<table border="0" cellspacing="4" cellpadding="0" class="tabla">	 
			  <tr>
				<td>Ciudad: </td>
				<td>
					<label>
					  <input id="cname" name="name" minlength="2" type="text" required>
					</label>
				</td>
				<td>Country code: </td>
				<td>
					<label>
					  <input id="ccountrycode" name="countrycode" minlength="2" type="text" required>
					</label>
				</td>
				<td>Distrito: </td>
				<td>
					<label>
					  <input id="cdistrict" name="district" minlength="2" type="text" required>
					</label>
				</td>
				<td>Numero habitantes: </td>
				<td>
				<label>
				  <input type="number" name="population" id="population" required>
				</label>
				</td>
				<td><label>
				<input type="submit" name="Submit" value="insertarCiudad" />
				</label></td>
			  </tr>
			</table>
		</form>
	</body>
</html>
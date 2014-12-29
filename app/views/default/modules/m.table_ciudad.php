<div class="t"><?php echo $titulo; ?></div>		
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
		 <tr>
	    	<th>ID</th>
	    	<th>Name</th>
	    	<th>Country code </th>
	    	<th>District  </th>
		    <th>Population</th>
			
		  </tr>
	   <?php foreach ($tsArray as $data): ?>		
	   <tr>
	       <td><?php echo $data['ID'];?></td>
		    <td><?php echo $data['Name'];?></td>
		    <td><?php echo $data['CountryCode'];?></td>
	       <td><?php echo $data['District'];?></td>
	       <td><?php echo $data['Population'];?></td>
	   </tr>
	   <?php endforeach; ?>
	</table>
<div class="t"><?php echo $titulo; ?></div>		
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
		 <tr>
	    	
	    	<th>Ciudad</th>
	    	<th>Country code </th>
	    	<th>District  </th>
		    <th>Population</th>
			
		  </tr>
	   <?php foreach ($tsArray as $data): ?>		
	   <tr>
	       
		    <td><?php echo $data['name'];?></td>
			<td><?php echo $data['countrycode'];?></td>
			<td><?php echo $data['district'];?></td>
			<td><?php echo $data['population'];?></td>
		    
	   </tr>
	   <?php endforeach; ?>
	</table>
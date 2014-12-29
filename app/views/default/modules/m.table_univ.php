<div class="t"><?php echo $titulo; ?></div>		
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%">
		 <tr>
	    	<th>Code</th>
	    	<th>Name</th>
	    	<th>Continent </th>
	    	<th>Region  </th>
		    <th>Population</th>
			<th>Local Name</th>
		  </tr>
	   <?php foreach ($tsArray as $data): ?>		
	   <tr>
	       <td><?php echo $data['Code'];?></td>
		    <td><?php echo $data['Name'];?></td>
		    <td><?php echo $data['Continent'];?></td>
	       <td><?php echo $data['Region'];?></td>
	       <td><?php echo $data['Population'];?></td>
		   <td><?php echo $data['LocalName'];?></td>
	   </tr>
	   <?php endforeach; ?>
	</table>		   
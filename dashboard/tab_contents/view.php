<p class="text-center" id="deleteRes"></p>
<table class="table table-condensed table-responsive">
	<thead>	
		<tr>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Permanent Address</th>
			<th>Temporary Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 

			$sql= "SELECT * FROM persons";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()){
				echo '<tr id="'.$row['ID'].'">
						<td>'.$row['Name'].'</td>
						<td>'.$row['Mobile'].'</td>
						<td>'.$row['Email'].'</td>
						<td style="word-wrap:break-word;">'.$row['Permanant_Address'].'</td>
						<td>'.$row['Temporary_Address'].'</td>
						<td><button class="btn btn-danger" id="'.$row['ID'].'">Remove</button></td>
					  </tr>';				
			}
			
		?>
	</tbody>
</table>
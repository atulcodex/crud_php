<style>
	td
	{
		padding: 10px;
	}
</style>
<?php

	include("connection.php");
	$query = "SELECT * FROM SCHOOL";
	$data = mysqli_query($conn,$query); //for run the query
	$total = mysqli_num_rows($data);    //for displaying number of rows
	
	if ($total!= 0) 
	{
		?>

		<table>
			<tr>
				<th>roll no</th>
				<th>images</th>
				<th>name</th>
				<th>class</th>
				<th colspan="2">oprations</th>
			</tr>

		<?php

		while ($result = mysqli_fetch_assoc($data))   //for displaying number of records from table
		{
			echo "<tr>
					<td>".$result['rollno']."</td>
					<td><a href='$result[picsource]'><img src='".$result['picsource']."' width='100' height='100'/></a></td> 
					<td>".$result['name']."</td>
					<td>".$result['class']."</td>
					<td><a href='update.php?rn=$result[rollno]&na=$result[name]&cl=$result[class]'>Edit</a></td>  
					<td><a href='delete.php?rn=$result[rollno]'>Delete</a></td>
				</tr>";
		}
	}
	else
	{
		echo "No records found";
	}
	
?>
</table>
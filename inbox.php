<?php
session_start();
if (isset($_SESSION['a'])) {

$ide=$_SESSION['a'];
$conn = new mysqli("localhost", "root", "" , "ex");

$id='messege_id';
$name ='from';
$subj = 'subject';
$date = 'created';

$result = $conn->query("SELECT m.messege_id,u.username AS 'from',m.subject,m.created FROM messeges m, users u  WHERE m.reciever_id =".$ide."  AND m.sender_id= u.id");
// print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
	<style type="text/css">
		button{
			margin-left: 10px;
		}
	</style>
</head>
<body>
		<table class="table w-50 m-5">
	  <thead>
	    <tr>
	      <th scope="col">From</th>
	      <th scope="col">subject</th>
	      <th scope="col">Date</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php while($row = $result->fetch_assoc()){	?>
	  	<tr>
	  		<td><?php echo $row[$name];   ?></td>
	  		<td><?php echo $row[$subj];   ?></td>
	  		<td><?php echo $row[$date];   ?></td>
	  		<td><a href="view.php?id=<?php echo $row[$id]?>" class="btn btn-secondary">View</a></td>
	  	</tr>
	 <?php }?>
	  </tbody>
	</table>
</body>
</html>



	
	<div class="buttons">
		<a href="logout.php"><button class="button is-dark">Logout</button></a>
		<a href="send.php"><button class="button is-primary">Send Message</button></a>
	</div>
<?php
}
else{
	header("location:login.php");
}





?>
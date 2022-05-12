<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <article class="message">
  <div class="message-header">
    <p>Message</p>
    <button class="delete" aria-label="delete"></button>
  </div>

<?php
	
$id= $_GET['id'];

$conn = new mysqli("localhost", "root", "" , "ex");

$sql = "SELECT  `messege_text` FROM `messeges` WHERE messege_id=".$id;
$result= $conn->query($sql);
$row=$result->fetch_assoc();

$text ="messege_text";
?>
<div class="message-body">
    <?php echo $row[$text]?>
  </div>
</article>
	<div class="buttons">
		<a href="inbox.php"><button class="button is-dark">Back</button></a>
	</div>
	<div class="buttons">
		<a href="send.php"><button class="button is-primary">Reply</button></a>
	</div>
    </div>
  </section>
  </body>
</html>



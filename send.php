<?php
session_start();
$id= $_SESSION['a'];

$conn = new mysqli("localhost", "root", "" , "ex");

if($_GET['reciever_id']){
  $reciever_id = $_GET['reciever_id'];

    $sqel="INSERT INTO `messeges`(`sender_id`, `reciever_id`, `subject`, `messege_text`) VALUES ('".$id."' ,'".$reciever_id."','".$_GET['subj']."' ,'".$_GET['desc']."')";
    
    $res= $conn->query($sqel);
    if ($res) {
      header("location:inbox.php?msg=sent");
    }
    
}
else{

$sql = "SELECT  `email`,`id` FROM `users` WHERE id!=".$id;
$result= $conn->query($sql);

?>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <br>
  <h3 class="w-50 m-auto">Enter details</h3><br>
  <form action="send.php" class="w-50 m-auto">
    <div class="w-50 form-floating">
      <h5>Reciever</h5>
      <select class="form-control" name="reciever_id">
      <?php 
      
      while($row= $result->fetch_assoc()){
?>
      <option value="<?php echo $row['id'] ?>"> <?php echo $row['email'] ?> </option><?php
    
}?>
    </select><br>

    <h5>Subject</h5>
    <input type="text" name="subj" class="form-control">
  </div><br>

  <div class="form-floating" >
    <h5>Description</h5>
    <textarea class="form-control" name="desc">  
    </textarea>
  </div><br>
  <input type="submit" class="btn btn-secondary" value="Send message">
  </form>
  </body> 
<?php
}
?>
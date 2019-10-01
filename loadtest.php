<?php 

include("connections.php");

//user array
$users=array();
$sql2="SELECT * FROM `user`";
$result2=mysqli_query($con1,$sql2);
while($row2=mysqli_fetch_assoc($result2)){
  array_push($users,$row2);
}


$var1 = $_GET["data_num"];

/*
   if(@$_GET["cat"]=='fashion&lifestyle'){
    $sql="SELECT * FROM `post` WHERE `category`='fashion&lifestyle' ORDER BY `id` DESC";
  }else if(@$_GET["cat"]=='travel'){
    $sql="SELECT * FROM `post` WHERE `category`='travel' ORDER BY `id` DESC";
  }else if(@$_GET["cat"]=='food'){
    $sql="SELECT * FROM `post` WHERE `category`='food' ORDER BY `id` DESC";
  }else{
    $sql="SELECT * FROM `post` ORDER BY `id` DESC";
  }
*/


$sql="SELECT * FROM `post` ORDER BY `id` DESC LIMIT $var1,9";

  $result=mysqli_query($con1,$sql);
  if(!$result){
    die(mysqli_error($con1));
  }else{

   if(mysqli_num_rows($result)!=0){   
    while($row=mysqli_fetch_assoc($result)){
      $id=$row["id"];
      $row["user_id"];
      $url=$row["url"];
      $name=$row["name"];
      $thumb=$row["thumb"];
      $title=$row["title"];
      $description=$row["description"];
      $category=$row["category"];
      $audioblog=$row["audioblog"];

  foreach($users as $check_array_3){
    if($check_array_3["id"]==$row["user_id"]){
      $email=$check_array_3["email"];
      $image=$check_array_3["profile"];   
    }
  }    


?>
  <link href="cardshop.css" rel="stylesheet" />
  <script type="text/javascript" src="cardshop.js"></script>



<div class="row   ml-2 mr-2 mb-4">
<div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card" id="blog-card">
	<img class="card-img-top image" src="<?php echo "post/".$thumb;?>" style="div.card-img-top image 
   height: 40px;
   margin: 0;
   position: relative;               
   top: 30%;                         
   transform: translate(0, -20%);">
		<a class="link_btn btn" href="<?php echo 'blog.php?num='.$id?>"><b>Visit Blog</b></a>
      <div class="stats-container card-body">
			<p class="product_name"><?php echo $title;?></p>
			 <p><?php echo $category;?></p>
			<div class="product-options"><p>
				<p></p>
				<p class="text"><?php echo $description; echo wordwrap($description,25,"<br>\n",TRUE);?></p><br/>
			</div>
		 </div>
    </div>
</div></div>

<?php
    }

  }else{
    echo "<h1>No recent Post</h1>";
  }



}

?>



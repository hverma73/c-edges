<?php 
include("header_noclosetest.php");
include("connections.php");

//user array
$users=array();
$sql2="SELECT * FROM `user`";
$result2=mysqli_query($con1,$sql2);
while($row2=mysqli_fetch_assoc($result2)){
  array_push($users,$row2);
}
///

?>

<!--slider---->
<!---end of slider---->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .button {
  background-color:#FFFFFF;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 6px 4px;
  cursor: pointer;
  border-radius: 16px;
  .button:hover {
  background-color: #A569BD ;
}
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="promo.png" alt="CreationEdges" width="1100" height="500">
      <div class="carousel-caption">
        <h3> </h3>
        <p></p>
   <!---<button class="button"><a href="http://www.creationedges.in/blog.php?num=384">READ MORE</a></button>-->    
      </div>   
    </div>
    <div class="carousel-item">
      <img src="NFW.jpg" alt="CreationEdges" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>Spring 2020</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="blog1.jpg" alt="CreationEdges" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Alyx</h3>
        <p>Spring 2020</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
<!--body-->
<hr>

<div class="container" style="overflow:hidden">
<div class="row" id="load_main"></div>
<button type="button" class="btn btn-primary" style="margin-left:50%" id="load_more" data-num="0">Load More</button>



<script>
var num = $("#load_more").data("num");

$(document).ready(function(){
  	$("#load_main").load("loadtest.php?data_num="+num);
    num=num+9;
    $("#load_more").attr("data-num",num);	  	
});

$(document).ready(function(){
  $("button").click(function(){
  	$("#load_main").append($("<div id='"+num+"'></div>"));
  	$("#"+num).load("loadtest.php?data_num="+num).addClass("row");
    $("#load_main").append($("#"+num));
    num=num+9;
    $("#load_more").attr("data-num",num);
  });
});

</script>

  </div>
  </div>
</div>



<br><br><br><br>

<hr>
 <!--Footer-->
<html> 
<style>
    /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

</style>
<body>
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="indextest.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="aboutus.php"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="t&c.php"><i class="fa fa-angle-double-right"></i>Terms&Conditions</a></li>
						<li><a href="privacy.php"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
						<li><a href="howtouse.php"><i class="fa fa-angle-double-right"></i>how to use</a></li>
						
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>EXPLORE</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Fashion&Lifestyle</a></li>
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Food</a></li>
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Technology</a></li>
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Entertainment</a></li>
						<li><a href="index.php"><i class="fa fa-angle-double-right"></i>Photography</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Creation Edges
					<br><br>
					Contact
					   <p><i class="fa fa-home mr-3"></i> Wisdom Campus, New Delhi</p>
                      <p><i class="fa fa-envelope mr-3"></i> creationedges@gmail.com</p>
                      <p><i class="fa fa-phone mr-3"></i> +91 9711543436</p>
					</h5>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/CreationEdges-1100004086809010/"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/creation_edges"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/creationedges/"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="mailto:creationedges@gmail.com?"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>We warmly welcome you to india's first online blogging community.Best place for blog lover.Read intresting blog or share your own blog to show to world.Follow your passion we are with you.</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.creationedges.in" target="_blank">Creation Edges</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>    
</body>
</html>
      <!--/.Footer-->
</div>
</div>
</div>




</body>
<script type="text/javascript">

function edges_ani(){
    function hide_ani_load() {
        //var show = document.getElementById("edges_load");
        //show.style.display = "none";
        document.getElementById("edges_load").style.visibility = "hidden";
        document.getElementById("ani_load_div").style.display = "inline";
        //var showpage = document.getElementById("ani_load_div");
        //showpage.style.display = "inline";
        //alert(show);
        //alert(showpage);
    }
    setTimeout(hide_ani_load,5);
    
}

</script>

</html> 

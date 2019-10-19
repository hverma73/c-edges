<?php 
include("header_new.php");
?>

<style>
.sign{
	width:100%;
	float:left;
	text-align:center;
	padding:20px 50px;
	position:static;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	margin-bottom: 10px;
	margin-top: 100px;
  border:1px solid white;
	border-radius: 5px;
  background-color: white;
}
</style>


<!--body-->
<div class="container-fluid">
  <div class="row">
    
    <div class="col-sm-4" style="background-color:#f9f9f9;">
    </div>
   
   	<div class="col-sm-4" style="background-color:#f9f9f9;">
    
    <div class="sign" style="border:none;">

    	<h3>Creation Edges</h3>
    	<br>
    	<form class="form-horizontal" method="post" action="post/signup_post.php">
    		
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        
        <div class="form-group">
      			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
    		</div>
    		
        <div class="form-group">
       			 <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
    		</div>
    		
        <div class="form-group">
        <select class="form-control" name="category">
        <option value="NULL">Choose Category</option>
        <option value="fashion&lifestyle">Fashion&lifestyle</option>
        <option value="food">Food</option>
        <option value="travel">Travel</option>
        <option value="Technology">Technology</option>
        <option value="Health&fitness">Health&fitness</option>
        <option value="Entertainment">Entertainment</option>
        <option value="Photography">Photography</option>
        </select>
        </div>

        <div class="form-group">
             <input type="number" class="form-control" id="post_week" placeholder="Posts per week" name="post_week">
        </div>

        <br>
    		<div class="form-group">        
      			<div class="">
        			<button type="submit" class="btn btn-default btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign Up</button>
      			</div>
    		</div>
  		</form>


    </div>
  	
  	</div>

  	<div class="col-sm-4" style="background-color:#f9f9f9;">
    </div>
   

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="z-index:9999">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <p>Welcome to Creation Edges.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




  </div>
</div><br>



<script type="text/javascript">
var infolinks_pid = 3129905;
var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>



  </div>
<script type="text/javascript">

function edges_ani(){
    function hide_ani_load() {
        var show = document.getElementById("edges_load");
        show.style.display = "none";
        var showpage = document.getElementById("ani_load_div");
        showpage.style.display = "inline";
    }
    setTimeout(hide_ani_load, 100);

}

</script>
 <!--Footer-->
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
      
      <!--/.Footer-->

</body>

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="bootstrap\css\bootstrap.css" >
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" >
<link rel="stylesheet" href="bootstrap\css\bootstrap-theme.css" >
<link rel="stylesheet" href="bootstrap\css\bootstrap-theme.min.css" > 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style >  

#container
{


	margin-top: 4%;




}
#table
{




}


</style>
  
  <script>
	function init()
{
	var day=1;
	var month=1;
	var year=1990;
	
	var z = parseInt(document.getElementById('selectcombod').value);	
	var como1= document.getElementById('selectcomboy'); 
	for(var year=1990; year<2017; year++)
	{
		var opt = document.createElement("option");
		opt.text = year;
		como1.add(opt);
	}
	
	
	var  combo3= document.getElementById('selectcombom');
	for(var month=1; month<13; month++)
	{
		var opt = document.createElement("option");
		
		opt.text = month;
		
		combo3.add(opt);
		
	}
	
	
		
	}
	
		
			function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result)
        .width(150)
        .height(200);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
			
		
	
		function filldd()
	{
		var length=document.getElementById('selectcombod').options.length;
		
		for(var i=length-1; i>=1;i-- )
		{
			document.getElementById('selectcombod').remove(i);   
		}
		
		var yy1 = document.getElementById('selectcomboy').selectedIndex;
		var mm1 = document.getElementById('selectcombom').selectedIndex;
		var y=mm1;
		var x=document.getElementById('selectcomboy').options[yy1].text;
		var  combo2= document.getElementById('selectcombod');
	if(x%4)
	{
		if(y == 1 || y == 3|| y == 5|| y == 7|| y == 8|| y == 10|| y == 12   )
		{
			
		for(var day=1; day<=31; day++)
		{
		
			var opt = document.createElement("option");
			opt.text = day;
			combo2.add(opt);
		}
		
		
			
		}
		else if (y == 2)
		{
			for(var day=1; day<=28; day++)
		{
		
			var opt = document.createElement("option");
			opt.text = day;
			combo2.add(opt);
		}
		
		
			
		}
		else
		{
			for(var day=1; day<31; day++)
		{
		
			var opt = document.createElement("option");
			opt.text = day;
			combo2.add(opt);
		}
		
		
		}

	}

	else
	{
		
		if(y == 1 || y == 3|| y == 5|| y == 7|| y == 8|| y == 10|| y == 12 )
		{
		  	
			
		for(var day=1; day<32; day++)
		{
		
			var opt = document.createElement("option");
			opt.text = day;
			combo2.add(opt);
		}
		
		
			
		}
		else if (y == 2)
		{
			for(var day=1; day<30; day++)
		{
		
			var opt = document.createElement("option");
			opt.text = day;
			combo2.add(opt);
		}
		
					
		}
		
		else
		{
			for(var day=1; day<31; day++)
		
			{
		
			var opt = document.createElement("option");
			opt.text = day;
			combo2.add(opt);
			
			}
		
		
			
		}

	}
	
		
	}
	
</script>

</head>

		




 
  
  
<body onload="init()" background="bgcover.jpg">
     
	
    	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WIP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Registration</a></li>
            <li><a href="#about">Login</a></li>
            <li><a href="#contact">Contact Us</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	

	<div class="container" id="container">

		<div id="formdiv" >
    		<form class="form" action= "<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" enctype="multipart/form-data">
			<div id="caption" class="page-header text-center"  >    

				<caption ><h1 style="color: 	#DCDCDC">Registration </h1></caption>

			</div>
			<div class="row">
			
			<div class="col-md-4 col-xs-0 col-sm-4 col-lg-4">
			</div>

			
    		<div  class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
    		<table id="table" class="table  table-condensed text-center" style="color: #3B5998;" >
        	
            	<tr>
            		<td>
                		<p> First Name:</p>
                	</td>
                
                	<td>
                		<input type="text" placeholder="Enter First Name " name="txname" class="input" >
                	</td>
                
            	</tr>
            	
            	<tr>
            		<td>
                		<p> Last Name:</p>
                	</td>
                	<td>
                		<input type="text" placeholder="Enter First Name "  name="txnamel" class="input" >
                	</td>
            	</tr>
            
            	<tr> 
            		<td>
               			<p> Your email:</p>
                	</td>
                	<td>
                		<input type="text" placeholder="Enter Email Id " name="txemail1" class="input" >
                	</td>
            	
            	</tr>
        	

        		<tr> 
            		<td>
                		<p>  Re-enter   your email:</p>
                	</td>
                	
                	<td>
                		<input type="text" placeholder="Confirm Email Id "  name="txemail2" class="input" >
                	</td>
        		</tr>
        	
        		<tr>
        			<td>
           				<p> your password:</p>
            		</td>
            		
            		<td>
            			<input type="password" placeholder="Enter Password " name="txpass" class="input" >
            		</td>
        		</tr>
            
            	<tr>
            		<td>
                		<p> gender: </p>
                	</td>
                
                	<td>
                		<select id="male-female" name="gender"> <option> choose </option> <option>male </option><option>female</option></select>           
                	</td>
            
            	</tr>
        	
        		<tr>
            		<td>
                		<p> Choose Birth Date: </p>
                	</td>
                
                	<td>
                		<select id="selectcomboy" name="cbyy"  onchange="filldd()"><option>YYYY</option></select>
                		<select id="selectcombom"  name="cbmm" onchange="filldd()"><option>MM </option>	</select>
                		<select id="selectcombod"  name="cbdd"> <option>DD </option>	</select>
                	</td>
                
       	    	</tr>
            
            	<tr>
            		<td colspan="2">
                		
                		<input type="submit" value="Sign Up" id="signupbutton" onclick="frm.action='register.php'"  class="btn btn-sm btn-primary"  >
                	</td>
            	</tr>
        	</table>
        	</div>
        	<div class="col-md-4 col-xs-0 col-sm-4 col-lg-4">
			</div>
			</div>

    
    	</form>

 		
    	
    	</div>

	
	</div>  
    





</body>





</html>
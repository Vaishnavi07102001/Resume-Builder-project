<!-- Skip Login -->

<!DOCTYPE html>
<html>
	<head>
		<title>Resume Builder</title>
		<link rel="stylesheet" type="text/css" href="index_stylesheet.css">
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/landing-page.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			var flag;
			var project="project1";
			var achievement="achievement1";
			var skill="skill1";
			var interest="interest1";
			
			$(document).ready(function() {
				$("fieldset:not('#div1')").hide();
				$("#back").hide();
				flag="div1";
				//changeColor();
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='none';
			});
			
			
			function show(division){
				$(document).ready(function(){
					flag=division;
					$("fieldset:not(#"+division+")").hide();
					$("#"+division).show();
					showButton();
					//changeColor();
				});
							
			}
			function showButton(){
				$(document).ready(function(){
					if(flag!='div1')
				{
					$("#back").show();
				}
				
				else
				{
					$("#back").hide();
				}
				
				if(flag=='div9')
				{
					$("#next").hide();
				}
				
				else
				{
					$("#next").show();
				}
				});
							
			}
		
		
		function nextPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i++;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		function backPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i--;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		/*function changeColor()
		{
			document.getElementById("#"+flag).style.backgroundColor="#D93600";
		}*/
		function generateTextbox(box) {
    var form = document.getElementById(flag);
    var input = document.createElement("input");
    input.type = "text";
					if(project.slice(0,7)==box)
					{
						input.id=project;
						input.name=project;
						var start=project.slice(0,7);
						var stop=project.slice(7);
						var i=parseInt(stop);
						i++;
						project=start+i;
					}
					else if(achievement.slice(0,11)==box)
					{
						input.id=achievement;
						input.name=achievement;
						var start=achievement.slice(0,11);
						var stop=achievement.slice(11);
						var i=parseInt(stop);
						i++;
						achievement=start+i;
					}
					else if(skill.slice(0,5)==box)
					{
						input.id=skill;
						input.name=skill;
						
						var start=skill.slice(0,5);
						var stop=skill.slice(5);
						var i=parseInt(stop);
						i++;
						skill=start+i;
					}
					else if(interest.slice(0,8)==box)
					{
						input.id=interest;
						input.name=interest;
						var start=interest.slice(0,8);
						var stop=achievement.slice(8);
						var i=parseInt(stop);
						i++;
						interest=start+i;
					}
    var br = document.createElement("br");
    form.appendChild(br);
    form.appendChild(input);
	
	}

	//$(document).ready(function() {	
	function showDiploma(course)
	{
		if(course==1)
		{
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='block';
		}
		else if(course==0)
		{
				document.getElementById('optional_12').style.display='block';
				document.getElementById('optional_diploma').style.display='none';
		}
		//else
		//{
				
		//}
	}
	//});
		</script>
		
		
	</head>
	<body>
	
		<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="index.php"> Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php"><img src="img/home.png" height="23" width="23"></a>
                </li>


                <li>
                    <a href="about.php">About Us</a>
                </li>

               <!-- <li>
                    <a href="#contact">Contact</a>
                </li> -->

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>










		<div id="main">
			<div id="header">
				<span id="resume_builder">RESUME BUILDER</span>
			</div>
		<div id="select_option">	
		<div id="select_toggle">	
			<a href="#">
			<div class="toggle1" onclick="show('div1')"><br>
				<span class="option" class="single">Basic</span>
			</div>
			<a href="#">
			<div class="toggle2" onclick="show('div2')"><br>
				<span class="option">Educational Details</span>
			</div>
			<a href="#">
			<div class="toggle1" onclick="show('div3')"><br>
				<span class="option"> Training</span>
			</div>
			<a href="#">
			<div class="toggle2" onclick="show('div4')"><br>
				<span class="option">Projects Undertaken</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle1" onclick="show('div5')"><br>
				<span class="option" class="single">Achievements</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle2" onclick="show('div6')"><br>
				<span class="option">Skill<br> Set</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle1" onclick="show('div7')"><br>
				<span class="option">Areas of <br>Interest</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle2" onclick="show('div8')"><br>
				<span class="option">Personal <br>Details</span>
			</div>
			</a>
			<a href="#">
			<div class="toggle1" onclick="show('div9')"><br>
				<span class="option" class="single">Finish</span>
			</div>
			</a>
		</div>
		</div>
		<div id="content">
		<?php
			include 'form.html';
		?>
		</div>
		<div id="footer"><br>
			<input type="button" value="Back" id="back" onclick="backPage()">
			<input type="button" value="Next" id="next" onclick="nextPage()">
		</div>
		</div>
	</body>
</html>
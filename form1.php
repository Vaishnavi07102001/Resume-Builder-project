<!-- Login Form -->
<?php 
include 'session_var.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>form</title>
		<link rel="stylesheet" href="form_style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
/*$(document).ready(function(){
    $("fieldset:not(#div1)").hide();
});*/

</script>

	</head>
	<body>
    
		<form method="POST" action="resume1.php">
			 <fieldset class="sectionwrap" id="div1">
                    <legend><strong>Basic</strong></legend>
                    <div>
                        <div class="labels">
                            Name :
                        </div>
                        <input name="name" type="text" id="name" value="<?php echo $_SESSION['name']; ?>" title="Displayed at the top of your CV" class="styles"  />
						
					</div>
                    <div>
                        <div class="labels">
                            Email id :</div>
                        <input name="mail" type="text" id="mail"  value="<?php echo $_SESSION['email']; ?>" title="Primary mode of communication, ensure its correctness!" class="styles " />
                    </div>
                    <div>
                        <div class="labels">
                            Phone No:
                        </div>
                        <input name="phone" type="text" id="phone" value="<?php echo $_SESSION['phone']; ?>" title="Current Mobile No." class="styles " />
                    </div>
                    <div>
                        <div class="labels">
                            Father's Name :
                        </div>
                        <input name="fathersname" type="text" id="fathersname" value="<?php echo $_SESSION['fname']; ?>" title="As mentioned in other Official Documents" class="styles "  />
                    </div>
                    <div>
                        <div class="labels">
                            Objective :
                        </div>
                        <textarea name="objective" cols="20" rows="7" id="objective" value="<?php echo $_SESSION['obj']; ?>" title="precise and clearly describing your career objective" >
						</textarea>
                    </div>
                </fieldset>
				
				 <fieldset class="sectionwrap" id="div2">
                    <legend><strong>Educational Details</strong></legend>
                    <div >

                        <table id="choosediploma" >
		<tr> 
			<td><input id="choosediploma_0" type="radio" name="choosediploma" value="1"
            class="radio" onclick="showDiploma(1)" /><label for="choosediploma_0">&nbsp; Diploma</label>   &nbsp; &nbsp; &nbsp; &nbsp; </td>
                        
			<td><input id="choosediploma_1" type="radio" name="choosediploma" value="0" 
						class="radio" onclick="showDiploma(0)" /><label for="choosediploma_1">  Non Diploma Holder </label></td>
		</tr>
	</table>
                    </div>
                    <div>
                        <h4>
                           <strong> Class 10th </strong> </h4>
                    </div>
                    <div class="labels">
                        Percentage :</div>
                    <div>
                        <input name="percentage10" type="text" value="<?php echo $_SESSION['perc10']; ?>" id="percentage10" title="input your 10th class percentage" class="styles" />
                    </div>
                    <div class="labels">
                        Passing School:</div>
                    <div>
                        <input name="school10" type="text" id="school10" value="<?php echo $_SESSION['school10']; ?>" title="School from which you passed your 10th class" class="styles"  />
                        <div class="labels">
                            Passing Year :</div>
                        <input name="year10" type="text" id="year10" value="<?php echo $_SESSION['year10']; ?>" title="as printed in your class 10th passing certificate" class="styles" />
                    </div>
                    
				<div id="optional_12">
					<div>
                        <h4>
                        <strong>  Class 12th </strong></h4>
                    </div>
                    <div class="labels">
                        Percentage :</div>
                    <div>
                        <input name="percentage12" type="text" id="percentage12" value="<?php echo $_SESSION['perc12']; ?>" title="input your 12th class percentage" class="styles" />
                    </div>
                    <div class="labels">
                        Passing School:</div>
                    <div>
                        <input name="school12" type="text" id="school12" value="<?php echo $_SESSION['school12']; ?>" title="School from which you passed your 12th class" class="styles"  />
                        <div class="labels">
                            Passing Year :</div>
                        <input name="year12" type="text" id="year12" value="<?php echo $_SESSION['year12']; ?>" title="as printed in your class 12th passing certificate" class="styles" />
                    </div>
                </div>				
				<div id="optional_diploma">
					<div>
                        <h4>
                        <strong> Diploma </strong></h4>
                    </div>
                    <div class="labels">
                        Percentage :</div>
                    <div>
                        <input name="percentage_diploma" type="text" value="<?php echo $_SESSION['perc_dip']; ?>" id="percentage_diploma" title="input your 12th class percentage" class="styles" />
                    </div>
                    <div class="labels">
                        Passing Diploma College :</div>
                    <div>
                        <input name="school_diploma" type="text" id="school_diploma" value="<?php echo $_SESSION['school_dip']; ?>" title="School from which you passed your 12th class" class="styles" />
                        <div class="labels">
                            Passing Year :</div>
                        <input name="year_diploma" type="text" id="year_diploma" value="<?php echo $_SESSION['year_dip']; ?>" title="as printed in your class 12th passing certificate" class="styles" />
                    </div>
					<div>
                        <div class="labels">
                            Diploma Name :</div>
                        <input name="name_diploma" type="text" id="name_diploma" value="<?php echo $_SESSION['name_dip']; ?>" title="name of diploma" class="styles" />
                    </div>
                </div>
                    <table>
                        <tr>
                            <td>
                                <h4> <strong> College </strong></h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Percentage :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegepercentage" type="text" id="collegepercentage" value="<?php echo $_SESSION['perc_clg']; ?>" title="till date aggregate percentage in college" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Passing college :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="college" type="text" id="college" value="<?php echo $_SESSION['clg']; ?>" title="Name of the college" class="styles"  />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Passing Year :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegeyear" type="text" id="collegeyear" value="<?php echo $_SESSION['clg_year']; ?>" title="year of passing out from college" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Current Semester :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegesem" type="text" id="collegesem" value="<?php echo $_SESSION['clg_sem']; ?>" title="current semester in which you are studying" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Course Name with Branch:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegecourse" type="text" id="collegecourse" value="<?php echo $_SESSION['clg_course']; ?>" title="course name with your branch" class="styles"  />
                            </td>
                        </tr>
                    </table>
                </fieldset>

				
                <fieldset class="sectionwrap" id="div3">
                    <legend><strong> Training</strong></legend>
                    <table>
                        <tr>
                            <td class="labels">
                                Company Name :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="stcomapnyname" type="text" value="<?php echo $_SESSION['cname']; ?>" id="stcomapnyname" title="Name of the company or institution in which you did your Summer training" class="styles"  />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Duration:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="stduration" type="text" id="stduration" value="<?php echo $_SESSION['duration']; ?>" title="Duration of your training" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Project Undertaken :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="stproject" type="text" id="stproject" value="<?php echo $_SESSION['tproj']; ?>"  title="Name of the project undertaken in training" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Technology Used :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="sttechnology" type="text" id="sttechnology" value="<?php echo $_SESSION['tech']; ?>" title="Technologies used in the abovementioned project" class="styles" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset class="sectionwrap" id="div4">
                    <legend><strong>Projects Undertaken</strong></legend>
                    <br />
                    Final Year Project :<br />
                    <input name="projectfinalyear" type="text" id="projectfinalyear" value="<?php echo $_SESSION['proj']; ?>" title="Project undertaken in final year" class="styles" />
                   
                    <button name="btngenerateproject" type="button" value="Add Extra Project" id="btngenerateproject" onclick="generateTextbox('project')">Add Extra Project</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div5">
                    <legend><strong>Achievements</strong></legend>
                    
                    <br />
                    <button name="btngenerateaccomplishment" type="button" value="Add Achievement" id="btngenerateaccomplishment" onclick="generateTextbox('achievement')">Add Achievement</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div6">
                    <legend><strong>Skill Set</strong></legend>
                    <br />
                    Enter Skills (1 mandatory) :<br />
                    <input name="mandatoryskill" type="text" id="mandatoryskill" value="<?php echo $_SESSION['skill']; ?>" title="Technical Skills" class="labels" />
                    
                    <button name="btngenerateskill" type="button" value="Add Skill" id="btngenerateskill" onclick="generateTextbox('skill')">Add Skill</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div7">
                    <legend><strong>Areas of Interest</strong></legend>
                    <br />
                    
                    <button name="btngenerateinterest" type="button" value="Add Interest" id="btngenerateinterest" onclick="generateTextbox('interest')">Add Interest</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div8">
                    <legend><strong>Personal Details</strong></legend>
                    <table>
                        <tr>
                            <td class="labels">
                                Date Of Birth (YYYY-MM-DD) : 
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="dob" type="text" id="dob" value="<?php echo $_SESSION['dob']; ?>" title="Date Of Birth as mentioned in passing certificate" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Land Line No. :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="landline" type="text" id="landline" value="<?php echo $_SESSION['landline']; ?>" title="Fixed telephone number" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Alternate No. :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="otherno" type="text" id="otherno" value="<?php echo $_SESSION['alt']; ?>" title="mobile or another alternate contact number" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Nationality :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="nationality" type="text" id="nationality" value="<?php echo $_SESSION['nationality']; ?>" title="Country of which you&#39;re a legal citizen" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Permanent Address :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="permanentaddress" type="text" id="permanentaddress" value="<?php echo $_SESSION['perm']; ?>" title="Permanent Residential Address" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Current Address :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="currentaddress" type="text" id="currentaddress" value="<?php echo $_SESSION['cur']; ?>" title="Current Residential Address" class="styles" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset class="sectionwrap" id="div9">
                    <legend><strong>Finish</strong></legend>
                    <table>
                        <tr>
                            <td class="labels">
                                Select Resume Template :
                            </td>
                        </tr>
                        <tr>                            
                            <td class="labels"> 
                                <table id="TemplateList" border="0">
		<tr>
            <br>
			<td><input id="TemplateList_0" class="radio" type="radio" name="TemplateList" value="1" />
			<label for="TemplateList_0"><img src = "images/template1.JPG" align = "center"/></label>
			</td><td><input id="TemplateList_1" class="radio" type="radio" name="TemplateList" value="2" />
			<label for="TemplateList_1"><img src = "images/template2.JPG" align = "center"></label>
			</td><td><input id="TemplateList_2" class="radio" type="radio" name="TemplateList" value="3" />
			<label for="TemplateList_2"><img src = "images/template3.png" align = "center"></label>
			</td><td><input id="TemplateList_3" class="radio" type="radio" name="TemplateList" value="4" />
			<label for="TemplateList_3"><img src = "images/template4.png" align = "center"></label></td>
		</tr>
	</table>
                         
                           </td>
                        </tr>
                        <tr>
                        <td>
                        <input id="save" type="radio" name="choose1" value="1" class="radio" /><label for="save"> Save</label>  
                        <input id="update" type="radio" name="choose1" value="0" class="radio" /><label for="update">  Update </label>
                        <!-- <input id="delete" type="radio" name="choose1" value="2" class="radio" /><label for="delete">  Delete </label> </td> -->
                        <input id="display" type="radio" name="choose1" value="2" class="radio" /><label for="display">  View </label> </td>
                        
			
                            <td class="labels">
                                <input type="submit" name="btn" class="button" value="Generate Resume" id="btn" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
		</form>
	</body>
</html>

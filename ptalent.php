<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Procure Talent</title>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script> 
   <script type="text/javascript" src="ptalent.js"></script>
  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <?php include "db.php"; ?>
        <script>
  jQuery(function($){
   $("#phone").mask("(999) 999-9999"); 
});
</script>
    <script type="text/javascript">
    
function dropdownlist(listindex)
 {

document.formname.category2.options.length = 0;
 switch (listindex)
 {

 case "weeks" :
 document.formname.category2.options[0]=new Option("Select Category2","");
 document.formname.category2.options[1]=new Option("1","one");
 document.formname.category2.options[2]=new Option("2","two");
 document.formname.category2.options[3]=new Option("3","three");
 document.formname.category2.options[4]=new Option("4","four");
 document.formname.category2.options[5]=new Option("5","five");
 document.formname.category2.options[6]=new Option("6","six");
 document.formname.category2.options[7]=new Option("7","seven");
 document.formname.category2.options[8]=new Option("8","eight");
 document.formname.category2.options[9]=new Option("9","nine");
 document.formname.category2.options[10]=new Option("10","ten");
 document.formname.category2.options[11]=new Option("11","eleven");
 document.formname.category2.options[12]=new Option("12","twelve");
 document.formname.category2.options[13]=new Option("13","thirteen");
 document.formname.category2.options[14]=new Option("14","fourteen");
 document.formname.category2.options[15]=new Option("15","fifteen");
 document.formname.category2.options[16]=new Option("16","sixteen");
 document.formname.category2.options[17]=new Option("17","seventeen");
 document.formname.category2.options[18]=new Option("18","eighteen");
 document.formname.category2.options[19]=new Option("19","nineteen");
 document.formname.category2.options[20]=new Option("20","twenty");
 document.formname.category2.options[21]=new Option("21","twentyone");
 document.formname.category2.options[22]=new Option("22","twentytwo");
 document.formname.category2.options[23]=new Option("23","twentythree");
 document.formname.category2.options[24]=new Option("24","twentyfour");
 document.formname.category2.options[25]=new Option("25","twentyfive");
 document.formname.category2.options[26]=new Option("26","twentysix");
 document.formname.category2.options[27]=new Option("27","twentyseven");
 document.formname.category2.options[28]=new Option("28","twentyeight");
 document.formname.category2.options[29]=new Option("29","twentynine");
 document.formname.category2.options[30]=new Option("30","thirty");
 document.formname.category2.options[31]=new Option("31","thirtyone");
 document.formname.category2.options[32]=new Option("32","thirtytwo");
 document.formname.category2.options[33]=new Option("33","thirtythree");
 document.formname.category2.options[34]=new Option("34","thirtyfour");
 document.formname.category2.options[35]=new Option("35","thirtyfive");
 document.formname.category2.options[36]=new Option("36","thirtysix");
 document.formname.category2.options[37]=new Option("37","thirtyseven");
 document.formname.category2.options[38]=new Option("38","thirtyeight");
 document.formname.category2.options[39]=new Option("39","thirtynine");
 document.formname.category2.options[40]=new Option("40","forty");
 document.formname.category2.options[41]=new Option("41","fortyone");
 document.formname.category2.options[42]=new Option("42","fortytwo");
 document.formname.category2.options[43]=new Option("43","fortythree");
 document.formname.category2.options[44]=new Option("44","fortyfour");
 document.formname.category2.options[45]=new Option("45","fortyfive");
 document.formname.category2.options[46]=new Option("46","fortysix");
 document.formname.category2.options[47]=new Option("47","fortyseven");
 document.formname.category2.options[48]=new Option("48","fortyeight");
 document.formname.category2.options[49]=new Option("49","fortynine");
 document.formname.category2.options[50]=new Option("50","fifty");
document.formname.category2.options[51]=new Option("51","fiftyone");
document.formname.category2.options[52]=new Option("52","fiftytwo");
 break;

 case "months" :
 document.formname.category2.options[0]=new Option("Select Category2","");
 document.formname.category2.options[1]=new Option("1","one");
 document.formname.category2.options[2]=new Option("2","two");
 document.formname.category2.options[3]=new Option("3","three");
 document.formname.category2.options[4]=new Option("4","four");
 document.formname.category2.options[5]=new Option("5","five");
 document.formname.category2.options[6]=new Option("6","six");
 document.formname.category2.options[7]=new Option("7","seven");
 document.formname.category2.options[8]=new Option("8","eight");
 document.formname.category2.options[9]=new Option("9","nine");
 document.formname.category2.options[10]=new Option("10","ten");
 document.formname.category2.options[11]=new Option("11","eleven");
 document.formname.category2.options[12]=new Option("12","twelve");

 break;
 case "years" :
 document.formname.category2.options[0]=new Option("Select Category2","");
 document.formname.category2.options[1]=new Option("1","one");
 document.formname.category2.options[2]=new Option("2","two");
 document.formname.category2.options[3]=new Option("3","three");
 document.formname.category2.options[4]=new Option("4","four");
 document.formname.category2.options[5]=new Option("5","five");

 }
 return true;
 }
 
 function getId(val){
            $.ajax({
                type: "POST",
                url: "getdata.php",
                data: "id1="+val,
                success: function(data){
                    $("#level2").html(data);
                }
            });

        }
        
         function getId2(val){
            $.ajax({
                type: "POST",
                url: "getdata1.php",
                data: "id2="+val,
                success: function(data){
                    $("#level3").html(data);
                }
            });

        }
 
     </script>
     
  </head>
  <style type="text/css">
  .container{
 padding-bottom: 150px;
 height: auto;
 background-color: white; 
-webkit-box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.4); 
-moz-box-shadow: 0px 1px 6px rgba(23, 69, 88, .5);
-webkit-border-radius: 12px;
-moz-border-radius: 7px; 
border-radius: 7px;
  }
  select{
  height: 35px;
  margin: 15px;
  }
   body{
  padding: 20px;
  }
  label{
  color: #808080;
  }
  @media screen and (min-width: 700px){
 .container1{
  width: 600px; 
  margin: 0 auto;
  }
  }
  .div1 input,
  .div1 select
  {
  display: inline;
  }
  </style>
  <body>
  <div class="container-fluid">
  <div class="container">
  
  <?php 
  if($_GET['id'])
  {
  include "header.php";
  ?>

  <form id="formname" name="formname" method="post">
  <div class="container1">
  <fieldset>
    <legend>Job Details</legend>
    <label>Title</label>
    <select name="title" style="margin: 10px;">
    <option value="">choose a title</option>
      <option value="1">Solution Architect</option>
      <option value="2">Software Engineer</option>
      <option value="3">Business Analyst</option>
      <option value="4">Project Manager</option>
      <option value="5">Infrastructure Engineer</option>
      <option value="6">Tester</option>
      <option value="7">Deployment Engineer</option>
      <option value="8">Security Engineer</option>
      <option value="9">Technical Architect</option>
      <option value="10">Chief Technical officer</option>
      <option value="11">Assistant Tech Strategy manager</option>
      <option value="12">tech strategy planner</option>
      <option value="13">project tech co-ordinator</option>
      <option value="14">project delivery manager</option>
      <option value="15">project anayst</option>
      <option value="16">jr project manager </option>
      <option value="17">project risk mitigator</option>
      <option value="18">project director</option>
      <option value="19">senior project manager</option>
      <option value="20">assistant project manager</option>
      <option value="21">application service manager</option>
      <option value="22">application service co-ordinator</option>
      <option value="23">IT infrastructure manager</option>
      <option value="24">IT infrastructure service co-ordinator</option>
      <option value="25">IT infrastructure architect</option>
      <option value="27">IT infrastructure junior analyst</option>
      <option value="28">IT security manager</option>
      <option value="29">IT security co-ordinator</option>
      <option value="30">IT developer</option>
      <option value="31">IT security director</option>
      <option value="32">IT security specialist</option>
      <option value="33">IT security engineer</option>
      <option value="34">penetration tester</option>
      <option value="35">cryptographer</option>
      <option value="36">security analyst</option>
      <option value="37">IT operations lead</option>
      <option value="38">senior technical operation manager</option>
      <option value="39">IT operations analyst</option>
      <option value="40">IT operations support engineer</option>
      <option value="41">Senior Test engineer</option>
      <option value="42">QA devlopment engineer</option>
      <option value="43">QA engineer</option>
      <option value="44">senior QA engineer</option>
      <option value="45">mobility tester</option>
      <option value="46">QA analyst</option>
      <option value="47">junior QA analyst</option>
      <option value="48">product tester</option>
      <option value="49">software developer</option>
      <option value="50">web developer</option>
      <option value="51">senior software developer</option>
      <option value="52">junior software developer</option>
      <option value="53">senior IT programmer</option>
      <option value="54">junior IT programmer</option>
      
    </select></br> 

    <label>No of Openings</label>
    <input type="text" name="openings" class="form-control" style="width: 60px; display: inline-block; margin: 10px;"></br>
    
    <label>Location:</label></br>
    <label>City</label>
    <input type="text" name="city1" id="city1" class="form-control" style="width: 120px; display: inline-block; margin-left: 75px;">
    <div style="margin: 10px; margin-left: 0px;">
    <label>State </label>
    <select name="state" style="margin-left: 74px;">
    	<option value="">Choose a state</option>
    <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
    </select></div> </br>
    <label>Base Level</label>
    <select name="hlevel" class="required" style="margin-left: 35px;">
      <option value="">Select an option</option>
      <?php
        $query="SELECT * from dd1";
        $result=mysql_query($query);
        //$row=mysql_fetch_assoc($result);
        while($row=mysql_fetch_array($result))
        echo '<option>' . $row['menu1'] . '</option>';
      	?>
    </select></br>
    <label>Granular Level</label>
    <select name="level1" onchange="getId(this.value);" style="margin: 10px;">
      <option value="">Select an option</option>
      <?php
        $query="SELECT * from dd1";
        $result=mysql_query($query);
        //$row=mysql_fetch_assoc($result);
        while($row=mysql_fetch_array($result))
        echo '<option value="' . $row['id1'] . '">' . $row['menu1'] . '</option>';
      	?>
    </select>
    <select id="level2" onchange="getId2(this.value);">
      <option>Select an option</option>
      <option value=""></option>
    </select>
    <select id="level3">
      <option>Select an option</option>
      <option value=""></option>
    </select></br>
    <div class="div1">
    <label>Rate</label>
    <select id="rate" style="margin: 10px;">
    <option value=""></option>
    <option value="1">per hr</option>
    <option value="2">per year</option>
    </select>
    <input type="text" name="rate" class="form-control" value="$" style="width:70px;">
    </div>
    <label>Duration</label>
    <select id="category1" name="category1" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);" style="margin: 10px;"> 
      <option value="">Select an option</option>
      <option value="weeks">Weeks</option>
      <option value="months">Months</option>
      <option value="years">Years</option>
    </select>
        <script type="text/javascript" language="JavaScript">
 document.write('<select name="category2"><option value="">Select Category2</option></select>')
 </script>
 <noscript><select name="category2" id="category2" >
 <option value="">Select an option</option>
 </select>
 </noscript>

    
  </fieldset>
  <fieldset style="margin: 10px;">
    <legend>Contact Info</legend>
    <label>Email</label><input type="text" name="email" class="form-control"><label>Phone</label>
    <input type="text" name="phone" id="phone" class="form-control">
    <div style="margin: 10px; margin-left: 0px;">
    <label>Best time to contact</label></br>
    <select name="time1">
    <option value=""></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
    </select>
    <select name="am">
    <option value=""></option>
      <option>am</option>
      <option>pm</option>
    </select>
    
    <select name="tz">
    <option value="">Select your timezone</option>
    <option value="1">(UTC-9:00) Alaska Time Zone</option>
    <option value="2">(UTC-4:00) Atlantic Time Zone</option>
    <option value="3">(UTC+1) British Summer Time</option>
    <option value="4">(UTC-6:00) Central Time Zone</option>
    <option value="5">(UTC+10:00) Chamorro Time Zone</option>
    <option value="6">(UTC-5:00) Eastern Time Zone</option>
     <option value="7">(GMT) Greenwich Mean Time Zone</option> 
      <option value="8">(UTC-10:00) Hawaii-Aleutian Time Zone</option>
      <option value="9">(UTC-7:00) Mountain Time Zone</option>
      <option value="10">(UTC-8:00) Pacific Time Zone</option>
      <option value="11">(UTC-11:00) Samoa Time Zone</option> 
      <option value="12"> (UTC-1:00) Azores Time Zone</option>
      <option value="13"> (UTC+0:00) Western European Time Zone</option>
      <option value="14"> (UTC+1:00) Central European Time Zone</option>
      <option value="15"> (UTC+2:00) Eastern European Time Zone</option>
      <option value="16"> (UTC+3:00) Moscow Time Zone</option>
      <option value="17"> (UTC+3:00) Further Eastern Time Zone</option>
      <option value="18"> (UTC+0:00)Irish Time Zone</option>
       </select></div></br>
       <label>Additional Notes</label>
       <textarea name="notes" class="form-control"></textarea>
  </fieldset> 
  <div id="btn1"><button class="btn btn-primary btn-lg" name="submit" type="submit">Add Job</button></div>
  </div>
</form>


  </div>
  </div>
  </body>
  </html>
  <?php
}
 else
  {
  ?>
  <p> Click here to <a href="index.php">Login</a></p>
  <?php
  }
  ?>
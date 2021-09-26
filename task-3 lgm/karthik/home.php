<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>frontpage</title>
	<link rel="stylesheet" type="text/css" href="frontpage.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	function Calling(){
    		alert('Call +91 7892142054');
    	}
    	function Calling1(){
    		
            window.location.replace("student.php");
      
    	}
    	
    </script>
</head>
<body>

    <?php
      include "header.php"
      ?>
	<div class="block0" style="background: 	rgb(255, 255, 179);">
		<img src="Images/stud.png" height = 400  width = 600 class="people">
		<div class="parabtn" style="padding-left: 10%;">
					<h2 style="color: black;">Virtual Classes</h2>
					<h2 style="color: black;">in Progress.<span style="color:red;">Admission</span></h2>
					<h2 style="color: red;">Enquiries for 2022-2023</h2>
					<h2 style="color: black;">Welcome.</h2>
					<p style="color: black;">A whole new approach to virtual learning.<br>
					Classes will take place via an online platform</p>
					<p style="color: blue">To Check results click here</p>
					<button type="button" class="btn btn-danger btn-rounded" onclick="Calling1()">Check Results</button><br><br>
					
					
    	</div>		
	</div>
	<div style="background: rgb(0, 102, 0);width: 100%;">
		<p style="background-color: red;color: white;width: 5%;">#News</p><marquee style="color:white;display: inline-flex;">We have 100% results in the Academic year 2021-2022. We are proud to say that we are one among the top 5 schools in Bangalore. We have Karthik Y as topper of this year with 96% in 10th standard.</marquee>
		
	</div>

<img src="Images/Contents.png" style="width: 100%;">

<br>
<br>
<div style="padding-left: 10%;">
<h4><B>Commitment to excellence and innovation</B></h4>
<img src="Images/events.png" style="width: 30%;height: 30%;">
<p style="float: left";>The BM Group of schools was established in 1958. It has a proud record of achievements<br> and a well earned reputation. The commitment to excellence and innovation has been<br> maintained throughout. The BM group currently has a State Board School and an ICSE<br> School.<br>The State Board School established in 1958, is situated in the Cantonment area of<br> Bangalore. The ICSE division was established in 2004 in a sprawling 2.5 acre campus on the<br> International Airport Link Road. Both the schools have a firm commitment to child friendly<br> approach. For the convenience of people living around the State board school, we have a<br> feeder ICSE school at the State Board premises on St.John’s road. Students will study here<br> up to Grade V and later move to our main campus on Hennur road.</p>
<br>
<button type="button" class="btn btn-danger btn-rounded" onclick="Calling()">Enquire Now</button><br><br>

</div>
<img src="Images/stdlife.png" style="width: 100%;">

	<footer class="text-center mt-5 py-2" style = "background-color: lightgrey;">
        <p>&copy 2021. Made by <b> KARTHIK Y </b> <br>Let's Grow More </p>
    </footer>
   
    
</body>
</html>
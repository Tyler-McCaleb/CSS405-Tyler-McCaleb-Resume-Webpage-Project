
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Resume - Jeffrey Tyler McCaleb</title>
	<link rel = "stylesheet" href="../styles/resume-styles.css"/>
	<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
</head>

<?php include "header.php"; ?>

<div id = "wrapper">
		 
<!-- Main Body of the Webpage -->
<body id ="body">


		<!-- Create a container for the navigation bar -->
		<div id = "navigationContainer">	 
		 <!-- create the navitatin bar for the webpage -->
		 <div class = "navigationBar">
		 		<a href = "index.php">Home</a>
				<a class = "active" href = "resume.php">Resume</a>
				<a href = "pdf_Resume.php">PDF</a>
				<a href = "contact_form.php">Contact</a>
  		 </div>
		</div>

		<!-- Div to contain the information and an image -->
		<div id = "contactAndPhoto">
			
	 	<!-- Create a div so that contact information can be right aligned -->
	  	<div id="contactInformation">
			
			<!-- Insert an image that is floated to the left -->
			<img id = "headerPhoto" src ="../pictures/resume-photo.jpeg" alt = "Header Image">
			   			
			<!-- Enter Contact Information and float it to the right -->
		   	<p>5556 Gates Avenue | Long Beach, MS 39560</p>
			<p>228-229-6882 | <a href="mailto:Jeffrey.Mccaleb@usm.edu">Jeffrey.Mccaleb@usm.edu</a></p>
			<p>GitHub Profile | <a href = "https://github.com/Tyler-McCaleb">Tyler-McCaleb</a></p>
					
		</div>
		
	</div>

  	<!-- Start of Education Section -->
	<h3 class="subHeaders"> EDUCATION</h3>
	<div id ="educationInformation">
    	 <p><strong>College of Science and Technology</strong> | <strong> Major: Computer Science </strong> | In Progress</p>
		 <p><strong>Current GPA: 3.972</strong> | The University of Sourthern Mississippi Gulf Park, Long Beach, MS</p>
    	 <p><strong>Anticipated Graduation Date</strong> | May 2019</p>
	</div>
  
  	<!-- Start of Influential Classes Section -->
	<h3 class="subHeaders">INFLUENTIAL CLASSES COMPLETED</h3>
	<div id="classInformation">
    	 <p><strong>CSC 307</strong> | Data Structures</p>
		   	<ul>
			   	<li>Worked with how data is stored and different ways to manipulate that data.
        		<ul>
           			<li>Included work with the following: Arrays, Linked Lists, Binary Trees, Stacks, and Queues.</li>
      	    	</ul>
      			</li>
			</ul>
		 <p><strong>CSC 317</strong> | Object Oriented Programming</p>
    	 	<ul>
     	 		<li>Learned concepts of object-oriented programming to complete a project.</li>
				<li>Introduced to dynamics of group based design by way of semester long project.</li>
			</ul>
	</div>
    
  <!-- Start of Work Experience section -->
  <h3 class="subHeaders">WORK EXPERIENCE</h3>
  <div id = "workInformation">
  	<p><strong>Quality Assurance Document Control Specialist</strong> | GCP Laboratories</p>
  	<p>Gulfport, MS | May 2014 - Present</p>
  	 	 <ul>
    		<li> Provide document revisions for employees.</li>
      		<li>Provide proof reading for the Quality Assurance Manager</li>
       		<li>Manage server storage of current, archived, and obsolete documents.</li>	
     		<li>Keep track of expiration dates of Standard Operating Procedures and provide documentation to affected departments for review.</li>
       		<li>Issuance of requested forms and logs to employees, and keeping record of quantity, assigned number and date issued.</li>
       		<li>Record information on retain samples of every lot of product produced and store the samples in a controlled area of the warehouse.</li>
       		<li>Record information on single bottles from each lot of product produced and prepare them for shipment to the company's main office in New York.
        	<li>Creation of tools for data entry in the form of macros in Microsoft Word and formulas in Microsoft Excel.</li>
    	</ul>
      
    <p><strong>Packaging Line Operator</strong> | GCP Laboratories</p>
    <p>Gulfport, MS | May 2009 - May 2014</p>
      	<ul>
        	<li>Followed Standard Operating Proedures to package finished product in containers in preparation for shipment.</li>
           	<li>Monitor packaging line for defects in product and report them for correction.</li>
           	<li>Monitor packaging line equipment for errors and correct them to maintain production pace.</li>
	   </ul>
    </div>
</body>

<?php include "footer.php"; ?>

</div>

</html>
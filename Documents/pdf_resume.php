
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>PDF Resume Page</title>
	<link rel = "stylesheet" href="../styles/resume-styles.css"/>
	<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
</head>

<?php include "header.php"; ?>

<!-- Start of the body of the page -->
<body id = "body">

		<!-- Create a container for the navigation bar -->
		<div id = "navigationContainer">	 
		 <!-- create the navitatin bar for the webpage -->
		 <div class = "navigationBar">
		 		<a href = "index.php">Home</a>
				<a href = "resume.php">Resume</a>
				<a class = "active" href = "pdf_Resume.php">PDF</a>
				<a href = "contact_form.php">Contact</a>
  		 </div>
		</div>

	  <!-- Create two links to download or print the pdf resume -->
	  <div id = "downloadBar">
	  	   <a id = "downloadLink" href = "../files/Jeffrey Tyler McCaleb - Resume.pdf" download>Download this Resume</a>
	  </div>
	  
	  <!-- Create a container for the object that will hold the pdf file -->
	  <div id = "pdfContainer">
	  
	  <!-- Embed the pdf version of the resume into the page to be viewed -->
	  <embed id = "pdfResume" src = "../files/Jeffrey Tyler McCaleb - Resume.pdf" type = "application/pdf">
	  
	  </div>
	  
</body>

<?php include "footer.php"; ?>

</html>
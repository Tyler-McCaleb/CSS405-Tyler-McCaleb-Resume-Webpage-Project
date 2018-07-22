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
				<a href = "resume.php">Resume</a>
				<a href = "pdf_Resume.php">PDF</a>
                <a class = "active" href = "contact_form.php">Contact</a>
  		 </div>
		</div>

    <form id = "contactForm" method = "post" action = "process.php">
        <fieldset>
            <legend>Contact me</legend>
            <div>
                <p>
                <label>First Name:</label>
                <input type = "text" name = "firstName"/>
                </p>

                <p>
                <label>Last Name:</label>
                <input type = "text" name = "lasttName"/>
                </p>

                <p>
                <label>Middle Initial:</label>
                <input type = "text" name = "middleInitial"/>
                </p>

                <p>
                <label>Address:</label>
                <input type = "text" name = "address"/>
                </p>

                <p>
                <label>City:</label>
                <input type = "text" name = "city"/>
                </p>

                <p>
                <label>State:</label>
                <input type = "text" name = "state"/>
                </p>

                <p>
                <label>Zip Code:</label>
                <input type = "text" name = "zipCode"/>
                </p>

                <p>
                <label>Email Address:</label>
                <input type = "text" name = "emailAddress"/>
                </p>

                <p>
                <label>Phone Number:</label>
                <input type = "text" name = "phoneNumber"/>
                </p>

                <p id = "contactMessageField">
                <label>Message:</label>
                    <textarea rows = "8" cols = "220"
                        <input type = "text" name = "contactMessageField"/>
                    </textarea>
                </p>
            </div>

            <p>
                <label>Country: </label>
                <select name = "country">
                    <option>Choose your Country</option>
                    <option>United States of America</option>
                </select>
            </p>

            <input type = "submit" />
        </fieldset>
    </form>

</body>

</div>

<?php include "footer.php"; ?>
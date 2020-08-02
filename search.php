<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config/database.php");
require_once("config/setup.php");
require_once("navbar.php");
// my code will be here

function aps_calculator($marks)
{
	$aps = 0;
	var_dump($marks);
	foreach ($marks as $mark)
	{
		if ($mark >= 40 && $mark<= 49)
		{
			$aps += 3;
		}
		else if ($mark >= 50 &&$mark <= 59)
		{
			$aps += 4;
		}
		else if ($mark >= 60 && $mark<= 69)
		{
			$aps += 5;
		}		
		else if ($mark >= 70 && $mark<= 79)
		{
			$aps += 6;
		}
		else if ($mark >= 80 && $mark<= 89)
		{
			$aps += 7;
		}
		else if ($mark >= 90 && $mark<= 100)
		{
			$aps += 8;
		}
	}
	echo($aps);
}

if ($_POST['Submit'])
{
	echo($here);
	aps_calculator(array($_POST['mark1'], $_POST['mark2'], $_POST['mark3'], $_POST['mark4'], $_POST['mark5'], $_POST['mark6'], $_POST['mark7']));
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet"  href="stylesheets/search.css">
    <title>EduTechHub</title>
  </head>
  <body>
    <h1>
      Please enter your marks:
    </h1>
    <form action="search.php" method="post">
      <label for="subject1">Subject:</label>
      <select name="subject1" id="subject1">
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark1">Mark:</label>
      <input type="text" name="mark1" />
      <span>%</span>
      <br /><br />
      <label for="subject2">Subject:</label>
      <select name="subject2" id="subject2">
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark2">Mark:</label>
      <input type="text" name="mark2" />
      <span>%</span>
      <br /><br />
      <label for="subject3">Subject:</label>
      <select name="subject3" id="subject3">
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark3">Mark:</label>
      <input type="text" name="mark3" />
      <span>%</span>
      <br /><br />
      <label for="subject4">Subject:</label>
      <select name="subject4" id="subject4">
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark4">Mark:</label>
      <input type="text" name="mark4" />
      <span>%</span>
      <br /><br />
      <label for="subject5">Subject:</label>
      <select name="subject5" id="subject5">
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark5">Mark:</label>
      <input type="text" name="mark5" />
      <span>%</span>
      <br /><br />
      <label for="subject6">Subject:</label>
      <select name="subject6" id="subject6">
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark6">Mark:</label>
      <input type="text" name="mark6" />
      <span>%</span>
      <br /><br />
      <label for="subject7">Subject:</label>
      <select name="subject7" id="subject7">
        <option value="none">None</option>
        <option value="none">None</option>
        <option value="accounting">Accounting</option>
        <option value="bstudies">Business Studies</option>
        <option value="chem">Chemistry</option>
        <option value="design">Design</option>
        <option value="economics">Economics</option>
        <option value="english">English</option>
        <option value="geo">Geography</option>
        <option value="history">History</option>
        <option value="lscience">Life Sciences</option>
        <option value="math">Math</option>
        <option value="pscience">Physical Sciences</option>
      </select>
      <label for="mark7">Mark:</label>
      <input type="text" name="mark7" />
      <span>%</span>
      <br /><br />
      <label for="fos">Please select field of study</label>
      <select name="fos" id="fos">
        <option value="none">Law</option>
        <option value="none">Business Administration</option>
        <option value="accounting">Education</option>
        <option value="bstudies">Public Health</option>
        <option value="chem">Computer Science Technology</option>
        <option value="design">Electrical and Electronics Engineering</option>
      </select>
      <br /><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
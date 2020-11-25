<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
    <title>Document</title>
</head>
<body>
  <div >
 <form class="form-inline my-2 my-lg-0" method="POST" action="search.php" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name">
          <input type="submit" placeholder="submit" value="submit" name="submit" />
	<input type="reset" placeholder="reset" value="reset" name="reset" />
        </form>

        <?php
           $connect=mysqli_connect('localhost','root','','resume_form');
           if(isset($_POST['submit']))
           {
             $name=$_POST['name'];
		$Name="No user found";
               $RollNumber="Roll not found";
               $DOB="NA";
               $Address="NA";
               $Mobile_Number="NA";
               $Email="NA";
               $sgpa1=0.00;
               $sgpa2=0.00;
               $sgpa3=0.00;
               $sgpa4=0.00;
               $sgpa5=0.00;
               $sgpa6=0.00;
               $sgpa7=0.00;
               $sgpa8=0.00;
               $cgpa=0.00;
		$Hobbies="NA";
               $Hosteller="NA";
               $References="NA";
             $query=mysqli_query($connect,"select * from resume_table where RollNumber='$name' ")or die("Error: " . mysqli_error($connect));
             while($row=mysqli_fetch_array($query))
             {
               $Name=$row['Name'];
               $RollNumber=$row['RollNumber'];
               $DOB=$row['DOB'];
               $Address=$row['Address'];
               $Mobile_Number=$row['Mobile Number'];
               $Email=$row['E-mail ID'];
               $sgpa1=$row['sgpa1'];
               $sgpa2=$row['sgpa2'];
               $sgpa3=$row['sgpa3'];
               $sgpa4=$row['sgpa4'];
               $sgpa5=$row['sgpa5'];
               $sgpa6=$row['sgpa6'];
               $sgpa7=$row['sgpa7'];
               $sgpa8=$row['sgpa8'];
               $cgpa=$row['CGPA'];
		$Hobbies=$row['Hobbies'];
               $Hosteller=$row['Hosteller'];
               $References=$row['References'];
             }
           }
        ?>
        </div>
        <?php
         if(isset($_POST['name']))
         {
          echo "<div id='page-wrap'>
          <div id='contact-info' class='vcard'>
          
              <!-- Microformats! -->
             
              <h1 class='fn'>
              $Name  
              </h1>
              <p>
                  Cell: <span class='tel'>$Mobile_Number</span><br />
                  Email: <a class='email' href='mailto:greatoldone@lovecraft.com'>$Email</a><br />
                  Address:<span class='email'>$Address</span><br />
                  Date:<span class='email'>$DOB</span><br />
                  Roll:<span class='email'>$RollNumber</span>
              </p>
          </div>
                  
          <div id='objective'>
              <p>
                  I am an outgoing and energetic (ask anybody) young professional, seeking a 
                  career that fits my professional skills, personality, and murderous tendencies. 
                  My squid-like head is a masterful problem solver and inspires fear in who gaze upon it. 
                  I can bring world domination to your organization. 
              </p>
          </div>
          
          <div class='clear'></div>
          
          <dl>
              <dd class='clear'></dd>
              
              <dt>Education</dt>
              <dd>
                  <h2>National Institute of Technology Calicut</h2>
                  <ul>
                      <li><Strong>CGPA:</Strong> $cgpa</li>
                      <li><Strong>SGPA1:</Strong> $sgpa1</li>
                      <li><Strong>SGPA2:</Strong>$sgpa2</li>
                      <li><Strong>SGPA3:</Strong>$sgpa3</li>
                      <li><Strong>SGPA4:</Strong>$sgpa4</li>
                      <li><Strong>SGPA5:</Strong>$sgpa5</li>
                      <li><Strong>SGPA6:</Strong>$sgpa6</li>
                      <li><Strong>SGPA7:</Strong>$sgpa7</li>
                      <li><Strong>SGPA8:</Strong>$sgpa8</li>
                     
                  </ul>
              </dd>
              
              <dd class='clear'></dd>
              
              <dt>Skills</dt>
              <dd>
                  <h2>Programming skills</h2>
                  <p>Java, Python, C, C++, Dart, HTML, CSS, PHP</p>
                  
                  <h2>Technical Skills</h2>
                  <p>Data Structures and Algorithms, Machine Learning, Artificial Intelligence, DataBase Managament System, Operating Systems</p>
              </dd>
              
              <dd class='clear'></dd>
              
              <dt>Projects</dt>
              <dd>
                  <ul>
                      <li>Personal Website</li>
                      <li>Amazon product Review API</li>
                      <li>Face Recognisation using AI</li>
                  </ul>
              </dd>
		<dt>Extra Curricular Activities</dt>
              <dd>
                  <ul>
                      <li>Member of DnD Club</li>
                      <li>National Player of Chess</li>
                      <li>Represented colllege in many yoga events</li>
                  </ul> 
              </dd>
              
              <dd class='clear'></dd>
              
              <dt>Hobbies</dt>
              <dd> $Hobbies</dd>
              
              <dd class='clear'></dd>
              
              <dt>References</dt>
              <dd>$References</dd>
              
              <dd class='clear'></dd>
              <dt>Hosteller</dt>
              <dd> $Hosteller</dd>
          </dl>
          
          <div class='clear'></div>
      
      </div>";
        
         }
        ?>
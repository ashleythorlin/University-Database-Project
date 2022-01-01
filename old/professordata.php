<html>
    <body>
        <?php
            $hostname = "localhost";
            $username = "cs332t32";
            $password = "Mov4ZULO";
            $dbname = "cs332t32";
        
            
            
            if(isset($_POST['submit-ssn'])){
                $link = mysqli_connect($hostName, $userName, $password, $dbName)
                            
                if (!$link){
                    die('Unable to connect to host $HOSTNAME')
                }

                echo 'Connected successfully!<p>';

                $inputSSN = $_POST['ssn'];

                $query = "SELECT s.course_section_number, s.classroom, s.meeting_days, s.beginning_time, s.ending_time, c.course_id, c.course_title
                            FROM Course_Sections s, Course c, Professor p
                            WHERE p.ssn = $inputSSN AND s.course_section_number = c.course_id;"
                $result = $link->query($query);
                $numRows = $result->num_rows;

                echo '
                <ul style="list-style-type: none; box-sizing: border-box; padding: 0; margin: 0; display: flex; padding: 25px;">
                    <li><a class="menuItem" style="text-decoration: none; background-color: royalblue; color: white; border-radius: 17px; padding: 10px; margin: 0 10px; align-items: center; justify-content: space-between;" href="index.html">Home</a></li>
                    <li><a class="menuItem" style="text-decoration: none; background-color: royalblue; color: white; border-radius: 17px; padding: 10px; margin: 0 10px; align-items: center; justify-content: space-between;" href="profs.html">Back</a></li>
                </ul>';

                echo '<p style="font-size: 25px; padding-left: 10px;"><strong>Scheduling:</strong><p>';
                echo '<table align="left" cellspacing="5" cellpadding="8">';

                for ($i = 0; $i < $numRows; $i++) {
                    $row = $result->fetch_assoc();
                    echo '<tr><td align="left">' . 'TITLE: ' . $row['course_title'] . '<p>';
                    echo '<tr><td align="left">' . 'CLASSROOM: ' . $row['classroom'] . '<p>';
                    echo '<tr><td align="left">' . 'MEETING DAYS: ' . $row['meeting_days'] . '<p><hr>';
                    echo '<tr><td align="left">' . 'BEGINNING TIME: ' . $row['beginning_time'] . '<p><hr>';
                    echo '<tr><td align="left">' . 'ENDING TIME: ' . $row['ending_time'] . '<p><hr>';
                }

                $result->free();
                $link->close();

            }
            else if (isset($_POST['submit-nums'])){

                $link = mysqli_connect($hostName, $userName, $password, $dbName)
                            
                if (!$link){
                    die('Unable to connect to host $HOSTNAME')
                }

                echo 'Connected successfully!<p>';

                $inputCnum = $_POST['cnum'];
                $inputSnum = $_POST['snum'];

                $query = "SELECT er.grade, COUNT(*) 
                            FROM Course_Sections s, Course c, Erollment_Record er
                            WHERE c.course_id = $inputCnum AND s.course_section_number = $inputSnum AND
                                c.course_id = s.course_section_number AND s.course_section_number = er.course_num AND er.section_num = s.course_section_number";
                $result = $link->query($query);
                $numRows = $result->num_rows;

                echo '
                <ul style="list-style-type: none; box-sizing: border-box; padding: 0; margin: 0; display: flex; padding: 25px;">
                    <li><a class="menuItem" style="text-decoration: none; background-color: royalblue; color: white; border-radius: 17px; padding: 10px; margin: 0 10px; align-items: center; justify-content: space-between;" href="index.html">Home</a></li>
                    <li><a class="menuItem" style="text-decoration: none; background-color: royalblue; color: white; border-radius: 17px; padding: 10px; margin: 0 10px; align-items: center; justify-content: space-between;" href="profs.html">Back</a></li>
                </ul>';

                echo '<p style="font-size: 25px; padding-left: 10px;"><strong>Scheduling:</strong><p>';
                echo '<table align="left" cellspacing="5" cellpadding="8">';

                for ($i = 0; $i < $numRows; $i++) {
                    $row = $result->fetch_assoc();
                    echo '<tr><td align="left">' . 'GRADE: ' . $row['grade'] . '<p>';
                    echo '<tr><td align="left">' . 'COUNT: ' . $row['COUNT(*)'] . '<p>';
                }

                $result->free();
                $link->close();
            }
            else{
                echo "<title>cs32t13 | ERROR</title>";
                echo '<a href="index.html"> Home </a>';
                echo '<a href="professor.html"> Professor </a> <br>';
                echo "ERROR: Forms not submitted correctly <br>";
                print_r($_POST);
            }
        ?>
    </body>
</html>
<?php 
    if(isset($_POST['submit']))
    {
        $student_id = $_POST['id'];
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $class = $_POST['class'];
        $email =$_POST['email'];
        $english = $_POST['english'];
        $hindi = $_POST['hindi'];
        $math = $_POST['math'];
        $science = $_POST['science'];
        $history = $_POST['history'];
        $geography =$_POST['geography'];
        $remark = $_POST['remark'];

        $obtained_marks = $english + $hindi + $math + $science + $history + $geography;
        $total_marks = 600;
        $percentage = ($obtained_marks/$total_marks)*100;

        

        if($percentage > 75)
        {
            $result = "Distinction";
        }
        else if($percentage < 74 && $percentage >60)
        {
            $result = "First Class";
        }
        else if($percentage < 59 && $percentage >33)
        {
            $result = "Pass";
        }
        else
        {
            $result = "Fail";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Report</title>
    <link rel="stylesheet" href="report.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            <h2>student report</h2>
        </div>
        <div class="main">
            <div class="info">
            <p class="name">Name of the Student : <?php echo $first_name." ".$last_name ?> </p> <p class="class">Class : <?php echo $class ?> </p><p class="id"> Student ID : <?php echo $student_id ?> </p>
                
            </div>
            <div class="marks">
                <table border="1" cellspacing="0" height="300px" class="table">
                    <thead>
                        <tr align="center" cellpadding="20">
                            <th>Subject</th>
                            <th> Obtained Marks</th>
                            <th>Total Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr align="center">
                            <td>English</td>
                            <td><?php echo $english ?></td>
                            <td>100</td>
                        </tr>
                        <tr align="center">
                            <td>Hindi</td>
                            <td><?php echo $hindi ?></td>
                            <td>100</td>
                        </tr>
                        <tr align="center">
                            <td>Math</td>
                            <td><?php echo $math ?></td>
                            <td>100</td>
                        </tr>
                        <tr align="center">
                            <td>Science</td>
                            <td><?php echo $science ?></td>
                            <td>100</td>
                        </tr>
                        <tr align="center">
                            <td>History</td>
                            <td><?php echo $history ?></td>
                            <td>100</td>
                        </tr>
                        <tr align="center">
                            <td>Geography</td>
                            <td><?php echo $geography ?></td>
                            <td>100</td>
                        </tr>
                        <tr align="center">
                            <td>Total</td>
                            <td><?php echo $obtained_marks ?></td>
                            <td>600</td>
                        </tr>
                        <tr align="center">
                            <td>Percentage</td>
                            <td><?php echo round($percentage, 2) ?>%</td>
                            <td>100%</td>
                        </tr>
                        <tr align="center" class="grade">
                            <td>Grade</td>
                            <td colspan="2"><?php echo $result ?></td>
                            
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="remark" >
                <p >Remark:<?php echo $remark ?><br></p>
    
            </div>
        </div>

    </div>
</body>
</html>
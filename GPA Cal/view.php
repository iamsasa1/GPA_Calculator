<!DOCTYPE html>

<?php

    session_start();
    if(!isset($_SESSION['id']) && !isset($_SESSION['user_name'])){
        header("Location: index.php");
        exit();
}

    include "db_conn.php";

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>view</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/view.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,100;1,700&display=swap"
            rel="stylesheet">
    </head>
    
    <body>

        <!--Navigation-->
        <section id="nav-bar">
        <nav class="navbar bg-light navbar-light navbar-expand-lg">
            <div class="container">
                <a href="home.php" class="navbar-brand"><img src="images/logo.png" alt="Logo" title="Logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
                       <!--<li class="nav-item"><a href="" class="nav-link">Department</a></li>-->
                       <li class="nav-item"><a href="gpaCalculator.php" class="nav-link">GPA Calculator</a></li>
                       <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </section>


        <!--top-bar-->
        <div class="top-bar" style="height: 3.5rem">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-right">
                        <h4 style="color:black">Hello, <?php echo $_SESSION['name']; ?>..! <a href="logout.php" class="btn btn-danger btn-md ">Logout</a> </h4>
                    </div>
                </div>
            </div>
        </div>

        <!--jumbotran-->
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-4">Hello <?php echo $_SESSION['name']; ?>..!</h1>
            <p class="lead">This is the page that you can view you enterd your department and current academic year and semester...! Just You can enter your result and get <b><i>your current semester GPA</i></b>.</p><hr>
            <!--collapse part-->
            <button class="btn btn-info" id="info-btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false">
            Follow the instructions before enter the reults..!<br>
            <b><i>Just Click me</i></b>
            </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul>
                        <li>You can view the subjects that you selected your department and current academic year and semester.</li>
                        <li>You should select your result of each subjects.</li>
                        <li>If you faced the all subjects, you can see your gpa clearly.</li>
                        <li>If you omit some subjects (as medical case), you can see only subjects that you includng to calculate gpa.</li>
                        <li>In selecting elective subjects, You should enter your relevent elective subject.</li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

        <div class="container my-5">
            
                <div class="row">
                    <div class="col col-md">
                        <div class="form-group">

                            <!-- should be enter relevent user details -->
                            <div class="row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" disabled value="<?php echo $_SESSION['name']; ?>" class="form-control" id="colFormLabel-name" placeholder="">
                                </div>
                            </div>    
                            <div class="row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">User Name</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled value="<?php echo $_SESSION['user_name']; ?>" class="form-control" id="colFormLabel-uname" placeholder="">
                                </div>
                            </div>    
                            <div class="row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Year &amp; Semester</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled value="<?php echo $_POST['year_semester']; ?>" class="form-control" id="colFormLabel-year&sem" placeholder="">
                                </div>
                            <label for="colFormLabel" class="col-sm-12 col-form-label">Your Subjects</label>
                            </div>    
                            <div class="srow">

                            <!-- Subjects view that entered relecvent department and year&semester -->
                            <?php

                                    function validate($data){
                                       $data = trim($data);
                                       $data = stripslashes($data);
                                       $data = htmlspecialchars($data);
                                       return $data;
                                    }

                                    $year_semester = validate($_POST['year_semester']);
                                    $department = validate($_POST['department']);

                                $sql = "SELECT * FROM summary a, subjects b WHERE year_id = '$year_semester' and dep_id = '$department' and a.course_code = b.course_code";

                                //echo $sql;

                                $result = mysqli_query($conn, $sql);

                                while($row = $result->fetch_assoc()) {

                                    echo '<div class="row">';
                                    echo '<label for="colFormLabel" class="col-sm-2 col-form-label">&nbsp;</label>';

                                    echo '<div class="col-sm-9">
                                            <input type="text" value="'.$row['course_code'].' - '.$row['course_title'].' - '.$row['compulsory_or_elective'].'" class="form-control subject" placeholder="">
                                        </div>';

                                    echo '<div class="col-sm-1">
                                           <select class="form-select subjectResult" id="result-selector" form-group" aria-label="Default select example" name="year_semester" credits="'.$row['no_of_credits'].'">
                                                <option value="0" selected>Result</option>
                                                <option value="4">A<sup>+</sup></option>
                                                <option value="4">A</option>
                                                <option value="3.7">A<sup>-</sup></option><hr>
                                                <option value="3.3">B<sup>+</sup></option>
                                                <option value="3">B</option>
                                                <option value="2.7">B<sup>-</sup></option><hr>
                                                <option value="2.3">C<sup>+</sup></option>
                                                <option value="2">C</option>
                                                <option value="1.7">C<sup>-</sup></option><hr>
                                                <option value="1.3">D<sup>+</sup></option>
                                                <option value="1">D</option>
                                                <option value="0">E</option>
                                            </select>
                                        </div>';
                                    echo '</div>';
                                }

                            ?>
                        </div> 
                              
                    </div>
                               
                    <div>
                        <!--calculate gpa within relevent subjects in selected department-->
                        <div class="row">
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#gpa-target" aria-expanded="false" aria-controls="gpa-target">Calculate Your GPA</button>
                            </div>
                            <div class="col-sm-6">
                                <div class="res"><b>Your Current Semester GPA is =</b> &nbsp </div> <div id="gpaResult"></div>
                            </div>
                        </div>
                        
                    </div>
                        
                </div>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>

        <!--gpa calcuation js part-->
        <script>

            var n = 0.0;
            var GPxCP = 0.0;
            var res = 0;

            $(function () { 
                $(".btn-success").click(function () { 
                    $(".subjectResult").each(function(){
                        if(parseFloat($(this).val()) > 0 ){
                            GPxCP += parseFloat($(this).val()) * parseFloat($(this).attr("credits"));                       
                            n += parseFloat($(this).attr("credits")); 
                        }
                        
                    })   
                    res = parseFloat(GPxCP/n).toFixed(2);
                    $("#gpaResult").text(res);
                    n = 0.0;
                    GPxCP = 0.0;
                    res = 0;
                })
            });

        </script>    

    </body>
</html>
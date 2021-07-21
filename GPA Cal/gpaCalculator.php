<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>gpa calculator</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/gpa.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,100;1,700&display=swap"
            rel="stylesheet">
    </head>
    
    <body>
        <div class="container">
            <div class="myCard">
                <div class="row">
                    <div class="col-md-6">
                        <div class="myLeftCtn">
        
                            <form class="myForm text-center" action="view.php" method="post">
        
                                <header>GPA CALCULATER</header>

                                <select class="form-select myInput form-group" aria-label="Default select example" name="department">
                                    <option selected>Department</option>
                                    <option value="fas_cis">CIS</option>
                                    <option value="fas_fst">FST</option>
                                    <option value="fas_nr">NR</option>
                                    <option value="fas_pst">PST</option>
                                    <option value="fas_sport">SSM</option>
                                </select><hr>

                                <select class="form-select myInput form-group" aria-label="Default select example" name="year_semester">
                                    <option selected>Year &amp; Semester</option>
                                    <option value="1-1">1st Year 1st Sem</option>
                                    <option value="1-2">1st Year 2nd Sem</option>
                                    <option value="2-1">2nd Year 1st Sem</option>
                                    <option value="2-2">2nd Year 2nd Sem</option>
                                    <option value="3-1">3rd Year 1st Sem</option>
                                    <option value="3-2">3rd Year 2nd Sem</option>
                                    <option value="4-1">4th Year 1st Sem</option>
                                    <option value="4-2">4th Year 2nd Sem</option>
                                </select><hr>
                                    
                                <input type="submit" class="butt" value="VIEW">

                            </form>
        
        
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="myRightCtn">
                            <div class="box">
                                <header>GPA Calculater</header>
                                    <h4><i>Instructions</i></h4>
                                    <ol>
                                        <li>Enter Your Department</li>
                                        <li>Enter Your Current Academic Year & Semester</li>
                                        <li>Just click the <b>VIEW</b> Button</li>
                                    </ol>

                                    <input type="button" class="butt_out" value="Back to Home" onclick="window.location.href='home.php'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    </body>
</html>
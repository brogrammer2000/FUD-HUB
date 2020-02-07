<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--CSS link-->
    <link rel="stylesheet" href="blueberry_pancakes.css">

    <!-- Navbar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <!--favicon link-->
    <link rel="shortcut icon" href="favicon.ico" />

    <title>FUD-HUB</title>
</head>

<body>

    <div class="container">
        <div class="row" id="header">
            <div class="col-sm-12">
                <a href="frontpage_afterLogin.html"> <img src="fud-hub_logo_ns.jpg" alt="fud-hub_logo" id="logo"></a>
                <img src=loggedin.jpg alt="user_logged_in" id="logged"> Hey, Foodie!
            </div>
        </div>



        <div class="row navBar">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="frontpage_afterLogin.html">FUD-HUB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Follow us

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="facebook.com">Facebook</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="instagram.com/fudhub_official">Instagram</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px; font-size: large;" class="nav-link" href="breakfast.html">
                                    Breakfast </a style="margin-left: 10px;">
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px; font-size: large;" class="nav-link" href="lunch.html">
                                    Lunch </a style="margin-left: 10px;">
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 10px;" style="margin-left: 20px; font-size: large;" class="nav-link" href="dinner.html">
                                    Dinner </a style="margin-left: 10px;">
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px; font-size: large;" class="nav-link" href="data_retrive.php">
                                    View Student Data </a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0" id="search">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div> <!-- row nav bar -->
        <div class="table" id="table_cont">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    include 'db.php';
                    $sql = "select * from student_info";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<div><table>";
                        echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>City</th> <th>GroupID</th> </tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['s.no.'] . "</td>";
                            echo "<td>" . $row['fname'] . "</td>";
                            echo "<td>" . $row['lname'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['groupID'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table> </div>";
                    }


                    // You can type different sql queries based on your needs
                    // The output as of now does not look good. Your task is to format it properly with HTML tables. 
                    else {
                        echo "no results";
                    }

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>



    </div>
    <div class="footer">
        <p> Help us to Grow More... Contact us:)</p>
        <p> FUD-HUB </p>
        <p><a href="tel:041752164">041752164</a> </p>
        <p><a href="mailto:fud.hub@gmail.com">fud.hub@gmail.com</a></p>

        By continuing past this page, you agree to our <a href="terms_conditions.html" target="_blank" rel="nofollow">T&C.</a>
        All trademarks are properties of their
        respective owners. © - <a href="frontpage_afterLogin.html">FUD-HUB</a>™ Media Pvt Ltd.<p> All rights reserved.
        </p>
        </p>
    </div>
</body>

</html>
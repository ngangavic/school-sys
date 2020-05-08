<?php
session_start();

require_once "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['school']) && isset($_SESSION['status']) && isset($_SESSION['phone']) && isset($_SESSION['id_no'])) {

    //get school name
    $stmt = $conn->prepare("SELECT name FROM tbl_school WHERE id=?");
    $stmt->bind_param("s", $_SESSION['school']);
    $stmt->execute();
    $school_row = $stmt->get_result()->fetch_array();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title><?php echo $school_row['name']; ?> | Teacher</title>
    </head>

    <body style="padding-bottom: 10px;">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><?php echo $school_row['name']; ?></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:#ffffff" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fa fa-1x fa-user"></i>
                            <?php
                            if ($_SESSION['name'] == '1') {
                            } else {
                                echo $_SESSION['name'];
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><?php if ($_SESSION['email'] == '1') {
                                                                ?>Email<?php } else {
                                                                        echo $_SESSION['email'];
                                                                    } ?></a>
                            <a class="dropdown-item" href="#"><?php if ($_SESSION['id_no'] == '1') {
                                                                ?>ID No<?php } else {
                                                                        echo $_SESSION['id_no'];
                                                                    } ?></a>
                            <a class="dropdown-item" href="#"><?php if ($_SESSION['phone'] == '1') {
                                                                ?>Phone<?php } else {
                                                                        echo $_SESSION['phone'];
                                                                    } ?>
                                <button class="btn btn-sm btn-danger">Edit</button>
                            </a>
                        </div>
                    </li>
                    <li><a href="logout.php" class="nav-link" style="color:#ffffff">Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                if (isset($_GET['class']) && isset($_GET['year']) && isset($_GET['subject'])) {
                    $class = $_GET['class'];
                    $year = $_GET['year'];
                    $subject = $_GET['subject'];
                ?>
                    <form method="post" action="">
                        <input name="exam" type="hidden" id="exam_input">
                        <input name="term" type="hidden" id="term_input">
                        <input name="year" type="hidden" value="<?php echo $year; ?>">
                        <input name="subject" type="hidden" value="<?php echo $subject; ?>">
                        <div class="card" style="margin-top: 10px">
                            <div class="card-header">
                                <p><?php echo $class.' '.$subject.' '.$year ?></p>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control exam-option">
                                                <option>Select Exam</option>
                                                <?php
                                                $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? AND class=? AND year=? ");
                                                $stmt->bind_param("sss", $_SESSION['school'], $class, $year);
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while ($row = $result->fetch_array()) {
                                                ?>
                                                    <option value="<?php echo $row['name']; ?>" id="<?php echo $row['id']; ?>"><?php echo $row['name'] . ' ' . $row['term']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group" id="set-term">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Marks</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE school=? AND class=?");
                                        $stmt->bind_param("ss", $_SESSION['id'], $class);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while ($row = $result->fetch_array()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['adm']; ?></td>
                                                <input name="adm[]" type="hidden" value="<?php echo $row['adm']; ?>" id="adm<?php echo $row['id']; ?>">
                                                <input name="id[]" type="hidden" value="<?php echo $row['id']; ?>" id="id<?php echo $row['id']; ?>">
                                                <td><?php echo $row['name']; ?></td>
                                                <input name="name[]" type="hidden" value="<?php echo $row['name']; ?>" id="name<?php echo $row['id']; ?>">
                                                <td><?php echo $row['class']; ?></td>
                                                <input name="class[]" type="hidden" value="<?php echo $row['class']; ?>" id="class<?php echo $row['id']; ?>">
                                                <td><input name="marks[]" class="marks" id="<?php echo $row['id']; ?>" disabled required></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>

                <?php
                } else {
                }
                ?>
            </div>

        </div>

        <!-- Footer -->
        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#"> School Management System</a>
            </div>
        </footer>
        <!-- Footer -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                console.log("doc ready");
                $('.exam-option').click(function() {
                    console.log("focus out");
                    var exam_id = $(this).children(":selected").attr("id");
                    var exam_value = $(this).children(":selected").attr("value");
                    $('#exam_input').val(exam_value);
                    console.log(exam_id);
                    console.log("exam value" + exam_value);
                    $.ajax({
                        url: "set-term.php",
                        method: "post",
                        data: {
                            exam_id: exam_id
                        },
                        success: function(data) {
                            console.log(data);
                            $('#set-term').html(data);
                            var value = $('#select-term').children(":selected").attr("value");
                            console.log(value);
                            $('#select-term').click(function() {
                                var value = $(this).children(":selected").attr("value");
                                console.log(value);
                                if (value != "1") {
                                    //enable input
                                    $('#term_input').val(value)
                                    console.log("term value" + value);
                                    $('.marks').prop("disabled", false);
                                }
                            });
                        }
                    });
                });
            });
        </script>

        <script>
            //get params (year, subject)
            //post params (adm, id, name, class, marks,exam, term)
            $(document).ready(function() {
                $('.marks').focusout(function() {
                    var student_id = $(this).attr("id");
                    var adm_data = $("#adm" + student_id).val();
                    var name_data = $("#name" + student_id).val();
                    var class_data = $("#class" + student_id).val();
                    var marks_data = $("#" + student_id).val();
                    var exam_data = $('#exam_input').val();
                    var term_data = $('#term_input').val();
                    var year = "<?php echo $_GET['year']; ?>";
                    var subject = "<?php echo $_GET['subject']; ?>";

                    var URL = "save-results.php";
                    console.log(adm_data);
                    console.log(name_data);
                    console.log(class_data);
                    console.log(marks_data);

                    console.log(exam_data);
                    console.log(term_data);
                    console.log(year);
                    console.log(subject);
                    if (marks_data === '') {
                        var color = $('#' + student_id).css("background-color", "red");
                    } else {
                        $.ajax({
                            url: URL,
                            method: "post",
                            data: {
                                student_id: student_id,
                                adm_data: adm_data,
                                name_data: name_data,
                                class_data: class_data,
                                marks_data: marks_data,
                                exam_data: exam_data,
                                term_data: term_data,
                                year: year,
                                subject: subject
                            },
                            success: function(data) {
                                console.log(data);
                                if (data === '0') {
                                    var color = $('#' + student_id).css("background-color", "green");
                                } else {
                                    var color = $('#' + student_id).css("background-color", "red");
                                }
                            }
                        });
                    }
                });
            });
        </script>

    </body>

    </html>
<?php } else {
    header("location: ../index.php");
} ?>
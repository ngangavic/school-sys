<?php
session_start();
require_once "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Results</title>
        <script rel="javascript" src="../../jquery/jquery-3.4.1.js"></script>
        <script rel="javascript" src="../../popper/popper.min.js"></script>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script rel="javascript" src="../../bootstrap/js/bootstrap.js"></script>
        <link href="../../css/custom.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
        <link href="../../fonts/css/all.css" rel="stylesheet">

    </head>

    <body>

        <?php include "../topbar.php"; ?>
        <!--START new UI-->

        <div class="container-fluid">

            <div class="row">

                <?php include "../sidebar.php"; ?>

                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 main-content">

                    <div style="background-color: #ffffff" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h5 style="color: #000000;padding: 5px;">Dashboard: Results</h5>
                        <hr />
                    </div>
                    <?php
                    if (isset($_GET['exam']) && isset($_GET['class']) && isset($_GET['term']) && isset($_GET['year']) && isset($_GET['subject'])) {
                        $exam = $_GET['exam'];
                        $class = $_GET['class'];
                        $term = $_GET['term'];
                        $year = $_GET['year'];
                        $subject = $_GET['subject'];

                        $stmt = $conn->prepare("SELECT * FROM tbl_students WHERE school=? AND class=? ");
                        $stmt->bind_param("ss", $_SESSION['id'], $_GET['class']);
                        $stmt->execute();
                        $total_students = $stmt->get_result()->num_rows;

                        //check if there are results
                        $stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE school=? AND class=? AND subject=? AND term=? AND exam=? AND year=? AND complete='no' ");
                        $stmt->bind_param("ssssss", $_SESSION['id'], $class, $subject, $term, $exam, $year);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $count = $result->num_rows;
                        if ($count >= $total_students) {
                            //display the results
                    ?>

                            <form method="post" action="">
                                <input name="exam" type="hidden" value="<?php echo $exam; ?>">
                                <input name="term" type="hidden" value="<?php echo $term; ?>">
                                <input name="year" type="hidden" value="<?php echo $year; ?>">
                                <input name="subject" type="hidden" value="<?php echo $subject; ?>">
                                <table class="table">
                                    <thead>
                                        <th>Adm</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Marks</th>
                                    </thead>
                                    <tbody>
                                        <?php
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
                                                <td><input name="marks[]" class="marks" value="<?php echo $row['marks']; ?>" id="<?php echo $row['id']; ?>" required></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="results.php?exam=<?php echo $_GET['exam']; ?>&&class=<?php echo $_GET['class'] ?>&&term=<?php echo $_GET['term'] ?>&&year=<?php echo $_GET['year'] ?>&&subject=<?php echo $_GET['subject']; ?>" class="btn btn-outline-danger" name="save">Save</a>
                            </form>

                        <?php
                        } else {
                            //insert
                        ?>

                            <form method="post" action="">
                                <input name="exam" type="hidden" value="<?php echo $exam; ?>">
                                <input name="term" type="hidden" value="<?php echo $term; ?>">
                                <input name="year" type="hidden" value="<?php echo $year; ?>">
                                <input name="subject" type="hidden" value="<?php echo $subject; ?>">
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
                                                <td><input name="marks[]" class="marks" id="<?php echo $row['id']; ?>" required></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="results.php?exam=<?php echo $_GET['exam']; ?>&&class=<?php echo $_GET['class'] ?>&&term=<?php echo $_GET['term'] ?>&&year=<?php echo $_GET['year'] ?>&&subject=<?php echo $_GET['subject']; ?>" class="btn btn-outline-danger" name="save">Save</a>
                            </form>

                        <?php
                        }

                        ?>

                    <?php
                    } else {
                    }
                    ?>

                </div>
            </div>
        </div>

        <!--END new UI-->

        <!--    [START]results modal-->
        <!-- Modal -->
        <div id="resultsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Results Setup</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="get">
                            <div class="form-group">
                                <select name="exam" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_exam WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="class" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_class WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="term" class="form-control">
                                    <option value="Term 1">Term 1</option>
                                    <option value="Term 2">Term 2</option>
                                    <option value="Term 3">Term 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="year" class="form-control">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="subject" class="form-control">
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM tbl_subject WHERE school=? AND status='active' ");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">DONE</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!--[END]results modal-->

        <script>
            //get params (exam, term, year, subject)
            //post params (adm, id, name, class, marks)
            $(document).ready(function() {
                $('.marks').focusout(function() {
                    var student_id = $(this).attr("id");
                    var adm_data = $("#adm" + student_id).val();
                    var name_data = $("#name" + student_id).val();
                    var class_data = $("#class" + student_id).val();
                    var marks_data = $("#" + student_id).val();
                    var exam = "<?php echo $_GET['exam']; ?>";
                    var term = "<?php echo  $_GET['term']; ?>";
                    var year = "<?php echo $_GET['year']; ?>";
                    var subject = "<?php echo $_GET['subject']; ?>";

                    var URL = "../action/save-results.php";
                    console.log(adm_data);
                    console.log(name_data);
                    console.log(class_data);
                    console.log(marks_data);

                    console.log(exam);
                    console.log(term);
                    console.log(year);
                    console.log(subject);

                    $.ajax({
                        url: URL,
                        method: "post",
                        data: {
                            student_id: student_id,
                            adm_data: adm_data,
                            name_data: name_data,
                            class_data: class_data,
                            marks_data: marks_data,
                            exam: exam,
                            term: term,
                            year: year,
                            subject: subject
                        },
                        success: function(data) {
                            console.log(data);
                            if (data === '0') {
                                $('#myToastS').toast('show')
                            } else {
                                $('#myToastE').toast('show')
                            }
                        }
                    });
                });
            });
        </script>

    </body>

    </html>
<?php } else {
    header("location:../../index.php");
} ?>
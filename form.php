<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rajat Mishra</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Poiret+One&family=Quattrocento+Sans&family=Ubuntu&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body style="padding: 0 10% 0 10%;">
    <h1>Resume Info</h1>
    <hr>

    <form class="row g-3 basic_form" action="" method="POST">
        <h2>Basic Information</h2>
        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control basic_ip" id="name">
        </div>
        <div class="col-md-4">
            <label for="dob" class="form-label">DOB</label>
            <input type="text" class="form-control basic_ip" id="dob">
        </div>
        <div class="col-md-4">
            <label for="nation" class="form-label">Nationality</label>
            <input type="text" class="form-control basic_ip" id="nation">
        </div>
        <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control basic_ip" id="address">
        </div>
        <div class="col-md-4">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control basic_ip" id="phone">
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control basic_ip" id="email">
        </div>
        <div class="col-md-4">
            <label for="linkedin" class="form-label">LinkedIn</label>
            <input type="text" class="form-control basic_ip" id="linkedin">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary basic_submit" id="basic">Submit</button>
        </div>
    </form>
    <hr>

    <form class="row g-3 skill_form" action="" method="POST">
        <h2>Skills</h2>
        <div class="col-12">
            <label for="address" class="form-label">Description</label><br>
            <textarea name="addr" id="address" cols="50" rows="7" class="skill_ip"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary skill_submit" id="skills">Submit</button>
        </div>
    </form>
    <hr>

    <form class="row g-3 exp_form" action="" method="POST">
        <h2>Experience</h2>
        <div class="col-md-4">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control exp_ip" id="name">
        </div>
        <div class="col-md-4">
            <label for="dob" class="form-label">Date</label>
            <input type="text" class="form-control exp_ip" id="dob">
        </div>
        <div class="col-12">
            <label for="address" class="form-label">Description</label><br>
            <textarea name="addr" id="address" cols="50" rows="7" class="form-control exp_ip"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary exp_submit" id="exp">Submit</button>
        </div>
    </form>
    <hr>

    <form class="row g-3 edu_form" action="" method="POST">
        <h2>Education</h2>
        <div class="col-md-4">
            <label for="name" class="form-label">Institution</label>
            <input type="text" class="form-control edu_ip" id="name">
        </div>
        <div class="col-md-8">
            <label for="dob" class="form-label">Duration</label>
            <input type="text" class="form-control edu_ip" id="dob">
        </div>
        <div class="col-12">
            <label for="address" class="form-label">Description</label><br>
            <textarea name="addr" id="address" cols="50" rows="7" class="form-control edu_ip"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary edu_submit" id="edu">Submit</button>
        </div>
    </form>
    <hr>

    <form class="row g-3 proj-form" action="" method="POST">
        <h2>Projects</h2>
        <div class="col-md-4">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control proj_ip" id="name">
        </div>
        <div class="col-12">
            <label for="address" class="form-label">Description</label><br>
            <textarea name="addr" id="address" cols="50" rows="7" class="form-control proj_ip"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary proj_submit" id="proj">Submit</button>
        </div>
    </form>
    <hr>

    <?php
    error_reporting(E_ALL ^ E_WARNING);
    if (empty($_POST)) {
        exit;
    }

    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "resume") or die("Could not connect");

    if (isset($_POST['basic_submit'])) {
        $name = $_POST['basic_ip'][0];
        $dob = $_POST['basic_ip'][1];
        $nation = $_POST['basic_ip'][2];
        $address = $_POST['basic_ip'][3];
        $phone = $_POST['basic_ip'][4];
        $email = $_POST['basic_ip'][5];
        $linkedin = $_POST['basic_ip'][6];

        $sel = "INSERT INTO `basic`(`ID`, `Name`, `DOB`, `Nationality`, `Address`, `Phone`, `Mail`, `Linkedin`) VALUES (1, $name, $dob, $nation, $address, $phone, $email, $linkedin)";
        $sq = mysqli_query($con, $sel) or die("Could not execute");
    }

    if (isset($_POST['skill_submit'])) {
        $desc = $_POST['skill_ip'][0];
        $sel = "INSERT INTO `skills`(`Skill`) VALUES ($desc)";
        $sq = mysqli_query($con, $sel);
    }

    if (isset($_POST['exp_submit'])) {
        $title = $_POST['exp_ip'][0];
        $date = $_POST['exp_ip'][1];
        $desc = $_POST['exp_ip'][2];
        $sel = "INSERT INTO `experience`(`Title`, `Duration`, `Description`) VALUES ($title, $date, $desc)";
        $sq = mysqli_query($con, $sel);
    }

    if (isset($_POST['edu_submit'])) {
        $inst = $_POST['edu_ip'][0];
        $dur = $_POST['edu_ip'][1];
        $desc = $_POST['edu_ip'][2];
        $sel = "INSERT INTO `education`(`Institution`, `Duration`, `Description`) VALUES ($inst, $dur, $desc)";
        $sq = mysqli_query($con, $sel);
    }

    if (isset($_POST['proj_submit'])) {
        $title = $_POST['proj_ip'][0];
        $desc = $_POST['proj_ip'][1];
        $sel = "INSERT INTO `projects`(`Title`, `Description`) VALUES ($title, $desc)";
        $sq = mysqli_query($con, $sel);
    }

    mysqli_close($con);
    ?>
</body>
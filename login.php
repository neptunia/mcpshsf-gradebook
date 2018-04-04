<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == 'msteppe00' && $password == 'g00dmorn1ng!') {
            session_start();
            $_SESSION["user"] = 'msteppe00';
            header('Location: index.php');
        }
        else if ($username == 'bronseep' && $password == 'i_4m_th3_b35t') {
            session_start();
            $_SESSION["user"] = 'bronseep';
            header('Location: index.php');
        } else if ($username == 'wroonert' && $password == 'i_h8_sm1ling_:(') {
            session_start();
            $_SESSION["user"] = 'wroonert';
            header('Location: index.php');
        } else {
            header('Location: login.php');
        }
    } else {

        header('Location: login.php');
    }
} else {
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<!------ Include the above in your HEAD tag ---------->
<body style="background-color: #ddd;">
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4" style="background-color:#fff;">
            <div class="form-login">
                <h4>Gradebook Login</h4>
                <form method="post">
		    <div class="form-group">
		    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control input-sm" placeholder="username" />
                    </div>
		    <div class="form-group">
		    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control input-sm" placeholder="password" />
                    </div>
                    <div class="wrapper">
                        <span class="group-btn">
			<button type="submit" class="btn btn-primary">Login <i class="fa fa-sign-in"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>
</body>
</html>
<?php } ?>

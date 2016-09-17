<?php
$servername = "db.spirithost.cf";
$username = "spirithost";
$password = "*~~~~~*";
$db = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    $error = $error . "Connection failed: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Spirit Host - Signup</title>
        <style>
        	<?php include 'style.css'; ?>
        </style>
    </head>

    <body>
        <?php include 'navbar.php'; ?>
        <div class="content">
        	<div class="inner">
        		<center>
        			<h2 style="margin: 0;">Signup</h2>
        			<hr>
        			<form action="" method="post">
        				<?php
        				if (isset($error)) {
        					echo '<div class="error">' . $error . '</div><br>';
        				}
        				?>
        				<input type="text" name="username" placeholder="Username:">
        				<input type="password" name="password" placeholder="Password:">
        				<input type="email" name="email" placeholder="Email:">
        				<input type="submit" vlaue="Signup">
        			</form>
        		</center>
        	</div>
        </div>
    </body>

</html>

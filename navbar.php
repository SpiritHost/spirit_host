	<div id="head_bar">
            <ul class="navbar">
                <a href="/" id="/" class="nav_button">
                    <li>Home</li>
                </a>
                <a href="/signup.php" id="/signup.php" class="nav_button">
                    <li>Signup</li>
                </a>
                <span>&nbsp;</span>
            </ul>
        </div>
        <script>
		var element = document.getElementById("<?php echo $_SERVER['REQUEST_URI'];?>");
		if ('<?php echo $_SERVER['REQUEST_URI'];?>' == '/index.php') {
			document.getElementById("/").classList.add("clicked");
		} else {
			element.classList.add("clicked");
		}
        </script>

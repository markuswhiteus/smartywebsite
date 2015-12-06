<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>{$title}</title>
	   <link rel="stylesheet" type="text/css" href="cheese.css"/>
    </head>
    <body>
        <div class="hbg">
			<div class="hbg2">
				<div id="logo"><a href="index.php"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header">{$header}</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >{$link1}</a></li>
					<li><a href="about.php" >{$link2}</a></li>
					<li><a href="staff.php" >{$link3}</a></li>
					<li><a href="games.php" >{$link4}</a><li>
					<li><a href="contact.php" >{$link5}</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<form action='' method='post'>
        <label>Username: <input type='text' name='username'> </label>
        <label>Password: <input type='password' name='password'> </label>
        <label>Name: <input type='text' name='name'> </label>
        <input type='submit' value='Register' name='register'>   
      </form>
      <a href="login.php" >Login!</a
		</div>
		<div id="bottombar" > </div>
    </body>
</html>
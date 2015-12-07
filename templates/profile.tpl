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
					<li><a href="{$url}" >{$link5}</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3>{$header2}</h3>
      <table class="center">
        <tr>
          <th colspan="3">Your Details</th>
        </tr>
        <tr>
          <th>Username</th>
          <th>User Id</th>
          <th>Fullname</th>
        </tr>
          <tr>
            <td>{$username}</td>
            <td>{$ID}</td>
            <td>{$Fullname}</td>
          </tr>
      </table>
      <ul id="profile">
        <a href="login.php">Logout</a>
        <a href="modify.php">Change Username</a>
        <a href="delete.php">Delete Account</a>
        <a href="search.php">Search Users</a>
       </ul>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>
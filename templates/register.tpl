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
      <h3>{$header2}</h3>
			<form action='' method='post'>
        <table>
          <tr>
            <td>
              <b>Username:<b>
            </td>
            <td>
              <input type='text' name='username'>
            </td>
          </tr>
          <tr>
            <td>
              <b>Password:</b>
            </td>
            <td>
            <td>
              <input type='password' name='password'>
            </td>
          </tr>
          <tr>
            <b>Name:</b>
          </tr>
          <tr>
             <input type='text' name='name'>
          </tr>
          <tr>
            <td>
              <input type='submit' value='Register' name='register'>
            </td>
          </tr>            
        </table>
      </form>
      <a href="login.php" >Login!</a
		</div>
		<div id="bottombar" > </div>
    </body>
</html>
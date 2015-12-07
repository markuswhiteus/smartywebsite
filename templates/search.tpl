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
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='searchusername'></label>
              <input type='submit' value='Search' name='search'>              
      </form>
      <p>{$nouser}</p>
      <table class= "center">
        <tr>
          <th>{$th1}</th>
          <th>{$th2}</th>
          <th>{$th3}</th>
        </tr> 
        {foreach from=$data item=item key=key}
          <tr>
            <td>{$item.Username}</td>
            <td>{$item.ID}</td>
            <td>{$item.Fullname}</td>
          </tr>
        {/foreach}
      </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html>
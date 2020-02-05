<!DOCTYPE html>

<html lang="en">

<head>
	<title>Client Photos</title>
	<link href="/normalize.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

ul.sidenav {
  list-style-type: none;
  margin: 0;
  padding: 0% 0% 0% 2%;
  width: 25%;
  background-color: black;
  position: fixed;
  height: 100%;
  overflow: auto;
}

ul.sidenav li a {
  display: block;
  color: #C2AD4E;
  padding: 8px 16px;
  font-size:100%;
  line-height: 120%;
  text-decoration: none;
}
 
ul.sidenav li a.active {
  background-color: #4CAF50;
  color: white;
}

ul.sidenav li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Tablet Scaling */
@media screen and (max-width: 900px) {
  ul.sidenav {
    width: 100%;
    height: auto;
    position: relative;
    font-size:100%; 
  }
  
  ul.sidenav li a {
    float: left;
    padding: 15px;
  }
}

/* Cell Phone Scaling */
@media screen and (max-width: 400px) {
  ul.sidenav li a {
    text-align: center;
    float: none;
    font-size:100%; 
  }
    ul.aboutme li {
    float: left;
    padding: 205px;
  }
}
</style>

</head>

<body>

<?php include_once 'navigation.php';?>

<div class="client">
	<h1><b>Client Photos</b></h1>
	<img src="images/1.jpg" width="18%"   alt="Photo1">
	<img src="images/2.jpg" width="18%"   alt="Photo2">
	<img src="images/3.jpg" width="18%"   alt="Photo3">
	<img src="images/4.jpg" width="18%"   alt="Photo4">
	<img src="images/6.jpg" width="18%"   alt="Photo6">
</div>

</body>
</html>
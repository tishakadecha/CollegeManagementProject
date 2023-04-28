<?php include"header.php";?>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  height:150px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #1d3030;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
table{
  margin-left: auto;
  margin-right: auto;	
}
.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<h1 style="text-align:center">Contact Us</h1><br>
<table height=50% width=100%>
	<tr><td>
	<div class="row">
	  <div class="column">
	    <div class="card">
	      <div class="container">
	        <h2>Tisha Kadecha</h2><br>
	        <p class="title">Adviser</p><br>
	        <img src="./image/tisha.jpg" alt="John"><br><br>
	        <b>Scan For Contact.</b><br><br>
	        <p>tishakadecha@gmail.com</p><br>
	       </div>
	    </div>
	  </div>
	  <div class="column">
	    <div class="card">
	       <img src="./image/coll2.png" alt="John" class="center" ><br>
	      <div class="container">
	      <h2 align="center">Thank You.</h2>
	      </div>
	    </div>
	  </div>
	</td></tr>
</table>
</body>
</html>
<br><br><br>
<?php include"footer.php";?>
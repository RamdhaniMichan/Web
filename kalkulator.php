<htmL>
<title>kalkulator</title>
<head>
	<style>
		#tengah{
		position: absolute;
		margin-top: -100px;
		margin-left: -200px;
		left: 50%;
		top: 30%;
		width: 400px;
		height: 220px;
		}
	</style>
<body>
<div id="tengah">
<form action="kalkulator.php" method="post">
<h2>Kalkulator Online</h2>
<input type="text" name="angka1" size="5" />
<select name="operasi">
   <option value="*">x</option>
   <option value="/">:</option>
   <option value="+">+</option>
   <option value="-">-</option>
</select>
<input type="text" name="angka2" size="5" />
<input type="submit" value="Hasil =" />

<?php
if ($_POST["angka1"] && $_POST["angka2"]) {
     if ($_POST["operasi"] == '*') {
          echo $_POST["angka1"]*$_POST["angka2"];
     } elseif ($_POST["operasi"] == '/') {
          echo $_POST["angka1"]/$_POST["angka2"];
     } elseif ($_POST["operasi"] == '+') {
          echo $_POST["angka1"]+$_POST["angka2"];
     } elseif ($_POST["operasi"] == '-') {
          echo $_POST["angka1"]-$_POST["angka2"];
     }
}
?>
</div>
</form>
</body>
</html>
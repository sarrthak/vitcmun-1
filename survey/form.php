<?php
session_start();
require_once('config.php');
if($_SESSION["email"]!=true)
{
	header("Location:index.php");
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/demo.css">
<link rel="stylesheet" href="CSS/form-labels-on-top.css">
<link rel="stylesheet" href="CSS/scrollbar.css">
<meta charset="utf-8">
<title>VITCMUN : Agenda Voting</title>
<style type="text/css">
.mycss
{
font-weight:normal;color:#FFDD00;background-color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:28px;text-align:center;font-family:arial, helvetica, sans-serif;line-height:1;margin:0px;padding:18px;
}
</style>
</head>
<body style="background-color:#1c1c1c">
	<header>
		<h1>VITCMUN: Agenda Voting</h1>
    </header>
	<br><br><br><br><br>
    <div class="main-content" align="left">
        <form class="form-labels-on-top" method="POST" action="submitted.php">
					<b><h4>Select your Agenda</h4></b><br>
	      <h3 class="mycss"><b>European Council</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1EC" value="Agenda 1EC" checked>Reviewing European Union's policy in the following fields: a) Migration  b) Internal Security  c) Fiscal and Monetary Union's future<br><br>
			<input type="radio" name="ans_1EC" value="Agenda 2EC">Developing an integrated cooperation between the countries of the EC to foster a better implementation of the Sustainable development goals.<br><br>
			<input type="radio" name="ans_1EC" value="Agenda 3EC">Addressing the issue of rising euroscepticism.<br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>United Nations Commission on the Status of Women</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 1UNSCW" checked>Addressing the role of women in capacity building efforts in post conflict zones.<br><br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 2UNSCW">Addressing the wage gap with emphasis on anti discriminatory laws in the workplace.<br><br>
			<input type="radio" name="ans_1UNSCW" value="Agenda 3UNSCW">Furthering Women’s Participation in and Access to Information and Communication Technologies<br><br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>All India Political Parties Meet</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 1AIPPM" checked>Discussing the repercussions of internal political corruption on international deals with special emphasis on the Rafale deal.<br><br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 2AIPPM">Reviewing the Independence of Statutory and Constitutional Bodies.<br><br>
			<input type="radio" name="ans_1AIPPM" value="Agenda 3AIPPM">Data Protection and Safety of the Aadhar.<br><br>
			</div>
			<br>
			<br>
			<h3 class="mycss"><b>Disarmament and International Security</b></h3>
			<div align="left">
				<br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 1DISEC" checked>COMBATING ARMS PROLIFERATION AIDING ILLEGAL DRUG TRAFFICKING<br><br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 2DISEC">UPDATING THE BIOLOGICAL WEAPONS CONVENTION<br><br>
		  <input type="radio" name="ans_1DISEC" value="Agenda 3DISEC">Establishing a roadmap for the implementation of the Comprehensive Nuclear Test Ban Treaty<br><br>
			</div>
			<br>
			<br>
		  <h3 class="mycss"><b>White House Situation Room</b></h3>
		  <div align="left">
				<br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 1WHSW" checked>Cuban Missile Crisis<br><br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 2WHSW">Futuristic Syria Timeline <br><br>
		  <input type="radio" name="ans_1WHSR" value="Agenda 3WHSW">Events leading up to 26 December 1991<br><br>
			</div>
			<br>
			<br>
			<h3 class="mycss"><b>Security Council</b></h3>
			<div align="left">
				<br>
		      <input type="radio" name="ans_1SC" value="Agenda 1SC" checked>Role of diamonds in fuelling conflict - A situational understanding of the African problem <br><br>
		      <input type="radio" name="ans_1SC" value="Agenda 2SC">Situation in Yemen<br><br>
		      <input type="radio" name="ans_1SC" value="Agenda 3SC">The Cuban missile crisis.<br><br>
			 <br>
			 <br>
			</div>
			<!--h3 class="mycss"><b>International Press</b></h3>
			<div align="left">
				<br>
			<input type="radio" name="ans_1IP" value="Agenda 1IP" checked>Prague<br>
			<input type="radio" name="ans_1IP" value="Agenda 2IP">Venice<br>
			<input type="radio" name="ans_1IP" value="Agenda 3IP">London<br>
			<br>
		</div-->
			<div align="center" style="font-size: 20px;border-radius: 5px">
			<div class="form-row">
                <button name="form1" type="submit" style="display: block; margin: 0 auto;" >Click to Proceed</button>
            </div>
		</div>
		</form>
	</div>
	<br><br><br>
	<footer>
		<h3><center><font color="white">VITCMUN - Tech Team</font></center></h3>
    </footer>
</body>
</html>

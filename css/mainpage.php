<!DOCTYPE html>
<html>
	<title>MOBILE BANKER</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header'>
				<!-- data-role='header' -->
				<!-- <img src="images/splash4.1.gif" alt="logo" height="30px" width="20px"/> -->
			</div>
			<br/>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<div id='ctnLogon'>
					<div id="lblLogon" ></div>

					<form id="frmLogon" action="php/validate.php" method="POST">
						<table>
							<tr>
								<td><label for='txtPhonenum' style="font-size: 15px; font-weight: bold;font-size: smaller;">Phone number</label>
								<input type="text" name="txtPhonenum" size='10px' id="txtPhonenum"/>
								</td>
								<td><label for='txtPin' style="font-size: 15px;font-weight: bold;font-size: smaller;">PIN</label>
								<input type="text" name="txtPin" value="" size='3px' id="txtPin"/>
								</td>
							</tr>
							<tr>
								<td colspan="2">
								<div id="requests" class="btnLogon">
									Logon
								</div><!-- <input type="submit" name="btnLogon" value="Logon" id="btnLogon" data-theme="a" /> -->
								<p>
									It is your responsibility to ensure the secrecy of your PIN number.
								</p></td>
							</tr>
						</table>
					</form>
				</div>

				<div id="wrapper">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider">
							<img src="images/a.jpg" data-thumb="images/a.jpg" alt="" />
							<img src="images/b.jpg" data-thumb="images/b.jpg" alt="" title="" />
							<img src="images/c.jpg" data-thumb="images/c.jpg" alt="" data-transition="slideInLeft" />
							<img src="images/d.jpg" data-thumb="images/d.jpg" alt="" title="" />
							<img src="images/e.jpg" data-thumb="images/e.jpg" alt="" title="" />
							<img src="images/f.jpg" data-thumb="images/f.jpg" alt="" />
						</div>
					</div>

				</div>
				<div id="calculators" class="btnHeads">
					<span style="font-weight:larger;text-decoration: line-through; color:brown; font-size:30px;"></span> &nbsp;
					Calculators<span style="font-weight:larger;text-decoration: line-through; color:brown; font-size:30px;">&rarr;</span> 
				<div id="dropCalc" style="display: none; padding: 5px; border: 1px solid rgb(197,199,199);margin: 5px; margin-top: 0px;border-radius: 3px;">
					<a href="php/deposit.php">
					<div id="btnInvestment" class='btnSub'>
						Lump sum investment 
					</div></a>
					<p/>
					<a href="php/transfer.php">
					<div id="btnLoan" class='btnSub'>
						Home loan repayment
					</div></a>
					<p/>
					<a href="php/transfer.php">
					<div id="btnSaving" class='btnSub'>
						Saving for a goal
					</div></a>
					<p/>
					<a href="php/transfer.php">
					<div id="btnFinance" class='btnSub'>
						Car finance
					</div></a>
				</div>
				<div class="btnHeads" id="btnBalance">
					<span style="font-weight:larger;text-decoration: line-through; color:brown; font-size:30px;"></span> &nbsp; Account Balance
				</div>
				<div id="requests" class="btnHeads">
					<span style="font-weight:larger;text-decoration: line-through; color:brown; font-size:30px;"></span> &nbsp; Requests
				</div>
				<div id="transaction" class="btnHeads">
					<span style="font-weight:larger;text-decoration: line-through; color:brown; font-size:30px;"></span> &nbsp;
					Transaction
				</div>
				<div id="dropTrans" style="display: none; padding: 5px; border: 1px solid rgb(197,199,199);margin: 5px; margin-top: 0px;border-radius: 3px;">
					<a href="php/deposit.php">
					<div id="btntrans" class='btnSub'>
						Deposit Funds
					</div></a>
					<p/>
					<a href="php/transfer.php">
					<div id="btntrans" class='btnSub'>
						Transfer Funds
					</div></a>
				</div>
			</div>

			<br/>
			<br/>
			<p>
				<div style="background: url('images/splash.png');height: 100px;background-size: 100%;background-repeat:no-repeat; width:200px; "></div>
				<div  style='text-align:right; font-family: "Times New Roman", Times, serif; font-weight: bold;font-size: small; '>
					The presence of UBA Ghana in the banking industry in Ghana over the last seven years has galvanized banking onto a higher performance
					level where competition and innovation in responding to the needs of the customer have become the driving force of the industry.
				</div>
			</p>
			<br/>
			<br/>
		</div>
		<div id="lower">
			<p id="exTerm" style="border: 2px solid brown; opacity: .95; padding: 15px;background: url('images/footer.png');
			background-repeat: no-repeat;background-size: 300%; color: white; font-size: small; display: none;">
				As the Corporate Social Responsibility arm of the UBA Group, UBA Foundation is committed to the
				socio-economic betterment of the communities in which the bank operates,
				focusing on development in the areas of Environment, Education, Economic Empowerment and Special Projects.
			</p>
			<p id="exAbout" style="border: 2px solid brown; opacity: .95; padding: 15px;background: url('images/footer.png');
			background-repeat: no-repeat;background-size: 300%; color: white; font-size: small; display: none;">
				As the Corporate Social Responsibility arm of the UBA Group, UBA Foundation is committed to the
				socio-economic betterment of the communities in which the bank operates,
				focusing on development in the areas of Environment, Education, Economic Empowerment and Special Projects.
			</p>
			<br/>
			<br/>
			<div id='footer'>
				<div style="margin: 0px auto; padding-top:16px; font-size: small; ">
					<span  id='terms' style="width: 50%; height: 100%;margin-right: 5px;padding: 13px; cursor: pointer;" >TERMS</span>
					<span id='about' style="margin-left:5px; width: 50%; height: 100%;padding:13px; cursor: pointer;" >ABOUT</span>
				</div>

			</div>
		</div>

		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {

		$('#slider').nivoSlider();

		$('#btnBalance').click(function() {
			window.location = "balance.php";
		})

		$('#transaction').click(function() {
			$('#dropTrans').slideToggle();
		})

		$('#calculators').click(function() {
			$('#dropCalc').slideToggle();
		})

		$('#terms').click(function() {
			$('#exAbout').hide();
			$('#exTerm').slideToggle();
		});

		$('#about').click(function() {
			$('#exTerm').hide();
			$('#exAbout').slideToggle();
		});

		$('#btnLogon').click(function() {
			alert('yes');
			$.post("php/validate.php", {
				phone : $("#txtPhonenum").val(),
				pin : $("#txtPin").val()
			}, function(data) {
				alert(phone);
			});
		});
	}); 
</script>
<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>

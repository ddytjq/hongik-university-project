﻿<?php

$conn = oci_connect("b389013", "b389013", "203.249.87.162/orcl");

$A=$_POST[TextBox041];
$B=$_POST[TextBox042];
$C=$_POST[TextBox043];
$D=$_POST[TextBox044];
$E=$_POST[TextBox045];
$F=$_POST[TextBox046];
$G=$_POST[TextBox047];

if($A=="" and $B=="" and $C=="" and $D=="" and $E=="" and $F=="" and $G==""){
	$query = "select * from PRODUCT_MANAGEMENT";
}
else{
	$query = "select * from PRODUCT_MANAGEMENT where EMP_ID='$A' or GOODS_CODE='$B' or GOODS_NAME = '$C' or GOODS_SEP ='$D'or GOODS_TRUE_PRICE ='$E' or GOODS_PRICE ='$F' or GOODS_DATE ='$G'";
}

$stid = oci_parse($conn, $query);
oci_execute($stid);

$commit = oci_parse($conn, 'commit');
oci_execute($commit);

oci_close($conn);
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Heroes of Street</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="index.html">&nbsp&nbsp Heroes of Street </a></h1>
		</div>
		<div id="menu">
			<ul><strong>
				<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
				<li><a href="order.html" accesskey="2" title="">Order</a></li>
				<li><a href="customer.html" accesskey="3" title="">Customer </a></li>
				<li><a href="staff.html" accesskey="4" title="">Staff</a></li>
				<li class="current_page_item"><a href="inventory.html" accesskey="5" title="">Inventory</a></li>
				<strong></ul>
				</div>
			</div>
		</div>

	</head>

	<STYLE TYPE="text/css">
	<!--
	.background{background-repeat:repeat}
	.font1{font-size:15pt; font-family:cursive;
		font-weight:bold;color:green;width:100%;height:23;
		Filter:Shadow(color=f0e68c,direction=125); text-align:left}
		.font2{font-size:15pt; font-family: µ¸¿ò; color:#2f8bef}
		.font3{font-size:12pt; font-family: µ¸¿ò; color:#808080}
		//-->
	</STYLE>

	<body>
		<BR>
		<BR>
		<TABLE BORDER="0" ALIGN="CENTER">
			<TR>
				<TD>
					<FONT CLASS="font1">
						*Search Result*
					</FONT>
				</TD>
				<TR>
				</TABLE>

				<BR>

				<TABLE BORDER="1" ALIGN="center">
					<TR>
						<TD>
							EMPLOYEE ID
						</TD>
						<TD>
							GOODS CODE
						</TD>
						<TD>
							GOODS NAME
						</TD>
						<TD>
							GOODS SEPARATE
						</TD>
						<TD>
							GOODS TRUE PRICE ($)
						</TD>
						<TD>
							GOODS PRICE ($)
						</TD>
						<TD>
							GOODS DATE
						</TD>

					</TR>

					<?php
					while($row=oci_fetch_array($stid,OCI_BOTH))
					{
						echo "<tr>
						<td>".$row[0]."</td>
						<td>".$row[1]."</td>
						<td>".$row[2]."</td>
						<td>".$row[3]."</td>
						<td>".$row[4]."</td>
						<td>".$row[5]."</td>
						<td>".$row[6]."</td>

						</tr>";
					}
					?>
				</TABLE>
			</body>
			<footer>
				<div class="extra">
					<div class="container">
						<div class="row">
							<div class="extra1"></br>
								<span></span>
								<p></p>
								<p></p>
								<h1><span>&nbsp&nbsp Heroes of Street</span></h1>
							</div>
							<div class="extra2">
								<p><Strong><span class="icon icon-home">&nbsp Heroes of Street next to Harvard University, Holyoke Center, Suite 880 1350 Massachusetts Avenue Cambridge, MA 02138</span></br>
									<span class="icon icon-phone">&nbsp  010-5158-5651</span></br>
									<span class="icon icon-user">&nbsp  Kim yo sub</span></br>
								&copy; Heroes of Street. ALL RIGHTS RESERVED</br></br></Strong></p>

							</div>
						</div>
					</div>
				</div>
			</footer>
			</html>
			</html>




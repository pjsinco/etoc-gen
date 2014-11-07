<?php
	$story_head = $_POST['story_head'];
	$story_link = $_POST['story_link'];
	$blurb = $_POST['blurb'];
	$section = $_POST['section'];
	$date = $_POST['date'];
?>

<html>
<head>
	<title>eTOC Generator: Article without photo&mdash;preview</title>
</head>

<body>
	<!-- here is the real preview -->
	<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
	    <tbody>

			<!-- article #106 -NO PHOTO- -->
			<tr>
				<td valign="center" align="left" colspan="1" style="width: 14px;">
					<img width="9" vspace="0" hspace="0" height="12" border="0" title="Arrow" src="https://images.magnetmail.net/images/clients/AOA_DOP/arrow_gray.gif" alt="Arrow">
				</td>
				<td width="700" valign="top" align="left" colspan="2" style="font-size: 16px; font-weight: bold; padding: 0px; margin: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
					<a href="<?php echo $story_link; ?>" title="The DO | <?php echo $story_head; ?>" style="text-decoration: none; color: rgb(153, 0, 0);">
						<span style="color: rgb(153, 0, 0);"><?php echo $story_head ?></span>
					</a>
				</td>
			</tr>
			<tr>
				<td valign="top" align="left" colspan="1">
					 
				</td>
				<td valign="top" align="left" colspan="2" style="font-size: 14px; padding: 0px; line-height: 21px; margin: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
					<?php echo $blurb; ?>
					<a href="<?php echo $story_link; ?>" style="text-decoration: none; text-transform: uppercase; font-size: 80%; color: rgb(69, 104, 192); font-weight: bold;">
						More &raquo;
					</a>
				</td>
			</tr>
			<tr>
				<td valign="top" align="left" colspan="1">
					 
				</td>
				<td valign="top" align="left" colspan="2" style="font-size: 12px; padding: 3px 0px 12px 0px; margin: 0px; color: rgb(149, 149, 149); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
					<span style="color: rgb(153, 0, 0); text-transform: uppercase;"><?php echo $section; ?></span> <?php echo $date; ?></td>
			</tr>
	</tbody></table>
	
	<!-- here is the html code to copy -->
		<form action="" method="post" accept-charset="utf-8">
			<textarea name="copy_code" rows="15" cols="100">

<!-- article #106 -NO PHOTO- -->
<tr>
	<td valign="center" align="left" colspan="1" style="width: 14px;">
		<img width="9" vspace="0" hspace="0" height="12" border="0" title="Arrow" src="https://images.magnetmail.net/images/clients/AOA_DOP/arrow_gray.gif" alt="Arrow">
	</td>
	<td width="700" valign="top" align="left" colspan="2" style="font-size: 16px; font-weight: bold; padding: 0px; margin: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		<a href="<?php echo $story_link; ?>" title="The DO | <?php echo $story_head; ?>" style="text-decoration: none; color: rgb(153, 0, 0);">
			<span style="color: rgb(153, 0, 0);"><?php echo $story_head ?></span>
		</a>
	</td>
</tr>
<tr>
	<td valign="top" align="left" colspan="1">
		 
	</td>
	<td valign="top" align="left" colspan="2" style="font-size: 14px; padding: 0px; line-height: 21px; margin: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		<?php echo $blurb; ?>
		<a href="<?php echo $story_link; ?>" style="text-decoration: none; text-transform: uppercase; font-size: 80%; color: rgb(69, 104, 192); font-weight: bold;">
			More &raquo;
		</a>
	</td>
</tr>
<tr>
	<td valign="top" align="left" colspan="1">
		 
	</td>
	<td valign="top" align="left" colspan="2" style="font-size: 12px; padding: 3px 0px 12px 0px; margin: 0px; color: rgb(149, 149, 149); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		<span style="color: rgb(153, 0, 0); text-transform: uppercase;"><?php echo $section; ?></span> <?php echo $date; ?></td>
</tr>
	</textarea>
		</form>
	</body>
</html>

<?php
	$story_head = $_POST['story_head'];
	$story_link = $_POST['story_link'];
	$image_link = $_POST['image_link'];
	$image_title = $_POST['image_title'];
	$blurb = $_POST['blurb'];
	$section = $_POST['section'];
	$date = $_POST['date'];
?>

<html>
<head>
	<title>eTOC Generator: Article with photo&mdash;preview</title>
</head>

<body>
		<!-- <p><strong>Story headline:</strong> <?php echo $story_head; ?></p>
		<p><strong>Story link:</strong> <?php echo $story_link; ?></p>
		<p><strong>Image link:</strong> <?php echo $image_link; ?></p>
		<p><strong>Image title:</strong> <?php echo $image_title; ?></p>
		<p><strong>Blurb:</strong> <?php echo $blurb; ?></p>
		<p><strong>Section:</strong> <?php echo $section; ?></p>
		<p><strong>Date:</strong> <?php echo $date; ?></p> -->
	

<!-- here is the real preview -->
	<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
	    <tbody>

			<!-- article -PHOTO- -->
			<tr>
				<td valign="center" align="left" colspan="1" style="width: 14px;">
					<img width="9" vspace="0" hspace="0" height="12" border="0" title="Arrow" src="https://images.magnetmail.net/images/clients/AOA_DOP/arrow_gray.gif" alt="Arrow">
				</td>
				<td width="700" valign="top" align="left" colspan="3" style="font-size: 16px; font-weight: bold; padding: 0px; margin: 0px;">
					<a href="<?php echo $story_link; ?>" title="The DO | <?php echo $story_head; ?>" style="text-decoration: none; color: rgb(153, 0, 0);">
						<span style="color: rgb(153, 0, 0);"><?php echo $story_head; ?></span>
					</a>
				</td>
			</tr>
			<tr>
				<td valign="top" align="left" colspan="1">
					 
				</td>
				<td valign="center" align="left" colspan="1" style="width: 144px; padding: 0px; margin: 0px;">
					<img vspace="0" hspace="5" width="134" height="95" border="0" src="<?php echo $image_link; ?>" alt="<?php echo $image_title; ?>" title="<?php echo $image_title; ?>" style="padding: 0px;">
				</td>
				<td valign="top" align="left" colspan="2" style="font-size: 14px; padding: 0px; line-height: 21px; margin: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
					<?php echo $blurb; ?>
					<a href="<?php echo $story_link ?>" style="text-decoration: none; text-transform: uppercase; font-size: 80%; color: rgb(69, 104, 192); font-weight: bold;">
						More &raquo;
					</a>
				</td>
			</tr>
			<tr>
				<td valign="top" align="left" colspan="1">
					 
				</td>
				<td valign="top" align="left" colspan="3" style="font-size: 12px; padding: 3px 0px 12px 0px; margin: 0px; color: rgb(149, 149, 149); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
					<span style="color: rgb(153, 0, 0); text-transform: uppercase;"><?php echo $section; ?></span> <?php echo $date; ?></td>
			</tr>
		</tbody>
	</table>


<!-- here is the html code to copy -->
	<form action="" method="post" accept-charset="utf-8">
		<textarea name="copy_code" rows="15" cols="100">
<!-- article -PHOTO- -->
<tr>
	<td valign="center" align="left" colspan="1" style="width: 14px;">
		<img width="9" height="12" border="0" title="Arrow" src="https://images.magnetmail.net/images/clients/AOA_DOP/arrow_gray.gif" alt="Arrow">
	</td>
	<td width="700" valign="top" align="left" colspan="2" style="font-size: 16px; font-weight: bold; padding: 0px; margin: 0px;">
		<a href="<?php echo $story_link; ?>" title="The DO | <?php echo $story_head; ?>" style="text-decoration: none; color: rgb(153, 0, 0);">
			<span style="color: rgb(153, 0, 0);"><?php echo $story_head; ?></span>
		</a>
	</td>
</tr>
<tr>
	<td valign="top" align="left" colspan="1">
		 
	</td>
	<td valign="center" align="left" colspan="1" style="width: 144px; padding: 0px; margin: 0px;">
		<img width="134" vspace="5" hspace="0" height="95" border="0" src="<?php echo $image_link; ?>" alt="<?php echo $image_title; ?>" title="<?php echo $image_title; ?>" style="padding: 0px;">
	</td>
	<td valign="top" align="left" colspan="1" style="font-size: 14px; padding: 0px; line-height: 21px; margin: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		<?php echo $blurb; ?>
		<a href="<?php echo $story_link ?>" style="text-decoration: none; text-transform: uppercase; font-size: 80%; color: rgb(69, 104, 192); font-weight: bold;">
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

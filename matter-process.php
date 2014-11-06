<?php 
	$etoc_date = $_POST['etoc_date']; 
	$ad_loc = $_POST['ad_loc'];
	$ad_link = $_POST['ad_link'];
	$ad_title = $_POST['ad_title'];
	$jobs_month = $_POST['jobs_month'];
	$jobs_link = $_POST['jobs_link'];
?>

<html>
	<head>
		<title>eTOC Generator: Top and bottom matter&mdash;preview</title>
	</head>

	<body>
		<div align="center" style="margin: 12px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif";>
		<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		    <tbody>
		        <tr>
		            <td width="700" valign="top" align="left" colspan="1" style="padding-bottom: 18px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
						<a href="<?php echo $ad_link; ?>">
							<img width="700" height="87" border="0" src="<?php echo $ad_loc; ?>" alt="<?php echo $ad_title; ?>" title="<?php echo $ad_title; ?>" style="padding-bottom: 24px;" />
						</a>
                </td>
            </tr>
            <tr>
                <td width="700" valign="top" align="left" style="padding-bottom: 12px;" colspan="1"><a href="http://thedo.osteopathic.org"><img width="618" height="108" border="0" title="The DO | News and Features About Osteopathic Medicine" alt="The DO | News and Features About Osteopathic Medicine" src="https://images.magnetmail.net/images/clients/AOA_DOP/red_flag_cut.png" /></a></td>
              </tr>
            <tr>
                <td width="700" valign="top" align="center" style="text-transform: uppercase; padding: 5px; font-size: 13px; border-top: 1px dashed rgb(204, 204, 204); border-bottom: 1px dashed rgb(204, 204, 204); text-align: left; font-family: 'Lucida Sans','Lucida Grande','Lucida Sans Unicode',sans-serif;" colspan="1"><a style="text-decoration: none; color: rgb(101, 85, 74);" title="Patient Care" href="http://thedo.osteopathic.org/?cat=1000"><span style="color: rgb(101, 85, 74);">Patient Care</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="Your Practice" href="http://thedo.osteopathic.org/?cat=1100"><span style="color: rgb(101, 85, 74);">Your Practice</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="In Training" href="http://thedo.osteopathic.org/?cat=1200"><span style="color: rgb(101, 85, 74);">In Training</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="Opinion" href="http://thedo.osteopathic.org/?cat=1300"><span style="color: rgb(101, 85, 74);">Opinion</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="Briefly" href="http://thedo.osteopathic.org/?cat=1400"><span style="color: rgb(101, 85, 74);">Briefly</span></a></td>
              </tr>
          </tbody>
      </table>
      <table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
          <tbody>
		        <tr>
		            <td width="400" valign="top" align="left" style="margin-bottom: 0px; color: rgb(34, 34, 34); font-size: 125%; font-weight: bold; padding-top: 12px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="1">Most recent posts: <?php echo $etoc_date; ?></td>
		            <td width="100" valign="top" align="right" style="padding: 12px 5px 0px 5px; margin-bottom: 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="1"><a style="text-decoration: none; color: rgb(153, 153, 153); margin-bottom: 0px;" title="Subscribe to the DO's RSS feed" href="http://thedo.osteopathic.org/?feed=rss2"><img width="14" height="14" border="0" title="Subscribe to The DO's RSS feed" alt="Subscribe to The DO's RSS feed" src="https://images.magnetmail.net/images/clients/AOA_DOP/feed_icon_14x14.png" />   </a> <a style="text-decoration: none; color: rgb(153, 153, 153); padding: 0px;" title="Follow The DO on Twitter" href="http://twitter.com/TheDOmagazine"><img width="12" height="17" border="0" title="Follow The DO on Twitter" alt="Follow The DO on Twitter" src="https://images.magnetmail.net/images/clients/AOA_DOP/twitter.gif" /></a></td>
		        </tr>
		    </tbody>
		</table>
		<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		    <tbody>
		      <tr>
	    		<td width="700" valign="top" align="left" style="font-weight: bold; text-transform: uppercase; color: rgb(101, 101, 101); padding: 25px 0px 4px 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="1">Features</td>
		      </tr>
		<br />
		<br />
		<br />
		<br />
		<br />
		
		      <tr>
	    		<td width="88" valign="top" align="left" style="font-weight: bold; text-transform: uppercase; color: rgb(101, 101, 101); margin-bottom: 0px; padding: 25px 0px 4px0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif; width: 88px;" colspan="3">Opinion</td>
		      </tr>

		      <tr>
	    		<td width="88" valign="top" align="left" style="font-weight: bold; text-transform: uppercase; color: rgb(101, 101, 101); margin-bottom: 0px; padding: 25px 0px 4px0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif; width: 88px;" colspan="3">News</td>
		      </tr>
		    </tbody>
		</table>
		<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
		    <tbody>
		        <tr valign="top" align="center" style="padding-top: 12px;" colspan="3">
		            <td width="700" valign="top" align="center" style="font-size: 14px; padding: 0px 0px 24px 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="5"><em>Got a news tip? A suggestion? A complaint? Let us know:</em> <a style="text-decoration: none; color: rgb(69, 104, 192);" href="mailto:thedo@osteopathic.org"><span style="color: rgb(69, 104, 192);">thedo@osteopathic.org</span></a></td>
		        </tr>
		        <tr valign="top" align="left" style="padding: 0px; margin: 0px;" width="100">
		            <td valign="top" align="left" style="font-size: 11px; padding: 5px 0px 0px 0px; margin: 0px; border-top: 3px solid rgb(204, 204, 204); line-height: 15px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="1"><a style="text-decoration: none; color: rgb(69, 104, 192);" title="DO Jobs Online" href="http://www.osteopathic.org/inside-aoa/development/do-jobs-online/Pages/default.aspx"><span style="color: rgb(69, 104, 192);">DO Jobs Online</span><br />
		            </a> <a style="text-decoration: none; color: rgb(69, 104, 192);" title="DO Jobs in Print - <?php echo $jobs_month; ?> 2014" href="<?php echo $jobs_link ?>"><span style="color: rgb(69, 104, 192);">DO Jobs in Print</span><br />
		            </a></td>
		            <td width="500" valign="top" align="right" style="color: rgb(153, 153, 153); font-size: 11px; padding: 5px 0px 0px 0px; margin: 0px; border-top: 3px solid rgb(204, 204, 204); line-height: 15px;" colspan="1"><a style="text-decoration: none; color: rgb(153, 153, 153); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" title="AOA Homepage" href="http://www.osteopathic.org/"><span style="color: rgb(153, 153, 153);">&copy; American Osteopathic Association, 142 E. Ontario St., Chicago, IL 60611-2864<br />
		            (800) 621-1773, ext. 8160</span></a></td>
		            <td width="70" valign="center" align="right" style="padding-top: 5px; margin: 0px; border-top: 3px solid rgb(204, 204, 204); width: 0px;" colspan="1"><a title="AOA Homepage" href="http://www.osteopathic.org/"><img width="49" height="23" border="0" style="position: relative; top: 3px; padding-left: 6px;" title="American Osteopathic Association" alt="AOA logo" src="https://images.magnetmail.net/images/clients/AOA_DOP/aoa_logo.png" /></a></td>
		        </tr>
		        <tr valign="top" align="center" style="padding: 0px; margin: 0px;">
		            <td> </td>
		        </tr>
		    </tbody>
		</table>
	</div>
		
		
		<!-- here is the html code to copy -->
		<form action="" method="post" accept-charset="utf-8">
			<textarea name="copy_code" rows="15" cols="100">
<div align="center" style="margin: 12px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
    <tbody>
        <tr>
            <td width="700" valign="top" align="left" colspan="1" style="padding-bottom: 18px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
				<a href="<?php echo $ad_link; ?>">
					<img width="700" height="87" border="0" src="<?php echo $ad_loc; ?>" alt="<?php echo $ad_title; ?>" title="<?php echo $ad_title; ?>" style="padding-bottom: 24px;" />
				</a>
			</td>
        </tr>
        <tr>
            <td width="700" valign="top" align="left" style="padding-bottom: 12px;" colspan="1"><a href="http://thedo.osteopathic.org"><img width="618" height="108" border="0" title="The DO | News and Features About Osteopathic Medicine" alt="The DO | News and Features About Osteopathic Medicine" src="https://images.magnetmail.net/images/clients/AOA_DOP/red_flag_cut.png" /></a></td>
        </tr>
        <tr>
            <td width="700" valign="top" align="center" style="text-transform: uppercase; padding: 5px; font-size: 13px; border-top: 1px dashed rgb(204, 204, 204); border-bottom: 1px dashed rgb(204, 204, 204); text-align: left; font-family: 'Lucida Sans','Lucida Grande','Lucida Sans Unicode',sans-serif;" colspan="1"><a style="text-decoration: none; color: rgb(101, 85, 74);" title="Patient Care" href="http://thedo.osteopathic.org/?cat=1000"><span style="color: rgb(101, 85, 74);">Patient Care</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="Your Practice" href="http://thedo.osteopathic.org/?cat=1100"><span style="color: rgb(101, 85, 74);">Your Practice</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="In Training" href="http://thedo.osteopathic.org/?cat=1200"><span style="color: rgb(101, 85, 74);">In Training</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="Opinion" href="http://thedo.osteopathic.org/?cat=1300"><span style="color: rgb(101, 85, 74);">Opinion</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none; color: rgb(101, 85, 74);" title="Briefly" href="http://thedo.osteopathic.org/?cat=1400"><span style="color: rgb(101, 85, 74);">Briefly</span></a></td>
        </tr>
    </tbody>
</table>
<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
    <!--BEGIN CONTENT AREA "TITLE"-->
    <tbody>
        <tr>
            <td width="400" valign="top" align="left" style="margin-bottom: 0px; color: rgb(34, 34, 34); font-size: 125%; font-weight: bold; padding-top: 12px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="1">Most recent posts: <?php echo $etoc_date; ?></td>
        </tr>
    </tbody>
</table>
<!--END CONTENT AREA "TITLE"-->	<!--BEGIN CONTENT AREA "SECTION"-->
<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
    <tbody>
      <tr>
        <td width="700" valign="top" align="left" style="font-weight: bold; text-transform: uppercase; color: rgb(101, 101, 101); padding: 25px 0px 4px 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="3">Features</td>
      </tr>
		<br />
		<br />
		<br />
		<br />
		<br />
	
      <tr>
        <td width="700" valign="top" align="left" style="font-weight: bold; text-transform: uppercase; color: rgb(101, 101, 101); padding: 25px 0px 4px 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="3">Opinion</td>
      </tr>

      <tr>
        <td width="700" valign="top" align="left" style="font-weight: bold; text-transform: uppercase; color: rgb(101, 101, 101); padding: 25px 0px 4px 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="3">News</td>
      </tr>
    </tbody>
    <tbody>


    </tbody>
</table>
<table width="700" cellspacing="0" cellpadding="0" border="0" style="background-color: rgb(255, 255, 255); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;">
    <tbody>
        <tr valign="top" align="center" style="padding-top: 12px;" colspan="3">
            <td width="700" valign="top" align="center" style="font-size: 14px; padding: 0px 0px 24px 0px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="5"><em>Got a news tip? A suggestion? A complaint? Let us know:</em> <a style="text-decoration: none; color: rgb(69, 104, 192);" href="mailto:thedo@osteopathic.org"><span style="color: rgb(69, 104, 192);">thedo@osteopathic.org</span></a></td>
        </tr>
        <tr valign="top" align="left" style="padding: 0px; margin: 0px;" width="100">
            <td valign="top" align="left" style="font-size: 11px; padding: 5px 0px 0px 0px; margin: 0px; border-top: 3px solid rgb(204, 204, 204); line-height: 15px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" colspan="1"><a style="text-decoration: none; color: rgb(69, 104, 192);" title="DO Jobs Online" href="DO Jobs Online" href="http://www.osteopathic.org/inside-aoa/development/do-jobs-online/Pages/default.aspx"><span style="color: rgb(69, 104, 192);">DO Jobs Online</span><br />
            </a> <a style="text-decoration: none; color: rgb(69, 104, 192);" title="DO Jobs in Print - <?php echo $jobs_month; ?> 2014" href="<?php echo $jobs_link ?>"><span style="color: rgb(69, 104, 192);">DO Jobs in Print</span><br />
            </a></td>
            <td width="500" valign="top" align="right" style="color: rgb(153, 153, 153); font-size: 11px; padding: 5px 0px 0px 0px; margin: 0px; border-top: 3px solid rgb(204, 204, 204); line-height: 15px;" colspan="1"><a style="text-decoration: none; color: rgb(153, 153, 153); font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;" title="AOA Homepage" href="http://www.osteopathic.org/"><span style="color: rgb(153, 153, 153);">&copy; American Osteopathic Association, 142 E. Ontario St., Chicago, IL 60611-2864<br />
            (800) 621-1773, ext. 8160</span></a></td>
            <td width="70" valign="center" align="right" style="padding-top: 5px; margin: 0px; border-top: 3px solid rgb(204, 204, 204); width: 0px;" colspan="1"><a title="AOA Homepage" href="http://www.osteopathic.org/"><img width="49" height="23" border="0" style="position: relative; top: 3px; padding-left: 6px;" title="American Osteopathic Association" alt="AOA logo" src="https://images.magnetmail.net/images/clients/AOA_DOP/aoa_logo.png" /></a></td>
        </tr>
        <tr valign="top" align="center" style="padding: 0px; margin: 0px;">
            <td> </td>
        </tr>
    </tbody>
</table>
</div>
			</textarea>
		</form>
	</body>
</html>

<?php
/*
This file is part of "Fox Joomla Extensions".

You can redistribute it and/or modify it under the terms of the GNU General Public License
GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html

You have the freedom:
	* to use this software for both commercial and non-commercial purposes
	* to share, copy, distribute and install this software and charge for it if you wish.
Under the following conditions:
	* You must attribute the work to the original author by leaving untouched the link "powered by",
	  except if you obtain a "registerd version" http://www.fox.ra.it/forum/14-licensing/151-remove-the-backlink-powered-by-fox-contact.html

Author: Demis Palma
Documentation at http://www.fox.ra.it/forum/2-documentation.html
*/

// no direct access
defined('_JEXEC') or die ('Restricted access'); ?>

<a name="<?php echo("mid_" . $module->id); ?>"></a>

<?php /* $params->get('moduleclass_sfx') is used in moduletable */ ?>
<div class="foxcontainer" style="width:<?php echo($params->get("formwidth") . $params->get("formunit")); ?> !important;">

<?php
// Page Subheading if needed
if (!empty($page_subheading))
	echo("<h2>" . $page_subheading . "</h2>" . PHP_EOL);
?>

<?php
if (count($messages))
	{
	echo('<ul class="fox_messages">');
	foreach ($messages as $message)
		{
		echo("<li>" . $message . "</li>");
		}
	echo("</ul>");
	}
?>

<?php if (!empty($form_text)) { ?>
<form enctype="multipart/form-data" class="foxform" id="FoxForm" action="<?php echo($link); ?>" method="post">
	<!-- <?php echo($app->scope . " " . $xml->version->data() . " " . $xml->license->data()); ?> -->
	<?php echo($form_text); ?>
</form>
<?php } ?>

</div>  

<script type="text/javascript">
function hideFoxForm(){
   var theForm = document.getElementById("FoxForm"); 
   var theDiv = theForm.getElementsByTagName("div"); 
   var divNum = theDiv.length - 1;
   var i=0;
   
   for (i=0;i<=divNum;i++) 
   {
      var theLink = theDiv[i].innerHTML;
	 
      if (theLink.search("http://www.fox.ra.it/")!=-1)
      {theDiv[i].style.display="none";} 
   }
}
hideFoxForm();
//<![CDATA[
HideCheckboxes();
InitializeDropdowns();
//]]>
</script>

<?php
// Debug
if ($app->getCfg("debug")) echo($fieldsBuilder->Dump());
?>

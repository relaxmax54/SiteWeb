<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#imgmap.title}</title>
	<script language="javascript" type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<!--[if gte IE 6]>
	<script language="javascript" type="text/javascript" src="jscripts/excanvas.js"></script>
	<![endif]-->
	<script language="javascript" type="text/javascript" src="jscripts/imgmap_packed.js"></script>
	<script language="javascript" type="text/javascript" src="jscripts/functions.js"></script>
	<link rel="stylesheet" href="css/imgmap.css" type="text/css"/>
	<meta http-equiv="imagetoolbar" content="no"/>
</head>
<body id="imgmap">
	<form id="img_area_form">
		<fieldset>
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">{#imgmap.legendetitle}</a>
			</legend>
			<div style="border-bottom: solid 1px #efefef">
			<table cellspacing="0" width="100%">
			<tr>
			<td width="110">
			<div id="button_container">
				<!-- buttons come here -->
				<img src="img/add.gif" onClick="myimgmap.addNewArea()" alt="{#imgmap.addnewarea}" title="{#imgmap.addnewarea}"/>
				<img src="img/delete.gif" onClick="myimgmap.removeArea(myimgmap.currentid)" alt="{#imgmap.delselecarea}" title="{#imgmap.delselecarea}"/>
				<img src="img/html.gif" onClick="gui_htmlShow()" alt="{#imgmap.getimagemaphtml}" title="{#imgmap.getimagemaphtml}"/>
			</div>
			</td>
			<td>
				<label for="dd_zoom">{#imgmap.zoom}</label>:
				<select onChange="gui_zoom(this)" id="dd_zoom">
				<option value='0.25'>25%</option>
				<option value='0.5'>50%</option>
				<option value='1' selected="1">100%</option>
				<option value='2'>200%</option>
				<option value='3'>300%</option>
				</select>
			</td>
			<td align="right" width="50%">
				<input type="checkbox" id="bb" onClick="toggleBoundingBox(this)"/><label for="bb">{#imgmap.showarround}</label>&nbsp;
				<select onChange="changelabeling(this)">
				<option value=''>{#imgmap.nodesc}</option>
				<option value='%n' selected='1'>{#imgmap.mapnbr}</option>
				<option value='%a'>{#imgmap.textalt}</option>
				<option value='%h'>{#imgmap.href}</option>
				<option value='%c'>{#imgmap.coords}</option>
				</select>
			</td>
			</tr>
			</table>			
			</div>
			<div id="form_container" style="clear: both;">
			<!-- form elements come here -->
		 	</div>
		</fieldset>
		<fieldset>
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">{#imgmap.image}</a>
			</legend>
			<div id="pic_container">
			</div>			
		</fieldset>
		<fieldset>
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">{#imgmap.statut}</a>
			</legend>
			<div id="status_container"></div>
		</fieldset>
		<fieldset id="fieldset_html" class="fieldset_off">
			<legend>
				<a onClick="toggleFieldset(this.parentNode.parentNode)">{#imgmap.code}</a>
			</legend>
			<div>
			<textarea id="html_container" xstyle="float: left; clear: left;"></textarea></div>
		</fieldset>

		<div class="mceActionPanel">
			<div style="float: left">
				<input type="button" id="insert" name="update" value="{#imgmap.update}" onClick="updateAction();" />
			</div>

			<div style="float: right">
				<input type="button" id="remove" class="button" style="background-position: 0px 0!important;" name="remove" value="{#imgmap.remove}" onClick="removeAction();" />
				<input type="button" id="cancel" name="cancel" value="{#imgmap.cancel}" onClick="cancelAction();" />
			</div>
		</div>
		
	</form>


<script type="text/javascript">

tinyMCEPopup.onInit.add(function() {
	init();
});

</script>

</body>
</html>

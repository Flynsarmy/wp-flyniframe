<!DOCTYPE html>
<head>
	<title>Create IFrame</title>
	<link rel="stylesheet" href="../../../../wp-admin/load-styles.php?c=0&dir=ltr&load=admin-bar,buttons,media-views,wp-admin,wp-auth-check&ver=3.6.1" />
	<link rel="stylesheet" href="../../../../wp-includes/css/editor.min.css?ver=3.6.1" />
	<style>body {min-width:0}</style>
	<script type="text/javascript" src="../../../../wp-admin/load-scripts.php?c=0&load%5B%5D=jquery-core,jquery-migrate,utils,json2&ver=3.6.1"></script>
	<script type="text/javascript" src="../../../../wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script type="text/javascript">
		var FlynIFrame = {
			e: '',
			init: function(e) {
				FlynIFrame.e = e;
				tinyMCEPopup.resizeToInnerSize();
			},
			insert: function createIFrameShortcode(e) {
				var attribs = jQuery('#wp-link :input').serializeArray()

				var output = '[iframe ';
				for ( i=0; i<attribs.length; i++ )
					output += attribs[i].name + '="' + attribs[i].value.replace('"', "'") + '" ';

				output += ']';

				tinyMCEPopup.execCommand('mceReplaceContent', false, output);

				tinyMCEPopup.close();
			}
		}
		tinyMCEPopup.onInit.add(FlynIFrame.init, FlynIFrame);
	</script>
</head>
<body class="wp-core-ui" style="margin:0;overflow-x:scroll">
	<div id="wp-link-wrap" class="wp-core-ui search-panel-visible" style="display:block;width:100%;left:0;margin:0;box-shadow:none">
		<form id="wp-link">
			<div id="link-selector" style="overflow:scroll;position:static">
				<div id="link-options">
					<div>
						<label><span>URL</span><input id="url" name="src" type="text"></label>
					</div>
					<div>
						<label><span>Width</span><input id="width" type="text" name="width"></label><br/>
						<label><span>&nbsp;</span><em>e.g. 400px or 100%</em></label>
					</div>
					<div>
						<label><span>Height</span><input id="height" type="text" name="height"></label><br/>
						<label><span>&nbsp;</span><em>e.g. 600px or 75%</em></label>
					</div>
					<div>
						<br/>
						<label>
							<span></span>
							<input type="checkbox" id="frameborder" name="frameborder" value="1"> Show the iframe border?
						</label>
						<br/><br/>
					</div>
					<div>
						<label><span>Scrollbars</span>
						<select id="scrolling" name="scrolling">
							<option value="auto">Auto</option>
							<option value="yes">Yes</option>
							<option value="yes">No</option>
						</select>
						<br/>
					</div>

					<div style="clear:both"></div>
				</div>
				<div style="clear:both"></div>
			</div>

			<div class="submitbox">
				<div id="wp-link-update">
					<input type="button" value="Add IFrame" class="button-primary" onclick="javascript:FlynIFrame.insert(FlynIFrame.e)">
				</div>
				<div id="wp-link-cancel">
					<a class="submitdelete deletion" href="#" onclick="tinyMCEPopup.close();">Cancel</a>
				</div>
			</div>

			<div style="clear:both"></div>
		</form>
	</div>

</body>
</html>
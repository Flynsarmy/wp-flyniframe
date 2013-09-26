(function() {
	tinymce.create('tinymce.plugins.FlynIFramePlugin', {
		init : function(ed, url) {
			ed.addCommand('flyniframe', function() {
				ed.windowManager.open({
					file : url + '/../partials/iframe.html',
					width : 600 + parseInt(ed.getLang('flyniframe.delta_width', 0)),
					height : 250 + parseInt(ed.getLang('flyniframe.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});
			ed.addButton('flyniframe', {title : 'IFrame', cmd : 'flyniframe', image: url + '/../images/iframe.png' });
		},
		getInfo : function() {
			return {
				longname : 'Flynsarmy IFrame Plugin',
				author : 'Flyn San',
				authorurl : 'http://www.flynsarmy.com',
				infourl : 'http://www.flynsarmy.com',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});
	tinymce.PluginManager.add('flyniframe', tinymce.plugins.FlynIFramePlugin);
})();
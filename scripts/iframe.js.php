(function() {
     tinymce.create('tinymce.plugins.FlynIFramePlugin', {
          init : function(ed, url) {
               ed.addCommand('flyniframe', function() {
                    ed.windowManager.open({
                         file : "<?= admin_url('admin-ajax.php?action=flyniframe_tinymce_modal') ?>",
                         width : 650 + parseInt(ed.getLang('flyniframe.delta_width', 0)),
                         height : 350 + parseInt(ed.getLang('flyniframe.delta_height', 0)),
                         inline : 1
                    }, {
                         plugin_url : url
                    });
               });
               ed.addButton('flyniframe', {title : 'IFrame', cmd : 'flyniframe', image: "<?= plugins_url('iframe.png', __DIR__.'/../index.php') ?>"});
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
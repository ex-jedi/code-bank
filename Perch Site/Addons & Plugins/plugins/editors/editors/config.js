Perch.UserConfig.redactor = function(){

  var get = function(profile, config, field) {

    return {
      buttons: ['link', 'format','ul', 'ol', 'bold', 'italic', 'deleted', 'source'  ],
      formatting: ['p', 'pre', 'h2', 'h3'],
      plugins:['source']
     }

    if (config.plugins.indexOf('source') === -1) config.plugins.push('source');
    if (config.plugins.indexOf('alignment') === -1) config.plugins.push('alignment');

    return config;
  };

  var load = function(cb) {
    if (typeof jQuery.Redactor.prototype.source == 'undefined') {
        jQuery.getScript(Perch.path+'/addons/plugins/editors/redactor-plugins/source.js', cb);
    } else {
      cb();
    }
  };

  return  {
    'get': get,
    'load': load
  }

}();
Perch.UserConfig.redactor = (function() {
  var get = function(profile, config, field) {
    config.plugins = [];
    config.buttons = ["html", "format", "bold", "italic", "lists", "link"];
    config.formatting = ["p", "h3", "h4"];

    return config;
  };

  var load = function(cb) {
    cb();
  };

  return {
    get: get,
    load: load
  };
})();

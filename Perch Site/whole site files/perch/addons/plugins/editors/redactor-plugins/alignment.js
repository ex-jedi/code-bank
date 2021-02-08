(function ($R) {
  $R.add('plugin', 'alignment', {
    translations: {
      en: {
        align: 'Align',
        'align-left': 'Align Left',
        'align-center': 'Align Center',
        'align-right': 'Align Right',
        'align-justify': 'Align Justify',
      },
    },
    init(app) {
      this.app = app;
      this.lang = app.lang;
      this.block = app.block;
      this.toolbar = app.toolbar;
    },
    // public
    start() {
      const dropdown = {};

      dropdown.left = { title: this.lang.get('align-left'), api: 'plugin.alignment.set', args: 'left' };
      dropdown.center = { title: this.lang.get('align-center'), api: 'plugin.alignment.set', args: 'center' };
      dropdown.right = { title: this.lang.get('align-right'), api: 'plugin.alignment.set', args: 'right' };
      dropdown.justify = { title: this.lang.get('align-justify'), api: 'plugin.alignment.set', args: 'justify' };

      const $button = this.toolbar.addButton('alignment', { title: this.lang.get('align') });
      $button.setIcon('<i class="re-icon-alignment"></i>');
      $button.setDropdown(dropdown);
    },
    set(type) {
      if (type === 'left') {
        return this._remove();
      }

      const args = {
        style: { 'text-align': type },
      };

      this.block.toggle(args);
    },

    // private
    _remove() {
      this.block.remove({ style: 'text-align' });
    },
  });
})(Redactor);

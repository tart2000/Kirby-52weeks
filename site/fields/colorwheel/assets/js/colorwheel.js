(function($) {

  var Colorwheel = function(element) {

    var self = this;

    // basic elements and stuff
    this.$colorwheel = $(element);
    this.$colors = this.$colorwheel.find('.color');
    this.forbiddenAccents = ['brown', 'blue_grey', 'grey'];
    this.$forbiddenAccents = $();
    this.$result = this.$colorwheel.find('.result');
    this.selection = [];
    this.maxCount = 2;

    this.onChecking = function() {
      self.$colors.on('change', function () {
        var $label = $(this);
        var $input = $(this).find('input');
        var color = $input.val();
        // limit the number of checked box
        if (self.$colorwheel.find(':checked').length > self.maxCount) {
          self.reset();
          $input.prop('checked', true);
        }
        if ($input.prop('checked')) {
          self.add(color);
        } else {
          self.remove(color);
        }
        self.toggleForbiddenAccents(color);
        self.updateLabels();
        self.result();
      });
    };

    this.reset = function () {
      self.$colorwheel.find(':checked').each(function () {
        $(this).prop('checked', false);
      });
      self.selection = [];
    }

    this.add = function (color) {
      self.selection.push(color);
    }

    this.remove = function (color) {
      var index = $.inArray(color, self.selection);
      self.selection.splice(index, 1);
    }

    this.toggleForbiddenAccents = function (selectedColor) {
      if (self.selection.length === 1) {
        self.$forbiddenAccents.each(function () {
          var $this = $(this);
          if($this.val() !== selectedColor) {
            $this.prop('disabled', true);
            $this.closest('label').addClass('disabled');
          }
        });
      } else {
        self.$forbiddenAccents.each(function () {
          var $this = $(this);
          $this.prop('disabled', false);
          $this.closest('label').removeClass('disabled');
        });
      }
    }

    this.updateLabels = function () {
      var labels = ['primary', 'accent'];

      self.$colorwheel.find('label.primary').removeClass('primary');
      self.$colorwheel.find('label.accent').removeClass('accent');
      self.selection.forEach(function (color, index) {
        var $label = self.$colorwheel.find('label.' + color);
        $label.addClass(labels[index]);
      });
    }

    this.result = function () {
      self.$result.val(self.selection.join(','));
    }

    // init
    this.init = function () {
      self.$forbiddenAccents = self.$colorwheel.find('.' + self.forbiddenAccents.join(', .')).find('input');

      if(self.$result.val() !== ''){
        var colors = self.$result.val().split(',');
        colors.forEach(function (color) {
          self.add(color);
        });
      }

      self.updateLabels();
      self.onChecking();
    };

    // start the plugin
    return this.init();

  };

  // jquery helper for the colorwheel
  $.fn.colorwheel = function() {
    return this.each(function() {

      if($(this).data('colorwheel')) {
        return $(this).data('colorwheel');
      } else {
        var colorwheel = new Colorwheel(this);
        $(this).data('colorwheel', colorwheel);
        return colorwheel;
      }

    });

  };

})(jQuery);

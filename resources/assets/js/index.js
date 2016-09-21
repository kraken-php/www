/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Get all dependencies
 * ---------------------------------------------------------------------------------------------------------------------
 */

window.$ = window.jQuery = require('jquery');
window.Tether = require('tether');
window.Bootstrap = require('bootstrap');
window.Chart = require('chart.js');

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Load local dependencies
 * ---------------------------------------------------------------------------------------------------------------------
 */

try {
    var App = require('./App');
}
catch (err) {
    throw new Error('One of modules could not be autoloaded because of error: ' + err + '.');
}

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Welcome message
 * ---------------------------------------------------------------------------------------------------------------------
 */

(function($) {
    'use strict';

    window.app = new App();

    $(document).ready(function () {
        try {
            window.app.init();
            console.log('Everyting is ok, page is ready using jQuery-' + $.fn.jquery + '.');
        }
        catch (err) {
            console.log('Page throwed an error: ' + err + '.');
        }
    });

    $(window).load(function() {
        try {
            window.app.load();
        }
        catch (err) {
            console.log('Page throwed an error: ' + err + '.');
        }
    });

})(jQuery);

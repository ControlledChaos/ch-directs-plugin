/* global jQuery, _CHDCustomizerReset, ajaxurl, wp */

jQuery(function ($) {
    var $container = $('#customize-header-actions');


    var $button = $('<input type="submit" name="chd-reset" id="chd-reset" class="button-secondary button">')
        .attr('value', _CHDCustomizerReset.reset)
        .css({
            'float': 'right',
            'margin-right': '10px',
            'margin-top': '9px'
        });

    $button.on('click', function (event) {
        event.preventDefault();

        var data = {
            wp_customize: 'on',
            action: 'customizer_reset',
            nonce: _CHDCustomizerReset.nonce.reset
        };

        var r = confirm(_CHDCustomizerReset.confirm);

        if (!r) return;

        $button.attr('disabled', 'disabled');

        $.post(ajaxurl, data, function () {
            wp.customize.state('saved').set(true);
            location.reload();
        });
    });

    $container.append($button);
});

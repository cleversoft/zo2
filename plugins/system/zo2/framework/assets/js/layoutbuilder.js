/**
 * Zo2 Layout builder
 * @param {type} w
 * @param {type} z
 * @param {type} $
 * @returns {undefined}
 */
(function(w, z, $) {

    /* Layout builder local */
    var _layoutbuilder = {
        /* Element selectors */
        _elements: {
            layoutBuilderContainer: '#layoutbuilder-container > #zo2-layoutbuilder',
            childrenContainer: '.children-container',
            sortableConnect: '.connectedSortable',
            sortableRow: '.sortable-row'
        },
        layoutJson: null,
        /**
         * Init function
         * @returns {undefined}
         */
        _init: function() {
            var _self = this;
            /* Move child rows */
            $(_self._elements.childrenContainer).sortable({
                placeholder: "sortable-hightligth",
                start: function(event, ui) {
                    ui.placeholder.height(ui.helper.outerHeight());
                    ui.placeholder.addClass(ui.item.attr('class'));
                    ui.placeholder.addClass('sortable-hightligth');
                },
                stop: function(event, ui) {
                    ui.placeholder.removeClass(ui.item.attr('class'));
                    ui.placeholder.removeClass('sortable-hightligth');
                },
                connectWith: _self._elements.sortableConnect
            }).disableSelection();
            /* Sort able parent row */
            $(_self._elements.layoutBuilderContainer).sortable({
                placeholder: "sortable-hightligth",
                start: function(event, ui) {
                    ui.placeholder.height(ui.helper.outerHeight());
                    ui.placeholder.addClass(ui.item.attr('class'));
                    ui.placeholder.addClass('sortable-hightligth');
                },
                stop: function(event, ui) {
                    ui.placeholder.removeClass(ui.item.attr('class'));
                    ui.placeholder.removeClass('sortable-hightligth');
                }
            }).disableSelection();
        },
        /**
         * Get JSON from layout builder
         * @returns {Array}
         */
        getLayoutJson: function() {
            this.layoutJson = [];
            this._getLayoutJson();
            return this.layoutJson;
        },
        /**
         * Add empty parent row
         * @returns {undefined}
         */
        addParentRow: function() {
            var html = '';
            html += '<div class="sortable-row  col-xs-12 col-sm-12 col-md-12 col-lg-12 row-parent" id="" data-zo2="{&quot;name&quot;:&quot;&quot;}">';
            html += '<div class="row-control">';
            html += '<div class="parent-container clearfix row">';
            html += '<div class="row-size">';
            html += '<a title="Decrease width" href="#" class="row-decrease"><i data-original-title="Decrease width" class="hasTooltip fa fa-angle-double-left"></i></a>';
            html += '<span class="column_size">1/1</span>';
            html += '<a title="Increase width" href="#" class="row-increase"><i data-original-title="Increase width" class="hasTooltip fa fa-angle-double-right"></i></a>';
            html += '</div>';
            html += '<div class="row-name">';
            html += '<span>(none)</span>';
            html += '</div>';
            html += '<div class="row-controls">';
            html += '<i title="" class="fa fa-plus row-control-icon add-row hasTooltip" data-original-title="addRow"></i>';
            html += '<i title="" class="fa fa-cog row-control-icon settings hasTooltip" data-original-title="settings"></i>';
            html += '<i title="" class="row-control-icon delete fa fa-remove hasTooltip" data-original-title="remove"></i>';
            html += '</div>';
            html += '</div>';
            html += '<div class="children-container row sortable-row connectedSortable ui-sortable">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $(this._elements.layoutBuilderContainer).find(this._elements.sortableRow + ':first').before(html);
        },
        /**
         * Internal get JSON
         * @param {jQuery object} $node
         * @param {array} parent
         * @returns {undefined}
         */
        _getLayoutJson: function($node, parent) {
            var _self = this;
            if (typeof ($node) == 'undefined') {
                $node = $(_self._elements.layoutBuilderContainer);
                parent = _self.layoutJson;
            } else {
                $node = $node.find(_self._elements.childrenContainer + ':first');
            }
            $.each($node.children(_self._elements.sortableRow), function() {
                if (typeof ($(this).data('zo2')) != 'undefined') {
                    parent.push($(this).data('zo2'));
                    parent[parent.length - 1].children = [];
                    _self._getLayoutJson($(this), parent[parent.length - 1].children);
                }
            });
        }
    };

    /* Append to Zo2 JS framework */
    z.layoutbuilder = _layoutbuilder;

    /* Init after document ready */
    $(w.document).ready(function() {
        z.layoutbuilder._init();
    });

})(window, zo2, jQuery);
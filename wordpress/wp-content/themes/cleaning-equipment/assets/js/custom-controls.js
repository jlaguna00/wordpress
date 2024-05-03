(function(api) {

    api.sectionConstructor['cleaning-equipment-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const cleaning_equipment_section_lists = ['banner', 'service'];
    cleaning_equipment_section_lists.forEach(cleaning_equipment_homepage_scroll);

    function cleaning_equipment_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('cleaning_equipment_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);
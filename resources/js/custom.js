$('document').ready(function() {
    $('.add_item').on('click', function () {
        var container = $(this).parent().find('.items');
        var item = container.find('.item').first().clone();
        item.find('input').val("");

        if (countItems(container) > container.data('max-items') - 1) {
            alert("Cannot add more items.");
            return;
        }
        
        item.appendTo(container);
        countItems(container);
    });

    $('.items').on('click', '.btn-remove', function () {
        var container = $(this).closest('.items')
        var item      = $(this).closest('.row');
        
        if (countItems(container) < 2) {
            alert("Cannot remove this item!");
            return;
        }
        item.remove();

        countItems(container);
    });

    function countItems(container) {
        var count = container.find('.item').length;
        container.parent().find('.title small').text("(" + count + ")");

        return count;
    }

    // Date picker
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });

    // Input mask
    $('.phone_us').mask('(000) 000-0000', {clearIfNotMatch: true});

    // Form validation
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#form-validation").validate();
});
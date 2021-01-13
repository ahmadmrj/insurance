$('document').ready(function() {
    $('.add_item').on('click', function () {
        var container = $(this).closest('.items');
        var item = container.find('.item').first().clone();
        item.find('input').val("");
        item.appendTo(container);
    });

    $('.items').on('click', '.btn-remove', function () {
        var item       = $(this).closest('.row');
        var firstItem  = item.is(':nth-child(2)');
        
        if (firstItem) {
            alert("Cannot remove this item!");
            return;
        }
        item.remove();
    });
});
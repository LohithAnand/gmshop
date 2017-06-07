jQuery(document).ready(function() {
    
    //register image popover
    jQuery(".imagePopOver").popover({
        html: true,
        trigger: 'hover',
        placement: 'right',
        content: function () {
            var id = $(this).data('id') + "";
            return '<img src="/gmshop/storage/images/' + id.toLowerCase() + '.jpg" style="height: 250px;width:250px;"/>';
        }
    });
    
    //raty
    jQuery('.raty').each(function() {
       jQuery(this).raty({
           score: jQuery(this).data('score'),
           readOnly: true,
           starHalf     : '/gmshop/layouts/basic/libraries/raty/images/star-half.png',
    starOff      : '/gmshop/layouts/basic/libraries/raty/images/star-off.png',
    starOn       : '/gmshop/layouts/basic/libraries/raty/images/star-on.png',
       });
    });
    
    //register delete
    jQuery(".main-container").on("click", ".deleteItem", function(e) {
        var currentTarget = jQuery(e.currentTarget);
        bootbox.confirm({
            message: "Are you sure you want to delete the item?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-danger'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-default'
                }
            },
            callback: function (result) {
                if(result) {
                    var mode = currentTarget.data("mode");
                    var id = currentTarget.data("itemId");
                    $.ajax({
                        url: "index.php",
                        method: "POST",
                        data: {
                            action: "Delete",
                            id: id,
                            mode: mode
                        },
                        dataType: "html"
                    }).done(function (msg) {
                        currentTarget.closest('tr').remove();
                    });
                }
            }
        });
    });
});
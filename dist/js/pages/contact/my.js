$(document).ready(function() {
    $('#delete-btn').on('click', function(event) {
        console.log("Clicked")

        var delete_id = $(this).attr('data-id');
        console.log(delete_id);
    })
});


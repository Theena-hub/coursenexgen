$(document).ready(function () {
    // enquiry add - start
    $(".enquiryForm").submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'backend-enquiry.php',
            data: formData,
            success: function (response) {
                var result = JSON.parse(response);
                alert(result.message);
                location.reload();
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    // enquiry add - end
    // enquiry delete - start
    ('.delete-btn').on('click', function () {
        var id = $(this).data('id');
        if (confirm('Are You Sure You Want to Delete this Enquiry Message?')) {
            $.ajax({
                method: "POST",
                url: 'backend-enquiry.php',
                data: { req_type: 'delete', id: id },
                success: function (response) {
                    var result = JSON.parse(response);
                    alert(result.message);
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.log('Error:', xhr.responseText); // Log the specific error message
                }
            });
        }
    });    
    // enquiry delete - end
});
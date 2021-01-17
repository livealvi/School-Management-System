// $(document).ready(function () {
//     $("#load_button").on("click", function (e) {
//         $.ajax({
//             url: "ajax-load.php",
//             type: "POST",
//             success: function (data) {
//                 $("#table-data").html(data);
//             }
//         });
//     });
// });


$(document).ready(function () {
    // load-students-list
    function loadTable() {
        $.ajax({
            url: "ajax-load.php",
            type: "POST",
            success: function (data) {
                $("#load-table").html(data);
            }
        });
    }
    loadTable();


    $(document).on("click", ".delete-button", function () {
        var studentID = $(this).data("id");
        var element = this;
        $.ajax({
            url: "ajax-del.php",
            type: "POST",
            data: {
                id: studentID
            },
            success: function (data) {
                if (data == 1) {
                    $(element).closest("tr").fadeOut();
                    $("#success-message").slideUp();
                } else {
                    $("#error-message").html("Can't Delete Record.").slideDown();
                    $("#success-message").slideUp();
                }
            }
        });
    });

});



// delete-student-list
$(document).ready(function() {
    $(".datemask").inputmask("dd-mm-yyyy", { placeholder: "dd-mm-yyyy" });

    $("#form-edit-data").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: "post",
            url: site_url + "/Employee/goUpdate",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                Toast.fire({
                    icon: response["type"],
                    title: response["message"],
                });
            },
            error: function() {
                Toast.fire({
                    icon: "error",
                    title: "Oops, looks like something went wrong, try again.",
                });
            },
        });
    });
});
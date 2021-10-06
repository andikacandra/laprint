$(document).ready(function() {
    $(".datemask").inputmask("dd-mm-yyyy", { placeholder: "dd-mm-yyyy" });

    $("#form-add-data").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: "post",
            url: site_url + "/Employee/goInsert",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                Toast.fire({
                    icon: response["type"],
                    title: response["message"],
                });
                $('button[type="reset"]').trigger("click");
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
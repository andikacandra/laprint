$(document).ready(function() {
    $(".select2").select2();
    $(".datemask").inputmask("dd-mm-yyyy", { placeholder: "dd-mm-yyyy" });

    $('button[type="reset"]').click(function() {
        $('select[name="employee"]').val("");
        $('select[name="employee"]').select2("destroy");
        $('select[name="employee"]').select2();
    });

    $('select[name="employee"]').change(function(e) {
        e.preventDefault();
        var employee = $(this).find(":selected").val();

        $.ajax({
            type: "post",
            url: site_url + "/EmployeeLeave/getRemainingDaysOff",
            data: { employee: employee },
            dataType: "json",
            success: function(response) {
                console.log(response);
                $('input[name="remaining_days_off"]').val(response);
            },
        });
    });

    $("#form-add-data").submit(function(e) {
        e.preventDefault();

        var remaining = parseInt($('input[name="remaining_days_off"]').val());
        var long_leave = parseInt($('input[name="long_leave"]').val());

        if (remaining != 0 && long_leave <= remaining) {
            $.ajax({
                type: "post",
                url: site_url + "/EmployeeLeave/goInsert",
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
        } else {
            if (remaining == 0) {
                Toast.fire({
                    icon: "error",
                    title: "This employee has no remaining leave.",
                });
            } else {
                Toast.fire({
                    icon: "error",
                    title: "The Long leave cannot be greater than the remaining days off.",
                });
            }
        }
    });
});
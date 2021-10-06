$(document).ready(function() {
    $(".select2").select2();
    $(".datemask").inputmask("dd-mm-yyyy", { placeholder: "dd-mm-yyyy" });
    getRemainingDaysOff();

    $("#form-add-data").submit(function(e) {
        e.preventDefault();

        var remaining = parseInt($('input[name="remaining_days_off"]').val());
        var long_leave = parseInt($('input[name="long_leave"]').val());

        if (remaining != 0 && long_leave <= remaining) {
            $.ajax({
                type: "post",
                url: site_url + "/EmployeeLeave/goUpdate",
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

function getRemainingDaysOff() {
    var employee = $('input[name="employee"]').val();

    $.ajax({
        type: "post",
        url: site_url + "/EmployeeLeave/getRemainingDaysOff",
        data: { employee: employee },
        dataType: "json",
        success: function(response) {
            var long_leave = parseInt($('input[name="long_leave"]').val());
            $('input[name="remaining_days_off"]').val(
                parseInt(long_leave) + parseInt(response)
            );
        },
    });
}
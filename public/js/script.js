function paymentType(value) {
    if (value === "Cheque payment") {
        console.log(value)
        document.getElementById('cheque-details').style.display = "block"
    }
    else {
        console.log(value)
        document.getElementById('cheque-details').style.display = "none"
    }
}
function paymentType1(value) {
    if (value === "Cheque payment") {
        console.log(value)
        document.getElementById('cheque-detail').style.display = "block"
    }
    else {
        console.log(value)
        document.getElementById('cheque-detail').style.display = "none"
    }
}

$(document).ready(function () {
    $('.detail-btn').click(function () {
        const id = $(this).attr('data-id');
        $.ajax({
            url: 'daily-collection/' + id,
            type: 'GET',
            data: {
                "id": id
            },
            success: function (data) {
                console.log(data);
                // $('#loan_id').html(data.id);
                $('#loan_id').val(data.id);
                $('#due_amount').val(data.due_amount);
                $('#due_date').val(data.due_date);
                $('#maturity_date').val(data.maturity_date);
                $('#borrower').val(data.borrower);

            }
        })
    });

});

function amount() {
    if ($('#amount_paid').val().length > 0) {
        var total = $('#due_amount').val() - $('#amount_paid').val()
        $('#total_balance').val(total.toFixed(3))
        $('#short_over').val(total.toFixed(3))
    }
    else {
        $('#total_balance').val("")
        $('#short_over').val("")
    }
}
s
function loanCompany(value) {
    if (value == 'EQ Grant') {
        $('[name="loan_company_id"]').val("EQ-")
    }
    else {
        $('[name="loan_company_id"]').val("ALPHA-")
    }
}


$(document).ready(function () {
    $('#amount_paid').on("change keyup paste", function () {
        amount();
    });


})

function showAlert() {
    var myText = "Save Success";
    alert (myText);
  }

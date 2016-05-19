function ajaxSearch(){
    var input_data = $('#search_data').val();
    if(input_data.length === 0){
        $('#suggestions').hide();
    }else{
        var post_data = {
            'search_data' : input_data,
            '<?php echo $this->security->get_csrf_token_name();?>' :  '<?php echo $this->security->get_csrf_has();?>'
        };
        $.ajax({
            type: 'POST',
            url: base_url+"SearchControl/autoComplete/",
            data: post_data,
            success: function (data) {
                if(data.length > 0){
                    $('#suggestions').show();
                    $('#autoSuggestionsList').addClass('auto_list');
                    $('#autoSuggestionsList').html(data);
                }
            }
        });
    }
}

function selectFormKumE(){
    var value = $('#radio').val();
    $.ajax({
        type: 'POST',
        url : base_url+"KumEControl/showKomponenKegiatan/",
        data : {'id' : value},
        success: function (data) {
            $('#komponen_kegiatan').html(data);
        }
    });
}

$(document).ready(function() {
    $('#embeddingDatePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Set the value for the date input
            $("#selectedDate").val($("#embeddingDatePicker").datepicker('getFormattedDate'));

            // Revalidate it
            $('#eventForm').formValidation('revalidateField', 'selectedDate');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            selectedDate: {
                // The hidden input will not be ignored
                excluded: false,
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});

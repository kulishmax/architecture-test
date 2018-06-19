jQuery(document).ready(function($) {
	
	$('#add-author').on('click', function(e) {
		e.preventDefault();
		var id = uniqueId();
		var block = $('.clonable').clone().removeClass('clonable').css('display', 'block');
		block.find('input, textarea').each(function(index, item) {
			$(item).attr('name', $(item).attr('name') + id);
		});
		block.insertBefore($('#add-author'));
	});
	$(document).on('click', '.delete-author', function(e){
		e.preventDefault();
        deleteAuthor(e);
    })

	function deleteAuthor(e) {
	 	$(e.target).parent().remove();
    }

	function uniqueId() {
		return '_' + Math.random().toString(36).substr(2, 9);
	}

    $("#save_price_tickets").click( function(e){
    	e.preventDefault();
        var jun_ear = $('input#jun_ear').val();
        var jun_reg = $('input#jun_reg').val();
        var jun_late = $( 'input#jun_late' ).val();
        var sen_ear = $('input#sen_ear').val();
        var sen_reg = $('input#sen_reg').val();
        var sen_late = $( 'input#sen_late' ).val();
        var exec_ear = $('input#exec_ear').val();
        var exec_reg = $('input#exec_reg').val();
        var exec_late = $( 'input#exec_late' ).val();
        var merchantAccount = $( 'input#merchantAccount' ).val();
        var merchantSecretKey = $( 'input#merchantSecretKey' ).val();
        $.ajax({
            method: 'post',
            url: location.origin + '\/wp-admin\/admin-ajax.php',
            data: {
                action: 'save_tickets',
                jun_ear: jun_ear,
                jun_reg: jun_reg,
                jun_late: jun_late,
                sen_ear: sen_ear,
                sen_reg: sen_reg,
                sen_late: sen_late,
                exec_ear: exec_ear,
                exec_reg: exec_reg,
                exec_late: exec_late,
                merchantAccount: merchantAccount,
                merchantSecretKey: merchantSecretKey
            },
            success: function(response) {
            	$('#save_res').empty();
                $('#save_res').append('<h4>Данные сохранены</h4>');
            },
            error: function(response) {
                $('#save_res').append('<h4 style="color:red;">Ошибка при сохранении</h4>');
            } 
        })
 
    });

});
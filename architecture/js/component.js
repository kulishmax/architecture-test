'use strict'

//Component
var $ = jQuery;

	
	//ОТПРАВКА ДАННЫХ НА СЕРВЕР/ options={key:val}
	jQuery.extend({

		/*
		options = {
				url: '/admin/card/update',
				data: data,
				processData: false,
				contentType: false
			}
			$.myajax( options, function(dataObj){
				
			})				
			data: JSON.stringify(data_tickets),
		*/
		myajax : function(options, callback) {
			var settings = {
				method: 'POST',
				success: function(response) {
					// if ( typeof response == 'string' ) {
					// 	response = JSON.parse(response);
					// }
					callback(response);		
				},
				error: function(response) {
				},
			}
			$.ajax($.extend(settings, options));
		},
		mysetCookie : function (name, value, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = name + "=" + value + ";" + expires + ";path=/";
		},
		mygetCookie : function(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
	});

	//ПРОВЕРКА ЕЛЕМЕНТОВ ФОРМЫ
	$.fn.check = function(regexps) {
		var el = $(this)
		if(el.length == 0){
			return
		}
		var error = false;
		$.each(el,function(index) {
			var type = $(this).attr('type');
			var tagName = $(this).prop('tagName');
			var fieldset = $(this).closest('fieldset');
			var label = fieldset.find('label');
			
			if(type == 'checkbox'){
				if( !fieldset.find('[type="checkbox"]:checked').length ){
					$(this).parent(label).addClass('error_checkbox');
					error = true;
				}
				else{
					$(this).parent(label).removeClass('error_checkbox');
				}
			}
			else if(type == 'radio'){
				if( !fieldset.find('[type="radio"]:checked').length ){
					$(this).siblings(label).addClass('error_radio');
					error = true;
				}
				else{
					$(this).siblings(label).removeClass('error_radio');
				}
			}
			else if(tagName == 'OPTION'){
				if( !$('select').find('option:selected').length ){
					$(this).closest('select').addClass('error_fill');
					$(this).closest('select').siblings('.ui-selectmenu-button').addClass('error_fill');
					error = true;
				}
				else{
					$(this).closest('select').removeClass('error_fill');
					$(this).closest('select').siblings('.ui-selectmenu-button').removeClass('error_fill');
				}
			}
			else if(tagName == 'SELECT'){
				if( !$(this).val() ){
					$(this).siblings('.ui-selectmenu-button').addClass('error_fill');
					$(this).addClass('error_fill');
					error = true;
				}
				else{
					$(this).siblings('.ui-selectmenu-button').removeClass('error_fill');
					$(this).removeClass('error_fill');
				}
			}
			else{
				var data_type = $(this).attr('data-type');

				if( !regexps[$(this).data('type')].test(this.value) ){
					$(this).addClass('error-input');
					error = true;
				}
				else{
					$(this).removeClass('error-input');
				}
			}
		})
		return error;
	}

	//ПОКАЗ ТЕКУЩЕГО ЭЛЕМЕНТА ИЗ СПИСКА ЕЛЕМЕНТОВ
	$.fn.showEl = function(elems) {
		var curEl = $(this);
		curEl.show().css("display", "block");
		var notCurEl = elems.not(curEl);
		notCurEl.hide();
	}	

	//ПРОВЕРЯЕТ ВИСИТ ЛИ СЛУШАТЕЛЬ НА ЭЛЕМЕНТЕ
	$.fn.hasEvent = function(eventType) {
		var events
		var ret = false 
		function eventsList(element) {
            // В разных версиях jQuery список событий получается по-разному
            var events = element.data('events');
            if (events !== undefined) return events;

            events = $.data(element, 'events');
            if (events !== undefined) return events;

            events = $._data(element, 'events');
            if (events !== undefined) return events;

            events = $._data(element[0], 'events');
            if (events !== undefined) return events;

            return false;
        }
        events = eventsList(this);
        if (events) {
        	$.each(events, function(evName, e) {
        		if (evName == eventType) {
        			ret = true;
        		}
        	});
        }
        return ret;
    }

	//ПРОВЕРКА НА ИДЕНТИЧНОСТЬ ВВЕДЕННЫХ ДАННЫХ С ТЕМИ КОТОРЫЕ ДОЛЖНЫ БЫТЬ. (ПРОВЕРКА НА СОВПАДЕНИЕ) ЕЛЕМЕНТОВ ФОРМЫ
	$.fn.checkUniform = function(data) {
		var el = $(this)
		var error = true
		if(el.length == 0){return}
			if (data == ''){
				error = true
				el.addClass('error-input')
			}
			else if ( el.val() != data){
				el.addClass('error-input')
				error = true
			}
			else {
				el.removeClass('error-input')
				error = false
			}
			return error
		}


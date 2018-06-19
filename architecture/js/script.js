jQuery(document).ready(function($) {

	// //Function for language switching
	// $('#ru-switch').click(function() {
	// 	$('.ru-text').show();
	// 	$('.en-text').hide();
	// });

	// $('#en-switch').click(function() {
	// 	$('.ru-text').hide();
	// 	$('.en-text').show();
	// });

	//Functions for the stub form block
	setTimeout(function() {
		$('#form-footer').css('bottom', '0');
	}, 5000);

	$('.close-btn').click(function() {
		$('#form-footer').css('bottom', '-200px');
	});

	$('.show_program').click(function(e){
		e.preventDefault();
		$(this).parent().find('table').find('tr').fadeIn('slow');
		$(this).hide();
	});

	$('header a[href^="#"]').not('.lang_switcher a').click( function (e) {
		e.preventDefault();

		$('header a[href^="#"]').not('.lang_switcher a').not('.buy_ticket a').removeClass('selected_item');
		if ( !$(this).parents('.buy_ticket').length )  $(this).addClass('selected_item');
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 50
		}, 1000);
	});

	// $('.lang_switcher a').click( function (e) {
	// 	//e.preventDefault();
	// })

	$('.buy_ticket a').click( function(e){
		e.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 50
		}, 1000);
	});

/*	if ($('.reasons_wrap_item_img').length) {
	$('.reasons_wrap_item_img').css('background-position', $('.reasons_wrap_item_img').offset().left + 'px 50%');*/

	/*	$(window).resize(function() {
			console.log('resize');
			$('.reasons_wrap_item_img').css('background-position', $('.reasons_wrap_item_img').offset().left + 'px 50%');
		});*/


		/*------Function for switch-number------*/

		function changeNumb() {
			var Value = $("#number").val();

			if( $(this).hasClass('btn_more') ) {
				$("#number").val(++Value);
			}
			else {
				$("#number").val(--Value);
			}
		}; 

		$(".btn_more").on("click",changeNumb)
		$(".btn_less").on("click",changeNumb)


		$('#blog-load-more').on('click', function(e) {
			e.preventDefault();
			var button = $(this);
			var offset = button.data('offset');
			var increment = button.data('offsetincrement');
			button.addClass('inactive');
			button.find('span.default').hide();
			button.find('span.loading').show();

			$.ajax({
				method: 'post',
				url: arch_ajax_object.ajaxurl,
				data: {
					action: 'arch_get_more_posts',
					offset: offset
				},
				success: function(response) {
				// console.log(response);
				button.data('offset', offset + increment);
				if (response == '') {
					button.hide();
				} else {
					if ($(response).find('.post-block').length < increment) {
						button.hide();
					}
					$('<div class="container"><div class="row">' + response + '</div></div>').insertBefore(button.parent().parent());
				}
				button.removeClass('inactive');
				button.find('span.default').show();
				button.find('span.loading').hide();
			},
			error: function(response) {
				// console.log(response);
			}
		});
		});

		/*------Function for show Thanks form------*/

		$('.arch_button').click(function() {
			$('.thanks_form').css('display', 'flex');
			$('.become-speaker_wrap, .become-partner_container').css('display', 'none');
		});	

		/*------Functions "Move images - paralax"------*/

		var topPos1 = $('.item_img1').offset().top;
		var topPos2 = $('.item_img2').offset().top;
		var topPos3 = $('.item_img3').offset().top;
		var topPos4 = $('.item_img4').offset().top;
		var topPos5 = $('.item_img5').offset().top;
		var topPos6 = $('.item_img6').offset().top;
		var wh = window.innerHeight;
		let tickets = []
		let data_tickets = {}
		var course;
		$.getJSON( "https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11", function( data ) {
			$.each( data, function( key, val ) {
				if (val['ccy'] == 'USD'){
					course = val['sale']; 
					
				}
			});
		});
		
		$(window).scroll(function() {
			if($(window).scrollTop() > topPos1-200){
				$('#number-img1').css('top', '70px');
				$('#el-circle').addClass('el-circle-start-active');
				$('#el-circle').removeClass('el-circle-end-active');
			}else if($(window).scrollTop() < topPos1){
				$('#number-img1').css('top', '20px');
				$('#el-circle').removeClass('el-circle-start-active');
				$('#el-circle').addClass('el-circle-end-active');
			}

			if($(window).scrollTop() > topPos2-300){
				$('#number-img2').css('top', '70px');
				$('#el-circle-half').addClass('el-circle-half-start-active');
				$('#el-circle-half').removeClass('el-circle-half-end-active');
			}else if($(window).scrollTop() < topPos2){
				$('#number-img2').css('top', '20px');
				$('#el-circle-half').addClass('el-circle-half-end-active');
				$('#el-circle-half').removeClass('el-circle-half-start-active');
			}

			if($(window).scrollTop() > topPos3-300){
				$('#number-img3').css('top', '70px');
				$('#el-square').addClass('el-square-start-active');
				$('#el-square').removeClass('el-square-end-active');
			}
			else if($(window).scrollTop() < topPos3){
				$('#number-img3').css('top', '20px');
				$('#el-square').addClass('el-square-end-active');
				$('#el-square').removeClass('el-square-start-active');
			}

			if($(window).scrollTop() > topPos4-300){
				$('#number-img4').css('top', '70px');
				$('#el-circle-half2').addClass('el-circle-half2-start-active');
				$('#el-circle-half2').removeClass('el-circle-half2-end-active');
			}
			else if($(window).scrollTop() < topPos4){
				$('#number-img4').css('top', '20px');
				$('#el-circle-half2').addClass('el-circle-half2-end-active');
				$('#el-circle-half2').removeClass('el-circle-half2-start-active');
			}

			if($(window).scrollTop() > topPos5-300){
				$('#number-img5').css('top', '70px');
				$('#el-square-yel').addClass('el-square-yel-start-active');
				$('#el-square-yel').removeClass('el-square-yel-end-active');
			}else if($(window).scrollTop() < topPos5){
				$('#number-img5').css('top', '20px');
				$('#el-square-yel').addClass('el-square-yel-end-active');
				$('#el-square-yel').removeClass('el-square-yel-start-active');
			}

			if($(window).scrollTop() > topPos6-300){
				$('#number-img6').css('top', '70px');
				$('#el-circle-bl').addClass('el-circle-bl-start-active');
				$('#el-circle-bl').removeClass('el-circle-bl-end-active');
			}else if($(window).scrollTop() < topPos6){
				$('#number-img6').css('top', '20px');
				$('#el-circle-bl').addClass('el-circle-bl-end-active');
				$('#el-circle-bl').removeClass('el-circle-bl-start-active');
			}
		});

		/*------Function for show buyticket-block------*/


		$('.buyticket-close').click(function() {
			$('#buyticket').toggle();
			$('.body-color').removeClass('body-color-active');
			cleanBayTickets()
		});	

		$('.buy_btn').on('click', showTicketsBlank);
		$('.add-ticket').on('click', addTickets);
		$('#first-step').on('click', showTickets)
		$('#second-step').on('click', showMainPaymentForm)
		$('#third-step').on('click', showSuccessful)

		function cleanBayTickets() {
			tickets.length = 0;
			$('.all-tickets').remove()
			updateOrderForm()			
		}

		function showTicketsBlank() {
			$('.buyticket_right_footer').css({'display': 'block'})
			$('#buyticket').toggle();
			$('.body-color').addClass('body-color-active');

			$('.btn_step_show').eq(0).showEl($('.btn_step_show'))
			$('.form_main_block').eq(0).showEl($('.form_main_block'))

			$('.step_block_inner').removeClass('step_block_inner_ok')
			$('.step_block_inner').removeClass('step_block_inner_active')
			$('.step_block_inner').eq(0).addClass('step_block_inner_active')

			$('.numb-tickets').html(`<p class="ticket-total">0 ${(window.lang == 'ru') ? 'билетов' : 'ticket'}</p>`)			
		}

		function addTickets() {
			$('.buyticket_right_footer').css({'display': 'block'})
			$('.btn_step_show').eq(0).showEl($('.btn_step_show'))
			$('.form_main_block').eq(1).showEl($('.form_main_block'))

			$('.step_block_inner').removeClass('step_block_inner_ok')
			$('.step_block_inner').removeClass('step_block_inner_active')
			$('.step_block_inner').eq(0).addClass('step_block_inner_active')

			var studentText = ($(this).closest('.buyticket_left_main_inner').find('.for-student').length) ? $(this).closest('.buyticket_left_main_inner').find('.for-student').html() : ' ';

			var id = $(this).data('id');

			tickets.push({'id' : $(this).data('id'), 'title' : $(this).data('title'), 'price' : $(this).data('price')})

			tickets.some(function(ticket, i){
				if (ticket.id == id) {
					var item = $(`<div class="all-tickets" data-id="${ticket.id}"><h1>${ticket.title}</h1><p>${studentText}</p><p class="price">${ticket.price} $</p><div class="del-icon"></div></div>`)

					$('#tickets-list').append(item)

					item.find('.del-icon').on('click', removeTickets);
					return true
				}
				return false
			})

			$('.btn_step_show').eq(0).showEl($('.btn_step_show'))
			$('.form_block').eq(1).showEl($('.form_block'))

			$('.step_block_inner').removeClass('step_block_inner_ok')
			$('.step_block_inner').removeClass('step_block_inner_active')
			$('.step_block_inner').eq(0).addClass('step_block_inner_active')
			
			updateOrderForm();
		}

		function removeTickets() {	
			var id = $(this).closest('.all-tickets').data('id')		
			
			tickets.some(function(ticket, i){
				if (ticket.id == id) {
					tickets.splice(i, 1)
					return true
				}
				return false
			})
			
			$(this).closest('.all-tickets').remove()
			
			updateOrderForm();				
		}

		function ending(quantity) {
			var ending = ''
			if(window.lang == 'ru') {
				if (quantity == 11 || quantity == 12 || quantity == 13 || quantity == 14) {
					ending = 'тов'
				} else {
					var lastDigit = quantity.toString().split('').pop();
					switch (lastDigit) {
						case '1':
						ending = 'т';
						break;
						case '2':
						case '3':
						case '4':
						ending = 'та';
						break;
						default:
						ending = 'тов';
						break;
					}
				}
				// return ending				
			} else {
				if(quantity == 0 || quantity == 1){
					ending = ''
				} else {
					ending = 's'
				}
			}
			return ending
		};

		function updateOrderForm() {
			var totalSum = 0;
			var totalTickets = 0;
			
			let ticketTypes = {
				junior: {
					'sum' : 0
					,'quantity' : 0
				},
				senior: {
					'sum' : 0
					,'quantity' : 0
				},
				executive: {
					'sum' : 0
					,'quantity' : 0
				}
			}
			
			$.each(tickets, function(index, ticket) {
				var property = ticket.id;

				totalSum += ticket.price;
				totalTickets += 1;
				ticketTypes[property].quantity += 1;
				ticketTypes[property].sum += ticket.price;
			});

			if (totalTickets == 0) {
				$('.numb-tickets').html(`<p class="ticket-total">0 ${(window.lang == 'ru') ? 'билетов' : 'ticket'}</p>`)

			}
			var endingTotalTickets = ending(totalTickets)
			var endingTotalJuniors = ending(ticketTypes.junior.quantity)
			var endingTotalSeniors = ending(ticketTypes.senior.quantity)
			var endingTotalExecutives = ending(ticketTypes.executive.quantity)			

			if (totalTickets) {
				$('.numb-tickets').html(`<p class="ticket-total">${totalTickets} ${(window.lang == 'ru') ? 'биле' + endingTotalTickets : 'ticket' + endingTotalTickets} : </p><p>${ticketTypes.junior.quantity} Junior</p><p>${ticketTypes.senior.quantity} Senior</p><p>${ticketTypes.executive.quantity} Executive</p>`);
				$('.sum-total').html(totalSum + '$');

				$('.category-ticket').html(`<div class="junior-ticket"><p><span>${ticketTypes.junior.quantity}</span> ${(window.lang == 'ru') ? 'биле' + endingTotalJuniors : 'ticket' + endingTotalJuniors}: Junior</p><p>${ticketTypes.junior.sum} $</p></div><div class="senior-ticket"><p><span>${ticketTypes.senior.quantity}</span> ${(window.lang == 'ru') ? 'биле' + endingTotalSeniors : 'ticket' + endingTotalSeniors}: Senior</p><p>${ticketTypes.senior.sum} $</p></div><div class="executive-ticket"><p><span>${ticketTypes.executive.quantity}</span> ${(window.lang == 'ru') ? 'биле' + endingTotalExecutives : 'ticket' + endingTotalExecutives}: Executive</p><p>${ticketTypes.executive.sum} $</p></div>`)
			}else {
				$('.numb-tickets').html(`<p class="ticket-total">0 ${(window.lang == 'ru') ? 'билетов' : 'ticket'}</p>`)
				$('.sum-total').html(0 + ' $ ');
				$('#blank-ticket').css('display', 'block');
				$('#tickets-list').hide();

				$('.category-ticket').html('')
			}
			data_tickets.totalSum = totalSum
			data_tickets.totalTickets = totalTickets
			data_tickets.ticketTypes = ticketTypes
		}

		function showTickets() {
			if(tickets.length){
				var regexps = {
					'check' : {
						'text' : /^[A-Za-z0-9А-Яа-яЇїҐґЁё \_\-\.\,\?\!\(\)\:\/\&\'\"\;`\(\)]{1,200}$/,
						'age' : /^[0-9]{1,3}$/,
						'phone' : /^[0-9\_\-\.\\\/\(\)]{1,200}$/
					},
					'lang' : {
						'ru' : {
							'firstName' : 'Имя',
							'lastName'  : 'Фамилия',
							'tel' 		: 'Телефон',
							'company' 	: 'Компания',
							'position' 	: 'Должность',
							'age' 		: 'Возраст',
							'condition' : 'Согласиться с условиями использования',
							'dispatch' 	: 'Подписаться на рассылку'
						},
						'en' : {
							'firstName' : 'Name',
							'lastName' 	: 'Surname',
							'tel' 		: 'Phone',
							'company' 	: 'Company',
							'position' 	: 'Position',
							'age' 		: 'Age',
							'condition' : 'Agree to the terms of use',
							'dispatch' 	: 'Subscribe to newsletter'
						}
					}		
				}
				
				$('.category-block').html('')
				$('.form-block').html('')				
				$.each(tickets,function(i, ticket) {
					$('.category-block').append(`<div class="category-item"><span class="category-item-number">${i+1}</span><span class="category-item-name">${ticket.title}</span><span class="ok"></span></div>`);
					$('.form-block').append(`
						<form class="ticket_form" id="form_${ticket.title + i}">
						<input data-type="text" value="${(ticket.firstName) ? ticket.firstName : ''}" type="text" name="firstName" placeholder="${(window.lang == 'ru') ? regexps.lang.ru.firstName : regexps.lang.en.firstName}">
						<input data-type="text" type="text" name="lastName" value="${(ticket.lastName) ? ticket.lastName : ''}" placeholder="${(window.lang == 'ru') ? regexps.lang.ru.lastName : regexps.lang.en.lastName}">
						<input data-type="phone" type="tel" name="tel" value="${(ticket.tel) ? ticket.tel : ''}" placeholder="${(window.lang == 'ru') ? regexps.lang.ru.tel : regexps.lang.en.tel}">
						<input type="text" data-type="text" name="company" value="${(ticket.company) ? ticket.company : ''}" placeholder="${(window.lang == 'ru') ? regexps.lang.ru.company : regexps.lang.en.company}">
						<input data-type="text" type="text" class="position" name="position" value="${(ticket.position) ? ticket.position : ''}" placeholder="${(window.lang == 'ru') ? regexps.lang.ru.age : regexps.lang.en.age}">
						<input type="text" data-type="age" class="age" name="age" value="${(ticket.age) ? ticket.age : ''}" placeholder="${(window.lang == 'ru') ? regexps.lang.ru.position : regexps.lang.en.position}">
						<fieldset class="arch-left">
						<label class="arch ">
						<input type="checkbox" checked="${(ticket.condition_checkbox) ? ticket.condition_checkbox : ''}" class="checkbox" name="condition_checkbox" id="condition_checkbox">
						<span class="label-text">${(window.lang == 'ru') ? regexps.lang.ru.condition : regexps.lang.en.condition}</span>
						</label>
						</fieldset class="wrap_checkbox">
						<fieldset class="arch-right">
						<label class="arch">
						<input type="checkbox" class="checkbox" name="dispatch_checkbox" id="dispatch_checkbox">
						<span class="label-text">${(window.lang == 'ru') ? regexps.lang.ru.dispatch : regexps.lang.en.dispatch}</span>
						</label>
						</fieldset>
						</form>
						`);		
				})

				$('.ticket_form').each(function() {
					if($(this).find('[type="text"], #condition_checkbox , [type="tel"]').val() == '') return
						var error = $(this).find('[type="text"], #condition_checkbox , [type="tel"]').check(regexps.check)
					if(!error){
						$('.category-item').eq($(this).index()).addClass('category-item_ok')
						$('.category-item').eq($(this).index()).removeClass('category-item_error')
					}else {
						$('.category-item').eq($(this).index()).removeClass('category-item_ok')					
					}
				})

				$('.btn_step_show').eq(1).showEl($('.btn_step_show'))
				$('.form_main_block').eq(2).showEl($('.form_main_block'))

				$('.step_block_inner').removeClass('step_block_inner_active')
				$('.step_block_inner').eq(0).addClass('step_block_inner_ok')
				$('.step_block_inner').eq(1).addClass('step_block_inner_active')

				$('.category-item').eq(0).addClass('category-item_active')

				$('.ticket_form').eq(0).addClass('ticket_form_active')
				

				$('[type="text"], #condition_checkbox , [type="tel"]').on('input', function() {
					$(this).check(regexps.check)
					tickets[$(this).closest('form').index()][$(this).attr('name')] = $(this).val();
					var error = $(this).closest('form').find('[type="text"], #condition_checkbox , [type="tel"]').check(regexps.check)
					if(!error){
						$('.category-item').eq($(this).closest('form').index()).addClass('category-item_ok')
						$('.category-item').eq($(this).closest('form').index()).removeClass('category-item_error')
					}else {
						$('.category-item').eq($(this).closest('form').index()).removeClass('category-item_ok')						
					}	
				})

				$('.category-item').on('click', showTicketForm)
			}
		} 

		function showMainPaymentForm() {
			$('.sum-total').text(`${(Number(course) * Number(data_tickets.totalSum)).toFixed(2)} ₴`)
			if($('.category-item_ok').length == $('.category-item').length){


				$('.category-item').removeClass('category-item_error')

				$('.btn_step_show').eq(2).showEl($('.btn_step_show'))
				$('.form_main_block').eq(3).showEl($('.form_main_block'))

				$('.step_block_inner').removeClass('step_block_inner_active')
				$('.step_block_inner').eq(1).addClass('step_block_inner_ok')
				$('.step_block_inner').eq(2).addClass('step_block_inner_active')

			}else{
				$('.category-item').not('.category-item_ok').addClass('category-item_error')
			}			
		}		

		function showTicketForm() {
			var cur_btn = $(this)
			$('.category-item').removeClass('category-item_active')
			cur_btn.addClass('category-item_active')
			var cur_form = $('.ticket_form').eq($(this).index())
			$('.ticket_form').removeClass('ticket_form_active')
			cur_form.addClass('ticket_form_active')
		}

		function showSuccessful () {
			var totalSumGrn = (Number(course) * Number(data_tickets.totalSum)).toFixed(2);
			data_tickets.tickets = tickets;
			data_tickets.totalSumGrn = totalSumGrn;
			//console.log(Number(course))
			//var totalSumGrn = data_tickets.totalSum * course;
           // totalSumGrn = totalSumGrn.toFixed(2);

           options = {
           	url: arch_ajax_object.ajaxurl,
           	data: {
           		action: 'buytickets',
           		data: JSON.stringify(data_tickets),
           	}
           }
           $.myajax( options, function(dataObj){
           	var resp = JSON.parse(dataObj);
				//console.log(resp)
				var wayforpay = new Wayforpay();
				wayforpay.run({
					merchantAccount : resp['merchLogin'],
					merchantDomainName : "arch.staging.smart-site.pro",
					authorizationType : "SimpleSignature",
					merchantSignature : resp['key'],
					orderReference : resp['num_order'],
					orderDate : resp['timestamp'],
					amount : data_tickets.totalSumGrn,
					currency : "UAH",
					productName : "tickets",
					productPrice : totalSumGrn,
					productCount : "1",
					language: "UA",
				},
				function (response) {
		                // on approved   
		                var sedn_resp = response;
		                options_send = {
		                	url: arch_ajax_object.ajaxurl,
		                	data: {
		                		action: 'sendtickets',
		                		num_order: resp['num_order'],
		                		data: JSON.stringify(data_tickets),
		                		data_send: sedn_resp,
		                	}
		                }
		                $.myajax( options_send, function(data_resposne){
							//console.log(data_resposne)
						}) 
		            },
		            function (response) {
		            	var sedn_resp = response;
		            	options_send = {
		            		url: arch_ajax_object.ajaxurl,
		            		data: {
		            			action: 'sendtickets',
		            			num_order: resp['num_order'],
		            			data: JSON.stringify(data_tickets),
		            			data_send: sedn_resp,
		            		}
		            	}
		            	$.myajax( options_send, function(data_resposne){
							//console.log(data_resposne)
						})

		                // on declined
		             	//console.log(response)
		             },
		             function (response) {
		                // on pending or in processing
		                var sedn_resp = response;
		                options_send = {
		                	url: arch_ajax_object.ajaxurl,
		                	data: {
		                		action: 'sendtickets',
		                		num_order: resp['num_order'],
		                		data: JSON.stringify(data_tickets),
		                		data_send: sedn_resp,
		                	}
		                }
		                $.myajax( options_send, function(data_resposne){
							//console.log(data_resposne)
						})
		            }
		            );
				//console.log(dataObj)
				// cleanBayTickets()
				
				// $('.btn_step_show').eq(3).showEl($('.btn_step_show'))
				// $('.form_main_block').eq(4).showEl($('.form_main_block'))

				// $('.step_block_inner').removeClass('step_block_inner_active')
				// $('.step_block_inner').eq(2).addClass('step_block_inner_ok')

				// $('.buyticket_right_footer').css({'display': 'none'})


			})	
       }

       $('.wfp-widget-close-btn').click(function(e){
       	$('.body-color').removeClass('body-color-active') && $('.body-filter').removeClass('active-filter');
       })
   });	
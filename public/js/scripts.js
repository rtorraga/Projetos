/*jshint multistr: true */


//*DOCUMENT READY*//
$(document).ready(function(){

	$("#nav li").each
	(
		function()
		{
			var $self = $(this);
			addMenuHoverEvent($self);
		}
	);

	$('.nossaHistoria > div').on('click', function(e){
	  window.location.href = '/tradicao-e-historia';
	});

	$('.btnVoltar').on('click', function(e){
	  goBack();
	});

	$('.btnCloseTable').on('click', function(e){
		  $('.infoNutri').slideToggle(400, function(){
		  	if ($('.btnCloseTable').hasClass('abre'))
		  	{
		  		$('.btnCloseTable').removeClass('abre');
		  	}
		  	else
		  	{
		  		$('.btnCloseTable').addClass('abre');
		  	}
		  });
	});

	$("#frAssunto").change(function() {
		$('#bgSelect span').text( $('#frAssunto option:selected').text() );
	});

	if ($('.lnkSaibaMais').length > 0)
	{
		$('.lnkSaibaMais').imageSpritePlay
		(
			{
				image: base_url+'public/img/saiba-mais-anim-2.png',
				frame_count: 20,
				velocity: 40,
				autoplay: false,
				loop: false
			}
		);

		$(document).on
		(
			'mouseover',
			'.lnkSaibaMais',
			function()
			{
				$(this).imageSpritePlay('play');
			}
		);
	}

	if ($('.lnkExperimente').length > 0)
	{
		$('.lnkExperimente').imageSpritePlay
		(
			{
				image: datasite.theme_url + '/img/experimente-anim.png',
				frame_count: 20,
				velocity: 40,
				autoplay: false,
				loop: false
			}
		);

		$(document).on
		(
			'mouseover',
			'.lnkExperimente',
			function()
			{
				$(this).imageSpritePlay('play');
			}
		);
	}

	$(document).on
	(
		'click',
		'.logo',
		function()
		{
			window.location.replace(datasite.base_url);
		}
	);

});
//*DOCUMENT READY*//

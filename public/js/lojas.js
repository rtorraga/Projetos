$(document).ready(function() {

	// Lojas Participantes
	$('#lojas_estado').change(function() {
		$('.lista-lojas').find('.texto').remove();
		$.ajax({
			url: 'ajaxx',
			type: 'POST',
			datatype: 'json',
			data: {
				actiom: 'get_cidades',
				estado: $(this).val()
			},
			beforeSend: function() {
				$('#cidade').find('option').remove().end().append('<option value="">Carregando...</option>');
			},
			success: function(data) {
				var cidades = $.parseJSON(data);
				if(cidades.length > 0) {
					$('#cidade').find('option').remove().end().append('<option value="">Selecione</option>');
					$(cidades).each(function(index, elemento) {
						$('#cidade').append('<option value="'+elemento+'">'+elemento+'</option>');
					});
				} else {
					$('#cidade').find('option').remove().end().append('<option value="">Selecione</option>');
				}
			},
			error: function(xhr, type) {
				// console.log(xhr);
				// console.log(type);
			}
		});
		return false;
	});

	$('#cidade').change(function() {
		$.ajax({
			url: 'ajaxx',
			type: 'POST',
			datatype: 'json',
			data: {
				actiom: 'get_lojas',
				cidade: $(this).val(),
				estado: $('#lojas_estado').val()
			},
			beforeSend: function() {

			},
			success: function(data) {
				//console.log(data);
				var lojas = $.parseJSON(data);

				$('.lista-lojas').find('.lista').remove();
				$('.lista-lojas').append('<div class="lista"><ul>');
				$(lojas).each(function(i, e) {
					$('.lista-lojas').find('ul').append('<li><div class="mapa"><i class="fa fa-map-marker"></i></div><div class="per-xs-60 per-sm-80 per-md-80"><div class="titulo-lojas"><strong>'+e.nome_loja+'</strong></div><div class="texto-lojas">'+e.endereco+'</div></div><div class="clearfix"></div></li>');
				});
				$('.lista-lojas').append('</ul></div>');
				$('.lista').jScrollPane({
					showArrows:true,
					verticalDragMinHeight: 20,
					verticalDragMaxHeight: 20
				});

			},
			error: function(xhr, type) {
				// console.log(xhr);
				// console.log(type);
			}
		});
		return false;
	});
});

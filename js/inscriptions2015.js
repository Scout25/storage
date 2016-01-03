$(document).ready(function (e)
{
	$(document).on('click', '#envoi', function (e)
	{
		e.preventDefault();

		var This = $(this);
		var form = This.parents('#form');
		var url = '/scripts/inscription.php';

		$.ajax({
			url: url,
			type: form.attr('method'),
			data: form.serialize(),
			dataType: 'json'
		})
		.always(function (jqXHR){
			if ( jqXHR.responseText == 'Inscription effectuée !' )
			{
				$('.alert-success').find('#alertText').html(jqXHR.responseText);
				$('.alert-success').fadeIn(function (){
					setTimeout(function(){ $('.alert-success').fadeOut(); }, 1500);
				});

				$('#about_contacts').find('.container').fadeOut();
				$('#about_contacts').html('<div class="container"><div class="row text-center"><a href="/" id="bouton_intro" class="btn btn-lg btn-default little">Accueil</a></div></div>');

			}

			else
			{
				$('.alert-error').find('#alertText').html(jqXHR.responseText);
				$('.alert-error').fadeIn(function (){
					setTimeout(function(){ $('.alert-error').fadeOut(); }, 1500);
				});
			}
		});
	});
});

$(document).ajaxStart(function()
{
  NProgress.inc();
});
$(document).ajaxStop(function()
{
  NProgress.done();
});
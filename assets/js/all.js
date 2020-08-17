$(function() 
{
	setTimeout(function() 
	{
		document.getElementById('loader').style.display ='none'   ;
		document.getElementById('faq').style.display    ='inline' ;
	},7000);

	$('#hover_faq').mouseover(function() 
	{
		document.getElementById('hover_faq_option').style.display ='inline'    ;
		document.getElementById('hover_faq_option').classList.add('hover_faq') ;
	});
	$('#hover_faq').mouseout(function() 
	{
		document.getElementById('hover_faq_option').style.display ='none'        ;
		document.getElementById('hover_faq_option').classList.remove('hover_faq');
	});

	$('#hover_faq').click(function() 
	{
		Swal.fire({
				  icon: 'question',
				  title: 'FAQ',
				  text: 'Veuillez Contacter un Administrateur à l\'adresse ....@votesn.sn',
				  confirmButtonText:'<i class="far fa-thumbs-up fa-2x"></i> OK'
				});
	});
});

				 function _VerifyP(arg) 
				 {
				 	if (arg.value === document.getElementById('pwd').value) 
				 	{
				 		document.getElementById('go').disabled = false;
				 		document.getElementById('pwd').classList.remove('is-invalid');
				 		document.getElementById('pwd').classList.add('is-valid');
				 		document.getElementById('cpwd').classList.remove('is-invalid');
				 		document.getElementById('cpwd').classList.add('is-valid');
				 	}
				 	else
				 	{
				 		document.getElementById('go').disabled = true;
				 		document.getElementById('pwd').classList.add('is-invalid');
				 		document.getElementById('pwd').classList.remove('is-valid');
				 		document.getElementById('cpwd').classList.add('is-invalid');
				 		document.getElementById('cpwd').classList.remove('is-valid');
				 	}
				 }
				 function _VerifyP_2(arg) 
				 {
				 	if (arg.value === document.getElementById('cpwd').value) 
				 	{
				 		document.getElementById('go').disabled = false;
				 		document.getElementById('pwd').classList.remove('is-invalid');
				 		document.getElementById('pwd').classList.add('is-valid');
				 		document.getElementById('cpwd').classList.remove('is-invalid');
				 		document.getElementById('cpwd').classList.add('is-valid');
				 	}
				 	else
				 	{
				 		document.getElementById('go').disabled = true;
				 		document.getElementById('pwd').classList.add('is-invalid');
				 		document.getElementById('pwd').classList.remove('is-valid');
				 		document.getElementById('cpwd').classList.add('is-invalid');
				 		document.getElementById('cpwd').classList.remove('is-valid');
				 	}
				 }
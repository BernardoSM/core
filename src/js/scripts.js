var rating = 0;
var comment = '';
var dealId = '';
var survey = '';

$(document).on('input', '#cloud-range', function() {

  rating = $(this).val();
  $('.ranger .error').hide();

  $('.ranger-levels p').each(function(){

    if(rating == $(this).html()){
      $(this).addClass('selected');
    }else {
      $(this).removeClass('selected');
    }
    
  });
});

$('.ranger-levels p').click(function(){

  $('.ranger-levels p').each(function(){
    $(this).removeClass('selected');
  });

  rating = $(this).html();

  $('#cloud-range').val(rating);

  $(this).addClass('selected');

});

function checkForm(idNumber){

  dealId = idNumber;

  comment = $('#comment').val();

  var pathname = window.location.pathname;

  if(pathname.includes('audiencia')){
    survey = 'audiência';
  }else{
    survey = 'atendimento';
  }

  console.log(rating);
  console.log(comment);
  console.log(dealId);
  console.log(survey);

  if(rating == 0){
    $('.ranger .error').show();
  }else{
    $('#btn-send .text').hide();
    $('#btn-send .spinner-border').show();
    sendForm();
  }
}

function sendForm(){
  $.post('https://api.liberfly.net/nps/', {
    freshsales_deal_id: dealId,
    comment: comment,
    rating: rating,
    survey: survey
  }).done(function(response) {
    if(response.status = 201) {
      $('#btn-send .spinner-border').hide();
      $('#btn-send .text').html('Enviado com sucesso!');
      $('#btn-send .text').show();
      $('#btn-send').addClass('success');
    }
    else {
      $('#btn-send .spinner-border').hide();
      $('#btn-send .text').html('Erro! Tente depois =(');
      $('#btn-send .text').show();
      $('#btn-send').addClass('success');
    }
  });
}
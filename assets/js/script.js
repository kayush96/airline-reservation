$(document).ready(function() {
  $("#btn-switch").on('click', function() {
    var departure_loc = $('#departure_location').val();
    var arrival_loc = $('#arrival_location').val();
    $('#departure_location').val(arrival_loc);
    $('#arrival_location').val(departure_loc);
  });
});


//Search Script
$(document).ready(function(){
  $('#departure_location').keyup(function(){
    let query = $(this).val();

    if(query != ''){
      $.ajax({
        url:"../airlinesystem/validations/state_search.php",
        method:"POST",
        data:{query:query},
        success:function(data) {
          $('#statelist').fadeIn();
          $('#statelist').html(data);
        }
      });
    } else {
          $('#statelist').fadeOut();
          $('#statelist').html("");
    }
  });
  $(document).on('click', 'li', function() {
    $('#departure_location').val($(this).text());
    $('#statelist').fadeOut();
  });
});


//Script to toggle return date based on onw way/round trip option

$(function () {
  $("input[name='trip_choice']").click(function () {
      if ($("#trip_choice2").is(":checked")) {
          $("#arrival_date").removeAttr("disabled");
          $("#arrival_date").focus();
      } else {
          $("#arrival_date").attr("disabled", "disabled");
      }
  });
});

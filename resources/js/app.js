import './bootstrap';
import $ from 'jquery';
window.$ = $;

$(function(){
  $('#addcart').on('click',function(e) {

    var id = $('.product_id').val();
    var quantity =$('#quantity').val();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: "POST",
      url: "/home/product/" + id ,
      dataType: 'json',
      data: {
        'id': id,
        'quantity': quantity ,
      }
      })
      .done(function (response) {
        alert(response.status)

      })
      .fail(function (jqXHR) {
		      console.log(jqXHR)
        })
      .always(function(jqXHR) {
          console.log(jqXHR)
      });
     });
  });

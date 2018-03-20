$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


function like(id)
{
  $.ajax({
                url: '/like/'+id,
                type: 'GET',               
                success: function (response) {
                   console.log("response received: "+response);
                   $("#newslike-"+id).text(response);
                },
                error: function (response) {
                   console.log(response.message);
                }
            });
}

function letMeIn()
{
  $.ajax({
                url: '/entrar',
                type: 'GET',               
                success: function (response) {
                   console.log("response received: "+response);
                },
                error: function (response) {
                   console.log(response.message);
                }
            });
}

function wantToKnowMore()
{
  $.ajax({
                url: '/saber',
                type: 'GET',               
                success: function (response) {
                   console.log("response received: "+response);
                },
                error: function (response) {
                   console.log(response.message);
                }
            });
}
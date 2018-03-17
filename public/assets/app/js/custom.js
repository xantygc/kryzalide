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

function unlike(id)
{
  $.ajax({
                url: '/unlike/'+id,
                type: 'GET',               
                success: function (response) {
                   console.log("response received: "+response);
                   $("#newsunlike-"+id).text(response);
                },
                error: function (response) {
                   console.log(response.message);
                }
            });
}

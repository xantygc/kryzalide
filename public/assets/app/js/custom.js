document.querySelector(".like").onclick = function(e) {
  e.preventDefault();
  
  $.ajax({
    url: '/',
    type: 'post',
    data: {key: 'value'},
  })
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  });
}
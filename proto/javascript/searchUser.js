

$(document).ready(function(){
  $('#results').html('<p style="padding:5px;">Comece a escrever para procurar um utilizador.</p>');
  $('#usersearch').keyup(function() {

    var searchVal = $(this).val();
    if(searchVal !== '') {

      $.get('../../api/procuraruser.php?usersearch='+searchVal, function(returnData) {
        if (!returnData) {
          $('#results').html('<p style="padding:5px;">Não foram encontrados resultados.</p>');
        } else {
          $('#results').html('<p style="padding:5px;">Resultados:</p>');
          var parsedData = JSON.parse(returnData);
          for(var i=0;i<parsedData.length;i++){
            var output="".concat(parsedData[i][2]," (",parsedData[i][1],")");
            var newLine="".concat("<a href='../../pages/user/perfil.php?userid=",parsedData[i][0],"'>",output,"</a><br>");
            $('#results').append(newLine);
          }
          $('#results').append("<br><br>");

        }
      });
    } else {
      $('#results').html('<p style="padding:5px;">Comece a escrever para procurar um utilizador.</p>');
    }

  });

});

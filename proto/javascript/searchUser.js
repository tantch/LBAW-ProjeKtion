

$(document).ready(function(){
  $('#results').html('<p style="padding:5px;">Search a user by inserting a keyword.</p>');
  $('#usersearch').keyup(function() {

    var searchVal = $(this).val();
    if(searchVal !== '') {

      $.get('../../api/procuraruser.php?usersearch='+searchVal, function(returnData) {
        if (!returnData) {
          $('#results').html('<p style="padding:5px;">No results found.</p>');
        } else {
          $('#results').html('<p style="padding:5px;">Results:</p>');
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
      $('#results').html('<p style="padding:5px;">Search a user by inserting a keyword.</p>');
    }

  });

});

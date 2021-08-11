$(document).ready(function(){
	$(document).on("click", "#btn-submit", function(e){
    $('#signin-form').unbind();
    $('#signin-form').submit(function(e){
      e.preventDefault();
      username = $.trim($('#username').val());
      password = $.trim($('#password').val());
			$.ajax({
        url: "process/signin/crud.php",
        type: "POST",
        datatype:"json",    
        data:  {username:username, password:password},    
        success: function(response){
          if(response == true){
            window.location.replace('pages/employee.php');
          }
        }
      });
    });
	});
});
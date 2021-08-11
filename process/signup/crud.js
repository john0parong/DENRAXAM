$(document).ready(function(){
	$(document).on("click", "#btn-submit", function(){
    $('#signup-form').unbind();
    $('#signup-form').submit(function(e){
      e.preventDefault();
      username = $.trim($('#username').val());
      password = $.trim($('#password').val());
			$.ajax({
        url: "../process/signup/crud.php",
        type: "POST",
        datatype:"json",    
        data:  {username:username, password:password},    
        success: function(response){
          if(response == true){
            window.location.replace('../pages/employee.php');
          }else{
            
          }
        }
      });
    });
	});
});
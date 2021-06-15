function fetchdata(){
        $.ajax({
         url: 'fetch_details.php',
         type: 'post',
         success: function(data){
          // Perform operation on return value
          alert(data);
         },
         complete:function(data){
          setTimeout(fetchdata,5000);
         }
        });
}
$(document).ready(function(){
    setTimeout(fetchdata,5000);
   });

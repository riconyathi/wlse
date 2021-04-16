
    $(document).on('submit', '.submitVacancy', function(e){//job creation
        
        e.preventDefault();
        $("#spinner").fadeIn(500);
        alert('hey');
        $.ajax({
        type:"POST",
        url:"",
         data:new FormData(this),
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData:false, // To send DOMDocument or non processed data file it is set to false
        success:function(data){
          $("#spinner").fadeOut(500);
          alert(data);
         $('#upload').modal('hide'); 		//then refresh page
         window.location.reload();
        }
        });
      });
  
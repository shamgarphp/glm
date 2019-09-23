
<script type="text/javascript">

/* Start add menu */ 

  function location_edit($location_name,$location_id) {
   event.preventDefault();
   var location_id = $location_id;
   var location_name = $location_name;
   var modal = document.getElementById('myModal');
   var btn = document.getElementById("menu_update");
   var span = document.getElementsByClassName("close")[0];
   modal.style.display = "block";
   span.onclick = function() 
   {
     modal.style.display = "none";
   }
   window.onclick = function(event) 
   {
      if (event.target == modal) 
      {
         modal.style.display = "none";
      }
   }
     $("#edit_location").val(location_name); 
     $("#locationid").val(location_id);
  }

/* End  add Practice area */   


</script>



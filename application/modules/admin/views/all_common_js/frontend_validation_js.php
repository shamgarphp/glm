<script>
$(document).ready(function() { 

  $('#add_user').click(function(e) 
  {
      if($('#roles').val() == '')
      {
        toastr["error"]("Role is required!");
        e.preventDefault();
      }

      if($('#first_name').val() == '')
      {
        toastr["error"]("First Name is required!");
        e.preventDefault();
      }

      if($('#last_name').val() == '')
      {
        toastr["error"]("Last Name is required!");
        e.preventDefault();
      }

      if($('#event_name').val() == '')
      {
        toastr["error"]("Event Name is required!");
        e.preventDefault();
      }

      if($('#email').val() == '')
      {
        toastr["error"]("Email is required!");
        e.preventDefault();
      }

      if($('#Aadhar_no').val() != '')
      {
        if($('#Aadhar_no').val().length != 12 )
        {
          toastr["error"]("Aadhar number must be 12 numbers!");
          e.preventDefault(); 
        }
      }

      if($('#pan_number').val() != '')
      {
        if($('#pan_number').val().length != 10 )
        {
          toastr["error"]("pancard number must be 10 numbers!");
          e.preventDefault(); 
        }
      }
     
  });

  $('#Student_Update').click(function(e) 
  {
      if($('#roles').val() == '')
      {
        toastr["error"]("Role is required!");
        e.preventDefault();
      }

      if($('#first_name').val() == '')
      {
        toastr["error"]("First Name is required!");
        e.preventDefault();
      }

      if($('#last_name').val() == '')
      {
        toastr["error"]("Last Name is required!");
        e.preventDefault();
      }

      if($('#event_name').val() == '')
      {
        toastr["error"]("Event Name is required!");
        e.preventDefault();
      }

      if($('#email').val() == '')
      {
        toastr["error"]("Email is required!");
        e.preventDefault();
      }

      if($('#Aadhar_no').val() != '')
      {
        if($('#Aadhar_no').val().length != 12 )
        {
          toastr["error"]("Aadhar number must be 12 numbers!");
          e.preventDefault(); 
        }
      }

      if($('#pan_number').val() != '')
      {
        if($('#pan_number').val().length != 10 )
        {
          toastr["error"]("pancard number must be 10 numbers!");
          e.preventDefault(); 
        }
      }
     
  });
 

 
  function validateEmail(email) {
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if (filter.test(email)) 
  {
   return true;
  }
  else 
  {
   return false;
  }
}

  toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
  }
});

</script>
<script type="text/javascript">
$(document).ready(function(){

 $(document).on('click', '.add', function(event){
     
  event.preventDefault();

  var html = '';
  html += '';
  html += '<div class="form-group m-form__group row dynamic_resource" ><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Resource Person</label><select id="single" class="form-control select2-single" name="resource[]"><?php if (isset($employee_list) && !empty($employee_list)) { ?><option></option><?php foreach($employee_list as $employees){ ?><option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" ><?php  echo $employees['first_name'].''.$employees['last_name'].', '.$employees['phone'];  ?></option><?php } } ?></select></div><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Others</label><input type="text" class="form-control m-input m-input--air" name="resource_new[]" id="prog_admin_new" placeholder="Enter others"></div><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Phone</label><input type="text" class="form-control m-input m-input--air" name="resource_phone[]" id="resource_phone" placeholder="Enter phone Number"></div><div class="col-lg-2 col-md-2 col-sm-2"><label for="single" class="control-label">description</label><input type="text" class="form-control m-input m-input--air" name="resource_descript[]" id="new_description" placeholder="Enter description"></div><div class="col-lg-0 col-md-0 col-sm-0"><label for="single" class="control-label"></label><button type="button" name="remove" class="form-control btn btn-danger btn-sm remove"><i class="fa fa-times" aria-hidden="true"></i></span></button></div></div>';
   // html += '<div class="form-group m-form__group row add_more" >&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-primary btn-block col-lg-8 add" >Add More Resource Persons</button></div>';
  
  
  $('#Resource').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('.dynamic_resource').remove();
 });


 $(document).on('click', '.teaching_staff', function(event){

  event.preventDefault();

  var html = '';
  html += '';
  html += '<div class="form-group m-form__group row dynamic_teach" ><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Teaching Staff</label><select id="single" class="form-control select2-single" name="teaching[]"><?php if (isset($employee_list) && !empty($employee_list)) { ?><option></option><?php foreach($employee_list as $employees){ ?><option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" ><?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?></option><?php } } ?></select></div><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Others</label><input type="text" class="form-control m-input m-input--air" name="teach_new[]" id="prog_admin_new" placeholder="Enter others"></div><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Phone</label><input type="text" class="form-control m-input m-input--air" name="teach_phone[]" id="phone_new" placeholder="Enter phone Number"></div><div class="col-lg-2 col-md-2 col-sm-2"><label for="single" class="control-label">description</label> <input type="text" class="form-control m-input m-input--air" name="teach_descript[]" id="new_description" placeholder="Enter description">  </div><div class="col-lg-0 col-md-0 col-sm-0"><label for="single" class="control-label"></label><button type="button" name="remove" class="form-control btn btn-danger btn-sm remove"><i class="fa fa-times" aria-hidden="true"></i></span></button></div></div>';
   // html += '<div class="form-group m-form__group row add_more" >&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-primary btn-block col-lg-8 add" >Add More Resource Persons</button></div>';
  
  
  $('#teaching_staff').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('.dynamic_teach').remove();
 });

 
 $('.product_name').each(function()
 {
   var count = 1;
   count = count + 1;
});


});


/*Bill  remove*/
function bill_remove($bill_id)
{
  var bill = $bill_id;
  var answer = confirm ("Are you sure you want to delete from this post?");
  if (answer)
  {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('bills/bill_remove');?>",
        data: {bill_id: bill},
        success: function (data) {
          if(data) 
          {
            $('tr#'+'bill_id_'+bill).fadeOut('slow'); 
          }
          else
          {
            toastr["error"]("Bill delete failed!");
          }
        }
     });
  }
  else
  {
     return false;
  }
}


/* Start Program Status Change */  
  function program_status(program_id, val) {
    
    var form = {id:program_id,program_status:val};
    $.ajax({
    url: '<?php echo base_url('vbs/status_program'); ?>',
    type: 'POST',
    data: form,
    success: function(msg) {

       if (msg == 1) 
       {
           $('#status_'+program_id).replaceWith('<a  href="javascript:;" class="btn btn-sm btn-success" id="status_'+program_id+'" onclick="program_status('+program_id+',1)">ACTIVE</a>');
       } 
       else if (msg == 0) 
       {  
            $('#status_'+program_id).replaceWith('<a href="javascript:;" class="btn btn-sm btn-danger" id="status_'+program_id+'" onclick="program_status('+program_id+',0)">IN-ACTIVE</a>');  
       }
       else 
       {
          toastr["error"]("Status not changed");
       }
    }
   });

 }
 /* End Program Status Change */ 



 /* Start Program Permission Change */  
  function program_permission(program_id, val) {
    var form = {id:program_id,program_status:val};
    $.ajax({
    url: '<?php echo base_url('vbs/permission_program'); ?>',
    type: 'POST',
    data: form,
    success: function(msg) {

       if (msg == 1) 
       {
           $('#approve_'+program_id).replaceWith('<a href="javascript:;" class="btn btn-sm btn-success" id="approve_'+program_id+'" onclick="program_permission('+program_id+',1)"> APPROVED</a>');
       } 
       else if (msg == 0) 
       {  
            $('#approve_'+program_id).replaceWith('<a href="javascript:;" class="btn btn-sm btn-danger" id="approve_'+program_id+'" onclick="program_permission('+program_id+',0)">REJECTED</a>');  
       }
       else 
       {
          toastr["error"]("Permission not changed");
       }
    }
   });

 }
 /* End Program Permission Change */ 

</script> 



<!--begin::Page Scripts -->
<!-- <script src="<?php //echo base_url('admin_assets');?>/demo/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
 -->
<!--end::Page Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>

<script src="<?php echo base_url('admin_assets/other_plugins/select2/docs/js'); ?>/bootstrap.min.js"></script>
<script src="<?php echo base_url('admin_assets/other_plugins/select2/docs/js'); ?>/anchor.min.js"></script>




 <script>
      anchors.options.placement = 'left';
      anchors.add('.container h1, .container h2, .container h3, .container h4, .container h5');

      // Set the "bootstrap" theme as the default theme for all Select2
      // widgets.
      //
      // @see https://github.com/select2/select2/issues/2927
      $.fn.select2.defaults.set( "theme", "bootstrap" );

      var placeholder = "Select an option";

      $( ".select2-single, .select2-multiple" ).select2( {
        placeholder: placeholder,
        width: null,
        containerCssClass: ':all:'
      } );

      $( ".select2-allow-clear" ).select2( {
        allowClear: true,
        placeholder: placeholder,
        width: null,
        containerCssClass: ':all:'
      } );

      // @see https://select2.github.io/examples.html#data-ajax
      function formatRepo( repo ) {
        if (repo.loading) return repo.text;

        var markup = "<div class='select2-result-repository clearfix'>" +
          "<div class='select2-result-repository__avatar'><img src='" + repo.owner.avatar_url + "' /></div>" +
          "<div class='select2-result-repository__meta'>" +
            "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";

        if ( repo.description ) {
          markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
        }

        markup += "<div class='select2-result-repository__statistics'>" +
              "<div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> " + repo.forks_count + " Forks</div>" +
              "<div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> " + repo.stargazers_count + " Stars</div>" +
              "<div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> " + repo.watchers_count + " Watchers</div>" +
            "</div>" +
          "</div></div>";

        return markup;
      }

      function formatRepoSelection( repo ) {
        return repo.full_name || repo.text;
      }

      $( ".js-data-example-ajax" ).select2({
        width : null,
        containerCssClass: ':all:',
        ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function (params) {
            return {
              q: params.term, // search term
              page: params.page
            };
          },
          processResults: function (data, params) {
            // parse the results into the format expected by Select2
            // since we are using custom formatting functions we do not need to
            // alter the remote JSON data, except to indicate that infinite
            // scrolling can be used
            params.page = params.page || 1;

            return {
              results: data.items,
              pagination: {
                more: (params.page * 30) < data.total_count
              }
            };
          },
          cache: true
        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
      });

      $( "button[data-select2-open]" ).click( function() {
        $( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
      });

      $( ":checkbox" ).on( "click", function() {
        $( this ).parent().nextAll( "select" ).prop( "disabled", !this.checked );
      });

      // copy Bootstrap validation states to Select2 dropdown
      //
      // add .has-waring, .has-error, .has-succes to the Select2 dropdown
      // (was #select2-drop in Select2 v3.x, in Select2 v4 can be selected via
      // body > .select2-container) if _any_ of the opened Select2's parents
      // has one of these forementioned classes (YUCK! ;-))
      $( ".select2-single, .select2-multiple, .select2-allow-clear, .js-data-example-ajax" ).on( "select2:open", function() {
        if ( $( this ).parents( "[class*='has-']" ).length ) {
          var classNames = $( this ).parents( "[class*='has-']" )[ 0 ].className.split( /\s+/ );

          for ( var i = 0; i < classNames.length; ++i ) {
            if ( classNames[ i ].match( "has-" ) ) {
              $( "body > .select2-container" ).addClass(classNames[ i ] );
            }
          }
        }
      });
    </script>

  
      



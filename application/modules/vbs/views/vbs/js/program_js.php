<script src="<?php echo base_url('admin_assets'); ?>/demo/custom/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>	

<script type="text/javascript">
	
 $('#reports_reset').click(function(){

  $('.staff_location').val('');
  $('.from_date').val('');
  $('.to_date').val('');
 });

/*Start select multiple checkbox*/
$('#quetion_all').click(function() {

    if ($(this).is(':checked')) 
    {
        $('input:checkbox').attr('checked', true);
    } 
    else 
    {
        $('input:checkbox').attr('checked', false);
    }

});
/*End select multiple checkbox*/

</script>



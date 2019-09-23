<!-- start editor  -->
<script src="https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js"></script> 
<script>  
CKEDITOR.replace('service_desc');  
</script>
<!-- end editor  -->

<script type="text/javascript">
$(document).ready(function() {

/*Start  data clear service edit page*/
$('#event_cancel').click(function(){
        $('#event_edit_form')[0].reset();
 });
/*End  data clear service edit page */

/*Start  data clear service edit page*/
$('#add_service_reset').click(function() {
        $('#add_service_form')[0].reset();
 });
/*End  data clear service edit page */
});
</script>



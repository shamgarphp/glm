<!-- start editor  -->
<script src="https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js"></script> 
<script>  
CKEDITOR.replace('event_desc');  
</script>
<!-- end editor  -->


<script type="text/javascript">
$(document).ready(function() {

/*Start  data clear event edit page*/
$('#event_cancel').click(function(){
        $('#event_edit_form')[0].reset();
 });
/*End  data clear event edit page */

/*Start  data clear event add page*/
$('#add_event_reset').click(function(){
        $('#add_event_form')[0].reset();
 });
/*End  data clear event add page */
});

</script>



<script src="<?php echo base_url('admin_assets');?>/demo/demo12/base/scripts.bundle.js" type="text/javascript"></script>

<script src="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>


 <script src="<?php echo base_url('admin_assets');?>/demo/demo12/custom/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->


<script type="text/javascript">
	
$('.day_wise_report').DataTable( {
    responsive: true,
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
} );


</script>
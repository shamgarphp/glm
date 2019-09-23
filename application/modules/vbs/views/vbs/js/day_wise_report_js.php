<script src="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="<?php echo base_url('admin_assets');?>/demo/custom/crud/datatables/extensions/responsive.js" type="text/javascript"></script> 

<script type="text/javascript">
	
$('.day_wise_report').DataTable( {
    responsive: true,
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
} );

</script>
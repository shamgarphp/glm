<style type="text/css">
  .m-content{width: 105%}
</style>
<?php 
        $this->db->select();
        $this->db->from('mpp');
        $query = $this->db->get();
        
           $output =  $query->result_array();
      
        ?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     MPP LIST
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <a href="#" class="btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                          <i class="la la-cart-plus"></i>
                          <span>New Order</span>
                        </span>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                      <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                        Actions
                      </a>
                      <div class="m-dropdown__wrapper" style="z-index: 101;">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36px;"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Export Tools</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_print">
                                    <i class="m-nav__link-icon la la-print"></i>
                                    <span class="m-nav__link-text">Print</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_copy">
                                    <i class="m-nav__link-icon la la-copy"></i>
                                    <span class="m-nav__link-text">Copy</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_excel">
                                    <i class="m-nav__link-icon la la-file-excel-o"></i>
                                    <span class="m-nav__link-text">Excel</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_csv">
                                    <i class="m-nav__link-icon la la-file-text-o"></i>
                                    <span class="m-nav__link-text">CSV</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_pdf">
                                    <i class="m-nav__link-icon la la-file-pdf-o"></i>
                                    <span class="m-nav__link-text">PDF</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- <div class="m-portlet__body"> -->
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2" style="width: 70%">
                  <thead>
                    <tr>
                      <th> ID</th>
                      <th>DateandTime</th>
                      <th>Power</th>
                      <th>Pressure KG/CM2</th>
                      <th>Temparature (˚C)</th>
                      <th>Volume Compansator</th>
                      <th>Feed wate available in tons</th>
                      <th>Sustaining time</th>
                      <th>Water feed into core (Tons)</th>
                      <th>Water level in NHS (TONS)</th>
                      <th>Pressure in Compartment</th>
                      <th>Temp in Compartment</th>
                      <th>Cooling means</th>                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php if($output){ 
                        foreach ($output as $out) { ?>
                          <td><?php echo $out['id']; ?></td>
                          <td><?php echo $out['dtntm']; ?></td>
                          <td><?php echo $out['power']; ?></td>
                          <td><?php echo $out['pressurekgcm']; ?></td>
                          <td><?php echo $out['temparaturec']; ?></td>
                          <td><?php echo $out['volumec']; ?></td>
                          <td><?php echo $out['feedwaterav']; ?></td>
                          <td><?php echo $out['s_time']; ?></td>
                          <td><?php echo $out['waterfeedinc']; ?></td>
                          <td><?php echo $out['waterlevelinnhs']; ?></td>
                          <td><?php echo $out['pressureinc']; ?></td>
                          <td><?php echo $out['tempinc']; ?></td>
                          <td><?php echo $out['cmeans']; ?></td>
                       </tr>

                     <?php }
                     
                   }else { ?>
                       <tr><td><?php echo "No records found"; ?></td></tr>
                      <?php } ?>
                  </tbody>
                </table>
              <!-- </div> -->
            </div>
        </div>
      </div>  
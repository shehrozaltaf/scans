<style>
.not-active {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
}
</style>

<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

  <?php echo $this->load->view('includes/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $this->load->view('includes/sidebar');?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $heading;?>
        <small>
			<?php if (! empty($message)) { ?>
                <div id="message">
                <?php echo $message; ?>
                </div>
            <?php } ?>  
        </small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
    
    
    
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Line Listing Progress</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                


                <div class="col-md-3">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue">
                    <?php $total_clusters = 0; foreach($clusters_by_district->result() as $row){ $total_clusters = $total_clusters + $row->clusters_by_district; }?>
                      <h2><?php echo $total_clusters;?></h2>
                      <h4>Total Clusters</h4>
                    </div>

                    <?php if($this->users->in_group('admin') || $this->users->in_group('management')){ ?>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">

                        <?php foreach($clusters_by_district->result() as $row){ ?>
                        <li><a href="#"><strong><?php echo $row->district;?></strong><span class="pull-right badge bg-blue"><?php echo $row->clusters_by_district;?></span></a></li>
                        <?php } ?>

                      </ul>
                    </div>
                    <?php } ?>

                  </div>
                  <!-- /.widget-user -->
                </div>
                <!-- /.col -->


                <div class="col-md-3">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-green">
                      <h2><?php echo $gt_c;?></h2>
                      <h4>Completed Clusters</h4>
                    </div>
                    
                    <?php if($this->users->in_group('admin') || $this->users->in_group('management')){ ?>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="<?php echo base_url().'scans/index/d2_c';?>"><strong>Punjab</strong><span class="pull-right badge bg-green"><?php echo $d2_c;?></span></a></li>
                        <li><a href="<?php echo base_url().'scans/index/d3_c';?>"><strong>Sindh</strong><span class="pull-right badge bg-green"><?php echo $d3_c;?></span></a></li>
                      </ul>
                    </div>
                    <?php } ?>

                  </div>
                  <!-- /.widget-user -->
                </div>
                <!-- /.col -->


                <div class="col-md-3">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-orange">
                      <h2><?php echo $gt_ip;?></h2>
                      <h4>In Progress Clusters</h4>
                    </div>
                    <?php if($this->users->in_group('admin') || $this->users->in_group('management')){ ?>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">
                        <li><a href="<?php echo base_url().'scans/index/d2_ip';?>"><strong>Punjab</strong><span class="pull-right badge bg-orange"><?php echo $d2_ip;?></span></a></li>
                        <li><a href="<?php echo base_url().'scans/index/d3_ip';?>"><strong>Sindh</strong><span class="pull-right badge bg-orange"><?php echo $d3_ip;?></span></a></li>
                      </ul>
                    </div>
                    <?php } ?>

                  </div>
                  <!-- /.widget-user -->
                </div>
                <!-- /.col -->



                <div class="col-md-3">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-red">   
                      <h2><?php echo $gt_r;?></h2>
                      <h4>Remaining Clusters</h4>
                    </div>
                    <?php if($this->users->in_group('admin') || $this->users->in_group('management')){ ?>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-stacked">

                        <li><a href="#"><strong>Punjab</strong><span class="pull-right badge bg-red"><?php echo $d2_r;?></span></a></li>
                        <li><a href="#"><strong>Sindh</strong><span class="pull-right badge bg-red"><?php echo $d3_r;?></span></a></li>
                      </ul>
                    </div>
                    <?php } ?>
                  </div>
                  <!-- /.widget-user -->
                </div>
                <!-- /.col -->



                
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->





      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List of Completed and In Progress Clusters</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="get_list" class="table table-bordered table-striped table-responsive" width="100%">
                
                <thead>
                    <tr>
                      <th>Province</th>
                      <th>Division</th>
                      <th>Cluster Number</th>
                      <th>Total Structures</th>
                      <th>Residential Structures</th>
                      <th>HHs</th>
                      <th>Eligible HHs</th>
                      <th>Eligible WRAs</th>
                      <th>Collecting Tabs</th>
                      <th>Completed Tabs</th>

                      <?php if((!empty($this->uri->segment(3)) and substr($this->uri->segment(3), 3, 1) == 'c') || $this->users->get_user()->district != 0) { ?>
                        <th width="15%">Randomize</th>
                      <?php } ?>

                    </tr>
                </thead>
                   
                <tbody>
                    
                    <?php
                    
                    foreach($get_list->result() as $row2){ 
                            
                      if($this->users->in_group('admin') || $this->users->in_group('management')){
                        $anchor = anchor("scans/systematic_randomizer/".$row2->hh02."/".$this->uri->segment(3), '<i class="fa fa-edit"></i> Randomize', 'class="btn-sm btn-primary"');
                      } else {
                        $anchor = anchor("scans/systematic_randomizer/".$row2->hh02, '<i class="fa fa-edit"></i> Randomize', 'class="btn-sm btn-primary"');
                      }      
                      
                      if($row2->enumcode == 2){
                        $province = 'Punjab';
                      } else if($row2->enumcode == 3){
                        $province = 'Sindh';
                      } else {
                        $province = 'Test';
                      }

                      $get_geoarea = $this->scans->query("select geoarea from clusters where cluster_no = '$row2->hh02'")->row()->geoarea;
		                  $explode     = explode("|",$get_geoarea);
		                  $division    = ltrim(rtrim($explode[1]));
                    ?>
                    <tr>
                      <td><?php echo $province;?></td>
                      <td><?php echo $division;?></td>
                      <td><?php echo $row2->hh02;?></td>
                      <td><?php echo $row2->structures;?></td>
                      <td><?php echo $row2->residential_structures;?></td>
                      <td><?php echo $row2->households;?></td>
                      <td><?php echo $row2->eligible_households;?></td>
                      <td><?php echo $row2->no_of_eligible_wras;?></td>
                      <td><?php echo $row2->collecting_tabs;?></td>
                      <td><?php echo $row2->completed_tabs;?></td>

                      <?php if((!empty($this->uri->segment(3)) and substr($this->uri->segment(3), 3, 1) == 'c') || $this->users->get_user()->district != 0) { 
                              
                              $cluster = $this->scans->query("select randomized from clusters where cluster_no = '$row2->hh02'")->row();
                      ?>
                        <td><?php if($cluster->randomized == 0){echo $anchor;} else {
                          echo anchor("scans/make_pdf/".$row2->hh02, '<i class="fa fa-print"></i> Print', ['target' => '_blank', 'class' => 'btn-sm btn-success']);
                          echo "|";
                          echo anchor("scans/get_excel/".$row2->hh02, '<i class="fa fa-print"></i> Get Excel', ['target' => '_blank', 'class' => 'btn-sm btn-success']);
                        }?></td>
                      <?php } ?>

                    </tr>
                    <?php } ?>

                </tbody>
                            
                <!--<tfoot>
                  <tr>
                    <th>District</th>
                    <th>Cluster Number</th>
                    <th>Total Structures</th>
                    <th>Residential Structures</th>
                  </tr>
                </tfoot>-->
                            
              </table>

            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>    
    
    
    
    
    
  </div>
  <!-- /.content-wrapper -->
  <?php echo $this->load->view('includes/footer');?>

</div>
<!-- ./wrapper -->

<?php echo $this->load->view('includes/scripts');?>

<!-- page script -->
<script>
$(document).ready(function(){
  
  $('#get_list').DataTable({
	  responsive: true,
	  dom: '<"top"Bfrt<"clear">>rt<"bottom"ilp>',
	  buttons: ['excel', 'csv'],
	  "scrollX": true,
	  "ordering": false,
    });

});
</script>
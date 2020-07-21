<div id="page_content">
    <div id="page_content_inner">

        <div class="md-card">
            <div class="md-card-content">
                <table id="dt_tableExports" class="uk-table" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>S No.</th>
                        <th>Cluster</th>
                        <th>Household</th>
                        <th>Scored By</th>
                        <th>Scored Date Time</th>
                        <th>Review</th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php
                    $s = 0;
                    foreach ($getData as $key => $value) {
                        $s++;
                        echo '<tr> 
                        <td>' . $s . '</td> 
                        <td>' . $value->cluster . '</td>
                        <td>' . $value->hhno . '</td>
                        <td>' . $value->createdBy . '</td>
                        <td>' . $value->createdDateTime . '</td>
                        <td>' . wordwrap($value->other_observation, 40, "<br />\n") . '</td> 
                      </tr>';
                    } ?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>S No.</th>
                        <th>Cluster</th>
                        <th>Household</th>
                        <th>Scored By</th>
                        <th>Scored Date Time</th>
                        <th>Review</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- page specific plugins -->
<!-- datatables -->
<script src="<?php echo base_url() ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

<!-- datatables buttons-->
<script src="<?php echo base_url() ?>assets/bower_components/datatables-buttons/js/dataTables.buttons.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom/datatables/buttons.uikit.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/pdfmake/build/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables-buttons/js/buttons.colVis.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables-buttons/js/buttons.html5.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables-buttons/js/buttons.print.js"></script>
<!-- datatables custom integration -->
<script src="<?php echo base_url() ?>assets/js/custom/datatables/datatables.uikit.min.js"></script>

<!--  datatables functions -->
<script src="<?php echo base_url() ?>assets/js/pages/plugins_datatables.min.js"></script>
<script>
    $(document).ready(function () {
        var mytableid = 'dt_tableExports';
        altair_datatables.dt_tableExport(mytableid)
    });
</script>
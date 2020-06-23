<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-1 uk-width-1-1">
                        <div class="md-input-wrapper md-input-filled">
                            <label for="cluster_no">Cluster</label>
                            <select id="cluster_no" name="cluster_no" class="md-input">
                                <option value="0">select cluster</option>
                                <?php foreach ($getClusters as $c) {
                                    echo '<option value="' . $c->cluster_no . '" ' . ($slug == $c->cluster_no ? 'selected' : '') . '>' . $c->cluster_no . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-width-large-1-1 uk-width-medium-1-1">
                        <button type="button" href="javascript:void(0)" class="md-btn md-btn-primary"
                                onclick="searchData()">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function searchData() {
                var cluster_no = $('#cluster_no').val();
                if (cluster_no == '' || cluster_no == undefined || cluster_no == 0) {
                    $('#cluster_no').css('color', 'red');
                } else {
                    window.location.href = '<?php echo base_url()?>index.php/dashboard/household/' + cluster_no;
                }
            }
        </script>
        <div class="md-card">
            <div class="md-card-content">

                <table id="dt_tableExports" class="uk-table" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>S No.</th>
                        <th>Cluster</th>
                        <th>Household</th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php
                    $s = 0;
                    foreach ($getData as $key => $value) {
                        $s++;
                        echo '<tr> 
                        <td>' . $s . '</td> 
                        <td>' . $value->cluster_no . '</td>
                        <td>' . $value->hhno . '</td> 
                      </tr>';
                    } ?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>S No.</th>
                        <th>Cluster</th>
                        <th>Household</th>
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
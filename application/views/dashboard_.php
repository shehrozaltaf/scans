<div id="page_content">
    <div id="page_content_inner">

        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-2 uk-width-1-2">
                        <div class="uk-input-group">
                       <span class="uk-input-group-addon">
                            <i class="uk-input-group-icon uk-icon-home"></i>
                       </span>
                            <label for="cluster_no">Cluster</label>
                            <input class="md-input" type="text" id="cluster_no" value="3321">
                        </div>
                    </div>
                    <div class="uk-width-large-1-2 uk-width-1-2">
                        <div class="uk-input-group">
                       <span class="uk-input-group-addon">
                            <i class="uk-input-group-icon uk-icon-home"></i>
                       </span>
                            <label for="household">Household</label>
                            <input class="md-input" type="text" id="household" value="0180-001">
                        </div>
                    </div>
                    <div class="uk-width-large-1-3 uk-width-medium-1-1">
                        <button type="button" href="javascript:void(0)" class="md-btn md-btn-primary"
                                onclick="searchData()">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="md-card">
            <div class="md-card-content">
                <div class="gallery_grid uk-grid-width-medium-1-4 uk-grid-width-large-1-5" id="galleryGrid">
                    <!-- --><?php /*if (isset($getData) && $getData != '') {
                        foreach ($getData as $k => $v) {
                            echo '
                            <div>
                            <div class="md-card md-card-hover">
                                                <div class="gallery_grid_item md-card-content">
                                                    <a href="https://vcoe1.aku.edu/scans/api/uploads/' . $v->f01 . '" data-uk-lightbox="{group:\'gallery\'}">
                                                        <img src="https://vcoe1.aku.edu/scans/api/uploads/' . $v->f01 . '" alt="">
                                                    </a>
                                                    <div class="gallery_grid_image_caption"> 
                                                     <div class="gallery_grid_image_menu" data-uk-dropdown="{pos:\'top-right\'}">
                                <i class="md-icon material-icons">&#xE5D4;</i>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE150;</i>
                                            Edit</a></li>
                                        <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE872;</i>
                                            Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                                                        <span class="gallery_image_title uk-text-truncate">Cluster: ' . $v->cluster_no . '</span>
                                                        <span class="uk-text-muted uk-text-small">Household: ' . $v->hhno . '</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> ';
                        }
                    } */ ?>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- waitForImages  -->
<script src="<?php echo base_url() ?>assets/js/custom/jquery.waitforimages.min.js"></script>
<!--  gallery functions -->
<script src="<?php echo base_url() ?>assets/js/pages/page_gallery.min.js"></script>
<style>
    .error {
        border-bottom: 1px solid red !important;
    }
</style>
<script>
    function searchData() {
        $("#cluster_no").removeClass('error');
        $("#household").removeClass('error');
        var mydata = {};
        mydata['cluster_no'] = $("#cluster_no").val();
        mydata['household'] = $("#household").val();
        var flag = 0;
        if (mydata['cluster_no'] == '' || mydata['cluster_no'] == undefined) {
            $("#cluster_no").addClass('error');
            flag = 1;
        }
        if (mydata['household'] == '' || mydata['household'] == undefined) {
            $("#household").addClass('error');
            flag = 1;
        }
        if (flag == 0) {
            $.ajax({
                url: '<?php echo base_url()?>index.php/Dashboard/searchData',
                data: mydata,
                method: 'POST',
                success: function (res) {

                    var items = '';
                    if (res != '' && JSON.parse(res).length > 0) {
                        var response = JSON.parse(res);
                        try {
                            $.each(response, function (i, v) {
                                var sp = v.f01.split('_');
                                items += '<div>' +
                                    '<div class="md-card md-card-hover">' +
                                    '<div class="gallery_grid_item md-card-content">' +
                                    '<a href="https://vcoe1.aku.edu/scans/api/uploads/' + v.f01 + '" ' +
                                    'data-uk-lightbox="{group:\\\'gallery\\\'}">' +
                                    '<img src="https://vcoe1.aku.edu/scans/api/uploads/' + v.f01 + '" alt="">' +
                                    ' </a>' +
                                    ' <div class="gallery_grid_image_caption"> ' +
                                    '<span class="gallery_image_title uk-text-truncate">Image No: ' + sp[2] + '</span>' +
                                    ' <span class="uk-text-muted uk-text-small">Cluster: ' + v.cluster_no + '</span>' +
                                    ' <span class="uk-text-muted uk-text-small">Household: ' + v.hhno + '</span><br>' +
                                    ' <span class="uk-text-muted uk-text-small">Image URL: https://vcoe1.aku.edu/scans/api/uploads/' + v.f01 + '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';
                            })
                        } catch (e) {
                        }
                    } else {
                        items += '<div>' +
                            '<div class="md-card-hover">' +
                            '<div class="gallery_grid_item md-card-content " style="color: red"> No Record Found' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                    $('#galleryGrid').html(items);


                }
            })

        } else {
            $("#cluster_no").addClass('error');
            $("#household").addClass('error');
            alert('something went wrong');
        }


    }
</script>
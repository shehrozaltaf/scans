<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-2 uk-width-1-2">
                        <div class="md-input-wrapper md-input-filled">
                            <label for="cluster_no">Cluster</label>
                            <input class="md-input" type="text" id="cluster_no" value="5901">
                            <!--<select id="cluster_no" name="cluster_no" class="md-input">
                                <option value="0">select cluster</option>
                                <?php /*foreach ($getClusters as $c) {
                                    echo '<option value="' . $c->cluster_no . '" '.($slug==$c->cluster_no ?'selected':'').'>' . $c->cluster_no . '</option>';
                                } */ ?>
                            </select>-->
                        </div>
                    </div>
                    <div class="uk-width-large-1-2 uk-width-1-2">
                        <div class="md-input-wrapper md-input-filled ">
                            <label for="household">Household</label>
                            <input class="md-input" type="text" id="household" value="0015-001">
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
        <div class="uk-grid">
            <div class="uk-grid-width-medium-1-2">
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
            <div class="uk-grid-width-medium-1-2">
                <div class="md-card scoreForms" style="display: none">
                    <div class="md-card-content">
                        <!--                <h3 class="heading_a">Buttons</h3>-->
                        <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-right">
                                    <h3 class="text-center uk-text-large">UR</h3>
                                    <div class="">
                                        <?php for ($i = 55; $i >= 51; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
class="my-btn md-btn md-btn-wave " >' . $i . ' <!--<span class="uk-badge">16</span>--></a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 17; $i >= 11; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-left">
                                    <h3 class="text-center uk-text-large">UL</h3>
                                    <div class="">
                                        <?php for ($i = 61; $i <= 65; $i++) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 21; $i <= 27; $i++) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-right">
                                    <h3 class="text-center uk-text-large">LR</h3>
                                    <div class="">
                                        <?php for ($i = 85; $i >= 81; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"  class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 47; $i >= 41; $i--) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" onclick="setValue(this)" class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-left">
                                    <h3 class="text-center uk-text-large">LL</h3>
                                    <div class="">
                                        <?php for ($i = 71; $i <= 75; $i++) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" onclick="setValue(this)" class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 31; $i <= 37; $i++) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" onclick="setValue(this)" class="my-btn md-btn md-btn-wave">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <h6 class="text-center">DMFT Score:</h6>
                            <div class="">
                                <label for="my_inp">D: </label>
                                <input class="md-input" type="text" id="my_inp">
                            </div>
                            <div class="">
                                <label for="my_inp">M: </label>
                                <input class="md-input" type="text" id="my_inp">
                            </div>
                            <div class="">
                                <label for="my_inp">F: </label>
                                <input class="md-input" type="text" id="my_inp">
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <h6 class="text-center">dmft score:</h6>
                            <div class="">
                                <label for="my_inp">d: </label>
                                <input class="md-input" type="text" id="my_inp">
                            </div>
                            <div class="">
                                <label for="my_inp">m: </label>
                                <input class="md-input" type="text" id="my_inp">
                            </div>
                            <div class="">
                                <label for="my_inp">f: </label>
                                <input class="md-input" type="text" id="my_inp">
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <div class="md-input-wrapper md-input-filled">
                                        <label>Other Observation:</label>
                                        <textarea cols="100" rows="4" class="md-input autosized"></textarea>
                                        <span class="md-input-bar "></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <button type="button" href="javascript:void(0)" class="md-btn md-btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
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

    .md-btn-mini {
        line-height: 21px !important;
        min-width: 12px;
        font-size: 10px !important;
        min-height: 24px;
    }

    .text-center {
        text-align: center;
    }

    .my-btn {
        margin: 4px !important;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

</style>
<script>

    function setValue(obj) {
        var a = $(obj).attr('data-id');
        var v = $(obj).attr('data-value');
        if (v == 0) {
            $(obj).attr('data-value', 1).addClass('md-btn-primary');
        } else if (v == 1) {
            $(obj).attr('data-value', 2).removeClass('md-btn-primary').addClass('md-btn-success');
        } else if (v == 2) {
            $(obj).attr('data-value', 3).removeClass('md-btn-success').addClass('md-btn-danger');
        } else {
            $(obj).attr('data-value', 0).removeClass('md-btn-danger');
        }
    }


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
                    $('.scoreForms').css('display', 'none');
                    var items = '';
                    var showForm = 0;
                    if (res != '' && JSON.parse(res).length > 0) {
                        showForm = 1;
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
                    setTimeout(function () {
                        $('#galleryGrid').html('').html(items);
                    }, 500);
                    if (showForm == 1) {
                        setTimeout(function () {
                            $('.scoreForms').css('display', 'block');
                        }, 2000);
                    }
                }
            })

        } else {
            $("#cluster_no").addClass('error');
            $("#household").addClass('error');
            alert('something went wrong');
        }
    }
</script>
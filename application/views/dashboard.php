<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-2 uk-width-1-2">
                        <div class="md-input-wrapper md-input-filled">
                            <label for="cluster_no">Cluster</label>
                            <input class="md-input" type="text" id="cluster_no" value="3321">
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

        <div class="uk-grid">
            <div class="uk-width-large-1-2">
                <div class="md-card scoreForms" style="display: none">
                    <div class="md-card-content">
                        <div class="uk-slidenav-position" data-uk-slideshow="{animation:'scale'}">
                            <ul class="uk-slideshow" id="galleryGridas">
                                <?php if (isset($getData) && $getData != '') {
                                    foreach ($getData as $k => $v) {
                                        echo '  <li><img src="https://vcoe1.aku.edu/scans/api/uploads/' . $v->f01 . '" alt=""></li>';
                                    }
                                } ?>
                            </ul>
                            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                               data-uk-slideshow-item="previous"></a>
                            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                               data-uk-slideshow-item="next"></a>
                        </div>
                        <div class=" " id="galleryGridasss">
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
            <div class="uk-width-large-1-2">
                <div class="md-card scoreForms" style="display: none">
                    <div class="md-card-content ">
                        <h1 class="heading_a uk-margin-large-top">Dental Scoring:</h1>
                        <input type="hidden" id="cluster_score" name="cluster_score">
                        <input type="hidden" id="hhno_score" name="hhno_score">
                        <div class="uk-grid uk-grid-divider uk-margin-large-top" data-uk-grid-margin>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">
                                <div class="align-right">
                                    <h1 class="text-center uk-text-large">UR</h1>
                                    <div class="">
                                        <?php for ($i = 55; $i >= 51; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="u"  onclick="setValue(this)"
class="my-btn md-btn md-btn-wave md-btn-mini " >' . $i . ' <!--<span class="uk-badge">16</span>--></a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 17; $i >= 11; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="u"  onclick="setValue(this)"
class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-left">
                                    <h3 class="text-center uk-text-large">UL</h3>
                                    <div class="">
                                        <?php for ($i = 61; $i <= 65; $i++) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="u"  onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 21; $i <= 27; $i++) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="u" onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
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
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="l" onclick="setValue(this)" 
                                             class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 47; $i >= 41; $i--) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" data-level="l" onclick="setValue(this)"
                                             class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-left">
                                    <h3 class="text-center uk-text-large">LL</h3>
                                    <div class="">
                                        <?php for ($i = 71; $i <= 75; $i++) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" data-level="l" 
                                            onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 31; $i <= 37; $i++) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" data-level="l"  data-value="0"
                                             onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <h3 class="text-center uk-text-large">
                                    DMFT Score</h3>
                            </div>
                        </div>
                        <!--                            <h6 class="text-center">DMFT Score:</h6>-->
                        <div class="uk-grid">
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_d" class="uk-text-primary">D: </label>
                                <input class="md-input" type="number" id="u_dmft_d" name="u_dmft_d" value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_m" class="uk-text-success">M: </label>
                                <input class="md-input" type="number" id="u_dmft_m" name="u_dmft_m" value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_f" class="uk-text-danger">F: </label>
                                <input class="md-input" type="number" id="u_dmft_f" name="u_dmft_f" value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_t">Total: </label>
                                <input class="md-input" type="number" id="u_dmft_t" name="u_dmft_t" value="0">
                            </div>

                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <h3 class="text-center uk-text-large">
                                    dmft score</h3>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_d" class="uk-text-primary">d: </label>
                                <input class="md-input" type="number" id="l_dmft_d" name="l_dmft_d" value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_m" class="uk-text-success">m: </label>
                                <input class="md-input" type="number" id="l_dmft_m" name="l_dmft_m" value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_f" class="uk-text-danger">f: </label>
                                <input class="md-input" type="number" id="l_dmft_f" name="l_dmft_f" value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_t">total: </label>
                                <input class="md-input" type="number" id="l_dmft_t" name="l_dmft_t" value="0">
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <div class="md-input-wrapper md-input-filled">
                                        <label for="other_observation">Other Observation:</label>
                                        <textarea cols="100" rows="4" id="other_observation" name="other_observation"
                                                  class="md-input autosized"></textarea>
                                        <span class="md-input-bar "></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <button type="button" href="javascript:void(0)" class="md-btn md-btn-primary"
                                        onclick="submitData()">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">
                                <p>Coding Criteria for DMFT index:</p>
                                <p>D = carious/ carious & filled</p>
                                <p>M = missing due to carries</p>
                                <p>F = filled due to carries</p>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <p>Coding Criteria for dmft index:</p>
                                <p>d = carious/ carious & filled</p>
                                <p>m = missing due to carries</p>
                                <p>f = filled due to carries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- waitForImages  -->
<!--<script src="--><?php //echo base_url() ?><!--assets/js/custom/jquery.waitforimages.min.js"></script>-->
<!--  gallery functions -->
<!--<script src="--><?php //echo base_url() ?><!--assets/js/pages/page_gallery.min.js"></script>-->
<style>
    .error {
        border-bottom: 1px solid red !important;
    }

    .md-btn-myPrimary {
        background: #2196f3 !important;
        color: #fff;
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
        margin: 2px !important;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

</style>
<script>

    function submitData() {
        var data = {};
        data['ud'] = $('#u_dmft_d').val();
        data['um'] = $('#u_dmft_m').val();
        data['uf'] = $('#u_dmft_f').val();
        data['ut'] = $('#u_dmft_t').val();
        data['ld'] = $('#l_dmft_d').val();
        data['lm'] = $('#l_dmft_m').val();
        data['lf'] = $('#l_dmft_f').val();
        data['lt'] = $('#l_dmft_t').val();
        data['other_observation'] = $('#other_observation').val();
        var btn = $('.md-btn-mini');
        var mydata = [];
        $.each(btn, function (i, v) {
            var l = $(v).attr('data-level');
            var id = $(v).attr('data-id');
            var va = $(v).attr('data-value');
            var k = l + id;
            mydata.push(k + ' : ' + va);
        });
        data['data'] = mydata;
        CallAjax('<?php echo base_url()?>index.php/dashboard/submitData', 'POST', data, function (res) {
            console.log(res);
        });
    }

    function setValue(obj) {
        var a = $(obj).attr('data-id');
        var v = $(obj).attr('data-value');
        var l = $(obj).attr('data-level');
        if (v == 0) {
            $(obj).attr('data-value', 1).addClass('md-btn-myPrimary');
            var g = $('#' + l + '_dmft_d').val();
            $('#' + l + '_dmft_d').val(parseInt(g) + 1);
        } else if (v == 1) {
            $(obj).attr('data-value', 2).removeClass('md-btn-myPrimary').addClass('md-btn-success');
            var g = $('#' + l + '_dmft_d').val();
            $('#' + l + '_dmft_d').val(parseInt(g) - 1);

            var m = $('#' + l + '_dmft_m').val();
            $('#' + l + '_dmft_m').val(parseInt(m) + 1);
        } else if (v == 2) {
            $(obj).attr('data-value', 3).removeClass('md-btn-success').addClass('md-btn-danger');
            var m = $('#' + l + '_dmft_m').val();
            $('#' + l + '_dmft_m').val(parseInt(m) - 1);
            var f = $('#' + l + '_dmft_f').val();
            $('#' + l + '_dmft_f').val(parseInt(f) + 1);
        } else {
            $(obj).attr('data-value', 0).removeClass('md-btn-danger');
            var f = $('#' + l + '_dmft_f').val();
            $('#' + l + '_dmft_f').val(parseInt(f) - 1);
        }

        var ud = $('#u_dmft_d').val();
        var um = $('#u_dmft_m').val();
        var uf = $('#u_dmft_f').val();
        $('#u_dmft_t').val(parseInt(ud) + parseInt(um) + parseInt(uf));

        var ld = $('#l_dmft_d').val();
        var lm = $('#l_dmft_m').val();
        var lf = $('#l_dmft_f').val();
        $('#l_dmft_t').val(parseInt(ld) + parseInt(lm) + parseInt(lf));


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
                                /* items += '<div>' +
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
                                     '</div>';*/
                                items += ' <li><img src="https://vcoe1.aku.edu/scans/api/uploads/' + v.f01 + '" alt=""></li>';
                                $('#cluster_score').val(v.cluster_no);
                                $('#hhno_score').val(v.hhno);
                            })
                        } catch (e) {
                        }
                    } else {

                        items += '<li><div>' +
                            '<div class="md-card-hover">' +
                            '<div class="gallery_grid_item md-card-content " style="color: red"> No Record Found' +
                            '</div>' +
                            '</div>' +
                            '</div></li>';
                    }

                    setTimeout(function () {
                        $('#galleryGridas').html('').html(items);
                        if (showForm == 1) {
                            $('.scoreForms').css('display', 'block');
                        }

                    }, 500);
                }
            })

        } else {
            $("#cluster_no").addClass('error');
            $("#household").addClass('error');
            alert('something went wrong');
        }
    }
</script>
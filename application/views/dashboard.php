<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/viewerjs/viewer.min.css" media="all">
<script src="<?php echo base_url() ?>assets/bower_components/viewerjs/viewer.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/viewerjs/jquery-viewer.min.js"></script>


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

    /* #galleryGrid_viewer li {
         !*border: 1px solid transparent;*!
         float: left;
         height: calc(100% / 3);
         margin: 0 -1px -1px 0;
         overflow: hidden;
         width: calc(100% / 3);
     }

     #galleryGrid_viewer li:first-child {
     }*/

    .uk-slidenav-contrast {
        color: #2196f3;
    }

    .uk-slidenav-contrast:focus, .uk-slidenav-contrast:hover {
        color: #0277bd;
    }
</style>
<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-2 uk-width-1-2">
                        <div class="md-input-wrapper md-input-filled">
                            <label for="cluster_no">Cluster</label>
                            <input class="md-input" type="text" id="cluster_no">
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
                            <input class="md-input" type="text" id="household">
                        </div>
                    </div>
                    <div class="uk-width-large-1-3 uk-width-medium-1-1">
                        <button type="button" href="javascript:void(0)" class="md-btn md-btn-primary"
                                onclick="searchData()">
                            Search
                        </button>
                        <button type="button" href="javascript:void(0)" class="md-btn md-btn-myPrimary watchvid"
                                style="display: none"
                                onclick="watchVideo()">
                            Watch Video
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
                            <ul class="uk-slideshow" id="galleryGrid_viewer">
                            </ul>
                            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                               data-uk-slideshow-item="previous"></a>
                            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                               data-uk-slideshow-item="next"></a>
                        </div>
                        <!-- <div class="docs-pictures clearfix " id="galleryGrid_viewer">
                         </div>-->
                    </div>
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="md-card scoreForms" style="display: none">
                    <div class="md-card-content ">
                        <h1 class="heading_a uk-margin-large-top">Dental Scoring:</h1>
                        <h6 class="heading_a md-color-red-A700 alreadyscored"></h6>
                        <input type="hidden" id="cluster_score" name="cluster_score">
                        <input type="hidden" id="hhno_score" name="hhno_score">
                        <div class="uk-grid uk-grid-divider uk-margin-large-top" data-uk-grid-margin>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">
                                <div class="align-right">
                                    <h1 class="text-center uk-text-large">UR</h1>
                                    <div class="">
                                        <?php for ($i = 55; $i >= 51; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="l"  onclick="setValue(this)"
class="my-btn md-btn md-btn-wave md-btn-mini l' . $i . '" >' . $i . ' <!--<span class="uk-badge">16</span>--></a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 17; $i >= 11; $i--) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="u"  onclick="setValue(this)"
class="my-btn md-btn md-btn-wave md-btn-mini u' . $i . '">' . $i . '</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-2">

                                <div class="align-left">
                                    <h3 class="text-center uk-text-large">UL</h3>
                                    <div class="">
                                        <?php for ($i = 61; $i <= 65; $i++) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="l"  onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave md-btn-mini l' . $i . '">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 21; $i <= 27; $i++) {
                                            echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" data-level="u" onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave md-btn-mini u' . $i . '">' . $i . '</a>';
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
                                             class="my-btn md-btn md-btn-wave md-btn-mini l' . $i . '">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 47; $i >= 41; $i--) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" data-level="u" onclick="setValue(this)"
                                             class="my-btn md-btn md-btn-wave md-btn-mini u' . $i . '">' . $i . '</a>';
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
                                            onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini l' . $i . '">' . $i . '</a>';
                                        } ?>
                                    </div>
                                    <div class="">
                                        <?php for ($i = 31; $i <= 37; $i++) {
                                            echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" data-level="u"  data-value="0"
                                             onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini u' . $i . '">' . $i . '</a>';
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
                                <input class="md-input" type="number" id="u_dmft_d" name="u_dmft_d" readonly disabled
                                       value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_m" class="uk-text-success">M: </label>
                                <input class="md-input" type="number" id="u_dmft_m" name="u_dmft_m" readonly disabled
                                       value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_f" class="uk-text-danger">F: </label>
                                <input class="md-input" type="number" id="u_dmft_f" name="u_dmft_f" readonly disabled
                                       value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="u_dmft_t">Total: </label>
                                <input class="md-input" type="number" id="u_dmft_t" name="u_dmft_t" readonly disabled
                                       value="0">
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
                                <input class="md-input" type="number" id="l_dmft_d" name="l_dmft_d" readonly disabled
                                       value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_m" class="uk-text-success">m: </label>
                                <input class="md-input" type="number" id="l_dmft_m" name="l_dmft_m" readonly disabled
                                       value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_f" class="uk-text-danger">f: </label>
                                <input class="md-input" type="number" id="l_dmft_f" name="l_dmft_f" readonly disabled
                                       value="0">
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-4">
                                <label for="l_dmft_t">total: </label>
                                <input class="md-input" type="number" id="l_dmft_t" name="l_dmft_t" readonly disabled
                                       value="0">
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <div class="md-input-wrapper md-input-filled md-input-focus">
                                        <label for="other_observation">Other Observation:</label>
                                        <textarea cols="100" rows="4" id="other_observation" name="other_observation"
                                                  class="md-input autosized "></textarea>
                                        <span class="md-input-bar "></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-large-1-1 uk-width-medium-1-1">

                                <button type="button" href="javascript:void(0)" class="md-btn md-btn-primary submitBtn"
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


        <div class="uk-grid videoGrid" style="display: none">
            <div class="uk-width-large-1-1">
                <div class="md-card  ">
                    <div class="md-card-content">
                        <div class="" id="videoGrid">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<input type="hidden" id="hidden_loginUser"
       value="<?php echo(isset($_SESSION['login']['idUser']) && $_SESSION['login']['idUser'] != '' ? $_SESSION['login']['idUser'] : 0) ?>">
<input type="hidden" id="hidden_id" value="">
<!-- waitForImages  -->


<!--<script src="--><?php //echo base_url() ?><!--assets/js/custom/jquery.waitforimages.min.js"></script>-->
<!--  gallery functions -->
<!--<script src="--><?php //echo base_url() ?><!--assets/js/pages/page_gallery.min.js"></script>-->

<script>
    function watchVideo() {
        $('.videoGrid').css('display', 'block');
        $('html, body').animate({
            scrollTop: $(".videoGrid").offset().top
        }, 2000);
    }

    function submitData() {
        var data = {};
        var cluster = $('#cluster_score').val();
        var hhno = $('#hhno_score').val();

        data['cluster'] = $('#cluster_score').val();
        data['hhno'] = $('#hhno_score').val();
        if (cluster == '' || cluster == undefined) {
            data['cluster'] = $('#cluster_no').val();
        }

        if (hhno == '' || hhno == undefined) {
            data['hhno'] = $('#household').val();
        }
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

            var obj = {};
            obj[k] = va;
            mydata.push(obj);
        });
        data['data'] = mydata;
        CallAjax('<?php echo base_url()?>index.php/dashboard/submitData', data, 'POST', function (res) {
            if (res != '' && JSON.parse(res).length > 0) {
                var response = JSON.parse(res);
                try {
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    }
                } catch (e) {
                }
            } else {
                notificatonShow('Something went wrong', 'error');
            }
        });
    }

    function editData() {
        var data = {};
        data['id'] = $('#hidden_id').val();
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

            var obj = {};
            obj[k] = va;
            mydata.push(obj);
        });
        data['data'] = mydata;
        CallAjax('<?php echo base_url()?>index.php/dashboard/editData', data, 'POST', function (res) {
            if (res != '' && JSON.parse(res).length > 0) {
                var response = JSON.parse(res);
                try {
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    }
                } catch (e) {
                }
            } else {
                notificatonShow('Something went wrong', 'error');
            }
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
        var hidden_loginUser = $('#hidden_loginUser').val();
        $('.submitBtn').css('display', 'block').text('Submit').attr('onclick', 'submitData()');
        $('.alreadyscored').text('');
        $('.watchvid').css('display', 'none');
        $('.videoGrid').css('display', 'none');
        var btn = $('.md-btn-mini');
        $.each(btn, function (i, v) {
            $(this).attr('data-value', 0).removeClass('md-btn-myPrimary').removeClass('md-btn-success').removeClass('md-btn-danger');
        });
        $('#hidden_id').val('');
        $('#u_dmft_d').val(0);
        $('#u_dmft_m').val(0);
        $('#u_dmft_f').val(0);
        $('#u_dmft_t').val(0);
        $('#l_dmft_d').val(0);
        $('#l_dmft_m').val(0);
        $('#l_dmft_f').val(0);
        $('#l_dmft_t').val(0);
        $('#other_observation').val('').text('');


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
                    var viditems = '';
                    var items = '';
                    var showForm = 0;
                    if (res != '' && res != undefined) {
                        showForm = 1;
                        var response = JSON.parse(res);
                        if (response['dataExist'][0] != '' && response['dataExist'][0] != undefined && response['dataExist'][0] != 0) {
                            notificatonShow(mydata['cluster_no'] + '  cluster already scored', 'info');
                            var mycolor = '';
                            $.each(response['dataExist'][0], function (i, v) {
                                $.each(v, function (ii, vv) {
                                    if (vv == 1) {
                                        mycolor = 'md-btn-myPrimary';
                                    } else if (vv == 2) {
                                        mycolor = 'md-btn-success';
                                    } else if (vv == 3) {
                                        mycolor = 'md-btn-danger';
                                    } else {
                                        mycolor = '';
                                    }
                                    $('.' + ii).attr('data-value', vv).addClass(mycolor);

                                });

                                $('#u_dmft_d').val(v.ud);
                                $('#u_dmft_m').val(v.um);
                                $('#u_dmft_f').val(v.uf);
                                $('#u_dmft_t').val(v.ut);
                                $('#l_dmft_d').val(v.ld);
                                $('#l_dmft_m').val(v.lm);
                                $('#l_dmft_f').val(v.lf);
                                $('#l_dmft_t').val(v.lt);
                                $('#other_observation').val(v.other_observation).text(v.other_observation);

                                $('.alreadyscored').text('Already scored by: ' + v.createdBy);

                                if (hidden_loginUser == v.createdBy) {
                                    $('.submitBtn').text('Edit').attr('onclick', 'editData()');
                                    $('#hidden_id').val(v.id);
                                } else {
                                    $('.submitBtn').css('display', 'none');
                                }

                            });
                        }
                        try {
                            if (response['images'][0] != '' && response['images'][0] != undefined) {
                                $.each(response['images'][0], function (i, v) {
                                    // var sp = v.f01.split('_');
                                    items += ' <li><img src="https://vcoe1.aku.edu/scans/api/uploads/' + v.f01 + '" alt="' + v.f01 + '"></li>';
                                    $('#cluster_score').val(v.cluster_no);
                                    $('#hhno_score').val(v.hhno);
                                });

                                $.each(response['videos'][0], function (m, k) {
                                    $('.watchvid').css('display', 'inline-block');
                                    viditems += '<video width="500" height="240" controls>\n' +
                                        '  <source src="https://vcoe1.aku.edu/scans/api/v_uploads/' + mydata['cluster_no'] + '/' + k.Filename + '" type="video/mp4">\n' +
                                        'Your browser does not support the video tag.\n' +
                                        '</video>';

                                })
                            } else {
                                showForm = 0;
                                viditems += '<p>No Video</p>';
                                items += '<li><div>' +
                                    '<div class="md-card-hover">' +
                                    '<div class="gallery_grid_item md-card-content " style="color: red"> No Record Found' +
                                    '</div>' +
                                    '</div>' +
                                    '</div></li>';

                                notificatonShow('No Record Found', 'error');
                            }

                        } catch (e) {

                        }
                    } else {
                        viditems += '<p>No Video</p>';
                        items += '<li><div>' +
                            '<div class="md-card-hover">' +
                            '<div class="gallery_grid_item md-card-content " style="color: red"> No Record Found' +
                            '</div>' +
                            '</div>' +
                            '</div></li>';
                        notificatonShow('No Record Found', 'error');
                    }

                    setTimeout(function () {

                        setTimeout(function () {
                            $('#galleryGrid_viewer').html('').html(items);
                            // $('#galleryGrid_viewer').viewer();
                        }, 1000);
                        $('#videoGrid').html('').html(viditems);
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
<style>
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
<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">
                <!--                <h3 class="heading_a">Buttons</h3>-->
                <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">

                        <div class="align-right">
                            <h3 class="text-center uk-text-large">UR</h3>
                            <div class="md-btn-group">
                                <?php for ($i = 55; $i >= 51; $i--) {
                                    echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
class="my-btn md-btn md-btn-wave md-btn-mini " >' . $i . ' <!--<span class="uk-badge">16</span>--></a>';
                                } ?>
                            </div>
                            <div class="md-btn-group">
                                <?php for ($i = 17; $i >= 11; $i--) {
                                    echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">

                        <div class="align-left">
                            <h3 class="text-center uk-text-large">UL</h3>
                            <div class="md-btn-group">
                                <?php for ($i = 61; $i <= 65; $i++) {
                                    echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                } ?>
                            </div>
                            <div class="md-btn-group">
                                <?php for ($i = 21; $i <= 27; $i++) {
                                    echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"
 class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">

                        <div class="align-right">
                            <h3 class="text-center uk-text-large">LR</h3>
                            <div class="md-btn-group">
                                <?php for ($i = 85; $i >= 81; $i--) {
                                    echo '<a href="javascript:void(0)"  data-id="' . $i . '" data-value="0" onclick="setValue(this)"  class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                } ?>
                            </div>
                            <div class="md-btn-group">
                                <?php for ($i = 47; $i >= 41; $i--) {
                                    echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">

                        <div class="align-left">
                            <h3 class="text-center uk-text-large">LL</h3>
                            <div class="md-btn-group">
                                <?php for ($i = 71; $i <= 75; $i++) {
                                    echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
                                } ?>
                            </div>
                            <div class="md-btn-group">
                                <?php for ($i = 31; $i <= 37; $i++) {
                                    echo '<a href="javascript:void(0)" data-id="' . $i . '" data-value="0" onclick="setValue(this)" class="my-btn md-btn md-btn-wave md-btn-mini">' . $i . '</a>';
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
</script>
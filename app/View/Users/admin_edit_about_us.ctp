<?php echo $this->Html->script('admin/tinymce/js/tinymce/tinymce.min.js'); ?>


<script type="text/javascript">
    $(document).ready(function() {
        $("#submit").click(function() {
            tinyMCE.triggerSave();
            var status;
            status = $("#register").valid(); //Validate again
            if (status == true) {
                //Carry on
            } else {}
        });
        var validator = $("#register").click(function() {
            tinyMCE.triggerSave();
        }).validate({
            ignore: "",
            rules: {
                "data[About][title]": {
                    required: true
                },
                "data[About][content]": {
                    required: true
                }
            },
            messages: {

                "data[About][content]": {
                    required: 'Description is required.'
                }

            },

            errorPlacement: function(label, element) {
                // position error label after generated textarea
                if (element.is("textarea")) {
                    label.insertAfter(element.next());
                } else {
                    label.insertAfter(element)
                }
            }

        });
        $('#submit').click(function() {
            var sub = $('#elm4_textarea').val();

            if (sub == "") {
                $("#req").show();
            } else {
                $("#req").hide();
            }
            //return false;
        });

    });
</script>

<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [{
            title: 'Bold text',
            inline: 'b'
        }, {
            title: 'Red text',
            inline: 'span',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Red header',
            block: 'h1',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
        }, {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
        }, {
            title: 'Table styles'
        }, {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
        }],

        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
        }, {
            title: 'Test template 2',
            content: 'Test 2'
        }]
    });
</script>



<div id="sub-nav">
    <div class="page-title">
        <h1>EDIT ABOUT US</h1>
        <span></span>
    </div>
    <div id="top-buttons">

    </div>

</div>


<div id="page-layout">
    <div id="page-content">
        <div id="page-content-wrapper">
            <a style="margin-bottom:10px;" class="ui-state-default ui-corner-all float-right ui-button" href="javascript:void(0);" onclick="history.go(-1)">Back</a>
            <div class="inner-page-title">
                <h2>Edit About Us</h2>
                <span></span>
            </div>

            <div class="content-box content-box-header" style="border:none;">
                <div class="column-content-box">
                    <div class="ui-state-default ui-corner-top ui-box-header">
                        <span class="ui-icon float-left ui-icon-notice"></span> Edit About Us
                    </div>

                    <div class="content-box-wrapper">

                        <form class="forms" id="register" method="post" enctype="multipart/form-data" action="<?php echo HTTP_ROOT;?>admin/Users/edit_about_us">
                            <input type="hidden" name="data[About][id]" value="<?php echo $edit_about['About']['id']?>" />
                            <fieldset>
                                <ul>
                                    <li>
                                        <label class="desc" for="firstname">Title<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <textarea style="width:97%;height:250px;" class="field text full" name="data[About][title]" type="text" value="<?php echo $edit_about[ 'About'][ 'title']?>">
                                            </textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Introduction Text<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <textarea style="width:97%;height:250px;" class="field text full" name="data[About][intro_content]" type="text" value="<?php echo $edit_about[ 'About'][ 'intro_content']?>">
                                            </textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Introduction Image<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <input class="field text full" style="width: 97%;" name="intro_image" type="file">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Introduction Image</label>
                                        <div><img class="field text full" width="250px" src="<?php echo HTTP_ROOT.'img/'.$edit_about['About']['intro_image']?>">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname"> More About us Text</label>
                                        <div>
                                            <textarea id="elm4_textarea" name="data[About][more_abts]" class="mceEditor mce_editor" style="width:97%;height:250px;">
                                                <?php echo $edit_about[ 'About'][ 'more_abts']?>
                                            </textarea>
                                        </div>
                                        <p id="req" style="display:none;"><em style="color:red;">This field is required.</em>
                                        </p>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our Mision Text<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <textarea style="width: 97%;" class="field text full" name="data[About][mission]" type="text">
                                                <?php echo $edit_about[ 'About'][ 'mission']?>
                                            </textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our Mision Image<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <input style="width: 97%;" class="field text full" name="mission_image" type="file">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our Mision Image</label>
                                        <div><img width="250px" class="field text full" src="<?php echo HTTP_ROOT.'img/'.$edit_about['About']['mission_image']?>">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our values Text<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <textarea style="width: 97%;" class="field text full" name="data[About][values]" type="text">
                                                <?php echo $edit_about[ 'About'][ 'values']?>
                                            </textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our values Image<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <input style="width: 97%;" class="field text full" name="value_image" type="file">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our values Image</label>
                                        <div><img width="250px" class="field text full" src="<?php echo HTTP_ROOT.'img/'.$edit_about['About']['value_image']?>">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our Solution Text<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <textarea style="width: 97%;" class="field text full" name="data[About][solution]" type="text">
                                                <?php echo $edit_about[ 'About'][ 'solution']?>
                                            </textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our Solution Image<em style="color:red;">*</em>
                                        </label>
                                        <div>
                                            <input style="width: 97%;" class="field text full" name="solution_image" type="file">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="desc" for="firstname">Our Solution Image</label>
                                        <div><img width="250px" class="field text full" src="<?php echo HTTP_ROOT.'img/'.$edit_about['About']['solution_image']?>">
                                        </div>
                                    </li>
                                    <li>
                                        <input type="submit" value="Save" id="submit">
                                    </li>

                                </ul>
                                </ul>
                            </fieldset>
                        </form>
                    </div>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
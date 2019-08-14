<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/froala_editor.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/froala_style.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/code_view.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/draggable.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/colors.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/emoticons.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/image_manager.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/image.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/table.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/char_counter.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/video.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/file.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/quick_insert.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/help.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/third_party/spell_checker.css">
    <link rel="stylesheet" href="../../assets/wysiwygeditor/css/plugins/special_characters.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <style>
        .btns-left-pane {
            float: left;
            clear: both;
        }
        .pane-central-border {
            border: 1px solid #ddd;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
            width: 98%;
            height: 100%;
            overflow-y: auto;
            /* margin-top: 5%; */
            /* margin-left: 10%; */
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            padding: 5%;
            /*margin-top: 0px;*/
            margin: 0px 0px 0px 0px;
        }

        .top-lft-button {
            position: absolute;
            left: 4%;
            top: 2%;
            z-index: 2;
        }

        .top-right-button {
            position: absolute;
            right: 4%;
            top: 2%;
            z-index: 2;
        }

        body {
            margin-bottom: 0px !important;
        }
        
        #plain_code {
            display: none;
        }
    </style>


</head>
<body class="<?php echo $__env->yieldContent('body_class'); ?>">

<button type="button" class="btn btn-primary top-lft-button">Back</button>
<div class="btn-group btns-left-pane top-right-button">
    <button type="button" class="btn btn-primary editor">Editor</button>
    <button type="button" class="btn btn-primary code">Code</button>
</div>

<div id="content_store" class="pane-central-border whole-pane">

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">CONTENT</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">

                    <div id='edit' style="margin-top: 30px;">
                        <h1>Full Featured</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="plain_code">

    </div>

    <button type="button" class="btn btn-primary save-editor">Save</button>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<script type="text/javascript" src="../../assets/wysiwygeditor/js/froala_editor.min.js" ></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/align.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/file.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/image.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/link.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/table.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/save.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/url.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/video.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/help.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/print.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/third_party/spell_checker.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/special_characters.min.js"></script>
<script type="text/javascript" src="../../assets/wysiwygeditor/js/plugins/word_paste.min.js"></script>


<script>
    $(function(){
        $('#edit').froalaEditor()
    });
</script>
<!--
<link rel="stylesheet" href="../../assets/codemirror-5.45.0/lib/codemirror.css">
<script src="../../assets/codemirror-5.45.0/lib/codemirror.js"></script>
-->
<script>
    var editor = CodeMirror(document.getElementById("plain_code"), {
        lineNumbers: true
    });

    var w = String(<?php echo '"'.rawurlencode($code).'"'; ?>);
    console.log(w);
    //w = w.replace(/\\"/g, '"');
    //JSON.parse(u);
    editor.setValue(decodeURIComponent(w));


    $('.save-editor').click(function() {
        console.log(editor.getValue());
    });

</script>


<script>

    $('.editor').click(function(){
        $("#accordion").show();
        $("#plain_code").hide();
    });
    $('.code').click(function(){
        $("#plain_code").show();
        $("#accordion").hide();
    });

</script>

<script>

    $('.save-editor').click(function() {
        var sendHtml = encodeURIComponent($('#edit').froalaEditor('html.get'));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/admin/replace-content",
            data: { page: 'about', content_id: 'main', new_content: sendHtml }
        })
            .done(function( msg ) {
                console.log(msg);
                //alert( "Data Saved: " + msg );
            });
    });

</script>


<script type="text/javascript" src="../../assets/admin/js/custom_editor_save_changes.js"></script>

</body>
</html>
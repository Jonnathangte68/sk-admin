<!DOCTYPE html>
<html>
<head>
	<title>New Email Template</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../spectrum.css">
	<script type="text/javascript" src="../spectrum.js"></script>
	<script type="text/javascript" src="../assets/jquery-resizable/dist/jquery-resizable.min.js"></script>


	<meta name="csrf-token" content="{{ csrf_token() }}">
	
</head>
<body>
<div class="row" style="background-color: #909090; position: fixed; width: 100%;top: 0;">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1">
		<div class="dropdown">
		  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="border-style: none; background-color: transparent !important;">File
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu" style="z-index: 55555 !important;">
		  	<li><a href="/admin/template-tool" target="_blank" onclick="menuNew()">New</a></li>
		    <li><a onclick="saveMen()">Save</a></li>
		    <li><a onclick="savenewMen()" data-toggle="modal" data-target="#modalSave">Save As</a></li>
		    <li><a href="#">Help</a></li>
		    <li><a onclick="exitMen()">Exit</a></li>
		  </ul>
		</div>
	</div>
</div>
<div id="fullOptions" class="row" style="position: fixed; width: 100%;top: 5%;z-index: 55 !important;">
	<div id="1stmenuitm" class="col-1 col-sm-1 col-md-1 col-lg-1" style="text-align: center;" draggable="true" ondragstart="drag(event)" data-dragelementtype="label">
		<div style="width: 100%;height: 105px;">
			<img src="../assets/app/img/textadd.png" style="width: 65px;">
			<div>Text</div>
		</div>
	</div>
	<div id="2stmenuitm" class="col-1 col-sm-1 col-md-1 col-lg-1" style="text-align: center;" draggable="true" ondragstart="drag(event)" data-dragelementtype="link">
		<div style="width: 100%;height: 105px;">
			<img src="../assets/app/img/linkadd.png" style="width: 65px;">
			<div>Link</div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1" style="text-align: center;" draggable="true" ondragstart="drag(event)" data-dragelementtype="image">
		<div style="width: 100%;height: 105px;">
			<img src="../assets/app/img/imgadd.png" style="width: 65px;">
			<div>Image</div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1" style="text-align: center;" draggable="true" ondragstart="drag(event)" data-dragelementtype="button">
		<div style="width: 100%;height: 105px;">
			<img src="../assets/app/img/btnadd.png" style="width: 65px;">
			<div>Button</div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1" style="text-align: center;" draggable="true" ondragstart="drag(event)" data-dragelementtype="lst">
		<div style="width: 100%;height: 105px;">
			<img src="../assets/app/img/listadd.png" style="width: 65px;">
			<div>List</div>
		</div>
	</div>
</div>


<div id="boxcontentout" style="width: 100%; height: 650px;margin-top: 10%;">
	<div id="boxcontent" style="width: 96%; height: 600px;border:1px solid #ddd;border-radius: 5px;margin:2%;" ondrop="drop(event)" ondragover="allowDrop(event)">
		<span style="color: white !important;">.</span>
	</div>
</div>

<div style="display: none;">
	<div id="tempboxcontentout"></div>
</div>


<input type="hidden" id="displayNav" name="displayNav" value="none">

    <div id="modalSave" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Save new...</h4>
	      </div>
	      <div class="modal-body" style="padding: 30px !important;">
	        <!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="filenametxt">File Name:</label>  
				  <div class="col-md-4">
				  <input id="filenametxt" name="filenametxt" type="text" placeholder="" class="form-control input-md">
				    
				  </div>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveFile(document.getElementById('filenametxt').value)">SAVE</button>
	      </div>
	    </div>

	  </div>
	</div>

<!-- Modal -->
<div id="addElement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Element</h4>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="xpos" name="xpos">
      	<input type="hidden" id="ypos" name="ypos">
      	<input type="hidden" id="type" name="type">
      	<div id="addtext1" class="form-group" style="padding: 2%;height: 80px;">
		  <label class="col-md-4 control-label" for="textarea" style="text-align: right;">Paragraph:</label>
		  <div class="col-md-4">   
		  	<textarea  class="form-control" id="txtcontent" name="txtcontent" style="height: 100%;width: 100%;"></textarea>
		  </div>
		</div>
		<div id="addtext2" class="form-group" style="text-align: center;">
			<input type='text' id="colorselect" />
		</div>
		<div id="addtext3" class="form-group" style="text-align: center;">
			<label class="col-md-4 control-label" for="textarea" style="text-align: right;">Size:</label>
		  <div class="col-md-4">   
		  	<select  class="form-control" id="txtfont" name="txtfont">
		  		<option value="8px" style="font-size: 8px;">Text</option>
		  		<option value="10px" style="font-size: 10px;">Text</option>
		  		<option value="12px" style="font-size: 12px;" selected="selected">Text</option>
		  		<option value="14px" style="font-size: 14px;">Text</option>
		  		<option value="16px" style="font-size: 16px;">Text</option>
		  		<option value="18px" style="font-size: 18px;">Text</option>
		  		<option value="20px" style="font-size: 20px;">Text</option>
		  		<option value="22px" style="font-size: 22px;">Text</option>
		  		<option value="24px" style="font-size: 24px;">Text</option>
		  		<option value="26px" style="font-size: 26px;">Text</option>
		  		<option value="48px" style="font-size: 48px;">Text</option>
		  	</select>
		  </div>
		</div>


		<!-- Image -->
		<!-- File Button --> 
		<div id="addimage1" class="form-group" style="width: 100%;">
		  <label class="col-md-4 control-label" for="filebutton">Image: </label>
		  <div class="col-md-4">
		    <input id="imgUpload" name="imgUpload" class="input-file" type="file">
		  </div>
		</div>

		<div id="addbuttons" class="row">
			<div class="row buttonrow">
				<div class="col-2 col-md-2 col-sm-2 col-lg-2"></div>
				<div class="col-1 col-md-1 col-sm-1 col-lg-1">
					<input type="radio" id="btndefaultblue" name="btndefaultblue" class="form-control">
				</div>
				<div class="col-2 col-md-2 col-sm-2 col-lg-2">
					<button class="btn btn-default">Text</button>
				</div>
				<div class="col-4 col-md-4 col-sm-4 col-lg-4">
					<input type="text" id="btndefaulttext" name="btndefaulttext" class="form-control">
				</div>
				<div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
				
			</div>

			<div class="row buttonrow">
				<div class="col-2 col-md-2 col-sm-2 col-lg-2"></div>
				<div class="col-1 col-md-1 col-sm-1 col-lg-1">
					<input type="radio" id="btnnormalblue" name="btnnormalblue" class="form-control">
				</div>
				<div class="col-2 col-md-2 col-sm-2 col-lg-2">
					<button class="btn btn-primary">Text</button>
				</div>
				<div class="col-4 col-md-4 col-sm-4 col-lg-4">
					<input type="text" id="btnnormalbluetext" name="btnnormalbluetext" class="form-control">
				</div>
				<div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
				
			</div>

			<div class="row buttonrow">
				<div class="col-2 col-md-2 col-sm-2 col-lg-2"></div>
				<div class="col-1 col-md-1 col-sm-1 col-lg-1">
					<input type="radio" id="btnsuccess" name="btnsuccess" class="form-control">
				</div>
				<div class="col-2 col-md-2 col-sm-2 col-lg-2">
					<button class="btn btn-success">Text</button>
				</div>
				<div class="col-4 col-md-4 col-sm-4 col-lg-4">
					<input type="text" id="btnsuccesstext" name="btnsuccesstext" class="form-control">
				</div>
				<div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
			</div>

			<div class="row buttonrow">
				<div class="col-2 col-md-2 col-sm-2 col-lg-2"></div>
				<div class="col-1 col-md-1 col-sm-1 col-lg-1">
					<input type="radio" id="btninfo" name="btninfo" class="form-control">
				</div>
				<div class="col-2 col-md-2 col-sm-2 col-lg-2">
					<button class="btn btn-info">Text</button>
				</div>
				<div class="col-4 col-md-4 col-sm-4 col-lg-4">
					<input type="text" id="btninfotext" name="btninfotext" class="form-control">
				</div>
				<div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
			</div>

			<div class="row buttonrow">
				<div class="col-2 col-md-2 col-sm-2 col-lg-2"></div>
				<div class="col-1 col-md-1 col-sm-1 col-lg-1">
					<input type="radio" id="btnwarning" name="btnwarning" class="form-control">
				</div>
				<div class="col-2 col-md-2 col-sm-2 col-lg-2">
					<button class="btn btn-warning">Text</button>
				</div>
				<div class="col-4 col-md-4 col-sm-4 col-lg-4">
					<input type="text" id="btnwarningtext" name="btnwarningtext" class="form-control">
				</div>
				<div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
			</div>

			<div class="row buttonrow">
				<div class="col-2 col-md-2 col-sm-2 col-lg-2"></div>
				<div class="col-1 col-md-1 col-sm-1 col-lg-1">
					<input type="radio" id="btndanger" name="btndanger" class="form-control">
				</div>
				<div class="col-2 col-md-2 col-sm-2 col-lg-2">
					<button class="btn btn-danger">Text</button>
				</div>
				<div class="col-4 col-md-4 col-sm-4 col-lg-4">
					<input type="text" id="btndangertext" name="btndangertext" class="form-control">
				</div>
				<div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
			</div>
			
		</div>

			
			
			
		<!-- Text input-->
		<div id="addlnk1" class="row">
			<div class="col-md-12">
				<div class="form-group">
				  <label class="col-md-4 control-label" for="lnkname">Link Name</label>  
				  <div class="col-md-4">
				  <input id="lnkname" name="lnkname" type="text" placeholder="" class="form-control input-md">
				    
				  </div>
				</div>	
			</div>
		</div>

		<div id="addlnk2" class="row">
			<div class="col-md-12">
				<!-- Prepended text-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="prependedtext">Link address</label>
				  <div class="col-md-8">
				    <div class="input-group">
				      <span class="input-group-addon">https://</span>
				      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="www.google.com" type="text">
				    </div>
				  </div>
				</div>
			</div>
		</div>

		



		<textarea id="lstelement" name="lstelement" style="width: 65%;height: 200px;margin-left: 17%;"></textarea>


		<br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="add2template" type="button" class="btn btn-primary">Add</button>
      </div>
    </div>

  </div>
</div>

<!-- End modal -->


<script type="text/javascript">
	$(document).ready(function(){
		$("#colorselect").spectrum({
		    color: "#000000"
		});
		$(".resizable").resizable({ 
		    handleSelector: ".splitter",
		    resizeHeight: false
		}); 



		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});

		/*$('.dropdown-menu')
		    .bind('beforeShow', function() {
		      alert('beforeShow');
		    }) 
		    .bind('afterShow', function() {
		      alert('afterShow');
		    }).hide();
		    .show(1000, function() {
		      alert('in show callback');
		    });
		    .hide();*/

		console.log("Ready");
		/*$('.dropdown-menu').click(function() {
			if ($('.dropdown-menu').css('display')!=$('#displayNav').val()) {
				$('.dropdown-menu').val($('.dropdown-menu').css('display'));

				alert("Change on gsdgsdkg..");
			}

		});*/


	});
</script>


<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  console.log(ev.target);
  jQuery(ev.target).attr("id", String(Math.floor((Math.random() * 55555) + 1)));
  var type='';
  if (ev.target.dataset.dragelementtype) {
  	console.log("check data on 1");
	type=ev.target.dataset.dragelementtype;
  }else if ($(ev.target).parent().data('dragelementtype')) {
  	console.log("check data on 2");
	type=$(ev.target).parent().data('dragelementtype');
  }else if ($(ev.target).parent().parent().data('dragelementtype')) {
  	console.log("check data on 3");
	type=$(ev.target).parent().parent().data('dragelementtype');
  }else {
  	ev.dataTransfer.setData("text2", ev.target.id);
  	//ev.dataTransfer.setData("toX", ev.clientX);
  	//ev.dataTransfer.setData("toY", ev.clientY);
  }
  ev.dataTransfer.setData("text", type);
}

function drop(ev) {
  console.log(event.clientX);
  console.log(event.clientY);
  $('#xpos').val(event.clientX);
  $('#ypos').val(event.clientY);
  //var posy = $('#xpoy').val();
  var data = ev.dataTransfer.getData("text");
  $('#type').val(data);
  console.log(data);

  if (!data || data==undefined || data==null || data=="") {

  	var data2 = ev.dataTransfer.getData("text2");
  	var xp = ev.clientX;
  	var yp = ev.clientY;
  	console.log(xp);
  	console.log(yp);
  	console.log("move element 2");
  	console.log($('#'+data2));
  	$('#'+data2).css({'left':xp,'top':yp});



  }else {
  		$('#addtext1').hide();
		$('#addtext2').hide();
		$('#addtext3').hide();
		$('#addlnk1').hide();
		$('#addlnk2').hide();
		$('#addimage1').hide();
		$('#addbuttons').hide();
		$('#lstelement').hide();

		  if (data=="label") {
		  		$('#addtext1').show();
		  		$('#addtext2').show();
		  		$('#addtext3').show();
		  } else if (data=="link") {
		  		$('#addlnk1').show();
		  		$('#addlnk2').show();
		  } else if (data=="image") {
		  		$('#addimage1').show();
		  } else if (data=="button") {
		  		$('#addbuttons').show();
		  } else if (data=="lst") {
		  		$('#lstelement').show();
		  }

		  $('#addElement').modal('show');
  }
  ev.preventDefault();
  return false;
  //ev.target.appendChild(document.getElementById(data));
}
</script>

<script type="text/javascript">
	$('#add2template').click(function() {
		var posx = $('#xpos').val();
		var posy = $('#ypos').val();
		var fw = $('#boxcontent').css('width');
		var fh = $('#boxcontentout').css('height');
		console.log(posx);
		console.log(posy);
		console.log(fw);
		console.log(fh);

		// fw/100*posx
		var porcentA = (Number(posx)*100/Number(fw.replace('px','')));
		var porcentB = (Number(posy)*100/Number(fh.replace('px','')));
		porcentA = Math.round(porcentA);
		porcentB = Math.round(porcentB);
		console.log("Final results!");
		console.log(porcentA);
		console.log(porcentB);

		console.log("Type:   ");
		console.log($('#type').val());
		if ($('#type').val()=="link") {
			console.log("It's a link");
			var para = document.createElement("a");
			var node = document.createTextNode($('#lnkname').val());
			para.setAttribute('href', $('#prependedtext').val());
			para.setAttribute('class', 'resizable');
			para.setAttribute('style', "position:absolute;top:"+porcentB+"%;left:"+porcentA+"%;");
			para.appendChild(node);
			//draggable="true" ondragstart="drag(event)" data-dragelementtype="label"
			$(para).attr("draggable",true);
			$(para).attr("ondragstart","drag(event)");
			var element = document.getElementById("boxcontent");
			element.appendChild(para);
		}else if ($('#type').val()=="label") {
			console.log("It's a text");
			var para = document.createElement("p");
			var node = document.createTextNode($('#txtcontent').val());
			para.setAttribute('class', 'resizable');
			para.setAttribute('style', "position:absolute;top:"+porcentB+"%;left:"+porcentA+"%;color:"+$('.sp-preview-inner').css('background-color')+";font-size:"+$('#txtfont').val()+";");
			para.appendChild(node);
			//draggable="true" ondragstart="drag(event)" data-dragelementtype="label"
			$(para).attr("draggable",true);
			$(para).attr("ondragstart","drag(event)");
			var element = document.getElementById("boxcontent");
			element.appendChild(para);
		}else if ($('#type').val()=="image") {
			console.log("It's a text");
			var file = document.getElementById('imgUpload').files[0];
	        var img = document.createElement("img");
	        img.setAttribute('style', "position:absolute;top:"+porcentB+"%;left:"+porcentA+"%;");
	        var reader = new FileReader();
	        reader.onloadend = function() {
	             img.src = reader.result;
	        }
	        reader.readAsDataURL(file);
	        //draggable="true" ondragstart="drag(event)" data-dragelementtype="label"
			$(img).attr("draggable",true);
			$(img).attr("ondragstart","drag(event)");
			var element = document.getElementById("boxcontent");
			element.appendChild(img);
		}else if ($('#type').val()=="lst") {
			console.log("It's a text");
	        var ul = document.createElement("ul");
	        ul.setAttribute('style', "position:absolute;top:"+porcentB+"%;left:"+porcentA+"%;");

	        for (var i = 0; i < document.getElementById('lstelement').value.split(/\n/).length; i++) {
	        	console.log(document.getElementById('lstelement').value.split(/\n/)[i]);
	        	var li = document.createElement("li");
				var node = document.createTextNode(document.getElementById('lstelement').value.split(/\n/)[i]);
				li.appendChild(node);
				ul.appendChild(li);
	        }
	        
	        /*
	        var li = document.createElement("li");
			var node = document.createTextNode();
			li.appendChild(node);
			ul.appendChild(li);
			*/
			//draggable="true" ondragstart="drag(event)" data-dragelementtype="label"
			$(ul).attr("draggable",true);
			$(ul).attr("ondragstart","drag(event)");
			var element = document.getElementById("boxcontent");
			element.appendChild(ul);
		} else if ($('#type').val()=="button") {

			var elementsRows = document.getElementsByClassName('buttonrow');
			for (var i = 0; i < elementsRows.length; i++) {
				//console.log("Array");
				//console.log(elementsRows[i]);
				//console.log($(elementsRows[i]).children().find("input[type='radio']"));
				if ($(elementsRows[i]).children().find("input[type='radio']").is(':checked')) {
					console.log('Yes');
					console.log($(this));
					var para = document.createElement("BUTTON");
					var node = document.createTextNode($(elementsRows[i]).children().find("input[type='text']").val());
					para.setAttribute('class', 'resizable '+$(elementsRows[i]).children().find("button").attr('class'));
					para.setAttribute('style', "position:absolute;top:"+porcentB+"%;left:"+porcentA+"%;");
					para.appendChild(node);
					//draggable="true" ondragstart="drag(event)" data-dragelementtype="label"
					$(para).attr("draggable",true);
					$(para).attr("ondragstart","drag(event)");
					var element = document.getElementById("boxcontent");
					element.appendChild(para);
				}else {
					console.log('No');
				}
				//if ($(elementsRows[i]).find("input[type='radio']")) {}
			}

		}
		$('#addElement').modal('hide');

	});
</script>

<script type="text/javascript">
	
	$("input[type='radio']").change(function(evt) {
		//alert("Change Handler.");
		//console.log(this);
		$("input[type='radio']").prop("checked", false);
		$(this).prop("checked", true);
	});


</script>

<script type="text/javascript">
	
	$('.dropdown').click(function(){
		if ($(this).hasClass("open")) {
			// on close

			$('#fullOptions').show();
			$('#fullOptions').show();

		}else {
			// on open

			$('#fullOptions').hide();
			$('#fullOptions').hide();

		}
	});

	function menuNew() {
		$('#fullOptions').show();
		$('#menclick').val(window.location.hostname + window.location.pathname);
		$('#menclick').attr('target','_blank');
		$('#menclick').trigger('click');
		//window.open(window.location.hostname + window.location.pathname,'_blank');
	}

	function exitMen() {
		window.location.href = "/admin"; 
	}

	function saveMen() {
		$('#fullOptions').show();
		$('#modalSave').modal('show');
	}

	function savenewMen() {
		$('#fullOptions').show();
		//$('#modalSave').show();
	}

	function saveFile(filename) {
		$('#tempboxcontentout').html($('#boxcontentout > div').html());
		$('#tempboxcontentout').css({'width':'100%','height':'100%', 'border-style':'none'});
		$('#tempboxcontentout').attr('ondrop','');
		$('#tempboxcontentout').attr('ondragover','');
		var html = $('#tempboxcontentout').html();
		var html_content = "<!DOCTYPE html><html><head><title></title></head><body>"+html+"</body></html>";
		console.log(html_content);

		$.ajax({
		  method: "POST",
		  url: "store-new-email",
		  data: { html: html_content, filename: filename }
		})
		  .done(function( msg ) {
		    alert( "Data Saved: " + msg );
		  });

	}

	function helpMen() {
		window.location.href = "/admin"; 
	}

</script>

</body>
</html>
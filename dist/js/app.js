// JavaScript Document
function getData(parEle,parValue){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById(parEle).innerHTML = this.responseText;
	  }
	};
	xmlhttp.open("GET", "../services/get_" + parEle + ".php?" + parValue, true);
	xmlhttp.send();
	console.log('get'+parEle);
	
}
function formPost(parEle){
	$('#' + parEle).submit(function(){
		$.ajax({
			type: 'POST',
			url: '../services/' + parEle + '.php',
			data: $(this).serialize()
		})
		.done(function(data){ 
			console.log(data);
			var myObj = JSON.parse(data);
			if(myObj.message != null){
				console.log(myObj.message);
			}
			if(myObj.alerts != null){
				document.getElementById('message').innerHTML = myObj.alerts;		
			}
			if(myObj.vaildate != null){
				document.getElementById('vaildate').value = myObj.vaildate;
			}
			if(myObj.redirect != null){
				//console.log(myObj.redirect);
				window.location.href = myObj.redirect;
			}
			if(myObj.refesh){
				window.location.reload();
			}
			return false;
		})
		.fail(function() {
			alert("การโพสต์ล้มเหลว");
		});
		return false;
	})
}
function getDelete(t,v,tf){
	var parValue = "t="+t+"&v="+v+"&tf="+tf;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		//document.getElementById(parEle).innerHTML = this.responseText;
		window.location.reload();
		console.log(this.responseText);
	  }
	};
	xmlhttp.open("POST", "../services/delete.php", true);
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	xmlhttp.send(parValue);

}
function logout(){
	if (confirm("Do you want to logout ?") == true) {
	  window.location.href='services/logout.php';
	}
}
function goHref(page){
	window.location.href = page;
}
function goPage(page) {
	document.getElementById("main-display").src = page;
	console.log(page);
}
function goBack() {
	window.history.back();
}
function deleteData(tb,id,tf,code){
	if (confirm("Do you want to delete '"+ code +"'?") == true) {
		getDelete(tb,id,tf);
	}
}
function deleteAttech(n,t){
	if (confirm("Do you want to delete attach file Yes or No?") == true) {
		document.getElementById('temp_attach').value = '';
			xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
			  if (this.readyState == 4 && this.status == 200) {
				  console.log(this.responseText);
			  }
			};
			xmlhttp.open("GET", "../services/deletefile.php?n="+n+"&t="+t, true);
			xmlhttp.send();
	}
}

function form_autosave(n,t,tf,f){
	var parValue = 'n='+ n +'&t='+ t +'&tf='+ tf +'&v='+ f.value +'&f='+ f.name;
	xmlhttp2 = new XMLHttpRequest();
	xmlhttp2.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		console.log(this.responseText);
		//getLine();
	}
	};
	xmlhttp2.open("POST", "../services/autosave.php", true);
	xmlhttp2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	xmlhttp2.send(parValue);
}

function b64EncodeUnicode(str) {
    // first we use encodeURIComponent to get percent-encoded UTF-8,
    // then we convert the percent encodings into raw bytes which
    // can be fed into btoa.
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
        function toSolidBytes(match, p1) {
            return String.fromCharCode('0x' + p1);
        }));
}
	
function b64DecodeUnicode(str) {
	// Going backwards: from bytestream, to percent-encoding, to original string.
	return decodeURIComponent(atob(str).split('').map(function(c) {
		return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
	}).join(''));
}

function get_all_input_text(){

	var input = document.getElementById('div_id').getElementsByTagName('input');
	for(i=0;i<input.length;i++){
		var text_id_html = input[i].getAttribute('id');
		//console.log(text_id_html);
		var text_id = document.getElementById(text_id_html);
		text_id.value = i;
	}

	var input_textarea = document.getElementById('div_id').getElementsByTagName('textarea');
	// console.log(input_textarea[0]);
	for(i=0;i<input_textarea.length;i++){
		var text_id_html = input_textarea[i].getAttribute('id');
		//console.log(text_id_html);
		var text_id = document.getElementById(text_id_html);
		text_id.value = i;
	}
}
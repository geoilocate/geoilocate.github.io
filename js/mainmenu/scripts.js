/*-----------------------------------------------------------------------------------*/
/*	SELECTNAV
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
	selectnav('tiny', {
		label: '--- Navigation --- ',
		indent: '-'
	});
});

/*-----------------------------------------------------------------------------------*/
/*	MENU
/*-----------------------------------------------------------------------------------*/
ddsmoothmenu.init({
	mainmenuid: "menu",
	orientation: 'h',
	classname: 'menu',
	contentsource: "markup"
})

function checkContactForm() {
	var first = "";
	var f = document.contact_form;
	if ($("#name").val() == "") {
		if (first == "") { first = "name"; }
		$("#name").addClass("error_box");
	} else {
		$("#name").removeClass("error_box");
	}
	if ($("#email").val() == "") {
		if (first == "") { first = "email"; }
		$("#email").addClass("error_box");
	} else {
		$("#email").removeClass("error_box");
	}
	if ($("#cellphone").val() == "") {
		if (first == "") { first = "cellphone"; }
		$("#cellphone").addClass("error_box");
	} else {
		$("#cellphone").removeClass("error_box");
	}
	if ($("#message").val() == "") {
		if (first == "") { first = "message"; }
		$("#message").addClass("error_box");
	} else {
		$("#message").removeClass("error_box");
	}
	if ($("#retype_secret").val() == "") {
		if (first == "") { first = "retype_secret"; }
		$("#retype_secret").addClass("error_box");
	} else {
		if ($("#retype_secret").val() != $("#secret").val()) {
			if (first == "") { first = "retype_secret"; }
			$("#retype_secret").addClass("error_box");
		} else {
			$("#retype_secret").removeClass("error_box");
		}
	}
	
	if (first != "") {
		$("#"+first).focus();
		return false;
	} else {
		$.ajax({
			type: 'POST',
			data: $("#contact_form").serialize(),
			url: 'login/ajax/send-contact.php',
			beforeSend: function() {
				$("#name").attr("disabled",true);
				$("#email").attr("disabled",true);
				$("#cellphone").attr("disabled",true);
				$("#message").attr("disabled",true);
				$("#submit_send").attr("disabled",true);
				$("#submit_send").val("Loading...");
			},
			success: function(msg){
				$("#name").attr("disabled",false);
				$("#email").attr("disabled",false);
				$("#cellphone").attr("disabled",false);
				$("#message").attr("disabled",false);
				$("#submit_send").attr("disabled",false);
				$("#submit_send").val("SUBMIT");
				
				if (msg == "1") {
					$("#msg_success").slideDown();
					f.reset();
					rando();
					setTimeout(function() {
						$("#msg_success").slideUp();
					},6000);
				} else {
					$("#msg_error").slideDown();
					setTimeout(function() {
						$("#msg_error").slideUp();
					},6000);
				}
			}
		});
		return false;
	}
}

function checkCommentForm() {
	var first = "";
	var f = document.comment_form;
	if ($("#name").val() == "") {
		if (first == "") { first = "name"; }
		$("#name").addClass("error_box");
	} else {
		$("#name").removeClass("error_box");
	}
	if ($("#email").val() == "") {
		if (first == "") { first = "email"; }
		$("#email").addClass("error_box");
	} else {
		$("#email").removeClass("error_box");
	}
	if ($("#comments").val() == "") {
		if (first == "") { first = "comments"; }
		$("#comments").addClass("error_box");
	} else {
		$("#comments").removeClass("error_box");
	}
	if ($("#retype_secret").val() == "") {
		if (first == "") { first = "retype_secret"; }
		$("#retype_secret").addClass("error_box");
	} else {
		if ($("#retype_secret").val() != $("#secret").val()) {
			if (first == "") { first = "retype_secret"; }
			$("#retype_secret").addClass("error_box");
		} else {
			$("#retype_secret").removeClass("error_box");
		}
	}
	
	if (first != "") {
		$("#"+first).focus();
		return false;
	} else {
		$.ajax({
			type: 'POST',
			data: $("#comment_form").serialize(),
			url: '../login/ajax/send-comment.php',
			beforeSend: function() {
				$("#name").attr("disabled",true);
				$("#email").attr("disabled",true);
				$("#comments").attr("disabled",true);
				$("#submit_comment").attr("disabled",true);
				$("#submit_comment").val("Loading...");
			},
			success: function(msg){
				$("#name").attr("disabled",false);
				$("#email").attr("disabled",false);
				$("#comments").attr("disabled",false);
				$("#submit_comment").attr("disabled",false);
				$("#submit_comment").val("Submit Comment");
				
				if (msg == "1") {
					$("#msg_success").slideDown();
					f.reset();
					rando();
					setTimeout(function() {
						$("#msg_success").slideUp();
					},6000);
				} else {
					$("#msg_error").slideDown();
					setTimeout(function() {
						$("#msg_error").slideUp();
					},6000);
				}
			}
		});
		return false;
	}
}

function rando() {
	var rand = Math.floor((Math.random() * 10000) + 10000);
	$("#secret").val(rand);
}
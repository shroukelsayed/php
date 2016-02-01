var passflag = false;
var fnflag = false;
var lnflag = false;
var eflag = false;
var cflag = false;
var aflag = false;
var jflag = false;
var bflag = false;
var iflag = false;
var leflag = false;
var lpflag = false;
var errors=[];
passpat= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
epat=/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/;
	
function checkall(){
	return (fnflag && lnflag && passflag && eflag && cflag && aflag && bflag && jflag && iflag);
}

$(function() {

	$('#fname').on('blur', function(event) {
		if($.trim($(this).val()).length != 0){
			fnflag=true;

			$('#fnspan').css('display', 'none');
		}
		else{
			fnflag=false;
			$('#fnspan').css('display', 'block');
		}
	});

	$('#lname').on('blur', function(event) {
		if($.trim($(this).val()).length != 0){
			lnflag=true;
			$('#lnspan').css('display', 'none');
		}
		else{
			lnflag=false;
			$('#lnspan').css('display', 'block');
		}
	});

	$('#email').on('blur', function(event) {
		if (this.value.match(epat)){
			eflag=true;
			$.ajax({
				url: 'server.php?email='+$(this).val(),
				type: 'GET',
			})
			.done(function(event) {

				if (event=="OK") {
					$('#espan').html("This email has registered before");
				}
				else {
					$('#espan').html("This email is available");	
				}
				$('#espan').css('display', 'block');
			})
			.fail(function() {
				console.log("error");
			});
		}
		else{
			eflag=false;
			$('#espan').html("Please enter a valid email");
			$('#espan').css('display', 'block');
		}
	}); 

	$('#password').on('blur', function(event) {
		if ($(this).val().match(passpat)){
			
			$('#pspan').css('display', 'none');
			
			$('#passconfirm').on('blur', function(event) {
				if($(this).val().match($('#password').val())){
					passflag=true;
					$('#cpspan').css('display', 'none');
				}
				else{
					passflag=false;
					$('#cpspan').css('display', 'block');
				}
			});
		}
		else{
			passflag=false;
			$('#pspan').css('display', 'block');
		}
	});

	$('#credit').on('blur', function(event) {
		if ($(this).val().match(/^[0-9]+(\.)*[0-9]+$/)){
			cflag = true ;
			$('#cspan').css('display', 'none');
		}
		else{
			cflag = false ;
			$('#cspan').css('display', 'block');
		}
	});
	
	$('#address').on('blur', function(event) {
		if($.trim($(this).val()).length != 0){
			aflag=true;
			$('#aspan').css('display', 'none');
		}
		else{
			aflag=false;
			$('#aspan').css('display', 'block');
		}
	});

	$('#birthdate').on('blur', function(event) {
		if($(this).val()!=""){
			bflag=true;
			$('#bspan').css('display', 'none');
		}
		else{
			bflag=false;
			$('#bspan').css('display', 'block');
		}
	});

	$('#job').on('blur', function(event) {
		if($(this).val()!="Default"){
			jflag=true;
			$('#jspan').css('display', 'none');
		}
		else{
			jflag=false;
			$('#jspan').css('display', 'block');
		}
	});

	$('#interests').one('blur', function(event) {
		if($.trim($(this).val()).length != 0){
			iflag=true;
			$('#ispan').css('display', 'none');
		}
		else{
			iflag=false;
			$('#ispan').css('display', 'block');
		}
	});

	$('#submit').on('click', function(event) {
		event.preventDefault();

		if(checkall()){
			console.log("submit");
			$.ajax({
				url: 'server.php',
				type: 'POST',
				data: {fname : $('#fname').val() , lname : $('#lname').val() , email : $('#email').val() , password : $('#password').val() , passconfirm : $('#passconfirm').val() , credit : $('#credit').val(), address : $('#address').val(), birthdate : $('#birthdate').val(), job : $('#job').val(), interests : $('#interests').val()},
			})
			.done(function(event) {
				if (event!="OK" && event!="Bad") {
					data=JSON.parse(event);
					htmltxt="";
					for (var i = 0; i < data.length; i++) {
						htmltxt+="<div>"+data[i]+"<div>";
					};
					$("#errors").empty();
					$("#errors").css('display', 'block');
					$("#errors").append(htmltxt);
				}
				else if (event=="OK") {
					console.log("login");
				    window.location.assign("login.php");
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});	
		}
	});

	//login
	$("#lemail").on('blur', function(event) {
		$.ajax({
			url: 'server.php?email='+$(this).val(),
			type: 'GET',
		})
		.done(function(event) {
			console.log(event)

			if (event=="OK") {
				leflag=true;
				$("#lespan").css('display', 'none');
			}
			else {
				leflag=false;
				$('#lespan').css('display', 'block');	
			}
		})
		.fail(function() {
			console.log("error");
		});
	});

	$('#lpassword').on('blur', function(event) {
		if ($(this).val().match(passpat)){
			$('#lpspan').css('display', 'none');
			lpflag=true;
		}
		else{
			lpflag=false;
			$('#lpspan').css('display', 'block');
		}
	});

	$('#login').on('click', function(event) {
		event.preventDefault();
		if (leflag && lpflag){	
			$.ajax({
				url: 'server.php',
				type: 'POST',
				data: { lpassword : $("#lpassword").val() ,lemail : $("#lemail").val() }, 
			})
			.done(function(event) {
				console.log(event)

				if (event=="OK") {
					console.log("hello");
					$("#lpspan").css('display', 'none');
					window.location.assign("home.php");
				}
				else {
					$('#lpspan').css('display', 'block');	
				}
			})
			.fail(function() {
				console.log("error");
			});
		}
	});
});
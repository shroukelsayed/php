var txt1;
var sp1;

flag=false;
var pat= /[a-zA-Z]{6,10}/;
var pat1= /[0-9]/;
    function checkAll(){
        return flag1&&flag2&&flag3&&flag4;
    }
    console.log('hiidddddd');
$(function(){
	
        $("#insert").blur(function(event) {
            if(this.value.match(pat))
                {   
                	$('#check').empty();
                    $('#check').css('color', 'red');
                    // $('#check').text('Done');
                    flag=true;
                }
            else
                {
                    $('#check').css('color', 'red');
                    $('#check').text('OnlyNumbers');
                    $('#insert').focus();
                    flag=false;
                }
        });
       //Ajaaaaaaaaaaaaaaaax
	txt1 = $('#txt1');
 	sp1 = $('#sp1');
	txt1.on('blur', function(event) {
		event.preventDefault();
		console.log('hi');
		var name={};
		$.ajax({
			url: 'CetegoriesValidationServer.php?product='+$(this).val(),
            console.log(url);
			type: 'POST',
			dataType: 'html',
			//data:name,
			success: function (response) {
					console.log(response);
				 if(response)
				 {
				 	sp1.empty();
					sp1.html("<b style='color:red'>Done</b>");
				}
				else
				{
					txt1.focus();
					sp1.html("<b style='color:red'>ExistedBefore</b>");
				}
			},
			error: function (error) {
				console.log(error);
			}
		});
			
	});
	$('#insert').on('blur', function(event) {
		event.preventDefault();
		console.log('hi');
		var name={};
		$.ajax({
			url: 'CetegoriesValidationServer.php?catName='+$(this).val(),
			type: 'POST',
			dataType: 'html',
			//data:name,
			success: function (response) {
					console.log(response);
				 if(response)
				 {
				 	$('#check1').empty();
					$('#check1').html("<b style='color:red'>Done</b>");
				}
				else
				{
					$('#insert').focus();
					$('#check1').html("<b style='color:red'>ExistedBefore</b>");
				}
			},
			error: function (error) {
				console.log(error);
			}
		});
			
	});
                             
});
 function ThanhCong(text){
		showNotification({
			message: text,
			autoClose: true,
			duration: 5
		});    
} 
function ThatBai(text)
{ showNotification({
		message: text,
		type: "warning"
	});
}
//onkeypress="return isNumberKey(event)"
function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }
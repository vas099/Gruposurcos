
function validateEmail(str) {
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
      return reg.test(str);
}
// для строки


function validate(form_id,email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) {
      alert('Введите корректный e-mail');
      return false;
   }
}
// для формы




/*
var pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])/,
	string = "$&";
	pattern.test(string);

function(str){
...
return ...
}

<script type="text/javascript">
<!-- //
function checkmail()
{
txt=document.mail.address.value;
if (txt == "") {
    alert("Введите Адрес электронной почты.");
    return false
    }
if (txt.indexOf(".") == -1){
    alert("Нет символа\".\"");
    return false


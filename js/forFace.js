function validateEmail(str) {
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
      var 
      return reg.test(str);
}
// для строки

/*
function validate(form_id,email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) {
      alert('Введите корректный e-mail');
      return false;
   }
}

^((\+?7|8)[ \-] ?)?((\(\[0-9]{3}\))|(\[0-9]{3}))?([ \-])?(\[0-9]{3}[\- ]?\[0-9]{2}[\- ]?\[0-9]{2})$

https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/M2JXa_LXYz_.png




function validateEmail(str) {
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
      var 
      return reg.test(str);
}
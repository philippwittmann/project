function get_coockie_value(n){
 a = document.cookie;
 res = '';
 while(a != '')
 {
  while(a.substr(0,1) == ' '){a = a.substr(1,a.length);}
  cookiename = a.substring(0,a.indexOf('='));
  if(a.indexOf(';') != -1)
  {cookiewert = a.substring(a.indexOf('=')+1,a.indexOf(';'));}
  else{cookiewert = a.substr(a.indexOf('=')+1,a.length);}
  if(n == cookiename){res = cookiewert;}
  i = a.indexOf(';')+1;
  if(i == 0){i = a.length}
  a = a.substring(i,a.length);
 }
return(res)
}

function set_coockie_language(){
  var d = new Date();
  d.setTime(d.getTime() + (2*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  if (get_coockie_value("language") == "de") {
    document.cookie ="language=en;"+ expires + ";path=/";
  } else if (get_coockie_value("language") == "en") {
    document.cookie ="language=de;"+  expires + ";path=/";
  }
  location.reload();
}













var agt = navigator.userAgent.toLowerCase();
var is_op = (agt.indexOf("opera") != -1);
var is_ie = (agt.indexOf("msie") != -1) && document.all && !is_op;
var is_ie5 = (agt.indexOf("msie 5") != -1) && document.all && !is_op;
var is_mac = (agt.indexOf("mac") != -1);
var is_gk = (agt.indexOf("gecko") != -1);
var is_sf = (agt.indexOf("safari") != -1);

function bs() {




if (is_ie && !is_op && !is_mac) {

if (agt.indexOf("palmsource") != -1 ||
agt.indexOf("regking") != -1 ||
agt.indexOf("windows ce") != -1 ||
agt.indexOf("j2me") != -1 ||
agt.indexOf("avantgo") != -1 ||
agt.indexOf(" stb") != -1)  {
return false;
}

var v = gff(agt, "msie ");
if (v != null) {
return (v >= 5.5);
}
}



if (is_gk && !is_sf) {

var v = gff(agt, "rv:");
if (v != null) {
return (v >= 1.4);

} else {


v = gff(agt, "galeon/");

if (v != null) {



return (v >= 1.3);
}
}
}


if (is_sf) {
var v = gff(agt, "applewebkit/");
if (v != null) {
return (v >= 124);
}
}


if (is_op) {
// Could have "Opera 8.0" or "Opera/8.0".
var v = gff(agt, "opera ");
if (v == null) {
v = gff(agt, "opera/");
}
if (v != null) {
return (v >= 8.0);
}
}

return false;
}






function gff(str, pfx) {
var i = str.indexOf(pfx);
if (i != -1) {
var v = parseFloat(str.substring(i + pfx.length));
if (!isNaN(v)) {
return v;
}
}
return null;
}

var is_browser_supported = bs();

var tz_path = ';path=/';

if (top.location.href.toLowerCase().indexOf('google.com') > 0) {


tz_path += ';domain=.google.com';
}

document.cookie = "TZ=" + (new Date()).getTimezoneOffset() + tz_path;

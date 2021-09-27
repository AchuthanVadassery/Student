<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
var stateObject = {
"Kerala": { "Kannur": ["new Delhi", "North Delhi"],
"Ernakulam": ["Thiruvananthapuram", "Palakkad"],
"Kozhikode": ["North Goa", "South Goa"],
},
"TamilNadu": {
"Bodynaykannoor": ["Dunstan", "Mitchell"],
"Coimbathore": ["Altona", "Euroa"]
}, "WestBengal": {
"Nandigram": ["Acadia", "Bighorn"],
"BhavaniPur": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
// remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}

}
</script>
</head>
<body>
<form name="myform" id="myForm">
Select state: <select name="state" id="countySel" size="1">
<option value="" selected="selected">Select state</option>
</select>
<br>
<br>
Select District: <select name="district" id="stateSel" size="1">
<option value="" selected="selected">Please select state first</option>
</select>
<br>
<br>

<input type="submit">
<closeform></closeform></form>
</body>
</html>

	
var select = document.getElementById("sel");
var ipt = document.getElementById("id-ipt");
var submit = document.getElementById("sbmt-btn");

function getKey() {
	ipt.value = select.value;
	submit.click();
}
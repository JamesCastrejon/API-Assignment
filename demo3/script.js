var data;
var request = new XMLHttpRequest();
 
loadData();
 
function loadData() {
  request.open('GET', '10.10.16.189/demo2/index.php');
  request.onload = loadComplete;
  request.send();
}
 
function loadComplete(evt) {
  data = JSON.parse(request.responseText);
  console.log(data);
}
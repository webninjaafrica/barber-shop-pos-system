
 <!-- paste the contents of your app footer here!-->

<?php  ?>
<script type="text/javascript">
	function open_page(page,title){
		window.open(page,title,"_top");
	}

	function digi() {
  var date = new Date(),
      hour = date.getHours(),
      minute = checkTime(date.getMinutes()),
      ss = checkTime(date.getSeconds());
      day=date.getDate();
      month=date.getMonth();
      year=date.getFullYear();


  function checkTime(i) {
    if( i < 10 ) {
      i = "0" + i;
    }
    return i;
  }

if ( hour > 12 ) {
  hour = hour - 12;
  if ( hour == 12 ) {
    hour = checkTime(hour);
  document.getElementById("tt").innerHTML = hour+":"+minute+":"+ss+" AM";
  }
  else {
    hour = checkTime(hour);
    document.getElementById("tt").innerHTML = hour+":"+minute+":"+ss+" PM";
  }
}
else {
  document.getElementById("tt").innerHTML = hour+":"+minute+":"+ss+" AM";;
}

var time = setTimeout(digi,1000);
}
function dt(){
	 var date = new Date(),
      hour = date.getHours(),
      minute = checkTime(date.getMinutes()),
      ss = checkTime(date.getSeconds());
      day=date.getDate();
      month=date.getMonth();
      year=date.getFullYear();
	document.getElementById("dd").innerHTML = day+"/"+month+"/"+year;
}
window.onload=function(){
	digi();
	dt();
};
</script>
</body>
</html>
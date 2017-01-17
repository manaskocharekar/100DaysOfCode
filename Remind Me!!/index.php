<?php include('include/header.php');
 ?>

 <script>
 function PlaySound(soundObj) {
    var sound = document.getElementById(soundObj);

    var t1 = Number(document.getElementById("t1").value);
    var t2 = Number(document.getElementById("t2").value);
    var t3 = Number(document.getElementById("t3").value);
    var t4 = Number(document.getElementById("t4").value);
    //alert(Number(t1)+Number(t2)+Number(t3)+Number(t4));
    var TotalTime = String(t1)+":"+String(t2);
    var IntervalTime = String(t3)+":"+String(t4);
    //alert(TotalTime+" " + IntervalTime);
    var TotalSeconds =  t2 + (t1*60);
    alert(TotalSeconds);
    //var i = TotalSeconds;
      //var i = 10;
      onTimer(TotalSeconds);

    function onTimer(j) {
   i = j;
    document.getElementById('mycounter').innerHTML = i;
  i--;
  if (i < 0) {
    alert('You lose!');
  }
  else {
    setTimeout(onTimer(), 1000);
  }
}
    //function gameLost() {
    //  sound.Play();
//}
//setTimeout('gameLost()', 60000);



 }
 </script>

 <embed src="success.wav" autostart="false" width="0" height="0" id="sound1"
 enablejavascript="true">


<div class="col-lg-2"></div>
<div class="container-fluid col-md-8" style="position: relative;top: 30px;">
<div class="panel panel-info" style= "border: solid black 1px;" >
  <div class="panel-heading" style="background-color:#424242;">
    <h3 class="panel-title" style="color:black;text-align:center">Remind me!!</h3>
  </div>

  <div class="panel-body">
  <!--form class="form-horizontal"-->
    <div name = "total" class="col-md-4 col-md-offset-1">
        <input type="text" id= "t1" name="t1" style="display:inline-block;
        max-width:100px; height: 150px; border: solid black 2px; margin:5px; border-radius:10%; font-size:56px; color:red; text-align:center;" value="11"  maxlength = "2" >


        <input type="text" id= "t2" name="ss" style="display:inline-block;
        max-width:100px; height: 150px; border: solid black 2px; margin:5px; border-radius:10%; font-size:56px; color:red; text-align:center;"  maxlength = "2" >
    </div>
    <div name = "interval" class="col-md-4 col-md-offset-1">
        <input type="text" id= "t3" name="mm" style="display:inline-block;
        max-width:100px; height: 150px; border: solid black 2px; margin:5px; border-radius:10%; font-size:56px; color:red; text-align:center;"  maxlength = "2" >


        <input type="text" id= "t4" name="ss" style="display:inline-block;
        max-width:100px; height: 150px; border: solid black 2px; margin:5px; border-radius:10%; font-size:56px; color:red; text-align:center;"  maxlength = "2" >
    </div>
    <div id="mycounter"></div>

</div>

<div class="panel-footer" style="position: relative;padding-left: 40%;padding-top: 2%;padding-bottom: 0.01%;">
<div class="form-group">

        <button class="btn btn-primary" onclick="PlaySound(sound1)">Submit</button>
      </div>


</div>
<!--/form-->
</div>
</div>


<?php include('include/footer.php');
 ?>

$(document).ready(function(){

  startTime();
  updateTimes();

  // if ($("#logged").val() == "true"){
  //   updateServer();
  // }
  

  var currentTime = $('.clock').html();


  $('button').click(function(){

    var clicked = $(this).attr('id');
    var ct = ".ct"+ clicked;
    var st = ".st"+ clicked;
    var total = ".total"+clicked;
    var row = ".row"+clicked;

    if($(st).html() == "Inactive"){
      $(st).html(getCurrentTime());
      $('#status'+clicked).val(getCurrentTime());

      $(this).html("Reset");
      $('#button'+clicked).val("Reset");

      $(row).addClass('highlight');
    }else{
      $(this).html("Start");
      $(st).html("Inactive");
      $(ct).html("0:00:00");
      // $(total).html("$0.00");
      $(row).removeClass('highlight');
    }

  });


});

function updateTimes(){
  for(var i = 1; i < 12; i++){
    var startTimeCheck = $(".st"+i).html();
    if(startTimeCheck != "Inactive"){
      var startT = new Date(startTimeCheck);
      var timeNow = getCurrentTime();
      var timeDiff = timeNow - startT;

      if (timeDiff > 86400000){ //stops timer if longer than 1 day
        $(".st"+i).html("Inactive");
      }

      var rate = $(".rate"+i).html();
      $(".ct"+i).html(convertMStoTime(timeDiff));
      $(".total"+i).html("$"+((timeDiff * rate/ 3600)/1000).toFixed(2));
    }

  }
  var t = setTimeout(updateTimes, 1000);
}

function convertMStoTime(ms){
  var x;
  x = ms / 1000;
  var counter = x ;
  var secondsTimer = 0;
  var minutesTimer = 0;
  var hoursTimer = 0;

  var totalSec = x;

  var hours = parseInt( totalSec / 3600 ) % 24;
  var minutes = parseInt( totalSec / 60 ) % 60;
  var seconds = totalSec % 60;

  var time = hours+":"+checkTime(minutes)+":"+checkTime(seconds.toFixed(0));


  return time;
}

function getCurrentTime(){
  var today = new Date();
  return today;
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    // $('div.clock').html(h + ":" + m + ":" + s);
    $('div.clock').html(today);
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function updateServer(){
  console.log('update?');
  $('#form-tables').submit();
  setTimeout(updateServer, 1000);
}

// $('#form-tables').submit(function(e){
//     // e.preventDefault();
//     $.ajaxSetup({
//       header:$('meta[name="csrf-token"]').attr('content')
//     });
//     console.log($(this));
//     // });
//     $.ajax({
//       type:'post',
//       url: "/update",
//       data: $(this).serialize(),
//       header:$('meta[name="csrf-token"]').attr('content'),
//       dataType: 'json',
//       success:function(response){
//         console.log('success');
        
//       },
//       error:function(data){
//         console.log("error:"+data);
//       }
//     });



//   });
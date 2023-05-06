function setAddress() {
  var SAdd = document.getElementById('SAdd');
  var SAdd2 = document.getElementById('SAdd2');
  var check = document.getElementById('check');
  if (check.checked == true) {
    SAdd2.value = SAdd.value;
    SAdd2.disabled = true;
  } else {
    SAdd2.disabled = false;
  }
}

var SameAsAbove = {
  init: function(){
    var check = document.getElementById('check');
    Core.addEventListener(check, 'click', setAddress);
  }
}

Core.start(SameAsAbove);
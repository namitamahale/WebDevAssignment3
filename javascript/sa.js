function setAddress() {
  var SAdd = document.getElementById('SAdd');
  var add2 = document.getElementById('add2');
  var check = document.getElementById('check');
  if (check.checked == true) {
    add2.value = SAdd.value;
    add2.disabled = true;
  } else {
    add2.disabled = false;
  }
}

var SameAsAbove = {
  init: function(){
    var check = document.getElementById('check');
    Core.addEventListener(check, 'click', setAddress);
  }
}

Core.start(SameAsAbove);
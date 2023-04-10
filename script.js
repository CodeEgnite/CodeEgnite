function registeCustomer() {
  var fname = document.getElementById("fname").value;
  var bname = document.getElementById("bname").value;

  var registered = document.getElementById("registered").checked;
  var Nregistered = document.getElementById("Nregistered").checked;
  var bnumber = document.getElementById("bnumber").value;
  var add1 = document.getElementById("add1").value;
  var add2 = document.getElementById("add2").value;
  var nic = document.getElementById("nic").value;
  var cat = document.getElementById("cat").value;
  var Mnumber = document.getElementById("Mnumber").value;
  var Lnumber = document.getElementById("Lnumber").value;
  var appType = document.getElementById("type").value;
  var otherNotes = document.getElementById("other").value;
  var email = document.getElementById("email").value;

  var r = new XMLHttpRequest();

  var f = new FormData();
  f.append("fname", fname);
  f.append("bname", bname);
  f.append("registered", registered);
  f.append("Nregistered", Nregistered);
  f.append("bnumber", bnumber);
  f.append("add1", add1);
  f.append("add2", add2);
  f.append("nic", nic);
  f.append("cat", cat);
  f.append("Mnumber", Mnumber);
  f.append("Lnumber", Lnumber);
  f.append("appType", appType);
  f.append("otherNotes", otherNotes);
  f.append("email", email);

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      if (r.responseText == "Success") {
        Swal.fire(
          'Success',
          "Registration was Successful. A developer will be in contact with you soon",
          'success'
        ).then(function () {
          window.location = "registerSuccess.php";
        });
      } else {
        Swal.fire(
          'Warning',
          r.responseText,
          'warning'
        )
      }
      document.getElementById("msg").innerHTML = r.responseText;

    }
  }
  r.open("POST", "registerProcess.php", true);
  r.send(f);


}
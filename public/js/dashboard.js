// Display Snackbar
let contactlist = new Array();
function displaySnackbar(message, type, next) {
  // Get the snackbar DIV
  var snackbar = document.getElementById("snackbar");
  switch (type) {
    case "success":
      snackbar.style.backgroundColor = "#59983b";
      break;
    case "error":
      snackbar.style.backgroundColor = "#dc3545";
      break;

    default:
      break;
  }
  // Add the "show" class to DIV
  snackbar.className = "show";
  snackbar.innerHTML = message;
  // After 3 seconds, remove the show class from DIV
  setTimeout(function () {
    snackbar.className = snackbar.className.replace("show", "");
    next();
  }, 5000);
}

// Send Ajax Request to get Contacts
$("#extractContacts").on("click", function () {
  $(this).addClass("loading");
  $.ajax({
    type: "GET",
    url: "dashboard/getContacts",
    // data: { data: "" },
    dataType: "json",
    success: function (response) {
      $(".extract_contacts_gmail").removeClass("loading");
      displaySnackbar(
        "Contacts was extracted successfully",
        "success",
        function () {}
      );
      viewEmailList(response);
    },
    error: function (response) {
      console.log("failed delete", response);
      $(".extract_contacts_gmail").removeClass("loading");
      // alert(response.responseJSON.message);
    },
  });
});

// view email addresses from GMail
function viewEmailList(data) {
  let arrData = data["contacts"];
  let contact = {
    name: "",
    email: "",
  };

  $("#emails").empty();
  // console.log(data["contacts"][0].gd$etag);
  $.each(arrData, function (index) {
    contact.name =
      arrData[index].gd$name == undefined
        ? arrData[index].gd$email[0].address
        : arrData[index].gd$name.gd$fullName.$t;
    contact.email = arrData[index].gd$email[0].address;
    // $("#emails").append(
    //   "<option>" + contact.name + " -> " + contact.email + "</option>"
    // );
    $("#emails").append("<option>" + contact.email + "</option>");
    contactlist.push(contact);
    $("#emails").show();
    $("#sendGmail").show();
  });
}

$("#sendGmail").on("click", function () {
  let receptEmail = $("#emails option:selected").text();
  $(this).addClass("loading");
  $.ajax({
    type: "GET",
    url: "dashboard/sendEmail",
    data: { receptEmail: receptEmail },
    // dataType: "json",
    success: function (response) {
      $("#sendGmail").removeClass("loading");
      displaySnackbar("Email was Sent successfully", "success", function () {});
    },
    error: function (response) {
      console.log("Failed Send Email", response);
      $("#sendGmail").removeClass("loading");
      alert(response.message);
    },
  });
});

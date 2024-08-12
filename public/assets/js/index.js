console.log("start ipnet invoice app...");

// edit form btn click other btn show hide
if ($("#edit-btn") !== null) {
  $("#edit-btn").click(() => {
    $("#edit-btn-group").removeClass("hidden");
    $("#edit-btn-group").addClass("flex");
    $("#edit-btn-container").toggleClass("hidden");
    $("#create-invoice-btn").toggleClass("hidden");

    $("#edit-form").removeClass("pointer-events-none");
  });
}

// edit form cancel click other btn show hide
if ($("#edit-cancel-btn") !== null) {
  $("#edit-cancel-btn").click(() => {
    $("#edit-btn-group").addClass("hidden");
    $("#edit-btn-group").removeClass("flex");
    $("#edit-btn-container").toggleClass("hidden");
    $("#create-invoice-btn").toggleClass("hidden");

    $("#edit-form").addClass("pointer-events-none");
  });
}

// edit form confirm clicker
if ($("#edit-confirm-btn") !== null) {
  $("#edit-confirm-btn").click(() => {
    $("#edit-submit-btn").click();
  });
}

// create form confirm btn clicker
if ($("#create-confirm-btn") !== null) {
  $("#create-confirm-btn").click(() => {
    $("#create-submit-btn").click();
  });
}

// login password show hide
if ($("#show-password") !== null) {
  $("#show-password").change(() => {
    if ($("#password").attr("type") == "password") {
      $("#password").attr("type", "text");
    } else {
      $("#password").attr("type", "password");
    }
  });
}

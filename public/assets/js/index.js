console.log("start ipnet invoice app...");

// edit form btn click other btn show hide
if ($("#edit-btn") !== null) {
  $("#edit-btn").click(() => {
    $("#edit-btn-group").toggleClass("hidden");
    $("#edit-btn-group").toggleClass("flex");
    $("#edit-btn-container").toggleClass("hidden");
    $("#create-invoice-btn").toggleClass("hidden");
    $("#row-add-btn").toggleClass("opacity-35 pointer-events-none");

    $("#edit-form").toggleClass("pointer-events-none");
    if ($("#edit-form-info") !== null) {
      $("#edit-form-info").toggleClass("pointer-events-none");
    }
  });
}

// edit form cancel click other btn show hide
if ($("#edit-cancel-btn") !== null) {
  $("#edit-cancel-btn").click(() => {
    $("#edit-btn-group").toggleClass("hidden");
    $("#edit-btn-group").toggleClass("flex");
    $("#edit-btn-container").toggleClass("hidden");
    $("#create-invoice-btn").toggleClass("hidden");
    $("#row-add-btn").toggleClass("opacity-35 pointer-events-none");

    $("#edit-form").toggleClass("pointer-events-none");
    if ($("#edit-form-info") !== null) {
      $("#edit-form-info").toggleClass("pointer-events-none");
    }
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
  $("#show-password").keyup(() => {
    if ($("#password").attr("type") == "password") {
      $("#password").attr("type", "text");
    } else {
      $("#password").attr("type", "password");
    }
  });
}

// subscription users select action
if ($("#ipnet-user-select") !== null) {
  $("#ipnet-user-select").keyup(() => {
    $("#select-submit-btn").click();
  });
}

// invoice form auto calculate amount and total amount

if ($("#invoice-table") !== null) {
  // auto calculate amount from row table
  $("#invoice-body").keyup((event) => {
    const row = event.target.closest(".invoice-row");
    const qty = row.querySelector("#qty");
    const price = row.querySelector("#price");
    const amount = row.querySelector("#amount");

    amount.value = parseInt(qty.value) * parseInt(price.value);

    const amountElement = $(".amount");

    $("#invoice-total-amount")[0].value = [...amountElement].reduce(
      (pv, { value }) => pv + parseInt(value),
      0
    );

    $("#invoice-net-amount")[0].value =
      parseInt($("#invoice-total-amount")[0].value) -
      (parseInt($("#invoice-discount-amount")[0].value) +
        parseInt($("#invoice-paid-amount")[0].value));
  });
}

// net amount calculate
if ($("#invoice-table") !== null) {
  $("#invoice-footer").keyup(() => {
    $("#invoice-net-amount")[0].value =
      parseInt($("#invoice-total-amount")[0].value) -
      (parseInt($("#invoice-discount-amount")[0].value) +
        parseInt($("#invoice-paid-amount")[0].value));
  });
  //add row in invoice table
  $("#row-add-btn").click(() => {
    const rowTemplate = document.querySelector("#invoice-row-template");
    const row = rowTemplate.content.cloneNode(true);
    const invoiceBody = document.querySelector("#invoice-body");
    invoiceBody.append(row);

    if (invoiceBody.childElementCount > 1) {
      $("#row-delete-btn").removeClass("opacity-35 pointer-events-none");
    }
  });
  // remove row un invoice table
  $("#row-delete-btn").click(() => {
    const invoiceBody = document.querySelector("#invoice-body");
    invoiceBody.removeChild(invoiceBody.lastElementChild);

    if (invoiceBody.childElementCount <= 1) {
      $("#row-delete-btn").addClass("opacity-35 pointer-events-none");
    }

    const amountElement = $(".amount");

    $("#invoice-total-amount")[0].value = [...amountElement].reduce(
      (pv, { value }) => pv + parseInt(value),
      0
    );

    $("#invoice-net-amount")[0].value =
      parseInt($("#invoice-total-amount")[0].value) -
      (parseInt($("#invoice-discount-amount")[0].value) +
        parseInt($("#invoice-paid-amount")[0].value));
  });
}

// invoice new create update date and descriptions event listener
if ($("#invoice-date-input") !== null) {
  $("#invoice-date-input").change(() => {
    $("#invoice-date-info")[0].value = $("#invoice-date-input")[0].value;
  });

  $("#remark-input").keyup(() => {
    $("#remark-info")[0].value = $("#remark-input")[0].value;
  });
}

// delete alert box show
if ($("#delete-btn") !== null) {
  $("#delete-btn").click((event) => {
    $("#createFormContainer").removeClass("hidden");
    $("#createFormContainer").addClass("flex");
  });

  // confirm and cancel form action
  $("#cancel-delete-btn").click((event) => {
    $("#createFormContainer").removeClass("flex");
    $("#createFormContainer").addClass("hidden");
  });
  $("#confirm-delete-btn").click((event) => {
    $("#delete-submit-btn").click();
  });
}

if (document.querySelector("#download-image")) {
  const btn = document.querySelector("#download-image");
  const invoiceNo = document.querySelector("#invoiceNo");
  btn.addEventListener("click", (event) => {
    const element = document.querySelector("#capture");
    html2canvas(element, {
      scale: 3, // Increase the scale for better quality (2x, 3x, etc.)
      useCORS: true, // To handle cross-origin images
      allowTaint: true, // For images without CORS headers
      logging: true,
    }).then((canvas) => {
      const imgData = canvas.toDataURL("image/png", 1.0);
      var link = document.createElement("a");
      link.href = imgData;
      link.download = `${invoiceNo.innerText}-invoice.png`;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    });
  });

  // download pdf
  document
    .getElementById("download-pdf")
    .addEventListener("click", function () {
      const { jsPDF } = window.jspdf;
      const invoiceDiv = document.getElementById("capture");

      html2canvas(invoiceDiv, {
        scale: 3, // Increase the scale for better quality (2x, 3x, etc.)
        useCORS: true, // To handle cross-origin images
        allowTaint: true, // For images without CORS headers
        logging: true,
      }).then((canvas) => {
        const imgData = canvas.toDataURL("image/png", 1.0);
        const pdf = new jsPDF("p", "mm", "a4");
        const imgWidth = 210; // A4 width in mm
        const pageHeight = 295; // A4 height in mm
        const imgHeight = (canvas.height * imgWidth) / canvas.width;
        let heightLeft = imgHeight;

        let position = 0;

        pdf.addImage(imgData, "PNG", 0, position, imgWidth, imgHeight);
        heightLeft -= pageHeight;

        while (heightLeft >= 0) {
          position = heightLeft - imgHeight;
          pdf.addPage();
          pdf.addImage(imgData, "PNG", 0, position, imgWidth, imgHeight);
          heightLeft -= pageHeight;
        }
        pdf.save(`${invoiceNo.innerText}-invoice.pdf`);
      });
    });
}

// filter show hide

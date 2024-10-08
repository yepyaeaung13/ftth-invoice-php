if (document.getElementById("chart-bars")) {
  var ctx = document.getElementById("chart-bars").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#212121",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 600,
            beginAtZero: true,
            padding: 15,
            font: {
              size: 14,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
            color: "#212121",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.querySelector("#chart-line")) {
  var ctx1 = document.getElementById("chart-line").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(94, 114, 228, 0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(94, 114, 228, 0.0)");
  gradientStroke1.addColorStop(0, "rgba(94, 114, 228, 0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#fbfbfb",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#ccc",
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-consumption")) {
  var ctx1 = document.getElementById("chart-consumption").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");
  new Chart(ctx1, {
    type: "doughnut",
    data: {
      labels: ["10 Mbps", "15 Mbps", "20 Mbps", "40 Mbps", "50 Mbps"],
      datasets: [
        {
          label: "Consumption",
          weight: 9,
          cutout: 90,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: [
            "#5e72e4",
            "#8392ab",
            "#11cdef",
            "#2dce89",
            "#f89400",
          ],
          data: [15, 20, 13, 32, 20],
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-cons-week")) {
  var ctx = document.getElementById("chart-cons-week").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [
        {
          label: "Watts",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#3A416F",
          data: [150, 230, 380, 220, 420, 200, 70],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            beginAtZero: true,
            font: {
              size: 12,
              family: "Open Sans",
              style: "normal",
            },
            color: "#9ca2b7",
          },
        },
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
      },
    },
  });
}
if (document.querySelector("#chart-line-1")) {
  var ctx1 = document.querySelector("canvas#chart-line-1").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(94, 114, 228, 0.02)");
  gradientStroke1.addColorStop(0.2, "rgba(130, 94, 228, 0.0)");
  gradientStroke1.addColorStop(0, "rgba(94, 114, 228, 0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Visitors",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          borderWidth: 2,
          backgroundColor: gradientStroke1,
          data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
          maxBarThickness: 6,
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-line-2")) {
  var ctx2 = document.getElementById("chart-line-2").getContext("2d");
  var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, "rgba(203,12,159,0.02)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(203,12,159,0)");
  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Income",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          borderWidth: 2,
          backgroundColor: gradientStroke1,
          data: [60, 80, 75, 90, 67, 100, 90, 110, 120],
          maxBarThickness: 6,
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            callback: function (value, index, values) {
              return "$" + value;
            },
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-line-projects")) {
  var ctx1 = document.getElementById("chart-line-projects").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(33,82,255,0.1)");
  gradientStroke1.addColorStop(0.2, "rgba(33,82,255,0.0)");
  gradientStroke1.addColorStop(0, "rgba(33,82,255,0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Tasks",
          tension: 0.3,
          pointRadius: 2,
          pointBackgroundColor: "#2152ff",
          borderColor: "#2152ff",
          borderWidth: 2,
          backgroundColor: gradientStroke1,
          data: [40, 45, 42, 41, 40, 43, 40, 42, 39],
          maxBarThickness: 6,
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            color: "#252f40",
            padding: 10,
          },
        },
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-bar-projects")) {
  var ctx2 = document.getElementById("chart-bar-projects").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(33,82,255,0.1)");
  gradientStroke1.addColorStop(0.2, "rgba(33,82,255,0.0)");
  gradientStroke1.addColorStop(0, "rgba(33,82,255,0)");
  new Chart(ctx2, {
    type: "doughnut",
    data: {
      labels: ["Done", "In progress"],
      datasets: [
        {
          label: "Projects",
          weight: 9,
          cutout: 50,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: ["#2152ff", "#a8b8d8"],
          data: [75, 25],
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-widgets-2")) {
  var ctx2 = document.getElementById("chart-widgets-2").getContext("2d");
  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, "rgba(37,47,64,0.05)");
  gradientStroke2.addColorStop(0.2, "rgba(37,47,64,0.0)");
  gradientStroke2.addColorStop(0, "rgba(37,47,64,0)");
  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Income",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#252f40",
          borderWidth: 2,
          backgroundColor: gradientStroke2,
          data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
          maxBarThickness: 6,
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-line-widgets")) {
  var charts = document.querySelectorAll("#chart-line-widgets");
  charts.forEach((chart) => {
    var ctx3 = document.getElementById("chart-line-widgets").getContext("2d");
    var gradientStroke3 = ctx3.createLinearGradient(0, 230, 0, 50);
    gradientStroke3.addColorStop(1, "rgba(94, 114, 228, 0.1)");
    gradientStroke3.addColorStop(0.2, "rgba(94, 114, 228, 0.0)");
    gradientStroke3.addColorStop(0, "rgba(94, 114, 228, 0)");
    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
          {
            label: "Tasks",
            tension: 0.3,
            pointRadius: 2,
            pointBackgroundColor: "#5e72e4",
            borderColor: "#5e72e4",
            borderWidth: 2,
            backgroundColor: gradientStroke3,
            data: [40, 45, 42, 41, 40, 43, 40, 42, 39],
            maxBarThickness: 6,
            fill: true,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false,
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              color: "#252f40",
              padding: 10,
            },
          },
        },
      },
    });
  });
}
if (document.getElementById("chart-widgets-1")) {
  var ctx1 = document.getElementById("chart-widgets-1").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(203,12,159,0.02)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");
  var ctx2 = document.getElementById("chart-widgets-2").getContext("2d");
  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, "rgba(37,47,64,0.05)");
  gradientStroke2.addColorStop(0.2, "rgba(37,47,64,0.0)");
  gradientStroke2.addColorStop(0, "rgba(37,47,64,0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Calories",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#252f40",
          borderWidth: 2,
          backgroundColor: gradientStroke2,
          data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
          maxBarThickness: 6,
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("line-chart")) {
  var ctx1 = document.getElementById("line-chart").getContext("2d");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Organic Search",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#5e72e4",
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        },
        {
          label: "Referral",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#3A416F",
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          maxBarThickness: 6,
        },
        {
          label: "Direct",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#17c1e8",
          borderColor: "#17c1e8",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
}
if (document.getElementById("line-chart-gradient")) {
  var ctx2 = document.getElementById("line-chart-gradient").getContext("2d");
  var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(94, 114, 228, 0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(94, 114, 228,0)");
  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(20,23,39,0)");
  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        },
        {
          label: "Websites",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          fill: true,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
}
if (document.getElementById("doughnut-chart")) {
  var ctx3 = document.getElementById("doughnut-chart").getContext("2d");
  new Chart(ctx3, {
    type: "doughnut",
    data: {
      labels: ["Creative Tim", "Github", "Bootsnipp", "Dev.to", "Codeinwp"],
      datasets: [
        {
          label: "Projects",
          weight: 9,
          cutout: 60,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: [
            "#2152ff",
            "#3A416F",
            "#f53939",
            "#a8b8d8",
            "#5e72e4",
          ],
          data: [15, 20, 12, 60, 20],
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("pie-chart")) {
  var ctx4 = document.getElementById("pie-chart").getContext("2d");
  new Chart(ctx4, {
    type: "pie",
    data: {
      labels: ["Facebook", "Direct", "Organic", "Referral"],
      datasets: [
        {
          label: "Projects",
          weight: 9,
          cutout: 0,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: ["#17c1e8", "#5e72e4", "#3A416F", "#a8b8d8"],
          data: [15, 20, 12, 60],
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("bar-chart")) {
  var ctx5 = document.getElementById("bar-chart").getContext("2d");
  new Chart(ctx5, {
    type: "bar",
    data: {
      labels: ["16-20", "21-25", "26-30", "31-36", "36-42", "42+"],
      datasets: [
        {
          label: "Sales by age",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3A416F",
          data: [15, 20, 12, 60, 20, 15],
          fill: false,
          maxBarThickness: 35,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true,
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10,
          },
        },
      },
    },
  });
}
if (document.getElementById("bar-chart-horizontal")) {
  var ctx6 = document.getElementById("bar-chart-horizontal").getContext("2d");
  new Chart(ctx6, {
    type: "bar",
    data: {
      labels: ["16-20", "21-25", "26-30", "31-36", "36-42", "42+"],
      datasets: [
        {
          label: "Sales by age",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3A416F",
          data: [15, 20, 12, 60, 20, 15],
          fill: false,
        },
      ],
    },
    options: {
      indexAxis: "y",
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true,
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10,
          },
        },
      },
    },
  });
}
if (document.getElementById("mixed-chart")) {
  var ctx7 = document.getElementById("mixed-chart").getContext("2d");
  new Chart(ctx7, {
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          type: "bar",
          label: "Organic Search",
          weight: 5,
          tension: 0.4,
          borderWidth: 0,
          pointBackgroundColor: "#3A416F",
          borderColor: "#3A416F",
          backgroundColor: "#3A416F",
          borderRadius: 4,
          borderSkipped: false,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 10,
        },
        {
          type: "line",
          label: "Referral",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          pointBackgroundColor: "#5e72e4",
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
}
if (document.getElementById("bubble-chart")) {
  var ctx8 = document.getElementById("bubble-chart").getContext("2d");
  new Chart(ctx8, {
    type: "bubble",
    data: {
      labels: ["0", "10", "20", "30", "40", "50", "60", "70", "80", "90"],
      datasets: [
        {
          label: "Dataset 1",
          data: [
            {
              x: 100,
              y: 0,
              r: 10,
            },
            {
              x: 60,
              y: 30,
              r: 20,
            },
            {
              x: 40,
              y: 350,
              r: 10,
            },
            {
              x: 80,
              y: 80,
              r: 10,
            },
            {
              x: 20,
              y: 30,
              r: 15,
            },
            {
              x: 0,
              y: 100,
              r: 5,
            },
          ],
          backgroundColor: "#5e72e4",
        },
        {
          label: "Dataset 2",
          data: [
            {
              x: 70,
              y: 40,
              r: 10,
            },
            {
              x: 30,
              y: 60,
              r: 20,
            },
            {
              x: 10,
              y: 300,
              r: 25,
            },
            {
              x: 60,
              y: 200,
              r: 10,
            },
            {
              x: 50,
              y: 300,
              r: 15,
            },
            {
              x: 20,
              y: 350,
              r: 5,
            },
          ],
          backgroundColor: "#3A416F",
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false,
        },
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
}
if (document.getElementById("radar-chart")) {
  var ctx9 = document.getElementById("radar-chart").getContext("2d");
  new Chart(ctx9, {
    type: "radar",
    data: {
      labels: [
        "English",
        "Maths",
        "Physics",
        "Chemistry",
        "Biology",
        "History",
      ],
      datasets: [
        {
          label: "Student A",
          backgroundColor: "rgba(58,65,111,0.2)",
          data: [65, 75, 70, 80, 60, 80],
          borderDash: [5, 5],
        },
        {
          label: "Student B",
          backgroundColor: "rgba(203,12,159,0.2)",
          data: [54, 65, 60, 70, 70, 75],
        },
      ],
    },
    options: {
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  });
}
if (document.getElementById("polar-chart")) {
  var ctx10 = document.getElementById("polar-chart").getContext("2d");
  new Chart(ctx10, {
    type: "polarArea",
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Blue"],
      datasets: [
        {
          label: "My First Dataset",
          data: [11, 16, 7, 3, 14],
          backgroundColor: [
            "#17c1e8",
            "#5e72e4",
            "#3A416F",
            "#a8b8d8",
            "#82d616",
          ],
        },
      ],
    },
    options: {
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  });
}
if (document.getElementById("chart-line-3")) {
  var ctx1 = document.getElementById("chart-line-3").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(255,255,255,0.3)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Visitors",
          tension: 0.5,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#fff",
          borderWidth: 2,
          backgroundColor: gradientStroke1,
          data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
          maxBarThickness: 6,
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-line-traffic")) {
  var ctx1 = document.getElementById("chart-line-traffic").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");
  var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(20,23,39,0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Organic Search",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#5e72e4",
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        },
        {
          label: "Referral",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#3A416F",
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          maxBarThickness: 6,
        },
        {
          label: "Direct",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#17c1e8",
          borderColor: "#17c1e8",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-doughnut-referrals")) {
  var ctx2 = document
    .getElementById("chart-doughnut-referrals")
    .getContext("2d");
  new Chart(ctx2, {
    type: "doughnut",
    data: {
      labels: ["Creative Tim", "Github", "Bootsnipp", "Dev.to", "Codeinwp"],
      datasets: [
        {
          label: "Projects",
          weight: 9,
          cutout: 60,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: [
            "#2152ff",
            "#3A416F",
            "#f53939",
            "#a8b8d8",
            "#5e72e4",
          ],
          data: [15, 20, 12, 60, 20],
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-pie")) {
  var ctx2 = document.getElementById("chart-pie").getContext("2d");
  new Chart(ctx2, {
    type: "pie",
    data: {
      labels: ["Facebook", "Direct", "Organic", "Referral"],
      datasets: [
        {
          label: "Projects",
          weight: 9,
          cutout: 0,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: ["#17c1e8", "#5e72e4", "#3A416F", "#a8b8d8"],
          data: [15, 20, 12, 60],
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            display: false,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-line-ecommerce")) {
  var ctx1 = document.getElementById("chart-line-ecommerce").getContext("2d");
  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke1.addColorStop(1, "rgba(94, 114, 228,0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(94, 114, 228,0.0)");
  gradientStroke1.addColorStop(0, "rgba(94, 114, 228,0)");
  var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(20,23,39,0)");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Facebook Ads",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#5e72e4",
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [50, 100, 200, 190, 400, 350, 500, 450, 700],
          maxBarThickness: 6,
        },
        {
          label: "Google Ads",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#3A416F",
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          fill: true,
          data: [10, 30, 40, 120, 150, 220, 280, 250, 280],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10,
          },
        },
      },
    },
  });
}
if (document.getElementById("chart-bar")) {
  var ctx3 = document.getElementById("chart-bar").getContext("2d");
  new Chart(ctx3, {
    type: "bar",
    data: {
      labels: ["16-20", "21-25", "26-30", "31-36", "36-42", "42+"],
      datasets: [
        {
          label: "Sales by age",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3A416F",
          data: [15, 20, 12, 60, 20, 15],
          fill: false,
        },
      ],
    },
    options: {
      indexAxis: "y",
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7",
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true,
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10,
          },
        },
      },
    },
  });
}

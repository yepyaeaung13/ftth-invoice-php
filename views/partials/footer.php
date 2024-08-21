<!-- jquery -->
<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script src="../assets/js/chartjs.min.js"></script>
<script src="../assets/js/jspdf.umd.min.js"></script>
<script src="../assets/js/html2canvas.js"></script>

<!-- my js  -->
<script src="../assets/js/index.js"></script>

<!-- dashboard data binding with chart js and php  -->
<script>
    // mbps chart 
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
                datasets: [{
                    label: "Mbps",
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
                    data: [<?= count($mbps_10_users) ?>,
                        <?= count($mbps_15_users) ?>,
                        <?= count($mbps_20_users) ?>,
                        <?= count($mbps_40_users) ?>,
                        <?= count($mbps_50_users) ?>
                    ],
                    fill: false,
                }, ],
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

    // invoice status chart 
    if (document.getElementById("chart-bar-projects")) {
        var ctx2 = document.getElementById("chart-bar-projects").getContext("2d");
        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(33,82,255,0.1)");
        gradientStroke1.addColorStop(0.2, "rgba(33,82,255,0.0)");
        gradientStroke1.addColorStop(0, "rgba(33,82,255,0)");
        new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ["Invoices", "Unpaid"],
                datasets: [{
                    label: "Invoices",
                    weight: 9,
                    cutout: 50,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ["#2152ff", "#a8b8d8"],
                    data: [<?= count($total_invoices) ?>, <?= count($total_invoices) - count($total_payments) ?>],
                    fill: false,
                }, ],
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

    // subscriptions status
    if (document.getElementById("pie-chart")) {
        var ctx4 = document.getElementById("pie-chart").getContext("2d");
        new Chart(ctx4, {
            type: "pie",
            data: {
                labels: ["active", "Expired"],
                datasets: [{
                    label: "Subscriptions",
                    weight: 9,
                    cutout: 0,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ["#00d095", "#555e77"],
                    data: [<?= count($total_sub_active_users) ?>, <?= count($total_sub_expired_users) ?>],
                    fill: false,
                }, ],
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

    // monthly income chart
    if (document.getElementById("chart-line-projects")) {
        var ctx1 = document.getElementById("chart-line-projects").getContext("2d");
        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(33,82,255,0.1)");
        gradientStroke1.addColorStop(0.2, "rgba(33,82,255,0.0)");
        gradientStroke1.addColorStop(0, "rgba(33,82,255,0)");
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Income",
                    tension: 0.3,
                    pointRadius: 2,
                    pointBackgroundColor: "#2152ff",
                    borderColor: "#2152ff",
                    borderWidth: 2,
                    backgroundColor: gradientStroke1,
                    data: [<?= $jan_amounts ?>, <?= $feb_amounts ?>, <?= $mar_amounts ?>, <?= $apr_amounts ?>, <?= $may_amounts ?>, <?= $jun_amounts ?>, <?= $jul_amounts ?>, <?= $aug_amounts ?>, <?= $sep_amounts ?>, <?= $oct_amounts ?>, <?= $nov_amounts ?>, <?= $dec_amounts ?>],
                    maxBarThickness: 6,
                    fill: true,
                }, ],
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
                            color: "black",
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
                            color: "black",
                        },
                    },
                },
            },
        });
    }
</script>


</body>

</html>
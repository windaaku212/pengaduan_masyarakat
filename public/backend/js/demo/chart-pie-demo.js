// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["diterima", "ditolak"],
        datasets: [
            {
                data: [dataApprove, dataReject],
                backgroundColor: ["#1cc88a", "#e74a3b", "#36b9cc"], // Merah, Hijau, dan Teal (bisa diganti jika perlu)
                hoverBackgroundColor: ["#c0392b", "#17a673", "#2c9faf"], // Merah lebih gelap, Hijau lebih gelap, dan Teal lebih gelap// Warna saat hover
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            },
        ],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false,
        },
        cutoutPercentage: 80,
    },
});

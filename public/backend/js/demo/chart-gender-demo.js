// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

// Pie Chart Example
var ctx = document.getElementById("myGenderChart");
var myPieChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Laki-laki", "Perempuan"],
        datasets: [
            {
                data: [dataMale, dataFemale],
                backgroundColor: ["#FFFF00", "#808080"], // Abu-abu untuk laki-laki dan Kuning untuk perempuan
                hoverBackgroundColor: ["#A9A9A9", "#FFD700"], // Warna saat hover (abu-abu lebih gelap dan kuning lebih gelap)
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

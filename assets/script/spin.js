/* --------------- Spin Wheel  --------------------- */
const spinWheel = document.getElementById("spinWheel");
const spinBtn = document.getElementById("spin_btn");
const text = document.getElementById("text");

var g1 = document.getElementById("gift1");
var g2 = document.getElementById("gift2");
var g3 = document.getElementById("gift3");
var id_tamp = document.getElementById("tampilan");

function kirim() {
    id_tamp.innerText = g1.value + ", " + g2.value + ", " + g3.value;
}
/* --------------- Minimum And Maximum Angle For A value  --------------------- */
const spinValues = [
    { minDegree: 331, maxDegree: 360, value: 'Hadiah 1' },
    { minDegree: 0, maxDegree: 90, value: 'Hadiah 1' },
    { minDegree: 211, maxDegree: 330, value: 'Hadiah 2' },
    { minDegree: 91, maxDegree: 210, value: 'Hadiah 3' },
];

/* --------------- Size Of Each Piece  --------------------- */
const size = [40, 40, 40];
/* --------------- Background Colors  --------------------- */
var spinColors = [
    "#E74C3C",
    "#F1C40F",
    "#7D3C98",
    "#138D75",
    "#1163da",
    "#135E10",
    "#E74C3C",
    "#F1C40F",
    "#7D3C98",
    "#138D75",
    "#1163da",
    "#135E10",
];
/* --------------- Chart --------------------- */
/* --------------- Guide : https://chartjs-plugin-datalabels.netlify.app/guide/getting-started.html --------------------- */
let spinChart = new Chart(spinWheel, {
    plugins: [ChartDataLabels],
    type: "pie",
    data: {
        labels: [1, 2, 3],
        datasets: [{
            backgroundColor: spinColors,
            data: size,
        }, ],
    },
    options: {
        responsive: true,
        animation: { duration: 0 },
        plugins: {
            tooltip: false,
            legend: {
                display: false,
            },
            datalabels: {
                rotation: 90,
                color: "#ffffff",
                formatter: (_, context) => context.chart.data.labels[context.dataIndex],
                font: { size: 24 },
            },
        },
    },
});
/* --------------- Display Value Based On The Angle --------------------- */
const generateValue = (angleValue) => {
    for (let i of spinValues) {
        if (angleValue >= i.minDegree && angleValue <= i.maxDegree) {
            text.innerHTML = `<p>Selamat, Anda mendapat ${i.value} ! </p>`;
            spinBtn.disabled = false;
            break;
        }
    }
};
/* --------------- Spinning Code --------------------- */
let count = 0;
let resultValue = 101;
spinBtn.addEventListener("click", () => {
    spinBtn.disabled = true;
    text.innerHTML = `<p>Best Of Luck!</p>`;
    let randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
    let rotationInterval = window.setInterval(() => {
        spinChart.options.rotation = spinChart.options.rotation + resultValue;
        spinChart.update();
        if (spinChart.options.rotation >= 360) {
            count += 1;
            resultValue -= 5;
            spinChart.options.rotation = 0;
        } else if (count > 15 && spinChart.options.rotation == randomDegree) {
            generateValue(randomDegree);
            clearInterval(rotationInterval);
            count = 0;
            resultValue = 101;
        }
    }, 10);
});
/* --------------- End Spin Wheel  --------------------- */
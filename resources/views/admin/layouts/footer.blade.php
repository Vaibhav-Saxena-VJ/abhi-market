<div class="dashboard-footer">
    <div class="flex-between flex-wrap gap-16">
        <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright JFinMate 2025, All Right Reserverd</p>
        <!-- <div class="flex-align flex-wrap gap-16">
                <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">License</a>
                <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">More Themes</a>
                <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Documentation</a>
                <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
            </div> -->
        </div>
    </div>
</div>

<!-- Jquery js -->
<script src="{{ asset('dashboard') }}/assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap Bundle Js -->
<script src="{{ asset('dashboard') }}/assets/js/boostrap.bundle.min.js"></script>
<!-- Phosphor Js -->
<script src="{{ asset('dashboard') }}/assets/js/phosphor-icon.js"></script>
<!-- file upload -->
<script src="{{ asset('dashboard') }}/assets/js/file-upload.js"></script>
<!-- file upload -->
<script src="{{ asset('dashboard') }}/assets/js/plyr.js"></script>
<!-- dataTables -->
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<!-- full calendar -->
<script src="{{ asset('dashboard') }}/assets/js/full-calendar.js"></script>
<!-- jQuery UI -->
<script src="{{ asset('dashboard') }}/assets/js/jquery-ui.js"></script>
<!-- jQuery UI -->
<script src="{{ asset('dashboard') }}/assets/js/editor-quill.js"></script>
<!-- apex charts -->
<script src="{{ asset('dashboard') }}/assets/js/apexcharts.min.js"></script>
<!-- jvectormap Js -->
<script src="{{ asset('dashboard') }}/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
<!-- jvectormap world Js -->
<script src="{{ asset('dashboard') }}/assets/js/jquery-jvectormap-world-mill-en.js"></script>

<!-- main js -->
<script src="{{ asset('dashboard') }}/assets/js/main.js"></script>

<script>
    function createChart(chartId, chartColor) {

        let currentYear = new Date().getFullYear();

        var options = {
        series: [
            {
                name: 'series1',
                data: [18, 25, 22, 40, 34, 55, 50, 60, 55, 65],
            },
        ],
        chart: {
            type: 'area',
            width: 80,
            height: 42,
            sparkline: {
                enabled: true // Remove whitespace
            },

            toolbar: {
                show: false
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 1,
            colors: [chartColor],
            lineCap: 'round'
        },
        grid: {
            show: true,
            borderColor: 'transparent',
            strokeDashArray: 0,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },   
            yaxis: {
                lines: {
                    show: false
                }
            },  
            row: {
                colors: undefined,
                opacity: 0.5
            },  
            column: {
                colors: undefined,
                opacity: 0.5
            },  
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },  
        },
        fill: {
            type: 'gradient',
            colors: [chartColor], // Set the starting color (top color) here
            gradient: {
                shade: 'light', // Gradient shading type
                type: 'vertical',  // Gradient direction (vertical)
                shadeIntensity: 0.5, // Intensity of the gradient shading
                gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                inverseColors: false, // Do not invert colors
                opacityFrom: .5, // Starting opacity
                opacityTo: 0.3,  // Ending opacity
                stops: [0, 100],
            },
        },
        // Customize the circle marker color on hover
        markers: {
            colors: [chartColor],
            strokeWidth: 2,
            size: 0,
            hover: {
                size: 8
            }
        },
        xaxis: {
            labels: {
                show: false
            },
            categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
            tooltip: {
                enabled: false,
            },
        },
        yaxis: {
            labels: {
                show: false
            }
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    // Call the function for each chart with the desired ID and color
    createChart('complete-course', '#2FB2AB');
    createChart('earned-certificate', '#27CFA7');
    createChart('course-progress', '#6142FF');
    createChart('community-support', '#FA902F');


    // =========================== Double Line Chart Start ===============================
    function createLineChart(chartId, chartColor) {
        var options = {
        series: [
            {
                name: 'Study',
                data: [8, 15, 9, 20, 10, 33, 13, 22, 8, 17, 10, 15],
            },
            {
                name: 'Test',
                data: [8, 24, 18, 40, 18, 48, 22, 38, 18, 30, 20, 28],
            },
        ],
        chart: {
            type: 'area',
            width: '100%',
            height: 300,
            sparkline: {
                enabled: false // Remove whitespace
            },
            toolbar: {
                show: false
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        colors: ['#3D7FF9', chartColor],  // Set the color of the series
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: 'smooth',
            width: 1,
            colors: ["#3D7FF9", chartColor],
            lineCap: 'round',
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.9,  // Decrease this value to reduce opacity
                opacityTo: 0.2,    // Decrease this value to reduce opacity
                stops: [0, 100]
            }
        },
        grid: {
            show: true,
            borderColor: '#E6E6E6',
            strokeDashArray: 3,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },   
            yaxis: {
                lines: {
                    show: true
                }
            },  
            row: {
                colors: undefined,
                opacity: 0.5
            },  
            column: {
                colors: undefined,
                opacity: 0.5
            },  
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },  
        },
        // Customize the circle marker color on hover
        markers: {
            colors: ["#3D7FF9", chartColor],
            strokeWidth: 3,
            size: 0,
            hover: {
                size: 8
            }
        },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`],
                tooltip: {
                    enabled: false,        
                },
                labels: {
                    formatter: function (value) {
                        return value;
                    },
                    style: {
                        fontSize: "14px"
                    }
                },
            },
            yaxis: {
                    labels: {
                        formatter: function (value) {
                            return "$" + value + "Hr";
                        },
                        style: {
                            fontSize: "14px"
                        }
                    },
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            legend: {
                show: false,
                position: 'top',
                horizontalAlign: 'right',
                offsetX: -10,
                offsetY: -0
            }
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }
    createLineChart('doubleLineChart', '#27CFA7');
    // =========================== Double Line Chart End ===============================

    // ================================= Multiple Radial Bar Chart Start =============================
    var options = {
        series: [100, 60, 25],
        chart: {
            height: 172,
            type: 'radialBar',
        },
        colors: ['#3D7FF9', '#27CFA7', '#020203'], 
        stroke: {
            lineCap: 'round',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '30%',  // Adjust this value to control the bar width
                },
                dataLabels: {
                    name: {
                        fontSize: '16px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        formatter: function (w) {
                            return '82%'
                        }
                    }
                }
            }
        },
        labels: ['Completed', 'In Progress', 'Not Started'],
    };

    var chart = new ApexCharts(document.querySelector("#radialMultipleBar"), options);
    chart.render();
    // ================================= Multiple Radial Bar Chart End =============================

    // ========================== Export Js Start ==============================
    document.addEventListener('DOMContentLoaded', function() {
        const exportOptions = document.getElementById('exportOptions');
        
        if (exportOptions) {
            exportOptions.addEventListener('change', function() {
                const format = this.value;
                const table = document.getElementById('assignmentTable');
                let data = [];
                const headers = [];

                // Get the table headers
                table.querySelectorAll('thead th').forEach(th => {
                    headers.push(th.innerText.trim());
                });

                // Get the table rows
                table.querySelectorAll('tbody tr').forEach(tr => {
                    const row = {};
                    tr.querySelectorAll('td').forEach((td, index) => {
                        row[headers[index]] = td.innerText.trim();
                    });
                    data.push(row);
                });

                if (format === 'csv') {
                    downloadCSV(data);
                } else if (format === 'json') {
                    downloadJSON(data);
                }
            });
        }
    });

    function downloadCSV(data) {
        const csv = data.map(row => Object.values(row).join(',')).join('\n');
        const blob = new Blob([csv], { type: 'text/csv' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'students.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

    function downloadJSON(data) {
        const json = JSON.stringify(data, null, 2);
        const blob = new Blob([json], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'students.json';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
    // ========================== Export Js End ==============================


    // ============================= Calendar Js Start =================================
    let display = document.querySelector(".display");
    let days = document.querySelector(".days");
    let previous = document.querySelector(".left");
    let next = document.querySelector(".right");

    let date = new Date();

    let year = date.getFullYear();
    let month = date.getMonth();

    function displayCalendar() {
    const firstDay = new Date(year, month, 1);

    const lastDay = new Date(year, month + 1, 0);

    const firstDayIndex = firstDay.getDay(); //4

    const numberOfDays = lastDay.getDate(); //31

    let formattedDate = date.toLocaleString("en-US", {
        month: "long",
        year: "numeric"
    });

    display.innerHTML = `${formattedDate}`;

    for (let x = 1; x <= firstDayIndex; x++) {
        const div = document.createElement("div");
        div.innerHTML += "";

        days.appendChild(div);
    }

    for (let i = 1; i <= numberOfDays; i++) {
        let div = document.createElement("div");
        let currentDate = new Date(year, month, i);

        div.dataset.date = currentDate.toDateString();

        div.innerHTML += i;
        days.appendChild(div);
        if (
            currentDate.getFullYear() === new Date().getFullYear() &&
            currentDate.getMonth() === new Date().getMonth() &&
            currentDate.getDate() === new Date().getDate()
        ) {
            div.classList.add("current-date");
        }
    }
    }

    // Call the function to display the calendar
    displayCalendar();

    previous.addEventListener("click", () => {
        days.innerHTML = "";

        if (month < 0) {
            month = 11;
            year = year - 1;
        }
        month = month - 1;
        date.setMonth(month);
        displayCalendar();
    });

    next.addEventListener("click", () => {
        days.innerHTML = "";

        if (month > 11) {
            month = 0;
            year = year + 1;
        }

        month = month + 1;
        date.setMonth(month);

        displayCalendar();
    });
    // ============================= Calendar Js End =================================
    
</script> 

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

<!-- Summernote Initialization -->
<script>
$(document).ready(function() {
    $('#summernote').summernote({
    placeholder: 'Write something here...',
    height: 200
    });
});
</script>
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://github.com/eddyyucca">BUMA-IT-IPR</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.js"></script>
<!-- sweetalert -->
 
 <script>
      document.querySelectorAll('.confirmButton').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        const href = this.getAttribute('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it!',
            cancelButtonText: 'Cancel',
            background: '#f0f0f0',
            backdrop: `rgba(0,0,0,0.4)`
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            }
        });
    });
});
    </script>
  <script src="<?= base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/') ?>plugins/flot/jquery.flot.js"></script>

<script src="<?= base_url('assets/') ?>plugins/flot/plugins/jquery.flot.resize.js"></script>

<script src="<?= base_url('assets/') ?>plugins/flot/plugins/jquery.flot.pie.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets/') ?>chart.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: ':visible:not(.no-export)' // Mengecualikan kolom yang disembunyikan
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            'colvis'
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
<script>
    // Data for Bar Chart
    var barLabels = <?php echo $labels_json; ?>;
    var barData = <?php echo $data_json; ?>;
    
    // Data for Doughnut Chart
    var donutLabels = <?php echo $labels_donut_json; ?>;
    var donutData = <?php echo $data_donut_json; ?>;
    
    // Bar Chart
    var ctxBar = document.getElementById('myBarChart').getContext('2d');
    var myBarChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
                labels: barLabels,
                datasets: [{
                    label: 'Jumlah Unit',
                    data: barData,
                    backgroundColor: [
                        '#00c539', '#36A2EB', '#FFCE56', '#f80035', '#4BC0C0', '#9966FF', '#FF9F40',
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#00c539',
                        '#36A2EB', '#FFCE56', '#f80035', '#4BC0C0', '#9966FF', '#FF9F40', '#FF6384',
                        '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#00c539', '#36A2EB',
                        '#FFCE56', '#f80035', '#4BC0C0', '#9966FF', '#FF9F40', '#FF6384', '#36A2EB'
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        // Doughnut Chart
        var ctxDonut = document.getElementById('myDonutChart').getContext('2d');
        var myDonutChart = new Chart(ctxDonut, {
            type: 'doughnut',
            data: {
                labels: donutLabels,
                datasets: [{
                    label: 'Kategori',
                    data: donutData,
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Doughnut Chart Example'
                    }
                }
            }
        });
        
        // Event listener to update the doughnut chart
        document.getElementById('circleunit').addEventListener('click', function() {
            // Data update logic can be customized here
            var newData = [40, 30, 20, 5, 5]; // Example of new data
            myDonutChart.data.datasets[0].data = newData;
            myDonutChart.update();
        });
        </script>
<script>
    // script.js
    var data1 = <?php echo $unit_ready; ?>;
    var data2 = <?php echo $near_expiry_units_2_months; ?>;
    var data3 = <?php echo $near_expiry_units_1_months; ?>;
    var data4 = <?php echo $expired; ?>;
    // Donut Chart
    const ctxDonut = document.getElementById('myDonutChart').getContext('2d');
    const myDonutChart = new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: ['Unit Ready', '2 Months Until Re-Commissioning', '1 Months Until Re-Commissioning', 'Expired Unit'],
            datasets: [{
                label: 'My First Dataset',
                data: [data1, data2, data3, data4], // Data yang Anda berikan
                backgroundColor: [
                    '#00c539',
                    '#36A2EB',
                    '#FFCE56',
                    '#f80035',
                ],
                hoverBackgroundColor: [
                    '#00c539',
                    '#36A2EB',
                    '#FFCE56',
                    '#f80035',
        ],
        borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        cutoutPercentage: 50, // Menyesuaikan ukuran donut chart (dalam persen)
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.label || '';
                        if (label) {
                            label += ': ';
                        }
                        label += context.raw;
                        return label;
                    }
                }
            }
        }
    },
});

//-------------
//- BAR CHART -
//-------------
// Data dari PHP
<?php
$hauler = json_encode([$hauler_open, $hauler_close, $hauler_total]);
$sge = json_encode([$sge_open, $sge_close, $sge_total]);
$support = json_encode([$support_open, $support_close, $support_total]);
$digger = json_encode([$digger_open, $digger_close, $digger_total]);

?>

var Hauler = <?php echo $hauler; ?>;
var SGE = <?php echo $sge; ?>;
var Support = <?php echo $support; ?>;
var Digger = <?php echo $digger; ?>;

// Data untuk area chart
var areaChartData = {
    labels: ['Hauler', 'SGE', 'Support', 'Digger'],
    datasets: [
    {
        label: 'Open',
        backgroundColor: 'rgba(255, 99, 132, 0.5)',
        borderColor: 'rgba(255, 99, 132, 1)',
        data: [Hauler[0], SGE[0], Support[0], Digger[0]]
    },
    {
        label: 'Close',
        backgroundColor: 'rgba(75, 192, 192, 0.5)',
        borderColor: 'rgba(75, 192, 192, 1)',
        data: [Hauler[1], SGE[1], Support[1], Digger[1]]
    },
    {
        label: 'Total',
        backgroundColor: 'rgba(54, 162, 235, 0.5)',
        borderColor: 'rgba(54, 162, 235, 1)',
        data: [Hauler[2], SGE[2], Support[2], Digger[2]]
    }
]
};

// Membuat bar chart
var barChartCanvas = $('#barChart').get(0).getContext('2d');
var barChartData = $.extend(true, {}, areaChartData);

var barChartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    datasetFill: false
};


new Chart(barChartCanvas, {
    type: 'bar',
    data: barChartData,
    options: barChartOptions
});

</script>

<script>
    $(document).ready(function () {
	var inputCount = 1;
	var textInputCount = 1;
    
	// Function to add new text input on main form
	$('#add-button').click(function () {
        inputCount++;
		var newInput = `
        <div class="form-group row">
        <label for="input${inputCount}" class="col-sm-2 col-form-label">Input ${inputCount}</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="input${inputCount}" name="inputs[]">
        </div>
        <div class="col-sm-2">
        <button type="button" class="btn btn-danger remove-btn">Remove</button>
        </div>
        </div>
		`;
		$('#dynamic-form').append(newInput);
	});
    
	// Function to remove text input on main form
	$('#dynamic-form').on('click', '.remove-btn', function () {
        $(this).closest('.form-group').remove();
	});
    
	// Function to add new text input in modal
	$('#add-text-button').click(function () {
        textInputCount++;
		var newTextInput = `
        <div class="form-group row">
        <label for="input" class="col-sm-4 col-form-label">Text Input </label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="input" name="fu_list[]" required>
        </div>
        <div class="col-sm-2">
        <button type="button" class="btn btn-danger remove-text-btn">Remove</button>
        </div>
        </div>
		`;
		$('#text-input-container').append(newTextInput);
	});

	// Function to remove text input in modal
	$('#text-input-container').on('click', '.remove-text-btn', function () {
        $(this).closest('.form-group').remove();
	});
    
    // Function to validate and submit form
    $('#submit-button').click(function () {
        $('#text-input-container input[type="text"]').each(function () {
            if ($.trim($(this).val()) === '') {
                $(this).closest('.form-group').remove();
            }
        });
        
        $('#text-input-form').submit();
    });
    
    // Function to handle passing id to modal form
    $('#fu').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        modal.find('input[name="id"]').remove();
        modal.find('#text-input-form').append('<input type="hidden" name="id" value="' + id + '">');
    });
});
</script>

</body>
</html>

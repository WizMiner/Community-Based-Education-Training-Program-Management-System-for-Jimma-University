<!-- Jquery -->
<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<!-- Jquery UI -->
<script src="{{ asset('assets/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Data Tables -->
<script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Overlay Scrollbars -->
<script src="{{ asset('assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/select2/js/select2.full.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('assets/bs-stepper/js/bs-stepper.min.js') }}"></script>
<!-- Moment JS -->
<script src="{{ asset('assets/moment/moment.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset('assets/chart.js/Chart.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Admin LTE -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- Socket.io -->
<script src="https://cdn.socket.io/4.5.0/socket.io.min.js"></script>
<!-- Custom Script -->
<script>
    var pdf_config = (typeof pdf_config !== 'undefined') ? pdf_config : 'pdf';
    $(function() {
        //Initialize toaster
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000
        });
        //Initialize datatable
        $("#dataTable").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        // Intializing DataTable for reports
        $("#dataTableReports").DataTable({
            "responsive": true,
            "autoWidth": false,
            "searching": false,
            "buttons": ["csv", "excel", pdf_config, "print", "colvis"]
        }).buttons().container().appendTo('#dataTableReports_wrapper > div.row > div.col-sm-12:eq(1)');
        // customize the buttons
        $('#dataTable_wrapper > div.row > div.col-sm-12:eq(1) > div.dt-buttons').addClass('float-right');
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'YYYY-MM-DD',
            defaultDate: moment().startOf('month').format('YYYY-MM-DD')
        });

        $('#reservationdate2').datetimepicker({
            format: 'YYYY-MM-DD',
            defaultDate: moment().format('YYYY-MM-DD')
        });

        ///Date and time picker
        $('#reservationdatetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'far fa-clock'
            }
        });
        $('#reservationdatetime2').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'far fa-clock'
            }
        });
        $('#reservationdatetime3').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'far fa-clock'
            }
        });

        @if (session('error'))
            Toast.fire({
                icon: 'error',
                title: {!! "'" . session('error') . "'" !!}
            })
        @endif
    });
</script>


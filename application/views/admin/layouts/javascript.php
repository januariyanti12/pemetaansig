
    <!-- jQuery -->
    <script src="<?=templates('vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
   <script src="<?=templates('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?=templates('vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?=templates('vendors/nprogress/nprogress.js')?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?=templates('build/js/custom.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
    <script type="text/javascript">
        $.extend( $.fn.dataTable.defaults, {
          "bJQueryUI": false,
          "bAutoWidth": false,
          "order": [[2, "desc"]],
          "stateSave": true,
          "serverSide": true,
          "iDisplayLength": 10, 
          "processing": false,
          "dom": "<'row' <'col-xs-6 col-sm-3'l><'col-xs-6 col-sm-3'><'col-xs-6 col-sm-3'C><'col-xs-6 col-sm-3'f>r>"+
                  "<'row't>"+
                  "<'row'<'col-md-5'i><'col-md-7'p>>",                      
          "aLengthMenu": [
              [5,10, 30, 50, 100],
              [5,10, 30, 50, 100]
            ],
          "language": {
                  zeroRecords: "Maaf data tidak ditemukan",
                  info: "_START_ s/d _END_ dari _TOTAL_ data",
                  infoEmpty: "0 sampai 0 dari 0 data",
                  infoFiltered: "(disaring dari _MAX_ total data)",
                  searchPlaceholder: 'Cari...',
                  search: '',
                  lengthMenu: '_MENU_ Item/Halaman',
                  "paginate": {
                      "previous": "<",
                      "next": ">",

                    }
            },
            responsive: true
      });
        
    </script>
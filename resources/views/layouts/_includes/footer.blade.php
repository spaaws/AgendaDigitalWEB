<div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Agenda Digital</a>.</strong> Todos os direitos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script type="text/javascript" src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script type="text/javascript" src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script type="text/javascript" src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script type="text/javascript" src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script type="text/javascript" src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript" src="{{ asset('js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
<!-- DataTables -->
<script type="text/javascript" src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script type="text/javascript" src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script type="text/javascript" src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- bootstrap datepicker -->
<script type="text/javascript" src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- FastClick -->
<script type="text/javascript" src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
    })
  </script>
  @if(Auth::user()->password == null)
  <script type="text/javascript">
    $(document).ready(function() {
        $('#senhaModal').modal('show');
    })
  </script>
@endif


<script>
    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var contato_id = button.data('contatoid') 
        var modal = $(this)
        modal.find('.modal-body #contato_id').val(contato_id);
  })
</script>
</body>
</html>
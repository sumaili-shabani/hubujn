<script type="text/javascript" src="<?php echo(base_url()) ?>js/js/canavas.js"></script>
<!-- <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/stripe.js"></script> -->
 <!-- Bootstrap core JavaScript-->
<script src="<?php echo(base_url())?>js/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo(base_url())?>js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo(base_url())?>js/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo(base_url())?>js/js/sb-admin-2.min.js"></script>
<!-- fin Custom scripts for all pages-->

<!-- Page level plugins -->
<script src="<?php echo(base_url())?>js/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo(base_url())?>js/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo(base_url())?>js/js/demo/datatables-demo.js"></script>
<!-- Fin Page level custom scripts -->

<!-- sweetalert -->
<script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>

<!-- script calendrier -->
<script src="<?= base_url('js/assets/bundles/fullcalendarscripts.bundle.js')?>"></script>
<!--/ calender javascripts -->
<!-- fin -->
<script src="<?= base_url('js/plugins/summernote/summernote-bs4.min.js')?>"></script>

<script src="<?= base_url('js/js/toast/jquery.toast.min.js')?>"></script>


<!-- auto complete search box -->
<script src="<?= base_url('js/bootstrap3-typeahead.min.js')?>"></script>
<script src="<?= base_url('js/handlebars.js')?>"></script>
<script src="<?= base_url('js/typeahead.bundle.js')?>"></script>
<!-- fin -->


<script>
  $(function () {
    // Summernote
    $('.textarea').summernote();
  })
</script>

<script type="text/javascript">
    $(document).ready(function(){
        //alert("boom");

        var limit = 4;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit)
        {
          var output = '';
          for(var count=0; count<limit; count++)
          {
            output += '<div class="post_data">';
            output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
            output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
            output += '</div>';
          }
          $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

         setTimeout(function(){
             $('#load_data').append('');
             $('#load_data_message').html("");
          }, 500);


    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        // alert("boom");
    });
</script>


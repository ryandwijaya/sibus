
 
 <div id="footer" class="mt-5" <?php if ($this->uri->segment(1)=='konfirmasi' || $this->uri->segment(2)=='create' || $this->uri->segment(1)=='beli'   ): ?>
   style="bottom: 0;position: absolute; width: 100%;"
 <?php endif ?>>
  <div class="container">
  
   <div class="copyright">Copyright &copy; 2019 by <a href="https://user-jay.blogspot.com/" target="_blank">Digtive Jay</a>. All rights reserved.</div>
   
   <div class="social">
    <ul>
     <li><a href="http://linkedin.com/" title="LinkedIn"><img src="<?= base_url() ?>assets/frontend/images/social/linkedin.png" alt="LinkedIn" /></a></li>
     <li><a href="http://facebook.com/" title="Facebook"><img src="<?= base_url() ?>assets/frontend/images/social/facebook.png" alt="Facebook" /></a></li>
     <li><a href="http://twitter.com/" title="Twitter"><img src="<?= base_url() ?>assets/frontend/images/social/twitter.png" alt="Twitter" /></a></li>
    </ul>
   </div>
   
  </div> <!-- End Container -->
 </div> <!-- End Footer -->
 
 
 
 <a href="#" class="scrollup" title="Back to Top!">Scroll</a>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php if ($this->session->flashdata('alert') == 'success_bayar') { ?>
<script type="text/javascript">
    //Success Message
$(document).ready(function () {
Swal.fire(
{
title: 'Berhasil!',
text: '',
type: 'success',
}
)

});
</script>      
<?php } ?>


</html>
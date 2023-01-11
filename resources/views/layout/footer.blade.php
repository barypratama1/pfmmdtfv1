<?php 
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profilf  = $myprofil->nav_profil();
$nav_layananf = $myprofil->nav_layanan();
?>
<!--Footer Start-->
<footer class="h3footer wf100">
   <div class="container">
      <div class="row">
         <!-- <div class="col-md-1 col-sm-12"> <img src="{{ asset('assets/upload/image/'.$site_config->icon) }}" alt="" style="max-height: auto; width: auto;"> </div> -->
         <!--Footer Widget Start-->
         
         <!--Footer Widget End--> 
         <!--Footer Widget Start-->
         <div class="col-sm">
            <div class="footer-widget">
               <div class="col-md-8 col-sm-12">
                  <img src="assets/upload/image/logo-donor.jpeg" style="width:700px;height:70px;"> 
               </div>
               <!-- <h3>Layanan</h3>
               <ul class="lastest-products">
                  <?php foreach($nav_layananf as $nav_layananf) { ?>
                  <li><img src="{{ asset('assets/upload/image/thumbs/'.$nav_layananf->gambar) }}" alt="{{ $nav_layananf->judul_berita }}"> <strong><a href="{{ asset('layanan/'.$nav_layananf->slug_berita) }}">{{ $nav_layananf->judul_berita }}</a></strong> <span class="pdate"><i>Updated:</i> <?php echo tanggal('tanggal_id',$nav_layananf->tanggal_post) ?></span> </li>
                  <?php } ?>
               </ul> -->
            </div>
         </div>

         <div class="col-sm-4">
            <div class="footer-widget">
               <h3>{{ $site_config->namaweb }}</h3>
               <p>{{ $site_config->deskripsi }}</p>
               <hr style="border-top: solid thin #EEE;padding:0; margin: 5px 0;">
                  <p>
                  <?php echo nl2br($site_config->alamat) ?>
                  <br>Phone: {{ $site_config->telepon }}
                  <br>Fax: {{ $site_config->fax }}
                  <br>Email: {{ $site_config->email }}
            </div>
         </div>
         <!--Footer Widget End--> 
         <!--Footer Widget Start-->
         <!-- <div class="col-sm-3"> -->
            <!-- <div class="footer-widget"> -->
               <!-- <h3>Follow Us</h3> -->
               <!-- <div class="newsletter">
                  <ul>
                     <li>
                        <input type="text" placeholder="Your Name">
                     </li>
                     <li>
                        <input type="text" placeholder="Your Email">
                     </li>
                     <li>
                        <input type="submit" value="Subscribe Now">
                     </li>
                  </ul>
               </div> -->
               <!--
               <div class="footer-social">
                  <a href="#"><i class="fab fa-facebook-f"></i></a> 
                  <a href="#"><i class="fab fa-twitter"></i></a> 
                  <a href="#"><i class="fab fa-linkedin-in"></i></a> 
                  <a href="#"><i class="fab fa-instagram"></i></a> 
                  <a href="#"><i class="fab fa-youtube"></i></a> 
               </div>
                  -->
            <!-- </div> -->
         <!-- </div> -->
         <!--Footer Widget End--> 
      </div>

      <div class="row footer-copyr">
         
         
         <div class="col-sm-12">
            <p>{{ $site_config->namaweb }} | Kementerian Keuangan © 2022</p>
         </div>
      </div>
   </div>
</footer>
<!--Footer End--> 
</div>
<!--   JS Files Start  --> 
<script src="{{ asset('assets/aws/js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery-migrate-1.4.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/popper.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery.prettyPhoto.js') }}"></script> 
<script src="{{ asset('assets/aws/js/isotope.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/slick.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/custom.js') }}"></script>
</body>
</html>

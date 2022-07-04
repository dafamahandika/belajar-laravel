<!-- Menghubungkan dengan view tamplate master -->

@extends ('master')

@section ('konten')
<title>Laravel | Portofolio</title>
<section class="section">
     <h2 class="section-header">Portofolio</h2>
     <div class="gallery">
          <!-- Project 1 -->
          <figure class="images">
               <img src="../assets/img/portofolio.jpg" class="gallery-img" alt="profile-img">
               <figcaption>
                    <h5 class="name">
                         Project 1
                         <span>
                              <a href="detail.html"> Detail</a>
                         </span>
                    </h5>
               </figcaption>
          </figure>

          <!-- Project 2 -->
          <figure class="images">
               <img src="../assets/img/portofolio.jpg" class="gallery-img" alt="profile-img">
               <figcaption>
                    <h5 class="name">
                         Project 2
                         <span>
                              <a href="detail.html"> Detail</a>
                         </span>
                    </h5>
               </figcaption>
          </figure>

          <!-- Project 3 -->
          <figure class="images">
               <img src="../assets/img/portofolio.jpg" class="gallery-img" alt="profile-img">
               <figcaption>
                    <h5 class="name">
                         Project 3
                         <span>
                              <a href="detail.html"> Detail</a>
                         </span>
                    </h5>
               </figcaption>
          </figure>
     </div>
</section>

@endsection
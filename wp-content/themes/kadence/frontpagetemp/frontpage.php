<?php
/* Template Name: home Page Template */
get_header();

if (have_rows('mainsection')) {
   while (have_rows('mainsection')) {
      the_row();
    

     if (get_row_layout() == 'hero_banner'){
         include ( get_stylesheet_directory()."/frontpagetemp/" .get_row_layout().".php");
       
        } else if (get_row_layout() == 'cta') {
         $file = get_sub_field('file');
    }
  }
}  else {
  echo "out";
}
?>




<style>
    .hero-banner {
  background-image: url('https://images.pexels.com/photos/547114/pexels-photo-547114.jpeg');
  background-size: cover;
  background-position: center;
  height: 400px; /* Adjust the height as needed */
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #fff;
}

.hero-banner h1 {
  font-size: 36px;
  margin-bottom: 20px;
}

.hero-banner p {
  font-size: 18px;
  margin-bottom: 30px;
}

.btn {
  padding: 10px 20px;
  background-color: #ff0000;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #cc0000;
}
</style>

<style>
  .email{
    text-align: center;
    padding-top: 40px;
    font-size: 25px;
  }
</style>



<?php
 get_footer();
?>

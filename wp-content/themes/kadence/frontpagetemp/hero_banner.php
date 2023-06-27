<?php
$title = get_sub_field('title');
$blurb = get_sub_field('blurb');
$button = get_sub_field('button');
$email = get_field('email');
$number = get_field('number');
$password = get_field('password');
$range = get_field('range');
$color = get_field('choose_color');
$flavours = get_field('choose_flavours');

?>

<div class="hero-banner" style="background-image : https://images.pexels.com/photos/547114/pexels-photo-547114.jpeg">
  <h1>
    <?php echo $title ?>
  </h1>
  <p>
    <?php echo $blurb ?>
  </p>


  <?php if ($button) { ?>
    <a href="<?php echo $button['link']; ?>" class="<?php echo $button['class']; ?>"> <?php echo $button['lable']; ?>
    </a>
  <?php } ?>


</div>

<div class="email">
  Email us at:   <a href="<?php echo esc_url('mailto:' . antispambot($email)); ?>"><?php echo (antispambot($email)); ?></a><br/>

  Number Field:   <a href="<?php echo esc_url('tel:' . antispambot($number)); ?>"><?php echo (antispambot($number)); ?></a><br/>

  Password: <?php echo $password ?><input type ="password"><br/>

  Range input field: <?php echo $range ?><br/>

  Choose Color(button group): <?php echo $color ?><br/>

  Choose Flavour(checkbox): <?php echo implode(' ',$flavours) ?><br/>



</div>





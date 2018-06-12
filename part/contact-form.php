<section class="form" id="contact">
  <img src="<?php the_field('contact_bg'); ?>" alt="" class="form__bg">

  <div class="container">

    <div class="wrapper" id="formTitleWrapper">
      <h2 class="form__title"><?php the_field('contact_title'); ?></h2>
      <p class="form__capital"><?php the_field('contact_capital'); ?></p>
    </div>

    <form class="form__content">
         <input class="form__content__item form__content__item__name" type="text" id="fname" name="name" placeholder="Name">
         <input class="form__content__item form__content__item__email" type="email" id="femail" name="email" placeholder="Email">
         <input class="form__content__item form__content__item__phone" type="tel" id="fphone" name="phone" placeholder="Phone">
         <textarea class="form__content__item form__content__item__message" id="subject" name="subject" placeholder="Message"></textarea>

         <input class="form__content__btn" type="submit" value="Submit">
       </form>
  </div>
</section>

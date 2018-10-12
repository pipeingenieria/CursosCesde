

  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="<?php echo base_url();?>/assets/img/foto1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="<?php echo base_url();?>/assets/img/foto2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="<?php echo base_url();?>/assets/img/foto3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="<?php echo base_url();?>/assets/img/foto4.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="<?php echo base_url();?>/assets/img/foto5.jpg"></a>
  </div>
          
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input value="I am not editable" id="disabled" type="date" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>  
    </form>
  </div>
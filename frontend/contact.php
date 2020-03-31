<?php include('header.php');?>
<div class="clearfix"></div>
<div class="form-back">
  <div class="container ">
  <div class="col-md-12 col-sm-12 col-lg-12   contact-border">
<div class="contact-margin">  
  <h2><span class=" txt_top contct">Contact us</span></h2>
  <form action="">
  <div class="name">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" placeholder="John"/>
                            <label for="name">Last Name</label>
                            <input type="text" class="form-control" placeholder="Doe"/>
							
                        </div>
                        <div class="email">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" placeholder="example@example.com">
                        </div>
                        <div class="subject">
                            <label for="">Subject</label>
                            <input type="phone" class="form-control" placeholder="Subject">
                        </div>
                        <div class="Your Comment">
                            <label for="">Comment</label>
                            <textarea class="form-control" placeholder="Your message" style="height:200px"></textarea>
                        </div>
                  <div class="btnsubmit" style="margin: 25px;">
                    <button type="button" class="btn btn-lg  px-5" onclick="submitForm();">Submit</button>
                  </div>
  </form>
  </div>
</div>
</div>
</div>
<div class="clearfix"></div>		

<?php include('footer.php');?>
<div class="col-md-12 col-xs-12" style="">
  <video autoplay muted loop id="myVideo" class="submit-video">
  <source src="<?=THEME?>/images/beemine.mp4" type="video/mp4">
  </video>
</div>
<div class="submit-content" style="">
<section id="contact1">

      <div class="contact-section">
      <div class="container" style="width: 100%;">
        <div class="col-xs-12 text-center mb-2">
          <h1>Confessions</h1>
        </div>
        <form  method="post" action="<?=CTRL?>Confess/new_confess">
          <div class="col-xs-6 form-line">
              <div class="form-group form-group1">
                <label for="exampleInputUsername" class="submit-label">Username</label>
                <input type="text" class="form-control form-control1" id="" name="username" placeholder="Name/Sudo-Name/UserName (Max-lenght: 20)" maxlength="20" required="">
              </div>
              <div class="form-group form-group1">
                <label for="exampleInputEmail" class="submit-label">Confession For Year</label>
                <!-- <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id"> -->
                 <select class="form-control form-control1" name="year">
                    <option value="1">&#8544; Year</option>
                    <option value="2">&#8545; Year</option>
                    <option value="3">&#8546; Year</option>
                    <option value="4">&#8547; Year</option>
                    <option value="5">&#8548; Year</option>
                    <option value="6">M.Tech/MBA</option>
                    <option value="7">Other</option>
                 </select> 
              </div> 

              <div class="form-group form-group1">
                <label for="telephone" class="submit-label">What Are You Feeling???</label>
                <select class="form-control form-control1" name="feel">
                    <option value="1">Love</option>
                    <option value="2">Hate</option>
                    <option value="3">Threats</option>
                    <option value="4">Gossip</option>
                    <option value="5">Fact</option>
                    <option value="6">Bewafai</option>
                    <option value="7">Clubs/AASF</option>
                 </select> 
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group form-group1">
                <label for ="description" class="submit-label"> Confessions</label>
                <textarea  class="form-control form-control1" id="description" placeholder="All your Secrets are safe here(Max-Length: 300)" maxlength="300" name="conn"></textarea>
              </div>
              <div>

                <button type="submit" name="submit" value="submit" class="btn btn-default submit1"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>
</div>

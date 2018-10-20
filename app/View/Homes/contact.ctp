<style type="text/css">
  
</style>


<div class="header2">
    <h1 class="pagestopimages">Contact Us</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="post">
                <div class="row">
                    <?php if($myvar = $this->Session->flash()){ ?>
                    <div class="response-msg success ui-corner-all" id="sucsssage">
                    <?php echo $myvar;?>
                    </div>
                    <?php } ?>
                    <div class="col-md-6">
                      <?php if($this->Session->check('User')){?>
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="data[Contact][name]" placeholder="Enter Name" value="<?php echo $uinfo['User']['name']; ?>" required="required" />
                        </div>
                        <div class="form-group">
                          <label for="email">Email Address</label>
                          <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" id="email" name="data[Contact][email]" placeholder="Enter Your Email" value="<?php echo $uinfo['User']['email']; ?>" required="required" />
                          </div>
                        </div>
                        <?php } else{ ?>
                          <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="data[Contact][name]" placeholder="Enter Name" required="required" />
                        </div>
                        <div class="form-group">
                          <label for="email">Email Address</label>
                          <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" name="data[Contact][email]" id="email" placeholder="Enter Your Email" required="required" />
                          </div>
                        </div>
                        <?php }?>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                              <select id="subject" name="data[Contact][subject]" class="form-control" required="required">
                                <option  value="na" selected="">Choose One:</option>
                                <option  value="service">General Customer Service</option>
                                <option  value="suggestions">Suggestions</option>
                                <option  value="product">Product Support</option>
                                <option  value="other">Other...</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="data[Contact][message]" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right buttoncolor" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Garamhaandi.com</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
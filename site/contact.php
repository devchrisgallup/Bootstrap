<?php include("./inc/nav.php"); ?>
<div class="container">
    <div class="darkbackground">
        <h1>Contact</h1>
        <p>Let Creative Websites bring your online presence into existence.  
        I can help create a user experience that will bring value to you and your company.  
        If you currently have a site or looking to start from scratch Creative Websites can provide you with service.</p>
    <form method="POST" action="contactengine.php" class="form-horizontal">
        <div class="form-group">
            <label for="FirstName" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="FirstName"  placeholder="First Name" name="FirstName" required>
            </div>
        </div>

        <div class="form-group">
            <label for="LastName" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="LastName"  placeholder="Last Name" name="LastName" required>
            </div>
        </div>

        <div class="form-group">
            <label for="Telephone" class="col-sm-2 control-label">Telephone</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="Telephone"  placeholder="Telephone" name="Telephone" required>
            </div>
        </div>

        <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
            </div>
        </div>

        <input type="hidden" name="City">

        <div class="form-group">
            <label for="Comments" class="col-sm-2 control-label">Comments</label>
            <div class="col-sm-10">
            <textarea rows="4" id="Comments" name="Comments" placeholder="What's on your mind?"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
</div>
<?php include("./inc/footer.php"); ?>
<div class="profile-env">
    <header class="row">
        <div class="col-sm-2">
            <a href="#" title="Click to Call" onclick="makeCall('<?php echo $user->username; ?>')" class="profile-picture"> <img src="<?php echo base_url(); ?>assets/images/default-profile.jpg" class="img-responsive img-circle" /> </a>
        </div>
        <div class="col-sm-7">
            <ul class="profile-info-sections">
                <li>
                    <div class="profile-name"> <strong> <a href="#"><?php echo $user->firstname.' '.$user->lastname; ?></a> <a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a> </strong> <span><a href="#"><?php echo $user->job_title; ?> at <a href="#"><?php echo $user->job_place; ?></a></a></span> </div>
                </li>
                
            </ul>
        </div>
        <div class="col-sm-3">
            <div class="profile-buttons">
                <a href="#" class="btn btn-default disabled"> <i class="entypo-user-add"></i> Follow
                </a>
                <a href="<?php echo base_url(); ?>user/review/<?php echo $user->id; ?>" class="btn btn-default"> <i class="entypo-mic"></i> Call</a>
            </div>
        </div>
    </header>
    <section class="profile-info-tabs">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-10">
                <ul class="user-details">
                    <li>
                        <a href="#"> <i class="entypo-location"></i> Nairobi, Kenya
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="entypo-suitcase"></i> Works as <span><?php echo $user->job_title; ?></span> </a>
                    </li>
                    <li>
                        <a href="#"> <i class="entypo-clock"></i> Rate: KES. 2,000.00
                        </a>
                    </li>
                </ul>
                <!-- tabs for the profile links -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#profile-info">Profile</a>
                    </li>
                    <li><a class="btn" href="#biography">Bio</a>
                    </li>
                    <!--<li><a href="#profile-edit">Edit Profile</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </section>
    <section class="profile-feed">
        <!-- profile post form -->
        <form class="profile-post-form" method="post">
            <textarea class="form-control autogrow" placeholder="Send <?php echo $user->firstname;?> a message?"></textarea>
            <div class="form-options">
                <div class="post-type">
                    <label for="upload">
 <i class="entypo-camera"></i> 
 <input name="photo" type="file" id="upload">
    </label>
                        <label for="upload2">
 <i class="entypo-attach"></i>
 <input name="photo" type="file" id="upload2" >
    </label>
                   
 
                    <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check-in"> <i class="entypo-location"></i> </a>
                </div>
                <div class="post-submit">
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        
              
   
            
        </form>
       
    </section>
</div>
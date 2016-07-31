<?php
    if ($loggedUserInfo->level == 1 ) { ?>
        <ol class="breadcrumb bc-3">
            <li class="active"> <a href="<?php echo base_url(); ?>"><i class="entypo-home"></i>Admin Panel</a> </li>
        </ol>

        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i>
                    </div>
                    <div class="num" data-start="0" data-end="<?php echo $userCount; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <h3>Registered users</h3>
                    <p>Total user count.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-chart-bar"></i>
                    </div>
                    <div class="num" data-start="0" data-end="<?php echo $doctorCount; ?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
                    <h3>Doctors</h3>
                    <p>Our active doctors.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-rss"></i>
                    </div>
                    <div class="num" data-start="0" data-end="<?php echo $patientCount; ?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>
                    <h3>Patients</h3>
                    <p>Our active patients.</p>
                </div>
            </div>
            <div class="clear visible-xs"></div>
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-mail"></i>
                    </div>
                    <div class="num" data-start="0" data-end="<?php echo $messageCount; ?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
                    <h3>New Messages</h3>
                    <p>Messages exchanged in the system.</p>
                </div>
            </div>
        </div>
        <br />
    <?php } else { ?>
        <ol class="breadcrumb bc-3">
            <li class="active"> <a href="<?php echo base_url(); ?>"><i class="entypo-home"></i>Home</a> </li>
        </ol>
    <?php }
?>


<?php
	if ($loggedUserInfo->level == 2 ) {
		echo '<h2>Our Patients</h2>';
	} else if ($loggedUserInfo->level == 3 ) { 
		echo '<h2>Our Doctors</h2>';
	}
?>


<?php
    /*$messages = json_decode(json_encode($messages), True);
    /*echo '<pre>';
    print_r($messages);
    echo '</pre><hr/>';
    
    foreach ($messages as $key => $value) {
        $recepient[$value['m_recepient']][] = $value['m_text'];
    }    

    foreach ($recepient as $key => $value) {
        //echo implode(',', $value)." to: ".$key;
        //print_r($recepient);
        foreach ($value as $msg) { ?>
            <li> <span class="user"><?php echo $loggedUserInfo->firstname.' '.$loggedUserInfo->lastname; ?></span>
                <p><?php echo $msg; ?></p> <span class="time">09:00</span> 
            </li>
        <?php }
        ?>
        
        <?php
    }*/


    if ($loggedUserInfo->level == 1 ) {
        foreach ($adminList as $doctor) {
            if (!empty($doctor) && $doctor->username != $this->session->userdata('username')) {
                ?>
                <div class="member-entry">
                    <a href="<?php echo base_url(); ?>user/view/<?php echo $doctor->id; ?>" title="Click to Call" onclick="makeCall('<?php echo $doctor->username; ?>')" class="member-img"> <img src="<?php echo base_url(); ?>assets/images/default-profile.jpg" class="img-rounded" /> <i class="entypo-mic"></i> </a>
                    <div class="member-details">
                        <h4> <a href="<?php echo base_url(); ?>user/view/<?php echo $doctor->id; ?>"><?php echo $doctor->firstname.' '.$doctor->lastname; ?></a> </h4>
                        <div class="row info-list">
                            <div class="col-sm-12"> <i class="entypo-briefcase"></i> <?php echo $doctor->job_title; ?> at <a href="#"><?php echo $doctor->job_place; ?></a> </div>
                            <div class="clear"></div>
                            <div class="col-sm-4"> <i class="entypo-location"></i> <a href="#"><?php echo $doctor->address; ?></a> </div>
                            <div class="col-sm-4"> <i class="entypo-clock"></i> <a href="#">Today: 8 a.m - 10 a.m</a> </div>
                            <div class="col-sm-4"> <i class="entypo-phone"></i> <a href="#">Phone: <?php echo $doctor->phone; ?></a> </div>
                        </div>
                    </div>
                </div>
            <?php }
        }
    }   
?>

<?php
    foreach ($doctorList as $doctor) {
        if (!empty($doctor) && $doctor->username != $this->session->userdata('username')) {
            ?>
            <div class="member-entry">
                <a href="<?php echo base_url(); ?>user/view/<?php echo $doctor->id; ?>" title="Click to Call" onclick="makeCall('<?php echo $doctor->username; ?>')" class="member-img"> <img src="<?php echo base_url(); ?>assets/images/default-profile.jpg" class="img-rounded" /> <i class="entypo-mic"></i> </a>
                <div class="member-details">
                    <h4> <a href="<?php echo base_url(); ?>user/view/<?php echo $doctor->id; ?>"><?php echo $doctor->firstname.' '.$doctor->lastname; ?></a> </h4>
                    <div class="row info-list">
                        <div class="col-sm-12"> <i class="entypo-briefcase"></i> <?php echo $doctor->job_title; ?> at <a href="#"><?php echo $doctor->job_place; ?></a> </div>
                        <div class="clear"></div>
                        <div class="col-sm-4"> <i class="entypo-location"></i> <a href="#"><?php echo $doctor->address; ?></a> </div>
                        <div class="col-sm-4"> <i class="entypo-clock"></i> <a href="#">Today: 8 a.m - 10 a.m</a> </div>
                        <div class="col-sm-4"> <i class="entypo-phone"></i> <a href="#">Phone: <?php echo $doctor->phone; ?></a> </div>
                    </div>
                </div>
            </div>
        <?php }
    }
?>

<?php
    foreach ($patientList as $doctor) {
        if (!empty($doctor) && $doctor->username != $this->session->userdata('username')) {
            ?>
            <div class="member-entry">
                <a href="<?php echo base_url(); ?>user/view/<?php echo $doctor->id; ?>" title="Click to Call" onclick="makeCall('<?php echo $doctor->username; ?>')" class="member-img"> <img src="<?php echo base_url(); ?>assets/images/default-profile.jpg" class="img-rounded" /> <i class="entypo-mic"></i> </a>
                <div class="member-details">
                    <h4> <a href="<?php echo base_url(); ?>user/view/<?php echo $doctor->id; ?>"><?php echo $doctor->firstname.' '.$doctor->lastname; ?></a> </h4>
                    <div class="row info-list">
                        <div class="col-sm-12"> <i class="entypo-briefcase"></i> <?php echo $doctor->job_title; ?> at <a href="#"><?php echo $doctor->job_place; ?></a> </div>
                        <div class="clear"></div>
                        <div class="col-sm-4"> <i class="entypo-location"></i> <a href="#"><?php echo $doctor->address; ?></a> </div>
                        <div class="col-sm-4"> <i class="entypo-clock"></i> <a href="#">Today: 8 a.m - 10 a.m</a> </div>
                        <div class="col-sm-4"> <i class="entypo-phone"></i> <a href="#">Phone: <?php echo $doctor->phone; ?></a> </div>
                    </div>
                </div>
            </div>
        <?php }
    }
?>

<!--<table class="table table-bordered datatable" id="doctorTable">
    <thead>
        <tr>
            <th>Names</th>
            <th>Speciality</th>
            <th>Location</th>
            <th>Availability</th>
            <th>Qualification</th>
        </tr>
    </thead>
</table>-->



<!--<a onclick="$('#modal-1').modal('show');" class="btn btn-default">Call Robert</a>-->
<!-- $('#modal-1').modal('show'); -->
<!--<a onclick="makeCall('robert')" class="btn btn-default">Call Robert +</a>
<a onclick="makeCall('moses')" class="btn btn-default">Call Moses</a>-->

<div class = "bodyDiv">

	<div class="modal fade" id="modal-videocall">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Calling ...</h4> </div>
                <div class="modal-body videobox">
                    <div id="vid-box"></div>
                </div>
                <div class="modal-footer">
                	<!--<div id="inCall"> <!-- Buttons for in call features -->
						<!--<button id="end" onclick="end()">End</button> <button id="mute" onclick="mute()">Mute</button> <button id="pause" onclick="pause()">Pause</button>
					</div>-->
					
                    <button type="button" title="End Call" class="btn btn-default btn-endcall" onclick="endCall('call')" data-dismiss="modal"><i class="fa fa-phone"></i></button>
                    <button type="button" title="Mute Call" class="btn btn-default btn-mutecall" onclick="mute('call')"><i class="fa fa-volume-off"></i></button>
                    <button type="button" title="Pause Call" class="btn btn-default btn-pausecall" onclick="pause('call')"><i class="fa fa-pause"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
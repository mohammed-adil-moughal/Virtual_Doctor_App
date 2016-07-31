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

    <!-- Footer -->
<footer class="main">
    <div class="pull-right"> <a href="#"><strong>E-Daktari System</strong></a> </div>
    &copy;
    <?php echo date( "Y"); ?> <strong>E-Daktari</strong> is developed by <a href="#">Code Alpha</a> </footer>
</div>
<!-- TS14582430705158: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
<div id="chat" class="fixed" data-current-user="<?php echo $loggedUserInfo->firstname.' '.$loggedUserInfo->lastname; ?>" data-order-by-status="1" data-max-chat-history="25">
    <div class="chat-inner">
        <h2 class="chat-header"> <a href="#" class="chat-close"><i class="entypo-cancel"></i></a> <i class="entypo-users"></i>
Chat
<span class="badge badge-success is-hidden">0</span> </h2>
        <?php 
            if ($loggedUserInfo->level == 1 ) { ?>
            <div class="chat-group" id="group-1"> <strong>Admins</strong>
                <?php
                    foreach ($adminList as $admin) {
                        if ($this->session->userdata('username') != $admin->username)
                        echo '<a href="#" id="'.$admin->id.'" data-conversation-history="#chat'.$admin->id.'"><span class="user-status is-offline"></span> <em>'.$admin->firstname.' '.$admin->lastname.'</em></a>';
                    }
                ?>
            </div>
            <?php }
        ?>
        
        <div class="chat-group" id="group-2"> <strong>Doctors</strong>
            <?php
                foreach ($doctorList as $doctor) {
                    if ($this->session->userdata('username') != $doctor->username)
                    echo '<a href="#" id="'.$doctor->id.'" data-conversation-history="#chat'.$doctor->id.'"><span class="user-status is-offline"></span> <em>'.$doctor->firstname.' '.$doctor->lastname.'</em></a>';
                }
            ?>
        </div>

        <div class="chat-group" id="group-2"> <strong>Patients</strong>
            <?php
                foreach ($patientList as $patient) {
                    if ($this->session->userdata('username') != $patient->username)
                    echo '<a href="#" id="'.$patient->id.'" data-conversation-history="#chat'.$patient->id.'"><span class="user-status is-offline"></span> <em>'.$patient->firstname.' '.$patient->lastname.'</em></a>';
                }
            ?>
        </div>
    </div>
    <!-- conversation template -->
    <div class="chat-conversation">
        <div class="conversation-header"> <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a> <span class="user-status"></span> <span class="display-name"></span> <small></small> </div>
        <ul class="conversation-body"> </ul>
        <div class="chat-textarea">
            <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
        </div>
    </div>
</div>

<?php
    $messages = json_decode(json_encode($messages), True);
    /*echo '<pre>';
    print_r($messages);
    echo '</pre><hr/>';*/
    
    foreach ($messages as $key => $value) {
        $recepient[$value['m_recepient']][] = $value['m_text'];
    }    

    foreach ($recepient as $key => $value) {
        //echo implode(',', $value)." to: ".$key;
        //print_r($recepient);
        ?>
        <!-- Chat Histories -->
        <ul class="chat-history" id="chat<?php echo $key; ?>">
            <li> <span class="user"><?php echo $loggedUserInfo->firstname.' '.$loggedUserInfo->lastname; ?></span>
                <p><?php echo implode(',', $value); ?></p> <span class="time">09:00</span> 
            </li>
        </ul>
        <?php
    }
?>
<!-- Chat Histories -->





<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Basic Modal</h4> </div>
            <div class="modal-body">
                Hello I am a Modal!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Imported styles on this page -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/zurb-responsive-tables/responsive-tables.css" id="style-resource-1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/datatables.css" id="style-resource-1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css" id="style-resource-2">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css" id="style-resource-3">
<script src="<?php echo base_url(); ?>assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>

<script src="http://demo.neontheme.com/assets/js/joinable.js" id="script-resource-4"></script>
<script src="<?php echo base_url(); ?>assets/js/resizeable.js" id="script-resource-5"></script>
<script src="<?php echo base_url(); ?>assets/js/neon-api.js" id="script-resource-6"></script>
<script src="<?php echo base_url(); ?>assets/js/cookies.min.js" id="script-resource-7"></script>
<script src="http://demo.neontheme.com/assets/js/toastr.js" id="script-resource-15"></script>
<script src="<?php echo base_url(); ?>assets/js/neon-chat.js" id="script-resource-9"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/datatables.js" id="script-resource-10"></script>
<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" id="script-resource-11"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" id="script-resource-3"></script>

<script src="http://demo.neontheme.com/assets/js/neon-custom.js" id="script-resource-12"></script>

<script src="<?php echo base_url(); ?>assets/js/neon-demo.js" id="script-resource-13"></script>
<script src="<?php echo base_url(); ?>assets/js/neon-skins.js" id="script-resource-14"></script>


<!--<script src="<?php echo base_url(); ?>assets/js/webrtc/jquery.min.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/webrtc/pubnub.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/webrtc/webrtc.js"></script>
<script src="<?php echo base_url(); ?>assets/js/webrtc/rtc-controller.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    // Sample Toastr Notification
    setTimeout(function() {
        var opts = {
            "closeButton": true,
            "debug": false,
            "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
            "toastClass": "black",
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.success("This is a demo website. Kindly note you are not expected to pay for any transaction. Enjoy it!", "Demo Website", opts);
    }, 3000);
});
</script>

<script>
/*$(document).ready(function() {

          'use strict';

          //$('#incidentTable').DataTable();

          var doctorTable = $('#doctorTable').DataTable({
            responsive: true,
            'fnDrawCallback': function(oSettings) {
              $('#doctorTable_paginate ul').addClass('pagination-active-success');
            },
            'ajax': 'ajax/objects.txt',
            'columns': [
            { 'data': 'name' },
            { 'data': 'position' },
            { 'data': 'office' },
            { 'data': 'start_date'},
            { 'data': 'brief' }
            ],
            'order': [[1, 'desc']]
          });

          // Select2
          $('select').select2({ minimumResultsForSearch: Infinity });

        });*/
</script>

<script src="<?php echo base_url(); ?>assets/js/phone.js" id="script-resource-15"></script>


<script type="text/javascript">
var video_out = document.getElementById("vid-box");

function login(form) {
    var phone = window.phone = PHONE({
        number: "<?php echo $_SESSION['username'];?>", // : form.username.value || "Anonymous", // listen on username line else Anonymous number        
        publish_key: 'pub-c-561a7378-fa06-4c50-a331-5c0056d0163c', // Your Pub Key
        subscribe_key: 'sub-c-17b7db8a-3915-11e4-9868-02ee2ddab7fe', // Your Sub Key
    });

    phone.ready(function() {
        //form.username.style.background="#55ff5b"; form.login_submit.hidden="true";
        $('.profile-info a').css('color', '#19c31f');
    });

    phone.receive(function(session) {
        session.connected(function(session) {
            video_out.appendChild(session.video);
            showModal();
        });
        session.ended(function(session) {
            video_out.innerHTML = '';
            hideModal();
        });
    });
    return false;
}

function makeCall(form) {
    if (!window.phone) login(); //alert("Login First!");
    //else phone.dial(form.number.value);
    else {
        phone.dial(form);
        $('#modal-videocall').modal('show');
    }
    return false;
}

function endCall() {
    //if (!window.phone) login(); //alert("Login First!");
    //phone.hangup(form.number.value);
    phone.hangup();
    return false;
}

function showModal() {
    //$("#showModal").click();
    $('#modal-videocall').modal('show');
}

function hideModal() {
    //$("#showModal").click();
    $('#modal-videocall').modal('hide');
}

function errWrap(fxn, form) {
    try {
        return fxn(form);
    } catch (err) {
        console.log("WebRTC is currently only supported by Chrome, Opera, and Firefox");
        return false;
    }
}

//login();
</script>
<!--<script src="<?php echo base_url(); ?>assets/js/webrtc/modalEffects.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/webrtc/classie.js"></script>
</body>

</html>
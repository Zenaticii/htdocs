<?php
echo '
	<div id="xORfoXWDNCAj" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	            	<img src="./img/windows/svg/049-ad.svg" alt="" style="height:40px;" />
	                <h1 style="color:black;">AD Blocker active</h1>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="reloadPg()">
	                </button>
	            </div>
	            <div class="modal-body" style="color:black;">
	            	<h4>There are 2 ways to use our site:</h4>
	                <p>Support this project by ADs and disable your AD Blocker.</p>
	                <div class="kt-divider">
                        <span></span>
                        <span>or</span>
                        <span></span>
                    </div>
	                <p>Become a partner, for this you can go to Services and see what we can offer to you.</p>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" onclick="reloadPg()">I desabled AD Blocker</button>
	                <button type="button" class="btn btn-primary" onclick="goServices()">Services</button>
	            </div>
	        </div>
	    </div>
	</div>
';
?>

	<script src="./ads.js" type="text/javascript"></script>
	<script type="text/javascript">


	if(!document.getElementById('RsGUTvPBMVrZ')){
	  $('#xORfoXWDNCAj').modal('show')
	}

	$('#xORfoXWDNCAj').on('hidden.bs.modal', function (e) {
  		if(!document.getElementById('RsGUTvPBMVrZ')){
	  	$('#xORfoXWDNCAj').modal('show')
	}
	})
	
	function reloadPg(){
		location.reload();
	}

	function goServices() {
	  	window.location.assign(window.location.protocol + "//" +window.location.hostname + "/services")
	}
	</script>
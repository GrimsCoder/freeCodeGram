@extends('layouts.app')


@section('content')
<div class="grid-container">
    <div class="grid-x">
    <div class="cell small-12">
    <div class="grid-x grid-margin-x align-center-middle">

    <div class="cell small-12 medium-10">
   
       <h3 class="text-light text-center">Policy &amp; Usage</h3>
       <p class="lead">
       Registered Torah Club Students have access to the monthly lesson materials through their local Torah Club for use in an active club only. It is the responsibility of club members to protect from misuse.
       </p>
       <div class="lead">
       <ul>
       <li>Lesson Workbooks, and Audiobooks are copyrighted material.</li>
       <li>International students, and students with temporary remote access may print one copy of the Digital editions for personal use only in the context of an active club.</li>
       </ul>
       </div>
       <p>© 2020  First Fruits of Zion. All rights reserved. Using, sharing, or archiving this material in any form outside a registered and active Torah Club is strictly prohibited.</p>        
    
    
                             
    
    
    
       <p class="text-center hide"><small><a class="button warning margin-0" data-open="special_notice" aria-controls="special_notice" aria-haspopup="true" tabindex="0"><i class="fas fa-info-circle icon-left" aria-hidden="true"></i>Updated COVID-19 Notice</a></small></p>

    </div>
    
    </div>
    
    
    </div>
    </div>
  </div>

  <div class="container"><div id="adobe-dc-view" style="height: 360px; width: 500px;"></div>
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript">
	document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
		var adobeDCView = new AdobeDC.View({clientId: "<YOUR_CLIENT_ID>", divId: "adobe-dc-view"});
		adobeDCView.previewFile({
			content:{location: {url: "https://documentcloud.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf"}},
			metaData:{fileName: "Bodea Brochure.pdf"}
		}, {embedMode: "SIZED_CONTAINER"});
	});
</script></div>





@endsection


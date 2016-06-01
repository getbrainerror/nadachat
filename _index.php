<?php
	$NONCE=base64_encode(openssl_random_pseudo_bytes(16));
	//header("Strict-Transport-Security: max-age=31536000; includeSubDomains"); // this is persisted by useragents, so it can't be used...
	header("Content-Security-Policy-Report-Only: default-src 'self'; img-src 'self' data:; style-src 'self' fonts.googleapis.com cdnjs.cloudflare.com; font-src cdnjs.cloudflare.com fonts.gstatic.com; script-src 'self' 'nonce-" . $NONCE .  "'; child-src data: blob:");
?><!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset="utf-8">
    <title>nadachat</title>

    <meta name=description content="secure chat, simplified">
    <meta name=author content=dandavis>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name=viewport content="width=360, initial-scale=1">
	
    <link rel=icon href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAD10lEQVR42u2dwWoTQRjHBwS9VKqIpx5ET57MqTfBR+gj5BHyCHmEHG1NYSGlhRxCCgqCggVRUBDiG+QR8ghxv5nJEks3bZIm2Z3/7wffpdBs5j//nW/m25mNcwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA3cupeuA/unY8T1/bx3nXyuFojOsVnzT7brgM75Ng18g5pxg62Thrnf5u6bh7nIR5+DLH32U1ffn+0ctj/zz5r9tn+OnY9u65dPxik6b8X3DMnbt+LG+7kkRc+y6MfOuXg24Pp6x9707d/D7Yedl27vjdHP36vYIxRHDma/vvDSnd4u+jwXuhsuyN30dHLhn1Pb4renCGsPYwQC+90G0KHxR0+DHd3HTr8trB2WHuKEcLaae3lTndHeWT5HTKxu8Xy7ZtfT5Lo9LKw9lk73ZkfGSa+/aaD1Ez92LV847MwtKfe6YvM4FNFVpihle4Kw5ZPwe1+wpTK8H6vaaJfpIjM65VMx9tSKeb1wz/P6fAFYfoU8wXTrbZGsLxms98s5HY6fnkj+LlCFlcRtZkn2FKHjt+kERpVntz5HE/Hb9AIszlC5SaLNosd0PFbmSMM5lYNVak01qVKl0qY3r7SWJW0QKfsJnwdoeuN0MEAomEFpbnKYgMDiMazL3GSuIvnDHRANcIeUceUMNrqSgHxqxXucsspAdHFUwKCVzQl/Hw8zVPBZOPPFBC74iNBd8MjAULXZnLYwQDKZeSz+CwBAwiboLcBEyCu+EiAsOIjAaKKjwQIWvORYN3VAWLW3ATr1gkQMpE6warPDhAxkYqhPUBaZZsZAiayw+hTfJSMAYQfJff9fKCNAZQnheEk8xEGEI1XtuvY3oBy1/kAoiWYCoZLFIkQLOFUcJfNJAiW8LF1SwUYQDgVnPtU0MIAygdPbisQIZRAgWjRhBCRRB4YlR02QSSRg6hlowACiYwCZXMBBBJZEQxKVgSII1YixgDCo0DvhuogwsgdOs0wgHphCAOIbxqZ3y+AKGJp4Ou1NIAoWtH4/fT/NIAooquB2TZyBBEvCiGI+HIQQWSXg2MMoJwGwlvI9jGAqgEuYlkYMUQNcBkngoghvFXMjpEhhvC2cfshTMSQ3h9whQFUXyxhr6K14+SIIb4URAgMgBgYgMAABAYgMACBAQgMQKjsDRxjAErBiIEBCN3zAYjBfgAEUd0abr8zgBjsCUQQ1RoA28JFN4PYr4xwLkD+ZNAQA3A2EANwOhhBeD8AIVcBHGIA1eG/f+2HJhFF9FQwBhBf/mEAhn8MoDz7j/wDZcWpOgSN9lIAAAAASUVORK5CYII=">
	
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/cyborg/bootstrap.min.css" rel="stylesheet">
    <!-- Application CSS -->
	<link href="/css/main.css" rel=stylesheet>
	
</head>
<body data-mode=0 id=body class=loading>
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class=container>
	  <div class=row>
	  
		  <div class=col-xs-4>
				 <a class=navbar-brand href=#><b>nada</b>chat</a>
		  </div>
		  
		  <div class="col-xs-3 col-xs-offset-2">
			<a id=lnkBeep href=# class=navbar-brand>			 
				<b>beep: <span id=spnBeep>off</b>
			</a>
		  </div>
		  
		  <div class=col-xs-3>
				<a href=# class="pull-right text-danger navbar-brand" id=btnLeave>exit</a>
		  </div>
	  
		</div> <!-- /row -->
      </div>  <!-- / container -->
    </nav>
    <div class=container>
      <main id=main class=row>
		   
		   <!-- status panels: -->
		   <div class=col-xs-12 id=box>
				
			<div class="panel panel-default setup" data-rs=0> 
				<div class=panel-heading> 
					<h3 class=panel-title> 
						Building Secure Keys
					</h3> 
				</div> 
				<div class=panel-body>
				<div class=progress>
					<div class="progress-bar progress-bar-striped progress-bar-warning active" role=progressbar></div>
				</div> <br>
					Generating Keys, please stand by.
			  </div> 
			</div>
				
			<div class="panel panel-default  setup" data-rs=1> 
				<div class=panel-heading> 
					<h3 class=panel-title>
						Initiate a secure connection
					</h3> 
				</div> 
				<div class="panel-body">
					Send someone <a href id=pageurlLink disabled> this URL </a> to chat :  <br><br>
					<input id=pageurl size=50 ><br><br>
					When they arrive on the link, you'll be able to chat.
					<hr>
					<div class=progress>
						<div class="progress-bar progress-bar-striped active" role=progressbar></div>
					</div> <br>
					Waiting for other person to join...
			  </div> 
			</div>		
						
			<div class="panel panel-default setup" data-rs=2> 
				<div class=panel-heading> 
					<h3 class=panel-title>
						Securing Connection
					</h3> 
				</div> 
				<div class=panel-body>
				<progress></progress> <br>
					Confirming and Encrypting...
			  </div> 
			</div>
						
			<div class="panel panel-primary setup" data-rs=5> 
				<div class=panel-heading> 
					<h3 class=panel-title> 
						Connection Secure
					</h3> 
				</div> 
				<div class=panel-body>
					ready to chat
			  </div> 
			</div>
							
			<div class="panel panel-primary setup" data-rs=6> 
				<div class=panel-heading> 
					<h3 class=panel-title> 
						Connection Idle
					</h3> 
				</div> 
				<div class=panel-body>
					other person has left the chat
			  </div> 
			</div>
		
			<div class="panel panel-danger setup" data-rs=7> 
				<div class=panel-heading> 
					<h3 class=panel-title> 
						Authentication Error
					</h3> 
				</div> 
				<div class=panel-body>
					You have attempted to join a chat in-progress, which not possible.
			  </div> 
			</div>
		
			<div class="panel panel-danger setup" data-rs=8> 
				<div class=panel-heading> 
					<h3 class=panel-title> 
						Network Error
					</h3> 
				</div> 
				<div class=panel-body>
					Your network connection was dropped or altered, closing secure session.
			  </div> 
			</div>	
		
			<!-- message container -->
			<ul id=ulList></ul>	   
		
		</div> <!-- // #box -->
	</main>

	<footer id=footer class=row>
		<span class=col-xs-10>
			<textarea id=taMsg rows=5></textarea>
		</span>
		<span class=col-xs-2>
			<button class="btn btn-default" id=btnSend disabled >Send</button>
		</span>	  
	</footer>
	  
    </div><!-- /.container -->

	<!-- add some entropy from php's openssl_random_pseudo_bytes() to compliment client-produce randomness -->
	<script nonce="<?php echo $NONCE; ?>">
		var STAMP= atob("<?php echo base64_encode(openssl_random_pseudo_bytes(48));?>") // seed from php
			.split("")
			.map(function(a){return a.charCodeAt(0).toString(10).slice(-2);}) // convert bytes to digits
			.join("");
			document.currentScript.remove(); // abundance of caution against XSS (STAMP is mixed later)
	</script>	

	<!-- marked is used to make links clickable and allow full markdown formatting in messages w/o XSS risks -->
	<script src=/js/marked.js integrity="sha256-#marked#"
		data-orig=https://github.com/chjj/marked></script>

	<!-- sha3 is used to derive keys from keys and to uniform-ize randomness -->
	<script src=/js/sha3.js intregrity="sha256-#sha3#" 
		data-orig=https://github.com/emn178/js-sha3/></script>

	<!-- rndme is used to gather randomness from motion (on mobile devices) and timing data -->
	<script src=/js/rndme.js integrity="sha256-#rndme#" 
		data-orig=https://github.com/rndme/rndme/></script>

	<!-- jquery is used to connect the view to the logic and handle interaction event -->
	<script src=/js/jquery.js integrity="sha256-#jquery#"
		data-orig=https://code.jquery.com/></script>

	<!-- main contains all the application-specific logic, with the exception of the crypto operations, which are done by webworkers -->
	<script src=/js/main.js></script>
	
  </body>
</html>
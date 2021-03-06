<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/template.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div id="loading-overlay"></div>
		<img id="loading-gif" src="images/loading.gif" alt="Loading..." title="Loading..." />

        <header class="clearfix">
			<a class="title" href="http://leafblower.rdrkt.com" target="_blank"><img src="images/leafblower-logo.png" alt="Leafblower" /></a>
            <nav>
				<a href="#user-manager" title="User manager" class="user-manager">
					User manager
				</a>
				<a href="#add-profile" title="Add profile" class="add-profile">
					Add profile
				</a>
				<a href="#list-profiles" title="List profile" class="list-profiles">
					List profile
				</a>
			</nav>
        </header>

        <main class="clearfix">           
			
			<aside>
				<ul id="block-menu">
				</ul>
			</aside>
			
			<section id="add-profile">
				<h2>Fill in the form to create a profile</h2>
				<form name="frm-add-profile" class="profile-sender">
					<div class="field-wrapper clearfix">
						<label for="txtNewProfileName">Profile Name</label>
						<input type="text" value="" id="txtNewProfileName" name="txtNewProfileName" class="textbox profile-name" />
					</div>
					<div class="field-wrapper clearfix">
						<label for="txtNewProfileDescription">Profile Description</label>
						<textarea id="txtNewProfileDescription" name="txtNewProfileDescription" class="profile-description"></textarea>
					</div>
					<div class="profile-block-list">
                        <input type="hidden" value="" class="blockJson" name="newBlockJson" />
					</div>
                    <input type="reset" name="button-reset-new-profile" class="button-reset-profile" value="Reset fields" />
                    <input type="submit" name="button-save-profile" class="button-save-profile" value="Create new profile" />
				</form>
			</section>
			
			<section id="list-profiles" class="active">
                <h2>Modify and delete existing profiles</h2>
				<ul class="profile-list"></ul>
			</section>

			<section id="user-manager">
				<h2>Manage users</h2>
				<p>Coming soon...</p>
			</section>
						
        </main>

        <footer>
            <p class="powered">Leafblower by <a href="http://www.rdrkt.com" target="_blank" title="rdrkt">rdrkt.com</a></p>
        </footer>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>            window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

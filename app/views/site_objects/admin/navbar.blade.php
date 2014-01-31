<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
       
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <label class="navbar-brand">Hi,</label><a class="navbar-brand" href="{{ URL::Route('admin-profile') }}"> {{ Auth::user()->username }} !</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                	<div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 200px;">
                		<noscript>
                			<div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);">
                				<a href="http://localtimes.info/Asia/Philippines/Manila/" 
                				   style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);">
                				    <img src="http://localtimes.info/images/countries/ph.png"="" 
                				    	 border=0="" 
                				    	 style="border:0;margin:0;padding:0"=""> 
                				    Manila
                				</a>
                			</div>
                		</noscript>
                		<script type="text/javascript" 
                				src="http://localtimes.info/clock.php?continent=Asia&country=Philippines&city=Manila&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=200&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1014">
                		</script>
                	</div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear fa-lg"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::Route('admin-profile') }}"><i class="fa fa-user fa-fw"></i>  Profile</a></li>
                        <li><a href="{{ URL::Route('admin-account-settings') }}"><i class="fa fa-wrench fa-fw"></i>  Account Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::Route('admin-out') }}"><i class="fa fa-sign-out fa-fw"></i> Sign out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
   	</div>
    <!-- / Container -->
</nav>
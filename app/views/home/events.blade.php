<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/justified-nav.css') }}
        {{ HTML::style('assets/css/homepage.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
    </head>
    <body>
    	@include('site_objects.home.head')

      <br>
		@include('site_objects.home.tab-navi')        
        <br>
        
      
    <div class="col-lg-9">
            <div class="well">
              <form class="bs-example form-horizontal">
                <fieldset>
                  <h2><span class="label label-default">
                  	<i class="fa fa-th-large"></i>&nbsp;Upcoming Events</span></h2><hr>
                  	<div class="container">
<div class="col-md-10">
   

<div class="widget widget-nopad stacked">
						
				<div class="widget-header">
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<ul class="news-items">
						<li>
							
							<div class="news-item-detail">										
								<a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
								<p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div>
							
							<div class="news-item-date">
								<span class="news-item-day">08</span>
								<span class="news-item-month">Mar</span>
							</div>
						</li>
						<li>
							<div class="news-item-detail">										
								<a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
								<p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div>
							
							<div class="news-item-date">
								<span class="news-item-day">08</span>
								<span class="news-item-month">Mar</span>
							</div>
						</li>
						<li>
							<div class="news-item-detail">										
								<a href="javascript:;" class="news-item-title">Duis aute irure dolor in reprehenderit</a>
								<p class="news-item-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div>
							
							<div class="news-item-date">
								<span class="news-item-day">08</span>
								<span class="news-item-month">Mar</span>
							</div>
						</li>
					</ul>
					
				</div> <!-- /widget-content -->
			
			</div>
					
                 
              
                </fieldset>
            </div>
          </div>
        </div>

        @include('site_objects.home.sidebar')
        </div>
   		 <div class="footer">
        @include('site_objects.home.footer')
        </div>
  		

		{{ HTML::script('assets/js/admin-navigation.js') }}
        {{ HTML::script('assets/js/alumni-navigation.js') }}
        {{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
		{{ HTML::script('assets/js/holder.js') }}
    </body>
</html>
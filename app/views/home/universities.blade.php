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
                  	<i class="fa fa-th-large"></i>&nbsp;Universities</span></h2><hr>
                  	<div class="container">
<div class="col-md-10">
    <h1>This site is under maintenance,</h1>
    
    <div>
<span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span></div>         
     </div>
    <hr>
    <h1>Laravel Revolution has begun!</h1>
    <div>
        <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span></div>
    </div>     
    <hr>
</div>
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
<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
    </head>

    <body>
        @include('site_objects.admin.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('site_objects.admin.tabs')
                    @include('site_objects.admin.activity_logs')
                </div>
                <div class="col-md-9">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">
                            <i class="fa fa-pencil fa-fw" ></i> 
                            Create Message</a>
                        </li>
                        <li><a href="#tab2" data-toggle="tab">
                        <i class="fa fa-envelope fa-fw" ></i> Inbox
                        <span class="badge">5</span></a>
                        </li>
                        <li><a href="#tab3" data-toggle="tab">
                        <i class="fa fa-level-up fa-fw" ></i>
                        Sent</a></li>
                    </ul>

	                <div class="tab-content">
	                    <div class="tab-pane panel panel-default active" 
	                    id="tab1">
	                        <div class="panel-body">
	                            <form role="form">
	                                <div class="row">
	                                    <div class="form-group col-md-6">
	                                        <label for="recipients"><strong> 
	                                        To:</strong></label>
	                                        <div class="input-group">
	                                            <input type="text" 
	                                            class="form-control" 
	                                            id="recipients" 
	                                            placeholder="...">
	                                            <span class="input-group-btn">
	                                            <button class="btn btn-info" 
	                                            type="button">
	                                            <i class="fa fa-plus fa-fw">
	                                            </i></button>
	                                            </span>
	                                        </div>
	                                        <!-- /input-group -->
	                                    </div>
	                                    <div class="col-md-7">sasada</div>
	                                </div>
	                                <div class="row">
	                                    <div class="form-group col-md-6">
	                                        <label for="subject"><strong> 
	                                        Subject</strong></label>
	                                        <input type="text" name="subject" 
	                                        class="form-control" id="subject" 
	                                        placeholder="...">
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="form-group col-md-6">
	                                        <label><strong> Message</strong>
	                                        </label>
	                                        <textarea class="form-control" 
	                                        rows="3"></textarea>
	                                        <label><strong><span class="badge">
	                                        160</span> characters left</strong>
	                                        </label>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="form-group col-md-5">
	                                        <button type="submit" 
	                                        class="btn btn-primary">
	                                        <i class="fa fa-envelope fa-fw">
	                                        </i> Send</button>
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
	                    <div class="tab-pane panel panel-default" id="tab2">
	                        <div class="panel-body">
	                            <div class="panel-group" id="accordion">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a data-toggle="collapse" 
	                                            data-parent="#accordion" 
	                                            href="#collapseOne">
	                                            UmakAdmin - this is the subject
	                                            </a>
	                                        </h4>
	                                    </div>
	                                    <div id="collapseOne" 
	                                    class="panel-collapse collapse in">
	                                        <div class="panel-body">
	                                            <small>11/21/13 11:21:34</small>
	                                            <br>
	                                            Anim pariatur cliche 
	                                            reprehenderit, enim eiusmod 
	                                            high life accusamus terry 
	                                            richardson ad squid. 3 wolf
	                                             moon officia aute, non 
	                                             cupidatat skateboard dolor 
	                                             brunch. Food truck quinoa 
	                                             nesciunt laborum eiusmod. 
	                                             Brunch 3 wolf moon tempor, 
	                                             sunt aliqua put a bird on it 
	                                             squid single-origin coffee 
	                                             nulla assumenda shoreditch et.
	                                              Nihil anim keffiyeh helvetica,
	                                               craft beer labore wes 
	                                               anderson cred nesciunt 
	                                               sapiente ea proident. Ad 
	                                               vegan excepteur butcher 
	                                               vice lomo. Leggings occaecat 
	                                               craft beer farm-to-table, 
	                                               raw denim aesthetic synth 
	                                               nesciunt you probably 
	                                               haven't heard of them 
	                                               accusamus labore 
	                                               sustainable VHS.
	                                            <br><br>
                                            <div class="text-right">
                                                <button class="btn btn-primary btn-xs" 
                                                		data-toggle="modal" 
                                                		data-target="#myModal">
                                                    <i class="fa fa-reply fa-fw"></i> 
                                                    	Reply
                                                </button>
                                                <button class="btn btn-warning btn-xs">
                                                    <i class="fa fa-mail-forward fa-fw"></i> 
                                                    	Forward
                                                </button>
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o fa-lg"></i> 
                                                    	Delete
                                                </button>
                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a data-toggle="collapse" 
	                                               data-parent="#accordion" 
	                                               href="#collapseTwo">
	                                            Collapsible Group Item #2
	                                            </a>
	                                        </h4>
	                                    </div>
	                                    <div id="collapseTwo" 
	                                    	 class="panel-collapse collapse">
	                                        <div class="panel-body">
	                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	                                            Collapsible Group Item #3
	                                            </a>
	                                        </h4>
	                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
                        <div class="tab-pane panel panel-default" id="tab3">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" 
                                                   data-parent="#accordion" 
                                                   href="#collapseOne">
                                                Collapsible Group Item #1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                <br><br>
                                                <div class="text-right">
                                                    <button class="btn btn-warning btn-xs">
                                                        <i class="fa fa-mail-forward fa-fw"></i> Forward
                                                    </button>
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o fa-lg"></i> Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                Collapsible Group Item #2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                Collapsible Group Item #3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('site_objects.admin.modal')
        @include('site_objects.admin.footer')
        {{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>
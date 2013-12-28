<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form role="form">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-md-offset-3">
                                            <label for="recipients"><strong> Recipients</strong></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="recipients" placeholder="...">
                                                <span class="input-group-btn">
                                                <button class="btn btn-info" type="button"><i class="fa fa-plus fa-fw"></i></button>
                                                </span>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-md-offset-3">
                                            <label for="subject"><strong> Subject</strong></label>
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-md-offset-3">
                                            <label><strong> Message</strong></label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-5 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope fa-fw"></i> Send</button>
                                        </div>
                                    </div>
                                </form>
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
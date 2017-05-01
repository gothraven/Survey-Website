<div id="profile_modify" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">User profile form requirement</h4>
            </div>
            <div class="modal-body" id="profile_here">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <form class="form-horizontal">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input id="Name (Full name)" name="Name (Full name)" type="text" placeholder="Name (Full name)" class="form-control input-md">
                                        </div>
                                    </div>
                                </div>
                                <!-- File Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
                                    <div class="col-md-4">
                                        <input id="Upload photo" name="Upload photo" class="input-file" type="file">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
                                    <div class="col-md-4">

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-birthday-cake"></i>

                                            </div>
                                            <input id="Date Of Birth" name="Date Of Birth" type="text" placeholder="Date Of Birth" class="form-control input-md">
                                        </div>
                                    </div>
                                </div>
                                <!-- Multiple Radios (inline) -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Gender">Gender</label>
                                    <div class="col-md-4">
                                        <label class="radio-inline" for="Gender-0"><input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">Male</label>
                                        <label class="radio-inline" for="Gender-1"><input type="radio" name="Gender" id="Gender-1" value="2">Female</label>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Primary Occupation">Primary Occupation</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <input id="Primary Occupation" name="Primary Occupation" type="text" placeholder="Primary Occupation" class="form-control input-md">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Phone number ">Phone number </label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input id="Phone number " name="Phone number " type="text" placeholder="Primary Phone number " class="form-control input-md">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Email Address">Email Address</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control input-md">
                                        </div>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview (max 200 words)</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" rows="10" id="Overview (max 200 words)" name="Overview (max 200 words)">Overview</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span>Submit</a>
                                        <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2 hidden-xs">
                            <img src="img/default_profile.png" class="img-circle img-thumbnail ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

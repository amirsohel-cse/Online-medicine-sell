@extends('layout')
@section('content')

    <section class="form-section">
        <div class="container">
            <div class="col-sm-9 col-xs-12" style="float: none; margin: 0 auto;">
                <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                    <div class="box-content">
                        <div class="col-xs-12" style="border-bottom: 1px solid #eee; margin-bottom: 10px;">
                            <div class="form-group">
                                <span style="font-size: 20px; line-height: 35px; color: green" class="pull-left"><b>Prescription Upload</b></span>
                            </div>

                        </div>
                        <div class="alert-block">
                            <p class="alert-success" >
                                <?php
                                $message = Session::get('message');

                                if($message)
                                {
                                    echo $message;
                                    Session::put('message',NULL);
                                }
                                ?>
                            </p>
                        </div>

                        <form role="form" method="post" action="{{url('/save_prescription')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="col-sm-12" style="background-color: white">
                                <div class="form-content">
                                    <h3 style="color: green !important" class="heading-text-color font-weight-normal">User Info</h3>

                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label class="font-weight-normal">Name <span class="required">*</span></label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label class="font-weight-normal">Mobile <span class="required">*</span></label>
                                            <input type="text" name="mobile" class="form-control">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12">
                                            <label class="font-weight-normal">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <label class="font-weight-normal">Doctor Prescription </label>
                                            <input type="file" name="image" class="form-control" style="padding: 0;"/>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label class="font-weight-normal">If Any Query </label>
                                            <textarea class="form-control" name="p_query" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <p class="required pull-right"><span style="color: red">* Required Fields</span></p>
                                    </div>
                                </div>

                                <div class="form-action clearfix">
                                    <div class="col-xs-12">
                                        <input type="submit" class="btn btn-primary btn-lg pull-right" value="Submit">
                                    </div>
                                </div>

                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
        <br>
    </section>

    @endsection

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('commons.meta')
        @include('commons.css')
        @include('commons.js')

        <script type="text/javascript">
            $(document).ready(function(){
                $("#username").focus();
            });
        </script>
    </head>

    <body>
        <div class="container-fluid" style="margin-top: 10em;">
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4" style="text-align: center; margin-bottom: 10px;">@include('commons.msg')</div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4">
                    {{ Form::open(array('route'=>'login', 'method'=>'POST','class'=>'well')) }}
                        <p><h3 style="text-align: center;">Welcome to Laravel 4</h3></p><hr>
                        <table width="100%" class="cst_table">
                            <tr>
                                <td>Username</td><td width="3%">:</td>
                                <td>{{ Form::text('username','',array('class'=>'span3','id'=>'username')) }}</td>
                            </tr>
                            <tr>
                                <td>Password</td><td>:</td>
                                <td>{{ Form::password('password',array('class'=>'span3')) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                                <td>
                                    <div style="float: right;">
                                        {{ Form::submit('Login',array('class'=>'btn btn-inverse')) }}
                                    </div>
                                </td>
                            </tr>
                        </table>
                    {{ Form::close() }}
                </div>
                <div class="span4">&nbsp;</div>
            </div>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Examination</title>

    
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

   
    <link href="{{URL::to('css/sb-admin.css')}}" rel="stylesheet">

   
    <link href="{{URL::to('css/plugins/morris.css')}}" rel="stylesheet">

 

<style type="text/css">
    #txt{
        font-size: 48px;
    }
    .navbar {
     background: #2c3e50 !important;
   }
   #sides ul {
    background: #2c3e50 !important;
   }
   body {
    background: #2c3e50;
   }
   span{
    font-size: 40px;
   }
</style>

</head>

<body>

    <div id="wrapper">

       
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" data-toggle="modal" data-target="#test">Exam</a>
            </div>
            
            <ul class="nav navbar-right top-nav">
               
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->email}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        
                       
                         <li>
                            <a href="{{route('admin_setting')}}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('admin_logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
           
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="sides">
                <ul class="nav navbar-nav side-nav">
                	<center>
                		<img src="{{URL::to('image/admin.png')}}" width="80px" alt="profile here" class="img-circle">
                	</center>
                    <li>
                       <a href="#">
                       		<p class="text-center" style="color: #fff">{{Auth::user()->fname}}</p>
                       		<p class="text-center" style="color: #fff">Online</p>
                       
                       </a>
                    </li>
                    <li class="active">
                      <a href="{{route('admin_main')}}" ><i class="glyphicon glyphicon-home"></i> Home</a>
                    </li>
                     <li >
                    	<a href="{{route('admin_rankings')}}" ><i class="glyphicon glyphicon-volume-up"></i> Records</a>
                    </li>
                     <li>
                        <a href="{{route('admin_subject')}}"><i class="glyphicon glyphicon-folder-open"></i> SUBJECTS</a>
                    </li>
                    <li>
                    	<a href="{{route('admin_students')}}"><i class="glyphicon glyphicon-user"></i> STUDENTS</a>
                    </li>
                    
                </ul>
            </div>
           
        </nav>

        <div id="page-wrapper">
           
              
         <div class="panel panel-primary">
            <div class="panel-heading">
                  <h2 class="text-center">Admin Dashboard</h2>              
            </div>

            <div class="panel-body">
                    <div class="col-md-3">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-signal"></span>
                                <h3 class="pull-right">0</h3>
                                <h3>Remarks</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               <span class="glyphicon glyphicon-file"></span>
                                <h3 class="pull-right">0</h3>
                                <h3>Records</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-book"></span>
                                <h3 class="pull-right">0</h3>
                                <h3>Subjects</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-user"></span>
                                <h3 class="pull-right">0</h3>
                                <h3>Students</h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>
              
                <div>
                    
                </div>
            </div>
        </div>
            
         
                      
                    

        </div>
           

        </div>
       
       

    </div>
   

   
    <script src="{{URL::to('js/jquery.js')}}"></script>

    
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>

    
 

</body>

</html>

@extends('cd-admin.home-master')
@section('page-title')  
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
      About
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">View About</li>
      </ol>
  </section>
  @if(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif

  <!-- Main content -->
    <section class="content">
    	<div>
          
       
   <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" ><i class="fa fa-edit">
                    </i></button></a>
                     </div>
       <div class="row">

        <div class="col-md-12"><center>
        <img src="{{url('/imageupload/'.$d->image)}}" style="height:300px;"></p>
      </center>
        <div class="container">
      <div class="main-par">
      <strong>Tagline</strong> :: {{$d->tagline}}
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        
      </div>
    </div>
    </div>
           <div class="col-md-9">
            <p>{!!$d->description!!}</p>
           </div>
            
          
            
            
            
    
        
  </section>
  
  </div>
</div>




<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
         <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('updateabout')}}" enctype="multipart/form-data">
            {{csrf_field()}}
  

                <div class="form-group">
                <label for="name">Description</label>
                <div class="text text-danger">{{$errors->first('description')}}</div>
                 <textarea name="description" id="summernote" rows="20" cols="80" value="{!!$d->description!!}">
                    
                  </textarea>
              
              </div>

               
       
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button class="btn btn-primary" type="submit">UPDATE</button>
          </div>
          <div class="col-md-4"></div>
        </form>
           
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       
@endsection
@extends('layouts.app')

@section('content')
<link href="{{ asset('frontend/css/complain form.css') }}" rel="stylesheet">
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   


                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="control-group hidden-phone">
  <p class="alert-success">

    <?php

        $message=Session::get('message');

        if($message){
          echo $message;
          Session::put('message',null);
        }

     ?>

  </p>
</div>

      
<form action="/complainshow" method="POST" enctype="multipart/form-data">
   {{csrf_field()}}
  
  
    <h1><strong>Drop Your Complain</strong></h1>
    
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-controll"/>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-controll"/>
    </div>



    <div class="form-group">


          <label for="caption">complain type</label>

        <select name="caption" class="form-controll dropdown" id="caption">

            <option value="" disabled selected>Select</option>  
            <option value="Ragging">Ragging</option>
            <option value="Administrative">Administrative</option>
        </select>


       <!-- <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
       </div> 
      <input type="text" name="caption" id="caption" class="form-controll"/> -->
    </div>
    
    <div class="form-group file-area">
          <label for="file">Complain File (.PDF Only)</label>
      <input type="file" name="file" id="file" required="required" multiple="multiple"/>
      <div class="file-dummy">
          <!-- <div class="success">Great, your files are selected. Keep on.</div>
          <div class="default">Please select some files</div> -->
      </div>
    </div>
    
    <div class="form-group">
      <button type="submit">Submit</button>
    </div>
    
</form>
  


  
  
  
  
  <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
  
  

@endsection

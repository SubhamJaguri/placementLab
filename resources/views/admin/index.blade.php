@extends('admin.layouts.app')


@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Create Post </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">create post</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          
          <!-- /.card -->
          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create material for gate </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','role' => 'form' , 'enctype' => 'multipart/form-data']) !!}
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      {{Form::text('title', '', ['class'=> 'form-control','placeholder'=>'title'])}}
                    </div>

                    <div class="form-group">
                            <label for="category">Category</label>
                            {{Form::text('category', '', ['class'=> 'form-control','placeholder'=>'category'])}}
                    </div>

                    <div class="form-group">
                            <label for="assert">Enter brief decription</label>
                            {{Form::text('assert', '', ['class'=> 'form-control','placeholder'=>'enter brief description'])}}
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputFile">Featured Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                         
                          {{Form::file('cover_image',['class'=> 'control', 'id'=>'exampleInputFile'])}}
                          
                        </div>
                        
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
  
                  
    
              </div>
              <!-- /.card -->

                  <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                            Main Body
                            <small></small>
                          </h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                              <i class="fas fa-times"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                            
{{Form::textarea('body', '', ['id'=>'','class'=> 'textarea','placeholder'=>'Body Text', 'style'=>'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'])}}
                          </div>
                          <p class="text-sm mb-0">
                            Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                            information.</a>
                          </p>
                        </div>
                        <div class="card-footer">
                                {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                              </div>
                      </div>

                      {!! Form::close() !!}
                      <br><br><br><br><br><br>
    
        </section>
        <!-- /.content -->
      </div>

@endsection
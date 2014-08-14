<h3>Add a new client</h3>
<p>Please fill in all fields</p>




<?php if (isset($errors) && !empty($errors)): ?>
<p>Errors:</p>

<?php foreach ($errors as $error): ?>
<div class="alert alert-warning" role="alert"> <?php echo $error ?></div>

    
<?php endforeach ?>

<?php endif;?>


<?php echo Form::open('',array(
                            'class'=>'form-horizontal',
                            'role'=>'form'
                            )) ?>
                 
                  <div class="form-group"> 
    <?php echo Form::label('number', 'Client number',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-2">
    
    <?php echo Form::input('number',"{$post['number']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Client number'
                                                    )) ?>
 
  </div>
 </div>            
                            
 <div class="form-group"> 
    <?php echo Form::label('name', 'Name',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-4">
    
    <?php echo Form::input('name',"{$post['name']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Name'
                                                    )) ?>
 
  </div>
 </div>  
    
    <div class="form-group">    
   
    <?php echo Form::label('last_name', 'Last Name',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-4">
    
    <?php echo Form::input('last_name',"{$post['last_name']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Last Name'
                                                    )) ?>
 
  </div>
  </div>
   
    
    
    
    <div class="form-group"> 
    <?php echo Form::label('email', 'Email',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-4">
    
    <?php echo Form::input('email',"{$post['email']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Email'
                                                    )) ?>
 
  </div>
 </div> 
    
    
    
    
    <div class="form-group"> 
    <?php echo Form::label('adress', 'Adress',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-4">
    
    <?php echo Form::input('adress',"{$post['adress']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Adress'
                                                    )) ?>
 
  </div>
 </div> 
    
    
    <div class="form-group"> 
    <?php echo Form::label('city', 'City',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-4">
    
    <?php echo Form::input('city',"{$post['city']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'City'
                                                    )) ?>
 
  </div>
 </div> 
    
    
    <div class="form-group"> 
    <?php echo Form::label('country', 'Country',array(
                                                'class'=>'col-sm-2 control-label'
                                                )) ?>
    <div class="col-xs-4">
    
    <?php echo Form::input('country',"{$post['country']}",array(
                                                    'class'=>'form-control',
                                                    'placeholder'=>'Country'
                                                    )) ?>
 
  </div>
 </div> 
    
    
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
 <?php echo Form::submit(NULL, 'Save',array('class'=>'btn btn-info')) ?>     
 
<a href="/main/" class='btn btn-danger'> Cancel </a>    
    </div>
  </div>

<?php echo Form::close() ?>




  
  
  

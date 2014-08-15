<h3>Clients</h3>
						<p>List of clients</p>
<?php echo HTML::anchor('/main/add/', 'Add new client',array(
							     'rel'=>'nofollow',
							     'class'=> 'btn btn-info btn-xs',
							     )
			);?>		
<table class="table table-hover">
			<tr>
				<th>Number</th>
				<th>Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Adress</th>
				<th>City</th>
				<th>Country</th>
                                <th>Action</th>
			</tr>
			<?php 			
			if(isset($clients) && !empty($clients)){
				foreach($clients as $key => $value): ?>
					<tr>
					<td><?=strip_tags($value['number'])?></td>
					<td><?=strip_tags(ucfirst($value['name']))?></td>
					<td><?=strip_tags(ucfirst($value['last_name']))?></td>
					<td><?=htmlentities($value['email'])?></td>
					<td><?=htmlentities($value['adress'])?></td>
					<td><?=strip_tags(ucfirst($value['city']))?></td>
					<td><?=strip_tags(ucfirst($value['country']))?></td>
                                        <th>
                                            <?php echo HTML::anchor("main/edit/{$value['id']}", 'Edit',array(
							     'rel'=>'nofollow',
							     'class'=> 'btn btn-primary btn-xs',
							     ));?>
                      
                      <?php echo HTML::anchor("main/del/{$value['id']}", 'Delete',array(
							     'rel'=>'nofollow',
							     'class'=> 'btn btn-danger btn-xs',
							     'onClick'=>"return confirm('Delete This account?')"
							     ));?>
                   
                                        
                                        
                                        </th>
					</tr>
				
				<?php endforeach; 
				
			}else {
				echo "<h3>Here is no data</h3>";		
			}
			
			?>	
				
			</table>
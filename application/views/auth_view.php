<div class="row">
        <div class="col-md-4">
          <form role = "form" method="post" action="/Auth/signin">

			   <div class = "form-group">
			      <label for = "name">Login</label>
			      <input type = "text" class = "form-control" name = "login" placeholder = "login">
			   </div>

				<div class = "form-group">
			      <label for = "name">Password</label>
			      <input type = "text" class = "form-control" name = "password" placeholder = "password">
			   </div>
			   
			   <button type = "submit" class = "btn btn-default">Submit</button>

			</form>
        </div>

        <div class="col-md-4">
          <form role = "form" method="post" action="/Auth/signup">

			   <div class = "form-group">
			      <label for = "name">Name</label>
			      <input type = "text" class = "form-control" name = "name" placeholder = "Name">
			   </div>

			   <div class = "form-group">
			      <label for = "name">Login</label>
			      <input type = "text" class = "form-control" name = "login" placeholder = "Login">
			   </div>

			   <div class = "form-group">
			      <label for = "name">Password</label>
			      <input type = "text" class = "form-control" name = "password" placeholder = "Password">
			   </div>

				<div class = "form-group">
			      <label for = "name">Surname</label>
			      <input type = "text" class = "form-control" name = "surname" placeholder = "surname">
			   </div>

			   <div class = "form-group">
			      <label for = "name">email</label>
			      <input type = "text" class = "form-control" name = "email" placeholder = "email">
			   </div>

			   <div class = "form-group">
			      <label for = "name">gender</label>
			      <select class="selectpicker" name="gender">
					  <option>male</option>
					  <option>female</option>
				  </select>
			   </div>
			   
			   <div class = "form-group">
			      <label for = "name">birtgday</label>
			      <input type = "text" class = "form-control" name = "birtgday" placeholder = "birtgday">
			   </div>

			   <button type = "submit" class = "btn btn-default">Submit</button>

			</form>
        </div>
</div>
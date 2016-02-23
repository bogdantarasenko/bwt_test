<div class="row">
        <div class="col-md-4">
          <form role = "form" method="post" action="/Auth/signin" id="auth">

			   <div class = "form-group">
			      <label for = "name">Login</label>
			      <input type = "text" class = "form-control  required" name = "login" placeholder = "login">
			   </div>

				<div class = "form-group">
			      <label for = "password">Password</label>
			      <input type = "password" class = "form-control  required password" name = "password" placeholder = "password">
			   </div>
			   
			   <button type = "submit" class = "btn btn-default">Submit</button>

			</form>
        </div>

        <div class="col-md-4">
          <form role = "form" method="post" action="/Auth/signup" id="registration">

			   <div class = "form-group">
			      <label for = "name">Name</label>
			      <input type = "text" class = "form-control required" name = "name" placeholder = "Name">
			   </div>

			   <div class = "form-group">
			      <label for = "login">Login</label>
			      <input type = "text" class = "form-control required" name = "login" placeholder = "Login">
			   </div>

			   <div class = "form-group">
			      <label for = "password">Password</label>
			      <input type = "password" class = "form-control required password number" name = "password" placeholder = "Password">
			   </div>

				<div class = "form-group">
			      <label for = "surname">Surname</label>
			      <input type = "text" class = "form-control required" name = "surname" placeholder = "surname">
			   </div>

			   <div class = "form-group">
			      <label for = "email">email</label>
			      <input type = "text" class = "form-control required email" name = "email" placeholder = "email">
			   </div>

			   <div class = "form-group">
			      <label for = "gender">gender</label>
			      <select class="selectpicker" name="gender">
					  <option>male</option>
					  <option>female</option>
				  </select>
			   </div>
			   
			   <div class = "form-group">
			      <label for = "birthday">birtgday</label>
			      <input type = "text" class = "form-control required" name = "birtgday" placeholder = "birtgday">
			   </div>

			   <button type = "submit" class = "btn btn-default">Submit</button>

			</form>
        </div>
</div>
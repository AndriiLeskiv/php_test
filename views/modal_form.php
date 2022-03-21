<div class="popup center modal_show">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="text-center">
        <h2>You must be a user to view this content...</h2>
        <h3>Already have an account?  <a href="#">Log in here</a></h3>
    </div>
    <div class=" font-weight-bold">
        I AM A:
    </div>
    <form method="post" name="formValidation" id="formValidation" action="../vendor/create.php">
        <div class="profession required">
            <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Student</label>
            <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Parent</label>
            <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Counselor</label>
            <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Other</label>
        </div>
        <input type = "text" class="form-control form-control-lg required" name = "firstname" placeholder = "First Name"/>
        <br/>
        <input type = "text" class="form-control form-control-lg required" name = "lastname" placeholder = "Last Name"/>
        <br/>
        <input type = "email" class = "form-control form-control-lg required" name = "email" placeholder = "Email Address"/>
        <br/>
        <input type = "password" class = "form-control form-control-lg required" name = "password" placeholder = "Password" id = "password"/>
        <br/>
        <input type = "password" class = "form-control form-control-lg required" name = "confirm" placeholder = "Confirm Password"/>
        <br/>
        <select class = "form-control form-control-lg required" name ="school">
            <option value="School" selected="" disabled="">School</option>
            <option value="High School1">High School 1 </option>
            <option value="High School1">High School 2</option>
            <option value="High School3">High School 3</option>
            <option value="High School4">High School 4</option>
        </select>
        <br/>
        <select class = "form-control form-control-lg required" name="currentgrade">
            <option value="Current Grade/Year in School" selected="" disabled="">Current Grade/Year in School</option>
            <option value="High School Freshman1">High School Freshman 1</option>
            <option value="High School Freshman2">High School Freshman 2</option>
            <option value="High School Freshman3">High School Freshman 3</option>
            <option value="High School Freshman4">High School Freshman 4</option>
        </select>
        <br/>
        <input type="text" id="datepicker" class="form-control form-control-lg required" name="date" placeholder="Date">
        <br/>
        HOW DID YOU HEAR ABOUT US:
        <br/>
        <select class = "form-control form-control-lg" name = "online_search">
            <option value="Online_search1" selected="" disabled="">Online search1</option>
            <option value="Online_search2">Online search2</option>
            <option value="Online_search3">Online search3</option>
            <option value="Online_search4">Online search4</option>
            <option value="Online_search5">Online search5</option>
        </select>
        <br/>
        <span>By clicking "Join," I agree to the <a href="#">Terms & Conditions</a></span>
        <br/>
        <input type="submit" class="btn btn-danger form-control-lg px-5 btn_send" value="JOIN">
    </form>
</div>

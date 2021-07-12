<!-- /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Registration
 **/ -->

<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-success">
                {{ Session::get('fail') }}
             </div>
             @endif
<section class="login-wrapper">
    <div class="login-middle">
         <div class="row">
            <h1>User Registartion</h1>
            <form  onsubmit="return validation()" action="add_users" name="userForm" method="post" >
            @csrf
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Username
                        *</label>
                        <input type="text" oninput="return validatename()" class="form-control" name="name" id="name" placeholder="Enter Your username">
                        <span style="color:red" id="nameError">@error('name'){{$message}}@enderror</span>
                    </div><br><br>

                   

                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Email
                       *</label>
                        <input type="email"  oninput="return validatemail()" class="form-control" name="email" id="email" placeholder="Enter Your Email" >
                        <span style="color:red" id="mailError">@error('email'){{$message}}@enderror</span>
                        </div><br><br>

                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Phone
                        * </label>
                        <input type="text" oninput="return validatephone()" class="form-control" placeholder="Enter your phone number" name="phone" id="phone" aria-label="First name">
                        <span style="color:red" id="phoneError">@error('phone'){{$message}}@enderror</span>
                    </div><br><br>
                   
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Password
                        * </label>
                        <input type="password" class="form-control" placeholder="" name="password" id="password" aria-label="First name">
                        <span style="color:red" id="passError">@error('password'){{$message}}@enderror</span>
                    </div><br><br>
            
            <div class="text-center">
                <button type="submit" name="submit" class="primary-btn">Register</button><br><br>
            </div>
            
          
            </form>
            <div>
        Already a User? 
           <a class="dropdown-item" href="http://localhost/assignment/public/log">Login</a>
           </div>

        </div>



<script>


       
function validatename(){
    var x = document.getElementById("name").value
//var x= document.forms["userForm"]["name"].value;
if(x==""){
    document.getElementById('nameError').innerHTML="Enter your name"
    document.getElementById("nameError").style.display='';
    return false;
}else{
    document.getElementById("nameError").style.display='none';
} 
if(x.length < 5){
    document.getElementById('nameError').innerHTML="Enter a name with at least 5 letters"
    document.getElementById("nameError").style.display='';
    return false;
}else{
    document.getElementById("nameError").style.display='none';
} 
if(!(/^[a-zA-Z]+$/.test(x))){
    document.getElementById('nameError').innerHTML="Only alphabets allowed"
    document.getElementById("nameError").style.display='';
    return false;
}else{
    document.getElementById("nameError").style.display='none';
} 
}

function validatemail(){
    var mail = document.getElementById("email").value
//var mail= document.forms["userForm"]["email"].value;

    if(mail==""){
        document.getElementById('mailError').innerHTML="Enter your email"
        document.getElementById("mailError").style.display='';
        return false;
    }else{
        document.getElementById("mailError").style.display='none';
    } 
}

function validatephone(){
    var phn = document.getElementById("phone").value
//var phn= document.forms["userForm"]["phone"].value;

    if(phn==""){
        document.getElementById('phoneError').innerHTML="Enter your Phonenumber"
        document.getElementById("phoneError").style.display='';
        return false;
    }else{
        document.getElementById("phoneError").style.display='none';
    } 
    if(!/^[0-9]+$/.test(phn)){
     document.getElementById('phoneError').innerHTML="Enter numbers only"
    document.getElementById("phoneError").style.display='';
    return false;
    }else{
    document.getElementById("phoneError").style.display='none';
    } 

    if(phn.length !=10){
        document.getElementById('phoneError').innerHTML="Enter a number with at least 10 letters"
    document.getElementById("phoneError").style.display='';
    return false;
    }else{
    document.getElementById("phoneError").style.display='none';
    } 
}

</script>
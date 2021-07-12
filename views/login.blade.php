<!-- /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Login Page
 **/ -->
 
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
<section class="login-wrapper">
    <div class="login-middle">
      
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

        <div class="form-wrapper">
            <h2 class="text-uppercase">Login</h2>
            <form name="addform" action="login_request" method="post" onsubmit="return validate()">
                @csrf
            <div class="">
                <input type="email" oninput="return validateemail()" name="email" class="form-control"  placeholder="Username">
                <p  id="loginemail" style="display:none;">Email is required</p>
            
            </div><br><br>
            <div class="">
                <input type="password" oninput="return validatepassword()"  name="password" class="form-control" placeholder="Password">
                <p  id="loginpassword" style="display:none;">Password is required</p>
            </div><br><br>
            
            <div class="text-center">
                <button type="submit" name="submit" class="primary-btn">Login</button>
            </div>
            
          
            </form>
        </div>
    </div>

</section>

<script>

function validate(){

var x =document.forms["addform"]["email"].value;

if(x==""){
    document.getElementById("loginemail").style.display='';//show button
    return false;
}

var x =document.forms["addform"]["password"].value;

if(x==""){
    document.getElementById("loginpassword").style.display='';//show button
    return false;
}


}



function validateemail(){

var x= document.forms["addform"]["email"].value;
if(x==""){
    document.getElementById("loginemail").style.display='';
    return false;
}else{
    document.getElementById("loginemail").style.display='none';
} 

}

function validatepassword(){

var x= document.forms["addform"]["password"].value;
if(x==""){
    document.getElementById("loginpassword").style.display='';
    return false;
}else{
    document.getElementById("loginpassword").style.display='none';
}
 

}





</script>

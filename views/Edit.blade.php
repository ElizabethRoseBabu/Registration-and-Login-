<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    
    
    <style>
input{
    padding:10px;
    margin:20px;
    }
    </style>
</head>
<body>


<section class="login-wrapper">
    <div class="login-middle">
         <div class="row">
            <h1>Edit Details</h1>
    
        <form method="get" action="{{url('updatestock')}}">
                 
           
            <input type="hidden" name="id"  value={{$updata->id}}>
            <div class="col-md-6">
            Name: <input type="text" name="name"  value={{$updata->name}}>
            </div><br><br>
            <div class="col-md-6">
            Email: <input type="text" name="email"  value={{$updata->email}}>
            </div><br><br>
            <div class="col-md-6">
            Phone:<input type="text" name="phone"  value={{$updata->phone}}>
            </div><br><br>
            <div class="col-md-6">
            <button type="submit" name="submit" class="primary-btn">Edit</button>
            </div>
    </form>
    </section>
</body>
</html>
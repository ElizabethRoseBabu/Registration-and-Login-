<!-- /**
 * Laravel  8.0
 * @author  Elizabeth Rose
 * @Date   21-06-2021
 * @module Admin
 * Description: Users List
 **/ -->
<!DOCTYPE html>
<html>
<head>
    <title>
    
    </title>
    
</head>
<body>
<table border=1>

<thead>
   <tr>
   <th >User Name</th>
   <th>Email</th>
   <th>Phone</th>
   
   <th colspan="2">Action</th>

   </tr>
</thead>
 <tbody>
   @foreach($data as $value)
       <tr>
       <td>{{$value->name}}</td>
       <td>{{$value->email}}</td>
       <td>{{$value->phone}}</td>

       <td><a href={{"update/".$value->id}}>Edit</a></td>
       <td><a href={{"delete/".$value->id}}>Delete</a></td>
       </tr>

   @endforeach
 </tbody>
 
</table>
</div>
<div>
{{$data->links()}}

<style>
 .page-item{
     display:inline-block;
     padding:10px;
 }
 </style>
   </div>
   <a href="stock">Home </a> 

</body>
</html>
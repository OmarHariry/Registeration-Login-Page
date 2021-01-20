function validate(){
    var email = document.getElementById("loginemail").value;
    var pw = document.getElementById("loginpw").value;
    if(email=="" && pw=="")
    {
      alert("Please fill all the fields!");
      return false;
    }
    if(email ==""){
      alert("Please fill the email field!");
      return false;
    }
    if(pw ==""){
      alert("Please fill the password field!");
      return false;
    }
  };
  function validate2(){
    var email = document.getElementById("email").value;
    var pw = document.getElementById("pwd").value;
    var first = document.getElementById("first").value;
    var cpw = document.getElementById("cpwd").value;
    var flag =1;
    if(email=="" && pw=="" && first=="")
    {
      alert("Please fill all the fields!");
      return false;
    }
    if(email ==""){
      alert("Please fill the email field!");
      return false;
    }
    if(pw =="" || cpw ==""){
      alert("Please fill the password field!");
      return false;
    }
    if(first==""){
      alert("Please fill the name field!");
      return false;
    }
  
    if(pw !=cpw){
      alert("Password and confirm password fields must be the same.");
      return false;
    }
    if(first!=""){
      var regex=/^[a-zA-Z]+$/;
      if (regex.test(first))
      {
        flag =1;
      }
      else{
        alert("Invalid name format!");
        flag =0;
        return false;
      }
     
    }
    if(email!=""){
        var regex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (regex.test(email))
        {
          flag = 1;
        }
        else{
          var str="You have entered an invalid email address!\n"+"Uppercase (A-Z) and lowercase (a-z) English letters.\n"
          +"Digits (0-9).\n"+"Characters ! # $ % & ' * + - / = ? ^ _ ` { | } ~\n"+"The domain name [for example com, org, net] \n"
          alert(str);
          flag=0;
          return false;
        }
       
    }
    if(flag == 1)
      return true;
    else return false;
  };
//To submit the form from AJAX instead of HTML 
/*
$(document).ready(function(){
  $("#login").click(function(){
  var email = $("#email").val();
  var password = $("#password").val();
  // Returns successful data submission message when the entered information is stored in database.
  if(email==''||password=='')
  {
  alert("Please Fill All Fields");
  }
  else
  {
  $.ajax({
  type: "POST",
  url: "login.php",
  data: {"email":email,"password":password},
  cache: false,
   success: function(data){
    window.location.href = "login.php";
     //return true;
    }
  });
  }
  return false;
  });
  });
*/
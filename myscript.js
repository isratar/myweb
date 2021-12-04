function validateFormID(){
    var id = document.getElementById("id").value;
    if (id == ""){
        document.getElementById("iderror").innerHTML="Id must be filled out !";
         return false;} 
    }


function validateForm(){
var cname = document.getElementById("cname");
var cid= document.getElementById("cid");

var p1 = /^[a-zA-Z ]+$/;
var p3 = /^[0-9]+$/;  

if(!p1.test(cname.value)) {
    valid = 0;
    document.getElementById("cnameerror").innerHTML= "Course Name only accept Alphabets and white space!";
  return false;}


  if(!p3.test(cid.value)) {
    valid = 0;
    document.getElementById("ciderror").innerHTML= "Course id should be numeric!";
  return false;}
  }

function validateForm1() {
    var cname = document.getElementById("cname");
    var tname= document.getElementById("tname");
    var tid= document.getElementById("tid");
    var sid= document.getElementById("sid");

    var p1 = /^[a-zA-Z ]+$/;
    var p2 = /^[a-zA-Z ]+$/;
    var p3 = /^[0-9]+$/;  
    var p4 = /^[0-9]+$/;  

    if(!p1.test(cname.value)) {
        valid = 0;
        document.getElementById("cnameerror").innerHTML= "Course Name only accept Alphabets and white space!";
      return false;}
    
      
    if(!p2.test(tname.value)) {
        valid = 0;
        document.getElementById("tnameerror").innerHTML= "Teacher Name only accept Alphabets and white space!";
      return false;}
    
      if(!p3.test(tid.value)) {
        valid = 0;
        document.getElementById("tiderror").innerHTML= "Teacher id should be numeric!";
      return false;}

      if(!p4.test(sid.value)) {
        valid = 0;
        document.getElementById("siderror").innerHTML= "Student id should be numeric!";
      return false;}
}

function validateForm2() {
    var id = document.getElementById("id").value;
    if (id == "") {
    alert("Please give a valid ID to Update the data !"); return false;}}
function validateForm3() {
    var cname = document.getElementById("cname").value;
    var cid= document.getElementById("cid").value;
    if (cname == "") {
    alert("Enter your cname") ; return false;} 
    if (cid == "") {
    alert("Enter your cid"); return false;}
}

function validateForm6(){
    var cname = document.getElementById("cname").value;
    var cid= document.getElementById("cid").value;
    
    if (cname == ""){
        document.getElementById("cnameerror").innerHTML="Course name must be filled out!";
         return false;} 
    
    if (cid == "") {
        document.getElementById("ciderror").innerHTML="Course id must be filled out!";  
     return false;}
    }

    





    

    function validateForm100000() { 
        var id = document.getElementById("id").value;
        var fname = document.getElementById("fname");
        var address = document.getElementById("address").value; 
        var email = document.getElementById("email");
        var password = document.getElementById("password").value;
        var telephone = document.getElementById("telephone");
        var superpower = document.getElementById("superpower").value;
        var p1 = /^[a-zA-Z ]+$/;
        var p2 = /^[a-zA-Z0-9_\.\-]+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var p3 = /^[0-9]+$/;
        
        if (id == "") {
          document.getElementById("iderror").innerHTML="Id field is required!";
        return false;
        }
        if(!p1.test(fname.value)) {
          valid = 0;
          document.getElementById("nameerror").innerHTML= "Name only accept Alphabets and white space!";
        return false;
        }
        if (address == "") {
          document.getElementById("addresserror").innerHTML="Address field is required!";
        return false;
        }
        if(!p2.test(email.value)) {
          valid = 0;
          document.getElementById("emailerror").innerHTML= "Invalid Email address";
        return false;
        }
        if (password.length<6) {
          document.getElementById("passworderror").innerHTML="Password should be minimum 6 characters !";
        return false;
        }
        
        if(!p3.test(telephone.value)) {
          valid = 0;
          document.getElementById("telephoneerror").innerHTML= "Telephone should be numeric!";
        return false;
        }
      
        if (superpower == "") {
          document.getElementById("superpowererror").innerHTML="Superpower  field is required!";
        return false;
        }
        
        }
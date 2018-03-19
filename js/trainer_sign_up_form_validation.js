// Form validation code will come here.
   //Main functions
   var form = document.querySelector('form');

   form.onsubmit = function(e) {
      validateForm(e);
   }


   //Check if the value of each textbox is empty/
   function validateForm(e){
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     //Validate using name from the form/



            if( document.JobSeekers.fname.value == "" && document.JobSeekers.lname.value == ""
              && document.JobSeekers.email.value == "" && document.JobSeekers.pass.value ==""
              && document.JobSeekers.Phn.value =="" && document.JobSeekers.addr.value == ""
              && document.JobSeekers.Phnumber.value == ""&& document.JobSeekers.Speci.value == ""){
                alert( "Please ensure all fields are filled!" );
                document.getElementById("fname").style.border="1px solid red";
                document.getElementById("lname").style.border="1px solid red";
                document.getElementById("email").style.border="1px solid red";
                document.getElementById("pass").style.border="1px solid red";
                document.getElementById("Phn").style.border="1px solid red";
                document.getElementById("addr").style.border="1px solid red";
                document.getElementById("Phnumber").style.border="1px solid red";
                document.getElementById("Speci").style.border="1px solid red";
                //stop submission action
                e.preventDefault();
            }
           else {
              if(document.JobSeekers.pass.value <6
              && document.JobSeekers.Phn.value <6 && document.JobSeekers.addr.value <6
              && document.JobSeekers.pass.value !== document.JobSeekers.Phn.value
              && reg.test(document.JobSeekers.email.value) == false){
                e.preventDefault();
            }

       else{
         if( document.JobSeekers.fname.value == "" ){

           //name of the form and name of the textbox will then focus/
           document.JobSeekers.fname.focus() ;
           document.getElementById("fname").style.border="1px solid red";
           e.preventDefault();
         } else{
           document.getElementById("fname").style.border="1px solid green";
           validateStringInput(e);
         }

         if( document.JobSeekers.lname.value == "" ){

           document.JobSeekers.lname.focus() ;
           document.getElementById("lname").style.border="1px solid red";
           e.preventDefault();
         }else{
           document.getElementById("lname").style.border="1px solid green";
         }

         if( document.JobSeekers.email.value == ""){
           document.JobSeekers.email.focus() ;
           document.getElementById("email").style.border="1px solid red";
           e.preventDefault();
          }else{
           document.getElementById("email").style.border="1px solid green";
           validateEmail(e);
         }

         if( document.JobSeekers.pass.value == ""){
             document.JobSeekers.pass.focus() ;
             document.getElementById("pass").style.border="1px solid red";
             e.preventDefault();
          }else{
             document.getElementById("pass").style.border="1px solid green";
             validatepass(e);
         }

         if( document.JobSeekers.Phn.value == ""){
               document.JobSeekers.Phn.focus() ;
               document.getElementById("Phn").style.border="1px solid red";
               e.preventDefault();
          }
          else{
              document.getElementById("Phn").style.border="1px solid green";
              validateConPass(e);
           }

           if( document.JobSeekers.addr.value == ""){

                 document.JobSeekers.addr.focus() ;
                 document.getElementById("addr").style.border="1px solid red";
                 e.preventDefault();
               }else{
                 document.getElementById("addr").style.border="1px solid green";
                 validateaddr(e);
               }

             if( document.JobSeekers.Phnumber.value == ""){
                      document.JobSeekers.Phnumber.focus() ;
                      document.getElementById("Phnumber").style.border="1px solid red";
                      e.preventDefault();
             }else{
                      document.getElementById("Phnumber").style.border="1px solid green";

             }
               if( document.JobSeekers.Speci.value == ""){
                          document.JobSeekers.Speci.focus() ;
                          document.getElementById("Speci").style.border="1px solid red";
                          e.preventDefault();
                 }else{
                          document.getElementById("Speci").style.border="1px solid green";

                 }
              }
            }
          }
   //To validate email/
   function validateEmail(e){
     //Declare variable that only accept an email format inout/
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

     if (reg.test(document.JobSeekers.email.value) == false){
       alert('Invalid Email address');
       document.JobSeekers.email.focus() ;
       //using id of the textbox and give them styling/
       document.getElementById("email").style.border="1px solid red";
       e.preventDefault();
     }else{
       document.getElementById("email").style.border="1px solid green";
     }
   }
   //To validate if user is enter with alphabets value/
   function validateStringInput(e){
     //Declare variable to only accept string/
     var alphaExp = /^[a-zA-Z ]*$/;;
     if(document.JobSeekers.fname.value.match(alphaExp)){

       document.getElementById("fname").style.border="1px solid green";
     }else{
       alert('Please enter only alphabets!');
       document.JobSeekers.fname.focus() ;
       document.getElementById("fname").style.border="1px solid red";
       e.preventDefault();
     }
   }
   //TO check if the pass and confirm pass are same value/
   function validatepass(e){
     //Store the pass field objects into variables ...
     var pass1 = document.getElementById('pass');
     var pass2 = document.getElementById('Phn');
     //Set the colors we will be using ...
     var success = "#008000";
     var error = "#FF0000";
     //Compare the values in the pass field
     //and the confirmation field
     if(pass1.value.length > 5){
       pass1.style.backgroundColor = success;
     }
     else{
       alert( "Please enter at least 6 alphanumeric values!");
       document.JobSeekers.pass.focus() ;
       pass1.style.border="1px solid red";
       pass1.style.backgroundColor = error;
       e.preventDefault();
     }

     if(pass1.value == pass2.value){
       //The passs match.
       //Set the color to the good color and inform
       //the user that they have entered the correct pass

       if(pass1.value.length > 5){
         pass1.style.backgroundColor = success;
       }
       else{
         document.JobSeekers.pass.focus() ;
         pass1.style.border="1px solid red";
         pass1.style.backgroundColor = error;
         e.preventDefault();
       }

     }else{
       //The passs do not match.
       //Set the color to the bad color and
       //notify the user.
        alert("passs Do Not Match!");
         document.JobSeekers.Phn.focus() ;
       pass2.style.border="1px solid red";
       pass2.style.backgroundColor = error;
       e.preventDefault();
     }
   }

   function validateConPass(e){
     //Store the pass field objects into variables ...
     var pass1 = document.getElementById('pass');
     var pass2 = document.getElementById('Phn');
     //Set the colors we will be using ...
     var success = "#008000";
     var error = "#FF0000";
     //Compare the values in the pass field
     //and the confirmation field

     if(pass1.value == pass2.value){
       //The passs match.
       //Set the color to the good color and inform
       //the user that they have entered the correct pass

       if(pass2.value.length > 5){
         pass2.style.backgroundColor = success;
       }
       else{

         document.JobSeekers.Phn.focus() ;
         pass2.style.border="1px solid red";
         pass2.style.backgroundColor = error;
         e.preventDefault();
       }

     }else{
       //The passs do not match.
       //Set the color to the bad color and
       //notify the user.
       document.JobSeekers.Phn.focus() ;
       pass2.style.border="1px solid red";
       pass2.style.backgroundColor = error;
       e.preventDefault();
      }
    }

   //TO check if the pass and confirm pass are same value/
   function validateaddr(e){
     //Store the pass field objects into variables ...
     var add = document.getElementById('addr');

     //Compare the values in the pass field
     //and the confirmation field
     if(add.value.length > 5){
        document.getElementById("addr").style.border="1px solid green";
     }
     else{
       alert( "Please ensure you have fill up more than 6 characters for addr text box!");
       document.JobSeekers.addr.focus() ;
       add.style.border="1px solid red";
       e.preventDefault();
      }
    }

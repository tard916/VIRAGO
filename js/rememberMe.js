//pass the string in the cookie to a map and split them
//jason object
var cookieMap = {};
var cookies = document.cookie;
var cookieList = cookies.split(";");

//create a map from cookie string and split the variable and value
cookieList.forEach(
    (e) => {
        var item = e.split("=");
        /**
        * create a
        **/
        cookieMap[item[0]] = item[1];
    }
);


//check the username is saved in the cookie and load it
if(cookieMap['member_cred']){
  //display the coookie value at the inputName textbox
  $("#inputName").val(cookieMap['member_cred']);
}

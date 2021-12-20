window.addEventListener("load", function () {
    var signup_form = document.getElementById("signup-form");//fetching form element from signup_modal
    signup_form.addEventListener("submit", function (event) {//when it get "submit" event it will invoke a function
        var XHR = new XMLHttpRequest();//creating http request object  from in built XMLHttprequest
        var form_data = new FormData(signup_form);//getting form data

        // On success
        XHR.addEventListener("load", signup_success);//invokes function

        // On error
        XHR.addEventListener("error", on_error);//invokes function

        // Set up request
        XHR.open("POST", "api/signup_submit.php");

        // Form data is sent with request
        XHR.send(form_data);

        document.getElementById("loading").style.display = 'block';
        event.preventDefault();
    });


   //add code corresponding to login form as a part of your assignment
   var login_form = document.getElementById("login-form");
   login_form.addEventListener("submit", function(event){
        var login_request = new XMLHttpRequest();
        var login_data = new FormData(login_form);
        login_request.addEventListener("load", login_success);
        login_request.addEventListener("error", login_error);
        login_request.open("POST", "api/login_submit.php");
        login_request.send(login_data);

        document.getElementById("loading"). style.display = "block";
        event.preventDefault();
       
   })
});

var signup_success = function (event) {
    document.getElementById("loading").style.display = 'none';

    var response = JSON.parse(event.target.responseText);//response = {success: false, message: "This email id is already registered with us!"}, event = ProgressEvent {isTrusted: true, lengthComputable
    if (response.success) {
        alert(response.message);
        window.location.href = "index.php";
    } else {
        alert(response.message);
    }
};


var on_error = function (event) {
    document.getElementById("loading").style.display = 'none';

    alert('Oops! Something went wrong.');
};

//add function corresponding to login_success as a part of your assignment

var login_success = function (event) {
    document.getElementById("loading").style.display = 'none';

    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        alert(response.message);
        window.location.href = "index.php";
    } else {
        alert(response.message);
    }
};

var login_error = function (event) {
    document.getElementById("loading").style.display = 'none';
    alert('Oops! Something went wrong.');
};
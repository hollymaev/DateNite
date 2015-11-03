window.onload = function () {
    var userSignup = document.getElementById ("splashSignup");
    var userLogin = document.getElementById("splashLogin");
    var guestLogin = document.getElementById("splashGuest");
    var buttons = document.getElementById("splashButton");
    
    //Guest Login 
    
    //User Login 
    
    // User Sign Up 
    var forms = [];
    
    
    userSignup.onclick = function () {
        /*var formInputs = {
            fName: fName.value,
            lName: lName.value,
            uName: uName.value,
            email: email.value,
            password: password.value,
            index: 0
        }
        
        forms.push(formInputs);
            console.log("it's working!!");
        */
        var formDiv = document.createElement("div");
        
            formDiv.style.marginLeft = "auto";
            formDiv.style.marginRight = "auto";
            formDiv.style.height = "1335px";
            formDiv.style.width = "755px";
            formDiv.style.position = "absolute";
            formDiv.style.bottom = "0";
            formDiv.style.top = "10px";
            formDiv.style.backgroundColor = "#fff";
        
             document.body.appendChild(formDiv);
        
        var fnameInput = document.createElement("input");
            formDiv.appendChild(fnameInput);
        
        var lnameInput = document.createElement("input");
            formDiv.appendChild(lnameInput);
        
        var unameInput = document.createElement("input");
            formDiv.appendChild(unameInput);
        
        var emailInput = document.createElement("input");
            formDiv.appendChild(emailInput);
        
        var passInput = document.createElement("input");
            formDiv.appendChild(passInput);
        
        var subBut = document.createElement("button");
            formDiv.appendChild(subBut);
            subBut.innerHTML = "SIGN UP";
        
            subBut.onclick = function () {
                document.body.removeChild(formDiv);
            }
      
    // Options 
        var options = [];
        
    // Side Div
        var sideDiv = document.getElementById("menu");
        
        
        menu.onclick = function () {
            var sBar = document.createElement("div");
            
            sBar.style.marginLeft = "auto";
            sBar.style.marginRight = "auto";
            sBar.style.height = "1335px";
            sBar.style.width = "755px";
            sBar.style.position = "absolute";
            sBar.style.bottom = "0";
            sBar.style.top = "10px";
            sBar.style.backgroundColor = "#fff";
        
            
            document.body.appendChild(sBar);
            
            var userPlans = document.createElement("button");
                sBar.appendChild(plans);
                plans.innerHTML = "Plans";
            
                
            var userSettings = document.createElement("button");   
                sBar.appendChild(settings);
                settings.innerHTML = "Settings";
            
            
            var userLogout = document.createElement("button");
                sBar.appendChild(logout);
                logout.innerHTML = "Logout";
        }
        
        
        
        
        
        
    // Logout 
            
            
            
    };
};
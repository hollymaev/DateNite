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
            formDiv.style.width = "750px";
            formDiv.style.position = "absolute";
            formDiv.style.bottom = "0";
            formDiv.style.top = "5px";
            formDiv.style.backgroundColor = "#fff";
            formDiv.style.border = "solid 7px #3E124D";
        
             document.body.appendChild(formDiv);
        
        var fnameInput = document.createElement("input");
            fnameInput.placeholder="First Name";
            fnameInput.style.width="280px";
            fnameInput.style.padding="10px";
            fnameInput.style.marginTop="15px";
            fnameInput.style.marginRight="40px";
            fnameInput.style.marginLeft="40px";
            fnameInput.style.backgroundColor="rgba(0,0,0,0.4)";
            fnameInput.style.border="solid 2px #fff";
            fnameInput.style.fontSize="25pt";
            formDiv.appendChild(fnameInput);
        
            fnameInput.style.marginLeft = "18%";
            fnameInput.style.marginRight = "15%";
            fnameInput.style.marginTop = "20px";
            fnameInput.style.width = "475px";
            fnameInput.style.height = "50px";
            fnameInput.style.fontSize = "25pt";
        
        var lnameInput = document.createElement("input");
            lnameInput.placeholder="Last Name";
            lnameInput.style.display="inline-block";
            lnameInput.style.width="280px";
            lnameInput.style.padding="10px";
            lnameInput.style.marginTop="15px";
            lnameInput.style.marginRight="40px";
            lnameInput.style.marginLeft="40px";
            lnameInput.style.backgroundColor="rgba(0,0,0,0.4)";
            lnameInput.style.border="solid 2px #fff";
            lnameInput.style.fontSize="25pt";
            formDiv.appendChild(lnameInput);
        
            lnameInput.style.marginLeft = "18%";
            lnameInput.style.marginRight = "15%";
            lnameInput.style.marginTop = "20px";
            lnameInput.style.width = "475px";
            lnameInput.style.height = "50px";
            lnameInput.style.fontSize = "25pt";
        
        var unameInput = document.createElement("input");
            unameInput.placeholder="Username";
            unameInput.style.display="inline-block";
            unameInput.style.width="300px";
            unameInput.style.padding="10px";
            unameInput.style.marginTop="15px";
            unameInput.style.marginRight="40px";
            unameInput.style.marginLeft="40px";
            unameInput.style.backgroundColor="rgba(0,0,0,0.4)";
            unameInput.style.border="solid 2px #fff";
            unameInput.style.fontSize="25pt";
            formDiv.appendChild(unameInput);
        
            unameInput.style.marginLeft = "18%";
            unameInput.style.marginRight = "15%";
            unameInput.style.marginTop = "20px";
            unameInput.style.width = "475px";
            unameInput.style.height = "50px";
            unameInput.style.fontSize = "25pt";
        
        var emailInput = document.createElement("input");
            emailInput.placeholder="Email";
            emailInput.style.display="inline-block";
            emailInput.style.width="300px";
            emailInput.style.padding="10px";
            emailInput.style.marginTop="15px";
            emailInput.style.marginRight="40px";
            emailInput.style.marginLeft="40px";
            emailInput.style.backgroundColor="rgba(0,0,0,0.4)";
            emailInput.style.border="solid 2px #fff";
            emailInput.style.fontSize="25pt";
            formDiv.appendChild(emailInput);
        
            emailInput.style.marginLeft = "18%";
            emailInput.style.marginRight = "15%";
            emailInput.style.marginTop = "20px";
            emailInput.style.width = "475px";
            emailInput.style.height = "50px";
            emailInput.style.fontSize = "25pt";
        
        var passInput = document.createElement("input");
            passInput.placeholder="Password";
            passInput.style.display="inline-block";
            passInput.style.width="300px";
            passInput.style.padding="10px";
            passInput.style.marginTop="15px";
            passInput.style.marginRight="40px";
            passInput.style.marginLeft="40px";
            passInput.style.backgroundColor="rgba(0,0,0,0.4)";
            passInput.style.border="solid 2px #fff";
            passInput.style.fontSize="25pt";
            formDiv.appendChild(passInput);
        
            passInput.style.marginLeft = "18%";
            passInput.style.marginRight = "15%";
            passInput.style.marginTop = "20px";
            passInput.style.width = "475px";
            passInput.style.height = "50px";
            passInput.style.fontSize = "25pt";
        
        var subBut = document.createElement("button");
            formDiv.appendChild(subBut);
            subBut.innerHTML = "SIGN UP";
        
            subBut.style.marginLeft = "18%";
            subBut.style.marginRight = "15%";
            subBut.style.marginTop = "20px";
            subBut.style.padding = "10px";
            subBut.style.width = "475px";
            subBut.style.height = "50px";
            subBut.style.fontSize = "25pt";
        
            subBut.onclick = function () {
                document.body.removeChild(formDiv);
            }
      
   /*
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
            
            
    */        
    };
};
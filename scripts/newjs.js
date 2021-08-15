var donationDrop = false;
        
        var staffDrop = false;
       
        var childDrop = false;
        
        var labourDrop = false;
        Functionality('donation', donationDrop);
        Functionality('staff', staffDrop);
        Functionality('child', childDrop);
        Functionality('labour', labourDrop);

        function Functionality(element,state){
            document.getElementById(element).addEventListener('click',()=>{
            if(!state){
                if(element == "labour"){
                    document.getElementById(element+"menu").style.height = '75px';
                }else {
                    document.getElementById(element+"menu").style.height = '50px';
                

                }
                state = true;
            }else{
                document.getElementById(element+"menu").style.height = '0px';
                state = false;
            }
            
        });
        }
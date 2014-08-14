$(document).ready(function(){
        $("#mineForm").validate({
            
            "rules" : {
                "number" :{
                    "minlength":1,
                    "maxlength":8,
                    "required" : true,
                    "number": true
                 },
                 "name" :{
                    "minlength":2,
                    "maxlength":100,
                    "required" : true
                 },
                 "last_name" :{
                    "minlength":2,
                    "maxlength":150,
                    "required" : true
                 },
                 "email" :{
                    "required" : true,
                     "email": true
                 },
                 "adress" :{
                    "maxlength":250
                 },
                 "city" :{
                    "maxlength":150
                 },
                 "country" :{
                    "maxlength":100
                 }
             
            }
        });

});//end DOM                      

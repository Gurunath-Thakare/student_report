let eng = document.getElementById('eng');
let hin = document.getElementById('hin');
let math = document.getElementById('math');
let sci = document.getElementById('sci');
let his = document.getElementById('his');
let geo = document.getElementById('geo');
let stu_id = document.getElementById('studentid');
let fname = document.getElementById('fname');
let lname = document.getElementById('lname');
let remark = document.getElementById('remark');
let flag = 1;

function validate(){

    if(eng.value == "" ){
        document.getElementById('eng_error').innerHTML = "this field is required";
        flag = 0;
    }    
    else if(eng.value < 1 || eng.value > 100 ){
        document.getElementById('eng_error').innerHTML = "enter valid marks (between 1 to 100)";
        flag = 0;
    }
    else
    {
        document.getElementById('eng_error').innerHTML = "";
        flag = 1;
    }

    if(hin.value == "" ){
        document.getElementById('hin_error').innerHTML = "this field is required";
        flag = 0;
    } 
    else if(hin.value < 1 || hin.value > 100 ){
        document.getElementById('hin_error').innerHTML = "enter valid marks (between to 100)";
        flag = 0;
    }
    else
    {
        document.getElementById('hin_error').innerHTML = "";
        flag = 1;
    }

    if(math.value == "" ){
        document.getElementById('math_error').innerHTML = "this field is required";
        flag = 0;
    } 
    else if(math.value < 1 || math.value > 100 ){
        document.getElementById('math_error').innerHTML = "enter valid marks (between1 to 100)";
        flag = 0;
    }
    else
    {
        document.getElementById('math_error').innerHTML = "";
        flag = 1;
    }

    if(sci.value == "" ){
        document.getElementById('sci_error').innerHTML = "this field is required";
        flag = 0;
    } 
    else if(sci.value < 1 || sci.value > 100 ){
        document.getElementById('sci_error').innerHTML = "enter valid marks (between 1 to 100)";
        flag = 0;
    }
    else
    {
        document.getElementById('sci_error').innerHTML = "";
        flag = 1;
    }

    if(his.value == "" ){
        document.getElementById('his_error').innerHTML = "this field is required";
        flag = 0;
    } 
    else if(his.value < 1 || his.value > 100 ){
        document.getElementById('his_error').innerHTML = "enter valid marks (between 1 to 100)";
        flag = 0;
    }
    else
    {
        document.getElementById('his_error').innerHTML = "";
        flag = 1;
    }

    if(geo.value == "" ){
        document.getElementById('geo_error').innerHTML = "this field is required";
        flag = 0;
    } 
    else if(geo.value < 1 || geo.value > 100 ){
        document.getElementById('geo_error').innerHTML = "enter valid marks (between 1 to 100)";
        flag = 0;
    }
    else
    {
        document.getElementById('geo_error').innerHTML = "";
        flag = 1;
    }

    if(stu_id.value == "" ){
        document.getElementById('id_error').innerHTML = "this field is required";
        flag = 0;
    }
    else
    {
        document.getElementById('id_error').innerHTML = "";
        flag = 1;
    }

    if(fname.value == "" ){
        document.getElementById('first_error').innerHTML = "this field is required";
        flag = 0;
    }
    else
    {
        document.getElementById('first_error').innerHTML = "";
        flag = 1;
    }

    if(lname.value == "" ){
        document.getElementById('last_error').innerHTML = "this field is required";
        flag = 0;
    }
    else
    {
        document.getElementById('last_error').innerHTML = "";
        flag = 1;
    }
    
    if(remark.value.length > 150 ){
        document.getElementById('remark_error').innerHTML = "write upto 150 characters only";
        flag = 0;
    }
    else
    {
        document.getElementById('remark_error').innerHTML = "";
        
    }


    if(flag)
    {
        return true;
    }
    else
    {
        return false;
    }
}

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="form.css">

</head>
<body>
    <div class="container">
        <div class="heading">
            <h1>student information</h1>
        </div>
    
        <form action="result.php" onsubmit="return validate()" method="post" class="form" >
            <div class="main" >
                <div class="inputs">
                    <label >Student ID <span class="require">*</span></label>
                    <input type="number" placeholder="enter student id" name="id" id="studentid" />
                    <p class="error" id="id_error"></p>
                </div>
                <div class="inputs">
                    <label >First Name <span class="require">*</span></label>
                    <input type="text" placeholder="enter first name" name="fname" class="fname" id="fname" />
                    <p class="error" id="first_error"></p>
                </div>
                <div class="inputs">
                    <label >Last Name <span class="require">*</span></label>
                    <input type="text" placeholder="enter last name" name="lname" id="lname"  />
                    <p class="error" id="last_error"></p>
                </div>
                <div class="inputs">
                    <label >Batch/Class :</label>
                    <input type="text" placeholder="enter class" name="class" id="class" />
                </div>
                <div class="inputs">
                    <label >Email address :</label>
                    <input type="email" placeholder="enter email address" name="email" id="email" />
                </div>
                <div class="inputs">
                    <label >Subject Marks <span class="require">*</span></label>
                    <div class="marks">
                        <label>English <span class="require">*</span></label>
                        <input type="number" name="english" id="eng" step="0.01"/>
                        <p class="error" id="eng_error"></p>
                    </div>
                    <div class="marks">
                        <label>Hindi <span class="require">*</span></label>
                        <input type="number" name="hindi" id="hin" step="0.01" />
                        <p class="error" id="hin_error"></p>
                    </div>
                    <div class="marks">
                        <label>Math <span class="require">*</span></label>
                        <input type="number" name="math" id="math" step="0.01"/>
                        <p class="error" id="math_error"></p>
                    </div>
                    <div class="marks">
                        <label>Science <span class="require">*</span></label>
                        <input type="number" name="science" id="sci" step="0.01"/>
                        <p class="error" id="sci_error"></p>
                    </div>
                    <div class="marks">
                        <label>History <span class="require">*</span></label>
                        <input type="number" name="history" id="his" step="0.01"/>
                        <p class="error" id="his_error"></p>
                    </div>
                    <div class="marks">
                        <label>Geography <span class="require">*</span></label>
                        <input type="number" name="geography" id="geo" step="0.01"/>
                        <p class="error" id="geo_error"></p>
                    </div>
                
                </div>
                <div class="inputs">
                    <label >Remarks :</label>
                    <textarea name="remark" id="remark" cols="30" rows="7"></textarea>
                    <p class="error" id="remark_error"></p>
                </div>
                <div class="btn">
                    <input type="submit" name="submit" class="btn-b" id="submit" />
                    <input type="reset" name="reset" class="btn-b" id="reset" />
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>

</body>

</html>
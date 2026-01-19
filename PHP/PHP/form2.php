<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  
 <form method="POST" action="result1.php" enctype="multipoint/form-data">
 	<label>Name :<input type="text" id="name" name="name"></label>
 	<br>
 	
 	<label>Phone :<input type="number" id="phone" name="phone"></label>
 	<br>
    
    <lable>email:<input type="email"id='email'name='email'placeholder='enter email'/>
    </label>
    <br>

    <label>Gender:<input type="radio"id='gender'name='gender'value='male'>male
    <input type="radio"id='gender'name='gender'value='female'>female</label>
    <br>

     <lable>Select Year:<select id='year'name='year'/>
      	<option value='FY'>FY</option>
      	<option value='SY'>SY</option>
      	<option value='TY'>TY</option>
      </select>
      </label><br>

      <label>Select Subject:<input type="checkbox"id='subject'name='subject'value='maths'>maths<br>
      <input type="checkbox"id='subject'name='subject'value='physics'>physics<br>
      <input type="checkbox"id='subject'name='subject'value='chemistry'>chemistry<br>
      </label>
       

	<input type="submit" value="submit">
</form>

</body>
</html>

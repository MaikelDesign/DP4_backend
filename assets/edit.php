<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Form Edit Data</title>
</head>

<body>
<table border=1>
  <tr>
    <td align=center>Form Edit Employees Data</td>
  </tr>
  <tr>
    <td>
      <table>
      <?
      $row['user_id'] = 1;
      $id = 1;
      include "connectDB.php";//database connection
      $order = "SELECT * FROM users 
where user_id='$id'";
      $result = mysqli_query($con, $order);
      $row = mysqli_fetch_array($result);
      ?>
      <form method="post" action="edit_data.php">
      <input type="hidden" name="id" value="<? echo "$row[user_id]"?>">
        <tr>        
          <td>Name</td>
          <td>
            <input type="text" name="name" 
        size="20" value="<? echo "$row[user_firstname]"?>">
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td>
            <input type="text" name="address" size="40" 
          value="<? echo "$row[user_lastname]"?>">
          </td>
        </tr>
        <tr>
          <td align="right">
            <input type="submit" 
          name="submit value" value="Edit">
          </td>
        </tr>
      </form>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
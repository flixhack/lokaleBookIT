

<form action='test7.php' method="post">
      <table border='1'>
         <?php
            $result = $MySQLi_CON->query("SELECT * FROM users");
               echo "<tr>";
               echo "<td colspan='3'>CLASS 1</td>";
               echo "</tr>";
               //All table rows in database presented in html table
               while($row = $result->fetch_array()){
                  echo "<tr>";
                  echo "<td><input type='hidden' name='user_id[]' value='".$row['user_id']."' /></td>";
                  echo "<td>username  :<input type='text' name='username[]' value='".$row['username']."' /></td>";
                  echo "<td>email  :<input type='text' name='email[]' value='".$row['email']."' /></td>";
                  echo "<td>rank  :<input type='number' name='rank[]' value='".$row['rank']."' /></td>";
                  echo "</tr>";
               }
            echo "<input type='submit' name='update' value='UPDATE' />";
         ?>
      <table>
   </form>

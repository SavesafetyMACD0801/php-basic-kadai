<!DOCTYPE html>
<html> 
  <head>
  <meta charset="utf-8">
      <!-- 以下の1行で外部のCSSファイルを読み込みます -->
      <link rel="stylesheet" href="form.css">
      <title>PHP課題</title>


<body> 
  <h2>社員情報入力フォーム</h2>

  <form action = "confirm.php" method = "post"> 
    <table>
      <tr>
        <td>社員名</td>
        <td><input type ="text" name ="employee_name">
      </td>
      </tr>

      <tr>
        <td>年齢</td>
        <td><input type ="text" name ="employee_age">
      </td>

      </tr>

      <tr>
        <td>所属部署</td>
        <td><select name ="department">

          <option value = "開発部">開発部</option>
          <option value = "営業部">営業部</option>
          <option value = "人事部">人事部</option>
          </td>
      </tr>
     


</table>
<input type="submit" value="送信">
  </form>
  
</body>

</html>
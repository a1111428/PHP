<form action = "logincheck1.php" method="POST">

ID:<input type ="text" name = "input_ID" required> <br>
密碼:<input type ="password" name = "input_PWD"><br>

角色:
<select name ="role">
    <option value="student">學生</option>
    <option value="teacher">教師</option>
    <option value="admin">管理者</option>
</select><br>

<button type="submit">登入</button>
</form>

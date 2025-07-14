<html>
    <body>
        <form id="form1" action="c2-receive.php" method="post">
            <p>
			<label for="textfield">姓名:</label>
              <input name="yourname" type="text" id="yourname">
            </p>
            <p>
				
              <input type="radio" name="sex" id="radio" value="male">
              <label for="sex">男 </label>
              <input type="radio" name="sex" id="radio2" value="female">
              <label for="sex">女 </label>
          </p>
            <p>
              <label for="password">密碼:</label>
			<input name="password" type="password" id="password">
            </p>
            <p>
              <label for="email">Email:</label>
              <input type="email" name="email" id="email">
            </p>
            <p>
              <input type="submit" name="submit" id="submit" value="送出">
            </p>
        </form>
    </body>
</html>
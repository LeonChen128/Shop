<?php include_once 'lib/header.php'?>
<?php include_once 'menu1.php'?> 
<script src="js/login1.js"></script>   
<div class="card">
  <form action="login2.php" method="post">
    <h1 style="text-align:center;">會員登入</h1>
      <div style="text-align:center;margin-top:50px">
        <p><input type="text" name="login" placeholder="請輸入帳號..." class="input-text" id="accountInput"></p>
        <p><input type="password" name="password" placeholder="請輸入密碼..." class="input-text" id="passwordInput"></p>
      </div>
    <button type="submit" class="button" onclick="return checkLogin();">登入</button>
  </form>
<div style="text-align:center;margin-top:30px;">
  <spanl>尚未註冊?</spanl>
  <a href="register1.php" class="goRegister">前往註冊</a>  
</div>
<?php include_once 'lib/footer.php'?>

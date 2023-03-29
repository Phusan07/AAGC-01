<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ฟอร์มบันทึกข้อมูล</title>
</head>
<body>
<form method="post" action="addinfo.php" id="addinfo" class="addinfo" autocomplete="off" role="main">
  <h1 class="a11y-hidden">ฟอร์มบันทึกข้อมูล</h1>
  <div>
    <label class="label-email">
      <input type="text" class="text" name="firstname" placeholder="Firstname" tabindex="1" required />
      <span class="required">firstname</span>
    </label>
  </div>
  <div>
    <label class="label-email">
      <input type="text" class="text" name="lastname" placeholder="Lastname" tabindex="1" required />
      <span class="required">lastname</span>
    </label>
  </div>
  <div>
    <label class="label-email">
      <input type="email" class="text" name="email" placeholder="Email" tabindex="1" required />
      <span class="required">Email</span>
    </label>
  </div>

  <div>
    <label class="label-password">
      <input type="tel" class="tel" name="tel" placeholder="tel" tabindex="2" required />
      <span class="required">tel</span>
    </label>
  </div>
  <input type="submit" value="Log In" />
 
  <figure aria-hidden="true">
    <div class="person-body"></div>
    <div class="neck skin"></div>
    <div class="head skin">
      <div class="eyes"></div>
      <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="ears"></div>
    <div class="shirt-1"></div>
    <div class="shirt-2"></div>
  </figure>
</form>
</body>
</html>
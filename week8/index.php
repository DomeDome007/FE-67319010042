<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="func.js"></script>
</head>
<body>
    <div class="container">
        <div class="select_opt" >
            <button onclick="stdform()">นักเรียน</button>
            <button onclick="teaform()">ครู</button>
            <button onclick="regform()">สมัครสมาชิก</button>
        </div>
        <div class="form-1 hide" id="stdform">
            <form action="" method="get">
                <p>ฟอร์มลงชื่อเข้าใช้ของนักเรียน</p>
                <input type="text"name="username"placeholder="ชื่อผู้ใช้นักเรียน" id="">
                <br>
                <input type="password" name="password"placeholder="รหัสผ่าน" id="">
                <br>
                <input type="submit"value="ลงชือ่เข้าใช้">
            </form>
        </div>
        <div class="form-2 hide" id="teaform">
            <form action="" method="get">
                <p>ฟอร์มลงชื่อเข้าใช้ของครู</p>
                <input type="text"name="username"placeholder="ชื่อผู้ใช้ครู" id="">
                <br>
                <input type="password" name="password"placeholder="รหัสผ่าน" id="">
                <br>
                <input type="submit"value="ลงชือเข้าใช้">
            </form>
        </div>
        <div class="form-3 hide" id="regform">
            <form action="" method="get">
                <p>ฟอร์มสมัครสมาชิก</p>
               <!-- 1.ชื่อ-นามสกุล
                2.เพศ
                3.อายุ
                4.username
                5.password
                6.re-password -->
                <input type="text"name="fullname"placeholder="ชื่อ-สกุล" id="">
                <br>
                เพศ:
                <input type="radio" name="gender=" id="ชาย">ชาย
                <input type="radio" name="gender" id="หญิง">หญิง
                <br>
                <input type="number"name="username"placeholder=อายุ>
                <br>
                <input type="text"name="username"placeholder=ชื่อผู้ใช้>
                <br>
                <input type="password"name="password"placeholder=รหัสผ่าน>
                <br>
                <input type="password"name="re-password"placeholder=ยืนยันรหัสผ่าน>
                <br>
                <input type="submit"name="ลงชื่อเข้าใช้"placeholder=>
                <br>
                
            </form>
        </div>
    </div>
</body>
</html>
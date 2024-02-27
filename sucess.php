<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .one-div {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 30%;
    left: 40%;
  width: 300px;
  height: 400px;
  background: linear-gradient(-45deg, rgb(9, 16, 109) ,  rgba(0,255,239,1));
  border-radius: 20px;
  box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
  transition: 0.5s ease;
}

.one-div::after {
  content: "Login successfully";
  font-size: 40px;
  color: white;
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%,-50%);
  font-weight: bold;
  text-shadow: 1px 1px 4px rgb(0,0,0);
  transition: .3s;
  transition-duration: 1s;
}

.one-div:hover {
  scale: 1.1;
  border-radius: 20px 80px;
  box-shadow: 11px 11px 25px rgba(0, 0, 0, 0.5);
}

.one-div:hover::after {
  content: "THANKS";
  color: aqua;
}
  
</style>
</head>
  <body>
  <div class="one-div"></div>
</body>
</html>
    
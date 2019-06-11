<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost","root","","refugee");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL :".mysqli_connect_error();
}
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Donate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="donate.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>
<body style="background-color:black;">
        <nav class="navbar navbar-inverse" style="padding:6px;">
        <div class="navbar-header">
         <a class="navbar-brand" href="index.html">SaveRefugees</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.html">Home</a></li>
      <li ><a href="camp.html">Camps</a></li>
      <li class="active"><a href="donate.php">Donations</a></li>
        </ul>
        </nav>
<div class="container">
      <img src="picture5.jpg" alt="hand" style="width:100%;">
      <div class="content">
        <h2><style="text-align:center;font-Style:Impact, Charcoal, sans-serif"/>
            Remember that the happiest people are not those getting more, but those giving more</h2>
            <br>
        <button class= "btn btn-primary btn-lg" onclick="show()" style="width:200px;margin: 0 auto;">Donate Now</button>
      </div>
  </div>
<br/>
<br>
<br>
<div id="target" style="display:none">
        <form class="" action="donate.php" method="post">
        <div class="container" style="margin-left: 35%;">
             <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="name">
                            NAME</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                required autofocus name="name" required />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <label for="org">
                            Organization</label>
                        <div class="input-group">
                    <select name="org" class="form-control" style="border-radius: 4px;width: 152%;" required>
                <option name = "org" class="form-control" disabled>Select an Organisation</option>
                        <?php
                        $get_org = "select name from camps";
                        $run_org = mysqli_query($con,$get_org);
                        while($row_org=mysqli_fetch_array($run_org)){
                        $org = $row_org['name'];
                        echo $org;
                        ?>
                        <option id="org" value="<?php echo $org; ?>"><?php echo $org; ?></option>
                        <?php
                             }
                        ?>
                    </select>
                    </div>
                        <label for="amount">
                            Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="amount" placeholder="Enter Amount"
                                required autofocus name="amount" required />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                    </div>
                        <label for="country">
                            Country</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="country" placeholder="Enter Country"
                                required autofocus name="country" required />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-left: 35%">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="card">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="card" name="card" placeholder="Valid Card Number"
                                required autofocus required name="card" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <select  class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                        <option value="">11</option>
                                        <option value="">12</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <select  class="form-control">
                                        <option value="">20</option>
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                        <option value="">27</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" name="cv" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <br/>
            <input type="submit" name="pay" class="btn btn-success btn-lg btn-block" value="Pay">
        </div>
</div>
 </form>
</div>
<br>
<hr>
<footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">About us</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Whatsapp</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Developer</a></li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#">© 2019 SaveRefugees</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

    </body>
   <script type="text/javascript">
      function show() {
                  document.getElementById('target').style.display='block';
                  window.scrollTo(0,document.body.scrollHeight);
    }
     </script>
</html>
<?php
if(isset($_POST['pay'])){
    $name = $_POST['name'];
    $country = $_POST['country'];
    $amount = $_POST['amount'];
    $org = $_POST['org'];
    $cardNo = $_POST['card'];
    if(!luhn_check($cardNo)){
        echo "<script>alert('Enter valid card details')</script>";
        echo "<script>window.open('donate.php','_self')</script>";
    }
    $month =$_POST['month'];
    if(($month>0 && $month<13)){
        echo "<script>alert('Enter valid card details')</script>";
        echo "<script>window.open('donate.php','_self')</script>";
    }
    $cv =$_POST['cv'];
    if(!strlen($cv)==3){
        echo "<script>alert('Enter valid card details')</script>";
        echo "<script>window.open('donate.php','_self')</script>";
    }
    $insert_cus="insert into donar
    (donar_name,organisation,amount,country)
    values('$name','$org','$amount','$country')";

    $run_insert = mysqli_query($con,$insert_cus);
    if($run_insert){
            echo "<script>alert('Payment Successfull')</script>";
    }
    else{
        echo "<script>alert('Payment not Successfull')</script>";
    }
}
function luhn_check($number) {
  // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
  $number=preg_replace('/\D/', '', $number);
  // Set the string length and parity
  $number_length=strlen($number);
  $parity=$number_length % 2;
  // Loop through each digit and do the maths
  $total=0;
  for ($i=0; $i<$number_length; $i++) {
    $digit=$number[$i];
    // Multiply alternate digits by two
    if ($i % 2 == $parity) {
      $digit*=2;
      // If the sum is two digits, add them together (in effect)
      if ($digit > 9) {
        $digit-=9;
      }
    }
    // Total up the digits
    $total+=$digit;
  }
  // If the total mod 10 equals 0, the number is valid
  return ($total % 10 == 0) ? TRUE : FALSE;
}
?>

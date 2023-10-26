<!doctype>
<html>
<head>
  <!-- form for customer details -->
</head>
<body>
  <?php
  include "header.php";
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="well">
                <div class="row">
                    <div class="form-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2><center>Your details</center></h2></div>
                        </div>
                    </div>
                </div>
                <body style="background-color: grey;"></body>
                <form action="order_checkout_action.php" method="get">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First name</label>
                            <input type="text"class="form-control"name="first_name"required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last name</label>
                            <input type="text"class="form-control"name="last_name"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Street address</label>
                            <input type="text"class="form-control"name="street_address"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>City</label>
                            <select class="form-control" name="city">
                                <option>Kolkata</option>
                                <option>Mumbai</option>
                                <option>Delhi</option>
                                <option>Bangalore</option>
                                <option>Hyderabad</option>
                                <option>Surat</option>
                                <option>Pune</option>
                                <option>Jaipur</option>
                                <option>Kanpur</option>
                                <option>Nagpur</option>
                                <option>Indore</option>
                                <option>Thane</option>
                                <option>Agra</option>
                                <option>Rajkot</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Zipcode</label>
                            <input type="text"class="form-control"name="zipcode"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Country</label>
                            <input type="text"class="form-control"name="country" value="India"readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Contact Number</label>
                            <input type="number"class="form-control" maxlength="11" name="contact_number"required >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email"class="form-control"name="email"required>
                        </div>
                         <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="Password"class="form-control"name="password"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn pull-right">
                        <button type="submit"  class="btn btn-primary btn-lg">Place an order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>


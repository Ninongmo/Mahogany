<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Information</title>
    <link rel="stylesheet" type="text/css" href="mahoganycharm.css">
</head>

<body>
    <header>
        <div class="header">
            <img src="logo pic/Mahogany.webp" alt="Logo Image"/>
        <h1>Mahogany</h1>
        </div>
        <hr>
    </header>

    <div class="links">
            <a href="index.html">Products</a>
            <a href="products-gallery.html">Products Gallery</a>
            <a href="company.html">Company</a>
            <a href="log-in.php">Login</a>
            <a href="contactus.html">Contact Us</a>
    </div>

    <br><br><br>

    <div class="billing-css">

        <?php
        // Retrieve values from the URL
        $transaction_number = $_GET['transaction_number'];
        $total_purchase = $_GET['total_purchase'];
        $product_name = $_GET['product_name'];
        $product_price = $_GET['product_price'];
        $quantity = $_GET['quantity'];
        ?>
        <form method="POST" action="billing-process.php" >
        <table>
            <tr>
                <td colspan="2"><h2>Billing Information</h2></td>
            </tr>
            <tr>
                <td class="align-center-billing"><h3>Country</h3></td>
            </tr>
            <tr>
                <td class="align-right-billing">Country:&nbsp;&nbsp;</td>
                <td>
                    <select name="country">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Angola">Angola</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Buhtan">Buhtan</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvado">El Salvador</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Malta">Malta</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Korea">North Korea</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Thailand" Thailand>Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="align-center-billing"><h3>Card Information</h3></td>
            </tr>
            <tr>
                <td class="align-right-billing">Transaction Number:&nbsp;&nbsp;</td>
                <td><input type="text" name="transcation-number" value="<?php echo $_GET['transaction_number']; ?>" readonly></td>
            </tr>
            <tr>
                <td class="align-right-billing">Total Purchase:&nbsp;&nbsp;</td>
                <td><input type="text" name="total-purchase" value="<?php echo $_GET['total_purchase']; ?>" readonly></td>
            </tr>
            <tr>
                <td class="align-right-billing">First Name:&nbsp;&nbsp;</td>
                <td><input type="text" name="first-name"></td>
            </tr>
            <tr>
                <td class="align-right-billing">Middle Name:&nbsp;&nbsp;</td>
                <td><input type="text" name="middle-name"></td>
            </tr>
            <tr>
                <td class="align-right-billing">Last Name:&nbsp;&nbsp;</td>
                <td><input type="text" name="last-name"></td>
            </tr>
            <tr>
                <td class="align-right-billing">Suffix:&nbsp;&nbsp;</td>
                <td><input type="text" name="suffix"></td>
            </tr>
            <tr>
                <td class="align-right-billing">Username:&nbsp;&nbsp;</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td class="align-right-billing">Password:&nbsp;&nbsp;</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td class="align-right-billing">Address:&nbsp;&nbsp;</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td class="align-right-billing">Card Type:&nbsp;&nbsp;</td>
                <td><select name="card">
                    <option value="mastercard">Mastercard</option>
                    <option value="visa">Visa</option>
                    <option value="bpi">BPI</option>
                    <option value="metrobank">Metrobank</option>
                    <option value="unionbank">UnionBank</option>
                </select></td>
            </tr>
            <tr>
                <td class="align-right-billing">Card Number:&nbsp;&nbsp;</td>
                <td><input type="text" name="card-number"></td>
            </tr>
            <tr>
                <td class="align-right-billing">Expiration Date:&nbsp;&nbsp;</td>
                <td>
                    <select name="expiry-card-month">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select name="expiry-card-year">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>
            </td>
            </tr>
            <tr>
                <td class="align-center-billing"><h3>Contact Information</h3></td>
            </tr>
            <tr>
                <td class="align-right-billing">Email Address:&nbsp;&nbsp;</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td class="align-right-billing">Contact Number:&nbsp;&nbsp;</td>
                <td><input type="text" name="contact-number" required></td>
            </tr>
            </div>
            <tr>
                <td></td>
                <td>
                <input type="hidden" name="transaction_number" value="<?php echo $transaction_number; ?>">
                <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                <input type="hidden" name="total_purchase" value="<?php echo $_GET['total_purchase']; ?>">    
                <input type="submit" value="Submit"></a>
                <a href="index.html"><input type="button" value="Cancel"></a></td>
            </tr> 
        </table>
        </form>
    </div>

    <br><br><br>

    <hr>
    <div class="footer">
        <p>&copy; 2025 John Emmanuell Sabuero. All Rights Reserved.</p>
    </div>
</body>
</html>
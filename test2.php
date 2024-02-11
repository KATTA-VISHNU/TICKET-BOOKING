<!DOCTYPE html>
<html>
<head>
    <title>Modal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script> 
 <style>
  .modal {
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(72, 70, 192, 0.4);
            overflow: auto;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            border-radius: 5px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .modal-header h2 {
            margin: 0;
        }

        .modal-button-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        
        .modal-button-row button {
            padding: 8px 16px;
        }

        .car{
            box-shadow: inset 0 0 20px 0 rgba(0,0,0,0.9),0 0 20px 0 rgba(0,0,0,0.9);

        }
 
 </style>
 <!-- The Modal -->
 <form>
 <div id="myModal" class="modal bg-info">
        <div class="modal-content">
            <div class="modal-header">
                <h2>FLAT OFFERS FOR COUPONS</h2>
                <span class="close">&times;</span>
            </div>
                <div class="form-group">
                    <label for="mobile">Coupon Code:</label>
                    <input type="text" id="coupon" name="coupon" placeholder="Enter your coupon code..." required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number..." required>
                </div>
                <div class="modal-button-row">
                    <button type="button" class="skipBtn" data-dismiss="modal">Skip</button>
                    <button type="submit" class="submitBtn">Submit</button>
                </div>
                <!--
                <div class="error-message" style="display: none; color: red; margin-top: 10px;">Coupon adding failed. Please enter a valid coupon code and mobile number.</div>
                <div class="invalid-mobile-message" style="display: none; color: red; margin-top: 5px;">Mobile number is invalid. Please enter a 10-digit number.</div>
                <div class="success-message" style="display: none; color: green; margin-top: 10px;">Coupon added successfully!</div>
    -->
            </div>
    </div>
    </form>

    <script>
        /*
        
        const modal = document.getElementById("myModal");
        const modalForm = document.getElementById("modal-form");
        const submitButton = document.getElementById("submitBtn");
        const skipButton = document.querySelector(".skipBtn");
        const closeButton = document.querySelector(".close");
        const successMessage = document.querySelector(".success-message");
        const errorMessage = document.querySelector(".error-message");
        const invalidMobileMessage = document.querySelector(".invalid-mobile-message");

        submitButton.addEventListener("click", e=> {
            modal.style.display = "block";
            e.preventDefault();
        });

        closeButton.addEventListener("click", function() {
            modal.style.display = "none";
            successMessage.style.display = "none";
            errorMessage.style.display = "none";
            invalidMobileMessage.style.display = "none";
        });

        skipButton.addEventListener("click", function() {
            modal.style.display = "none";
            successMessage.style.display = "none";
            errorMessage.style.display = "none";
            invalidMobileMessage.style.display = "none";
        });

        modalForm.addEventListener("submit", function(event) {
            event.preventDefault();

            const couponInput = document.getElementById("coupon");
            const couponValue = couponInput.value.trim();
            const mobileInput = document.getElementById("mobile");
            const mobileValue = mobileInput.value.trim();

            const couponRegex = /^[a-zA-Z]{6}\d{4}$/; // Alphabets (6) followed by Digits (4)

            if (!couponRegex.test(couponValue) || mobileValue.length !== 10) {
                errorMessage.style.display = "block";
                successMessage.style.display = "none";
                invalidMobileMessage.style.display = mobileValue.length !== 10 ? "block" : "none";
            } else {
                errorMessage.style.display = "none";
                successMessage.style.display = "block";
                invalidMobileMessage.style.display = "none";
                modal.style.display="none";
            }
        });
        */
    </script>
    </body>
    </html>



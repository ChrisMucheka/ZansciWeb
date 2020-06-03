
<?php
/*
 * Copyright (c) 2019 PayGate (Pty) Ltd
 *
 * Author: App Inlet (Pty) Ltd]
 * URI: https://github.com/PayGate/PayWeb_Standalone_Payment_Portal
 * Version: 1.0.0
 *
 * Released under the GNU General Public License
 */

include_once "includes/header.php";

/**
 * Checks for return from PayGate and handles it
 */
if ( isset( $_POST ) && isset( $_POST['TRANSACTION_STATUS'] ) ) {
    include_once 'result.php';
    exit;
}
// Prepare the sticky form.
if ( isset( $_GET['tryagain'] ) ) {
    (float) $amount = isset( $_SESSION['amount'] ) ? number_format( (float) $_SESSION['amount'] / 100, 2, '.', '' ) : '';
    $email          = isset( $_SESSION['email'] ) ? $_SESSION['email'] : '';
    $reference      = isset( $_SESSION['reference'] ) ? $_SESSION['reference'] : '';
} else {
    $amount    = '';
    $email     = '';
    $reference = '';
}
$amount=$_GET['amount'];
$email=$_GET['email'];
$reference=$_GET['reference'];
$today_formatted = (string) $today->format( 'Y-m-d H:i:s' );

echo <<<EOT
                <h2>Create Transaction</h2>
                    <form action="redirect" method="post" name="paygate_initiate_form">
                        <div class="form-group">
                            <label id="form-labels" for="AMOUNT">Amount</label>
                            <input class="form-control" type="number" id="AMOUNT" placeholder="0.00" readonly required name="AMOUNT" min="5"
                                   value="$amount" step="0.01" title="AMOUNT" pattern="^\d+(?:\.\d{1,2})?$" onblur="
                this.style.border=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'1px solid red'
                ">
                        </div>
                        <div class="form-group">
                            <label id="form-labels" for="EMAIL">Email</label>
                            <input class="form-control" type="email" name="EMAIL" id="EMAIL" value="$email" required readonly/>
                        </div>
                        <div class="form-group">
                            <label id="form-labels" for="REFERENCE">Reference</label>
                            <input class="form-control" type="text" name="REFERENCE" id="REFERENCE" value="$reference" required readonly/>
                        </div>
                        <input type="hidden" name="CURRENCY" id="CURRENCY" value="ZAR" hidden/>
                        <input type="hidden" name="RETURN_URL" id="RETURN_URL" value="$url/result"/>
                        <input type="hidden" name="TRANSACTION_DATE" id="TRANSACTION_DATE" value="$today_formatted"/>
                        <input type="hidden" name="LOCALE" id="LOCALE" value="en-za" hidden/>
                        <input type="hidden" name="COUNTRY" id="COUNTRY" value="ZAF" hidden/>
                        <input type="submit" name="btnSubmit" class="btn btn-success btn-block" id="check-sum" value="Pay Now"/>
                        <input type="hidden" name="submitted" value="TRUE"/>

                    </form>
EOT;
include_once "includes/footer.php";
















<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style type="text/css" rel="stylesheet" media="all">
        /* Media Queries */
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
		.report-table {
		    border-collapse: collapse;
		    width: 100%;
		    font-weight: 300;
		    margin-bottom: 10px;
		    font-size: 85%;
		}

		.report-table tr th, .report-table tr td {
		    text-align: left;
		    padding: 8px;
		      font-weight: 300;
		        border: 1px solid #ddd;
    text-align: center;
		}

		.report-table tr:nth-child(even){background-color: #f2f2f2}

		.report-table tr th {
		    background-color: #34495e;
		    color: white;
		}

    </style>
</head>

<?php

$style = [
    /* Layout ------------------------------ */

    'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
    'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',

    /* Masthead ----------------------- */

    'email-masthead' => 'padding: 25px 0; text-align: center;',
    'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',

    'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
    'email-body_inner' => 'width: auto; max-width: 800px; margin: 0 auto; padding: 0;',
    'email-body_cell' => 'padding: 35px;',

    'email-footer' => 'width: auto; max-width: 800px; margin: 0 auto; padding: 0; text-align: center;',
    'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',

    /* Body ------------------------------ */

    'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
    'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',

    /* Type ------------------------------ */

    'anchor' => 'color: #3869D4;',
    'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
    'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
    'paragraph-sub' => 'width:800px; margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
    'paragraph-center' => 'text-align: center;',

    /* Buttons ------------------------------ */

    'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',

    'button--green' => 'background-color: #22BC66;',
    'button--red' => 'background-color: #dc4d2f;',
    'button--blue' => 'background-color: #3869D4;',
];
?>

<?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>

<body style="{{ $style['body'] }}">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td style="{{ $style['email-wrapper'] }}" align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <!-- Logo -->
                    <tr>
                        <td style="{{ $style['email-masthead'] }}">
                         		  <a style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" href="">
                         		Asset Inventory
                         		</a>

                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="{{ $style['email-body'] }}" width="100%">
                            <table style="{{ $style['email-body_inner'] }}" align="center" width="800" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="{{ $fontFamily }} {{ $style['email-body_cell'] }}">
                                        <!-- Greeting -->
                                        <h1 style="{{ $style['header-1'] }}">
                                           Good day!
                                        </h1>

                                        <!-- Intro -->
                                      
                                            <p style="{{ $style['paragraph'] }}">
                                                Kindly see the table below for today's trucking monitoring status report to this day.
                                            </p>


                                            <table class="report-table" width="100%">
											  <tr>
											    <th>Laptop Name</th>
											    <th>Serial</th>
                                                <th>IT Code</th>
                                                <th>Borrower</th>
                                                <th>Loan Date</th>
											    <th>Date Return</th>
											  </tr>

                                           
											  <tr>
											    <td>
                                                 @foreach($loan->laptops as $laptop) 
                                                {{$laptop->model}}
                                                @endforeach
                                                </td>
											    <td>
                                                 @foreach($loan->laptops as $laptop) 
                                                {{$laptop->serial}}
                                                @endforeach
                                                </td>
											    <td>
                                                 @foreach($loan->laptops as $laptop) 
                                                {{$laptop->it_code}}
                                                @endforeach
                                                </td>
											    <td>
                                                     {{$loan->user_loan}}
                                                </td>
											    <td>
                                                     {{$loan->from_date}}
                                                </td>
                                                <td>
                                                    {{$loan->to_date}}
                                                </td>
											  </tr>
                            
											</table>
                                       
                                    

                                        <!-- Salutation -->
                                        <p style="{{ $style['paragraph'] }}">
                                            Regards,<br>Trucking Monitoring
                                        </p>

                                        <!-- Sub Copy -->
                                       
                                            <table style="{{ $style['body_sub'] }}">
                                                <tr>
                                                    <td style="{{ $fontFamily }}">
                                                        <p style="{{ $style['paragraph-sub'] }}">
                                                           This is a auto generate email, If you’re having trouble contact the administrator.
                                                         </p>
                                                    
                                                    </td>
                                                </tr>
                                            </table>
                                       
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td>
                            <table style="{{ $style['email-footer'] }}" align="center" width="800" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}">
                                        <p style="{{ $style['paragraph-sub'] }}">
                                            &copy; {{ date('Y') }}
                                            All rights reserved.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

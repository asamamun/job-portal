<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: center; color: #777;">
    <div style="max-width: 800px; margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); font-size: 16px; line-height: 24px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #555;">
        <table cellpadding="0" cellspacing="0" style="width: 100%; line-height: inherit; text-align: left; border-collapse: collapse;">
            <tr class="top">
                <td colspan="2" style="padding-bottom: 20px;">
                    <table style="width: 100%;">
                        <tr>
                            <td style="font-size: 45px; line-height: 45px; color: #333;">
                                <h2 style="margin: 0; font-size: 45px; line-height: 45px;">Company Name</h2>
                            </td>
                            <td style="text-align: right;">
                                Invoice #: 123<br>
                                Created: June 30, 2024<br>
                                Due: July 30, 2024
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2" style="padding-bottom: 40px;">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                Company Name, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, TX 12345
                            </td>
                            <td style="text-align: right;">
                                Customer Name<br>
                                customer@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td style="background: #eee; border-bottom: 1px solid #ddd; font-weight: bold;">
                    Payment Method
                </td>
                <td style="background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; text-align: right;">
                    Check #
                </td>
            </tr>
            <tr class="details">
                <td style="padding-bottom: 20px;">
                    Check
                </td>
                <td style="padding-bottom: 20px; text-align: right;">
                    1000
                </td>
            </tr>
            <tr class="heading">
                <td style="background: #eee; border-bottom: 1px solid #ddd; font-weight: bold;">
                    Item
                </td>
                <td style="background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; text-align: right;">
                    Price
                </td>
            </tr>
            <tr class="item">
                <td style="border-bottom: 1px solid #eee;">
                    Website design
                </td>
                <td style="border-bottom: 1px solid #eee; text-align: right;">
                    $300.00
                </td>
            </tr>
            <tr class="item">
                <td style="border-bottom: 1px solid #eee;">
                    Hosting (3 months)
                </td>
                <td style="border-bottom: 1px solid #eee; text-align: right;">
                    $75.00
                </td>
            </tr>
            <tr class="item last">
                <td style="border-bottom: none;">
                    Domain name (1 year)
                </td>
                <td style="border-bottom: none; text-align: right;">
                    $10.00
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td style="border-top: 2px solid #eee; font-weight: bold; text-align: right;">
                   Total: $385.00
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

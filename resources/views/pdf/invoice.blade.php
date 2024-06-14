<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

<div style="max-width: 800px; margin: 20px auto; padding: 20px; background: #fff; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <div style="text-align: center; margin-bottom: 40px;">
        <h1 style="margin: 0; color: #333; font-size: 30px;">INVOICE</h1>
        <p style="margin: 0; color: #777; font-size: 16px;">{{config('app.name')}}</p>
        <p style="margin: 0; color: #777; font-size: 14px;">Rupayan Center, (3rd Floor), Mohakhali-1212, Dhaka, Bangladesh</p>
        <p style="margin: 0; color: #777; font-size: 14px;">01724-870388</p>
        <p style="margin: 0; color: #777; font-size: 14px;">raisulmct@gmail.com</p>
    </div>

    <div style="margin-bottom: 40px;">
        <p style="margin: 0; color: #333; font-size: 14px;"><strong>Invoice Number:</strong> <i>4545235</i></p>
        <p style="margin: 0; color: #333; font-size: 14px;"><strong>Date:</strong> {{ date("l jS \of F Y h:i:s A") }}</p>
    </div>

    <div style="margin-bottom: 40px;">
        <p style="margin: 0; color: #333; font-size: 14px;"><strong>Bill To:</strong></p>
        <p style="margin: 0; color: #777; font-size: 14px;"><b>Name : </b> fasfa</p>
        <p style="margin: 0; color: #777; font-size: 14px;"><b>Address : </b> cvsdvrgerg}</p>
        <p style="margin: 0; color: #777; font-size: 14px;">sdferwerwe</p>
    </div>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 40px;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left; background-color: #f8f8f8; color: #333; font-size: 14px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left; background-color: #f8f8f8; color: #333; font-size: 14px;">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #ddd; padding: 10px; color: #555; font-size: 14px;">fsdfsdfs</td>
                <td style="border: 1px solid #ddd; padding: 10px; color: #555; font-size: 14px;">gfdgsgsgf</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td style="border: 1px solid #ddd; padding: 10px; text-align: right; color: #333; font-size: 14px;"><strong>Subtotal:</strong></td>
                <td style="border: 1px solid #ddd; padding: 10px; color: #555; font-size: 14px;">dsfsdfsd</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 10px; text-align: right; color: #333; font-size: 14px;"><strong>Discount:</strong></td>
                <td style="border: 1px solid #ddd; padding: 10px; color: #555; font-size: 14px;">dfsdfs</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 10px; text-align: right; color: #333; font-size: 14px;"><strong>Online Charge (10%):</strong></td>
                <td style="border: 1px solid #ddd; padding: 10px; color: #555; font-size: 14px;">erterter</td>
            </tr>
        </tfoot>
    </table>

    <div style="text-align: center; color: #555; margin-bottom: 40px;">
        <p style="font-size: 14px;"><strong>Payment Instructions:</strong></p>
        <p style="font-size: 14px;">Please make checks payable to {{config('app.name')}}.</p>
    </div>

    <div style="text-align: center; color: #555; margin-top: 40px;">
        <p style="font-size: 14px;">Thank you for your business!</p>
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recharge->transaction_id }}</title>
</head>
<body style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: center; color: #777;">
    <div style="max-width: 800px; margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); font-size: 16px; line-height: 24px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #555;">
        <table cellpadding="0" cellspacing="0" style="width: 100%; line-height: inherit; text-align: left; border-collapse: collapse;">
            <tr class="top">
                <td colspan="2" style="padding-bottom: 20px;">
                    <table style="width: 100%;">
                        <tr>
                            <td style="font-size: 45px; line-height: 45px; color: #333;">
                                <h2 style="margin: 0; font-size: 45px; line-height: 45px;">{{Settings::get()->title}}</h2>
                            </td>
                            <td style="text-align: right;">
                                <p>TID #: {{ $recharge->transaction_id }}</p>
                                <p>Created: {{ Carbon\Carbon::parse($recharge->created_at)->format('d M Y') }}</p>
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
                                <span style="display: block; width: 50%;">
                                    {{Settings::get()->address}}
                                </span>
                            </td>
                            <td style="text-align: right;">
                                {{ $recharge->user->name }}<br>
                                {{ $recharge->user->email }}
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
                    Amount
                </td>
                <td style="padding-bottom: 20px; text-align: right;">
                    {{ $recharge->amount }} tk
                </td>
            </tr>
            <tr class="heading">
                <td style="background: #eee; border-bottom: 1px solid #ddd; font-weight: bold;">
                    Charge
                </td>
                <td style="background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; text-align: right;">
                    Price
                </td>
            </tr>
            <tr class="item last">
                <td style="border-bottom: none;">
                    Online Payment Service
                </td>
                <td style="border-bottom: none; text-align: right;">
                    {{ $recharge->charge }} tk
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td style="border-top: 2px solid #eee; font-weight: bold; text-align: right;">
                   Total: {{ $recharge->amount + $recharge->charge }} tk
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

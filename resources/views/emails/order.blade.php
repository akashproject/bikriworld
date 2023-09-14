<div style="font-family: sans-serif;color: #282828;width: 91%;padding: 20px;box-shadow: 0px 1px 7px 0px #40cba8d6;margin: 10px;border-radius: 10px;" >
    <div style="padding-bottom: 20px;border-bottom: 1px solid #ccc;">
        <img src="http://bikriworld.com/assets/images/logo.png" style="width: 20%;">
    </div>
    <h3> Dear Seller, </h3>
    <p style="margin: 0;"> Thank you for choosing to BikriWorld for your devices. </p>
    <p style="margin: 20px 0;"> We created a Service Number: {{$service_no}} for you, and the ability to track your Devices Status. </p>
    <table style="border: 1px solid #00986b57;margin:30px 0;width:100%">
        <thead>
            <tr style="background: #00986b;color: #fff;">
                <th colspan="2" style="padding: 10px 20px;"> Product Details </th>
            </tr>
        </thead>
        <tbody style="">
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Model Name </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$device_name}} </td>
            </tr>
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Model Configuration </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$variation_type}} </td>
            </tr>
            @if(isset($accessories))
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Additional Accessories </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;">
                    @foreach ($accessories as $accessory)
                        <span >{{ $accessory['name'] }},</span >
                    @endforeach	 
                </td>
            </tr>
            @endif
            @if(isset($age))
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Model Age </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$age}} </td>
            </tr>
            @endif
            @if(isset($condition))
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Model Condition </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$condition}} </td>
            </tr>
            @endif
            @if(isset($questions))
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Model Faults </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;">
                    @foreach ($questions as $question)
                        <span >{{ $question }}, <br></span >
                    @endforeach	 
                </td>
            </tr>
            @endif
        </tbody>
    </table> 
    <table style="border: 1px solid #00986b57;margin:30px 0;width:100%">
        <thead>
            <tr style="background: #00986b;color: #fff;">
                <th colspan="2" style="padding: 10px 20px;"> Order Details </th>
            </tr>
        </thead>
        <tbody style="">
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Order No </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$service_no}} </td>
            </tr>
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Payment Date </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$pickup_schedule}} </td>
            </tr>
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Pickup address </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$pickup_address}},{{$pickup_city}},{{$pickup_state}}- {{$pincode}}  </td>
            </tr>
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Payment Mode </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> {{$payment_mode}} </td>
            </tr>
            <tr>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Amount </td>
                <td style="padding: 10px 20px 10px;font-size: 16px;"> Rs. {{$amount}}/- </td>
            </tr>
        </tbody>
    </table>
    <p>        
        If you have queries, suggestions or just a good discussions. Drop me a message at the support@BikriWorld.in . We hope to see you again!
    </p>
    <p> 
        Team BikriWorld!
    </p>
</div>
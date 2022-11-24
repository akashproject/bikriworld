<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Bikriworld Invoice</title>



  <style type="text/css" media="screen">

    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);

  </style>



  <style type="text/css" media="screen">

    @media screen {

      /* Thanks Outlook 2013! */

      * {

        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;

      }

    }

  </style>



</head>



<body>

<div style="overflow: auto;font-family: monospace;">

    <div style="width: auto;padding: 20px 15px;margin: 15px auto;position: relative;z-index: 5;background: #ccc;">

       <main>

          <div style="position: relative;z-index: 4;background-color:#ffffff">

             <div style="padding: 50px;" id="download_section">

                <header style="padding-bottom: 25px; margin-bottom: 25px;">

                   <div style="display: block;align-items: center!important;justify-content: space-between!important;flex-wrap: wrap;margin-top:12px;margin-left:12px;margin-right:12px;height: 43px;">

                      <div style="width: auto;float: left;">

                        <div style="">
                            <a href="index.html">
                                <img src="https://bikriworld.com/assets/images/logo-thumbnail.png" alt="Invce">
                            </a>
                        </div>

                      </div>

                      <div style="width: auto;float: right;">

                         <h1 style="font-size: 24px;margin-bottom: 5px;">Invoice</h1>

                      </div>

                   </div>

                   <div style="border-bottom: 1px solid #CFD3DC;padding-bottom: 10px;margin-top: 26px;">

                        <div style="display: flex;flex-wrap: wrap;margin-top:12px;margin-left:12px;margin-right:12px;align-items: center!important;justify-content: flex-end!important;">

                        <div style="width: auto;">

                            <p style="margin-bottom: 0;margin: 0 0 18px 0;margin-right: 1.5rem!important;line-height: 1.571;margin-right: 1.5rem!important;"><b>Invoice No: </b>#{{ $service_no ?? '' }}</p>

                        </div>

                        <div style="width: auto;">

                            <p style="margin-bottom: 0;margin: 0 0 18px 0;margin-right: 1.5rem!important;line-height: 1.571;"><b>Date : </b>{{ $recived_at ?? '' }}</p>

                        </div>

                        </div>

                    </div>

                </header>

                <div style="flex-wrap: wrap;margin-top:12px;margin-left:12px;margin-right:12px;justify-content: space-between!important;margin-bottom:1.5rem!important;">
                   <div style="width: auto;float: left;">

                      <div>

                         <b>Invoiced From:</b>

                         <address style="margin-bottom: 0;font-style: normal;">Team BikriWorld.<br><br>service@bikriworld.com</address>

                      </div>

                   </div>

                   <div style="width: auto;">

                      <div style="text-align: right;">

                         <b>Pay To:</b>

                         <address style="margin-bottom: 0;font-style: normal;">{{ $name ?? '' }}<br>{{ $pickup_address ?? '' }}</address>

                      </div>

                   </div>

                </div>

                <table style="border: none;margin-bottom: 25px;margin: 0 0 1.5em;width: 100%;border-collapse: collapse;border-spacing: 0;">

                    <thead style="border-color: inherit;border-style: solid;border-width: 0;">
                        <tr style="text-align: left;border-bottom: none;position: relative;border-color: inherit;border-style: solid;border-width: 0;">
                           <th style="border-radius: 99px 0 0 99px;background-color:#DDE2EE;padding: 11px 20px;">Unique Id</th>
                           <th style="background-color:#DDE2EE;padding: 11px 20px;">Item</th>
                           <th style="background-color:#DDE2EE;padding: 11px 20px;">Price</th>
                           <th style="background-color:#DDE2EE;padding: 11px 20px;border-radius: 0 99px 99px 0;">Total</th>
                        </tr>
                    </thead>

                    <tbody>

                      <tr style="border-bottom: none;position: relative;border-color: inherit;border-style: solid;border-width: 0;">
                        <td style="border-radius: 99px 0 0 99px;background-color:#f2f2f2;padding: 11px 20px;border: none;">
                           <b>{{ $product_unique_no ?? '' }}</b>
                        </td>
                        <td style="background-color:#f2f2f2;padding: 11px 20px;border: none;">
                           <b>{{ $device_name ?? '' }}</b>
                        </td>
                        <td style="background-color:#f2f2f2;padding: 11px 20px;border: none;">
                           <b>{{ $amount ?? '' }}</b>
                        </td>
                        <td style="background-color:#f2f2f2;padding: 11px 20px;border: none;border-radius: 0 99px 99px 0;">
                           <b>{{ $amount ?? '' }}</b>
                        </td>
                      </tr>

                    </tbody>

                </table>

                <div style="flex-wrap: wrap;margin-top:12px;margin-left:12px;margin-right:12px;justify-content: space-between!important;margin-bottom:1.5rem!important;height: 120px;">
                  <div style="width: auto;float: left;">
                     <div style="">
                        
                     </div>
                  </div>
                  <div style="width: auto;float: right;">
                     <table style="border: none;margin-bottom: 0;margin-top: -4px;margin: 0 0 1.5em;width: 100%;border-collapse: collapse;border-spacing: 0;">
                        <tbody style="border-color: inherit;border-style: solid;border-width: 0;">
                           <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                              <th style="border: none;padding: 4px 20px;">Sub Total:</th>
                              <td style="border: none;padding: 4px 20px;text-align: right;">Rs. {{ $amount ?? '' }}/-</td>
                           </tr>
                           <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                              <th style="border: none;padding: 4px 20px;">Tax:</th>
                              <td style="border: none;padding: 4px 20px;text-align: right;">Rs. 00.00/-</td>
                           </tr>
                           <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                              <th style="border: none;padding: 4px 20px;">Discount:</th>
                              <td style="border: none;padding: 4px 20px;text-align: right;">Rs. 00.00/-</td>
                           </tr>
                           <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                              <th style="border: none;padding: 4px 20px;">Total:</th>
                              <td style="border: none;padding: 4px 20px;text-align: right;">Rs. {{ $amount ?? '' }}/-</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>

                <p style="border-top: 1px solid #CFD3DC;border-bottom: 1px solid #CFD3DC;padding-top: 15px;padding-bottom: 15px;text-align: center;margin-top: 1rem!important;">

                   <b>NOTE: </b>This is computer generated receipt and does not require physical signature.

                </p>

             </div>

          </div>

       </main>

    </div>

 </div>

</body>

</html>
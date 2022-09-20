<!DOCTYPE html>
<html>
<head>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type' /><!-- Define Charset -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /><!-- Responsive Meta Tag -->
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='x-apple-disable-message-reformatting' />
    <title></title>

</head>
<body leftmargin='0' marginheight='0' marginwidth='0' topmargin='0'  bgcolor='#F2F2F2'>
  <table width='100%'  style='background-image: url(https://i.imgur.com/e6f8Fq3.png);background-size:cover;background-repeat: no-repeat;'>
    <tr>
      <td align='center' width='100%' >
        <table   border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;'>
      <tr>
        <td align='center'>
          <img src='https://i.imgur.com/3kxM3kk.png' width='200' style='Margin-top:50px;display: block;'>
        </td>
        
      </tr>
      <tr>
    
          <td align='center'>
          <h1 style='font-family: sans-serif;font-weight: bold;font-size: 40px;color: #272727;line-height:55px'>{{__('register.thankyou')}}<br>
           {{__('register.success')}}</h1>
        </td>
        
      </tr>
      <tr>
        <td align='center'>
          <img src='https://i.imgur.com/bEvPfwS.png' style='display: block;' width='100'>
        </td>
      </tr>
      <tr>
        <td align='center'>
           <p style='font-family: sans-serif;font-weight: bold;font-size: 23px;color: #272727'>{{__('register.contactyou')}}</p>
        </td>
      </tr>
      <tr>
        <td align='center'> 
          <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;border:1px solid #A6A6A6;border-radius: 10px;Margin-top: 20px;padding: 20px 0' bgcolor='#FFFFFF'>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='border-bottom: 1px solid #A6A6A6'>
                  <tr>
                    <td>
                      <table style='width: 100%;max-width: 900px' align='center'>
                        <tr align='center'>
               <td align='left'><h1 style='color: #31597B;font:bold 25px sans-serif'>{{__('register.member')}}</h1></td>
              <td rowspan='2' style='color:#272727;font:bold 18px sans-serif;'>
                <table align='center' >
                  <tr>
                    <td> <img src='https://i.imgur.com/L93dOWv.png' style='Margin-right: 10px;display: block;' width='20'></td>
                     <td><p style='Margin: 5px'>{{$phone}}</p></td>
                  </tr>
                  <tr>
                    <td> <img src='https://i.imgur.com/3AY8Qd5.png' style='Margin-right: 10px;display: block;' width='20'></td>
                     <td><p style='Margin: 5px'>{{$email}}</p></td>
                  </tr>
                </table>
              </td>
            </tr> 
              <tr  align='center'>
                <td align='left'><p  style='color:#272727;font:bold 20px sans-serif'>{{$name}}</p></td>
              
            </tr>

                      </table>
                    </td>
                  </tr>

          
          
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                  <tr>
                    <td align='leftmargin'><h1 style='color: #31597B;font:bold 25px sans-serif;Margin-top: 30px;'>{{__('register.aboutcourse')}}</h1> </td>
                    
                  </tr>
                </table>
              </td>
            </tr>
              <tr>
                    <td>
                      <table align='center' bgcolor='#F6FAFF' width='100%' style='border-radius: 10px;width: 100%;max-width: 1050px;padding: 10px;'>
                        <tr>
                          <td>
                            <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                  <tr>
                     <td><h1 style='font:bold 18px sans-serif'>{{$course_type}}</h1></td>
                    
                  </tr>
                  <tr>
                    <td>
                       <p style='color: #707479;font:18px sans-serif'>
                                                  {{$course}}
                                              </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                         <tr style='font: 20px sans-serif'>
                                                     <td><p >{{__('register.courseduration')}}</p></td>
                                                     <td><p style='Margin:6px'>{{$mon}} {{__('register.months')}}</p>
                                                     <p style='Margin:6px'>3 {{__('register.perweek')}}</p>
                                                     <p style='Margin:6px'>2 {{__('register.hoursdur')}}</p>
                                                     </td>
                                                  </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td width='70%'>
                            <p style='font: 20px sans-serif'>{{__('register.members_count')}}</p>
                          </td>
                          <td align='left'><h1 style='font:bold 25px sans-serif;Margin-top:20px;'>{{$students_count}}</h1></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td>
                            <h1 style='color: #31597B;font:bold 25px sans-serif'>{{__('register.monthpay')}}</h1>
                          </td>
                          <td><h1 style='font:bold 25px sans-serif'>{{$month_fee}} {{__('register.dram')}}</h1></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
            
          </table>
          
        </td>
      </tr>
    </table>

      </td>
    </tr>

    <tr>
      <td>
        <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;border:1px solid #A6A6A6;border-radius: 10px;Margin-top: 20px;padding: 20px 0' bgcolor='#FFFFFF'>
          <tr>
            <td>
              <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                <tr>
                  <td>
                    <p style='color: #707479;font:18px sans-serif'>{{__('register.notreplay')}}</p>
                  </td>
                </tr>
                <tr>
                  <td>
                     <p style='color: #707479;font:18px sans-serif'>{{__('register.ifquestions')}}</p>
                  </td>
                </tr>
                <tr>
                  <td align='center'>
                    <p style='color: #4F8BFF;font:18px sans-serif'>http://colibrilab.am/
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
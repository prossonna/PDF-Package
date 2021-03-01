<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" />
    <title>Frame 8</title>

    <style type="text/css">
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, Helvetica, sans-serif,sans-serif!important;
            font-size: 12px !important;
            min-width: 400px;
            color: #666;
		}
        .sphare-circle {
            background: #7bdcb1;
            color: #FFF;
            padding: 20px;
            border-radius: 50%;
            clip-path: polygon(50% 0, 80% 10%, 95% 35%, 94% 68%, 78% 90%, 50% 100%, 16% 91%, 4% 68%, 2% 35%, 20% 10%);
        }
        p.font-icon i.fas.fa-user, p.font-icon i.fas.fa-briefcase, p.font-icon i.fas.fa-lightbulb {
            font-size: 25px;
        }
        p.font-icon{
            text-align: center;
        }

        @font-face {
            font-family: "FontAwesomeRegular";
            font-weight: normal;
            font-style : normal;
            src : url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/webfonts/fa-regular-400.ttf") format("truetype");
        }
        @font-face {
            font-family: "FontAwesomeBrands";
            font-weight: normal;
            font-style : normal;
            src : url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/webfonts/fa-brands-400.ttf") format("truetype");
        }
        @font-face {
            font-family: "FontAwesomeSolid";
            font-weight: bold;
            font-style : normal;
            src : url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/webfonts/fa-solid-900.ttf") format("truetype");
        } 

        .fas{
            font-weight: bold !important;
            font-family: FontAwesomeSolid !important;
            font-size: 12px;
        }
        .fas:before{
            font-weight: bold !important;
            font-family: FontAwesomeSolid !important;
        }
        .fab{
            font-weight: normal !important;
            font-family: FontAwesomeBrands !important;
            font-size: 12px;
        }
        .fab:before{
            font-weight: normal !important;
            font-family: FontAwesomeBrands !important;
        }
        .far{
            font-weight: normal !important;
            font-family: FontAwesomeRegular !important;
            font-size: 12px;
        }
        .far:before{
            font-weight: normal !important;
            font-family: FontAwesomeRegular !important;
        }
        
        @page { margin: 70px 0 70px 0; }
        @page :first{ margin: 0 0 70px 0;}
        #footer { position: fixed; left: 0px; bottom: -100px; right: 0px; text-align:center;height: 100px;}
        #footer .page:after {  }
        
    </style>
</head>
<body>
    @php($icon1='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAAEADASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAf/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AJ+AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2Q==')
    @php($icon2='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAAEADASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAf/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AJ+AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2Q==')
    @php($icon3='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAAEADASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAf/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AJ+AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2Q==')
    @php($icon4='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAAEADASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAf/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AJ+AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2Q==')
<!-- <div id="footer" style="display: block; margin-left: auto; margin-right: auto;">
        <img src="https://rollingnexus.com/image/catalog/logo/rolling-nexus.png" style="width: 100%; object-fit: contain; opacity: 0.3; margin:auto;">
</div> -->
<div id="content" style="height:100%;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#7bdcb1" style="height: 1000px;">
        <tbody>
            <tr>
                <td width="100%" style="margin: auto;">
                    <table width="90%" style="margin: auto; height: 1000px;" bgcolor="#FFF">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="font-size: 16px; text-align: center; text-transform: uppercase; font-weight: 700; margin: 10px 0;"> Prasanna Chaudhary</p>
                                    <p style="text-transform: uppercase; text-align: center; font-size: 14px;     margin: 15px 0; letter-spacing: 4px;">Front end web developer</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="90%" cellpadding="0" cellspacing="0" border="0" style="margin: auto;" bgcolor="#7bdcb1">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" bgcolor="#FFF" style="text-align:center;">
                                                    <div style="margin: 12px; 0 3px">
                                                        <img src="{{$icon1}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1; border:none;"  valign="top" bgcolor="#FFF">
                                                    <div style="text-align: right; margin: 0;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">Profile</p>
                                                        <p style="line-height: 24px;">A self-motivated IT Front End Web Developer with good discipline and opportunist to learn new skills to improve person as well as professional skills. Ability to lead a team and utilize skills, knowledge as well as work accordingly to help the company to accomplish its goal and objectives.</p>
                                                    </div>
                                                </td>
                                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top" bgcolor="#FFF">
                                                    <div style="text-align: left; margin: 0;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">contact</p>
                                                        <p>1997/09/20</p>
                                                        <p>Koteshwor, Kathmandu</p>
                                                        <p>9804004135</p>
                                                        <p><a href="#" style="text-decoration: none; font-style: italic;">plezzennt.prossonna123@gmail.com</a></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="90%" cellpadding="0" cellspacing="0" border="0" style="margin: auto;" bgcolor="#7bdcb1">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" bgcolor="#FFF" style="text-align:center;">
                                                    <div style="margin: 7px; 0 3px">
                                                        <img src="{{$icon2}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top" bgcolor="#FFF">
                                                    <div style="text-align: right;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">Experiences</p>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Rolling Plans pvt. ltd <span> : </span> 2021/01 - Present</p>
                                                            <p style="margin: 0; font-style: italic;">Front End Web Developer</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Next Nepal pvt. ltd <span> : </span> 2020/02 - 2020/12</p>
                                                            <p style="margin: 0; font-style: italic;">Front End Web Developer</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">IT Arrow pvt. ltd <span> : </span> 2019/05 - 2020/02</p>
                                                            <p style="margin: 0; font-style: italic;">Wordpress Developer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top" bgcolor="#FFF">
                                                    <div style="text-align: left;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">Education</p>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Orchid International college, Gaushala <span> : </span> 2015/10 - 2019/09</p>
                                                            <p style="margin: 0; font-style: italic;">Bachelor in Information Management</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Koshi St. James College, Itahari <span> : </span> 2013/06 - 2015/05</p>
                                                            <p style="margin: 0; font-style: italic;">+2 Management</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Koshi st. James School, Itahari<span> : </span> 2009/04 - 2013/03</p>
                                                            <p style="margin: 0; font-style: italic;">SLC (Secondary Level)</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="90%" cellpadding="0" cellspacing="0" border="0" style="margin: auto;" bgcolor="#7bdcb1">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" bgcolor="#FFF" style="text-align:center;">
                                                    <div style="margin: 7px; 0 3px">
                                                        <img src="{{$icon3}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top" bgcolor="#FFF">
                                                    <div style="text-align: right;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">skills</p>
                                                        <p>Hyper Text Markup Language (HTML 5)</p>
                                                        <p>Cascading Style Sheet (CSS 3)</p>
                                                        <p>JavaScript </p>
                                                        <p>React</p>
                                                        <p>JQuery</p>
                                                        <p>Content Writing</p>
                                                    </div>
                                                </td>
                                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top" bgcolor="#FFF">
                                                    <div style="text-align: left;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">projects</p>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Greenlingcenter.com.np</p>
                                                            <p style="margin: 0; font-style: italic;">Liquor E-shop</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">itarrow.com</p>
                                                            <p style="margin: 0; font-style: italic;">Informative Offical Website</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">PDF-Resume</p>
                                                            <p style="margin: 0; font-style: italic;">Build your Resume Online</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: auto;" bgcolor="#7bdcb1">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" bgcolor="#FFF" style="text-align:center;">
                                                    <div style="margin: 10px; 0 3px">
                                                        <img src="{{$icon4}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top" bgcolor="#FFF">
                                                    <div style="text-align: right;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">Language</p>
                                                        <p style="margin-bottom: 5px;">Nepali (Mother Tongue)</p>
                                                        <p>English</p>
                                                        <p>Hindi</p>
                                                    </div>
                                                </td>
                                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top" bgcolor="#FFF">
                                                    <div style="text-align: left;">
                                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">Training</p>
                                                        <div style="margin-bottom: 10px; margin-top: 0;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">School of IT</p>
                                                            <p style="margin: 0; font-style: italic;">php (OOP and MVC)</p>
                                                        </div>
                                                        <div style="margin-bottom: 10px;">
                                                            <p style="font-weight: 600; margin-bottom: 5px;">Broadway Infosis</p>
                                                            <p style="margin: 0; font-style: italic;">React js (Basic)</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            
        </tbody>
    </table>



</body>
</html>
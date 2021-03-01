<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Frame 7</title>

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
        
        /* @page { margin: 70px 0 70px 0; }
        @page :first{ margin: 0 0 70px 0;}
        #footer { position: fixed; left: 0px; bottom: -100px; right: 0px; text-align:center;height: 100px;}
        #footer .page:after {  } */
        
    </style>
</head>
<body>
@php($user='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAADYDASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAYDBQIEBwH/xAAwEAACAQMCBAUDAgcAAAAAAAABAgMABBEFEgYhMUETIlFxgZGhsRRhFSQyM1PR4f/EABgBAAMBAQAAAAAAAAAAAAAAAAACAwQB/8QAHBEBAQEBAQEAAwAAAAAAAAAAAQARAgMhEjFB/9oADAMBAAIRAxEAPwDoFYSypDE0krhEUZLE8hWdLnG9yYNFVAf70oU+2CfyBRBaeo8axqJEtIyCpwHPPPxVG/EeoOR/NSggcwrV5p2ieLCHkbzMcjlW43DcbLgSFWx1FSfQ20Hk5WmicWLLKsGoSAZGBIVxz/fHKmyuU6jp82nsGVt47kLXQ+HLoXmg2cwznwwpz6ryP4p+etpd8/i1nRRRTSRS1xxaSXOn2pjGSk4BHvy/OKZaqOJEVtPDMoYBsHPpXOnCbg1yXrK+tzCHjZnjXkSiE4+K3v4jZFNxukHLo3lb6HnWtbWMO1hJAZRuJUqBjGcjkT26fFQS2dvta5aKLxllAALDcFxjb74Ocev1rNgWz62F5e200Em2QjcpwXRlH3FMfCMDQcO2qsRltzcjnqSR9sVQ3dnatGVihPM4bchVQD19+WfXnTNw/GsejWwQYBXNU88HCj7frWsqKKKtZ4qC9txdWc0GBmRCoz2JHKp609S1K10u2ae6lVAB5VzzY+gHeiJOh1IxKYZG8OVDsYHse9TMxaMsGB77scvzVHPZy6rCuoW8mbhucg6bm71rIdYyIdmB068hWfC2HSfyvheveTpZQnxJZG2ZA6ep+Ke441iiWNBhUAUD9hXPtEvrXh3U0N6QzToQ7hclPTHfHWn20vLe9hE1rMksZ7qc/X0qvAB8s/oq409FFFPTkvWeOEQtDpabj/mccvgf7+lJd5dz3s5mupXlkbqzHPx7VFXtEU+m6hcabMWjO6Nv6kbof+1fTcQRfpPGit5C5O3zDyg+9LJrwmQoUUsUB3FewPTNK8C6znfQYRPJLcztPM25mrO2u7mykEtrNJE47o2DWFYOaaWbdP4+vYVK30CXPoynYfnt9qKT6KLl/9k=')
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#7bdcb1" style="height: 1000px;">
        <tbody>
            <tr>
                <td width="100%" style="margin: auto;">
                    <table width="90%" style="margin: auto; height: 1000px;" bgcolor="#FFF">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="font-size: 16px; text-align: center; text-transform: uppercase; font-weight: 700;"> Prasanna Chaudhary</p>
                                    <p style="text-transform: uppercase; text-align: center; font-size: 14px;     margin: 30px 0; letter-spacing: 4px;">Front end web developer</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="90%" cellpadding="0" cellspacing="0" border="0" style="margin: auto;" bgcolor="#7bdcb1">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" bgcolor="#FFF" style="text-align:center;">
                                                <!-- <img src="{{asset('/image/user.png')}}" alt="user-img" style="width:12px;"> -->
                                                <img src="{{$user}}" alt="user-img" style="width:20px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top" bgcolor="#FFF">
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
                                                <td colspan="2" bgcolor="#FFF">
                                                    <p class="font-icon"><i class="fas fa-briefcase"></i></p>
                                                    <!-- <p style="text-align:center;">ICON</p> -->
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
                                                <td colspan="2" bgcolor="#FFF">
                                                <p class="font-icon" style="margin-left: auto; margin-right: auto;"><i class="fas fa-lightbulb"></i></p>
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
                                                <td colspan="2" bgcolor="#FFF">
                                                    <p style="text-align:center;">ICON</p>
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
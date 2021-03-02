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
@php($icon1='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAAEADASIAAhEBAxEB/8QAGgABAQEBAQEBAAAAAAAAAAAABgAHBQIEA//EADQQAAIBAwICBQoHAQAAAAAAAAECAwAEBQYREmEHITFRgRMXIkFCZZGhpOIUUmJxscHR8P/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDQKqqqDxLLHDG0krrHGo3ZmOwA7yaH5DpFx9vIUs7aW6A9snyan9twT8q+XXN3cZPM2mnbRwA5UydftHs35AdfjypTh8Dj8NbrHawIXA9KZgC7Hv3/AKoOBj+kXHzyBLy2ltd/bB8oo/fYA/KmEUsc0SyROskbDdWU7gjka52YwOPzNu0d1Agcj0ZVADqe/f8Aqi2hru4xeau9O3bghCxj6/aHbtyI6/DnQPaqqqCqqqoM8yci4rpQhu7ohYZuEhidgAU8nuTyIrQ64OrNOJqCxUIyx3UO5ic9nNTyPyovbaoz+nFW0zGPedFHDG7kqTt+sbhv550GjVnmNkXK9KM13akNDDxEsDuCAnBuPE14udUZ/UataYfHvAjDhd0JYjf9Z2C/910o0npxMBYsHZZLubYyuOwdyjkPnQd6qqqgqqqKa21HJi4ksLDc31wOoqNyinq3HM+qg6eY1Pi8MSl1PxTAb+RiHE3+DxNGpekqPyjCDFO6b9RabYkcwAdvjX06d0PBEi3maBubuT0zEx3VSe/8x7/V+/bTCCCK3iWKCJIo17ERQoHgKANF0lIJFE+KdE36ys25A5Agb/GkuH1Pi8yQlrPwzHr8jKOFv8Pga6k8EVxE0U8SSxt2o6hgfA0Q1FoeCVGvMKPw12npiJTsrEd35T3er+aBnVRTROo5MpE+Pv8AcX1uOssNi6jq6+Y9dK6CrO9MRjOa4v8AJzgMsDFkBHr34U+AHxArRKAy9GitKzJlSqkkgG33I8eKge1UA82Xvf6b76vNl73+m++gf1UA82Xvf6b76vNl73+m++g/PVEYwet7DJwAKs7BnAHr34X+IPxNaJQGLo0VZFZ8sWUEEgW+xPjxU+oP/9k=')

    @php($icon2='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAAEADASIAAhEBAxEB/8QAGgAAAgMBAQAAAAAAAAAAAAAAAAEDBAUGB//EADQQAAEDAwIDBgQEBwAAAAAAAAEAAgMEBREGIRITQSMxNlFhshQidYIVFjPBQpGhoqPR0v/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDv00k0CKE0IETgZQM9UJoBLO6aSAzuoayrgoaWSpqZBHDGMuceimxvlYetfCtb9nvagmptT2iqExhq+LkxmV/ZuGGjAJ3HqFk1OpbTU3KN77m5tE2JwLI+dG4vJG54QMjA8+q5LT57K7Dp8A8/3NVOS11kdtjuDoT8LISGvG/pv5IO5pdSWmmucjmXNzqN8TWhkhmkcJATv8wOBg+fRa1Tqa00nK59UWc6MSs7Nxy05wdh6FcXW3y1fluO3UtBwzuAc8g4DHj+LPe47f19FQ1Duy0/T4/c5B6nR1cFdSx1NNIJIZBlrh1U2d1h6K8K0X3+9y3AMIAnAyVh618K1v2e9q3Mb5WbqOgmudjqaSn4ebJw8PEcDZwP7IPONP8A6d2+nye5qmdqq4Osr7ZLwvyA3muGXBvUHzPdv0x/K5YLFdYX3Nj6KRjzSPibx4Ac4ubgAnY9x3GypHSF+JyaH/NH/wBIJL3pn8HtNNVyVPbSYa+EjuccnYjyGP8AaragHZWk9PgI/c5WpdMakmjjjmpnyMiBDGunYQ0enzKxfLBdJnWyOKie5zKRkTuHcNcHHIJ7h3jcnCDq9FeFaL7/AHuW4s3TlBNbLHTUlRw82Pi4uE5G7if3WkgaEimgEkH0QBgYQNCR7tkIGkhAz1Qf/9k=')

    @php($icon3='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCABAADYDASIAAhEBAxEB/8QAGgAAAgMBAQAAAAAAAAAAAAAAAAQCAwUBBv/EAC8QAAIBAwMDAgQFBQAAAAAAAAECAwAEEQUhMRITUUFhFCIykSMkUoGhYnGxwdP/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A9vUWkRWVWYBn2UE7n+1clljhUNK6oCQAWONzVN/aLeW/R1dEikNHIOUYcGg5qU0ttp888AUyRr1DqGRgbn+M0yCCAQcg8Gs6a8iFisOpDtzzoUaFPmZvQ4AycGqFvCLD4MWmooBF2hP2ONsdWAc+9BoadcteWSXDIUEhYqCMHpyek/bBpms+G7gTSlOng3QiVY0RfqzsAG8e+au0+0a2jdpn7lxKeuV/QnwPYcCgaooooIyRpNGY5UV0blWGQazZozpEDNayO6viOG3c9QDkgDBO4Htmm5o7xpCYbiBE9FaEsR+/UP8AFKXokSXTjdSJJ+ZxlUKjJRunbJ9aBqxsUtFLE924feWZh8zn/Q8D0pqq5547eIySkhQQNlLHJOBsNzuag15brAs/dDRucIU+bqPgAbn148UC2o2hGb60XF3EM/Lt3VHKHzkceDihluNQVHhuhBaSIGBjH4jZHk/T6cDNPo6yIrowZWGQQcgisnRo7s6JadqWOM4YnuRl8gsSuMMMbUGnBCsESxp1FR6sxY/c0VG3S5Un4iaKQenREUx92NFAXV1DaRd2d+lchRtkkngADk0mVuNUhkSaA2sDAGMsfxQwIIbA2GPHNaVFAjZTfGQS215GhmhPRMhAKt6g48Eb0hbWVs2tTwvErQp1dMbbouRGThTsNyTVt5dDT9a7rAsk9vgqpUbq2xyxA4alIdSSPVJroxN0SZwBLFncIP1/0n+KDS1J5LmVdNgJUyqWmcD6I+Nvc8D967Lcyae/TJa/klACSQ7mMAD6l8c7iuaXmee6vSGUTMqoGcNhVHsSBuWrRoIxyJLGskbBkYZVhwRRUqKAooooMzXoHltUdViKREtJ3Auy4PBZWA+1eb71r5tvvH/xr2xAIIIBB5BpK1042sylLqXsIWKQbBVz6bcgZOAaCGgxRJpqywpIgnPcKuADnjgADG221aNFFAUUUUH/2Q==')

    @php($icon4='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wAARCAAlAEADASIAAhEBAxEB/8QAGgABAAIDAQAAAAAAAAAAAAAAAAQGAgMFB//EADQQAAECBQIDBQQLAAAAAAAAAAECAwAEBRHwITEGEkETFFGB4RYiI1U2YXGDkZKTobPR0v/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwC85meqEIBmZ6VjjJ2qyjSJmlTqkFKCXJcBJJSN1gEX0uL+W1o2UBM7WaOxUH6rNtOPFRKGQ2EJsogWBQTsB1iJxZRp1sS9Ypsy+uckkBJvYqUkX97QWvqbi1iPs1Cn+19e+YL/ACJ/qLrwhxWmrpTJTpCJ5KdFdHgOo+vxHmOoijTTtGnlpmFd4kXlj4rTDCVt83im6wQD4dI3SFIlJxicmZCozKXZJkv+/LhF7aixCzY6QHrkIj08Oinsd4d7Z3sxzOctuY23tEiAZmeiGZnogODwN9EpH7z+RWZr3szPXzKn1/iCiSaKa3TU8rBUPiMrJ1JJ1Bt1iYzxlX1qUHJJlsBKiD3Zw3IBIG/U2HnAXNVEpKlFSqZJEk3JLCNf2jkz7Euy9U6dKSklKpXTSvtEoS2bkqT7ytraZ0r/ALacR/LWf0HP9RMo6Zzip6omrSvYIclUsBSEKQLhRUDqdSDr5CAuksOWWaFwbIAuDptmbbIwYaRLsNstJ5W20hCR4ACwzBnAIQhAIq1Q4Wqc/NKec4ieT0SlDPKEjoNFD8YQgOrQqbOUthTM1U1zyNOz52+Uo3vrck7jfa0dSEIBCEID/9k=')
<div id="content" style="height:100%;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td>
                    <p style="font-size: 16px; text-align: center; text-transform: uppercase; font-weight: 700; margin: 10px 0;"> Prasanna Chaudhary</p>
                    <p style="text-transform: uppercase; text-align: center; font-size: 14px;     margin: 15px 0; letter-spacing: 4px;">Front end web developer</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <div style="margin: 12px; 0 3px">
                        <img src="{{$icon1}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1; border:none;"  valign="top">
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
                <td colspan="2" style="text-align:center;">
                    <div style="margin: 7px; 0 3px">
                        <img src="{{$icon2}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" >
                        <tbody>
                            <tr>
                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top">
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
                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top" >
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
                <td colspan="2" style="text-align:center;">
                    <div style="margin: 10px; 0 3px">
                        <img src="{{$icon3}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                    </div>
                </td>
            </tr>               
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top">
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
                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top" >
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
                <td colspan="2" style="text-align:center;">
                    <div style="margin: 10px; 0 3px">
                        <img src="{{$icon4}}" alt="user-img" style="width:20px; margin-bottom:10px;">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="50%" style="padding: 0 15px; border-right: 4px solid #7bdcb1;"  valign="top">
                                    <div style="text-align: right;">
                                        <p style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 0;">Language</p>
                                        <p style="margin-bottom: 5px;">Nepali (Mother Tongue)</p>
                                        <p>English</p>
                                        <p>Hindi</p>
                                    </div>
                                </td>
                                <td width="50%" style="padding: 0 15px; border-left: 4px solid #7bdcb1;" valign="top">
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
</div>



</body>


</body>
</html>
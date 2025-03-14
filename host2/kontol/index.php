<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
   DOMAIN QLANENESIA
    </title>
    <meta name="theme-color" content="#8fbe00">
    <meta name="msapplication-navbutton-color" content="#8fbe00">
    <meta name="apple-mobile-web-app-status-bar-style" content="#8fbe00">
    <meta name="Description" content="Free Dynamic DNS and Managed DNS Provider trusted since 1999 with 100% uptime history. Our Free DDNS service points your dynamic IP to a free static hostname. Create a free account today!">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bungee&family=Viga&display=swap');
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Viga', sans-serif;
            user-select: none;
        }
        body {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex; 
            align-items: center;
            justify-content: center;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 20s ease infinite;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .app {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex; 
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }
        .app .copy {
            width: 100%;
            position: absolute;
            bottom: 2px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-family: 'Viga', sans-serif;
            color: rgba(255,255,255,0.6);
            font-size: 13px;
        }
        .app .inner {
            margin-top: 5px;
            position: relative;
            width: 100%;
            display: flex; 
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .inner .input {
            position: relative;
            font-family: 'Viga', sans-serif;
            background: rgba( 255, 255, 255, 0.4 );
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width: 400px;
            height: 40px;
            font-size: 15px;
            padding: 0 5px;
        }
        .inner .domains {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            z-index: 9999;
            background: #000;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            background: rgba( 0, 0, 0, 0.4 );
            color: rgba( 255, 255, 255, 0.4 );
            font-family: 'Viga', sans-serif;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur( 8px );
            padding: 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .app .input:before {
            content: 'for4.us';
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            padding: 0 5px;
            z-index: 9999;
            background: #000;
        }
        .app .input:focus {
            outline: none;
            border: none;
        }
        .app .input::placeholder {
            color: rgba( 255, 255, 255, 0.4 );
        }
        .app h1 {
            font-family: 'Viga', sans-serif;
            color: rgba( 255, 255, 255, 0.4 );
            line-height: 25px;
        }
        h1 strong {
            font-family: 'Bungee', cursive;
            font-size: 2em;
        }
        .app .desc {
            font-family: 'Viga', sans-serif;
            color: rgba( 255, 255, 255, 0.4 );
        }
        .app .check {
            position: relative;
            margin-top: 20px;
            font-family: 'Viga', sans-serif;
            background: rgba( 255, 255, 255, 0.4 );
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            font-size: 16px;
            padding: 5px 20px;
        }
        .app .check:focus {
            outline: none;
            border: none;
        }

        .app .alert {
            position: relative;
            margin-top: 10px;
            font-family: 'Viga', sans-serif;
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            font-size: 14px;
            padding: 3px 15px 3px 25px;
            text-align: center;
            display: none;
        }
        .alert.success {
            background: rgba(124,252,0, 0.4);
        }
        .alert.error, .alert.failed, .alert.exsist, .alert.mistake {
            background: rgba( 255, 0, 0, 0.4 );
        }
        .alert.process {
            background: rgba(0,0,255, 0.4);
        }
        .alert i {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
        }
        .alert.process i {
            top: 25%;
        }

        .app label {
            width: 400px;
            text-align: left;
            font-family: 'Viga', sans-serif;
            color: rgba( 255, 255, 255, 0.7);
            margin-top: 20px;
        }

        .app .details {
            position: relative;
            margin-top: 20px;
            font-family: 'Viga', sans-serif;
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            padding: 10px;
            width: 400px;
            text-align: center;
            display: none;
        }
        .details h1{
            font-size: 20px;
        }
        .details .active {
            margin-top: 10px;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .active .info {
            position: relative;
            font-family: 'Viga', sans-serif;
            background: rgba( 255, 255, 255, 0.1 );
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            font-size: 13px;
            padding: 5px 15px;
        }
        .details table {
            margin-top: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.3);
            border-top: 1px solid rgba(255,255,255,0.3);
        }
        .active .click {
            position: relative;
            margin-top: 10px;
            font-family: 'Viga', sans-serif;
            background: rgba( 255, 255, 255, 0.4 );
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            font-size: 14px;
            padding: 5px 15px;
        }
        .active .click:focus {
            outline: none;
            border: none;
        }



        .app .btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-family: 'Viga', sans-serif;
            background: rgba( 255, 255, 255, 0.4 );
            color: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            font-size: 16px;
            padding: 5px 20px;
        }
        .app .btn:focus {
            outline: none;
            border: none;
        }

        .inner .table-head {
            width: 400px;
            background: rgba( 255, 255, 255, 0.4 );
            color: rgba( 255, 255, 255, 0.4 );
            backdrop-filter: blur( 8px );
            -webkit-backdrop-filter: blur( 8px );
            padding: 5px;
        }
        .table-head table {
            width: 100%;
        }
        .table-head table tr {
            width: 100%;
        }
        .table-head table td {
            text-align: center;
            color: rgba( 255, 255, 255, 0.7);
        }


        .inner .table-content {
            width: 400px;
            background: rgba(255,255,255,0.1);
        }
        .table-content table {
            width: 100%;
        }
        .table-content table tr {
            width: 100%;
        }
        .table-content table tr th {
            width: 100%;
            font-size: 10px;
            padding: 2px 5px;
            color: rgba( 255, 255, 255, 0.7);
        }

        @media(max-width:550px) {
            .app .inner , .app .details, .app label, .inner .table-head, .inner .table-content{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="app">


        <h1>Domain<strong>2022</strong>™</h1>
        <p class="desc">Admin Control Panel</p>

        <label>
            <b>List Subdomain Record:</b>
        </label>
        <div class="inner">
            <div class="table-head">
                <table>
                    <tr>
                        <td style="text-align: left;">No</td>
                        <td>Subdomain</td>
                        <td style="text-align:right;">Ip Address</td>
                        <td style="text-align:right;">Action</td>
                    </tr>
                </table>
            </div>
            <div class="table-content">
                <table>
                        <?php
                        require('../config.php');
                        $url = 'https://api.cloudflare.com/client/v4/zones/'.$zone_id.'/dns_records?type=A&match=all';

                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        
                        $headers = array(
                           "Authorization: Bearer $storeidd",
                           "Content-Type: application/json",
                        );
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                        //for debug only!
                        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                        
                        $resp = curl_exec($curl);
                        curl_close($curl);
                        $p = json_decode($resp, true);
                        $num = 1;
                        foreach($p['result'] as $k){
                        echo '<tr>';
                        echo '<th style="font-size: 13px;width:20px;">'.$num.'</th>';
                        echo '<th style="width:35%;text-align:left;"><a style="text-decoration:none; color: rgba( 255, 255, 255, 0.7);" href="http://'.$k['name'].'">'.$k['name'].'</a></th>';
                        echo '<th style="width:35%;text-align:left;">'.$k['content'].'</th>';
                        echo '<th data-id="'.$k['id'].'" style="font-weight: bold;font-size:14px;color:rgba(255,0,0,0.6);width:6%;text-align:right" onclick="hapus(this)">Delete</th>';
                        echo '</tr>';
                        $num++;
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function hapus(id){
            let id_d = id.getAttribute("data-id");
            if(confirm('Yakin Ingin Menghapus')){
                $.get('../docs/delete.php?id='+id_d,function(done){
                    if(done.success){
                        alert('Berhasil Mengapus Subdomain');
                        location.reload();
                    }else{
                        alert('Gagal');
                    }
                })
            }
        }
    </script>
</body>
</html>
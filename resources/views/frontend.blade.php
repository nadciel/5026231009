<!DOCTYPE html>
<html lang="id">

<head>
    <title>FrontEnd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #ffffe8;
            font-family: "Poppins";
            height: 100%;
            width: 100%;
        }

        .container {
            width: 100%;
            height: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (max-width: 480px) {
            .container {
                max-width: 100%;
            }
        }

        .link-button {
            background-color: #8447ff;
            border-radius: 29px;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            gap: 20px;
        }

        .link-button p {
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
            flex: 1;
            text-align: center;
            overflow-wrap: anywhere;
        }

        .link-button a {
            width: 100%;
        }

        .link-button:hover {
            background-color: transparent;
            border: 3px solid #8447ff;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container text-center my-5">
        <h3 class="mb-2" style="font-weight: 700">TAKE A LOOK AT OUR CONTENTS</h3>
        <div class="d-flex flex-column justify-content-center align-items-center" style="min-width: 100%;">
            <a href="/pertama"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">Pertemuan 1</p>
                </div>
            </a>

            <a href="/bootstrap1"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">Bootstrap 1</p>
                </div>
            </a>

            <a href="/pertemuan4"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">Pertemuan 4</p>
                </div>
            </a>

            <a href="/pertemuan4withtoggle"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">Pertemuan 4(2)</p>
                </div>
            </a>

            <a href="/linktree"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">LinkTree</p>
                </div>
            </a>

            <a href="/js1"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">JavaScript 1</p>
                </div>
            </a>

            <a href="/js2"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">JavaScript 2</p>
                </div>
            </a>

            <a href="/index"
                class="btn button btn-lg btn-block border-white py-1 my-1 text-decoration-none"
                target="_blank" style="max-width: 580px; overflow-wrap: anywhere; border-radius: 29px;">
                <div class="row link-button justify-content-center" style="overflow-wrap: break-word;">
                    <p class="text-wrap my-2">ETS</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>

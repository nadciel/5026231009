<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="stylepertemuan4.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <button class="collapse-button">
                    <i class="fas fa-angle-double-left"></i>
                </button>
            </div>

            <div class="user-profile">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-info">
                    <div style="font-weight:600;">User</div>
                    <div class="small">user@gmail.com</div>
                </div>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="menu-item">
                        <i class="fas fa-clipboard-check"></i>
                        Helperlog
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item active">
                        <i class="fas fa-search"></i>
                        Helperfind
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="fas fa-comment"></i>
                        Helperassist
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <a href="#" class="btn-logout">
                    <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                </a>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <!-- Toggle button - only visible when sidebar is hidden -->
            <button class="toggle-button" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>

            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="header-bar">
                        <button class="back-button"><i class="fas fa-arrow-left"></i></button>
                        <h4>Pengajuan Kontrak</h4>
                      </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="success-card">
                            <div class="text-center">
                                <img src="asset/sucessful.png" style="max-height: 20rem;">
                            </div>

                            <h3 style="font-weight: 700;">Ajuan Kontrak Berhasil
                                Dibuat</h3>

                            <p class="mb-4">
                                Ajuan kontrak anda dengan nomor id #XXXX
                                untuk PRT atas nama YYY sudah berhasil
                                dibuat dan sedang menunggu proses review
                                oleh admin. Silahkan mengecek progres ajuan
                                kontrak anda pada laman berikut
                            </p>

                            <button class="blue-button">
                                Cek Progress Kontrak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Main toggle button
            $('#sidebarToggle').on('click', function () {
                $('#sidebar').toggleClass('hidden');
                $('#content').toggleClass('expanded');
            });

            // Secondary toggle button inside the sidebar
            $('.collapse-button').on('click', function () {
                $('#sidebar').toggleClass('hidden');
                $('#content').toggleClass('expanded');
            });

            // Handle responsive behavior on page load
            if ($(window).width() <= 768) {
                $('#sidebar').addClass('hidden');
                $('#content').addClass('expanded');
            }

            // Handle window resize
            $(window).resize(function () {
                if ($(window).width() <= 768) {
                    $('#sidebar').addClass('hidden');
                    $('#content').addClass('expanded');
                }
            });
        });
    </script>
</body>
</html>
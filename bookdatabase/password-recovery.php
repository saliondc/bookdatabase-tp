<?php
    $userID = isset($_GET['userID']) ? $_GET['userID'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-password-recovery.css">
    <title>Redefinir Senha</title>
</head>
<body>
    <div class="navbar">
        <div class="left-container">
            <a href="index.php" class="navbar-logo">
                <img src="logo.png" style="height: 41px;" class='header-image' alt="Logo da barra de navegação" />
            </a>
            <a href="index.php" class='nav-link'>Home</a>
            <a href="about.php" class='nav-link'>Sobre</a>
            <a href="contact.php" class='nav-link'>Contate-nos</a>
        </div>
        <div class="right-container">
            <button class='white-button'><a href="cadastro.php">Cadastro</a></button>
            <button class='white-button'><a href="login.php">Login</a></button>
        </div>
    </div>
    <div class="password-reset-container">
        <div class="password-reset-form">
            <h2>Digite sua nova senha</h2>
                <form action="reset-password.php?userID=<?php echo htmlspecialchars($userID); ?>" method="post">
                    <input type="password" id="newPassword" name="newPassword" placeholder="Nova senha" required>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmar nova senha" required>
                    <button type="submit" class="password-reset-button">Alterar senha</button>
                </form>
        </div>
    </div>
    <footer class="site-footer">
        <div class="footer-content">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
            <g clip-path="url(#clip0_32_543)">
                <path d="M47.7006 12.5348H46.8689V10.1376C46.8689 9.8533 46.7047 9.59459 46.4475 9.47356C39.6368 6.26867 31.8403 6.22307 25 9.33178C18.1597 6.22307 10.3632 6.26876 3.55254 9.47356C3.2953 9.59459 3.13112 9.8533 3.13112 10.1376V12.5348H2.29941C1.03151 12.5348 0 13.5663 0 14.8342V40.6659C0 41.9338 1.03151 42.9653 2.29941 42.9653H47.7006C48.9685 42.9653 50 41.9338 50 40.6659V14.8342C50 13.5663 48.9685 12.5348 47.7006 12.5348ZM25.7339 23.4425C25.7339 23.4417 25.7339 23.4407 25.7339 23.4398V10.6082C32.0095 7.79929 39.1253 7.79929 45.4012 10.6082V13.2658C45.4012 13.2668 45.4011 13.2678 45.4011 13.2687C45.4011 13.2695 45.4012 13.2706 45.4012 13.2715V37.1891C42.2469 35.872 38.9069 35.2133 35.5675 35.2133C32.2281 35.2133 28.8881 35.872 25.7339 37.1891V23.4425ZM21.0372 9.43158C22.1318 9.74508 23.2111 10.1359 24.2661 10.6082V22.0737L23.0587 21.2687C22.8121 21.1043 22.4911 21.1043 22.2446 21.2687L21.0372 22.0737V9.43158ZM4.59883 13.2706C4.59883 13.2699 4.59892 13.2694 4.59892 13.2687C4.59892 13.268 4.59883 13.2675 4.59883 13.2668V10.6082C9.35059 8.48139 14.5838 7.96642 19.5695 9.06025V12.2751C16.9504 11.7365 14.2781 11.612 11.6117 11.9082C11.2089 11.9529 10.9187 12.3157 10.9634 12.7186C11.0082 13.1213 11.3706 13.4118 11.7738 13.3669C14.3871 13.0766 17.0066 13.2141 19.5694 13.7744V18.5382C18.0124 18.2188 16.4246 18.0424 14.8358 18.0174C14.4302 18.0098 14.0969 18.3343 14.0904 18.7395C14.0841 19.1448 14.4073 19.4785 14.8125 19.4849C16.4105 19.5102 18.0076 19.6967 19.5693 20.0375V21.6676C15.3238 20.7959 10.9205 21.0175 6.77593 22.3197C6.38924 22.4412 6.17436 22.8531 6.29579 23.2398C6.39433 23.5533 6.68366 23.7539 6.9957 23.7539C7.06859 23.7539 7.14266 23.7429 7.21585 23.7199C11.2186 22.4624 15.4769 22.2744 19.5693 23.1683V23.4447C19.5693 23.7153 19.7182 23.9641 19.9569 24.0917C20.1954 24.2194 20.485 24.2054 20.7102 24.0553L22.6515 22.761L24.2659 23.8374V37.189C21.1116 35.8719 17.7717 35.2132 14.4323 35.2132C11.0929 35.2132 7.75284 35.8719 4.59863 37.189V13.2706H4.59883ZM21.9178 41.4976H2.29941C1.8408 41.4976 1.46771 41.1245 1.46771 40.6659V14.8342C1.46771 14.3756 1.8408 14.0025 2.29941 14.0025H3.13112V38.3176V39.1004C3.13112 39.5056 3.45969 39.8342 3.86497 39.8342H21.9178V41.4976ZM5.60568 38.3665C11.2905 36.1225 17.5744 36.1224 23.2593 38.3665H5.60568ZM26.6145 41.4976H23.3855V39.8342H26.6145V41.4976ZM44.3943 38.3665H26.7407C32.4255 36.1225 38.7094 36.1225 44.3943 38.3665ZM48.5323 40.6659C48.5323 41.1245 48.1592 41.4976 47.7006 41.4976H28.0822V39.8342H46.135C46.5403 39.8342 46.8689 39.5056 46.8689 39.1004V38.3176V14.0025H47.7006C48.1592 14.0025 48.5323 14.3756 48.5323 14.8342V40.6659Z" fill="white"/>
                <path d="M30.3288 31.0909C29.5164 31.2612 28.703 31.4736 27.9112 31.7224C27.5245 31.844 27.3096 32.2559 27.431 32.6425C27.5295 32.956 27.8189 33.1566 28.1309 33.1566C28.2038 33.1566 28.2779 33.1456 28.3511 33.1226C29.0975 32.8882 29.8642 32.6879 30.6297 32.5274C31.0264 32.4443 31.2806 32.0553 31.1975 31.6586C31.1144 31.262 30.7251 31.0079 30.3288 31.0909Z" fill="white"/>
                <path d="M43.0041 33.1565C43.3161 33.1565 43.6055 32.9558 43.704 32.6424C43.8254 32.2557 43.6104 31.8438 43.2238 31.7223C40.0856 30.7364 36.8316 30.3679 33.5522 30.6276C33.1482 30.6595 32.8466 31.0129 32.8785 31.417C32.9104 31.8211 33.2636 32.1228 33.668 32.0907C36.759 31.8462 39.826 32.1933 42.7839 33.1226C42.8571 33.1456 42.9312 33.1565 43.0041 33.1565Z" fill="white"/>
                <path d="M28.131 30.0163C28.2038 30.0163 28.2779 30.0053 28.3511 29.9823C33.0721 28.499 38.063 28.499 42.784 29.9823C43.1707 30.1036 43.5826 29.8888 43.704 29.5022C43.8255 29.1155 43.6105 28.7035 43.2239 28.5821C38.215 27.0084 32.92 27.0084 27.9112 28.5821C27.5245 28.7035 27.3095 29.1155 27.4311 29.5022C27.5296 29.8156 27.8189 30.0163 28.131 30.0163Z" fill="white"/>
                <path d="M28.131 26.8942C28.2038 26.8942 28.2779 26.8832 28.3511 26.8602C31.0596 26.0092 33.8706 25.6457 36.7072 25.7803C37.113 25.7991 37.4558 25.4868 37.475 25.082C37.4942 24.6771 37.1815 24.3334 36.7766 24.3141C33.7675 24.1717 30.7849 24.5571 27.9112 25.4599C27.5245 25.5815 27.3095 25.9934 27.4311 26.38C27.5296 26.6937 27.8189 26.8942 28.131 26.8942Z" fill="white"/>
                <path d="M43.2239 25.4601C42.1711 25.1294 41.0864 24.8646 39.9997 24.6731C39.6004 24.6028 39.22 24.8694 39.1496 25.2685C39.0792 25.6676 39.3458 26.0483 39.745 26.1186C40.7691 26.2991 41.7916 26.5487 42.7839 26.8604C42.8572 26.8834 42.9312 26.8944 43.0041 26.8944C43.3161 26.8944 43.6055 26.6937 43.704 26.3803C43.8255 25.9935 43.6106 25.5815 43.2239 25.4601Z" fill="white"/>
                <path d="M28.131 23.7541C28.2038 23.7541 28.2779 23.7431 28.3511 23.7201C33.0721 22.2368 38.063 22.2368 42.784 23.7201C43.1707 23.8414 43.5826 23.6266 43.704 23.24C43.8255 22.8533 43.6105 22.4413 43.2239 22.3199C38.215 20.7462 32.92 20.7462 27.9112 22.3199C27.5245 22.4413 27.3095 22.8533 27.4311 23.24C27.5296 23.5534 27.8189 23.7541 28.131 23.7541Z" fill="white"/>
                <path d="M32.7474 18.1705C31.1102 18.3523 29.483 18.6949 27.9112 19.1888C27.5245 19.3102 27.3096 19.7221 27.431 20.1088C27.5295 20.4223 27.8189 20.6229 28.1309 20.6229C28.2038 20.6229 28.2779 20.6119 28.3511 20.589C29.8326 20.1235 31.3662 19.8006 32.9093 19.6292C33.3121 19.5844 33.6023 19.2216 33.5576 18.8188C33.5129 18.416 33.1497 18.1256 32.7474 18.1705Z" fill="white"/>
                <path d="M35.9478 19.485C38.2692 19.5217 40.5692 19.893 42.784 20.589C42.8572 20.6119 42.9312 20.623 43.0041 20.623C43.3162 20.623 43.6055 20.4223 43.704 20.1089C43.8255 19.7222 43.6105 19.3102 43.2239 19.1888C40.8741 18.4506 38.4338 18.0565 35.971 18.0176C35.5673 18.01 35.232 18.3345 35.2256 18.7397C35.2191 19.1449 35.5425 19.4786 35.9478 19.485Z" fill="white"/>
                <path d="M38.2261 16.5072C38.6289 16.5522 38.9918 16.2617 39.0365 15.8589C39.0813 15.4561 38.791 15.0932 38.3882 15.0485C34.841 14.6545 31.3159 14.9971 27.9112 16.0667C27.5245 16.1883 27.3096 16.6002 27.431 16.9868C27.5295 17.3003 27.8189 17.5009 28.1309 17.5009C28.2038 17.5009 28.2779 17.4899 28.3511 17.4669C31.5602 16.4587 34.8826 16.1359 38.2261 16.5072Z" fill="white"/>
                <path d="M43.2239 16.0667C42.6938 15.9002 42.1515 15.7491 41.6122 15.6178C41.2178 15.5219 40.8214 15.7634 40.7255 16.1571C40.6296 16.5509 40.8711 16.9479 41.2648 17.0438C41.7732 17.1676 42.2843 17.31 42.784 17.4669C42.8572 17.4899 42.9312 17.5009 43.0041 17.5009C43.3162 17.5009 43.6056 17.3002 43.704 16.9868C43.8255 16.6001 43.6106 16.1882 43.2239 16.0667Z" fill="white"/>
                <path d="M28.1309 14.3607C28.2038 14.3607 28.2779 14.3498 28.351 14.3268C28.8504 14.1698 29.3613 14.0276 29.8697 13.9037C30.2635 13.8078 30.505 13.4108 30.4091 13.017C30.3132 12.6232 29.9161 12.3818 29.5224 12.4777C28.9829 12.609 28.4409 12.7601 27.911 12.9265C27.5244 13.048 27.3095 13.46 27.4309 13.8466C27.5295 14.1601 27.8188 14.3607 28.1309 14.3607Z" fill="white"/>
                <path d="M32.9089 13.367C36.2525 12.9955 39.5748 13.3184 42.7839 14.3268C42.8571 14.3497 42.9312 14.3607 43.0041 14.3607C43.3161 14.3607 43.6055 14.16 43.704 13.8466C43.8254 13.4599 43.6105 13.048 43.2239 12.9266C39.8191 11.8568 36.2939 11.5141 32.7468 11.9084C32.3439 11.9531 32.0537 12.3159 32.0984 12.7187C32.1432 13.1215 32.5059 13.4119 32.9089 13.367Z" fill="white"/>
                <path d="M9.19376 31.0909C8.38143 31.2612 7.56802 31.4736 6.77614 31.7224C6.38945 31.844 6.17458 32.2559 6.29601 32.6425C6.39454 32.956 6.68387 33.1566 6.99591 33.1566C7.0688 33.1566 7.14288 33.1456 7.21607 33.1226C7.96244 32.8882 8.72918 32.6879 9.49473 32.5274C9.89141 32.4443 10.1456 32.0553 10.0624 31.6586C9.97927 31.262 9.59014 31.0079 9.19376 31.0909Z" fill="white"/>
                <path d="M21.8691 33.1565C22.1811 33.1565 22.4705 32.9558 22.569 32.6424C22.6904 32.2557 22.4754 31.8438 22.0888 31.7223C18.9506 30.7364 15.6964 30.3679 12.4172 30.6276C12.0132 30.6595 11.7116 31.0129 11.7435 31.417C11.7754 31.8211 12.1285 32.1228 12.533 32.0907C15.6241 31.8462 18.691 32.1933 21.6489 33.1226C21.7221 33.1456 21.7962 33.1565 21.8691 33.1565Z" fill="white"/>
                <path d="M6.99595 30.0163C7.06884 30.0163 7.14291 30.0053 7.2161 29.9823C11.9371 28.499 16.928 28.499 21.649 29.9823C22.0357 30.1036 22.4476 29.8888 22.569 29.5022C22.6905 29.1155 22.4755 28.7035 22.0889 28.5821C17.08 27.0084 11.7849 27.0084 6.77618 28.5821C6.38949 28.7035 6.17452 29.1155 6.29604 29.5022C6.39458 29.8156 6.68391 30.0163 6.99595 30.0163Z" fill="white"/>
                <path d="M6.99595 26.8942C7.06884 26.8942 7.14291 26.8832 7.2161 26.8602C9.92461 26.0092 12.7358 25.6457 15.5722 25.7803C15.979 25.7991 16.3207 25.4868 16.34 25.082C16.3592 24.6771 16.0465 24.3334 15.6416 24.3141C12.6322 24.1717 9.64986 24.5571 6.77618 25.4599C6.38949 25.5815 6.17452 25.9934 6.29604 26.38C6.39458 26.6937 6.68391 26.8942 6.99595 26.8942Z" fill="white"/>
                <path d="M18.61 26.1185C19.6342 26.299 20.6567 26.5486 21.649 26.8603C21.7223 26.8833 21.7962 26.8943 21.8691 26.8943C22.1812 26.8943 22.4706 26.6936 22.569 26.3802C22.6905 25.9935 22.4755 25.5815 22.0889 25.4601C21.0361 25.1294 19.9513 24.8646 18.8646 24.6731C18.4655 24.6028 18.0849 24.8694 18.0145 25.2685C17.9443 25.6675 18.2108 26.0482 18.61 26.1185Z" fill="white"/>
                <path d="M11.6123 18.1705C9.97516 18.3523 8.34796 18.6949 6.77614 19.1888C6.38945 19.3102 6.17458 19.7221 6.29601 20.1088C6.39454 20.4223 6.68387 20.6229 6.99591 20.6229C7.0688 20.6229 7.14288 20.6119 7.21607 20.5889C8.69757 20.1235 10.2312 19.8006 11.7743 19.6292C12.1771 19.5844 12.4673 19.2216 12.4226 18.8188C12.378 18.4161 12.0145 18.1256 11.6123 18.1705Z" fill="white"/>
                <path d="M6.29601 16.9868C6.39454 17.3003 6.68387 17.5009 6.99591 17.5009C7.0688 17.5009 7.14288 17.4899 7.21607 17.4669C10.4252 16.4586 13.7476 16.1358 17.0911 16.5071C17.4939 16.5521 17.8568 16.2616 17.9015 15.8588C17.9463 15.4559 17.656 15.0931 17.2531 15.0484C13.7059 14.6544 10.1809 14.9969 6.77614 16.0666C6.38945 16.1882 6.17458 16.6002 6.29601 16.9868Z" fill="white"/>
                <path d="M6.99588 14.3607C7.06877 14.3607 7.14284 14.3498 7.21603 14.3268C7.71535 14.1698 8.22631 14.0276 8.73472 13.9037C9.12846 13.8078 9.36995 13.4108 9.27406 13.017C9.17816 12.6232 8.7811 12.3818 8.38736 12.4777C7.84793 12.609 7.30586 12.7601 6.77601 12.9265C6.38942 13.048 6.17445 13.46 6.29588 13.8466C6.39451 14.1601 6.68384 14.3607 6.99588 14.3607Z" fill="white"/>
                <path d="M47.7006 12.5348H46.8689V10.1376C46.8689 9.8533 46.7047 9.59459 46.4475 9.47356C39.6368 6.26867 31.8403 6.22307 25 9.33178C18.1597 6.22307 10.3632 6.26876 3.55254 9.47356C3.2953 9.59459 3.13112 9.8533 3.13112 10.1376V12.5348H2.29941C1.03151 12.5348 0 13.5663 0 14.8342V40.6659C0 41.9338 1.03151 42.9653 2.29941 42.9653H47.7006C48.9685 42.9653 50 41.9338 50 40.6659V14.8342C50 13.5663 48.9685 12.5348 47.7006 12.5348ZM25.7339 23.4425C25.7339 23.4417 25.7339 23.4407 25.7339 23.4398V10.6082C32.0095 7.79929 39.1253 7.79929 45.4012 10.6082V13.2658C45.4012 13.2668 45.4011 13.2678 45.4011 13.2687C45.4011 13.2695 45.4012 13.2706 45.4012 13.2715V37.1891C42.2469 35.872 38.9069 35.2133 35.5675 35.2133C32.2281 35.2133 28.8881 35.872 25.7339 37.1891V23.4425ZM21.0372 9.43158C22.1318 9.74508 23.2111 10.1359 24.2661 10.6082V22.0737L23.0587 21.2687C22.8121 21.1043 22.4911 21.1043 22.2446 21.2687L21.0372 22.0737V9.43158ZM4.59883 13.2706C4.59883 13.2699 4.59892 13.2694 4.59892 13.2687C4.59892 13.268 4.59883 13.2675 4.59883 13.2668V10.6082C9.35059 8.48139 14.5838 7.96642 19.5695 9.06025V12.2751C16.9504 11.7365 14.2781 11.612 11.6117 11.9082C11.2089 11.9529 10.9187 12.3157 10.9634 12.7186C11.0082 13.1213 11.3706 13.4118 11.7738 13.3669C14.3871 13.0766 17.0066 13.2141 19.5694 13.7744V18.5382C18.0124 18.2188 16.4246 18.0424 14.8358 18.0174C14.4302 18.0098 14.0969 18.3343 14.0904 18.7395C14.0841 19.1448 14.4073 19.4785 14.8125 19.4849C16.4105 19.5102 18.0076 19.6967 19.5693 20.0375V21.6676C15.3238 20.7959 10.9205 21.0175 6.77593 22.3197C6.38924 22.4412 6.17436 22.8531 6.29579 23.2398C6.39433 23.5533 6.68366 23.7539 6.9957 23.7539C7.06859 23.7539 7.14266 23.7429 7.21585 23.7199C11.2186 22.4624 15.4769 22.2744 19.5693 23.1683V23.4447C19.5693 23.7153 19.7182 23.9641 19.9569 24.0917C20.1954 24.2194 20.485 24.2054 20.7102 24.0553L22.6515 22.761L24.2659 23.8374V37.189C21.1116 35.8719 17.7717 35.2132 14.4323 35.2132C11.0929 35.2132 7.75284 35.8719 4.59863 37.189V13.2706H4.59883ZM21.9178 41.4976H2.29941C1.8408 41.4976 1.46771 41.1245 1.46771 40.6659V14.8342C1.46771 14.3756 1.8408 14.0025 2.29941 14.0025H3.13112V38.3176V39.1004C3.13112 39.5056 3.45969 39.8342 3.86497 39.8342H21.9178V41.4976ZM5.60568 38.3665C11.2905 36.1225 17.5744 36.1224 23.2593 38.3665H5.60568ZM26.6145 41.4976H23.3855V39.8342H26.6145V41.4976ZM44.3943 38.3665H26.7407C32.4255 36.1225 38.7094 36.1225 44.3943 38.3665ZM48.5323 40.6659C48.5323 41.1245 48.1592 41.4976 47.7006 41.4976H28.0822V39.8342H46.135C46.5403 39.8342 46.8689 39.5056 46.8689 39.1004V38.3176V14.0025H47.7006C48.1592 14.0025 48.5323 14.3756 48.5323 14.8342V40.6659Z" fill="white"/>
                <path d="M30.3288 31.0909C29.5164 31.2612 28.703 31.4736 27.9112 31.7224C27.5245 31.844 27.3096 32.2559 27.431 32.6425C27.5295 32.956 27.8189 33.1566 28.1309 33.1566C28.2038 33.1566 28.2779 33.1456 28.3511 33.1226C29.0975 32.8882 29.8642 32.6879 30.6297 32.5274C31.0264 32.4443 31.2806 32.0553 31.1975 31.6586C31.1144 31.262 30.7251 31.0079 30.3288 31.0909Z" fill="white"/>
                <path d="M43.0041 33.1565C43.3161 33.1565 43.6055 32.9558 43.704 32.6424C43.8254 32.2557 43.6104 31.8438 43.2238 31.7223C40.0856 30.7364 36.8316 30.3679 33.5522 30.6276C33.1482 30.6595 32.8466 31.0129 32.8785 31.417C32.9104 31.8211 33.2636 32.1228 33.668 32.0907C36.759 31.8462 39.826 32.1933 42.7839 33.1226C42.8571 33.1456 42.9312 33.1565 43.0041 33.1565Z" fill="white"/>
                <path d="M28.131 30.0163C28.2038 30.0163 28.2779 30.0053 28.3511 29.9823C33.0721 28.499 38.063 28.499 42.784 29.9823C43.1707 30.1036 43.5826 29.8888 43.704 29.5022C43.8255 29.1155 43.6105 28.7035 43.2239 28.5821C38.215 27.0084 32.92 27.0084 27.9112 28.5821C27.5245 28.7035 27.3095 29.1155 27.4311 29.5022C27.5296 29.8156 27.8189 30.0163 28.131 30.0163Z" fill="white"/>
                <path d="M28.131 26.8942C28.2038 26.8942 28.2779 26.8832 28.3511 26.8602C31.0596 26.0092 33.8706 25.6457 36.7072 25.7803C37.113 25.7991 37.4558 25.4868 37.475 25.082C37.4942 24.6771 37.1815 24.3334 36.7766 24.3141C33.7675 24.1717 30.7849 24.5571 27.9112 25.4599C27.5245 25.5815 27.3095 25.9934 27.4311 26.38C27.5296 26.6937 27.8189 26.8942 28.131 26.8942Z" fill="white"/>
                <path d="M43.2239 25.4601C42.1711 25.1294 41.0864 24.8646 39.9997 24.6731C39.6004 24.6028 39.22 24.8694 39.1496 25.2685C39.0792 25.6676 39.3458 26.0483 39.745 26.1186C40.7691 26.2991 41.7916 26.5487 42.7839 26.8604C42.8572 26.8834 42.9312 26.8944 43.0041 26.8944C43.3161 26.8944 43.6055 26.6937 43.704 26.3803C43.8255 25.9935 43.6106 25.5815 43.2239 25.4601Z" fill="white"/>
                <path d="M28.131 23.7541C28.2038 23.7541 28.2779 23.7431 28.3511 23.7201C33.0721 22.2368 38.063 22.2368 42.784 23.7201C43.1707 23.8414 43.5826 23.6266 43.704 23.24C43.8255 22.8533 43.6105 22.4413 43.2239 22.3199C38.215 20.7462 32.92 20.7462 27.9112 22.3199C27.5245 22.4413 27.3095 22.8533 27.4311 23.24C27.5296 23.5534 27.8189 23.7541 28.131 23.7541Z" fill="white"/>
                <path d="M32.7474 18.1705C31.1102 18.3523 29.483 18.6949 27.9112 19.1888C27.5245 19.3102 27.3096 19.7221 27.431 20.1088C27.5295 20.4223 27.8189 20.6229 28.1309 20.6229C28.2038 20.6229 28.2779 20.6119 28.3511 20.589C29.8326 20.1235 31.3662 19.8006 32.9093 19.6292C33.3121 19.5844 33.6023 19.2216 33.5576 18.8188C33.5129 18.416 33.1497 18.1256 32.7474 18.1705Z" fill="white"/>
                <path d="M35.9478 19.485C38.2692 19.5217 40.5692 19.893 42.784 20.589C42.8572 20.6119 42.9312 20.623 43.0041 20.623C43.3162 20.623 43.6055 20.4223 43.704 20.1089C43.8255 19.7222 43.6105 19.3102 43.2239 19.1888C40.8741 18.4506 38.4338 18.0565 35.971 18.0176C35.5673 18.01 35.232 18.3345 35.2256 18.7397C35.2191 19.1449 35.5425 19.4786 35.9478 19.485Z" fill="white"/>
                <path d="M38.2261 16.5072C38.6289 16.5522 38.9918 16.2617 39.0365 15.8589C39.0813 15.4561 38.791 15.0932 38.3882 15.0485C34.841 14.6545 31.3159 14.9971 27.9112 16.0667C27.5245 16.1883 27.3096 16.6002 27.431 16.9868C27.5295 17.3003 27.8189 17.5009 28.1309 17.5009C28.2038 17.5009 28.2779 17.4899 28.3511 17.4669C31.5602 16.4587 34.8826 16.1359 38.2261 16.5072Z" fill="white"/>
                <path d="M43.2239 16.0667C42.6938 15.9002 42.1515 15.7491 41.6122 15.6178C41.2178 15.5219 40.8214 15.7634 40.7255 16.1571C40.6296 16.5509 40.8711 16.9479 41.2648 17.0438C41.7732 17.1676 42.2843 17.31 42.784 17.4669C42.8572 17.4899 42.9312 17.5009 43.0041 17.5009C43.3162 17.5009 43.6056 17.3002 43.704 16.9868C43.8255 16.6001 43.6106 16.1882 43.2239 16.0667Z" fill="white"/>
                <path d="M28.1309 14.3607C28.2038 14.3607 28.2779 14.3498 28.351 14.3268C28.8504 14.1698 29.3613 14.0276 29.8697 13.9037C30.2635 13.8078 30.505 13.4108 30.4091 13.017C30.3132 12.6232 29.9161 12.3818 29.5224 12.4777C28.9829 12.609 28.4409 12.7601 27.911 12.9265C27.5244 13.048 27.3095 13.46 27.4309 13.8466C27.5295 14.1601 27.8188 14.3607 28.1309 14.3607Z" fill="white"/>
                <path d="M32.9089 13.367C36.2525 12.9955 39.5748 13.3184 42.7839 14.3268C42.8571 14.3497 42.9312 14.3607 43.0041 14.3607C43.3161 14.3607 43.6055 14.16 43.704 13.8466C43.8254 13.4599 43.6105 13.048 43.2239 12.9266C39.8191 11.8568 36.2939 11.5141 32.7468 11.9084C32.3439 11.9531 32.0537 12.3159 32.0984 12.7187C32.1432 13.1215 32.5059 13.4119 32.9089 13.367Z" fill="white"/>
                <path d="M9.19376 31.0909C8.38143 31.2612 7.56802 31.4736 6.77614 31.7224C6.38945 31.844 6.17458 32.2559 6.29601 32.6425C6.39454 32.956 6.68387 33.1566 6.99591 33.1566C7.0688 33.1566 7.14288 33.1456 7.21607 33.1226C7.96244 32.8882 8.72918 32.6879 9.49473 32.5274C9.89141 32.4443 10.1456 32.0553 10.0624 31.6586C9.97927 31.262 9.59014 31.0079 9.19376 31.0909Z" fill="white"/>
                <path d="M21.8691 33.1565C22.1811 33.1565 22.4705 32.9558 22.569 32.6424C22.6904 32.2557 22.4754 31.8438 22.0888 31.7223C18.9506 30.7364 15.6964 30.3679 12.4172 30.6276C12.0132 30.6595 11.7116 31.0129 11.7435 31.417C11.7754 31.8211 12.1285 32.1228 12.533 32.0907C15.6241 31.8462 18.691 32.1933 21.6489 33.1226C21.7221 33.1456 21.7962 33.1565 21.8691 33.1565Z" fill="white"/>
                <path d="M6.99595 30.0163C7.06884 30.0163 7.14291 30.0053 7.2161 29.9823C11.9371 28.499 16.928 28.499 21.649 29.9823C22.0357 30.1036 22.4476 29.8888 22.569 29.5022C22.6905 29.1155 22.4755 28.7035 22.0889 28.5821C17.08 27.0084 11.7849 27.0084 6.77618 28.5821C6.38949 28.7035 6.17452 29.1155 6.29604 29.5022C6.39458 29.8156 6.68391 30.0163 6.99595 30.0163Z" fill="white"/>
                <path d="M6.99595 26.8942C7.06884 26.8942 7.14291 26.8832 7.2161 26.8602C9.92461 26.0092 12.7358 25.6457 15.5722 25.7803C15.979 25.7991 16.3207 25.4868 16.34 25.082C16.3592 24.6771 16.0465 24.3334 15.6416 24.3141C12.6322 24.1717 9.64986 24.5571 6.77618 25.4599C6.38949 25.5815 6.17452 25.9934 6.29604 26.38C6.39458 26.6937 6.68391 26.8942 6.99595 26.8942Z" fill="white"/>
                <path d="M18.61 26.1185C19.6342 26.299 20.6567 26.5486 21.649 26.8603C21.7223 26.8833 21.7962 26.8943 21.8691 26.8943C22.1812 26.8943 22.4706 26.6936 22.569 26.3802C22.6905 25.9935 22.4755 25.5815 22.0889 25.4601C21.0361 25.1294 19.9513 24.8646 18.8646 24.6731C18.4655 24.6028 18.0849 24.8694 18.0145 25.2685C17.9443 25.6675 18.2108 26.0482 18.61 26.1185Z" fill="white"/>
                <path d="M11.6123 18.1705C9.97516 18.3523 8.34796 18.6949 6.77614 19.1888C6.38945 19.3102 6.17458 19.7221 6.29601 20.1088C6.39454 20.4223 6.68387 20.6229 6.99591 20.6229C7.0688 20.6229 7.14288 20.6119 7.21607 20.5889C8.69757 20.1235 10.2312 19.8006 11.7743 19.6292C12.1771 19.5844 12.4673 19.2216 12.4226 18.8188C12.378 18.4161 12.0145 18.1256 11.6123 18.1705Z" fill="white"/>
                <path d="M6.29601 16.9868C6.39454 17.3003 6.68387 17.5009 6.99591 17.5009C7.0688 17.5009 7.14288 17.4899 7.21607 17.4669C10.4252 16.4586 13.7476 16.1358 17.0911 16.5071C17.4939 16.5521 17.8568 16.2616 17.9015 15.8588C17.9463 15.4559 17.656 15.0931 17.2531 15.0484C13.7059 14.6544 10.1809 14.9969 6.77614 16.0666C6.38945 16.1882 6.17458 16.6002 6.29601 16.9868Z" fill="white"/>
                <path d="M6.99588 14.3607C7.06877 14.3607 7.14284 14.3498 7.21603 14.3268C7.71535 14.1698 8.22631 14.0276 8.73472 13.9037C9.12846 13.8078 9.36995 13.4108 9.27406 13.017C9.17816 12.6232 8.7811 12.3818 8.38736 12.4777C7.84793 12.609 7.30586 12.7601 6.77601 12.9265C6.38942 13.048 6.17445 13.46 6.29588 13.8466C6.39451 14.1601 6.68384 14.3607 6.99588 14.3607Z" fill="white"/>
            </g>
            <defs>
                <clipPath id="clip0_32_543">
                <rect width="50" height="50" fill="white"/>
                </clipPath>
            </defs>
            </svg>
        </div>
    </footer>
</body>
</html>

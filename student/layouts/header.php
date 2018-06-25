<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./admin.php">
                    <?php
                    switch ($_SESSION['type']) {
                        case 1:
                            echo "学生查询页面";
                            break;
                        case 2:
                            echo "教师管理页面";
                            break;
                        default:
                            echo "管理员页面";
                    }
                    ?>
                </a>
                <p class="navbar-text"><span class="glyphicon glyphicon-user"></span>
                    <?php echo $_SESSION['name']; ?>
                </p>

            </div>
            <div class="navbar-header navbar-right">
                <p class="navbar-text"><a href="../logout.php" class="navbar-link "><span class="glyphicon glyphicon-off"></span> 退出登录</a></p>
            </div>

        </div>
    </nav>
</div>

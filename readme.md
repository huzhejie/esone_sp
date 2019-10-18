环境搭建
==
该运行环境的说明建立在Ubuntu 16.04系统的基础上, 搭建任务主要分为4部分, Apache2, Mysql, php和wordpress。
***
Apache2
--
    sudo apt-get install apache2

该命令行安装完成后，可以使用下列命令查看是否安装成功

    sudo netstat -tap | grep apache2
    
然后使用下列命令将/var/www/html/目录文件清空

    sudo rm -rf /var/www/html/*

需要对apache2进行rewrite操作，对/etc/apache2/sites-available/000-default.conf进行修改

    DirectoryIndex index.html index.php//添加这部分
    <Directory /var/www/html>
           allow from all
           Options Indexes FollowSymLinks MultiViews
           AllowOverride All
           Require all granted 
    </Directory> //这部分这么修改，其余部分不变    
    
最后在/var/www/html/目录下  
    
    sudo vi .htaccess

如果没有该文件就创建一个，然后输入如下内容后保存
    
    RewriteEngine On
    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php?[QSA,L]
 
***
MySQL
--
    sudo apt-get install mysql-server mysql-client

安装的时候会提示你输入mysql管理员的密码，安装完成后仍使用下列命令查看是否安装完成

    sudo netstat -tap | grep mysql
***
PHP 7.0
--
    sudo apt-get install php php-mysql libapache2-mod-php php-gb php-cli php-xml php-mcrypt php-zip php-mbstring

安装完成以后可以使用下列命令修改php默认配置 (可选)
    
    sudo vi /etc/php/7.0/apache2/php.ini
    
然后对下列配置进行修改

    file_uploads = On
    allow_url_fopen = On
    memory_limit = 256M
    upload_max_filesize = 100M
    max_execution_time = 360
***    
Wordpress
--
首先从phpadmin上导出sql文件(此处略)，重命名为local.sql

使用以下命令，登陆mysql数据库:
    
    mysql -uroot -p(你的密码)
    
使用以下命令来看当前拥有的数据库:
    
    show databases;
    
使用以下命令来创建一个数据库并退出mysql命令行模式:

    create database db_local;
    quit;

使用以下命令来导入数据库：
    
    mysql -h localhost -uroot -p(你的密码) db_local -d > 目录\local.sql
    
导入后可以再进入mysql命令行模式进入当前的db_local

    use db_local;
    show tables;（不为空则已成功导入）
    
接下来就是将打包项目源码文件解压，在disc2/esone/目录下找到wp-config.php文件，将里面的前几行关于数据库的名字，登陆名和密码修改成相应本地的设置，保存修改后将esone目录下所有的文件放入/var/www/html下。

最后一步，为了能在本地调试代码，将数据库中hou_option表中的option_name为siteurl的option_value改为

    http://localhost

将hou_option中的option_name为home的option_value改为
    
    http://localhost/html
    
然后打开chrome，输入localhost/html，页面正常显示则配置成功。
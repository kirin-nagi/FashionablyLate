＃お問い合わせフォーム
***

##環境構築

###Dockerビルド
１，git clone リンク
２．docker-compose up -d --build

###Laravel環境構築
１，docker-compose exec php bash
２，composer install
３，.env.exampleファイルから.envを作成し、環境変数を変更
４，php artisan key:generate
５，php artisan migrate

###使用技術
１，Laravel 8.83.8
２，PHP 8.4.4
３，MySQL 8.0

###URL
・環境開発：  http://localhost/
・phpMyAdmin:  http://localhost:8080/

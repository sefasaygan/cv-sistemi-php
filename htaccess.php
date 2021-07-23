Options +FollowSymLinks
RewriteEngine On
RewriteBase /github/cv-sitesi


RewriteRule ^kaydol$    kaydol.php [L,NC]
RewriteRule ^giris$    giris.php [L,NC]
RewriteRule ^cikis$    cikis.php [L,NC]
RewriteRule ^cvekle$    ekle.php [L,NC]
RewriteRule ^([0-9a-zA-Z-_]+)$  index.php?yaz=$1 [L,QSA]